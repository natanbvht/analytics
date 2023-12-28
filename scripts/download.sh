#!/bin/bash

# download matomo latest into src/ directory
download() {
    echo "Downloading matomo..."
    curl -L -o matomo.zip https://builds.matomo.org/matomo.zip
    unzip matomo.zip
    rm matomo.zip
    mv matomo src
    rm *.html
}

main() {
    download
}

main
