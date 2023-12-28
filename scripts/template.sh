#!/bin/bash

# This is an instance initialization script that installs and configures the Matomo Analytics instance.

# Log file path
LOG_FILE="./init.log"
COMPLETION_FILE="./init.txt"
START_TIME=$(date +%s)

NGNIX_MATOMO_CONFIG=$(
    cat <<'EOF'
server {
    listen [::]:80;
    listen 80;
    server_name analytics.metaintro.net;

    access_log /var/log/nginx/matomo.access.log;
    error_log /var/log/nginx/matomo.error.log;

    root /var/www/matomo/; 
    
    index index.php;
    
    location /health {
        # Return a 200 OK status code
        default_type application/json;  # Ensure the content is treated as JSON
        return 200 '{ "status": "success" }';
    }

    ## only allow accessing the following php files
    location ~ ^/(index|matomo|piwik|js/index).php {
        include snippets/fastcgi-php.conf;
        fastcgi_param HTTP_PROXY ""; # prohibit httpoxy: https://httpoxy.org/
        fastcgi_pass unix:/run/php/php8.1-fpm.sock; 
    }
    
    ## needed for HeatmapSessionRecording plugin
    location = /plugins/HeatmapSessionRecording/configs.php { 
        include snippets/fastcgi-php.conf;
        fastcgi_param HTTP_PROXY "";
        fastcgi_pass unix:/run/php/php8.1-fpm.sock; 
    }
    
    ## deny access to all other .php files
    location ~* ^.+\.php$ {
        deny all;
        return 403;
    }

    ## serve all other files normally 
    location / {
        try_files $uri $uri/ =404;
    }
    
    ## disable all access to the following directories 
    location ~ /(config|tmp|core|lang) {
        deny all;
        return 403; # replace with 404 to not show these directories exist
    }
    location ~ /\.ht {
        deny  all;
        return 403;
    }

    location ~ \.(gif|ico|jpg|png|svg|js|css|htm|html|mp3|mp4|wav|ogg|avi|ttf|eot|woff|woff2|json)$ {
        allow all;
        ## Cache images,CSS,JS and webfonts for an hour
        ## Increasing the duration may improve the load-time, but may cause old files to show after an Matomo upgrade
        expires 1h;
        add_header Pragma public;
        add_header Cache-Control "public";
    }

    location ~ /(libs|vendor|plugins|misc/user) {
        deny all;
        return 403;
    }

    ## properly display textfiles in root directory
    location ~/(.*\.md|LEGALNOTICE|LICENSE) {
        default_type text/plain;
    }
}
EOF
)

NGNIX_DEFAULT_CONFIG=$(
    cat <<'EOF'
server {
	listen 80 default_server;
	listen [::]:80 default_server;

	root /var/www/html;

	index index.html index.htm index.nginx-debian.html;

	server_name _;

    location /health {
        # Return a 200 OK status code
        default_type application/json;  # Ensure the content is treated as JSON
        return 200 '{ "status": "success" }';
    }
	
	location / {
		# First attempt to serve request as file, then
		# as directory, then fall back to displaying a 404.
		try_files $uri $uri/ =404;
	}
}
EOF
)

# Function to write log messages
log() {
    local timestamp=$(date +'%Y-%m-%d %H:%M:%S')
    local caller_name=${FUNCNAME[1]}
    local message="$1"

    echo "[$timestamp] [$caller_name] $message" >>"$LOG_FILE"
    echo "[$timestamp] [$caller_name] $message"
}

# Function to log error messages and exit with a non-zero status
logErrorExit() {
    log "ERROR: $1"
    exit 1
}

# Function to update the packages
updatePackages() {
    local start_time=$(date +%s)
    log "Updating the packages..." "updatePackages"
    {
        apt update -y &&
            apt upgrade -y
    } >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to update the packages."
    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "updatePackages execution duration: $duration seconds" "updatePackages"
}

# Function to install the CodeDeploy agent
installCodeDeployAgent() {
    local start_time=$(date +%s)
    log "Installing the CodeDeploy agent..." "installCodeDeployAgent"

    # Check if CodeDeploy agent is already installed
    if service codedeploy-agent status | grep -q "Active: active (running)"; then
        log "CodeDeploy agent is already installed. Skipping installation." "installCodeDeployAgent"
    else
        {
            apt install ruby curl wget gnupg -y &&
                apt update -y &&
                curl -s https://aws-codedeploy-us-west-2.s3.us-west-2.amazonaws.com/latest/install -o install &&
                chmod +x install &&
                ./install auto
        } >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to install the CodeDeploy agent."
    fi

    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "installCodeDeployAgent execution duration: $duration seconds" "installCodeDeployAgent"
}

# Function to start the CodeDeploy agent service
startCodeDeployAgentService() {
    local start_time=$(date +%s)
    log "Starting the CodeDeploy agent service..." "startCodeDeployAgentService"
    service codedeploy-agent start >>"$LOG_FILE" 2>&1 &&
        update-rc.d codedeploy-agent defaults >>"$LOG_FILE" 2>&1 ||
        logErrorExit "Failed to start the CodeDeploy agent service."
    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "startCodeDeployAgentService execution duration: $duration seconds" "startCodeDeployAgentService"
}

# Function to install AWS CLI
installAwsCli() {
    local start_time=$(date +%s)
    log "Installing AWS CLI..." "installAwsCli"

    # Check if AWS CLI is already installed
    if command -v aws &>/dev/null; then
        log "AWS CLI is already installed. Skipping installation." "installAwsCli"
    else
        sudo apt install awscli -y >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to install AWS CLI."
    fi

    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "installAwsCli execution duration: $duration seconds" "installAwsCli"
}

# Install Php and dependencies
installPhp() {
    local start_time=$(date +%s)
    log "Installing PHP..." "installPhp"

    # Check if PHP is already installed
    if command -v php &>/dev/null; then
        log "PHP is already installed. Skipping installation." "installPhp"
    else
        sudo DEBIAN_FRONTEND=noninteractive apt install -y php-imagick php8.1 php8.1-mysql php8.1-fpm php8.1-common php8.1-gd php8.1-curl php8.1-zip php8.1-xml php8.1-mbstring php8.1-bz2 php8.1-intl php8.1-bcmath php8.1-redis >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to install PHP."
    fi

    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "installPhp execution duration: $duration seconds" "installPhp"
}

# Install NGINX no interactive
installNginx() {
    local start_time=$(date +%s)
    log "Installing NGINX..." "installNginx"

    # Check if NGINX is already installed
    if command -v nginx &>/dev/null; then
        log "NGINX is already installed. Skipping installation." "installNginx"
    else
        sudo DEBIAN_FRONTEND=noninteractive apt-get install -y nginx >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to install NGINX."
    fi

    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "installNginx execution duration: $duration seconds" "installNginx"
}

# Set premisions for NGINX and copy config file
setNginxPermissionsAndConfig() {
    local start_time=$(date +%s)
    log "Setting NGINX permissions..." "setNginxPermissions"

    # Set ownership and permissions for NGINX directories
    sudo chown -R www-data:www-data /var/lib/nginx >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to set ownership for NGINX."
    sudo chown -R www-data:www-data /var/www/matomo >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to set ownership for Matomo."
    sudo chmod -R 755 /var/lib/nginx >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to set permissions for NGINX."

    # Overwrite the default NGINX configuration file
    echo "$NGNIX_DEFAULT_CONFIG" | sudo tee /etc/nginx/sites-available/default >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to write NGINX config file."

    # Write the Matomo NGINX configuration to the appropriate directory
    echo "$NGNIX_MATOMO_CONFIG" | sudo tee /etc/nginx/sites-available/matomo.conf >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to write NGINX config file for Matomo."

    # Create a symlink in the sites-enabled directory to enable the site
    sudo ln -s /etc/nginx/sites-available/matomo.conf /etc/nginx/sites-enabled/ >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to create symlink for NGINX config file."

    # Test the NGINX configuration for syntax errors
    sudo nginx -t >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to test NGINX config file."

    # Restart NGINX to apply changes
    sudo systemctl restart nginx >>"$LOG_FILE" 2>&1 || logErrorExit "Failed to restart NGINX."

    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "setNginxPermissions execution duration: $duration seconds" "setNginxPermissions"
}

# Function to display versions
displayVersions() {
    local start_time=$(date +%s)

    log "AWS CLI version: $(aws --version)" "displayVersions"
    log "CodeDeploy agent version: $(dpkg -s codedeploy-agent | grep Version)" "displayVersions"
    log "NGINX version: $(nginx -v 2>&1)" "displayVersions"

    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "displayVersions execution duration: $duration seconds" "displayVersions"
}

# Function to create the completion file
createCompletionFile() {
    local start_time=$(date +%s)
    log "Initialization completed. Created the completion file: $COMPLETION_FILE" "createCompletionFile"
    touch "$COMPLETION_FILE" || logErrorExit "Failed to create the completion file."
    echo "STATUS=SUCCESS" >>"$COMPLETION_FILE" || logErrorExit "Failed to write STATUS to the completion file."
    chmod a+r "$COMPLETION_FILE" || logErrorExit "Failed to set read permissions for the completion file."
    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "createCompletionFile execution duration: $duration seconds" "createCompletionFile"
}

# Create non root user
createNonRootUserMatomo() {
    local start_time=$(date +%s)
    log "Creating non-root user..." "createNonRootUser"

    sudo useradd -m -s /bin/bash matomo
    sudo usermod -aG sudo matomo

    local end_time=$(date +%s)
    local duration=$((end_time - start_time))
    log "createNonRootUser execution duration: $duration seconds" "createNonRootUser"
}

# Main function
main() {
    log "Initialization script started." "main"

    # Create and set permissions for the log file
    touch "$LOG_FILE" || logErrorExit "Failed to create the log file."
    chmod 777 "$LOG_FILE" || logErrorExit "Failed to set permissions for the log file."

    # Execute the functions in the desired order
    updatePackages
    installCodeDeployAgent
    startCodeDeployAgentService
    installAwsCli
    installNginx
    setNginxPermissionsAndConfig
    displayVersions
    createNonRootUserMatomo

    # Create the completion file
    createCompletionFile

    # Calculate the overall script execution duration
    local end_time=$(date +%s)
    local duration=$((end_time - START_TIME))
    log "Initialization script completed. Overall execution duration: $duration seconds" "main"
}

# Execute the main function
main

exit 0
