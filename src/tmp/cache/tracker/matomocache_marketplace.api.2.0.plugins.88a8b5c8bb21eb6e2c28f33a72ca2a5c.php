<?php return unserialize('a:2:{s:8:"lifetime";i:1703745712;s:4:"data";a:1:{s:7:"plugins";a:96:{i:0;a:31:{s:4:"name";s:10:"AjaxOptOut";s:11:"displayName";s:12:"Ajax Opt Out";s:5:"owner";s:8:"lippoliv";s:11:"description";s:151:"Provide endpoints to opt-out, opt-in or get status of visitors tracking. So you can implement a custom HTML, CSS and JS to realize custom-style tracki.";s:8:"homepage";s:49:"https://lw-scm.de/lipperts-web/piwik-ajax-opt-out";s:15:"createdDateTime";s:19:"2016-12-24 23:06:02";s:6:"donate";a:2:{s:6:"paypal";s:20:"info@lipperts-web.de";s:7:"bitcoin";N;}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:13:"Documentation";s:3:"key";s:4:"docs";s:5:"value";s:81:"https://lw-scm.de/lipperts-web/piwik-ajax-opt-out/-/tree/master/src/docs/index.md";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:96:"incoming+lipperts-web-piwik-ajax-opt-out-108-f1oh7ioy6ohhkbtnmyaki2blv-issue@git.lipperts-web.de";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:58:"https://lw-scm.de/lipperts-web/piwik-ajax-opt-out/-/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:63:"https://lw-scm.de/lipperts-web/piwik-ajax-opt-out/-/tree/master";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:8:"tracking";i:1;s:7:"opt out";i:2;s:6:"opt in";i:3;s:4:"ajax";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Lipperts WEB";s:5:"email";s:20:"info@lipperts-web.de";s:8:"homepage";s:23:"https://lipperts-web.de";}}s:13:"repositoryUrl";s:51:"https://github.com/lippoliv/piwik-plugin-ajaxoptout";s:11:"lastUpdated";s:19:"2023-12-27 08:38:02";s:13:"latestVersion";s:5:"1.5.0";s:12:"numDownloads";i:28326;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"18";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-12-27 08:36:58";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"1.5.0";s:7:"release";s:19:"2023-12-27 08:38:02";s:8:"requires";a:2:{s:5:"piwik";s:14:">=3.0.0,<6.0.0";s:3:"php";s:7:">=5.6.0";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:95;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:65:"https://github.com/lippoliv/piwik-plugin-ajaxoptout/commits/1.5.0";s:10:"readmeHtml";a:4:{s:11:"description";s:1129:"

<p>Matomo supports an opt out iframe, which may supports your needs. But in some cases it is more handy to realize opt out
/ opt in via ajax requests and with no iframes. May due to security reasons.</p>

<p>I had such a project and implemented this nice small plugin which offers you three new API URLs:</p>

<ol>
<li><code>your.piwik/index.php?module=API&amp;method=AjaxOptOut.isTracked</code>
You will get an Response whether the current user get\'s tracked or not.</li>
<li><code>your.piwik/index.php?module=API&amp;method=AjaxOptOut.doIgnore</code>
Matomo will set the ignore cookie for the current user.</li>
<li><code>your.piwik/index.php?module=API&amp;method=AjaxOptOut.doTrack</code>
Matomo will remove the ignore cookie for the current user.</li>
</ol>

<p>You have to use JSONP Requests, as of the AJAX requests needs to manipulate the cookies.</p>

<p>This plugin is for free, feel free to spend me a coffee and send me your feedback. Further information you can find in
Matomo marketplace.</p>

<p><a href="https://lw-scm.de/lipperts-web/piwik-ajax-opt-out/-/blob/master/README.md">More Informatione here</a></p>

";s:3:"faq";s:703:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Does this plugin provide an UI?</strong></p>

<p>No. This plugin just provides API endpoints.</p>

<p><strong>Is this plugin under support?</strong></p>

<p>Yes. Please review the support options in the <a href="https://plugins.matomo.org/AjaxOptOut">marketplace</a>.</p>

<p><strong>Is there some alternative to jQuery?</strong></p>

<p>Yes for sure. This Plugin is just an API which you can call from wherever you like.
For example <a href="https://github.com/inventage/matomo-opt-out">here you can find a web component</a> to leverege this plugins
API.</p>";s:13:"documentation";s:2070:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>Some years ago I worked as an senior web developer for some cool agency. We wanted to level up the typical german opt
out from tracking game by some nice website overlay. Therefor we needed ajax endpoints in piwik / matomo to take control
over the ignore cookie.</p>

<h2>Respect open source community</h2>

<p>After 2016 the development stuck. Plugin worked, no changes needed. But this is not how open source works.</p>

<p>When Matomo 4 came out, I feared to update my on-premise instance because this plugin maybe doesn\'t work. Stupid right?</p>

<p>So in 2021 <strong>I investigated a significant effort in test automation</strong> for my matomo plugins. Right now, the logic of
this plugin is covered by integration tests which will run against all supported Matomo versions. In addition to run
those tests against my code changes, I run them once a week against the newest developments so in case of problems, I
get notified by CI/CD instead of you.</p>

<h2>GitHub is a mirror</h2>

<p>For the Matomo marketplace it is needed to have a GitHub project hosting the code.</p>

<p>Even if for this plugin there is a GitHub project, it is just a kind of mirror to my GitLab project. Changes are
automatically pushed to GitHub, also releases will be automaticcally be created.</p>

<p>Feel free to fork my GitHub project. Even if I do not accept pull requests, I\'m looking forward to take over your
changes manually.</p>

<h2>What\'s tested?</h2>

<p>This plugin is tested by using <a href="https://docs.gitlab.com/ce/ci/">GitLab CI</a>.</p>

<h3>PHP compatibility</h3>

<p>I make sure all code changes are compatible to:</p>

<ul>
<li>php 8.0</li>
<li>php 7.4</li>
<li>php 7.3</li>
<li>php 7.2</li>
<li>php 7.1</li>
<li>php 7.0</li>
<li>php 5.6</li>
</ul>

<h3>Integration with Matomo</h3>

<p>I make sure that the plugin works as expected with this Matomo versions:</p>

<ul>
<li>newest Matomo 3</li>
<li>newest Matomo 4</li>
</ul>";s:9:"changelog";s:657:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>1.5.0 Support Matomo 5, Ensure to support PHP 8</li>
<li>1.4.0 FIX call doIgnore second time will enable tracking again, Mention web component in FAQ, Fix some jQuery demo
issues</li>
<li>1.3.1 Updated Changelog for release 1.3.0</li>
<li>1.3.0 Matomo 4 support, Update documentation and faq</li>
<li>1.2.1 Optimize Plugin page</li>
<li>1.2.0 Added jQuery Demo</li>
<li>1.1.2 FIX JSON error</li>
<li>1.1.1 PIWIK 3.0.0</li>
<li>1.1.0 Prepare for Marketplace</li>
<li>1.0.0 Initial Release for PIWIK 2.15.0</li>
</ul>";}s:8:"download";s:42:"/api/2.0/plugins/AjaxOptOut/download/1.5.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:63:"https://plugins.matomo.org/AjaxOptOut/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:1;a:31:{s:4:"name";s:15:"DisableTracking";s:11:"displayName";s:16:"Disable Tracking";s:5:"owner";s:8:"lippoliv";s:11:"description";s:90:"Disable tracking for specific sites without removing the tracking code or losing the data.";s:8:"homepage";s:59:"https://lw-scm.de/lipperts-web/piwik-plugin-disabletracking";s:15:"createdDateTime";s:19:"2016-12-23 11:04:03";s:6:"donate";a:2:{s:6:"paypal";s:20:"info@lipperts-web.de";s:7:"bitcoin";N;}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:13:"Documentation";s:3:"key";s:4:"docs";s:5:"value";s:91:"https://lw-scm.de/lipperts-web/piwik-plugin-disabletracking/-/blob/master/src/docs/index.md";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:81:"incoming+lipperts-web-piwik-plugin-disabletracking-148-issue-@git.lipperts-web.de";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:68:"https://lw-scm.de/lipperts-web/piwik-plugin-disabletracking/-/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:73:"https://lw-scm.de/lipperts-web/piwik-plugin-disabletracking/-/tree/master";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:8:"tracking";i:1;s:7:"disable";i:2;s:4:"site";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Lipperts WEB";s:5:"email";s:20:"info@lipperts-web.de";s:8:"homepage";s:23:"https://lipperts-web.de";}}s:13:"repositoryUrl";s:56:"https://github.com/lippoliv/piwik-plugin-disabletracking";s:11:"lastUpdated";s:19:"2023-12-25 11:22:03";s:13:"latestVersion";s:5:"1.3.0";s:12:"numDownloads";i:15360;s:11:"screenshots";a:1:{i:0;s:70:"https://plugins.matomo.org/DisableTracking/images/1.3.0/Admin_View.jpg";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"24";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-12-25 11:21:01";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"1.3.0";s:7:"release";s:19:"2023-12-25 11:22:03";s:8:"requires";a:2:{s:5:"piwik";s:14:">=3.0.0,<6.0.0";s:3:"php";s:7:">=5.6.0";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:122;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:70:"https://github.com/lippoliv/piwik-plugin-disabletracking/commits/1.3.0";s:10:"readmeHtml";a:4:{s:11:"description";s:361:"

<p>In some cases it\'s pretty handy to disable tracking for selected websites of your Matomo instance, even for a short
timespan or forever. Working this way you can keep the collected data for later reporting.</p>

<p>This plugin is for free, feel free to spend me a coffe and send me your feedback. Further information you can find in
Matomo marketplace.</p>";s:3:"faq";s:471:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Will this plugin disable all site tracking initially?</strong></p>

<p>No.</p>

<p><strong>Does this plugin provide an API?</strong></p>

<p>No.</p>

<p><strong>Is this plugin under support?</strong></p>

<p>Yes. Please review the support options in the <a href="https://plugins.matomo.org/DisableTracking">marketplace</a>.</p>";s:13:"documentation";s:2030:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>For some customers I provide access to my on-premise Matomo. Every now and then, I need to block new data to come in,
but still provide access to already existing data. So in 2016, I developed this plugin for personal reasons.</p>

<h2>Respect open source community</h2>

<p>After 2016 the development stuck. Plugin worked, no changes needed. But this is not how open source works.</p>

<p>When Matomo 4 came out, I feared to update my on-premise instance because this plugin maybe doe not work. Stupid right?</p>

<p>So in 2021 <strong>I investigated a significant effort in test automation</strong> for this plugin. Right now, the logic of this
plugin is covered by integration tests which will run against all supported Matomo versions. In addition to run those
tests against my code changes, I run them once a week against newest developments so in case of problems, I get notified
by CI/CD instead of you.</p>

<h2>GitHub is a mirror</h2>

<p>For the Matomo marketplace it is needed to have a GitHub project hosting the code.</p>

<p>Even if for this plugin there is a GitHub project, it is just a kind of mirror to my GitLab project. Changes are
automatically pushed to GitHub, also releases will be automaticcally be created.</p>

<p>Feel free to still fork my GitHub project, even if I do not accept pull requests. I\'m looking forward to take over your
changes manually.</p>

<h2>What\'s tested?</h2>

<p>This plugin is tested by using <a href="https://docs.gitlab.com/ce/ci/">GitLab CI</a>.</p>

<h3>PHP compatibility</h3>

<p>I make sure all code changes are compatible to:</p>

<ul>
<li>php 8.0</li>
<li>php 7.4</li>
<li>php 7.3</li>
<li>php 7.2</li>
<li>php 7.1</li>
<li>php 7.0</li>
<li>php 5.6</li>
</ul>

<h3>Integration with Matomo</h3>

<p>I make sure that the plugin works as expected with this Matomo versions:</p>

<ul>
<li>newest Matomo 3</li>
<li>newest Matomo 4</li>
</ul>";s:9:"changelog";s:518:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>1.3.0 Support Matomo 5, Support PHP 8</li>
<li>1.2.0 Security update (SQL Injection), add german translation, update documentation and faq</li>
<li>1.1.1 Update plugin metadata</li>
<li>1.1.0 Support Matomo 4</li>
<li>1.0.3 BUGFIX: Checking for ADMIN Permission</li>
<li>1.0.2 Version number set</li>
<li>1.0.1 Prepare for Marketplace</li>
<li>1.0.0 Initial release</li>
</ul>";}s:8:"download";s:47:"/api/2.0/plugins/DisableTracking/download/1.3.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:68:"https://plugins.matomo.org/DisableTracking/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:2;a:31:{s:4:"name";s:16:"PerformanceAudit";s:11:"displayName";s:17:"Performance Audit";s:5:"owner";s:9:"DevDavido";s:11:"description";s:53:"Daily performance audits of all your sites in Matomo.";s:8:"homepage";s:53:"https://github.com/DevDavido/performance-audit-plugin";s:15:"createdDateTime";s:19:"2020-07-20 11:06:03";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:27:"github{at}diskoboss{døt}de";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:60:"https://github.com/DevDavido/performance-audit-plugin/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:14:{i:0;s:6:"Report";i:1;s:11:"performance";i:2;s:7:"monitor";i:3;s:5:"audit";i:4;s:7:"measure";i:5;s:10:"lighthouse";i:6;s:22:"first contentful paint";i:7;s:11:"speed index";i:8;s:24:"largest contentful paint";i:9;s:11:"interactive";i:10;s:19:"time to interactive";i:11;s:19:"total blocking time";i:12;s:23:"cumulative layout shift";i:13;s:10:"web vitals";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:9:"DevDavido";s:5:"email";N;s:8:"homepage";s:28:"https://github.com/DevDavido";}}s:13:"repositoryUrl";s:53:"https://github.com/DevDavido/performance-audit-plugin";s:11:"lastUpdated";s:19:"2023-12-24 23:10:04";s:13:"latestVersion";s:5:"3.1.0";s:12:"numDownloads";i:13317;s:11:"screenshots";a:6:{i:0;s:70:"https://plugins.matomo.org/PerformanceAudit/images/3.1.0/Dashboard.png";i:1;s:81:"https://plugins.matomo.org/PerformanceAudit/images/3.1.0/FirstContentfulPaint.png";i:2;s:74:"https://plugins.matomo.org/PerformanceAudit/images/3.1.0/OverallScores.png";i:3;s:85:"https://plugins.matomo.org/PerformanceAudit/images/3.1.0/PerformanceSubcategories.png";i:4;s:89:"https://plugins.matomo.org/PerformanceAudit/images/3.1.0/TimelineFirstContentfulPaint.png";i:5;s:76:"https://plugins.matomo.org/PerformanceAudit/images/3.1.0/WebsiteSettings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"228";s:15:"numContributors";s:2:"25";s:14:"lastCommitDate";s:19:"2023-12-24 23:09:19";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"3.0.0";s:7:"release";s:19:"2023-12-20 23:46:05";s:8:"requires";a:2:{s:3:"php";s:7:">=7.2.5";s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:135;s:7:"license";a:2:{s:4:"name";s:8:"GPL-3.0+";s:3:"url";s:57:"https://plugins.matomo.org/PerformanceAudit/3.0.0/license";}s:22:"repositoryChangelogUrl";s:67:"https://github.com/DevDavido/performance-audit-plugin/commits/3.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:48:"/api/2.0/plugins/PerformanceAudit/download/3.0.0";}i:1;a:10:{s:4:"name";s:5:"3.1.0";s:7:"release";s:19:"2023-12-24 23:10:04";s:8:"requires";a:2:{s:3:"php";s:7:">=7.2.5";s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:173;s:7:"license";a:2:{s:4:"name";s:8:"GPL-3.0+";s:3:"url";s:57:"https://plugins.matomo.org/PerformanceAudit/3.1.0/license";}s:22:"repositoryChangelogUrl";s:67:"https://github.com/DevDavido/performance-audit-plugin/commits/3.1.0";s:10:"readmeHtml";a:4:{s:11:"description";s:685:"

<p>Daily performance audits of all your sites in Matomo for the following metrics based on Google Lighthouse:
- First Contentful Paint
- Speed Index
- Largest Contentful Paint
- Time To Interactive
- Total Blocking Time
- Cumulative Layout Shift
- Overall Score</p>

<p>Continuously monitor those Web Vital metrics over time, allowing detection of underlying problems before they have an adverse effect for users or simply track changes made to the web application, allowing you to establish a baseline for comparison too.</p>

<p><strong>Note:</strong> Requires minimum NPM v10.x (part of Node.js 20.x LTS) to be installed on your server, otherwise plugin cannot be activated.</p>

";s:3:"faq";s:2780:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>How are the audits generated? Are any external services used?</strong></p>

<p>The audits are generated using Node.js in the background by running Googles Lighthouse tool against all the visited/tracked pages within the last 30 days. Everything is executed locally on your server, no data is transferred to external services.</p>

<p><strong>How do I change to audit only mobile or only desktop environments of my site?</strong></p>

<p>Under <code>General Settings</code> &gt; <code>Websites</code> &gt; <code>Manage</code> click on the edit button of the site you want to change the setting of and scroll to the setting <code>Performance simulation environment</code> selection to change it.</p>

<p><strong>I just installed the plugin or I just switched the website settings of the performance simulation environment and I cannot see any performance reports, why is that?</strong></p>

<p>You need to wait at least 24h until the reports are getting generated in the background with the scheduled tasks of your Matomo cron job.</p>

<p><strong>I shutdown/restarted my server and now the performance reports won\'t get generated anymore, what can I do?</strong></p>

<p>If the site audit gets unexpectedly interrupted, so the plugin can\'t properly finish its code execution it will have a problem to restart. It would be possible to automatically fix this problematic state, but very long running site audits would run into issues then. So in this case you either wait until the next week starts (an internal plugin reset will happen then), or you can run the Matomo console command <code>console performanceaudit:clear-task-running-flag</code> which will reset the plugin state, so the audits will be scheduled correctly again at the next possible time.</p>

<p><strong>I want to use a custom HTTP header for authentication, so the audit plugin can access my protected pages, how do I do that?</strong></p>

<p>Under <code>General Settings</code> &gt; <code>Websites</code> &gt; <code>Manage</code> click on the edit button of the site you want to change the setting of and scroll to the checkbox <code>Use Custom HTTP header</code> and activate it in order to change the HTTP header key and its value. The audit tool will send then the entered header value paired with the selected header key to the server with every request.</p>

<p><strong>The plugin cannot install because Chromium cannot be installed due to a missing library?</strong></p>

<p>Make sure <a href="https://github.com/puppeteer/puppeteer/blob/main/docs/troubleshooting.md#chrome-doesnt-launch-on-linux">all necessary dependencies</a> for Chromium are installed.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:6236:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>3.1.0</h2>

<ul>
<li>Added: Search for Node executable additionally in paths of <code>PATH</code> environment variable</li>
<li>Improved: Provide directory search path in error message if executable cannot be found</li>
</ul>

<h2>3.0.0</h2>

<ul>
<li>Release stable version for Matomo 5</li>
<li>Fixed: CORS template issue</li>
</ul>

<h2>3.0.0-Beta2</h2>

<ul>
<li>Fixed: Issue with migrated Request handling</li>
</ul>

<h2>3.0.0-Beta1</h2>

<ul>
<li>Added: Support for Matomo 5 ?</li>
<li>Updated: Bumped the minimum Node version to 20.x LTS for this new major plugin version</li>
<li>Improved: Migrated some deprecated Matomo Plugin code</li>
</ul>

<h2>2.1.0</h2>

<ul>
<li>Added: Site setting to group URLs by anchor which removes auditing duplicates of URLs which only differ in their anchors</li>
<li>Added: Support to find latest Node executable in Plesk environment</li>
<li>Added: Initial (partial) translation available for Albanian, Basque, Bokmål, Brazilian Portuguese, Bulgarian, Catalan, Chinese (Traditional), Dutch, French, German, Greek, Indonesian, Italian, Japanese, Portuguese, Spanish, Swedish, Turkish, Ukrainian</li>
<li>Updated: Bumped <code>symfony/process</code>, <code>ducks-project/spl-types</code>, <code>symfony/polyfill-mbstring</code> and <code>friendsofphp/php-cs-fixer</code> dependency version</li>
<li>Updated donation links</li>
</ul>

<h2>2.0.0</h2>

<ul>
<li>Release stable version for Matomo 4</li>
<li>Updated: Bumped <code>symfony/process</code> and <code>symfony/polyfill-mbstring</code> dependency version</li>
</ul>

<h2>2.0.0-Beta3</h2>

<ul>
<li>Improved: Merged changes from 1.1.4 into 2.0.0-Beta2</li>
</ul>

<h2>2.0.0-Beta2</h2>

<ul>
<li>Improved: Merged changes from 1.0.8 into 2.0.0-Beta2</li>
</ul>

<h2>2.0.0-Beta1</h2>

<ul>
<li>Added: Support for Matomo 4 ?</li>
<li>Updated: Bumped the minimum PHP version to 7.2.5 for this new major plugin version, just as Matomo 4 itself</li>
</ul>

<h2>1.1.4</h2>

<ul>
<li>Improved: Exception handling for failed audit due to too many requests response</li>
<li>Fixed: One performance audit setting has been displayed after disabling audits for the site in settings</li>
<li>Fixed: Disabled performance audits for site renders dashboard empty</li>
</ul>

<h2>1.1.3</h2>

<ul>
<li>Added: Possibility to set extended audit timeout for each site</li>
<li>Improved: Minor internal refactoring for site settings</li>
<li>Updated: Bumped <code>symfony/process</code> dependency version</li>
</ul>

<h2>1.1.2</h2>

<ul>
<li>Added: Possibility to enable or disable audit for each site</li>
<li>Improved: Set timeout for installation process to 5 minutes</li>
</ul>

<h2>1.1.1</h2>

<ul>
<li>Added: Scheduled weekly clearing of task running flag (in case of unexpected audit cancellation)</li>
<li>Added: Console command to clear task running flag</li>
<li>Fixed: Avoid race condition in case of which audit was called multiple times simultaneously</li>
<li>Improved: Garbage collection after each audit</li>
<li>Improved: Certain timeout/runtime exceptions don\'t stop following page audits anymore</li>
<li>Improved: Set timeout for (audit) processes to 1 minute</li>
</ul>

<h2>1.1.0</h2>

<ul>
<li>Fixed: Regular users cannot login anymore if plugin is activated</li>
<li>Fixed: Renamed and fixed option to remove query strings from audited URLs which is now named group URLs and it doesn\'t throw SQL warnings anymore in certain (edge) cases</li>
<li>Improved: Added security information for applied no sandbox mode of Chromium</li>
<li>Improved: Increase database connection timeouts for longer running site audits</li>
<li>Improved: Increase timeout for (audit) processes to 5 minutes</li>
<li>Improved: Throw warning instead error for audited pages with HTTP 403 / 404 response</li>
<li>Improved: Added FAQ entry for missing Chromium dependencies</li>
<li>Improved: Error message during installation if directory permissions are incorrect</li>
</ul>

<h2>1.0.11</h2>

<ul>
<li>Added: Option to remove query strings from audited URLs</li>
<li>Improved: Small refactoring in settings</li>
</ul>

<h2>1.0.10</h2>

<ul>
<li>Fixed: Issue with previous release as version number was incompatible with plugin marketplace</li>
</ul>

<h2>1.0.9</h2>

<ul>
<li>Fixed: Schedule Reports and mobile app threw exception due to missing name attribute</li>
</ul>

<h2>1.0.8</h2>

<ul>
<li>Improved: Refactored plugin base class, additionally removed now unneeded update classes</li>
<li>Fixed: Updates could remove Node dependencies which now get reinstalled (regression bug)</li>
<li>Fixed: Plugin cleanup now removes also symlinked directories</li>
</ul>

<h2>1.0.7</h2>

<ul>
<li>Improved: Plugin check is now also running pre-checks first</li>
<li>Improved: Plugin check is now independent of regular audit flow</li>
<li>Improved: Wording in README text regarding tests</li>
<li>Fixed: Updates could remove Node dependencies which now get reinstalled</li>
</ul>

<h2>1.0.6</h2>

<ul>
<li>Fixed: Correct file require bug from previous release</li>
</ul>

<h2>1.0.5</h2>

<ul>
<li>Added: Possibility to check plugin audit functionality</li>
</ul>

<h2>1.0.4</h2>

<ul>
<li>Fixed: Switched to require <code>piwik</code> instead <code>matomo</code> in <code>plugin.json</code> for Matomo 3.x compatibility</li>
<li>Improved: <code>plugin.json</code> plugin description</li>
</ul>

<h2>1.0.3</h2>

<ul>
<li>Added: PerformanceAudit is live on the Matomo plugin marketplace now ?</li>
<li>Added: Donation information in <code>plugin.json</code></li>
<li>Fixed: License name value in <code>plugin.json</code> was rewritten to a supported name value by Matomo Marketplace</li>
</ul>

<h2>1.0.2</h2>

<ul>
<li>Fixed: Regression bug which made only first website get audited</li>
<li>Improved: Logging of exceptions for audits</li>
<li>Updated: Bumped <code>symfony/polyfill-mbstring</code> dependency version</li>
</ul>

<h2>1.0.1</h2>

<ul>
<li>Fixed: Made sure tasks aren\'t executed concurrently</li>
<li>Fixed: composer.json is compatible with Composer v2 now</li>
</ul>

<h2>1.0</h2>

<ul>
<li>Initial release</li>
</ul>";}s:8:"download";s:48:"/api/2.0/plugins/PerformanceAudit/download/3.1.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:69:"https://plugins.matomo.org/PerformanceAudit/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:3;a:31:{s:4:"name";s:21:"RerIntranetSubnetwork";s:11:"displayName";s:23:"Rer Intranet Subnetwork";s:5:"owner";s:9:"RegioneER";s:11:"description";s:82:"Measure your intranet visitors with a new Subnetwork dimension and related report.";s:8:"homepage";s:50:"https://github.com/RegioneER/RerIntranetSubnetwork";s:15:"createdDateTime";s:19:"2020-06-10 10:18:04";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:57:"https://github.com/RegioneER/RerIntranetSubnetwork/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:50:"https://github.com/RegioneER/RerIntranetSubnetwork";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:6:"Report";i:1;s:8:"Intranet";i:2;s:10:"subnetwork";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:22:"Regione Emilia-Romagna";s:5:"email";s:35:"webmaster@regione.emilia-romagna.it";s:8:"homepage";s:28:"https://github.com/RegioneER";}}s:13:"repositoryUrl";s:50:"https://github.com/RegioneER/RerIntranetSubnetwork";s:11:"lastUpdated";s:19:"2023-12-22 17:04:03";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:4192;s:11:"screenshots";a:2:{i:0;s:72:"https://plugins.matomo.org/RerIntranetSubnetwork/images/5.0.1/report.png";i:1;s:74:"https://plugins.matomo.org/RerIntranetSubnetwork/images/5.0.1/settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"123";s:15:"numContributors";s:2:"19";s:14:"lastCommitDate";s:19:"2023-12-22 17:57:49";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-12-22 16:58:03";s:8:"requires";a:2:{s:3:"php";s:7:">=7.3.0";s:6:"matomo";s:21:">=5.0.0-rc1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:40;s:7:"license";a:2:{s:4:"name";s:8:"GPL-3.0+";s:3:"url";s:62:"https://plugins.matomo.org/RerIntranetSubnetwork/5.0.1/license";}s:22:"repositoryChangelogUrl";s:64:"https://github.com/RegioneER/RerIntranetSubnetwork/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:1018:"

<p>This <a href="https://plugins.matomo.org/RerIntranetSubnetwork">Matomo plugin</a> adds to your installation a new <em>dimension</em> called <strong>visit_subnetwork</strong> then reports visitor counts coming from private networks.</p>

<p>Settings are easily configurable by Matomo\'s General Settings administration page. You have two choices.</p>

<ul>
<li><p><a href="https://datatracker.ietf.org/doc/html/rfc1918#section-3">Private Address Space from RCF 1918</a>, such as localhost 127.0.0.1, and IANA pre-defined networks 192.168.x.x, 172.16.x.x, 10.x.x.x.</p></li>
<li><p>Configure your custom subnet rule by writing a regular expression matching the IPv4 addresses of your other intanet mapped on the web (called <a href="https://en.wikipedia.org/wiki/Extranet">extranet</a>).</p></li>
</ul>

<p>This plugin is a complete refactoring adapted and mantained for actual Matomo, of the first <a href="https://github.com/kwasib/IntranetSubNetwork">IntranetSubnetwork</a> that was published for Piwik 2.x.</p>

";s:3:"faq";s:759:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Can I define my own intranet space?</strong></p>

<p>Yes, you have a settings field inside General Administration page. You can choose pre defined IANA standard RCF Private Space and you can define your personal regular expression matching your custom network.</p>

<p><strong>What is a regular expression?</strong></p>

<p><a href="https://en.wikipedia.org/wiki/Regular_expression">Regex</a> Are a sequence of characters that specifies a pattern.</p>

<p><strong>How do I can test my regular expression rules?</strong></p>

<p>There are useful tools online, such as <a href="https://regex101.com/">Regex101</a></p>";s:13:"documentation";s:1770:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>Installation</h3>

<p>Just install by Matomo\'s Marketplace, or grab latest code from the Github repository.</p>

<h3>Translations</h3>

<p><a href="https://hosted.weblate.org/engage/matomo/"><img src="https://hosted.weblate.org/widgets/matomo/-/communityplugin-rerintranetsubnetwork/horizontal-auto.svg" alt="horizontal-auto.svg" /></a></p>

<h3>License</h3>

<p>This free software is licensed under GNU General Public License v3+</p>

<h3>Support</h3>

<p>You can ask for support and your feedback is appreciated at plugin\'s <a href="https://github.com/RegioneER/RerIntranetSubnetwork/issues">issue center on Github</a>.</p>

<h3>Changelog</h3>

<h4>Version 5.x</h4>

<ul>
<li>Weblate translations community powered</li>
<li>Added support for Matomo 5.x</li>
</ul>

<h4>Version 4.x</h4>

<ul>
<li>fixing #10</li>
<li>Merging of community translations</li>
<li>Added Weblate support for community powered translations</li>
<li>Updated regular expression rule matching <a href="https://datatracker.ietf.org/doc/html/rfc1918#section-3">RCF 1918 Private Address Space</a></li>
<li>Added support for Matomo 4.x</li>
</ul>

<h4>Version 3.x</h4>

<ul>
<li>Supporting Matomo 3.x</li>
</ul>

<h4>Version 2.x</h4>

<ul>
<li>Added Default Subnetworks configuration field. It\'s a checkbox you can use to include sandard networks measurement.</li>
<li>Added Web Administration configuration field. You can use it writing your custom Regular Expression for catching Subnetworks IPs.</li>
<li>Features imported from IntranetSubNetwork old plugin.</li>
<li>Mayor bug fixing.</li>
<li>Rewrite from scratch using console generator helpers.</li>
</ul>";s:9:"changelog";s:0:"";}s:8:"download";s:53:"/api/2.0/plugins/RerIntranetSubnetwork/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:74:"https://plugins.matomo.org/RerIntranetSubnetwork/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:4;a:31:{s:4:"name";s:9:"LoginSaml";s:11:"displayName";s:10:"Login SAML";s:5:"owner";s:10:"matomo-org";s:11:"description";s:148:"Provides SAML support for Matomo. Compatible with any Identity Provider such as OneLogin, Okta, Ping Identity, ADFS, Google, Salesforce, SharePoint.";s:8:"homepage";s:36:"https://plugins.matomo.org/LoginSaml";s:15:"createdDateTime";s:19:"2017-08-01 04:14:17";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:11:{i:0;s:14:"authentication";i:1;s:3:"sso";i:2;s:6:"google";i:3;s:4:"saml";i:4;s:4:"ADFS";i:5;s:8:"OneLogin";i:6;s:4:"Okta";i:7;s:13:"Ping Identity";i:8;s:10:"Salesforce";i:9;s:10:"SharePoint";i:10;s:25:"Just-in-time provisioning";}s:9:"basePrice";i:500;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 04:39:58";s:13:"latestVersion";s:5:"5.0.3";s:12:"numDownloads";N;s:11:"screenshots";a:14:{i:0;s:80:"https://plugins.matomo.org/LoginSaml/images/5.0.3/LoginSaml_Admin_admin_page.png";i:1;s:81:"https://plugins.matomo.org/LoginSaml/images/5.0.3/LoginSaml_Admin_import_page.png";i:2;s:83:"https://plugins.matomo.org/LoginSaml/images/5.0.3/LoginSaml_Admin_metadata_page.png";i:3;s:74:"https://plugins.matomo.org/LoginSaml/images/5.0.3/LoginSaml_login_page.png";i:4;s:72:"https://plugins.matomo.org/LoginSaml/images/5.0.3/access_sp_metadata.png";i:5;s:71:"https://plugins.matomo.org/LoginSaml/images/5.0.3/advanced_settings.png";i:6;s:85:"https://plugins.matomo.org/LoginSaml/images/5.0.3/attribute_mapping_settings_form.png";i:7;s:77:"https://plugins.matomo.org/LoginSaml/images/5.0.3/attribute_sync_settings.png";i:8;s:71:"https://plugins.matomo.org/LoginSaml/images/5.0.3/enable_saml_saved.png";i:9;s:79:"https://plugins.matomo.org/LoginSaml/images/5.0.3/idenity_provider_settings.png";i:10;s:73:"https://plugins.matomo.org/LoginSaml/images/5.0.3/import_idp_metadata.png";i:11;s:74:"https://plugins.matomo.org/LoginSaml/images/5.0.3/login_saml_menu_item.png";i:12;s:71:"https://plugins.matomo.org/LoginSaml/images/5.0.3/saml_login_button.png";i:13;s:65:"https://plugins.matomo.org/LoginSaml/images/5.0.3/saml_status.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:36:"https://plugins.matomo.org/LoginSaml";s:10:"variations";a:2:{i:0;a:9:{s:5:"price";s:3:"499";s:11:"prettyPrice";s:6:"499EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/LoginSaml?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:137:"https://shop.matomo.org/product/plugin-loginsaml/?attribute_type=Unlimited+users&add-to-cart=4803&variation_id=4804&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"579";s:11:"prettyPrice";s:6:"USD579";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/LoginSaml?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:137:"https://shop.matomo.org/product/plugin-loginsaml/?attribute_type=Unlimited+users&add-to-cart=4803&variation_id=4804&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:78:"https://shop.matomo.org/product/plugin-loginsaml/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"5.00";s:11:"ratingCount";i:1;s:11:"reviewCount";i:1;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.3";s:7:"release";N;s:8:"requires";a:2:{s:3:"php";s:7:">=7.3.0";s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:50:"https://plugins.matomo.org/LoginSaml/5.0.3/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:4140:"

<p>Unify access control and bolster security with SAML (Security Assertion Markup Language) support for Matomo, seamlessly integrating with Identity Providers like OneLogin, Okta, Ping Identity, ADFS, Google, Salesforce, and SharePoint.</p>

<p>Managing multiple access controls can be a chaotic task, leaving potential gaps in your security. Without a unified system, you risk inconsistent permissions and unintended exposures.</p>

<p>Seamlessly integrate SAML support into Matomo, unifying your access controls and eliminating inconsistent permissions. Centralise your management and bolster your security, reducing risks of unintended exposures.</p>

<h3>How Login SAML Works</h3>

<h4>Enjoy A Hassle-Free IdP Configuration</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Elevate your platform\'s user experience with our intuitive SAML setup. Seamlessly bridge Matomo with your Identity Provider, enabling robust single sign-on (SSO) capabilities and a fortified security landscape in just a few clicks.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/LoginSaml/image1.jpg" style="margin-left:24px;" alt="Enjoy A Hassle-Free IdP Configuration" />
</div>
</div>

<h4>Streamline Account Creation and Access Management</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Use Just-in-time Provisioning to create user profiles automatically and provide a frictionless onboarding process. Pre-define the sites new users can view and choose when users can seamlessly log out from all connected sessions at once.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/LoginSaml/image2.jpg" style="margin-left:24px;" alt="Streamline Account Creation and Access Management" />
</div>
</div>

<h4>Map User Attributes Seamlessly</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Combine user identification and email mapping for a more unified and streamlined user management experience. </p>
<p>The Login SAML plugin ensures that each user\'s identity is correctly associated with their username and email, enhancing accuracy and paving the way for tailored engagement strategies across various platforms.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/LoginSaml/image3.png" style="margin-left:24px;" alt="Map User Attributes Seamlessly" />
</div>
</div>

<h4>Harness Full Control with Access Synchronisation</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Assume full control over user access levels by moulding them according to your distinct SAML attributes. Enhance each user\'s experience by meticulously segmenting server information using precise delimiters.</p>
<p>Give every Matomo instance its own unique identifier, ensuring effortless identification and management.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/LoginSaml/image4.png" style="margin-left:24px;" alt="Harness Full Control with Access Synchronisation" />
</div>
</div>

<h4>Secure, Customise, and Troubleshoot with Ease</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Delve into Matomo\'s advanced SAML settings to bolster your data security. Activate \'strict mode\' to ensure that only authenticated messages are processed. Tailor user identification by selecting the ideal NameID format. Use debug mode to identify and resolve problems swiftly.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/LoginSaml/image5.png" style="margin-left:24px;" alt="Secure, Customise, and Troubleshoot with Ease" />
</div>
</div>

<h3>Try Login SAML Today</h3>

<p>Harness the power of Matomo\'s advanced SAML configurations, tailored just for you. Elevate your security, refine user access, and navigate challenges with clarity.</p>

<p>Start your 30-day free trial today and unlock a new standard of digital security.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:5;a:31:{s:4:"name";s:10:"WhiteLabel";s:11:"displayName";s:11:"White Label";s:5:"owner";s:10:"matomo-org";s:11:"description";s:133:"Give your users and clients access to a more streamline analytics experience that is less confusing and lets your own branding shine.";s:8:"homepage";s:37:"https://plugins.matomo.org/WhiteLabel";s:15:"createdDateTime";s:19:"2016-12-08 23:54:31";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:5:{i:0;s:8:"branding";i:1;s:11:"white label";i:2;s:17:"embedding reports";i:3;s:15:"customer access";i:4;s:9:"reselling";}s:9:"basePrice";i:150;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 04:38:40";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";N;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:37:"https://plugins.matomo.org/WhiteLabel";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"149";s:11:"prettyPrice";s:6:"149EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:64:"https://plugins.matomo.org/WhiteLabel?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:129:"https://shop.matomo.org/product/whitelabel/?attribute_type=Up+to+4+users&add-to-cart=2606&variation_id=2607&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"179";s:11:"prettyPrice";s:6:"USD179";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:64:"https://plugins.matomo.org/WhiteLabel?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:129:"https://shop.matomo.org/product/whitelabel/?attribute_type=Up+to+4+users&add-to-cart=2606&variation_id=2607&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"299";s:11:"prettyPrice";s:6:"299EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:64:"https://plugins.matomo.org/WhiteLabel?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:129:"https://shop.matomo.org/product/whitelabel/?attribute_type=5+to+15+users&add-to-cart=2606&variation_id=2608&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"349";s:11:"prettyPrice";s:6:"USD349";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:64:"https://plugins.matomo.org/WhiteLabel?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:129:"https://shop.matomo.org/product/whitelabel/?attribute_type=5+to+15+users&add-to-cart=2606&variation_id=2608&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"449";s:11:"prettyPrice";s:6:"449EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:64:"https://plugins.matomo.org/WhiteLabel?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:131:"https://shop.matomo.org/product/whitelabel/?attribute_type=Unlimited+users&add-to-cart=2606&variation_id=2609&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"519";s:11:"prettyPrice";s:6:"USD519";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:64:"https://plugins.matomo.org/WhiteLabel?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:131:"https://shop.matomo.org/product/whitelabel/?attribute_type=Unlimited+users&add-to-cart=2606&variation_id=2609&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:72:"https://shop.matomo.org/product/whitelabel/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"4.67";s:11:"ratingCount";i:3;s:11:"reviewCount";i:3;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:51:"https://plugins.matomo.org/WhiteLabel/5.0.1/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:2795:"

<p>Provide your clients with personalised, white-label dashboards and reports. Elevate your brand identity and credibility with a seamless user experience.</p>

<p>Presenting analytics to your clients should elevate your agency\'s stature, not undermine it. But when third-party branding sneaks in, it clouds your professionalism and risks clients questioning whose brand they\'re truly engaging with, diluting the trust you\'ve worked hard to establish.</p>

<p>Make Matomo unmistakably yours with the White Label plugin. Let your entire analytics display your brand. Ensure every report and dashboard builds on your reputation with zero confusion.</p>

<p>Next time you sit down to share insights with your clients, they\'ll only see one brand: yours.</p>

<h3>How White Label Works</h3>

<h4>Personalise Every Element of Your Dashboard and Reports</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Take Matomo\'s basic customisation beyond tweaking your logo and favicon and put your brand at the centre stage.</p>
<p>Change the product name as well as the background and font colours from Matomo\'s to your own. Present a dashboard that\'s unmistakably yours.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/WhiteLabel/image1.png" style="margin-left:24px;" alt="Personalise Every Element of Your Dashboard and Report" />
</div>
</div>

<h4>Remove Third-Party Links</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Strip away Marketplace features, \'Help\' icons and links, and any traces to Matomo. Removing marketplace plugin prompts, even on admin pages, ensures a focused and unambiguous experience for your users.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/WhiteLabel/image2.png" style="margin-left:24px;" alt="Remove Third-Party Links" />
</div>
</div>

<h4>Customise the Tracking Domains</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Alter your tracking endpoint, ensuring your clients only see your own domain (or any other one you want to use) when monitoring links or tracking conversions. It\'s discreet, professional, and all about your brand.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/WhiteLabel/image3.jpg" style="margin-left:24px;" alt="Customise the Tracking Domains" />
</div>
</div>

<h3>Try White Label Today</h3>

<p>Step up your analytics game with White Label. Transform Matomo analytics into a tailored reflection of your brand, forging deeper trust and clearer communication with your clients.</p>

<p>Start your 30-day free trial today and elevate your client interactions.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:6;a:31:{s:4:"name";s:33:"MultiChannelConversionAttribution";s:11:"displayName";s:36:"Multi Channel Conversion Attribution";s:5:"owner";s:10:"matomo-org";s:11:"description";s:143:"Get a clear understanding of how much credit each of your marketing channel is actually responsible for to shift your marketing efforts wisely.";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2017-11-28 01:07:48";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:8:{i:0;s:8:"referrer";i:1;s:7:"traffic";i:2;s:10:"conversion";i:3;s:8:"Channels";i:4;s:11:"attribution";i:5;s:6:"models";i:6;s:7:"referer";i:7;s:3:"ads";}s:9:"basePrice";i:75;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 04:37:11";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";N;s:11:"screenshots";a:5:{i:0;s:106:"https://plugins.matomo.org/MultiChannelConversionAttribution/images/5.0.2/0_Attribution_Report_1_Model.png";i:1;s:107:"https://plugins.matomo.org/MultiChannelConversionAttribution/images/5.0.2/1_Attribution_Report_2_Models.png";i:2;s:106:"https://plugins.matomo.org/MultiChannelConversionAttribution/images/5.0.2/2_Attribution_Report_3_Model.png";i:3;s:93:"https://plugins.matomo.org/MultiChannelConversionAttribution/images/5.0.2/3_Channel_Names.png";i:4;s:89:"https://plugins.matomo.org/MultiChannelConversionAttribution/images/5.0.2/4_Evolution.jpg";}s:8:"previews";a:2:{i:0;a:3:{s:4:"type";s:4:"demo";s:8:"provider";s:4:"link";s:3:"url";s:219:"https://demo.matomo.cloud/index.php?module=CoreHome&action=index&idSite=1&period=day&date=yesterday#?idSite=1&period=day&date=yesterday&category=Goals_Goals&subcategory=MultiChannelConversionAttribution_MultiAttribution";}i:1;a:4:{s:4:"type";s:5:"video";s:8:"provider";s:7:"youtube";s:3:"url";s:50:"https://www.youtube-nocookie.com/embed/0_f_6sNQMSM";s:2:"id";s:11:"0_f_6sNQMSM";}}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:60:"https://plugins.matomo.org/MultiChannelConversionAttribution";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:2:"79";s:11:"prettyPrice";s:5:"79EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:87:"https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:159:"https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=Up+to+4+users&add-to-cart=6858&variation_id=6859&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:2:"89";s:11:"prettyPrice";s:5:"USD89";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:87:"https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:159:"https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=Up+to+4+users&add-to-cart=6858&variation_id=6859&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"149";s:11:"prettyPrice";s:6:"149EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:87:"https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:159:"https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=5+to+15+users&add-to-cart=6858&variation_id=6860&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"179";s:11:"prettyPrice";s:6:"USD179";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:87:"https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:159:"https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=5+to+15+users&add-to-cart=6858&variation_id=6860&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"229";s:11:"prettyPrice";s:6:"229EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:87:"https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:161:"https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=Unlimited+users&add-to-cart=6858&variation_id=6861&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"269";s:11:"prettyPrice";s:6:"USD269";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:87:"https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:161:"https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=Unlimited+users&add-to-cart=6858&variation_id=6861&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:102:"https://shop.matomo.org/product/plugin-multichannelconversionattribution/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";N;s:11:"ratingCount";i:0;s:11:"reviewCount";i:0;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:74:"https://plugins.matomo.org/MultiChannelConversionAttribution/5.0.2/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:5401:"

<p>Learn how much each touchpoint and marketing channel is worth to your bottom line. Optimise your budget wisely and refine your strategy with solid data.</p>

<p>If you have ever stopped to think about where you put your money for the best return, you know how challenging it can be. The issue isn\'t just figuring out the last step a visitor took before converting; it\'s understanding their entire journey.</p>

<p>While many analytics tools, Matomo included, focus on last non-direct visits, a conversion story is more intricate. A visitor might engage with your brand multiple times across different channels before taking action. So, why settle for a glimpse when you can see the whole picture?</p>

<p>Unlock the power of attribution with the Multi-Channel Conversion Attribution plugin. Try and compare different attribution models to pinpoint the value of each visitor interaction. Clearly identify which channels fuel conversions and revenue and reallocate your budget where it matters most.</p>

<h3>How Multi-Channel Conversion Attribution Works</h3>

<h4>Compare and Contrast Your Multi-Attribution Models</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Evaluate up to three attribution models side by side for any set goal, spanning date ranges from 7 to 90 days. </p>
<p>Watch as the conversions and revenue data shift across these models and grasp the distinct percentage differences that emerge.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MultiChannelConversionAttribution/image1.png" style="margin-left:24px;" alt="Compare and Contrast Your Multi-Attribution Models" />
</div>
</div>

<h4>Break Down Each Channel Without Data Limits</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Dissect your channel\'s contribution to revenue, from social media sites to search engines to referral websites. </p>
<p>Zoom in to view each channel or campaign’s impact and determine which ones lead the pack in conversions and revenue — all based on your chosen attribution model. Amplify your insights by leveraging segments across endless goals.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MultiChannelConversionAttribution/image3.jpg" style="margin-left:24px;" alt="Break Down Each Channel Without Data Limits" />
</div>
</div>

<h4>Track Your Site\'s Performance Over Time Across Each Attribution Model</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Journey through your site\'s performance with each chosen attribution model. Observe the highs and lows, the growth and plateaus, and anything in between so your performance remains aligned with your benchmarks. </p>
<p>Adapt and refine your strategy to optimise your marketing strategy and budget allocation.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MultiChannelConversionAttribution/image3.jpg" style="margin-left:24px;" alt="Track Your Site\'s Performance Over Time Across Each Attribution Model" />
</div>
</div>

<h4>Explore a Spectrum of Attribution Models</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Matomo provides a suite of versatile attribution models to suit your analysis needs:</p>
<ul>
<li><b>Last Interaction,</b> where the full credit of a conversion goes to the last interaction.</li>
<li><b>Last Non-Direct Interaction,</b> where the full conversion credit goes to the last interaction that was not a direct entry.</li>
<li><b>First Interaction,</b> where the full credit of a conversion goes to the first interaction.</li>
<li><b>Linear,</b> where the credit of a conversion is shared equally across all interactions.</li>
<li><b>Position Based,</b> where the first and the last interaction get 40% of the credit, and the remaining 20% are shared equally across all remaining interactions.</li>
<li><b>Time Decay,</b> where the weight conversion credit is based on recency, with newer interactions earning a greater share.</li>
</ul>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MultiChannelConversionAttribution/image4.jpg" style="margin-left:24px;" alt="Explore a Spectrum of Attribution Models" />
</div>
</div>

<h4>A Painless, Out-of-the-Box Setup Experience</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Right from the start, the plugin ensures that Multi-Attribution reports are instantly accessible for all your goals.  You will also be able to view the attribution for orders in your shop if your website or app has Ecommerce enabled.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MultiChannelConversionAttribution/image5.jpg" style="margin-left:24px;" alt="A Painless, Out-of-the-Box Setup Experience" />
</div>
</div>

<h3>Try Multi Channel Conversion Attribution Today</h3>

<p>Empower your analytics journey with Matomo\'s Multi-Attribution plugin. Dive deeper, uncover hidden channels, and allocate resources confidently. Transform data into decisive action and let every click illuminate your path forward.</p>

<p>Start your 30-day free trial and harness the full potential of every digital touchpoint.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:437:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/multi-channel-conversion-attribution/">Multi Channel Conversion Attribution User Guide</a> and the <a href="https://matomo.org/faq/multi-channel-conversion-attribution/">Multi Channel Conversion Attribution FAQ</a> cover how to get the most out of this plugin.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:7;a:31:{s:4:"name";s:13:"FormAnalytics";s:11:"displayName";s:14:"Form Analytics";s:5:"owner";s:10:"matomo-org";s:11:"description";s:150:"Increase conversions on your online forms and lose less visitors by learning everything about your users behavior and their pain points on your forms.";s:8:"homepage";s:40:"https://plugins.matomo.org/FormAnalytics";s:15:"createdDateTime";s:19:"2017-03-09 22:11:54";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:12:"optimization";i:1;s:9:"analytics";i:2;s:7:"improve";i:3;s:3:"cro";i:4;s:4:"form";i:5;s:3:"web";i:6;s:6:"online";}s:9:"basePrice";i:150;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 04:35:26";s:13:"latestVersion";s:5:"5.0.4";s:12:"numDownloads";N;s:11:"screenshots";a:15:{i:0;s:68:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/1_Overview.png";i:1;s:69:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/2_Real_Time.png";i:2;s:73:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/3_Form_Overview.png";i:3;s:76:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/4_Form_By_Page_URL.png";i:4;s:75:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/5_Drop_Off_Fields.png";i:5;s:72:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/6_Entry_Fields.png";i:6;s:73:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/7_Field_Timings.png";i:7;s:70:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/8_Field_Size.png";i:8;s:76:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/9_Most_Used_Fields.png";i:9;s:82:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/10_Most_Corrected_Fields.png";i:10;s:76:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/11_Unneeded_Fields.png";i:11;s:74:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/12_Row_Evolution.png";i:12;s:79:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/13_Row_Evolution_Page.png";i:13;s:75:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/14_Map_Form_Field.png";i:14;s:72:"https://plugins.matomo.org/FormAnalytics/images/5.0.4/15_Visitor_Log.png";}s:8:"previews";a:2:{i:0;a:3:{s:4:"type";s:4:"demo";s:8:"provider";s:4:"link";s:3:"url";s:193:"https://demo.matomo.cloud/index.php?module=CoreHome&action=index&idSite=1&period=day&date=yesterday#?idSite=1&period=day&date=yesterday&category=FormAnalytics_Forms&subcategory=General_Overview";}i:1;a:4:{s:4:"type";s:5:"video";s:8:"provider";s:7:"youtube";s:3:"url";s:50:"https://www.youtube-nocookie.com/embed/kjaO-EXk7wU";s:2:"id";s:11:"kjaO-EXk7wU";}}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:40:"https://plugins.matomo.org/FormAnalytics";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"149";s:11:"prettyPrice";s:6:"149EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/FormAnalytics?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:132:"https://shop.matomo.org/product/formanalytics/?attribute_type=Up+to+4+users&add-to-cart=3196&variation_id=3197&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"179";s:11:"prettyPrice";s:6:"USD179";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/FormAnalytics?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:132:"https://shop.matomo.org/product/formanalytics/?attribute_type=Up+to+4+users&add-to-cart=3196&variation_id=3197&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"299";s:11:"prettyPrice";s:6:"299EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/FormAnalytics?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:132:"https://shop.matomo.org/product/formanalytics/?attribute_type=5+to+15+users&add-to-cart=3196&variation_id=3198&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"349";s:11:"prettyPrice";s:6:"USD349";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/FormAnalytics?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:132:"https://shop.matomo.org/product/formanalytics/?attribute_type=5+to+15+users&add-to-cart=3196&variation_id=3198&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"449";s:11:"prettyPrice";s:6:"449EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/FormAnalytics?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:134:"https://shop.matomo.org/product/formanalytics/?attribute_type=Unlimited+users&add-to-cart=3196&variation_id=3199&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"519";s:11:"prettyPrice";s:6:"USD519";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/FormAnalytics?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:134:"https://shop.matomo.org/product/formanalytics/?attribute_type=Unlimited+users&add-to-cart=3196&variation_id=3199&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:75:"https://shop.matomo.org/product/formanalytics/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"4.67";s:11:"ratingCount";i:3;s:11:"reviewCount";i:3;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.4";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:54:"https://plugins.matomo.org/FormAnalytics/5.0.4/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:3716:"

<p>Get to know every detail of your forms with in-depth analytics. Make reliable decisions based on user interactions, and adjust your forms for higher conversions.</p>

<p>Your website\'s forms are often the gateway to conversions. They\'re essential for capturing leads, understanding visitor intent, and securing online transactions. But how do you know if they\'re performing at their peak?</p>

<p>Matomo\'s Form Analytics plugin dives deeper than typical analytics, revealing not just how many people visit your forms but also where they hesitate, what causes drop-offs, and which fields boost or hinder your conversions.</p>

<p><em>“We made specific adjustments based on Form Analytics, resulting in 3 times the leads in just a couple of days.”</em></p>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:25%;font-weight:bold;">
Jess Dunbar
<br />
Marketing Lead at Concrete CMS  
</div>
</div>

<h3>How Form Analytics Works</h3>

<h4>Get an Overview of Your Forms\' Performance</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Explore how visitors interact with your forms — from those who begin and then abandon to those who return to complete their inputs.</p>
<p>Identify any barriers they might face and address them swiftly to lift your conversions.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/FormAnalytics/image1.png" style="margin-left:24px;" alt="Get an Overview of Your Forms\' Performance" />
</div>
</div>

<h4>Comprehensive Form Analytics at Your Fingertips</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>See every form metric you can think of in one simple dashboard. Identify trends and visitor behaviours, such as the time to complete a form.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/FormAnalytics/image2.gif" style="margin-left:24px;" alt="Comprehensive Form Analytics at Your Fingertips" />
</div>
</div>

<h4>Dive Deep into Your Form Field\'s Performance</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Gain crystal-clear insights into the journey of users through each form field. Discover where they begin and where hesitations occur. Track metrics like the average time spent on each field. </p>
<p>Pave the way for smoother visitor interactions and elevated conversion rates.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/FormAnalytics/image3.gif" style="margin-left:24px;" alt="Dive Deep into Your Form Field\'s Performance" />
</div>
</div>

<h4>Discover Who\'s Behind Every Form Submission</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Gain a deeper understanding of those who interact with your forms. Dive into details like user location, browser usage, and pages visited.</p>
<p>Evolve your messaging and design to resonate better and boost conversions with this unparalleled level of visitor insights. </p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/FormAnalytics/image4.gif" style="margin-left:24px;" alt="Discover Who\'s Behind Every Form Submission" />
</div>
</div>

<h3>Try Form Analytics Today</h3>

<p>Unlock the hidden stories within your forms. With the Form Analytics plugin, you\'ll see every nuance of user behaviour, guiding you to make informed, impactful changes. Go beyond data and build a solid foundation for your site\'s long-term success.</p>

<p>Start your 30-day free trial today and let your forms lead the way.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:505:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/form-analytics/">Form Analytics User Guide</a> and the <a href="https://matomo.org/faq/form-analytics/">Form Analytics FAQ</a> cover how to get the most out of this plugin. The <a href="https://developer.matomo.org/guides/form-analytics">Form Analytics developer guides</a> help you setting up the tracking of your online forms.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:8;a:31:{s:4:"name";s:15:"RollUpReporting";s:11:"displayName";s:17:"Roll-Up Reporting";s:5:"owner";s:10:"matomo-org";s:11:"description";s:149:"At a glance, see how several of your websites, mobile apps & shops are performing overall. Get new insights into your business & save time every day.";s:8:"homepage";s:42:"https://plugins.matomo.org/RollUpReporting";s:15:"createdDateTime";s:19:"2016-12-22 08:41:57";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:10:{i:0;s:8:"websites";i:1;s:7:"roll-up";i:2;s:4:"roll";i:3;s:2:"up";i:4;s:5:"group";i:5;s:9:"aggregate";i:6;s:5:"sites";i:7;s:8:"property";i:8;s:4:"meta";i:9;s:6:"parent";}s:9:"basePrice";i:200;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 04:33:46";s:13:"latestVersion";s:5:"5.0.3";s:12:"numDownloads";N;s:11:"screenshots";a:5:{i:0;s:69:"https://plugins.matomo.org/RollUpReporting/images/5.0.3/1_Roll-Up.jpg";i:1;s:68:"https://plugins.matomo.org/RollUpReporting/images/5.0.3/2_Manage.png";i:2;s:84:"https://plugins.matomo.org/RollUpReporting/images/5.0.3/3_All_Websites_Dashboard.png";i:3;s:78:"https://plugins.matomo.org/RollUpReporting/images/5.0.3/4_Real-time_Widget.png";i:4;s:73:"https://plugins.matomo.org/RollUpReporting/images/5.0.3/5_Visitor_Log.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:42:"https://plugins.matomo.org/RollUpReporting";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"199";s:11:"prettyPrice";s:6:"199EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:69:"https://plugins.matomo.org/RollUpReporting?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:134:"https://shop.matomo.org/product/rollupreporting/?attribute_type=Up+to+4+users&add-to-cart=2716&variation_id=2717&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"229";s:11:"prettyPrice";s:6:"USD229";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:69:"https://plugins.matomo.org/RollUpReporting?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:134:"https://shop.matomo.org/product/rollupreporting/?attribute_type=Up+to+4+users&add-to-cart=2716&variation_id=2717&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"399";s:11:"prettyPrice";s:6:"399EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:69:"https://plugins.matomo.org/RollUpReporting?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:134:"https://shop.matomo.org/product/rollupreporting/?attribute_type=5+to+15+users&add-to-cart=2716&variation_id=2718&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"459";s:11:"prettyPrice";s:6:"USD459";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:69:"https://plugins.matomo.org/RollUpReporting?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:134:"https://shop.matomo.org/product/rollupreporting/?attribute_type=5+to+15+users&add-to-cart=2716&variation_id=2718&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"599";s:11:"prettyPrice";s:6:"599EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:69:"https://plugins.matomo.org/RollUpReporting?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:136:"https://shop.matomo.org/product/rollupreporting/?attribute_type=Unlimited+users&add-to-cart=2716&variation_id=2719&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"689";s:11:"prettyPrice";s:6:"USD689";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:69:"https://plugins.matomo.org/RollUpReporting?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:136:"https://shop.matomo.org/product/rollupreporting/?attribute_type=Unlimited+users&add-to-cart=2716&variation_id=2719&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:77:"https://shop.matomo.org/product/rollupreporting/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"4.75";s:11:"ratingCount";i:4;s:11:"reviewCount";i:4;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.3";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:56:"https://plugins.matomo.org/RollUpReporting/5.0.3/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:4183:"

<p>Centralise your analytics data and get comprehensive insights across all your websites, apps, and stores in one consolidated dashboard.</p>

<p>Managing data from multiple websites and apps can feel like juggling too many balls at once. Each platform has its metrics, dashboards, and insights, leading to a messy and fragmented view. Worse yet, compiling all the data to get a clear picture of their situation takes too much time.</p>

<p>The Roll-Up Reporting plugin lets you aggregate data from multiple websites and apps into one single place. Access, analyse, and compare the data of multiple digital properties in one report, helping you instantly gain the insights you need, error-free.</p>

<h3>How Roll-Up Reporting Works</h3>

<h4>Merge Data from All Your Web Properties Effortlessly</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Operating multiple websites or apps for different brands or departments demands seamless data consolidation. </p>
<p>The Roll-Up Reporting plugin offers a one-stop solution that makes data analysis more streamlined and reduces the chances of oversight.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/RollUpReporting/image1.jpg" style="margin-left:24px;" alt="Merge Data from All Your Web Properties Effortlessly" />
</div>
</div>

<h4>Simplify Your Analytics Workflow</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Roll-Up Reporting is designed for simplicity. Whether you need to aggregate data from all your websites, focus on specific shops, or even group by country, the tool allows unlimited configurations. Set up as many Roll-Ups as required without any limitations.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/RollUpReporting/image2.png" style="margin-left:24px;" alt="Simplify Your Analytics Workflow" />
</div>
</div>

<h4>Get a Bird\'s-Eye View of Every Property</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Dive into a detailed performance breakdown for each property within your roll-ups. From visits and pageviews to revenue insights, get a grasp of your key metrics.</p>
<p>Identify trends and tackle potential issues proactively, ensuring consistent growth across all your digital touchpoints.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/RollUpReporting/image3.png" style="margin-left:24px;" alt="Get a Bird\'s-Eye View of Every Property" />
</div>
</div>

<h4>Witness Real-Time Engagement on Your Properties</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Monitor the journey of every visitor across your digital properties as it unfolds. With Roll-Up Reporting\'s real-time tracking, you can observe actions, clicks, and behaviours, ensuring you\'re always in the loop and can respond to user trends instantly.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/RollUpReporting/image4.png" style="margin-left:24px;" alt="Witness Real-Time Engagement on Your Properties" />
</div>
</div>

<h4>Understand Your Audience Inside-Out</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Delve into detailed insights for each visitor across your entire digital ecosystem without juggling multiple windows. View their location, browser preference, and meticulously track every move they make post-entry, all in one consolidated view.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/RollUpReporting/image5.png" style="margin-left:24px;" alt="Understand Your Audience Inside-Out" />
</div>
</div>

<h3>Try Roll-Up Reporting Today</h3>

<p>Transform the way you manage your analytics with Roll-Up Reporting. Consolidate your data, gain sharp insights, and make decisions with confidence. It\'s your digital realm, simplified and empowered—all in one dashboard.</p>

<p>Start your 30-day free trial and enjoy the power of consolidated analytics.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:441:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/roll-up-reporting/">Roll-Up Reporting User Guide</a> and the 
<a href="https://matomo.org/faq/roll-up-reporting/">Roll-Up Reporting FAQ</a> cover how to get the most out of this plugin.</p>

<p>For any other question feel free to <a href="#support">contact us</a>.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:9;a:31:{s:4:"name";s:11:"ActivityLog";s:11:"displayName";s:12:"Activity Log";s:5:"owner";s:10:"matomo-org";s:11:"description";s:142:"Get a detailed audit log of all activities happening in your Matomo Analytics for increased security, risk management, and problem diagnostic.";s:8:"homepage";s:38:"https://plugins.matomo.org/ActivityLog";s:15:"createdDateTime";s:19:"2016-10-25 21:06:10";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:6:{i:0;s:8:"security";i:1;s:10:"monitoring";i:2;s:14:"administration";i:3;s:3:"log";i:4;s:8:"activity";i:5;s:5:"audit";}s:9:"basePrice";i:30;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 04:32:23";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";N;s:11:"screenshots";a:1:{i:0;s:68:"https://plugins.matomo.org/ActivityLog/images/5.0.1/activity_log.jpg";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:38:"https://plugins.matomo.org/ActivityLog";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:2:"29";s:11:"prettyPrice";s:5:"29EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:65:"https://plugins.matomo.org/ActivityLog?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:130:"https://shop.matomo.org/product/activitylog/?attribute_type=Up+to+4+users&add-to-cart=2478&variation_id=2479&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:2:"29";s:11:"prettyPrice";s:5:"USD29";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:65:"https://plugins.matomo.org/ActivityLog?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:130:"https://shop.matomo.org/product/activitylog/?attribute_type=Up+to+4+users&add-to-cart=2478&variation_id=2479&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:2:"59";s:11:"prettyPrice";s:5:"59EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:65:"https://plugins.matomo.org/ActivityLog?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:130:"https://shop.matomo.org/product/activitylog/?attribute_type=5+to+15+users&add-to-cart=2478&variation_id=2480&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:2:"69";s:11:"prettyPrice";s:5:"USD69";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:65:"https://plugins.matomo.org/ActivityLog?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:130:"https://shop.matomo.org/product/activitylog/?attribute_type=5+to+15+users&add-to-cart=2478&variation_id=2480&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:2:"89";s:11:"prettyPrice";s:5:"89EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:65:"https://plugins.matomo.org/ActivityLog?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:132:"https://shop.matomo.org/product/activitylog/?attribute_type=Unlimited+users&add-to-cart=2478&variation_id=2481&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:2:"99";s:11:"prettyPrice";s:5:"USD99";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:65:"https://plugins.matomo.org/ActivityLog?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:132:"https://shop.matomo.org/product/activitylog/?attribute_type=Unlimited+users&add-to-cart=2478&variation_id=2481&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:73:"https://shop.matomo.org/product/activitylog/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"4.75";s:11:"ratingCount";i:4;s:11:"reviewCount";i:4;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:52:"https://plugins.matomo.org/ActivityLog/5.0.1/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:1986:"

<p>Review any actions performed by employees or clients. Find potential security breaches, enhance your accountability, and foster a culture of transparency.</p>

<p>You\'re meticulous about your data, yet the thought of unnoticed actions or unauthorised changes concerns you. When questions arise, pinpointing responsibility feels like a guessing game. And if you ever got a security breach, you aren\'t sure you could find what caused it.</p>

<p>Fortunately, there\'s a way to cast those worries aside and always have a clear trail at your fingertips.</p>

<p>The Activity Log plugin keeps a record of all important activities performed by your users within Matomo\'s platform. View all activities that happened in the past in chronological order to see the actions taken by your employees (or clients) with their respective timestamps.</p>

<h3>How Activity Log Works</h3>

<h4>A Clear Timeline of Every Action Taken by Everyone in Your Matomo Instance</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Get a meticulous breakdown of user actions, letting you instantly identify who\'s linked to specific activities or events. </p>
<p>Monitor data for any potential security breach or misuse of information before it\'s too late. </p>
<p>Examine the issue in-depth and bring a layer of transparency to your organisation.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/ActivityLog/image1.jpg" style="margin-left:24px;" alt="A Clear Timeline of Every Action Taken by Everyone in Your Matomo Instance" />
</div>
</div>

<h3>Try Activity Log Today</h3>

<p>Dive into a world where transparency meets security. With Activity Log, every decision is not only backed by data but empowered by it. Unravel the intricacies of user actions, safeguard your analytics, and navigate with unwavering confidence.</p>

<p>Start your 30-day free trial today and keep your organisation ahead of any problems.</p>";s:3:"faq";s:7989:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What does Activity Log do?</strong></p>

<p>The Activity Log plugins keeps a record of all important activities performed by your Matomo users on your Matomo.
You can view all activities that happened in the past in a chronological order to see who did what and when.</p>

<p>The Activity Log allows Super Users to quickly review the actions performed in Matomo by members of your organization or clients. 
It also lets every one of these user also review details of their own actions.</p>

<p><strong>Why is it important to keep an eye on these activities?</strong></p>

<p>There are many reasons why it is important, for example:</p>

<ul>
<li>Accountability: It helps you to identify which users were associated with a certain activity or event.</li>
<li>Intrusion Detection: It helps you to monitor data for any potential security breach or misuse of information.</li>
<li>Problem Detection: It helps you to identify problems, why something happened and when.</li>
</ul>

<p><strong>Who develops &amp; maintains the Activity Log plugin?</strong></p>

<p>The plugin is developed and maintained by <a href="https://www.innocraft.com">InnoCraft</a>, the company of the makers of Matomo. 
At InnoCraft, talented and passionate developers build and maintain the free and open source project Matomo. 
This ensures that the plugin is well integrated, kept up to date and automatically tested whenever a change is made. 
By purchasing this plugin you also help the developers to being able to maintain the free and open source project Matomo itself.</p>

<p><strong>How do I access the activity log?</strong></p>

<p>First you need to log in to your Matomo.</p>

<p>If you are a <a href="https://matomo.org/faq/general/faq_35/">Super User</a>, go to "Administration" and click in the "Diagnostic" 
section on "Activity Log".</p>

<p>As a user with view, write, or admin access you can see your activity log entries by clicking on "Personal" in the top right corner followed
by clicking on "Activity Log" in the left menu.</p>

<p><strong>Who has access to the activity log?</strong></p>

<p><a href="https://matomo.org/faq/general/faq_35/">Super Users</a> are able to see all activities and can also filter activities by user.</p>

<p>All other users can view their own activities.</p>

<p><strong>Can the activity log data be exported?</strong></p>

<p>You can use the <a href="https://developer.matomo.org/api-reference/reporting-api#ActivityLog">Matomo HTTP API</a> to query activities.</p>

<p>The plugin currently adds the following API methods to your Matomo:</p>

<ul>
<li><code>ActivityLog.getEntries</code> Returns logged activity entries.</li>
<li><code>ActivityLog.getEntryCount</code> Returns the number of available activity entries.</li>
</ul>

<p>An export feature will be also available in the UI soon.</p>

<p><strong>How long will the activity data be stored?</strong></p>

<p>Activities are stored forever, there are no limits. If you are interested in a feature to setup an automatic purge
of activities after a certain time, <a href="https://matomo.org/support">let us know</a>.</p>

<p><strong>How do I enable Gravatar images in the activity log?</strong></p>

<p><a href="https://en.gravatar.com/">Gravar</a> means Globally Recognized Avatar. When enabled, it will try to find a matching
avatar image for your users so you can easily see which user has performed which activity. An avatar image may be 
shown next to an activity in the activity log. This feature is not enabled by default as our plugins 
do not send any of your data or metadata to external web services for <a href="https://matomo.org/privacy">privacy</a> compliance.</p>

<p>To enable Gravatar images, log in to Matomo as a <a href="https://matomo.org/faq/general/faq_35/">Super User</a> and go to 
"Administration =&gt; Plugin Settings", where you can enable the Gravatar setting.</p>

<p><strong>As a developer, how do I log activities done within my custom plugin?</strong></p>

<p>To log custom activities happening in your custom plugin, you can define Activity classes (extending <code>Piwik\\Plugins\\ActivityLog\\Activity\\Activity</code>). 
You need to place these classes in a directory named <code>Activity</code> within any plugin. The Audit log will then include all
 such activities recorded by your plugin.</p>

<p><strong>How can I export the Activity Log UI to embed it somewhere else?</strong></p>

<p>First you need to log in to your Matomo. Then click on "Personal" in the top right corner and click on "Widgets"
in the left menu. There you can find the widget "Activity Log" in the "Diagnostic" section. Below the widget the URL
to export it is shown. To learn more about this, read the <a href="https://matomo.org/docs/embed-piwik-report/">Embed Matomo Widget</a> user guide.</p>

<p><strong>Which events / activities are being tracked?</strong></p>

<p>The audit log reports all these activities:</p>

<ul>
<li>Annotation added</li>
<li>Annotation changed</li>
<li>Annotation deleted</li>
<li>Component updated (Matomo / Plugin)</li>
<li>Custom Alert added</li>
<li>Custom Alert changed</li>
<li>Custom Alert deleted</li>
<li>Custom Dimension configured</li>
<li>Custom Dimension changed</li>
<li>Geo location provider changed</li>
<li>Goal added</li>
<li>Goal changed</li>
<li>Goal deleted</li>
<li>Measurable created</li>
<li>Measurable changed</li>
<li>Measurable removed</li>
<li>Plugin installed</li>
<li>Plugin uninstalled</li>
<li>Plugin activated</li>
<li>Plugin deactivated</li>
<li>Privacy: Enable DNT support</li>
<li>Privacy: Disable DNT support</li>
<li>Privacy: Set IP Anonymise settings</li>
<li>Privacy: Set delete logs settings</li>
<li>Privacy: Set delete reports settings</li>
<li>Privacy: Set scheduled report deletion setting</li>
<li>Privacy: Raw data anonymization triggered</li>
<li>Scheduled report created</li>
<li>Scheduled report changed</li>
<li>Scheduled report deleted</li>
<li>Scheduled report sent</li>
<li>Scheduled report unsubscribed</li>
<li>Segment created</li>
<li>Segment updated</li>
<li>Segment deleted</li>
<li>Site access changed</li>
<li>Site settings updated</li>
<li>Super user access changed</li>
<li>System settings updated</li>
<li>Two Factor Authentication enabled</li>
<li>Two Factor Authentication disabled</li>
<li>User created</li>
<li>User removed</li>
<li>User changed</li>
<li>User logged in</li>
<li>User failed to log in</li>
<li>User logged out</li>
<li>User settings updated</li>
<li>User sets preference</li>
</ul>

<p>Other plugins\' activity log events:</p>

<ul>
<li>A/B testing

<ul>
<li>Experiment created</li>
<li>Experiment settings updated</li>
<li>Experiment status changed (Started, Finished, Archived)</li>
<li>Experiment deleted</li>
</ul></li>
<li>Custom Reports

<ul>
<li>Custom Report created</li>
<li>Custom Report updated</li>
<li>Custom Report deleted</li>
</ul></li>
<li>Form Analytics

<ul>
<li>Form created</li>
<li>Form updated</li>
<li>Form deleted</li>
<li>Form archived</li>
</ul></li>
<li>Heatmaps

<ul>
<li>Heatmap created</li>
<li>Heatmap updated</li>
<li>Heatmap deleted</li>
<li>Heatmap stopped</li>
</ul></li>
<li>Session Recording

<ul>
<li>Session Recording created</li>
<li>Session Recording updated</li>
<li>Session Recording deleted</li>
<li>Session Recording stopped</li>
</ul></li>
<li>Referrers Manager

<ul>
<li>Search engine added</li>
<li>Search engine removed</li>
<li>Social network added</li>
<li>Social network removed</li>
</ul></li>
</ul>

<p><strong>Do I get access to the raw data that was tracked?</strong></p>

<p>Yes, if you host Matomo yourself you get access to all data that is stored in your MySQL database. 
The data is stored in a table called <code>matomo_activity_log</code>. The data is also made easily available via the 
<a href="/api-reference/reporting-api#ActivityLog">Activity Log HTTP Reporting API</a>.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:10;a:31:{s:4:"name";s:9:"AbTesting";s:11:"displayName";s:11:"A/B Testing";s:5:"owner";s:10:"matomo-org";s:11:"description";s:150:"Increase revenue and conversions by comparing different versions of your websites or apps & detect the winning variation that will grow your business!";s:8:"homepage";s:24:"https://www.ab-tests.net";s:15:"createdDateTime";s:19:"2016-10-25 21:08:10";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:12:{i:0;s:9:"Marketing";i:1;s:3:"a/b";i:2;s:5:"tests";i:3;s:5:"split";i:4;s:7:"abtests";i:5;s:4:"test";i:6;s:11:"experiments";i:7;s:9:"variation";i:8;s:7:"variant";i:9;s:7:"optimze";i:10;s:7:"improve";i:11;s:3:"cro";}s:9:"basePrice";i:200;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 04:30:37";s:13:"latestVersion";s:5:"5.0.6";s:12:"numDownloads";N;s:11:"screenshots";a:4:{i:0;s:62:"https://plugins.matomo.org/AbTesting/images/5.0.6/0_Report.png";i:1;s:86:"https://plugins.matomo.org/AbTesting/images/5.0.6/2_Manage_your_experiments_easily.png";i:2;s:82:"https://plugins.matomo.org/AbTesting/images/5.0.6/3_Configure_your_experiments.png";i:3;s:83:"https://plugins.matomo.org/AbTesting/images/5.0.6/4_Define_your_success_metrics.png";}s:8:"previews";a:2:{i:0;a:3:{s:4:"type";s:4:"demo";s:8:"provider";s:4:"link";s:3:"url";s:195:"https://demo.matomo.cloud/index.php?module=CoreHome&action=index&idSite=1&period=day&date=yesterday#?idSite=1&period=day&date=yesterday&category=AbTesting_Experiments&subcategory=General_Overview";}i:1;a:4:{s:4:"type";s:5:"video";s:8:"provider";s:7:"youtube";s:3:"url";s:50:"https://www.youtube-nocookie.com/embed/jir37QyCctM";s:2:"id";s:11:"jir37QyCctM";}}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:36:"https://plugins.matomo.org/AbTesting";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"199";s:11:"prettyPrice";s:6:"199EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/AbTesting?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/abtesting/?attribute_type=Up+to+4+users&add-to-cart=2446&variation_id=2447&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"229";s:11:"prettyPrice";s:6:"USD229";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/AbTesting?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/abtesting/?attribute_type=Up+to+4+users&add-to-cart=2446&variation_id=2447&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"399";s:11:"prettyPrice";s:6:"399EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/AbTesting?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/abtesting/?attribute_type=5+to+15+users&add-to-cart=2446&variation_id=2448&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"459";s:11:"prettyPrice";s:6:"USD459";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/AbTesting?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/abtesting/?attribute_type=5+to+15+users&add-to-cart=2446&variation_id=2448&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"599";s:11:"prettyPrice";s:6:"599EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/AbTesting?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:130:"https://shop.matomo.org/product/abtesting/?attribute_type=Unlimited+users&add-to-cart=2446&variation_id=2449&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"689";s:11:"prettyPrice";s:6:"USD689";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/AbTesting?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:130:"https://shop.matomo.org/product/abtesting/?attribute_type=Unlimited+users&add-to-cart=2446&variation_id=2449&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:71:"https://shop.matomo.org/product/abtesting/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"5.00";s:11:"ratingCount";i:3;s:11:"reviewCount";i:3;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.6";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:50:"https://plugins.matomo.org/AbTesting/5.0.6/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:3847:"

<p>Find your website\'s winning formula by running A/B tests. ​​Use data to guide your design choices and watch your conversion rates rise.</p>

<p>Choosing the right layout, images, or message can feel like a guessing game. Bring more certainty to this crucial part of your job with Matomo\'s A/B Testing plugin.</p>

<p>Start running A/B tests without complex or expensive tools. Create experiments, compare different versions of your website and identify winners.</p>

<h3>How A/B Testing Works</h3>

<h4>Decide Test Winners Without Complex Statistics</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Defining an A/B test winner requires the use of statistics, a complicated and time-consuming task for most marketers. But with Matomo\'s A/B Testing plugin, that\'s no longer the case.</p>
<p>Get a detailed breakdown of your test\'s variations with all the metrics that matter. If one reaches statistical significance within the desirable detectable effect, you\'ll be informed right away so you can roll out the changes confidently.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/AbTesting/image1.png" style="margin-left:24px;" alt="Decide Test Winners Without Complex Statistics" />
</div>
</div>

<h4>See How Your Tests Perform Over Time</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Watch how your A/B tests unfold over weeks and months with the evolution report. Plot different key metrics and overlay audience segments to analyse your data in detail. Keep an eye on their progress and ensure everything runs smoothly.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/AbTesting/image2.gif" style="margin-left:24px;" alt="See How Your Tests Perform Over Time" />
</div>
</div>

<h4>Define a Wide Range of Success Metrics</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Define up to three success metrics and adapt your experiments to what matters to you: higher conversions, orders, or more. It\'s A/B testing; your way.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/AbTesting/image3.png" style="margin-left:24px;" alt="Define a Wide Range of Success Metrics" />
</div>
</div>

<h4>Setting Up A/B Tests Doesn\'t Get Any Easier</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Configure tests by giving them a name, hypothesis, and description (for reference). Then, define the number of variations and target pages to run, and you\'re good to go.</p>
<p>Run experiments in minutes and enjoy faster growth with the A/B Testing plugin.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/AbTesting/image4.png" style="margin-left:24px;" alt="Setting Up A/B Tests Doesn\'t Get Any Easier" />
</div>
</div>

<h4>Stay On Top of All Your A/B Tests</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Gain a crystal-clear snapshot of your tests\' performance. Look at how many visitors you get per version, how many actively entered the target page, and the overall conversion rate.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/AbTesting/image5.jpg" style="margin-left:24px;" alt="Stay On Top of All Your A/B Tests" />
</div>
</div>

<h3>Try A/B Testing Today</h3>

<p>Create unlimited A/B tests with unlimited variations and tailored goals, and unlock the power of data-driven growth. Tailor every aspect of your site based on what resonates with your audience with Matomo\'s A/B Testing plugin.</p>

<p>Start your 30-day free trial and see your business growth compound.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:494:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/ab-testing/">A/B Testing User Guide</a> and the <a href="https://matomo.org/faq/ab-testing/">A/B Testing FAQ</a> help you getting started in running A/B tests. 
The <a href="https://developer.matomo.org/guides/ab-tests">A/B Testing developer guides</a> help you embedding and implementing A/B tests into your project.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:11;a:31:{s:4:"name";s:14:"MediaAnalytics";s:11:"displayName";s:15:"Media Analytics";s:5:"owner";s:10:"matomo-org";s:11:"description";s:149:"Grow your business with advanced video & audio analytics. Get powerful insights into how your audience watches your videos and listens to your audio.";s:8:"homepage";s:31:"https://www.media-analytics.net";s:15:"createdDateTime";s:19:"2016-10-25 21:07:56";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:10:{i:0;s:9:"Marketing";i:1;s:10:"conversion";i:2;s:5:"video";i:3;s:5:"audio";i:4;s:5:"media";i:5;s:7:"youtube";i:6;s:5:"vimeo";i:7;s:5:"html5";i:8;s:9:"analytics";i:9;s:3:"cro";}s:9:"basePrice";i:160;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 03:28:46";s:13:"latestVersion";s:5:"5.0.6";s:12:"numDownloads";N;s:11:"screenshots";a:8:{i:0;s:75:"https://plugins.matomo.org/MediaAnalytics/images/5.0.6/0_Media_Overview.png";i:1;s:78:"https://plugins.matomo.org/MediaAnalytics/images/5.0.6/1_Real-time_Reports.png";i:2;s:83:"https://plugins.matomo.org/MediaAnalytics/images/5.0.6/2_Real-time_Audience_Map.png";i:3;s:73:"https://plugins.matomo.org/MediaAnalytics/images/5.0.6/3_Audience_Log.png";i:4;s:73:"https://plugins.matomo.org/MediaAnalytics/images/5.0.6/4_Audience_Map.png";i:5;s:74:"https://plugins.matomo.org/MediaAnalytics/images/5.0.6/5_Media_Reports.png";i:6;s:74:"https://plugins.matomo.org/MediaAnalytics/images/5.0.6/6_Row_Evolution.png";i:7;s:74:"https://plugins.matomo.org/MediaAnalytics/images/5.0.6/7_Media_Details.png";}s:8:"previews";a:2:{i:0;a:3:{s:4:"type";s:4:"demo";s:8:"provider";s:4:"link";s:3:"url";s:194:"https://demo.matomo.cloud/index.php?module=CoreHome&action=index&idSite=1&period=day&date=yesterday#?idSite=1&period=day&date=yesterday&category=MediaAnalytics_Media&subcategory=General_Overview";}i:1;a:4:{s:4:"type";s:5:"video";s:8:"provider";s:7:"youtube";s:3:"url";s:50:"https://www.youtube-nocookie.com/embed/q7SaiE3iBGA";s:2:"id";s:11:"q7SaiE3iBGA";}}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:41:"https://plugins.matomo.org/MediaAnalytics";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"159";s:11:"prettyPrice";s:6:"159EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/MediaAnalytics?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:133:"https://shop.matomo.org/product/mediaanalytics/?attribute_type=Up+to+4+users&add-to-cart=2442&variation_id=2443&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"189";s:11:"prettyPrice";s:6:"USD189";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/MediaAnalytics?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:133:"https://shop.matomo.org/product/mediaanalytics/?attribute_type=Up+to+4+users&add-to-cart=2442&variation_id=2443&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"319";s:11:"prettyPrice";s:6:"319EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/MediaAnalytics?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:133:"https://shop.matomo.org/product/mediaanalytics/?attribute_type=5+to+15+users&add-to-cart=2442&variation_id=2444&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"369";s:11:"prettyPrice";s:6:"USD369";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/MediaAnalytics?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:133:"https://shop.matomo.org/product/mediaanalytics/?attribute_type=5+to+15+users&add-to-cart=2442&variation_id=2444&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"479";s:11:"prettyPrice";s:6:"479EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/MediaAnalytics?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:135:"https://shop.matomo.org/product/mediaanalytics/?attribute_type=Unlimited+users&add-to-cart=2442&variation_id=2445&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"549";s:11:"prettyPrice";s:6:"USD549";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/MediaAnalytics?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:135:"https://shop.matomo.org/product/mediaanalytics/?attribute_type=Unlimited+users&add-to-cart=2442&variation_id=2445&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:76:"https://shop.matomo.org/product/mediaanalytics/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"4.80";s:11:"ratingCount";i:5;s:11:"reviewCount";i:5;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.6";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:55:"https://plugins.matomo.org/MediaAnalytics/5.0.6/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:4412:"

<p>See how your video and audio content performs in detail. Uncover where people stay hooked and where they drift, offering you actionable insights for optimisation. Try now for free.</p>

<p>Ever feel like using play counts to analyse your media performance isn\'t enough? Optimising your content becomes a guessing game when you don\'t know which parts truly resonate with your audience and how their media consumption connects to conversions. And that\'s not the way to go.</p>

<h3>How Media Analytics Works</h3>

<h4>A Complete Picture, From Views to Value</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>We all love seeing those view counts climb, but what do they really tell us? With Media Analytics, it\'s not just about numbers—it\'s about the narratives behind them.</p>
<p>By analysing finish rates, time spent, and engagement trends, you can truly comprehend the story of your audience\'s connection to your content. And by linking media consumption directly to conversions, you have a clear pathway to understand the ROI of every piece of content.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MediaAnalytics/m1.gif" style="margin-left:24px;" alt="A Complete Picture, From Views to Value" />
</div>
</div>

<h4>Power Moments, Unveiled</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Every media piece has its golden moments—the segments that transform the audience from mere spectators to potential customers. But spotting them amidst the entirety of your content? That used to be like finding a needle in a haystack.</p>
<p>Not anymore. Media Analytics allows you to identify these key moments, ensuring you recognise what\'s working and have the insights to replicate that success in future content.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MediaAnalytics/m2.png" style="margin-left:24px;" alt="Power Moments, Unveiled" />
</div>
</div>

<h4>Decoding the User\'s Journey</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Before that play button is clicked, and long after the video ends, your audience is on a journey with your brand. Wouldn\'t it be great to map out every step? With Media Analytics, you finally can.</p>
<p>Trace the steps your audience takes pre and post-media consumption, offering a comprehensive understanding of their experience and revealing opportunities for further engagement.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MediaAnalytics/m3.png" style="margin-left:24px;" alt="Decoding the User\'s Journey" />
</div>
</div>

<h4>Decisions at the Speed of Now</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>In the bustling world of digital media, waiting can mean missed opportunities. Why act on yesterday\'s data when today\'s insights are at your fingertips?</p>
<p>With real-time data streaming, Media Analytics ensures you\'re always up-to-date with your content\'s performance, ready to pivot or capitalise based on live feedback.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MediaAnalytics/m4.png" style="margin-left:24px;" alt="Decisions at the Speed of Now" />
</div>
</div>

<h4>Simplicity at its Finest</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Analysing your audio and video content shouldn\'t feel like rocket science. Media Analytics works right after you install your tracking code on your site. Zero configuration. Zero stress.</p>
<p>Jump into your data journey without the hurdles of complex setups. After all, it\'s the insights you\'re after—not a tech degree.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/MediaAnalytics/m5.jpg" style="margin-left:24px;" alt="Simplicity at its Finest" />
</div>
</div>

<h3>Try Media Analytics Today</h3>

<p>Why stay in the dark when you can harness the power of detailed, user-centric insights? Discover what works, optimise, and make your content shine with Matomo\'s Media Analytics plugin.</p>

<p>Are you ready to elevate your content strategy? Start your 30-day free trial no and chart a brighter course forward.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:540:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/media-analytics/">Media Analytics User Guide</a> and the <a href="https://matomo.org/faq/media-analytics/">Media Analytics FAQ</a> cover how to get the most out of this plugin. The <a href="https://developer.matomo.org/guides/media-analytics">Media Analytics developer guides</a> help you setting up  the tracking of your video and audio on your websites or apps.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:12;a:31:{s:4:"name";s:20:"WooCommerceAnalytics";s:11:"displayName";s:21:"WooCommerce Analytics";s:5:"owner";s:10:"matomo-org";s:11:"description";s:151:"Drive more revenue, improve your sales funnel, and get accurate insights with our Matomo Analytics Ecommerce tracking integration for your WooCommerce.";s:8:"homepage";s:47:"https://plugins.matomo.org/WooCommerceAnalytics";s:15:"createdDateTime";s:19:"2017-06-26 08:01:33";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:10:{i:0;s:5:"piwik";i:1;s:11:"woocommerce";i:2;s:9:"wordpress";i:3;s:4:"shop";i:4;s:9:"ecommerce";i:5;s:11:"integration";i:6;s:4:"cart";i:7;s:9:"purchases";i:8;s:5:"order";i:9;s:6:"matomo";}s:9:"basePrice";i:35;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 03:26:51";s:13:"latestVersion";s:5:"5.0.4";s:12:"numDownloads";N;s:11:"screenshots";a:5:{i:0;s:78:"https://plugins.matomo.org/WooCommerceAnalytics/images/5.0.4/0_Integration.png";i:1;s:84:"https://plugins.matomo.org/WooCommerceAnalytics/images/5.0.4/1_EcommerceOverview.png";i:2;s:79:"https://plugins.matomo.org/WooCommerceAnalytics/images/5.0.4/2_EcommerceLog.png";i:3;s:75:"https://plugins.matomo.org/WooCommerceAnalytics/images/5.0.4/3_Products.png";i:4;s:72:"https://plugins.matomo.org/WooCommerceAnalytics/images/5.0.4/4_Sales.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:47:"https://plugins.matomo.org/WooCommerceAnalytics";s:10:"variations";a:2:{i:0;a:9:{s:5:"price";s:2:"39";s:11:"prettyPrice";s:5:"39EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:74:"https://plugins.matomo.org/WooCommerceAnalytics?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:148:"https://shop.matomo.org/product/plugin-woocommerceanalytics/?attribute_type=Unlimited+users&add-to-cart=4332&variation_id=4333&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:2:"39";s:11:"prettyPrice";s:5:"USD39";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:74:"https://plugins.matomo.org/WooCommerceAnalytics?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:148:"https://shop.matomo.org/product/plugin-woocommerceanalytics/?attribute_type=Unlimited+users&add-to-cart=4332&variation_id=4333&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:89:"https://shop.matomo.org/product/plugin-woocommerceanalytics/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"5.00";s:11:"ratingCount";i:1;s:11:"reviewCount";i:1;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.4";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:61:"https://plugins.matomo.org/WooCommerceAnalytics/5.0.4/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:4264:"

<p>Transform your WooCommerce store with Matomo. Discover what your visitors like and elevate your site\'s performance with robust reporting and accurate data.</p>

<p>If you feel trapped between WooCommerce Analytics\' limitations and Google Analytics\' maze, it\'s time you carve a new route.</p>

<p>Uncover your most profitable channels, campaigns, pages, and products and learn more about your customers with Matomo\'s WooCommerce Analytics plugin.</p>

<p>Integrate your ecommerce store with Matomo and supercharge your web analytics.</p>

<h3>How WooCommerce Analytics Works</h3>

<h4>Unparalleled Ecommerce Analytics for WooCommerce</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Get a comprehensive snapshot of your store\'s performance and key metrics such as order counts, revenue per visit, and the average conversion rate, order value, and order size.</p>
<p>Make informed decisions about your strategy and ensure every move aligns with your business\'s growth trajectory.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/WooCommerceAnalytics/image1.png" style="margin-left:24px;" alt="Unparalleled Ecommerce Analytics for WooCommerce" />
</div>
</div>

<h4>Study How Your Products Perform</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Gain clarity on your products\' performance with in-depth reports. Identify top sellers, spotlight profitability champions, and unearth hidden opportunities to elevate your profit margins.</p>
<p>Leverage the power of data to maximise every product\'s potential and make the most out of your lineup.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/WooCommerceAnalytics/image2.jpg" style="margin-left:24px;" alt="Study How Your Products Perform" />
</div>
</div>

<h4>Analyse Your Best-Selling Channels</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Get a detailed breakdown of your channels\' performance and reveal not just your top sellers but also the underperformers.</p>
<p>Pinpoint where the gold mines are and double down on the winners while cutting your losses. Optimising your returns will never be this easy.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/WooCommerceAnalytics/image3.jpg" style="margin-left:24px;" alt="Analyse Your Best-Selling Channels" />
</div>
</div>

<h4>Seamless Integration in the Blink of an Eye</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Installing Matomo into your WooCommerce store couldn\'t be any easier. Just head to the WordPress plugins marketplace and install "Matomo Analytics." Once activated, enable tracking, and you\'re all set!</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/WooCommerceAnalytics/image4.png" style="margin-left:24px;" alt="Seamless Integration in the Blink of an Eye" />
</div>
</div>

<h4>Dig Deep Into Who\'s Visiting and Buying From Your Store</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Ever wonder what paths your visitors take on your site? With the Visits Log, you can do more than wonder – you can see it all.</p>
<p>Browse through each visitor’s session, find out what they\'re looking for, see what catches their interest, or even spot the pages that push them to convert.</p>
<p>It\'s like having a behind-the-scenes pass to your site, helping you tailor the experience even more to your audience\'s needs.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/WooCommerceAnalytics/image5.png" style="margin-left:24px;" alt="Dig Deep Into Who\'s Visiting and Buying From Your Store" />
</div>
</div>

<h3>Try WooCommerce Analytics Today</h3>

<p>Unlock the full potential of your store with Matomo\'s WooCommerce Analytics plugin. Dive deep into actionable insights, prioritise the channels that matter, and truly understand your visitors\' journeys.</p>

<p>Start your 30-day free trial today and empower your ecommerce strategy with data-driven decisions.</p>";s:3:"faq";s:3354:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Which WooCommerce versions are supported?</strong></p>

<p>WooCommerce 2.4 and newer is supported.</p>

<p><strong>Which WordPress versions are supported?</strong></p>

<p>The plugin has been tested with WordPress 4.5 and higher. It also supports WordPress 5.X.</p>

<p><strong>Does the plugin support product variations / variables?</strong></p>

<p>Yes, product variations are supported.</p>

<p><strong>Does the plugin support WooCommerce Subscriptions?</strong></p>

<p>Yes, the WooCommerce Subscription plugin is supported and renewals are tracked as well.</p>

<p><strong>How is this plugin different to other WooCommerce Matomo / Piwik plugins?</strong></p>

<p>Other plugins don\'t really work at all, and if they work they don\'t track the data correctly.</p>

<p>As we are using WooCommerce ourselves on the matomo.org Marketplace we can ensure it works very well, is stable and it doesn\'t have any known security issues.</p>

<p>This plugin tracks the data in a special way to ensure very accurate tracking of cart updates and orders that you won\'t get anywhere else. This allows you for example to much better find out where your users abandon your cart. As the creators of Matomo, we can also ensure that the data is tracked correctly.</p>

<p>Another benefit of our solution is, that it tracks orders and cart updates even if a user is using an ad-blocker. In this case you might not see any page views, but still be able to analyze all ecommerce related information.</p>

<p><strong>Do I still need a plugin to track regular page views, events, etc?</strong></p>

<p>Yes, you will still need a plugin do track regular pageviews, outlinks, downloads and more. We recommend to use our WooCommerce plugin in combination with <a href="https://wordpress.org/plugins/wp-piwik/">WP-Matomo/WP-Piwik</a>.</p>

<p><strong>How do I install and update the plugin on WooCommerce?</strong></p>

<p>Once you have installed this plugin on your Matomo, go to "Administration" and then "WooCommerce" in Matomo. There you will find straight forward installation instructions and the download of the WooCommerce plugin.</p>

<p>You will be able to update the WooCommerce plugin with just one click.</p>

<p><strong>Are there any known issues?</strong></p>

<p>It currently may create once a new visitor as soon as a cart is updated. If this is the case, all following pageviews and actions will be tracked into the newly created visitor. This happens only when for example a user visited your shop in the past, deletes all the cookies and then visits your shop again. It may also happen when opening the website in an "Incognito window" in your browser.</p>

<p><strong>Are there any other requirements?</strong></p>

<p>The WooCommerce server needs to be able to ping (via HTTP/S) your Matomo installation in order to track orders and cart updates.</p>

<p>If you don\'t know what that means, you very likely don\'t need to worry about it and it will just work.</p>

<p><strong>Where do I find the logs of the WooCommerce plugin?</strong></p>

<p>If you enable the logging of all tracking requests to a file, you will find the logs under <code>wp-content/uploads/wc-logs/woo-piwik-tracking-yyyy-dd-mm-*.log</code>.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:13;a:31:{s:4:"name";s:9:"UsersFlow";s:11:"displayName";s:10:"Users Flow";s:5:"owner";s:10:"matomo-org";s:11:"description";s:150:"Users Flow is a visual representation of the most popular paths your users take through your website & app which lets you understand your users needs.";s:8:"homepage";s:36:"https://plugins.matomo.org/UsersFlow";s:15:"createdDateTime";s:19:"2016-12-13 02:33:57";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:12:{i:0;s:5:"users";i:1;s:9:"Marketing";i:2;s:12:"optimization";i:3;s:4:"path";i:4;s:10:"conversion";i:5;s:4:"goal";i:6;s:3:"cro";i:7;s:8:"visitors";i:8;s:4:"flow";i:9;s:5:"sales";i:10;s:5:"click";i:11;s:11:"interaction";}s:9:"basePrice";i:85;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 03:24:50";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";N;s:11:"screenshots";a:6:{i:0;s:69:"https://plugins.matomo.org/UsersFlow/images/5.0.2/1_Visualization.png";i:1;s:72:"https://plugins.matomo.org/UsersFlow/images/5.0.2/2_Interaction_Menu.png";i:2;s:75:"https://plugins.matomo.org/UsersFlow/images/5.0.2/3_Interaction_Details.png";i:3;s:65:"https://plugins.matomo.org/UsersFlow/images/5.0.2/4_Top_Paths.png";i:4;s:64:"https://plugins.matomo.org/UsersFlow/images/5.0.2/5_Overview.png";i:5;s:67:"https://plugins.matomo.org/UsersFlow/images/5.0.2/6_Page_Titles.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:36:"https://plugins.matomo.org/UsersFlow";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:2:"89";s:11:"prettyPrice";s:5:"89EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/UsersFlow?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/usersflow/?attribute_type=Up+to+4+users&add-to-cart=2633&variation_id=2634&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:2:"99";s:11:"prettyPrice";s:5:"USD99";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/UsersFlow?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/usersflow/?attribute_type=Up+to+4+users&add-to-cart=2633&variation_id=2634&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"169";s:11:"prettyPrice";s:6:"169EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/UsersFlow?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/usersflow/?attribute_type=5+to+15+users&add-to-cart=2633&variation_id=2635&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"199";s:11:"prettyPrice";s:6:"USD199";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/UsersFlow?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/usersflow/?attribute_type=5+to+15+users&add-to-cart=2633&variation_id=2635&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"259";s:11:"prettyPrice";s:6:"259EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/UsersFlow?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:130:"https://shop.matomo.org/product/usersflow/?attribute_type=Unlimited+users&add-to-cart=2633&variation_id=2636&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"299";s:11:"prettyPrice";s:6:"USD299";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:63:"https://plugins.matomo.org/UsersFlow?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:130:"https://shop.matomo.org/product/usersflow/?attribute_type=Unlimited+users&add-to-cart=2633&variation_id=2636&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:71:"https://shop.matomo.org/product/usersflow/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"4.33";s:11:"ratingCount";i:3;s:11:"reviewCount";i:3;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:50:"https://plugins.matomo.org/UsersFlow/5.0.2/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:3910:"

<p>Map the paths your users take through your website or app. Uncover friction points to create smoother interactions, improve your user experience, and increase conversions.</p>

<p>Ever felt that despite crafting a seemingly flawless site layout, users are still bypassing that crucial CTA? Nothing is more exasperating than realising a mismatched user path compromises your visitors\' experience and conversion rates.</p>

<p>Walk your site in your visitors\' shoes with Matomo\'s User Flows - a dynamic visualisation of traffic patterns. Track every step in their journey to see where they deviate or drop off. Segment your user flows to study how different audiences behave and adjust your design for their needs.</p>

<p>Optimise CTAs, address high-exit pages and tackle any navigational surprises with confidence. Shape your user experience, ensuring every interaction leads to higher conversions.</p>

<h3>How User Flow Works</h3>

<h4>Visualise the Journey Your Visitors Take</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Study how your visitors go through your site and unlock a deeper understanding of their behaviour.</p>
<p>Adjust the user flow\'s detail by configuring the granularity and number of steps to display. Make data-driven decisions that shape and refine your site\'s user journey, optimising for both engagement and conversion.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/UsersFlow/image1.jpg" style="margin-left:24px;" alt="Visualise the Journey Your Visitors Take" />
</div>
</div>

<h4>Analyse the User Flow of Any Page, Anytime, Anywhere</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Gain detailed insights into how your visitors navigate to and from any specific page on your site. </p>
<p>Add this visualisation to your dashboard and share this key data with your team or clients to keep them always in the loop.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/UsersFlow/image2.gif" style="margin-left:24px;" alt="Analyse the User Flow of Any Page, Anytime, Anywhere" />
</div>
</div>

<h4>View the Most Popular Paths</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Discover which paths and interactions resonate most with your visitors with the "Top Paths" report.</p>
<p>Prioritise content, optimise navigation, and align your site\'s structure with their preferences to create a compelling user experience.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/UsersFlow/image3.png" style="margin-left:24px;" alt="View the Most Popular Paths" />
</div>
</div>

<h4>Study How Your Visitors Engage with Your Site</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Analyse how your visitors engage with each path. Spotlight high drop-off pages and unexpected exits to uncover new opportunities for improvement. </p>
<p>Whether it\'s a minor bug or a design flaw, get the clarity you need to refine the user experience, ensuring visitors stay interested and connected throughout their journey.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/UsersFlow/image4.png" style="margin-left:24px;" alt="Study How Your Visitors Engage with Your Site" />
</div>
</div>

<h3>Try User Flow Today</h3>

<p>Every twist, turn, and exit from your site tells a story. Take your web analytics beyond numbers and get a visual map of your visitors\' journeys. Learn what captivates them and what might deter them from buying or signing up. Craft a user experience that resonates, converts, and keeps your visitors coming back for more.</p>

<p>Start your free 30-day trial and watch your site thrive like never before.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:413:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/users-flow/">Users Flow User Guide</a> and the <a href="https://matomo.org/faq/users-flow/">Users Flow FAQ</a> 
cover how to get the most out of this plugin.</p>

<p>For any other question feel free to <a href="#support">contact us</a>.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:14;a:31:{s:4:"name";s:7:"Funnels";s:11:"displayName";s:7:"Funnels";s:5:"owner";s:10:"matomo-org";s:11:"description";s:128:"Identify and understand where your visitors drop off to increase your conversions, sales and revenue with your existing traffic.";s:8:"homepage";s:34:"https://plugins.matomo.org/Funnels";s:15:"createdDateTime";s:19:"2016-12-02 05:26:56";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:9:{i:0;s:5:"piwik";i:1;s:9:"Marketing";i:2;s:8:"tracking";i:3;s:12:"optimization";i:4;s:10:"conversion";i:5;s:6:"funnel";i:6;s:4:"goal";i:7;s:3:"cro";i:8;s:6:"matomo";}s:9:"basePrice";i:175;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 03:21:23";s:13:"latestVersion";s:5:"5.0.4";s:12:"numDownloads";N;s:11:"screenshots";a:7:{i:0;s:70:"https://plugins.matomo.org/Funnels/images/5.0.4/1_Funnel_Evolution.png";i:1;s:66:"https://plugins.matomo.org/Funnels/images/5.0.4/2_Funnel_Steps.png";i:2;s:75:"https://plugins.matomo.org/Funnels/images/5.0.4/3_Funnel_Step_Referrers.png";i:3;s:75:"https://plugins.matomo.org/Funnels/images/5.0.4/4_Funnel_Step_Evolution.png";i:4;s:77:"https://plugins.matomo.org/Funnels/images/5.0.4/5_Funnel_Step_Visitor_Log.png";i:5;s:74:"https://plugins.matomo.org/Funnels/images/5.0.4/6_All_Funnels_Overview.png";i:6;s:66:"https://plugins.matomo.org/Funnels/images/5.0.4/7_Manage_Steps.png";}s:8:"previews";a:2:{i:0;a:3:{s:4:"type";s:4:"demo";s:8:"provider";s:4:"link";s:3:"url";s:189:"https://demo.matomo.cloud/index.php?module=CoreHome&action=index&idSite=1&period=day&date=yesterday#?idSite=1&period=day&date=yesterday&category=Funnels_Funnels&subcategory=General_Overview";}i:1;a:4:{s:4:"type";s:5:"video";s:8:"provider";s:7:"youtube";s:3:"url";s:50:"https://www.youtube-nocookie.com/embed/Ljx7-QdcEQY";s:2:"id";s:11:"Ljx7-QdcEQY";}}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:34:"https://plugins.matomo.org/Funnels";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"179";s:11:"prettyPrice";s:6:"179EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Funnels?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:126:"https://shop.matomo.org/product/funnels/?attribute_type=Up+to+4+users&add-to-cart=2584&variation_id=2585&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"199";s:11:"prettyPrice";s:6:"USD199";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Funnels?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:126:"https://shop.matomo.org/product/funnels/?attribute_type=Up+to+4+users&add-to-cart=2584&variation_id=2585&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"349";s:11:"prettyPrice";s:6:"349EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Funnels?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:126:"https://shop.matomo.org/product/funnels/?attribute_type=5+to+15+users&add-to-cart=2584&variation_id=2586&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"399";s:11:"prettyPrice";s:6:"USD399";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Funnels?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:126:"https://shop.matomo.org/product/funnels/?attribute_type=5+to+15+users&add-to-cart=2584&variation_id=2586&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"529";s:11:"prettyPrice";s:6:"529EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Funnels?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/funnels/?attribute_type=Unlimited+users&add-to-cart=2584&variation_id=2587&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"599";s:11:"prettyPrice";s:6:"USD599";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Funnels?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:128:"https://shop.matomo.org/product/funnels/?attribute_type=Unlimited+users&add-to-cart=2584&variation_id=2587&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:69:"https://shop.matomo.org/product/funnels/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"4.67";s:11:"ratingCount";i:3;s:11:"reviewCount";i:3;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.4";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:48:"https://plugins.matomo.org/Funnels/5.0.4/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:4038:"

<p>See how your audience flows through your marketing funnels. Find where your visitors drop off, fill in the gaps, and watch your conversions soar.</p>

<p>Getting a coherent view of your funnels can feel like assembling a jigsaw puzzle with missing pieces. One website change disrupts your users\' behaviour, and you\'re left guessing what went wrong—especially when you can\'t pinpoint how your audience segments interact with your funnel.</p>

<p>With the Funnels plugin, you can spot exactly where your visitors enter and exit a funnel and how many proceed to each of the next steps. Break down any conversion goal and boost your conversions, one step at a time.</p>

<h3>How Funnels Works</h3>

<h4>Learn Where Your Traffic Drops Off</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Visualise the steps your users take to complete a goal, like a purchase or a form signup. See how they perform at each stage.</p>
<p>Optimise your website or app at each point of friction to boost your conversion rates.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/Funnels/image1.png" style="margin-left:24px;" alt="Learn Where Your Traffic Drops Off" />
</div>
</div>

<h4>Create Funnels for Anything</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Any conversion goal can be turned into a funnel—a form, user signup, checkout flow; you name it. If it can be tracked, it can be a funnel.</p>
<p>With the Funnels plugin, you can set up a funnel using URLs, search queries, page titles, or events. Validate them and start tracking your funnel conversions without any hiccups.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/Funnels/image2.png" style="margin-left:24px;" alt="Create Funnels for Anything" />
</div>
</div>

<h4>Discover Every Detail of Your Visitors</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Get an in-depth look at each visitor that goes through your funnels with Matomo\'s other features like Visitor Log.</p>
<p>Examine where they visit from, what browser they use, and more, and study every action they take after entering the funnel or a specific step of your funnel.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/Funnels/image3.png" style="margin-left:24px;" alt="Discover Every Detail of Your Visitors" />
</div>
</div>

<h4>Get an Overview of Your Funnels Performance</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>See how your funnels perform every time you open the Funnels page. Glance over the most important funnel and goal metrics and stay on top of any issue.</p>
<p>View the visitor log with all the visitors that have entered this funnel and a table explaining how your funnel is configured and performing.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/Funnels/image4.png" style="margin-left:24px;" alt="Get an Overview of Your Funnels Performance" />
</div>
</div>

<h4>Monitor Your Funnels Progress</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>See how your funnels perform over time with trend analysis. Keep yourself informed on key funnel metrics like the “Funnel conversion rate”, “Number of funnel conversions”, and “Number of funnel entries.”</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/Funnels/image5.png" style="margin-left:24px;" alt="Monitor Your Funnels Progress" />
</div>
</div>

<h3>Try Funnels Today</h3>

<p>Create an unlimited number of goal funnels without data limits. Optimise your funnels for each segment to provide a smooth experience that boosts your conversions with Matomo\'s Funnels plugin.</p>

<p>Start your 30-day free trial today and elevate your funnel marketing game.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:431:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/funnels/">Funnels User Guide</a> and the <a href="https://matomo.org/faq/funnels/">Funnels FAQ</a> cover 
how to configure a funnel and how to get the most out of this plugin.</p>

<p>For any other question feel free to <a href="#support">contact us</a>.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:15;a:31:{s:4:"name";s:13:"CustomReports";s:11:"displayName";s:14:"Custom Reports";s:5:"owner";s:10:"matomo-org";s:11:"description";s:150:"Pull out the information you need in order to be successful. Develop your custom strategy to meet your individualized goals while saving money & time.";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2017-10-12 03:42:12";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:7:"segment";i:1;s:6:"custom";i:2;s:7:"reports";i:3;s:6:"filter";}s:9:"basePrice";i:200;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 03:19:32";s:13:"latestVersion";s:5:"5.0.9";s:12:"numDownloads";N;s:11:"screenshots";a:6:{i:0;s:85:"https://plugins.matomo.org/CustomReports/images/5.0.9/0_Report_Content_Definition.png";i:1;s:84:"https://plugins.matomo.org/CustomReports/images/5.0.9/1_Report_Filter_Definition.png";i:2;s:84:"https://plugins.matomo.org/CustomReports/images/5.0.9/2_Example_Report_By_Minute.png";i:3;s:81:"https://plugins.matomo.org/CustomReports/images/5.0.9/3_Example_Report_Events.png";i:4;s:94:"https://plugins.matomo.org/CustomReports/images/5.0.9/4_Example_Report_Revenue_Per_Country.png";i:5;s:82:"https://plugins.matomo.org/CustomReports/images/5.0.9/5_Example_Report_By_User.png";}s:8:"previews";a:2:{i:0;a:3:{s:4:"type";s:4:"demo";s:8:"provider";s:4:"link";s:3:"url";s:195:"https://demo.matomo.cloud/index.php?module=CoreHome&action=index&idSite=1&period=day&date=yesterday#?idSite=1&period=day&date=yesterday&segment=&category=CustomReports_CustomReports&subcategory=2";}i:1;a:4:{s:4:"type";s:5:"video";s:8:"provider";s:7:"youtube";s:3:"url";s:50:"https://www.youtube-nocookie.com/embed/Ss0jtGLaeDM";s:2:"id";s:11:"Ss0jtGLaeDM";}}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:40:"https://plugins.matomo.org/CustomReports";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"199";s:11:"prettyPrice";s:6:"199EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/CustomReports?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:139:"https://shop.matomo.org/product/plugin-customreports/?attribute_type=Up+to+4+users&add-to-cart=5900&variation_id=5901&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"229";s:11:"prettyPrice";s:6:"USD229";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/CustomReports?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:139:"https://shop.matomo.org/product/plugin-customreports/?attribute_type=Up+to+4+users&add-to-cart=5900&variation_id=5901&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"399";s:11:"prettyPrice";s:6:"399EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/CustomReports?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:139:"https://shop.matomo.org/product/plugin-customreports/?attribute_type=5+to+15+users&add-to-cart=5900&variation_id=5902&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"459";s:11:"prettyPrice";s:6:"USD459";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/CustomReports?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:139:"https://shop.matomo.org/product/plugin-customreports/?attribute_type=5+to+15+users&add-to-cart=5900&variation_id=5902&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"599";s:11:"prettyPrice";s:6:"599EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/CustomReports?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:141:"https://shop.matomo.org/product/plugin-customreports/?attribute_type=Unlimited+users&add-to-cart=5900&variation_id=5903&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"689";s:11:"prettyPrice";s:6:"USD689";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/CustomReports?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:141:"https://shop.matomo.org/product/plugin-customreports/?attribute_type=Unlimited+users&add-to-cart=5900&variation_id=5903&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:82:"https://shop.matomo.org/product/plugin-customreports/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"4.67";s:11:"ratingCount";i:3;s:11:"reviewCount";i:3;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.9";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:54:"https://plugins.matomo.org/CustomReports/5.0.9/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:4208:"

<p>Create unique reports that adapt to your unique goals and projects. Choose from over 250 metrics and dimensions and analyse your data for unparalleled visitor insights.</p>

<p>Standard reports like the ones you can see in your Matomo dashboard sometimes aren\'t enough to understand how people experience your site. If you need to quickly uncover hidden insights and provide actionable recommendations, you need reports customised to your needs.</p>

<p>With the Custom Reports plugin, you can tailor your reports to get the right information anytime. Gain actionable new insights that weren\'t possible before, and start making faster decisions that make a difference in your business.</p>

<h3>How Custom Reports Works</h3>

<h4>250+ Metrics and Dimensions at Your Fingertips</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Create custom reports from 163 metrics that span the entire visitor experience, from your pages to your forms, checkout, and content consumption.</p>
<p>Slice your metrics with 94 dimensions to make your analysis as in-depth and granular as you wish.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/CustomReports/image1.png" style="margin-left:24px;" alt="250+ Metrics and Dimensions at Your Fingertips" />
</div>
</div>

<h4>Automate and Export Your Custom Reports for Faster Insights</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Send email and SMS notifications to your colleagues or clients so they can access your custom reports. Schedule your reports daily, weekly, or monthly for regular updates on your campaign’s or site\'s performance.</p>
<p>Leverage the HTTP API to manage, fetch, and export your custom reports. You can even access the raw data via MySQL.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/CustomReports/image2.jpg" style="margin-left:24px;" alt="Automate and Export Your Custom Reports for Faster Insights" />
</div>
</div>

<h4>Filters Your Reports to Enhance Your Analysis</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Narrow your report\'s scope and learn how a subset of your audience performs for any given metric and dimension.</p>
<p>Study how different segments behave so you can uncover unique insights into what moves them to convert.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/CustomReports/image3.png" style="margin-left:24px;" alt="Filters Your Reports to Enhance Your Analysis" />
</div>
</div>

<h4>Analyse Anything that Happens on Your Site with Events Tracking</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Take your analytics to new heights by using events to study every action on your site. Drill down your reports by any dimension and learn the most popular video content, the most highly visited product pages, or the form elements that make them bounce.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/CustomReports/image4.png" style="margin-left:24px;" alt="Analyse Anything that Happens on Your Site with Events Tracking" />
</div>
</div>

<h4>Enjoy a Seamless Integration with Matomo</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>The Custom Reports plugin gives you access to features not supported by most standard Matomo reports.</p>
<p>Whether you want to detect trends with pivots, view the historical evolution of any dimension value, or study individual visits with visit logs, the Custom Reports plugin has you covered.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/CustomReports/image5.jpg" style="margin-left:24px;" alt="Enjoy a Seamless Integration with Matomo" />
</div>
</div>

<h3>Try Custom Reports Today</h3>

<p>Create unlimited custom reports without data limits. With the Custom Reports plugin, your data will be ready to analyse anytime you need it, hassle-free.</p>

<p>Start your 30-day free trial today.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:349:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/custom-reports/">Custom Reports User Guide</a> and the <a href="https://matomo.org/faq/custom-reports/">Custom Reports FAQ</a> cover how to get the most out of this plugin.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:16;a:31:{s:4:"name";s:31:"SearchEngineKeywordsPerformance";s:11:"displayName";s:34:"Search Engine Keywords Performance";s:5:"owner";s:10:"matomo-org";s:11:"description";s:146:"All keywords searched by your users on search engines are now visible into your Referrers reports! The ultimate solution to \'Keyword not defined\'.";s:8:"homepage";s:58:"https://plugins.matomo.org/SearchEngineKeywordsPerformance";s:15:"createdDateTime";s:19:"2017-03-14 11:24:34";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:8:{i:0;s:6:"search";i:1;s:6:"google";i:2;s:4:"Bing";i:3;s:7:"Keyword";i:4;s:3:"SEO";i:5;s:5:"Yahoo";i:6;s:8:"Crawling";i:7;s:6:"Yandex";}s:9:"basePrice";i:140;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-21 03:17:01";s:13:"latestVersion";s:5:"5.0.7";s:12:"numDownloads";N;s:11:"screenshots";a:8:{i:0;s:124:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/5.0.7/0_Search_Keywords_combined_across_Search_Engines.png";i:1;s:166:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/5.0.7/1_Keywords_on_Google_Search_Clicks_-_Impressions_-_Clickthrough_-_Position_in_results_page.png";i:2;s:111:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/5.0.7/2_Keywords_on_Bing_and_Yahoo_Search.png";i:3;s:100:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/5.0.7/3_Google_Images_Keywords.png";i:4;s:108:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/5.0.7/4_Keywords_used_on_Google_Videos.png";i:5;s:92:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/5.0.7/6_Crawl_Overview.png";i:6;s:140:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/5.0.7/7_Keyword_ranking_position_in_search_results_evolution_over_time.png";i:7;s:106:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/5.0.7/9_Page_crawling_issues_on_Bing.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:58:"https://plugins.matomo.org/SearchEngineKeywordsPerformance";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"139";s:11:"prettyPrice";s:6:"139EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:85:"https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:150:"https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=Up+to+4+users&add-to-cart=3221&variation_id=3222&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"159";s:11:"prettyPrice";s:6:"USD159";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:85:"https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:150:"https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=Up+to+4+users&add-to-cart=3221&variation_id=3222&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"279";s:11:"prettyPrice";s:6:"279EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:85:"https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:150:"https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=5+to+15+users&add-to-cart=3221&variation_id=3223&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"319";s:11:"prettyPrice";s:6:"USD319";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:85:"https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:150:"https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=5+to+15+users&add-to-cart=3221&variation_id=3223&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"419";s:11:"prettyPrice";s:6:"419EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:85:"https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:152:"https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=Unlimited+users&add-to-cart=3221&variation_id=3224&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"489";s:11:"prettyPrice";s:6:"USD489";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:85:"https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:152:"https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=Unlimited+users&add-to-cart=3221&variation_id=3224&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:93:"https://shop.matomo.org/product/searchenginekeywordsperformance/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"5.00";s:11:"ratingCount";i:6;s:11:"reviewCount";i:6;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.7";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:72:"https://plugins.matomo.org/SearchEngineKeywordsPerformance/5.0.7/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:4007:"

<p>Uncover the keywords people use to find your site in the search engines. Learn which keywords are driving the most traffic, leads, and sales.</p>

<p>There was a time when Google Analytics let you see what keywords people searched for to find your site. But one day, Google curtailed this critical information behind two fateful, cryptic words: "(not provided)."</p>

<p>Since then, there was no way you could access this data. Unless you used Matomo\'s Search Engine Keywords Performance plugin, that is.</p>

<p>With Search Engine Keywords Performance, the keywords people use to find your site become a dimension in your "Referrers" reports.</p>

<p>Monitor your keywords\' positions and boost your SEO performance like in the old days.</p>

<h3>How Search Engine Keywords Performance Works</h3>

<h4>All the Keywords Search Engines Don\'t Want You to See In One Report</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Google, Yahoo, and Bing may not want you to see what keywords get you traffic, but we do. How? By leveraging their APIs.</p>
<p>Slice the keywords data with one of the 90+ dimensions and mix them with metrics like impressions, clicks, CTR, and the average position in the SERPs.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SearchEngineKeywordsPerformance/image1.png" style="margin-left:24px;" alt="All the Keywords Search Engines Don\'t Want You to See In One Report" />
</div>
</div>

<h4>Get An In-Depth Look at Your Crawling Performance</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>No matter how well you optimise your site, without proper crawling, your SEO efforts will be in vain.</p>
<p>Discover the number of pages crawled and indexed, 404 pages found, and other issues that could affect your crawling performance in Yahoo and Bing.</p>
<p>The page crawling error reports will show you what pages could not be crawled by a search engine with a detailed reason, so you can fix them right away.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SearchEngineKeywordsPerformance/image2.png" style="margin-left:24px;" alt="Get An In-Depth Look at Your Crawling Performance" />
</div>
</div>

<h4>Identify What Keywords Your Images and Videos Bring You Traffic</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Considering that YouTube and Google Images are the second and third largest search engines, your videos and images can drive significant organic traffic to your site.</p>
<p>With the Search Engine Keywords Performance plugin, you can uncover every keyword they rank for and how many visitors they attract, among other metrics.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SearchEngineKeywordsPerformance/image3.png" style="margin-left:24px;" alt="Identify What Keywords Your Images and Videos Bring You Traffic" />
</div>
</div>

<h4>See How Your Keyword Performance Evolves Over Time</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Track your top keywords and see how your metrics and KPIs unfold. Monitor, identify, and optimise your SEO strategy for opportunities to get the highest return from your efforts.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SearchEngineKeywordsPerformance/image4.png" style="margin-left:24px;" alt="See How Your Keyword Performance Evolves Over Time" />
</div>
</div>

<h3>Try Search Engine Keywords Performance Today</h3>

<p>Unveil the true picture of your SEO performance with Matomo\'s Search Engine Keywords Performance plugin. See once again what keywords you rank for and take your organic traffic to the next level.</p>

<p>It\'s time you enjoy an unparalleled data-driven SEO strategy with Matomo. Start your 30-day free trial today.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:429:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/search-engine-keywords-performance/">Search Engine Keywords Performance User Guide</a> and the <a href="https://matomo.org/faq/search-engine-keywords-performance/">Search Engine Keywords Performance FAQ</a> cover how to get the most out of this plugin.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:17;a:31:{s:4:"name";s:9:"LoginLdap";s:11:"displayName";s:10:"Login Ldap";s:5:"owner";s:10:"matomo-org";s:11:"description";s:51:"LDAP authentication and synchronization for Matomo.";s:8:"homepage";s:46:"https://github.com/matomo-org/plugin-LoginLdap";s:15:"createdDateTime";s:19:"2013-12-26 19:24:04";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:4:"ldap";i:1;s:5:"login";i:2;s:14:"authentication";i:3;s:6:"active";i:4;s:9:"directory";i:5;s:8:"kerberos";i:6;s:3:"sso";}s:9:"basePrice";i:0;s:7:"authors";a:3:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:29:"https://github.com/matomo-org";}i:1;a:3:{s:4:"name";s:10:"Aivo Koger";s:5:"email";s:20:"aivo.koger@gmail.com";s:8:"homepage";s:30:"https://github.com/tehnotronic";}i:2;a:3:{s:4:"name";s:14:"Stefan Kreuter";s:5:"email";s:15:"info@gigatec.de";s:8:"homepage";s:21:"http://www.gigatec.de";}}s:13:"repositoryUrl";s:46:"https://github.com/matomo-org/plugin-LoginLdap";s:11:"lastUpdated";s:19:"2023-12-21 03:10:04";s:13:"latestVersion";s:5:"5.0.4";s:12:"numDownloads";i:235732;s:11:"screenshots";a:1:{i:0;s:80:"https://plugins.matomo.org/LoginLdap/images/5.0.4/LoginLdap_Admin_admin_page.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"462";s:15:"numContributors";s:2:"43";s:14:"lastCommitDate";s:19:"2023-12-23 12:09:14";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:5:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-04 03:00:04";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:33;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/LoginLdap/5.0.0/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-LoginLdap/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:41:"/api/2.0/plugins/LoginLdap/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-09-11 08:40:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:341;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/LoginLdap/5.0.1/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-LoginLdap/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:41:"/api/2.0/plugins/LoginLdap/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-11-06 06:36:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:461;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/LoginLdap/5.0.2/license";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/matomo-org/plugin-LoginLdap/commits/5.0.2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:41:"/api/2.0/plugins/LoginLdap/download/5.0.2";}i:3;a:10:{s:4:"name";s:5:"5.0.3";s:7:"release";s:19:"2023-12-04 08:20:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:658;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/LoginLdap/5.0.3/license";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/matomo-org/plugin-LoginLdap/commits/5.0.3";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:41:"/api/2.0/plugins/LoginLdap/download/5.0.3";}i:4;a:10:{s:4:"name";s:5:"5.0.4";s:7:"release";s:19:"2023-12-21 03:10:04";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:278;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/LoginLdap/5.0.4/license";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/matomo-org/plugin-LoginLdap/commits/5.0.4";s:10:"readmeHtml";a:4:{s:11:"description";s:15624:"

<p>Allows users in LDAP to log in to Matomo Analytics. Supports web server authentication (eg, for Kerberos SSO).</p>

<p>LoginLdap authenticates with an LDAP server and uses LDAP information to personalize Matomo.</p>

<h3>Installation</h3>

<p>To start using LoginLdap, follow these steps:</p>

<ol>
<li>Login as a superuser</li>
<li>On the <em>Manage &gt; Marketplace</em> admin page, install the LoginLdap plugin</li>
<li>On the <em>Manage &gt; Plugins</em> admin page, enable the LoginLdap plugin</li>
<li>Navigate to the <em>Settings &gt; LDAP</em> page</li>
<li><p>Enter and save settings for your LDAP servers</p>

<p><em>Note: You can test your servers by entering something into the \'Required User Group\' and clicking the test link that appears.
An error message will display if LoginLdap cannot connect to the LDAP server.</em></p></li>
<li><p>You can now login with LDAP cedentials.</p></li>
</ol>

<p><em><strong>Note:</strong> LDAP users are not synchronized with Matomo until they are first logged in. This means you cannot access a token auth for an LDAP user until the user is synchronized.
If you use the default LoginLdap configuration, you can synchronize all of your LDAP users at once using the <code>./console loginldap:synchronize-users</code> command.</em></p>

<h3>Troubleshooting</h3>

<p>To troubleshoot any connectivity issues, read our <a href="https://github.com/matomo-org/plugin-LoginLdap/wiki/Troubleshooting">troubleshooting guide</a>.</p>

<h3>Upgrading from 2.2.7</h3>

<p>Version 3.0.0 is a major rewrite of the plugin, so if you are upgrading for 2.2.7 you will have to do some extra work when upgrading:</p>

<ul>
<li><p>Navigate tothe <em>Settings &gt; LDAP</em> admin page. If the configuration options look broken, make sure to reload your browser cache. You can do this by reloading the page, or through your browser\'s settings.</p></li>
<li><p>The admin user for servers must now be a full DN. In the LDAP settings page, change the admin name to be the full DN (ie, cn=...,dc=...).</p></li>
<li><p>Uncheck the <code>Use LDAP for authentication</code> checkbox</p>

<p>Version 2.2.7 and below used an authentication strategy where user passwords were stored both in Matomo and in LDAP. In order to keep your current
users\' token auths from changing, that same strategy has to be used.</p></li>
</ul>

<h3>Configurations</h3>

<p>LoginLdap supports three different LDAP authentication strategies:</p>

<ul>
<li>using LDAP for authentication only</li>
<li>using LDAP for synchronization only</li>
<li>logging in with Kerberos SSO (or something similar)</li>
</ul>

<p>Each strategy has advantages and disadvantages. What you should use depends on your needs.</p>

<h3>Using LDAP for authentication only</h3>

<p>This strategy is more secure than the one below, but it requires connecting to the LDAP server on each login attempt.</p>

<p>With this strategy, every time a user logs in, LoginLdap will connect to LDAP to authenticate. On successful login, the user can
be synchronised, but the user\'s password is never stored in Matomo\'s DB, just in the LDAP server. Additionally, the token auth is generated using
a hash of a hash of the password, or is generated randomly.</p>

<p>This means that if the Matomo DB is ever compromised, your LDAP users\' passwords will still be safe.</p>

<p><em>Note: With this auth strategy, non-LDAP users are still allowed to login to Matomo. These users must be created through Matomo, not in LDAP.</em></p>

<p><strong>Steps to enable</strong></p>

<p><em>Note: this is the default configuration.</em></p>

<ol>
<li>Check the <code>Use LDAP for authentication</code> option and uncheck the <code>Use Web Server Auth (e.g. Kerberos SSO)</code> option.</li>
</ol>

<h3>Using LDAP for synchronization only</h3>

<p>This strategy involves storing the user\'s passwords in the Matomo DB using Matomo\'s hashing. As a result, it is not as secure as the above
method. If your Matomo DB is compromised, your LDAP users\' passwords will be in greater danger of being cracked.</p>

<p>But, this strategy opens up the possibility of not communicating with LDAP servers at all during authentication, which may provide a better user experience.</p>

<p><em>Note: With this auth strategy, non-LDAP users can login to Matomo.</em></p>

<p><strong>Steps to enable</strong></p>

<ol>
<li>Uncheck the <code>Use LDAP for authentication</code> option and uncheck the <code>Use Web Server Auth (e.g. Kerberos SSO)</code> option.</li>
<li><p>If you don\'t want to connect to LDAP while logging in, uncheck the <code>Synchronize Users After Successful Login</code> option.</p>

<p>a. If you uncheck this option, make sure your users are synchronized in some other way (eg, by using the <code>loginldap:synchronize-users</code> command).
  Matomo still needs information about your LDAP users in order to let them authenticate.</p></li>
</ol>

<h3>Logging in with Kerberos SSO (or something similar)</h3>

<p>This strategy delegates authentication to the webserver. You setup a system where the webserver authenticates the user and
sets the <code>$_SERVER[\'REMOTE_USER\']</code> server variable, and LoginLdap will assume the user is already authenticated.</p>

<p>This strategy will still connect to an LDAP server in order to synchronize user information, unless configured not to.</p>

<p><em>Note: With this auth strategy, any user that appears as a REMOTE_USER can login, even if they are not in LDAP.</em></p>

<p><strong>Steps to enable</strong></p>

<ol>
<li>Check the <code>Use Web Server Auth (e.g. Kerberos SSO)</code> option.</li>
<li><p>If you don\'t want to connect to LDAP while logging in, uncheck the <code>Synchronize Users After Successful Login</code> option.</p>

<p>a. If you uncheck this option, make sure your users are synchronized in some other way (eg, by using the <code>loginldap:synchronize-users</code> command).
  Matomo still needs information about your LDAP users in order to let them authenticate.</p></li>
</ol>

<h3>Features</h3>

<h3>Authenticating with Kerberos</h3>

<p>If you want to use Kerberos, check the <strong>Use Web Server Auth (e.g. Kerberos SSO)</strong> checkbox in the LDAP settings admin page.</p>

<p>Then, make sure your web server performs the necessary authentication and sets the <code>$_SERVER[\'REMOTE_USER\']</code> server variable when a user is authenticated.</p>

<p>When the <code>$_SERVER[\'REMOTE_USER\']</code> variable is set, LoginLdap will assume the user has already been authenticated. When <code>$_SERVER[\'REMOTE_USER\']</code> variable
is not set and "Always Use LDAP for Authentication" option is checked, LDAP authentication is performed. When "Always Use LDAP for Authentication" is unchecked,
normal authentication will take place.</p>

<p><em>Note: The plugin will still communicate with the LDAP server in order to synchronize user details, so if LDAP settings are incorrect, authentication will fail.</em></p>

<h3>Authenticating using LDAPS.</h3>

<p>In order to use LDAPS in the plugin, you would need to specify the hostname using ldaps://yourldapshost.com or alternatively using the LDAPS port of 636 in the configuration.</p>

<p>_Please note: When using a hostname that contains ldap:// or ldaps:// the port number specified in the configuration will be ignored. If you need to use a non-standard port then you will need to specify the LDAP server hostname without ldap:// or ldaps:// _</p>

<p>When using LDAPS - the server that you are hosting Matomo on will need to trust the CA that has issued the certificates for your LDAPS server (These certificates are often stored in /etc/openldap/certs)</p>

<p>Alternatively you can specify the location of the TSL certificates within the ldap.conf file that is normally stored in <em>/etc/openldap/ldap.conf</em> by adding the following:
TLS_REQCERT never
TLS_CACERT /usr/local/ssl/certs/myldap.pem
TLS_CACERTDIR /usr/local/ssl/certs</p>

<h3>Authenticating using LDAP + TLS.</h3>

<p>In order to use LDAP + TLS in the plugin, you would need to check the checkbox "Enable TLS".</p>

<p><em>Please note: This will call the ldap_start_tls() PHP function to start TLS before calling the ldap_bind()</em></p>

<p>When using LDAP + TLS - the server that you are hosting Matomo on will need to trust the CA that has issued the certificates for your LDAP server (These certificates are often stored in /etc/openldap/certs)</p>

<p>Alternatively you can specify the location of the TSL certificates within the ldap.conf file that is normally stored in <em>/etc/openldap/ldap.conf</em> by adding the following:
TLS_REQCERT never
TLS_CACERT /usr/local/ssl/certs/myldap.pem
TLS_CACERTDIR /usr/local/ssl/certs</p>

<h3>Specifying Fallback Servers</h3>

<p>LoginLdap v3.0.0 and greater supports specifying multiple LDAP servers to use. If connecting to one server fails, the other servers are used as fallbacks.</p>

<p>You can enter fallback servers by adding new servers at the bottom of the <em>Settings &gt; LDAP</em> page.</p>

<h3>Filtering Users in LDAP</h3>

<p>You can use the <strong>Required User Group</strong> and <strong>LDAP Search Filter</strong> settings to filter LDAP entries. Users whose entries do not match these filters
will not be allowed to authenticate.</p>

<p>Set <strong>Required User Group</strong> to the full DN of a group the user should be a member of. <em>Note: Internally, LoginLdap will issue a query using <code>(memberof=?)</code>
to find users of a certain group. Your server may require additional configuration to support <code>memberof</code>.</em></p>

<p>Set <strong>LDAP Search Filter</strong> to an LDAP filter string to use, for example: <code>(objectClass=person)</code> or
<code>(&amp;(resMemberOf=cn=mygroup,ou=commonOU,dc=www,dc=example,dc=org)(objectclass=person))</code>.</p>

<p>You can test both of these settings from within the LDAP settings page.</p>

<h3>LDAP User Synchronization</h3>

<p>LoginLdap will use information in LDAP to determine a user\'s alias and email address. On the <em>Settings &gt; LDAP</em> page, you can specify which LDAP attributes should be
use to determine these fields.</p>

<p><em>Note: If the LDAP attribute for a user\'s alias is not found, the user\'s alias is defaulted to the first and last names of the user. On the settings page you can
specify which LDAP attributes are used to determine a user\'s first &amp; last name.</em></p>

<p><strong>E-mail addresses</strong></p>

<p>E-mail addresses are required for Matomo users. If your users in LDAP do not have e-mail addresses, you can set the <strong>E-mail Address Suffix</strong> setting to an e-mail
address suffix, for example:</p>

<p><code>@myorganization.com</code></p>

<p>The suffix will be added to usernames to generate an e-mail address for your users.</p>

<p>Users are synchronized every time they log in. You can use the <code>loginldap:synchronize-users</code> command to synchronize users manually.</p>

<h3>Matomo Access Synchronization</h3>

<p>LoginLdap also supports synchronizing access levels using attributes found in LDAP. To use this feature, first, you will need to modify your LDAP server\'s
schema and add three special attributes to user entries:</p>

<ul>
<li>an attribute to specify the sites a user has view access to</li>
<li>an attribute to specify the sites a user has admin access to</li>
<li>and an attribute used to specify if a user is a superuser or not</li>
</ul>

<p><em>Note: You can choose whatever names you want for these attributes. You will be able to tell LoginLdap about these names in the LDAP settings page.</em></p>

<p>Then you must set these attributes correctly within LDAP, for example:</p>

<ul>
<li><code>view: all</code></li>
<li><code>admin: 1,2,3</code></li>
<li><code>superuser: 1</code></li>
</ul>

<p>Finally, in the LDAP settings page, check the <strong>Enable User Access Synchronization from LDAP</strong> checkbox and fill out the settings that appear below it.</p>

<p>User access synchronization occurs at the same time as normal user synchronization. So the <code>loginldap:synchronize-users</code> command will synchronize access levels too.</p>

<h4>Managing Access for Multiple Matomo Instances</h4>

<p>LoginLdap supports using a single LDAP server to manage access for multiple Matomo instances. If you\'d like to use this feature, you must specify special values
for LDAP access attributes. For example:</p>

<ul>
<li><code>view: mymatomoserver.whatever.com:1,2,3;myotherserver.com:all</code></li>
<li><code>admin: mymatomoserver.whatever.com:all;mythirdserver.com:3,4</code></li>
<li><code>superuser: myotherserver.com;myotherserver.com/othermatomo</code></li>
</ul>

<p>If you don\'t want to use URLs in your access attributes, you can use the <strong>Special Name For This Matomo Instance</strong> setting to specify a special name
for each of your Matomos. For example, if you set it to \'matomoServerA\' in one Matomo and \'matomoServerB\' in another, your LDAP attributes might look
like:</p>

<ul>
<li><code>view: matomoServerA:1,2,3;matomoServerB:all</code></li>
<li><code>admin: matomoServerA:4,5,6</code></li>
<li><code>superuser: matomoServerC</code></li>
</ul>

<p><strong>Using a custom access attribute format</strong></p>

<p>You can customize the separators used in access attributes by setting the <strong>User Access Attribute Server Specification Delimiter</strong> and
<strong>User Access Attribute Server &amp; Site List Separator</strong> settings.</p>

<p>If you set the <strong>User Access Attribute Server Specification Delimiter</strong> option to <code>\'#\'</code>, access attributes can be specified as:</p>

<p><code>view: matomoServerA:1,2,3#matomoServerB:all</code></p>

<p>If you set the <strong>User Access Attribute Server &amp; Site List Separator</strong> option to <code>\'#\'</code>, access attributes can be specified as:</p>

<p><code>view: matomoServerA#1,2,3;matomoServerB#all</code></p>

<h3>Security Considerations</h3>

<p><strong>User passwords</strong></p>

<p>For added security, LoginLdap\'s default configuration will not store user passwords or a hash of a user password within Matomo\'s DB. So if the Matomo DB is compromised
for whatever reason, user passwords will not be compromised.</p>

<p><strong>Token Auths</strong></p>

<p>LDAP has no concept of authentication tokens, so user token_auths are stored exclusively in Matomo\'s MySQL DB. If a token auth is compromised,
you can have Matomo generate a new.</p>

<p><strong>Logging</strong></p>

<p>LoginLdap uses debug logging extensively so problems can be diagnosed quickly. The logs should not contain sensitive information, but <em>you
should still disable DEBUG logging in production</em>.</p>

<p>If you need to debug a problem, enable it temporarily by changing the <code>[log] log_level</code> and <code>[log] log_writers</code> core INI config options.
If you use file logs, make sure to delete the logs after you are finished debugging.</p>

<h3>Commands</h3>

<p>LoginLdap comes with the following console commands:</p>

<ul>
<li><code>loginldap:synchronize-users</code>: Can be used to synchronize one, multiple, or all users in LDAP at once. If you\'d like to setup user access
within Matomo before a user logs in, this command should be used.</li>
</ul>

<h3>Changelog</h3>

<p>See <a href="https://github.com/matomo-org/plugin-LoginLdap/blob/4.x-dev/CHANGELOG.md">https://github.com/matomo-org/plugin-LoginLdap/blob/4.x-dev/CHANGELOG.md</a>.</p>

<h3>Support</h3>

<p><strong>Please direct any feedback to <a href="https://github.com/matomo-org/plugin-LoginLdap">https://github.com/matomo-org/plugin-LoginLdap</a>.</strong></p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:11055:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h4>LoginLdap 5.0.4</h4>

<ul>
<li>Fixed archiving error due to logs being printed for non-archive requests</li>
</ul>

<h4>LoginLdap 5.0.3</h4>

<ul>
<li>Added code to auto accept invitation if present</li>
</ul>

<h4>LoginLdap 5.0.2</h4>

<ul>
<li>Added code to skip password confirmation for create token auth</li>
</ul>

<h4>LoginLdap 5.0.1</h4>

<ul>
<li>Prefer using ellipsis over three dots</li>
</ul>

<h4>LoginLdap 5.0.0</h4>

<ul>
<li>Compatibility with Matomo 5</li>
</ul>

<h4>LoginLdap 4.7.3</h4>

<ul>
<li>Fixed migration script error for installs without prefix</li>
</ul>

<h4>LoginLdap 4.7.2</h4>

<ul>
<li>Fixed _isLDAPUser option not being deleted from option table on user deletion.</li>
</ul>

<h4>LoginLdap 4.7.1</h4>

<ul>
<li>Updated migration script to include only users synced in Matomo</li>
</ul>

<h4>LoginLdap 4.7.0</h4>

<ul>
<li>Started using SHA-256 instead of MD5 encryption while hashing auth secret</li>
</ul>

<h4>LoginLdap 4.6.0</h4>

<ul>
<li>Added option to disable/enable password confirmation.</li>
</ul>

<h4>LoginLdap 4.5.6</h4>

<ul>
<li>Updated log level to debug from warning during random password generation for a user.</li>
</ul>

<h4>LoginLdap 4.5.5</h4>

<ul>
<li>Allow single quote character in admin password, #308</li>
</ul>

<h4>LoginLdap 4.5.4</h4>

<ul>
<li>Started replacing invalid characters from server name key before fetching from config</li>
</ul>

<h4>LoginLdap 4.5.3</h4>

<ul>
<li>Added default value of servers as array instead of null</li>
</ul>

<h4>LoginLdap 4.5.2</h4>

<ul>
<li>Started updating user password on sync for existing user if synchronize_users_after_login=1</li>
<li>Fix to add new user  during sync without password confirmation</li>
</ul>

<h4>LoginLdap 4.5.1</h4>

<ul>
<li>Translation updates.</li>
</ul>

<h4>LoginLdap 4.5.0</h4>

<ul>
<li>Migrate from AngularJS to Vue.</li>
</ul>

<h4>LoginLdap 4.4.0</h4>

<ul>
<li>Fixed domain strip from login when equal to Domain\\UserLogin.</li>
<li>Added Start TLS option per LDAP server (change by Tomolimo).</li>
</ul>

<h4>LoginLdap 4.3.1</h4>

<ul>
<li>Fixed deprecation warning for PHP8.1.</li>
<li>Updated pronoun in text.</li>
</ul>

<h4>LoginLdap 4.3.0</h4>

<ul>
<li>Added new setting for the Web Server Auth strategy to avoid stripping off the domain of usernames. (change by EmTeedee)</li>
</ul>

<h4>LoginLdap 4.2.2</h4>

<ul>
<li>Fix issue with LDAP user login that caused password confirmation dialog to log users out temporarily.</li>
</ul>

<h4>LoginLdap 4.2.1</h4>

<ul>
<li>Compatibility with matomo 4.0 and above.</li>
</ul>

<h4>LoginLdap 4.2.0</h4>

<ul>
<li>Compatibility with matomo 4.0 and above.</li>
</ul>

<h4>LoginLdap 4.0.8</h4>

<ul>
<li>Compatibility with matomo 3.10 and above.</li>
</ul>

<h4>LoginLdap 4.0.7</h4>

<ul>
<li>Updated translations and Readme (no code change)</li>
</ul>

<h4>LoginLdap 4.0.6</h4>

<ul>
<li>Make plugin compatible with latest Matomo version</li>
</ul>

<h4>LoginLdap 4.0.4</h4>

<ul>
<li>Fixing bug that made it impossible to set append_user_email_suffix_to_username to 0 for appending username suffix to username for email and not during auth.</li>
</ul>

<h4>LoginLdap 4.0.0</h4>

<ul>
<li>Compatibility with Piwik 3</li>
<li>Configuration value \'enable_random_token_auth_generation\' has been removed as its obsolete with Piwik 3 having random auth tokens.</li>
<li>Command <code>loginldap:generate-token-auth</code> has been removed as auth tokens are independent from password now and new auth token can now be generated directly in user admin</li>
<li>Updated UI: Now completely works using AngularJS and material design</li>
</ul>

<h4>LoginLdap 3.3.1</h4>

<ul>
<li>Plugin settings: clarify an inline help for <code>Use Web Server Auth (e.g. Kerberos SSO)</code></li>
</ul>

<h4>LoginLdap 3.3.0</h4>

<ul>
<li>Compatibility with Piwik 2.16.0</li>
</ul>

<h4>LoginLdap 3.2.2</h4>

<ul>
<li>LDAP user can\'t change their passwords in Piwik\'s UI (passwords should be managed directly on LDAP host)</li>
</ul>

<h4>LoginLdap 3.2.1</h4>

<ul>
<li>Configureed LDAP passwords are no longer stored in the HTML in the LDAP settings page. This is a minor security update.</li>
</ul>

<h4>LoginLdap 3.2.0</h4>

<ul>
<li>Compatibility w/ Piwik 2.15.0</li>
</ul>

<h4>LoginLdap 3.1.5</h4>

<ul>
<li>Fixing regression caused by Piwik 2.14 change: authenticating in tracker w/ token_auth no longer worked if LoginLdap was used.</li>
<li>Workaround issue where \'LDAP Functions are Missing\' notification was never removed from the screen by making it transient &amp; closeable.</li>
</ul>

<h4>LoginLdap 3.1.2</h4>

<ul>
<li>Change placeholder value of server hostname config option and add a note so users can avoid the problem where ports are ignored when ldap:// URLs are used in the hostname option.</li>
<li>Make sure users upgrading from pre-3.0 versions set the correct LDAP settings.</li>
<li>Add documentation regarding using LoginLdap with Piwik\'s official mobile app.</li>
</ul>

<h4>LoginLdap 3.1.1</h4>

<ul>
<li>Make plugin compatible with latest Piwik version.</li>
</ul>

<h4>LoginLdap 3.1.0</h4>

<ul>
<li>add --skip-existing option to loginldap:synchronize-users command</li>
<li>warning displayed if Login + LoginLdap plugins are enabled at the same time</li>
<li>re-added the load ldap user form in the settings page</li>
<li>normal users can be managed when LdapAuth implementation is used (when Always Use LDAP for Authentication is checked)</li>
<li>fixed bug in web server auth strategy where LDAP auth was not used if REMOTE_USER var not found. made connecting via mobile app impossible.</li>
<li>fix bug in synchronizing users w/ user_email_suffix configured (first login worked, subsequent logins failed since username used in UserSynchronizer was incorrect)</li>
</ul>

<h4>LoginLdap 3.0.0:</h4>

<ul>
<li>Automatic creation of Piwik users using LDAP (old \'auto create users\' feature) is now standard.</li>
<li>Default access permissions can be specified for newly synchronized users.</li>
<li>Only super users are allowed to login w/o authenticating to LDAP now. Normal users stored in Piwik will not be allowed to authenticate if using LoginLdap.</li>
<li>It is possible now to test memberOf and filter settings from within the LDAP settings page.</li>
<li>Piwik access permissions can be specified from within LDAP using custom attributes.</li>
<li>It is allowed to specify multiple LDAP fallback servers. If one fails, the others are used.</li>
<li>Tests that make sure the PHP LDAP extension exists were fixed and also implemented in loginpage.</li>
<li>Special LDAP log was removed. Logging is done through Piwik\\Log now.</li>
<li>New setting for LDAP network timeout.</li>
<li>Menu entry is LDAP &gt; Settings now instead of Manage &gt; LDAP Users.</li>
<li>The synchronize single user feature in the settings page was removed.</li>
<li>Supports three types of authentication strategies.</li>
<li>Only compatible with Piwik 2.8 and above.</li>
</ul>

<h4>LoginLdap 2.2.7:</h4>

<ul>
<li>Auto create users from LDAP #23</li>
</ul>

<h4>LoginLdap 2.2.6:</h4>

<ul>
<li>Fixes empty characters</li>
</ul>

<h4>LoginLdap 2.2.5:</h4>

<ul>
<li>Fixes issue #22 \'unable to login\'</li>
</ul>

<h4>LoginLdap 2.2.4:</h4>

<ul>
<li>Added debug mode and more detail logging</li>
</ul>

<h4>LoginLdap 2.2.3:</h4>

<ul>
<li>Fixes #21 Ensure all variables are correctly set</li>
<li>Storing log file in tmp/logs/ and fix PHP log read warning</li>
</ul>

<h4>LoginLdap 2.2.2:</h4>

<ul>
<li>Adding missing namespace</li>
</ul>

<h4>LoginLdap 2.2.1:</h4>

<ul>
<li>Controller now extends Login controller. Reusing assets and templates.</li>
</ul>

<h4>LoginLdap 2.1.0:</h4>

<ul>
<li>Code updated to support Piwik 2.1 and newer</li>
</ul>

<h4>LoginLdap 2.0.9:</h4>

<ul>
<li>Fixes Piwik #4001 Deprecate force_ssl_login setting</li>
</ul>

<h4>LoginLdap 2.0.8:</h4>

<ul>
<li>Fixed issue #7 \'Deinstallation not possible\'</li>
</ul>

<h4>LoginLdap 2.0.7:</h4>

<ul>
<li>Fixed issue #4 \'useKerberos config problem\'</li>
</ul>

<h4>LoginLdap 2.0.6:</h4>

<ul>
<li>Tmuellerleile fixed default controller action</li>
</ul>

<h4>LoginLdap 2.0.5:</h4>

<ul>
<li>Fixed issue with log file creation and reading</li>
</ul>

<h4>LoginLdap 2.0.4:</h4>

<ul>
<li>Added \'View LDAP log from web as admin\'</li>
<li>Added better error detection and check if LDAP is enabled in PHP</li>
</ul>

<h4>LoginLdap 2.0.3:</h4>

<ul>
<li>Issue #26 Fixed \'malformed UTF8 in de.json\'</li>
<li>Issue #28 Fixed \'plugin install should add parameters to config.ini.php\'</li>
</ul>

<h4>LoginLdap 2.0.2:</h4>

<ul>
<li>Added \'de\' and \'et\' translations</li>
<li>Minor code enhancements</li>
</ul>

<h4>LoginLdap 2.0.1:</h4>

<ul>
<li>First public release in Piwik Marketplace</li>
</ul>

<h4>LoginLdap 2.0.0:</h4>

<ul>
<li>First release for Piwik 2.0, may contain bugs!</li>
<li>Added LDAP server port configuration option</li>
</ul>

<h4>LoginLdap 1.3.5:</h4>

<ul>
<li>Issue #20 Fixed \'kerberos is not working\'</li>
<li>Issue #19 Fixed \'wrong version info\'</li>
</ul>

<h4>LoginLdap 1.3.4:</h4>

<ul>
<li>Issue #18 Fixed \'iconv() expects parameter 3 to be string array given\'</li>
</ul>

<h4>LoginLdap 1.3.3:</h4>

<ul>
<li>Issue #17 Fixed \'Undefined index: phpVersion\'</li>
</ul>

<h4>LoginLdap 1.3.2:</h4>

<ul>
<li>Issue #15 Fixed \'Setting a custom mail field has no effect\'</li>
<li>Issue #16 Fixed \'Login fails because of non-UTF8 values passed to json_encode()\'</li>
</ul>

<h4>LoginLdap 1.3.1:</h4>

<ul>
<li>Issue #7 Added check on the activate handler to ensure the php-ldap extension is installed.</li>
<li>Issue #8 Only superuser can view (and modify) LDAP configuration</li>
<li>Issue #9 Fixed \'Undefined index: activeDirectory\'</li>
<li>Issue #11 E-Mail Address Being Required</li>
<li>Issue #12 Fixed \'Undefined index: topMenu\'</li>
<li>Issue #13 LDAP Users were not able login using the mobile app and using API in general as their credentials were not stored in the database.</li>
<li>Applied fix for Piwik Dev Zone Ticket #734: \'Correction added so Page Overlay feature works\'.</li>
<li>Added functionality to ensure that the Login and LoginLDAP plugins are never enabled simultaneously.</li>
<li>Removed support for IE6.</li>
<li>Changed log file location so to be include into the plugin directory and more easy to find.</li>
</ul>

<h4>LoginLdap 1.3.0:</h4>

<ul>
<li>Issue #1 Only superuser can modify LDAP configuration</li>
<li>Issue #2 LDAP search filters</li>
<li>Issue #3 Enable Kerberos login for piwik</li>
<li>Issue #4 You cannot login as superuser if LDAP connection fails</li>
<li>Issue #5 Add more LDAP logging options</li>
<li>Issue #6 Error while trying to read a specific config file entry \'LoginLdap\'</li>
</ul>

<h4>LoginLdap 1.2.0:</h4>

<ul>
<li>ActiveDirectory Support</li>
<li>Piwik &gt;= 1.6 Install Bug Fix</li>
</ul>

<h4>LoginLdap 1.0.0:</h4>

<ul>
<li>Initial Version just for plain anonymous Ldap</li>
</ul>";}s:8:"download";s:41:"/api/2.0/plugins/LoginLdap/download/5.0.4";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:62:"https://plugins.matomo.org/LoginLdap/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:18;a:31:{s:4:"name";s:13:"PremiumBundle";s:11:"displayName";s:14:"Premium Bundle";s:5:"owner";s:10:"matomo-org";s:11:"description";s:102:"All premium features in one bundle, make the most out of your Matomo and enjoy discounts of up to 45%!";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2017-10-12 19:43:38";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:8:{i:0;s:12:"optimization";i:1;s:10:"conversion";i:2;s:3:"cro";i:3;s:5:"sales";i:4;s:7:"content";i:5;s:6:"bundle";i:6;s:7:"revenue";i:7;s:7:"premium";}s:9:"basePrice";i:1500;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-20 09:36:30";s:13:"latestVersion";s:5:"3.1.4";s:12:"numDownloads";N;s:11:"screenshots";a:21:{i:0;s:74:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/0_Premium_Bundle.jpg";i:1;s:73:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/1_Click_Heatmap.jpg";i:2;s:97:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/2_Session_Recording_Move_And_Click_Path.jpg";i:3;s:84:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/2_Session_Recording_Player.png";i:4;s:70:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/3_AB_Testing.png";i:5;s:76:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/3_Manage_A_B_Tests.png";i:6;s:67:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/4_Funnels.png";i:7;s:74:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/5_Custom_Reports.png";i:8;s:70:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/5_Users_Flow.png";i:9;s:87:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/5_Users_Flow_Interaction_Menu.png";i:10;s:75:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/7_Crawling_Errors.png";i:11;s:148:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/7_Keywords_on_Google_Search_Clicks_-_Impressions_-_Clickthrough_-_Position_in_results_page.png";i:12;s:69:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/7_WebVitals.png";i:13;s:86:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/8_Form_Analytics_By_Page_URL.png";i:14;s:90:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/8_Form_Analytics_Drop_Off_Fields.png";i:15;s:77:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/9_Roll-Up_Reporting.jpg";i:16;s:73:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/10_Activity_Log.jpg";i:17;s:84:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/11_WooCommerce_Integration.png";i:18;s:76:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/11_WooCommerce_Log.png";i:19;s:85:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/12_Crash_Analytics_Overview.png";i:20;s:86:"https://plugins.matomo.org/PremiumBundle/images/3.1.4/12_Crash_Analytics_Real-time.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:1;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:40:"https://plugins.matomo.org/PremiumBundle";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:4:"1499";s:11:"prettyPrice";s:7:"1499EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:1263;s:14:"prettyDiscount";s:7:"1263€";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/PremiumBundle?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:139:"https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=Up+to+4+users&add-to-cart=5922&variation_id=5923&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:4:"1729";s:11:"prettyPrice";s:7:"USD1729";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:1453;s:14:"prettyDiscount";s:5:"$1453";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/PremiumBundle?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:139:"https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=Up+to+4+users&add-to-cart=5922&variation_id=5923&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:4:"2999";s:11:"prettyPrice";s:7:"2999EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:1953;s:14:"prettyDiscount";s:7:"1953€";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/PremiumBundle?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:139:"https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=5+to+15+users&add-to-cart=5922&variation_id=5924&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:4:"3449";s:11:"prettyPrice";s:7:"USD3449";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:2283;s:14:"prettyDiscount";s:5:"$2283";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/PremiumBundle?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:139:"https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=5+to+15+users&add-to-cart=5922&variation_id=5924&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:4:"4499";s:11:"prettyPrice";s:7:"4499EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:2693;s:14:"prettyDiscount";s:7:"2693€";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/PremiumBundle?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:141:"https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=Unlimited+users&add-to-cart=5922&variation_id=5925&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:4:"5179";s:11:"prettyPrice";s:7:"USD5179";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:3113;s:14:"prettyDiscount";s:5:"$3113";s:12:"addToCartUrl";s:67:"https://plugins.matomo.org/PremiumBundle?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:141:"https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=Unlimited+users&add-to-cart=5922&variation_id=5925&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:82:"https://shop.matomo.org/product/plugin-premiumbundle/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"5.00";s:11:"ratingCount";i:3;s:11:"reviewCount";i:3;}}s:6:"bundle";a:1:{s:7:"plugins";a:18:{i:0;a:2:{s:4:"name";s:14:"MediaAnalytics";s:11:"displayName";s:15:"Media Analytics";}i:1;a:2:{s:4:"name";s:9:"AbTesting";s:11:"displayName";s:11:"A/B Testing";}i:2;a:2:{s:4:"name";s:11:"ActivityLog";s:11:"displayName";s:12:"Activity Log";}i:3;a:2:{s:4:"name";s:7:"Funnels";s:11:"displayName";s:7:"Funnels";}i:4;a:2:{s:4:"name";s:10:"WhiteLabel";s:11:"displayName";s:11:"White Label";}i:5;a:2:{s:4:"name";s:9:"UsersFlow";s:11:"displayName";s:10:"Users Flow";}i:6;a:2:{s:4:"name";s:15:"RollUpReporting";s:11:"displayName";s:17:"Roll-Up Reporting";}i:7;a:2:{s:4:"name";s:13:"FormAnalytics";s:11:"displayName";s:14:"Form Analytics";}i:8;a:2:{s:4:"name";s:31:"SearchEngineKeywordsPerformance";s:11:"displayName";s:34:"Search Engine Keywords Performance";}i:9;a:2:{s:4:"name";s:23:"HeatmapSessionRecording";s:11:"displayName";s:27:"Heatmap & Session Recording";}i:10;a:2:{s:4:"name";s:20:"WooCommerceAnalytics";s:11:"displayName";s:21:"WooCommerce Analytics";}i:11;a:2:{s:4:"name";s:9:"LoginSaml";s:11:"displayName";s:10:"Login SAML";}i:12;a:2:{s:4:"name";s:13:"CustomReports";s:11:"displayName";s:14:"Custom Reports";}i:13;a:2:{s:4:"name";s:33:"MultiChannelConversionAttribution";s:11:"displayName";s:36:"Multi Channel Conversion Attribution";}i:14;a:2:{s:4:"name";s:7:"Cohorts";s:11:"displayName";s:7:"Cohorts";}i:15;a:2:{s:4:"name";s:27:"AdvertisingConversionExport";s:11:"displayName";s:29:"Advertising Conversion Export";}i:16;a:2:{s:4:"name";s:12:"SEOWebVitals";s:11:"displayName";s:14:"SEO Web Vitals";}i:17;a:2:{s:4:"name";s:14:"CrashAnalytics";s:11:"displayName";s:15:"Crash Analytics";}}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"3.1.4";s:7:"release";N;s:8:"requires";a:1:{s:5:"piwik";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:7349:"

<p>Elevate your data insights to new heights with unmatched functionality. Enjoy a comprehensive suite of plugins with savings of up to 46%.</p>

<p>As you dive into your data, seeking golden insights that could shape your marketing strategy, you find yourself lost in a sea of generic information.</p>

<p>Amplify Matomo\'s capabilities with the Premium Bundle and get access to 18 exceptional plugins at a discounted price. Start tracking every interaction on your site, store, or app and make data-driven decisions like never before.</p>

<table style="border:1px solid;">
<thead>
<tr>
<th style="padding:1rem;text-align:center;border:1px solid;">Category</th>
<th style="padding:1rem;text-align:center;border:1px solid;">Plugin</th>
</tr>
</thead>
<tbody>
<tr>
<td style="border:1px solid;padding:1rem;">SEO &amp; Marketing Attribution</td>
<td style="border:1px solid;padding:1rem;">
<ul>
<li><a href="https://plugins.matomo.org/SEOWebVitals">SEO Web Vitals</a></li>
<li><a href="https://plugins.matomo.org/SearchEngineKeywordsPerformance">Search Engine Keywords Performance</a></li>
<li><a href="https://plugins.matomo.org/MultiChannelConversionAttribution">Multi Channel Conversion Attribution</a></li>
</ul>
</td>
</tr>
<tr>
<td style="border:1px solid;padding:1rem;">Conversion Optimisation</td>
<td style="border:1px solid;padding:1rem;">
<ul>
<li><a href="https://plugins.matomo.org/Funnels">Funnels</a></li>
<li><a href="https://plugins.matomo.org/AbTesting">A/B Testing</a></li>
<li><a href="https://plugins.matomo.org/FormAnalytics">Form Analytics</a></li>
</ul>
</td>
</tr>
<tr>
<td style="border:1px solid;padding:1rem;">Campaign Optimisation</td>
<td style="border:1px solid;padding:1rem;">
<ul>
<li><a href="https://plugins.matomo.org/AdvertisingConversionExport">Advertising Conversion Export</a></li>
</ul>
</td>
</tr>
<tr>
<td style="border:1px solid;padding:1rem;">Content Optimisation</td>
<td style="border:1px solid;padding:1rem;">
<ul>
<li><a href="https://plugins.matomo.org/MediaAnalytics">Media Analytics</a></li>
</ul>
</td>
</tr>
<tr>
<td style="border:1px solid;padding:1rem;">Customisation &amp; Aggregated Data Analysis</td>
<td style="border:1px solid;padding:1rem;">
<ul>
<li><a href="https://plugins.matomo.org/WhiteLabel">White Label</a><a href="https://plugins.matomo.org/CustomReports">Custom Reports</a></li>
<li><a href="https://plugins.matomo.org/CustomReports">Custom Reports</a></li>
<li><a href="https://plugins.matomo.org/RollUpReporting">Roll-Up Reporting</a></li>
</ul>
</td>
</tr>
<tr>
<td style="border:1px solid;padding:1rem;">Ecommerce</td>
<td style="border:1px solid;padding:1rem;">
<ul>
<li><a href="https://plugins.matomo.org/WooCommerceAnalytics">WooCommerce Analytics</a></li>
</ul>
</td>
</tr>
<tr>
<td style="border:1px solid;padding:1rem;">User Behaviour Analysis</td>
<td style="border:1px solid;padding:1rem;">
<ul>
<li><a href="https://plugins.matomo.org/Cohorts">Cohorts</a><a href="https://plugins.matomo.org/UsersFlow">Users Flow</a></li>
<li><a href="https://plugins.matomo.org/UsersFlow">Users Flow</a></li>
<li><a href="https://plugins.matomo.org/HeatmapSessionRecording">Heatmap &amp; Session Recording</a></li>
</ul>
</td>
</tr>
<tr>
<td style="border:1px solid;padding:1rem;">Website Performance &amp; Security</td>
<td style="border:1px solid;padding:1rem;">
<ul>
<li><a href="https://plugins.matomo.org/CrashAnalytics">Crash Analytics</a></li>
<li><a href="https://plugins.matomo.org/ActivityLog">Activity Log</a></li>
<li><a href="https://plugins.matomo.org/LoginSaml">LoginSAML</a></li>
</ul>
</td>
</tr>
</tbody>
</table>

<p><br /></p>

<p>Whether you want to analyse how your visitors engage with your forms and media content, the user flows across your site, or how your funnels work, you can do it with the plugins within the Premium Bundle.</p>

<p>Embrace the full potential of your digital landscape. With the Premium Bundle, you\'re not just collecting data; you\'re unlocking a treasure trove of insights that will push your strategies forward and turn every visitor interaction into an opportunity for growth.</p>

<h3>How Premium Bundle Works</h3>

<h4>Unlock a Suite of Premium Plugins and Save 1,200€+ A Year</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Elevate your analytics capabilities without breaking the bank. The Premium Bundle will bring sophisticated tools to your fingertips while saving you up to 46% – that\'s 1,200€+ each year in savings.</p>
<p>With this bundle, you can elevate your analytics capabilities at a reduced cost, giving you the financial freedom to explore new opportunities while still benefiting from premium web analytics.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/PremiumBundle/image1.gif" style="margin-left:24px;" alt="Unlock a Suite of Premium Plugins and Save 1,200€+ A Year" />
</div>
</div>

<h4>Dig Deep Into Your Site\'s Performance</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Discover what truly moves the needle on your site. Pinpoint which products are your cash cows, which videos captivate your audience, and how to optimise your forms for higher conversions.</p>
<p>Run A/B tests to lift the conversions of every user flow, funnel, and cohort without creating complex reports.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/PremiumBundle/image2.gif" style="margin-left:24px;" alt="" />
</div>
</div>

<h4>Elevate Your User Experience with Crystal-Clear Insights</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Translate complex user interactions into vivid, easy-to-grasp visuals, including session recordings, heatmaps, user flows, and funnels.</p>
<p>Get the clarity you need to refine the user experience, whether a minor bug or a design flaw and ensure visitors stay engaged throughout their buying journey.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/PremiumBundle/image3.gif" style="margin-left:24px;" alt="Elevate Your User Experience with Crystal-Clear Insights" />
</div>
</div>

<h4>Reveal the Full Story Behind Each Visitor</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Step into your visitors\' shoes and explore their past interactions with unprecedented clarity. Map the complete journey, from their first visit until the present, and find opportunities for improving your UX.</p>
<p>Pinpoint exactly where visitors lose interest or encounter obstacles. Leverage your insights to streamline navigation, simplify your layouts, and tailor content, transforming your site into a journey that attracts, converts, and delights visitors.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/PremiumBundle/image4.jpg" style="margin-left:24px;" alt="" />
</div>
</div>

<h3>Try Premium Bundle Today</h3>

<p>Unleash the full potential of your data with the Premium Bundle. In just a few clicks, transform Matomo into an analytics powerhouse, harnessing 18 powerful plugins at a fraction of the cost.</p>

<p>Start your 30-day free trial and your decisions and strategies into new realms of success.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:19;a:31:{s:4:"name";s:12:"CodeInjector";s:11:"displayName";s:13:"Code Injector";s:5:"owner";s:8:"openmost";s:11:"description";s:47:"Inject CSS and JS code to your Matomo instance.";s:8:"homepage";s:19:"https://openmost.io";s:15:"createdDateTime";s:19:"2023-10-31 11:20:03";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:17:"ronan@openmost.io";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:47:"https://github.com/openmost/CodeInjector/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:40:"https://github.com/openmost/CodeInjector";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:5:{i:0;s:4:"code";i:1;s:8:"injector";i:2;s:3:"add";i:3;s:4:"head";i:4;s:4:"body";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:8:"Openmost";s:5:"email";s:17:"ronan@openmost.io";s:8:"homepage";s:19:"https://openmost.io";}}s:13:"repositoryUrl";s:40:"https://github.com/openmost/CodeInjector";s:11:"lastUpdated";s:19:"2023-12-19 08:54:03";s:13:"latestVersion";s:5:"5.0.8";s:12:"numDownloads";i:3607;s:11:"screenshots";a:1:{i:0;s:65:"https://plugins.matomo.org/CodeInjector/images/5.0.8/Settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"12";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-12-19 08:54:27";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:3:{i:0;a:10:{s:4:"name";s:5:"5.0.6";s:7:"release";s:19:"2023-11-22 16:24:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:0;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:54:"https://github.com/openmost/CodeInjector/commits/5.0.6";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:44:"/api/2.0/plugins/CodeInjector/download/5.0.6";}i:1;a:10:{s:4:"name";s:5:"5.0.7";s:7:"release";s:19:"2023-11-22 17:06:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:414;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:54:"https://github.com/openmost/CodeInjector/commits/5.0.7";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:44:"/api/2.0/plugins/CodeInjector/download/5.0.7";}i:2;a:10:{s:4:"name";s:5:"5.0.8";s:7:"release";s:19:"2023-12-19 08:54:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:702;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:54:"https://github.com/openmost/CodeInjector/commits/5.0.8";s:10:"readmeHtml";a:4:{s:11:"description";s:82:"

<p>Inject CSS and JS code to your Matomo instance using native Matomo hooks.</p>";s:3:"faq";s:1214:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>How to install this plugin</strong></p>

<p>This plugin is available in the official marketplace of Matomo. You have to install the same way as other plugins</p>

<ul>
<li>Go to the administration panel</li>
<li>Look for the Marketplace section and select "Plugins" in the dropdown</li>
<li>Then search for "<strong>CodeInjector</strong>", install and activate the plugin.</li>
</ul>

<p><strong>Is the plugin active for all Matomo users in my instance ?</strong></p>

<p>Yes, if you choose this plugin for your Matomo instance, only super user can use this plugin.</p>

<p><strong>How can I contribute to this plugin ?</strong></p>

<p>You can help me develop this plugin by contacting me. You can also create the project and request an integration. Any way you consider legitimate to contribute is welcome.</p>

<p><strong>How long this plugin will be maintained ?</strong></p>

<p>As long as possible, I have many project to maintain, I\'m the first user of this plugin and I use Matomo on many project, if I see errors, I\'ll patch this plugin faster as possible !</p>";s:13:"documentation";s:947:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>This plugin add two <code>textarea</code> fields where you can paste your code.</p>

<h3>Use case</h3>

<ul>
<li>Add CSS to customize your UI without theming</li>
<li>Add CSS to fix small issues</li>
<li>Add JS to enhance experience</li>
<li>Add JS to put a custom tracker in Matomo UI</li>
<li>Add external JS libraries to Matomo</li>
<li>Possibilities are limitless.</li>
</ul>

<h3>To paste your code in the right place use use the native Matomo hooks :</h3>

<ul>
<li><code>bodyTop</code> hook is the first line in <code>&lt;body&gt;</code></li>
<li><code>bodyBottom</code> hook is the last line in <code>&lt;body&gt;</code></li>
</ul>

<h3>Warning</h3>

<p>The code you add in these areas will be automatically added to all pages of your Matomo instance.</p>

<p> Don\'t copy code you don\'t understand. </p>";s:9:"changelog";s:742:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>v5.0.8</h3>

<ul>
<li>Fix compatibility with Matomo v5.0</li>
</ul>

<h3>v5.0.7</h3>

<h3>v5.0.6</h3>

<ul>
<li>Support Matomo v5</li>
</ul>

<h3>v4.0.6</h3>

<ul>
<li>Support Matomo v4.0.0 instead of 4.15.1</li>
</ul>

<h3>v4.0.5</h3>

<ul>
<li>Update FAQ (remove unnecessary API method)</li>
</ul>

<h3>v4.0.4</h3>

<ul>
<li>Fix FAQ syntax</li>
</ul>

<h3>v4.0.3</h3>

<ul>
<li>Support body bottom code</li>
</ul>

<h3>v4.0.2</h3>

<ul>
<li>Add readme</li>
<li>Release on Marketplace</li>
</ul>

<h3>v4.0.1</h3>

<ul>
<li>Fix input validators</li>
</ul>

<h3>v4.0.0</h3>

<ul>
<li>Init plugin</li>
</ul>";}s:8:"download";s:44:"/api/2.0/plugins/CodeInjector/download/5.0.8";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:65:"https://plugins.matomo.org/CodeInjector/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:20;a:31:{s:4:"name";s:18:"TagManagerExtended";s:11:"displayName";s:20:"Tag Manager Extended";s:5:"owner";s:8:"openmost";s:11:"description";s:68:"Adds several useful tags, triggers and variables to the Tag Manager.";s:8:"homepage";s:28:"https://openmost.io/products";s:15:"createdDateTime";s:19:"2023-10-02 21:20:03";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:17:"ronan@openmost.io";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:53:"https://github.com/openmost/TagManagerExtended/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:46:"https://github.com/openmost/TagManagerExtended";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:6:{i:0;s:7:"manager";i:1;s:4:"tags";i:2;s:3:"tag";i:3;s:10:"TagManager";i:4;s:8:"Extended";i:5;s:7:"Enhance";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:8:"Openmost";s:5:"email";s:17:"ronan@openmost.io";s:8:"homepage";s:19:"https://openmost.io";}}s:13:"repositoryUrl";s:46:"https://github.com/openmost/TagManagerExtended";s:11:"lastUpdated";s:19:"2023-12-18 20:28:03";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";i:873;s:11:"screenshots";a:1:{i:0;s:67:"https://plugins.matomo.org/TagManagerExtended/images/5.0.2/Tags.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"16";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-12-18 20:26:04";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:3:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-11-22 16:32:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:6;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/openmost/TagManagerExtended/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:50:"/api/2.0/plugins/TagManagerExtended/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-12-07 15:38:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:5;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/openmost/TagManagerExtended/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:50:"/api/2.0/plugins/TagManagerExtended/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-12-18 20:28:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:124;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/openmost/TagManagerExtended/commits/5.0.2";s:10:"readmeHtml";a:4:{s:11:"description";s:180:"

<p>This plugin adds several useful tags to the Tag Manager to allow you to deploy another solution in seconds.</p>

<p><strong>Tags list available in the description</strong></p>";s:3:"faq";s:1219:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>How to install this plugin</strong></p>

<p>This plugin is available in the official marketplace of Matomo. You have to install the same way as other plugins</p>

<ul>
<li>Go to the administration panel</li>
<li>Look for the Marketplace section and select "Plugins" in the dropdown</li>
<li>Then search for "<strong>Tag Manager Extended</strong>", install and activate the plugin.</li>
</ul>

<p><strong>Is the plugin active for all Matomo users in my instance ?</strong></p>

<p>Yes, if you choose this plugin for your Matomo instance, all users will be able to use it.</p>

<p><strong>How can I contribute to this plugin ?</strong></p>

<p>You can help me develop this plugin by contacting me. You can also create the project and request an integration. Any way you consider legitimate to contribute is welcome.</p>

<p><strong>How long this plugin will be maintained ?</strong></p>

<p>As long as possible, I have many project to maintain, I\'m the first user of this plugin and I use Matomo on many project, if I see errors, I\'ll patch this plugin faster as possible !</p>";s:13:"documentation";s:1488:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>1- Install the plugin from the marketplace or via GitHub</h3>

<p>Install this plugin from the Marketplace as super user or download the plugin and install it on your server from FTP in
the <code>/plugins</code> folder.</p>

<p>As a super user, enable the plugin via the "Settings &gt; Plugins" section.</p>

<h3>2 - Enjoy new Tags in the Tag Manager</h3>

<p>This plugin adds several useful tags, triggers and variables to the Tag Manager to let you deploy other solution in seconds.</p>



<h3>List of available tags :</h3>

<p><strong>[Ads]</strong></p>

<ul>
<li>Google Ads : Conversion</li>
</ul>

<p><strong>[Affiliates]</strong></p>

<ul>
<li>Affilae</li>
</ul>

<p><strong>[Analytics]</strong></p>

<ul>
<li>Matomo Analytics : Ecommerce</li>
<li>Google Analytics 4</li>
<li>Google Analytics 4 : Event</li>
<li>Hotjar</li>
<li>Microsoft Clarity</li>
</ul>

<p><strong>[Consent Management Platform]</strong></p>

<ul>
<li>Axeptio</li>
<li>CookieYes</li>
<li>Cookiebot</li>
<li>OneTrust</li>
</ul>

<p><strong>[Email]</strong></p>

<ul>
<li>Brevo</li>
<li>Klaviyo</li>
</ul>

<p><strong>[Openmost]</strong></p>

<ul>
<li>DataLayer Synchronization</li>
</ul>

<p><strong>[Others]</strong></p>

<ul>
<li>Slack</li>
</ul>



<h3>List of available variables :</h3>

<p><strong>[Custom variables]</strong></p>

<ul>
<li>Click data-attribute</li>
</ul>";s:9:"changelog";s:1296:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>v5.0.2</h3>

<p>Add tag to Tag Manager</p>

<ul>
<li>OneTrust</li>
</ul>

<h3>v5.0.1</h3>

<p>Add tag to Tag Manager</p>

<ul>
<li>Slack</li>
</ul>

<h3>v5.0.0</h3>

<p>Support Matomo v5</p>

<h3>v4.3.3</h3>

<p>Update documentation</p>

<h3>v4.3.1</h3>

<p>Update screenshots</p>

<h3>v4.3.0</h3>

<p>Add tags to Tag Manager</p>

<ul>
<li>Affilae</li>
<li>ListenLayer</li>
</ul>

<h3>v4.2.0</h3>

<p>Add tags to Tag Manager</p>

<ul>
<li>Matomo Analytics : Ecommerce</li>
</ul>

<h3>v4.1.0</h3>

<p>Add tags to Tag Manager</p>

<ul>
<li>Google Ads : Conversion</li>
<li>CookieYes</li>
<li>Cookiebot</li>
<li>Brevo</li>
<li>Klaviyo</li>
<li>DataLayer Synchronisation</li>
</ul>

<p>Update Axeptio tag to send events to _mtm</p>

<h3>v4.0.3</h3>

<p>Fix Axeptio tag compatibility with Matomo Tag Manager</p>

<h3>v4.0.2</h3>

<p>Update doc for Markdown readers</p>

<h3>v4.0.1</h3>

<p>Add custom variable template to Tag Manager</p>

<ul>
<li>Click data-attribute</li>
</ul>

<h3>v4.0.0</h3>

<p>Add tags to Tag Manager</p>

<ul>
<li>Axeptio</li>
<li>Google Analytics 4</li>
<li>Google Analytics 4 : Event</li>
<li>Hotjar</li>
<li>Microsoft Clarity</li>
</ul>";}s:8:"download";s:50:"/api/2.0/plugins/TagManagerExtended/download/5.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:71:"https://plugins.matomo.org/TagManagerExtended/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:21;a:31:{s:4:"name";s:12:"SEOWebVitals";s:11:"displayName";s:14:"SEO Web Vitals";s:5:"owner";s:10:"matomo-org";s:11:"description";s:121:"Improve your website performance, rank higher in search results and optimise your visitor experience with SEO Web Vitals.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2021-09-07 21:26:29";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:9:{i:0;s:6:"search";i:1;s:6:"engine";i:2;s:11:"performance";i:3;s:12:"optimization";i:4;s:6:"google";i:5;s:3:"SEO";i:6;s:10:"web vitals";i:7;s:6:"vitals";i:8;s:12:"optimisation";}s:9:"basePrice";i:75;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-18 03:08:49";s:13:"latestVersion";s:5:"5.0.3";s:12:"numDownloads";N;s:11:"screenshots";a:5:{i:0;s:67:"https://plugins.matomo.org/SEOWebVitals/images/5.0.3/0_Overview.png";i:1;s:69:"https://plugins.matomo.org/SEOWebVitals/images/5.0.3/1_Audit_Data.png";i:2;s:72:"https://plugins.matomo.org/SEOWebVitals/images/5.0.3/2_Row_Evolution.png";i:3;s:78:"https://plugins.matomo.org/SEOWebVitals/images/5.0.3/3_Audit_Row_Evolution.png";i:4;s:71:"https://plugins.matomo.org/SEOWebVitals/images/5.0.3/4_Custom_Alert.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:39:"https://plugins.matomo.org/SEOWebVitals";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:2:"79";s:11:"prettyPrice";s:5:"79EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/SEOWebVitals?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:140:"https://shop.matomo.org/product/plugin-seowebvitals/?attribute_type=Up+to+4+users&add-to-cart=58506&variation_id=58507&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:2:"89";s:11:"prettyPrice";s:5:"USD89";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/SEOWebVitals?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:140:"https://shop.matomo.org/product/plugin-seowebvitals/?attribute_type=Up+to+4+users&add-to-cart=58506&variation_id=58507&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"149";s:11:"prettyPrice";s:6:"149EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/SEOWebVitals?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:140:"https://shop.matomo.org/product/plugin-seowebvitals/?attribute_type=5+to+15+users&add-to-cart=58506&variation_id=58508&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"179";s:11:"prettyPrice";s:6:"USD179";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/SEOWebVitals?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:140:"https://shop.matomo.org/product/plugin-seowebvitals/?attribute_type=5+to+15+users&add-to-cart=58506&variation_id=58508&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"229";s:11:"prettyPrice";s:6:"229EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/SEOWebVitals?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/plugin-seowebvitals/?attribute_type=Unlimited+users&add-to-cart=58506&variation_id=58509&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"269";s:11:"prettyPrice";s:6:"USD269";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/SEOWebVitals?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/plugin-seowebvitals/?attribute_type=Unlimited+users&add-to-cart=58506&variation_id=58509&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:81:"https://shop.matomo.org/product/plugin-seowebvitals/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";N;s:11:"ratingCount";i:0;s:11:"reviewCount";i:0;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.3";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:53:"https://plugins.matomo.org/SEOWebVitals/5.0.3/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:4421:"

<p>Discover how fast and user-friendly your website truly is based on Google\'s Web Vitals. Optimise your visitor experience and boost your search rankings.</p>

<p>Web Vitals is Google\'s initiative to measure the health of a website, focusing on the Core Web Vitals: loading, interactivity, and visual stability. According to Google, the faster a page loads and the easier and more visually stable one is, the better the user experience.</p>

<p>There\'s a strong correlation between a website’s Core Web Vitals performance and its search engine rankings. So by optimising the Core Web Vitals, you won\'t just improve user experience but also your site\'s rankings.</p>

<p>With the SEO Web Vitals plugin, you can track your site\'s Web Vitals performance, find issues related to the key metrics, and remediate them to enhance your user experience and search engine rankings.</p>

<h3>How SEO Web Vitals Works</h3>

<h4>Get a Quick View of Your Pages\' Performance</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Gain an immediate understanding of your site\'s performance with detailed breakdowns of Core Web Vitals for each page, available for both desktop and mobile. Use the Page Speed Score as your guide to pinpoint and improve weak areas.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SEOWebVitals/image1.png" style="margin-left:24px;" alt="Get a Quick View of Your Pages\' Performance" />
</div>
</div>

<h4>Audit Your Pages In Unparalleled Detail</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Perform thorough audits on your pages to understand the root causes of any performance hiccups. Receive a comprehensive analysis of potential issues affecting scores across desktop and mobile devices.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SEOWebVitals/image2.png" style="margin-left:24px;" alt="Audit Your Pages In Unparalleled Detail" />
</div>
</div>

<h4>Track Web Vitals\' Metrics Over Time</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Get a detailed perspective on your pages\' speed performance by tracking their Page Speed Score through time. Dig deeper into any Core Web Vitals metrics on desktop and mobile devices and gain a better understanding of their changes.</p>
<p>Compare any Core Web Vital metric and use the row evolution graph for visual analysis.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SEOWebVitals/image3.png" style="margin-left:24px;" alt="Track Web Vitals\' Metrics Over Time" />
</div>
</div>

<h4>Monitor Your Web Vitals Score</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Continuously monitor the trajectory of your Web Vitals metrics, an indispensable tool for assessing the effectiveness of recent changes made to any page.</p>
<p>Whether you’ve tweaked the design or content, this feature helps confirm if those changes are positively impacting the user experience and boosting your Web Vitals scores.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SEOWebVitals/image4.png" style="margin-left:24px;" alt="Monitor Your Web Vitals Score" />
</div>
</div>

<h4>Receive Custom Alerts for Fast Problem Resolution</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Set up custom alerts for specific pages and stay informed about any significant shifts in Core Web Vitals metrics.</p>
<p>Be the first to know when any Core Web Vitals metric hits or misses your target score, allowing you to swiftly address issues or share achievements with your team.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/SEOWebVitals/image5.png" style="margin-left:24px;" alt="Receive Custom Alerts for Fast Problem Resolution" />
</div>
</div>

<h3>Try SEO Web Vitals Today</h3>

<p>Unlock your website\'s true potential with the SEO Web Vitals plugin. Effortlessly monitor, analyse, and enhance your site\'s performance, paving the way for better user experiences and higher search rankings.</p>

<p>Start your 30-day free trial and propel your website to the forefront of search rankings and user satisfaction.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:358:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/guide/reports/seo-web-vitals/">SEO Web Vitals User Guide</a> and the <a href="https://matomo.org/faq/seo-web-vitals/">SEO Web Vitals FAQ</a> cover how to get the most out of this plugin.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:22;a:31:{s:4:"name";s:7:"Cohorts";s:11:"displayName";s:7:"Cohorts";s:5:"owner";s:10:"matomo-org";s:11:"description";s:95:"Track your retention efforts over time and keep your visitors engaged and coming back for more.";s:8:"homepage";s:34:"https://plugins.matomo.org/Cohorts";s:15:"createdDateTime";s:19:"2019-06-05 23:47:08";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:7:"cohorts";i:1;s:9:"retention";i:2;s:13:"user segments";i:3;s:5:"goals";}s:9:"basePrice";i:85;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-18 03:08:29";s:13:"latestVersion";s:5:"5.0.5";s:12:"numDownloads";N;s:11:"screenshots";a:1:{i:0;s:59:"https://plugins.matomo.org/Cohorts/images/5.0.5/cohorts.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:34:"https://plugins.matomo.org/Cohorts";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:2:"89";s:11:"prettyPrice";s:5:"89EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Cohorts?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:135:"https://shop.matomo.org/product/plugin-cohorts/?attribute_type=Up+to+4+users&add-to-cart=25946&variation_id=25947&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:2:"99";s:11:"prettyPrice";s:5:"USD99";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Cohorts?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:135:"https://shop.matomo.org/product/plugin-cohorts/?attribute_type=Up+to+4+users&add-to-cart=25946&variation_id=25947&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"169";s:11:"prettyPrice";s:6:"169EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Cohorts?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:135:"https://shop.matomo.org/product/plugin-cohorts/?attribute_type=5+to+15+users&add-to-cart=25946&variation_id=25948&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"199";s:11:"prettyPrice";s:6:"USD199";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Cohorts?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:135:"https://shop.matomo.org/product/plugin-cohorts/?attribute_type=5+to+15+users&add-to-cart=25946&variation_id=25948&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"259";s:11:"prettyPrice";s:6:"259EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Cohorts?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:137:"https://shop.matomo.org/product/plugin-cohorts/?attribute_type=Unlimited+users&add-to-cart=25946&variation_id=25949&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"299";s:11:"prettyPrice";s:6:"USD299";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:61:"https://plugins.matomo.org/Cohorts?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:137:"https://shop.matomo.org/product/plugin-cohorts/?attribute_type=Unlimited+users&add-to-cart=25946&variation_id=25949&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:76:"https://shop.matomo.org/product/plugin-cohorts/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";N;s:11:"ratingCount";i:0;s:11:"reviewCount";i:0;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.5";s:7:"release";N;s:8:"requires";a:1:{s:5:"piwik";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:48:"https://plugins.matomo.org/Cohorts/5.0.5/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:3354:"

<p>Discover what keeps your visitors engaged over time. Identify and resolve churn bottlenecks to effectively lower your acquisition costs.</p>

<p>Imagine if you could peek into how different groups of your visitors or users behave throughout time. With cohort analysis, you can track groups of users for weeks or months after they take action on your site, such as signing up to newsletters or purchasing. Cohorts are the secret weapon to transform one-time visitors into long-term users, directly influencing your revenue and growth.</p>

<p>Go beyond collecting data and unlock the full picture of your users’ lifecycle with Matomo\'s Cohorts plugin. Follow the behaviours of new visitors and users, giving you a clear view of their engagement lifespan. Compare behaviours between converting and non-converting visitors and identify patterns for lowering your company\'s churn.</p>

<h3>How Cohorts Works</h3>

<h4>Analyse Visitor Retention Over Time</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>See how visitors interact with your site from their first visit until after they\'ve purchased. Compare and contrast the journeys of various cohorts simultaneously.</p>
<p>View key metrics in the Cohorts report, including your website\'s retention rate, overall revenue, and revenue for individual goals.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/Cohorts/image1.png" style="margin-left:24px;" alt="Analyse Visitor Retention Over Time" />
</div>
</div>

<h4>Explore Diverse Metrics for Enhanced Retention Insights</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Start your cohort analysis with \'Returning Visitors %\' to gauge the frequency of repeat visits within your cohorts. This metric is instrumental in identifying patterns of user drop-off.</p>
<p>Expand your analysis to include vital metrics like revenue, conversion rates, and overall visit volume, enabling a holistic understanding of how these factors fluctuate across different user groups.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/Cohorts/image2.jpg" style="margin-left:24px;" alt="Explore Diverse Metrics for Enhanced Retention Insights" />
</div>
</div>

<h4>Refine Your Cohort Analysis with Segmentation</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Segment your cohort reports to uncover the reasons behind specific customer behaviours, such as why users acquired before a certain date might not return or spend.</p>
<p>Take your analysis a step further by comparing these insights with other, more successful cohorts, deepening your understanding of purchasing patterns.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/Cohorts/image3.jpg" style="margin-left:24px;" alt="Refine Your Cohort Analysis with Segmentation" />
</div>
</div>

<h3>Try Cohorts Today</h3>

<p>Unlock the whole story behind your users\' journeys with Cohorts. Dive into behaviours, retention, and revenue with clarity. Transform data into action, guiding your visitors from fleeting clicks to lasting connections.</p>

<p>Start your 30-day free trial today and discover the key to lasting user engagement.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:23;a:31:{s:4:"name";s:27:"AdvertisingConversionExport";s:11:"displayName";s:29:"Advertising Conversion Export";s:5:"owner";s:10:"matomo-org";s:11:"description";s:132:"Provides an export of attributed goal conversions for usage in ad networks like Google Ads so you no longer need a conversion pixel.";s:8:"homepage";s:54:"https://plugins.matomo.org/AdvertisingConversionExport";s:15:"createdDateTime";s:19:"2021-05-07 00:14:56";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:13:{i:0;s:6:"import";i:1;s:6:"export";i:2;s:8:"tracking";i:3;s:6:"google";i:4;s:7:"adwords";i:5;s:11:"Advertising";i:6;s:11:"attribution";i:7;s:3:"ads";i:8;s:6:"Yandex";i:9;s:11:"conversions";i:10;s:9:"attribute";i:11;s:5:"pixel";i:12;s:9:"microsoft";}s:9:"basePrice";i:150;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-18 03:08:15";s:13:"latestVersion";s:5:"5.0.8";s:12:"numDownloads";N;s:11:"screenshots";a:1:{i:0;s:87:"https://plugins.matomo.org/AdvertisingConversionExport/images/5.0.8/0_Configuration.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:54:"https://plugins.matomo.org/AdvertisingConversionExport";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"149";s:11:"prettyPrice";s:6:"149EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:81:"https://plugins.matomo.org/AdvertisingConversionExport?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:155:"https://shop.matomo.org/product/plugin-advertisingconversionexport/?attribute_type=Up+to+4+users&add-to-cart=55137&variation_id=55138&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"179";s:11:"prettyPrice";s:6:"USD179";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:81:"https://plugins.matomo.org/AdvertisingConversionExport?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:155:"https://shop.matomo.org/product/plugin-advertisingconversionexport/?attribute_type=Up+to+4+users&add-to-cart=55137&variation_id=55138&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"299";s:11:"prettyPrice";s:6:"299EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:81:"https://plugins.matomo.org/AdvertisingConversionExport?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:155:"https://shop.matomo.org/product/plugin-advertisingconversionexport/?attribute_type=5+to+15+users&add-to-cart=55137&variation_id=55139&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"349";s:11:"prettyPrice";s:6:"USD349";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:81:"https://plugins.matomo.org/AdvertisingConversionExport?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:155:"https://shop.matomo.org/product/plugin-advertisingconversionexport/?attribute_type=5+to+15+users&add-to-cart=55137&variation_id=55139&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"449";s:11:"prettyPrice";s:6:"449EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:81:"https://plugins.matomo.org/AdvertisingConversionExport?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:157:"https://shop.matomo.org/product/plugin-advertisingconversionexport/?attribute_type=Unlimited+users&add-to-cart=55137&variation_id=55140&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"519";s:11:"prettyPrice";s:6:"USD519";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:81:"https://plugins.matomo.org/AdvertisingConversionExport?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:157:"https://shop.matomo.org/product/plugin-advertisingconversionexport/?attribute_type=Unlimited+users&add-to-cart=55137&variation_id=55140&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:96:"https://shop.matomo.org/product/plugin-advertisingconversionexport/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";N;s:11:"ratingCount";i:0;s:11:"reviewCount";i:0;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.8";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:68:"https://plugins.matomo.org/AdvertisingConversionExport/5.0.8/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:2347:"

<p>Integrate your Matomo conversion data with top ad platforms like Google Ads and analyse your paid campaigns for unparalleled insights.</p>

<p>Tracking the effectiveness of ad campaigns requires you to embed third-party advertising networks’ pixels on your website and send them the information whenever a conversion happens.</p>

<p>With Matomo’s Advertising Conversion Export plugin, you can export the accurate conversion data tracked in Matomo and import it automatically into Google Ads, Microsoft Advertising (Bing Ads), and Yandex Ads. The best part? Anyone can do it in just a few minutes.</p>

<h3>How Advertising Conversion Export Works</h3>

<h4>Import Your Conversion Data to the Ad Networks Effortlessly</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Import your Matomo conversion data to your ad networks for more precise campaign targeting and optimisation.</p>
<p>You can set up your conversion data export in two ways: automatically via an HTTPS link or manually via a CSV file. Whatever your choice, the conversion data integration into your ad network will be seamless and straightforward.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/AdvertisingConversionExport/image1.jpg" style="margin-left:24px;" alt="Import Your Conversion Data to the Ad Networks Effortlessly" />
</div>
</div>

<h4>Track Your Conversion Data with a Seamless Setup</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Setting up the Advertising Conversion Export plugin is like a walk in the park. Start by naming your export and choosing the ad network. Then, select the desired number of days of conversion data and define your goals, including your objective and revenue value.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/AdvertisingConversionExport/image2.png" style="margin-left:24px;" alt="Track Your Conversion Data with a Seamless Setup" />
</div>
</div>

<h3>Try Advertising Conversion Export Today</h3>

<p>Unlock new levels of insight by integrating your ad campaign performance into your Matomo account.</p>

<p>Start your 30-day free trial today and see the difference ethical, pain-free conversion data can make to your ad campaigns.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:414:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/advertising-conversion-export/">Advertising Conversion Export User Guide</a> and <a href="https://matomo.org/faq/advertising-conversion-export/">Advertising Conversion Export FAQ</a> cover how to get the most out of this premium feature.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:24;a:31:{s:4:"name";s:23:"HeatmapSessionRecording";s:11:"displayName";s:27:"Heatmap & Session Recording";s:5:"owner";s:10:"matomo-org";s:11:"description";s:151:"Truly understand your visitors by seeing where they click, hover, type and scroll. Replay their actions in a video and ultimately increase conversions.";s:8:"homepage";s:33:"https://www.heatmap-analytics.com";s:15:"createdDateTime";s:19:"2017-05-17 06:34:21";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:12:{i:0;s:7:"Visitor";i:1;s:7:"heatmap";i:2;s:5:"video";i:3;s:5:"click";i:4;s:5:"visit";i:5;s:17:"session recording";i:6;s:7:"session";i:7;s:9:"recording";i:8;s:4:"move";i:9;s:6:"scroll";i:10;s:5:"hover";i:11;s:4:"user";}s:9:"basePrice";i:200;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-12-06 22:36:54";s:13:"latestVersion";s:5:"5.0.7";s:12:"numDownloads";N;s:11:"screenshots";a:10:{i:0;s:83:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/0_Click_Heatmap.jpg";i:1;s:82:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/1_Move_Heatmap.png";i:2;s:84:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/2_Scroll_Heatmap.jpg";i:3;s:80:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/3_Above_Fold.png";i:4;s:88:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/4_Session_Recordings.png";i:5;s:93:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/5_Replay_Recorded_Session.png";i:6;s:96:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/6_Replay_Move_And_Click_Path.jpg";i:7;s:81:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/7_Visitor_Log.png";i:8;s:76:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/8_Manage.png";i:9;s:98:"https://plugins.matomo.org/HeatmapSessionRecording/images/5.0.7/9_Matomo_For_WordPress_Support.png";}s:8:"previews";a:1:{i:0;a:4:{s:4:"type";s:5:"video";s:8:"provider";s:7:"youtube";s:3:"url";s:50:"https://www.youtube-nocookie.com/embed/AUSXjH8U9fk";s:2:"id";s:11:"AUSXjH8U9fk";}}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:50:"https://plugins.matomo.org/HeatmapSessionRecording";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"199";s:11:"prettyPrice";s:6:"199EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:77:"https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=Up+to+4+users&add-to-cart=3881&variation_id=3882&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"229";s:11:"prettyPrice";s:6:"USD229";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:77:"https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=Up+to+4+users&add-to-cart=3881&variation_id=3882&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"399";s:11:"prettyPrice";s:6:"399EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:77:"https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=5+to+15+users&add-to-cart=3881&variation_id=3883&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"459";s:11:"prettyPrice";s:6:"USD459";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:77:"https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=5+to+15+users&add-to-cart=3881&variation_id=3883&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"599";s:11:"prettyPrice";s:6:"599EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:77:"https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:144:"https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=Unlimited+users&add-to-cart=3881&variation_id=3884&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"689";s:11:"prettyPrice";s:6:"USD689";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:77:"https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:144:"https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=Unlimited+users&add-to-cart=3881&variation_id=3884&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:85:"https://shop.matomo.org/product/heatmapsessionrecording/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";s:4:"5.00";s:11:"ratingCount";i:3;s:11:"reviewCount";i:3;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.7";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:64:"https://plugins.matomo.org/HeatmapSessionRecording/5.0.7/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:3898:"

<p>Dive deep into your visitors\' behaviours to see where they click and why. Identify friction points to craft a more intuitive user experience.</p>

<p>Buried under endless heaps of data, the true story of how your visitors experience your site remains hidden. Because it\'s not enough to know how many clicks you get, but why they happen.</p>

<p>Unveil the narrative behind each click with Heatmaps and Session Recordings. Observe and understand every mouse scroll, movement, and click to make confident decisions rooted in real user behaviour.</p>

<h3>How Heatmaps &amp; Session Recordings Works</h3>

<h4>See The Untold Story of Your Visitors</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>There\'s so much happening behind your click data than you realise. Discover where your visitors click, move their mouse, and scroll with Heatmaps.</p>
<p>See how your visitors interact with your website without having to create complex reports. Set your heatmaps in seconds and start analysing your user experience for every device and size screen hassle-free.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/HeatmapSessionRecording/image1.gif" style="margin-left:24px;" alt="See The Untold Story of Your Visitors" />
</div>
</div>

<h4>Empower Your Usability with Clarity and Buy-In</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Improving user experience may be a priority, but without the right data or buy-in, it\'s easy to second-guess your design changes.</p>
<p>With Matomo\'s heatmaps, you can translate complex user interactions into vivid, easy-to-grasp visuals. Heatmaps don\'t just represent data but a complete view of your visitors\' behaviours.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/HeatmapSessionRecording/image2.jpg" style="margin-left:24px;" alt="Empower Your Usability with Clarity and Buy-In" />
</div>
</div>

<h4>Relive Every Click, Scroll, and Pause with Session Recordings</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Ever wished you could look over your visitor\'s shoulder, seeing every move they make? Matomo\'s Session Recordings make this a reality while keeping full GDPR compliance.</p>
<p>Watch where your visitors move their mouse, click, and scroll. Discover what\'s stopping them from converting and boost your conversions backed with real visitor data.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/HeatmapSessionRecording/image3.gif" style="margin-left:24px;" alt="Relive Every Click, Scroll, and Pause with Session Recordings" />
</div>
</div>

<h4>Stitch Together the Complete User Journey</h4>

<div class="main-div-readme" style="height:auto;">
<div class="left-div-readme" style="width:50%;">
<p>Traditional web analytics give you mere glimpses of visitor interactions, like where they click or how long they stay. But this alone won\'t tell you much of the reasons behind their actions.</p>
<p>Overlay your Session Recordings with your visitors\' profiles in Matomo to reveal a holistic view of their entire journey, from the pages they explore to their on-page behaviours. See the big picture and act with absolute confidence.</p>
</div>
<div class="right-div-readme">
<img src="https://plugins.matomo.org/img/HeatmapSessionRecording/image4.jpg" style="margin-left:24px;" alt="Stitch Together the Complete User Journey" />
</div>
</div>

<h3>Try Heatmaps &amp; Session Recordings Today</h3>

<p>Shine a light on user behaviours, revealing actionable insights and opportunities for improvement with Matomo\'s Heatmaps &amp; Session Recordings plugin.</p>

<p>Start your free 30-day trial and elevate your user experience effortlessly. No credit card required.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:660:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/docs/heatmaps/">Heatmap User Guide</a>, <a href="https://matomo.org/docs/session-recording/">Session Recording User Guide</a> and the <a href="https://matomo.org/faq/heatmap-session-recording/">Heatmap &amp; Session Recording User FAQ</a> cover how to get the most out of this plugin. The <a href="https://developer.matomo.org/guides/heatmap-session-recording">Heatmap &amp; Session Recording developer guides</a> help you customizing the tracking of your heatmaps and session recordings.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:25;a:31:{s:4:"name";s:14:"AuthorSegments";s:11:"displayName";s:15:"Author Segments";s:5:"owner";s:7:"kawerht";s:11:"description";s:124:"This plugin allows you to decide which users can create segments based on their permissions: view, write, super user, admin.";s:8:"homepage";s:47:"https://github.com/kawerht/SegmentAuthorization";s:15:"createdDateTime";s:19:"2023-11-10 15:22:02";s:6:"donate";a:0:{}s:7:"support";a:1:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:17:"info@hirschtec.eu";s:4:"type";s:5:"email";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:7:"segment";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Klaus Riedel";s:5:"email";s:21:"k.riedel@hirschtec.eu";s:8:"homepage";s:20:"https://hirschtec.eu";}}s:13:"repositoryUrl";s:47:"https://github.com/kawerht/SegmentAuthorization";s:11:"lastUpdated";s:19:"2023-12-06 14:06:02";s:13:"latestVersion";s:5:"5.1.2";s:12:"numDownloads";i:3855;s:11:"screenshots";a:1:{i:0;s:96:"https://plugins.matomo.org/AuthorSegments/images/5.1.2/segment_authorization_system_settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"14";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-12-06 14:04:03";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:5:{i:0;a:10:{s:4:"name";s:5:"0.1.1";s:7:"release";s:19:"2023-12-01 11:26:02";s:8:"requires";a:1:{s:6:"matomo";s:17:">=4.0.0,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:99;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:61:"https://github.com/kawerht/SegmentAuthorization/commits/0.1.2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:46:"/api/2.0/plugins/AuthorSegments/download/0.1.1";}i:1;a:10:{s:4:"name";s:5:"5.1.1";s:7:"release";s:19:"2023-12-01 14:20:07";s:8:"requires";a:1:{s:6:"matomo";s:17:">=5.0.0,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:4;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:61:"https://github.com/kawerht/SegmentAuthorization/commits/5.1.1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:46:"/api/2.0/plugins/AuthorSegments/download/5.1.1";}i:2;a:10:{s:4:"name";s:5:"0.1.3";s:7:"release";s:19:"2023-12-01 14:22:02";s:8:"requires";a:1:{s:6:"matomo";s:17:">=2.0.0,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:317;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:61:"https://github.com/kawerht/SegmentAuthorization/commits/0.1.5";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:46:"/api/2.0/plugins/AuthorSegments/download/0.1.3";}i:3;a:10:{s:4:"name";s:5:"0.1.4";s:7:"release";s:19:"2023-12-06 14:04:03";s:8:"requires";a:1:{s:6:"matomo";s:17:">=2.0.0,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:7;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:61:"https://github.com/kawerht/SegmentAuthorization/commits/0.1.6";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:46:"/api/2.0/plugins/AuthorSegments/download/0.1.4";}i:4;a:10:{s:4:"name";s:5:"5.1.2";s:7:"release";s:19:"2023-12-06 14:06:02";s:8:"requires";a:1:{s:6:"matomo";s:17:">=5.0.0,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:875;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:61:"https://github.com/kawerht/SegmentAuthorization/commits/5.1.2";s:10:"readmeHtml";a:4:{s:11:"description";s:573:"

<p>By default, anyone with write access can create segments within Matomo Analytics. It can be an issue if you have many users as a segment creation will require a lot of calculation from the server side. This plugin allows you to define who has the authorization to create segments within Matomo Analytics. Only the super user can access to this User Interface feature in order to define who can create segments. If the feature is set on admin, users with a write access only won\'t see the button to create segments, though they will still be able to apply segments.</p>";s:3:"faq";s:960:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What does this plugin do?</strong></p>

<p>Very simple, it is using an internal function of Matomo core to edit the config file through the Matomo User Interface. So to say, you can perform exactly the same thing by editing the config file directly.</p>

<p><strong>Why should I use this feature?</strong></p>

<p>When creating a segment within Matomo Analytics, it takes a lot of time for the server to perform the calculations. As a result if your Matomo instance has many users, technically it can slow down a lot the User Interface of Matomo. The idea of this plugin is to allow only some users in particular to have the right to create segments.</p>

<p><strong>Can users still access to the segment feature?</strong></p>

<p>Of course, this plugin just remove the possibility to create segments. That\'s it.</p>";s:13:"documentation";s:155:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>Documentation</h2>";s:9:"changelog";s:169:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>Here goes the changelog text.</p>";}s:8:"download";s:46:"/api/2.0/plugins/AuthorSegments/download/5.1.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:67:"https://plugins.matomo.org/AuthorSegments/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:26;a:31:{s:4:"name";s:23:"GoogleAnalyticsImporter";s:11:"displayName";s:25:"Google Analytics Importer";s:5:"owner";s:10:"matomo-org";s:11:"description";s:59:"Import reports from a Google Analytics account into Matomo.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2019-08-22 06:50:05";s:6:"donate";a:0:{}s:7:"support";a:5:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:65:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"hello@matomo.org";s:4:"type";s:5:"email";}i:3;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:67:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/issues";s:4:"type";s:3:"url";}i:4;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:60:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:6:"import";i:1;s:6:"google";i:2;s:9:"analytics";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:60:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter";s:11:"lastUpdated";s:19:"2023-12-04 08:16:07";s:13:"latestVersion";s:5:"5.0.7";s:12:"numDownloads";i:68646;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:4:"1052";s:15:"numContributors";s:2:"44";s:14:"lastCommitDate";s:19:"2023-12-22 05:48:49";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:8:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-16 22:34:06";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:48;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:77:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:55:"/api/2.0/plugins/GoogleAnalyticsImporter/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-08-14 00:50:07";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:14;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:77:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:55:"/api/2.0/plugins/GoogleAnalyticsImporter/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-09-20 02:54:07";s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc3,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:14;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:77:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/commits/5.0.0-b3";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:55:"/api/2.0/plugins/GoogleAnalyticsImporter/download/5.0.2";}i:3;a:10:{s:4:"name";s:5:"5.0.3";s:7:"release";s:19:"2023-10-01 22:54:07";s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:14;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/commits/5.0.3";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:55:"/api/2.0/plugins/GoogleAnalyticsImporter/download/5.0.3";}i:4;a:10:{s:4:"name";s:5:"5.0.4";s:7:"release";s:19:"2023-10-16 01:30:07";s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:55;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/commits/5.0.4";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:55:"/api/2.0/plugins/GoogleAnalyticsImporter/download/5.0.4";}i:5;a:10:{s:4:"name";s:5:"5.0.5";s:7:"release";s:19:"2023-11-06 06:26:07";s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:36;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/commits/5.0.5";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:55:"/api/2.0/plugins/GoogleAnalyticsImporter/download/5.0.5";}i:6;a:10:{s:4:"name";s:5:"5.0.6";s:7:"release";s:19:"2023-11-14 21:44:07";s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:34;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/commits/5.0.6";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:55:"/api/2.0/plugins/GoogleAnalyticsImporter/download/5.0.6";}i:7;a:10:{s:4:"name";s:5:"5.0.7";s:7:"release";s:19:"2023-12-04 08:16:07";s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1017;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/matomo-org/plugin-GoogleAnalyticsImporter/commits/5.0.7";s:10:"readmeHtml";a:4:{s:11:"description";s:165:"

<p>Import your Google Analytics properties into Matomo. See <a href="https://matomo.org/docs/google-analytics-importer/">the documentation</a> for more info.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:13607:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>% 5.0.7
- Upgraded phpseclib to 3.0.34</p>

<h1>5.0.6</h1>

<ul>
<li>Scope vendored libraries to improve compatibility with other plugins</li>
<li>Compatibility with PHP 8.3</li>
</ul>

<h1>5.0.5</h1>

<ul>
<li>Added code to remember GA Import baner dismiss action</li>
</ul>

<h1>5.0.4</h1>

<ul>
<li>Updated dependency (Guzzle)</li>
<li>Updated translations</li>
</ul>

<h1>5.0.3</h1>

<ul>
<li>Compatibility with Matomo 5 rc5</li>
</ul>

<h1>5.0.2</h1>

<ul>
<li>Compatibility with Matomo 5 rc3</li>
</ul>

<h1>5.0.1</h1>

<ul>
<li>Compatibility with Matomo 5</li>
</ul>

<h1>5.0.0</h1>

<ul>
<li>Remove all use of AngularJS from the plugin.</li>
</ul>

<h1>4.6.11</h1>

<ul>
<li>Ignore custom dimensions assigned the Item scope</li>
</ul>

<h1>4.6.10</h1>

<ul>
<li>Google Connect button styling changes for Matomo cloud</li>
</ul>

<h1>4.6.9</h1>

<ul>
<li>Updated dependencies (Guzzle)</li>
<li>Added GA import tab in no data screen</li>
</ul>

<h1>4.6.8</h1>

<ul>
<li>Added OAuth complete warning when configuring/authorizing GA OAuth.</li>
</ul>

<h1>4.6.7</h1>

<ul>
<li>Added additional check for redirect URL</li>
</ul>

<h1>4.6.6</h1>

<ul>
<li>Started using ga:adwordsCampaignID dimension instead of ga:campaignCode to import data</li>
</ul>

<h1>4.6.5</h1>

<ul>
<li>Fixed SiteContentDetector usage for lower Matomo versions</li>
<li>Added mapping for YaBrowser</li>
<li>Added mappings for search engine</li>
</ul>

<h1>4.6.4</h1>

<ul>
<li>Changes to support Matomo Oauth disable on cloud</li>
</ul>

<h1>4.6.3</h1>

<ul>
<li>Fixed warnings for PHP 8.1</li>
</ul>

<h1>4.6.2</h1>

<ul>
<li>Improved check to ensure future and present dates are not processed today.</li>
</ul>

<h1>4.6.1</h1>

<ul>
<li>Added the ability to show a security error</li>
<li>Improved nonce check after authorization</li>
</ul>

<h1>4.6.0</h1>

<ul>
<li>Updated dependencies to improve PHP 8.2 compatability</li>
<li>Redesigned UI to simplify connecting to Google Analytics</li>
<li>Updated language translations</li>
</ul>

<h1>4.5.2</h1>

<ul>
<li>Improved check to determine nohup support exist or not</li>
</ul>

<h1>4.5.1</h1>

<ul>
<li>Improved check to determine nohup support exist</li>
</ul>

<h1>4.5.0</h1>

<ul>
<li>Added some brand mappings.</li>
<li>Fixed status setting after rate limit and started pulling empty rows for GA4.</li>
<li>Added code to display import notification if site has GA detected.</li>
<li>Fixed duplication of Custom Dimensions.</li>
<li>Fixes deprecation warnings for PHP 8.1</li>
</ul>

<h1>4.4.8</h1>

<ul>
<li>GA4 - Removed itemRevenue and itemsPurchased metrics due to incompatibility</li>
</ul>

<h1>4.4.7</h1>

<ul>
<li>Fixed mobile app import not working due to recent change in site creation.</li>
</ul>

<h1>4.4.6</h1>

<ul>
<li>Fix to log the allowed API requests correctly for cloud.</li>
<li>Updating error message when a use cancels auth to be more helpful.</li>
<li>Try/catch block for extraCustomDimensions added to ensure import continues even after slot limit is reached.</li>
<li>Started calling addSite API through processRequest method to ensure events are triggered.</li>
</ul>

<h1>4.4.5</h1>

<ul>
<li>Added success notification screen after selecting GA properties</li>
</ul>

<h1>4.4.4</h1>

<ul>
<li>Added new method to get count of imports scheduled.</li>
<li>Started using polyfill for bcmath to work instead of asking users to install one.</li>
</ul>

<h1>4.4.3</h1>

<ul>
<li>Started catching cannot process exception to not throw uncaught exception.</li>
</ul>

<h1>4.4.2</h1>

<ul>
<li>Fixed regression due to string value being passed for date</li>
</ul>

<h1>4.4.1</h1>

<ul>
<li>Handled exception being thrown on screen due to log level</li>
<li>Notification message updated to show last import date</li>
<li>Stop import process for specified time when quota is exceeded instead of retrying</li>
</ul>

<h1>4.4.0</h1>

<ul>
<li>Added rate limiting for Analytics Importer for Matomo cloud customers</li>
<li>Added code to skip retry for certain exceptions</li>
</ul>

<h1>4.3.6</h1>

<ul>
<li>Added escaping for shell args</li>
</ul>

<h1>4.3.5</h1>

<ul>
<li>Fixes for System testcases to work due to recent changes</li>
<li>Adding more date format hints to form fields, #286</li>
</ul>

<h1>4.3.4</h1>

<ul>
<li>Fixed code to resume import to import before last_day_imported</li>
</ul>

<h1>4.3.3</h1>

<ul>
<li>Added empty label check for UserCountry Importer GA4</li>
</ul>

<h1>4.3.2</h1>

<ul>
<li>Fixed redirect uri bug when passing domain in console command</li>
<li>Fixed recent dates not importing all dates.</li>
</ul>

<h1>4.3.1</h1>

<ul>
<li>Added missing translation key</li>
</ul>

<h1>4.3.0</h1>

<ul>
<li>Added support to import GA4 data into Matomo</li>
<li>Added code to import recent dates first</li>
<li>Upgraded guzzleHTTP version to 4.5.0</li>
</ul>

<h1>4.2.0</h1>

<p>Migrate AngularJS code to Vue.</p>

<h1>4.1.11</h1>

<p>Mention about the new idSite creation in the notification.</p>

<h1>4.1.10</h1>

<p>Use correct instanceId in a multi account set up.</p>

<h1>4.1.9</h1>

<p>Changes:
* Upgraded google-apiclient library to v2.11 to make it compatible with PHP8.1.</p>

<h1>4.1.8</h1>

<p>Changes:
* Added changes to make it compatible with php8.</p>

<h1>4.1.7</h1>

<p>Changes:
* Report all types of error messages to end user for easier issue diagnosis.</p>

<h1>4.1.6</h1>

<p>Changes:
* Compatibility with Matomo 4.3.0.</p>

<h1>4.1.5</h1>

<p>Changes:
* Do not use log data purge check when invalidating week periods after a day is imported.</p>

<h1>4.1.4</h1>

<p>Changes:
* Catch cancelled import exceptions and do not propagate in import reports command
* trim property/view/account ID when starting an import to avoid errors on typos</p>

<h1>4.1.3</h1>

<p>Bug fixes:
* Order import statuses by site ID as integer value instead of as text value.</p>

<p>Other changes:
* Bump phpseclib/phpseclib from 2.0.29 to 2.0.31</p>

<h1>4.1.2</h1>

<p>Bug Fixes:
* Fix check for whether we should avoid tagmanager container creation.</p>

<p>Changes:
* Add some more logging for exceptions caught in the controller.</p>

<h1>4.1.1</h1>

<p>Bug Fixes:
* Check referrer URL comes from google when checking oauth nonce.
* Disable tagmanager container creation while creating new site to import into.
* Only show admin menu item for superusers.</p>

<h1>4.1.0</h1>

<p>New Features:
* Allow logging to a single file via DI config setting \'GoogleAnalyticsImporter.logToSingleFile\'.</p>

<p>Changes:
* Remove extraneous google services from vendor via composer.</p>

<h1>4.0.4</h1>

<p>Changes:
* Do not use nohup on windows and allow users to disable nohup via DI config.</p>

<h1>4.0.0</h1>

<p>Compatibility with Matomo 4</p>

<h1>1.5.6</h1>

<p>Bug Fixes:
* Fix issue showing broken URLs when importing page URLs with hash values in them. Affected users will have to re-import affected days.</p>

<h1>1.5.5</h1>

<p>Changes:
* Report error without failing command when client is misconfigured in import-reports.
* Fail w/o thrown exception if lock is already acquired.</p>

<p>Bug Fixes:
* Fix issue where days could not be re-archived for imported sites due to lack of timestamp information present in dates.</p>

<h1>1.5.4</h1>

<p>Changes:
* Abort on all errors and report when it is due to a insufficient privileges exception.
* Ignore unknown metric exceptions.
* Better debug exception messages when errors occur during controller actions.</p>

<p>Bug Fixes:
* Handle GA API active custom dimension value of empty string properly.
* Handle invalid max end date configuration.
* Check for custom dimension slots before importing &amp; allow ignoring extra custom dimensions</p>

<h1>1.5.3</h1>

<p>Changes:
* Fix referrers table subtable in imported reports so link is correct (only affects newly imported reports).
* Show last GA error if there was one when cannot reach GA API fails repeatedly.
* Use exponential backoff for when GA API backend fails.
* Fix forum link in error message.</p>

<h1>1.5.2</h1>

<p>Changes:
* Fixing typo in previous rate limit change.</p>

<h1>1.5.1</h1>

<p>Changes:
* Do not throw if the rate limit is reached just log a message.
* Added safety measure in case of broken internal import status.
* Default value missing for $maxEndDateDesc (fixes warning).
* Add link to the user guide to GA API config forms.</p>

<h1>1.5.0</h1>

<p>Changes:
* Allow lock ttl to be configured and use reexpire lock which waits to expire.
* Allow forced max end date to be specified through config.
* Set a fixed end date for Matomo for WordPress.</p>

<p>Bug Fixes:
* Undo forced input sanitization for client config.
* Fix reimport not respecting last_day_imported.
* Reduce amount of memory used.</p>

<h1>1.4.1</h1>

<p>Changes:
* Fix bug in referrers import triggered by not set values in referral path in GA. Imports experiencing the "label column not found" error are failing due to this bug. Re-importing with version 1.4.1 will avoid the issue.</p>

<h1>1.4.0</h1>

<p>Changes:
* Update google API client for PHP 7.4 support.</p>

<h1>1.3.3</h1>

<p>Changes:
* Use quotaUser to support multi-instance setups.</p>

<h1>1.3.2</h1>

<p>Bug fixes:
* Fix bug in ongoing import that could result in incomplete metrics being imported. Bug is more visible since changes in 1.3.0.</p>

<h1>1.3.1</h1>

<p>Changes:
* Allow re-importing ranges to work when a job is finished or has no more to import.
* Merge Time Started/Time Finished columns to provide more space in the UI.</p>

<p>Bug fix:
* Do not show resume button if status is \'started\'.</p>

<h1>1.3.0</h1>

<p>Features:
* Improved support for shared hosting users with hosts that may kill long running processes. The import job is not attempted every hour
  if a system kills a job, it will restart promptly.
* Detect killed jobs and report to the user so they are not left in suspense.
* Allow re-importing ranges in the past.
* Add a protection for users of Matomo 3.13.2 that will disallow re-archiving of imported days (this can wipe the data that was imported).</p>

<h1>1.2.2</h1>

<p>Bug fixes:
* Fixing typo.
* Small style tweak.</p>

<h1>1.2.1</h1>

<p>Bug fixes:
* Handle old statuses without new property.</p>

<h1>1.2.0</h1>

<p>Features:
* Resume button to make it clearer that on an errored import the import doesn\'t have to be cancelled and restarted.
* Add feature to change import end date dynamically so users don\'t have to restart if they enter the wrong end date (or don\'t enter one).
* Support new VisitFrequency metrics in core if available.</p>

<p>Bug fixes:
* Tweaks to messages for clarity.
* Goals record importer was not applying new/returning segments.
* GA does not trim page titles, so ignore on error and hope users report issues.</p>

<h1>1.1.2</h1>

<p>Bug fixes:
* Fix variable not defined error.
* Make sure version is compatible w/ older versions of Matomo.</p>

<h1>1.1.1</h1>

<p>Bug fixes:
* Compatibility with Matomo for wordpress.
* Do not fail if an unmappable goal is found (in case user creates their own goal or edits a goal).</p>

<h1>1.1.0</h1>

<p>Features:
* Add new diagnostics to check for required functions and executables.
* Add troubleshooting option to enable debug logging so users can provide useful info in a bug report.
* Allow importing GA dimensions not natively supported in Matomo by creating new custom dimensions.
* Support importing mobile app properties (including screen views metrics as pageviews and screen reports as page title reports).</p>

<p>Bug fixes:
* Remove extra params when redirecting from processAuthCode action.
* Change include paths to better support wordpress installs.
* Do not try to import ecommerce items report if property does not support ecommerce.
* Ordering in GA API requests was not applied.
* Entry/exit page titles should not import unique visitors since we can\'t get that information reliably.
* URLs that end in the action default name cause a conflict w/ directory paths. This is not an issue anymore.
* Better process strange referrer URLs from GA.
* Allow specifying timezone manually in case GA timezone is not a valid PHP timezone.</p>

<h1>1.0.6</h1>

<ul>
<li>Better and configurable mysql ping for shared hosting.</li>
<li>If invalid or missing config is found delete existing client configuration.</li>
</ul>

<h1>1.0.5</h1>

<ul>
<li>Display query count even on rate limit in command output.</li>
<li>Issue pointless mysql query to keep connection alive on systems that have a small wait_timeout.</li>
</ul>

<h1>1.0.4</h1>

<ul>
<li>Add --skip-archiving option to allow avoiding launching of archiving command when importing.</li>
<li>Default empty keyword value when importing campaign keyword report.</li>
<li>Use CliPhp to determine php binary and default to just php if not found.</li>
</ul>

<h1>1.0.3</h1>

<ul>
<li>Allow account ID to be specified explicitly since it can differ from the number in the UA-... property ID.</li>
<li>Print debug message when account ID is deduced from property ID in CLI command.</li>
<li>Use exponentially increasing wait time between rate limited requests when querying GA API.</li>
</ul>

<h1>1.0.2</h1>

<ul>
<li>Add import date to error message when import fails.</li>
<li>Fix bug in Actions record importer where it did not handle summary rows correctly.</li>
<li>Fix untranslated text.</li>
</ul>

<h1>1.0.1</h1>

<ul>
<li>Fix typo in actions record importer.</li>
</ul>

<h1>1.0.0-b1</h1>

<ul>
<li>Initial release (beta).</li>
</ul>";}s:8:"download";s:55:"/api/2.0/plugins/GoogleAnalyticsImporter/download/5.0.7";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:76:"https://plugins.matomo.org/GoogleAnalyticsImporter/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:27;a:31:{s:4:"name";s:8:"IP2Proxy";s:11:"displayName";s:8:"IP2Proxy";s:5:"owner";s:11:"ip2location";s:11:"description";s:50:"Get the proxy details of visitors to your website.";s:8:"homepage";s:46:"https://github.com/ip2location/ip2proxy-matomo";s:15:"createdDateTime";s:19:"2020-12-08 02:12:03";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:51:"https://github.com/ip2location/ip2proxy-matomo/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:23:"support@ip2location.com";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:53:"https://github.com/ip2location/ip2proxy-matomo/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:46:"https://github.com/ip2location/ip2proxy-matomo";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:6:"Report";i:1;s:11:"geolocation";i:2;s:2:"ip";i:3;s:5:"proxy";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:11:"IP2Location";s:5:"email";s:23:"support@ip2location.com";s:8:"homepage";s:26:"http://www.ip2location.com";}}s:13:"repositoryUrl";s:46:"https://github.com/ip2location/ip2proxy-matomo";s:11:"lastUpdated";s:19:"2023-11-30 02:52:03";s:13:"latestVersion";s:5:"5.1.0";s:12:"numDownloads";i:7380;s:11:"screenshots";a:2:{i:0;s:66:"https://plugins.matomo.org/IP2Proxy/images/5.1.0/screenshot-01.png";i:1;s:66:"https://plugins.matomo.org/IP2Proxy/images/5.1.0/screenshot-02.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"167";s:15:"numContributors";s:2:"22";s:14:"lastCommitDate";s:19:"2023-12-27 00:18:08";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.1.0";s:7:"release";s:19:"2023-11-30 02:52:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:259;s:7:"license";a:2:{s:4:"name";s:8:"GPL-3.0+";s:3:"url";s:49:"https://plugins.matomo.org/IP2Proxy/5.1.0/license";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/ip2location/ip2proxy-matomo/commits/5.1.0";s:10:"readmeHtml";a:4:{s:11:"description";s:509:"

<p>This Matomo plugin generates proxy report based on the visitor\'s IP address. The details including proxy type, country, region, city, ISP, domain, usage type, ASN, and security threat.</p>

<p>You need a IP2Proxy BIN database to make this plugin works. Database is available for free at</p>

<p><a href="https://lite.ip2location.com/ip2proxy-lite">https://lite.ip2location.com</a> or <a href="https://www.ip2location.com/database/ip2proxy">https://www.ip2location.com</a> for a commercial database.</p>

";s:3:"faq";s:809:"<p><strong>How to I configure the plugin?</strong></p>

<p>Login as administrator, then go to System &gt; General Settings &gt; IP2Proxy.</p>

<p><strong>Where to download IP2Proxy database?</strong></p>

<p>You can download IP2Location database for free at <a href="https://lite.ip2location.com/ip2proxy-lite">https://lite.ip2location.com</a> or commercial version from <a href="https://www.ip2location.com/databases/ip2proxy">https://www.ip2location.com</a></p>

<p><strong>Where to sign up ip2location.io Geolocation API Service?</strong></p>

<p>Sign for a free account at https://www.ip2location.io/</p>

<h1>IPv4 BIN vs IPv6 BIN</h1>

<p>Use the IPv4 BIN file if you just need to query IPv4 addresses.</p>

<p>Use the IPv6 BIN file if you need to query <strong>BOTH</strong> IPv4 and IPv6 addresses.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";s:40:"/api/2.0/plugins/IP2Proxy/download/5.1.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:61:"https://plugins.matomo.org/IP2Proxy/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:28;a:31:{s:4:"name";s:11:"IP2Location";s:11:"displayName";s:13:"IP 2 Location";s:5:"owner";s:11:"ip2location";s:11:"description";s:95:"Use IP2Location geolocation database to lookup for accurate visitor location in Matomo (Piwik).";s:8:"homepage";s:43:"http://www.ip2location.com/developers/piwik";s:15:"createdDateTime";s:19:"2014-04-23 09:24:04";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:53:"https://github.com/ip2location/ip2location-piwik/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:23:"support@ip2location.com";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:55:"https://github.com/ip2location/ip2location-piwik/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:48:"https://github.com/ip2location/ip2location-piwik";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:11:"IP2Location";i:1;s:11:"geolocation";i:2;s:16:"visitor location";i:3;s:14:"ip to location";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:11:"IP2Location";s:5:"email";s:23:"support@ip2location.com";s:8:"homepage";s:26:"http://www.ip2location.com";}}s:13:"repositoryUrl";s:48:"https://github.com/ip2location/ip2location-piwik";s:11:"lastUpdated";s:19:"2023-11-29 07:24:02";s:13:"latestVersion";s:5:"5.1.0";s:12:"numDownloads";i:90802;s:11:"screenshots";a:1:{i:0;s:67:"https://plugins.matomo.org/IP2Location/images/5.1.0/01_Settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"223";s:15:"numContributors";s:2:"23";s:14:"lastCommitDate";s:19:"2023-12-05 22:42:17";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.1.0";s:7:"release";s:19:"2023-11-29 07:24:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1100;s:7:"license";a:2:{s:4:"name";s:8:"GPL-3.0+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:62:"https://github.com/ip2location/ip2location-piwik/commits/5.1.0";s:10:"readmeHtml";a:4:{s:11:"description";s:308:"

<p>This IP2Location plugin enables more accurate location lookup in your Matomo (Piwik) visitor log.</p>

<p>You need a IP2Location BIN database to make this plugin works. Database is available for free at</p>

<p>https://lite.ip2location.com or https://www.ip2location.com for a commercial database.</p>

";s:3:"faq";s:517:"<p><strong>How to I configure the plugin?</strong></p>

<p>Login as administrator, then go to System &gt; IP2Location.</p>

<p><strong>Where to download IP2Location database?</strong></p>

<p>You can download IP2Location database for free at https://lite.ip2location.com or commercial version from https://www.ip2location.com</p>

<p><strong>Can I use IP2Location Web service?</strong></p>

<p>Yes, please purchase credits from https://www.ip2location.com/web-service and insert your API key in the settings page.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";s:43:"/api/2.0/plugins/IP2Location/download/5.1.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:64:"https://plugins.matomo.org/IP2Location/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:29;a:31:{s:4:"name";s:10:"BotTracker";s:11:"displayName";s:11:"Bot Tracker";s:5:"owner";s:9:"Thomas--F";s:11:"description";s:92:"Detection of bots & spiders and count their visits without tracking them in the visitor-log.";s:8:"homepage";s:39:"https://github.com/Thomas--F/BotTracker";s:15:"createdDateTime";s:19:"2014-02-21 13:14:04";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:46:"https://github.com/Thomas--F/BotTracker/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:40:"https://github.com/Thomas--F/BotTracker/";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:10:"BotTracker";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:14:"Thomas Fasselt";s:5:"email";s:22:"Thomas.Fasselt@gmx.com";s:8:"homepage";s:39:"https://github.com/Thomas--F/BotTracker";}}s:13:"repositoryUrl";s:39:"https://github.com/Thomas--F/BotTracker";s:11:"lastUpdated";s:19:"2023-11-28 16:18:02";s:13:"latestVersion";s:5:"3.0.0";s:12:"numDownloads";i:115406;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"307";s:15:"numContributors";s:2:"33";s:14:"lastCommitDate";s:19:"2023-12-27 00:03:44";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"3.0.0";s:7:"release";s:19:"2023-11-28 16:18:02";s:8:"requires";a:2:{s:5:"piwik";s:21:">=5.0.0-rc1,<6.0.0-b1";s:3:"php";s:7:">=7.2.5";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:2671;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:51:"https://plugins.matomo.org/BotTracker/3.0.0/license";}s:22:"repositoryChangelogUrl";s:53:"https://github.com/Thomas--F/BotTracker/commits/v3.00";s:10:"readmeHtml";a:4:{s:11:"description";s:2394:"

<p>BotTracker ist a plugin to exclude and separately track the visits of bots, spiders and webcrawlers, that hit your page. Because Matomo doesn\'t store the user agent, BotTracker will only be able to track new bots from the moment you add them to its list forward (retroactive tracking isn\'t possible).</p>

<p>This plugin is still in BETA-status, but I have tested it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawlers, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Matomo if you don\'t use the PHP-API. The BotTracker can only track those that were caught by Matomo itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him.
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

<h3>How it works</h3>

<p>The plugin scans the user agent of any incoming visit for specific keywords. If the keyword is found, the visit is excluded from the normal log and the corresponding counter in the bot-table (BOT_DB) is increased.
If you enable the "extra stats" for a bot entry, the visit will also be written into a second bot-table (BOT_DB_STAT). This second table logs the timestamp, the visited page and the user agent. The second table is currently not displayed in Matomo, but the more experienced users can select the data from the database. Some more detailed reports may come in the future.</p>

<p>You can add/delete/modify the keywords in the administration-menu. There are webpages that list the user-agents of known spiders and webcrawlers (e.g. <a href="https://www.useragentstring.com/pages/useragentstring.php">https://www.useragentstring.com/pages/useragentstring.php</a> ). The most common bots are already in the default list of the plugin.</p>

<h3>Installation / Update</h3>

<p>See <a href="http://Matomo.org/faq/plugins/#faq_21">http://Matomo.org/faq/plugins/#faq_21</a></p>

<p>If you update from Matomo 1.x to Matomo 2.x or from an old version of BotTracker (before 0.45) please reinstall the plugin.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:3994:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>3.0.0</h2>

<p>Matomo 5 compatibility fixes.</p>

<h2>2.08</h2>

<ul>
<li>translation-updates (issue #97)</li>
<li>new OK-icon with transparency (issue #98)</li>
<li>fix deprecated dynamic properties (issue #99)</li>
</ul>

<h2>2.07</h2>

<ul>
<li>translation-updates (issue #94)</li>
</ul>

<h2>2.06</h2>

<ul>
<li>fix for the archive-problem (issue #87)</li>
</ul>

<h2>2.05</h2>

<ul>
<li>fix a problem in the api.php after the changes in v2.04 (issue #84)</li>
</ul>

<h2>2.04</h2>

<ul>
<li>Fix plugin does not work when used in Matomo for WordPress (issue #83)</li>
<li>a bunch of translation-updates (issue #81)</li>
</ul>

<h2>2.03</h2>

<ul>
<li>assure that useragent length limit is kept for extra stats table (issue #73)</li>
</ul>

<h2>2.02</h2>

<ul>
<li>fix for issue #70</li>
</ul>

<h2>2.01</h2>

<ul>
<li>change order of columns in the BotTracker report (issue #68)</li>
</ul>

<h2>2.00</h2>

<ul>
<li>upgrade to Matomo 4 (issue #66)</li>
</ul>

<h2>1.07</h2>

<ul>
<li>correct PHP notice on line 114 (issue #65)</li>
</ul>

<h2>1.06</h2>

<ul>
<li>correct default for "botLastVisit" (issue #63)</li>
</ul>

<h2>1.05</h2>

<ul>
<li>removed default on visit_timestamp (issue #53)</li>
<li>changed primary key and add aditional column for stats table (issue #53)</li>
<li>changed default for last_visit (issue #61)</li>
<li>corrected delimiter in botlist.txt (issue #62)</li>
</ul>

<h2>1.04</h2>

<ul>
<li>change license string (validator-fail)</li>
</ul>

<h2>1.03</h2>

<ul>
<li>replace depricated functions</li>
</ul>

<h2>1.02</h2>

<ul>
<li>change PHP-requirements for Piwik v3</li>
</ul>

<h2>1.01</h2>

<ul>
<li>changes at description and changelog for Piwik v3</li>
</ul>

<h2>1.00</h2>

<ul>
<li>upgrade to Piwik Version 3 (issue #50)</li>
<li>some parts were new coded, others are only migrated</li>
</ul>

<h2>0.58</h2>

<ul>
<li>new feature: BotTracker now works with the import_logs-script (issue #38)</li>
<li>add: some new translation-strings (issue #46)</li>
<li>bufgix: truncate the url to max 100 bytes (issue #49)</li>
</ul>

<h2>0.57</h2>

<ul>
<li>bugfix: change of order and position in the BotTracker-Visitor-View</li>
<li>deleting of the old update-scripts (from version 0.43 and 0.45)</li>
<li>bugfix: change of the default-value for botLastVisit \'0000-00-00\' to \'2000-01-01\'</li>
<li>new feature: file import for new bots (see online-help in the administration-dialog for more infos)</li>
</ul>

<h2>0.56</h2>

<ul>
<li>bugfix: botLastVisit-Date is not shown (pull request #35)</li>
<li>bugfix: Some characters are not quoted properly (issue #32)</li>
<li>a lot more languages. Thanks a lot to all transiflex-supporter</li>
</ul>

<h2>0.55</h2>

<ul>
<li>some minor bugfixes and typos</li>
<li>add some more languages</li>
</ul>

<h2>0.54</h2>

<ul>
<li>bugfix for Piwik 2.11</li>
</ul>

<h2>0.53</h2>

<ul>
<li>bugfix for cloud-view on "Top 10"</li>
<li>deactivating insights for "Top 10"</li>
<li>add more default bots (just use the "add default bots" button, only the new ones will be added)</li>
</ul>

<h2>0.52</h2>

<ul>
<li>bugfix for issue #10 (NOTICE in error-log for undeclared variables)</li>
</ul>

<h2>0.51</h2>

<ul>
<li>emergency-fix for v0.50</li>
</ul>

<h2>0.50</h2>

<ul>
<li>bugfix for issue #9 (wrong time zone for last visit)</li>
</ul>

<h2>0.49</h2>

<ul>
<li>fixed crash with a new and empty webpage</li>
</ul>

<h2>0.48</h2>

<ul>
<li>change requirements because 0.47 doesn\'t work with Piwik 2.3</li>
</ul>

<h2>0.47</h2>

<ul>
<li>bugfix: changes menu-creation for Piwik v2.4</li>
</ul>

<h2>0.46</h2>

<ul>
<li>bugfix: remove depricated method for Piwik v2.2</li>
</ul>

<h2>0.45</h2>

<ul>
<li>add column to primary key in extra-stats-table</li>
</ul>

<h2>0.44</h2>

<ul>
<li>more description for the marketplace</li>
</ul>

<h2>0.43</h2>

<ul>
<li>Compatible with Piwik 2.0</li>
</ul>";}s:8:"download";s:42:"/api/2.0/plugins/BotTracker/download/3.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:63:"https://plugins.matomo.org/BotTracker/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:30;a:31:{s:4:"name";s:7:"ChatGPT";s:11:"displayName";s:8:"Chat GPT";s:5:"owner";s:12:"Chardonneaur";s:11:"description";s:17:"A ChatGPT widget.";s:8:"homepage";s:39:"https://github.com/Chardonneaur/ChatGPT";s:15:"createdDateTime";s:19:"2023-10-02 14:10:02";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:29:"contact@ronan-chardonneau.com";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:46:"https://github.com/Chardonneaur/ChatGPT/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:39:"https://github.com/Chardonneaur/ChatGPT";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:4:"chat";i:1;s:7:"chatgpt";i:2;s:3:"GPT";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:33:"Ronan CHARDONNEAU and Ronan HELLO";s:5:"email";s:29:"contact@ronan-chardonneau.com";s:8:"homepage";s:29:"https://ronan-chardonneau.com";}}s:13:"repositoryUrl";s:39:"https://github.com/Chardonneaur/ChatGPT";s:11:"lastUpdated";s:19:"2023-11-26 16:26:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:5396;s:11:"screenshots";a:3:{i:0;s:65:"https://plugins.matomo.org/ChatGPT/images/5.0.0/User_settings.png";i:1;s:58:"https://plugins.matomo.org/ChatGPT/images/5.0.0/Widget.png";i:2;s:67:"https://plugins.matomo.org/ChatGPT/images/5.0.0/Widget_response.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"33";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-12-16 15:25:03";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-11-26 16:26:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1045;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:48:"https://plugins.matomo.org/ChatGPT/5.0.0/license";}s:22:"repositoryChangelogUrl";s:53:"https://github.com/Chardonneaur/ChatGPT/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:563:"

<p>This plugin has been created in order to integrate ChatGPT into Matomo as a widget. It is nothing complicated, it just
consists in writing your prompts through the Matomo User Interface rather than using ChatGPT.</p>

<p>The difference is that it is using here the ChatGPT API rather than the ChatGPT User Interface.</p>

<p>In order to get started, you need to create an OpenAI API token at https://platform.openai.com/account/api-keys -&gt; Then you add this token into Personnal Settings
in Matomo -&gt; Then you add the widget and you are good to go.</p>";s:3:"faq";s:587:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What does this plugin do?</strong></p>

<p>It just uses the ChatGPT API in order to answer some prompts.</p>

<p><strong>What do I need to make it work?</strong></p>

<p>You need to have an OpenAI token, you will find it at https://platform.openai.com/.</p>

<p><strong>Can I define the temperature and the token limit?</strong></p>

<p>Not yet, but feel free to edit the source code to your wishes, it is released under the GPLv3 license.</p>";s:13:"documentation";s:674:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>Get your API Key from OpenAI</h3>

<p>get your API key and paste it in your User Settings panel under ChatGPT API Key section.</p>

<h3>API Endpoint</h3>

<p><code>ChatGPT.getChatGptResponse</code>
parameters : prompt (string)</p>

<h3>Ask any question to ChatGPT via the widget on your dashboard.</h3>

<p>In order to ask question to ChatGPT, you have to add the widget to your dashboard.
Widget is in a section "ChatGPT &gt; ChatGPT".</p>

<p>The request might take time to respond, but you have a visual indicator of loading time.</p>";s:9:"changelog";s:322:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>v4.1.2</h3>

<ul>
<li>Fix plugin.json definition</li>
</ul>

<h3>v4.1.1</h3>

<ul>
<li>Update documentation</li>
</ul>

<h3>v4.1.0</h3>

<ul>
<li>Update codebase and refactor</li>
</ul>";}s:8:"download";s:39:"/api/2.0/plugins/ChatGPT/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:60:"https://plugins.matomo.org/ChatGPT/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:31;a:31:{s:4:"name";s:22:"TrackingCodeCustomizer";s:11:"displayName";s:24:"Tracking Code Customizer";s:5:"owner";s:6:"jbrule";s:11:"description";s:151:"Allows Matomo admininstrators to customize the tracking code that is autogenerated for users. This is useful for directing requests to the correct ser.";s:8:"homepage";s:60:"https://github.com/jbrule/piwikplugin-TrackingCodeCustomizer";s:15:"createdDateTime";s:19:"2015-04-20 16:28:03";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:8:"tracking";i:1;s:19:"javascript tracking";i:2;s:18:"customize tracking";i:3;s:18:"customise tracking";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:10:"Josh Brule";s:5:"email";N;s:8:"homepage";s:26:"https://github.com/jbrule/";}}s:13:"repositoryUrl";s:60:"https://github.com/jbrule/piwikplugin-TrackingCodeCustomizer";s:11:"lastUpdated";s:19:"2023-11-24 04:36:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:16468;s:11:"screenshots";a:2:{i:0;s:82:"https://plugins.matomo.org/TrackingCodeCustomizer/images/5.0.0/Plugin_Settings.png";i:1;s:80:"https://plugins.matomo.org/TrackingCodeCustomizer/images/5.0.0/Tracking_Code.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"9";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-11-24 04:35:27";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-11-24 04:36:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:90;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:63:"https://plugins.matomo.org/TrackingCodeCustomizer/5.0.0/license";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/jbrule/piwikplugin-TrackingCodeCustomizer/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:309:"

<p>Allows Matomo admininstrators to customize the tracking code that is autogenerated for users. This is useful for directing requests to the correct servers in a multi-server setup, include additional parameters in default tracking, or to perform conditional checks before initiating a tracking call.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:688:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>5.0.0 Updated for compatibility with Piwik 5.0+.</li>
<li>4.0.0 Updated for compatibility with Piwik 4.0+. Removed Piwik branding. Changed to new \'Tracker\' event handler namespace.</li>
<li>3.0.0 Updated for compatibility with Piwik 3.0+. Added "Matomo" branding. Users on pre 3.0 release please see 2.x-dev branch.</li>
<li>0.1.2 Updated for compatibility with Piwik v2.15 and included new registerEvents() hook for compatibility with Piwik 3.0</li>
<li>0.1.1 Version bump to activation Marketplace hook</li>
<li>0.1.0 Initial Release</li>
</ul>";}s:8:"download";s:54:"/api/2.0/plugins/TrackingCodeCustomizer/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:75:"https://plugins.matomo.org/TrackingCodeCustomizer/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:32;a:31:{s:4:"name";s:21:"SiteAccessProvisioner";s:11:"displayName";s:23:"Site Access Provisioner";s:5:"owner";s:6:"jbrule";s:11:"description";s:125:"Provides a simple method to provision access to site analytics. Integration with Content Management System is highly advised.";s:8:"homepage";s:60:"https://github.com/jbrule/matomoplugin-SiteAccessProvisioner";s:15:"createdDateTime";s:19:"2019-02-12 17:40:04";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:11:"integration";i:1;s:6:"access";i:2;s:13:"authorization";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:10:"Josh Brule";s:5:"email";N;s:8:"homepage";s:25:"https://github.com/jbrule";}}s:13:"repositoryUrl";s:60:"https://github.com/jbrule/matomoplugin-SiteAccessProvisioner";s:11:"lastUpdated";s:19:"2023-11-24 04:10:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:5488;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"3";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-11-24 04:08:17";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-11-24 04:10:02";s:8:"requires";a:2:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";s:3:"php";s:7:">=7.0.0";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:43;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:62:"https://plugins.matomo.org/SiteAccessProvisioner/5.0.0/license";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/jbrule/matomoplugin-SiteAccessProvisioner/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:279:"

<p>Plugin for the Matomo Web Analytics software package that facilitates an easy process to grant users access to site reports. A companion access provider is required, usually in the form of a website CMS plugin/module (you may need to build this if one does not exist).</p>

";s:3:"faq";s:1596:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Why are accounts not being created?</strong></p>

<p>This plugin does not create user accounts. It just authorizes already existing accounts to view site tracking reports. If automatic account creation is desired I would suggest looking at the LdapLogin plugin in the Marketplace.
You would need access to an Ldap directory for it to work however.</p>

<p><strong>We are always seeing token expired error?</strong></p>

<p>If your access provider code and Matomo are on seprate servers this could be a symptom of the clocks on either server being incorrect. Using a service such as ntpd on Linux is highly recommended. If you have full control of your server lookup how to setup ntpd for your distribution.
If you are using a hosting service and your system time is incorrect contact your hosting company to find out how to use the Network Time Protocol with your server. Timezone settings should not be a factor as we are using a UNIX TIMESTAMP for calculation.</p>

<p><strong>I built an access provider for xxxx CMS. Would you like to be informed?</strong></p>

<p>Please let me know by <a href="https://github.com/jbrule/matomoplugin-SiteAccessProvisioner/issues">reporting as an issue</a>. Maintaining a directory can be a demanding job so I do not have plans to maintain an access provider directory at this time.
If you create an access provider as a companion to this plugin please reference this plugin in your plugin/module documentation.</p>";s:13:"documentation";s:469:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The easiest way to install is to find the plugin in the <a href="https://plugins.matomo.org/">Matomo Marketplace</a>.
After activation go to General Settings and set a SharedSecret. You will then need to implement an access provider (example code available in README) which will generate a link for users to use to access Matomo.</p>";s:9:"changelog";s:300:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>5.0.0 Matomo 5 Compatible.</li>
<li>4.0.1 Matomo 4 Compatible. Fixed generator documentation link in Plugin Settings</li>
<li>3.0.0 Initial Version</li>
</ul>";}s:8:"download";s:53:"/api/2.0/plugins/SiteAccessProvisioner/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:74:"https://plugins.matomo.org/SiteAccessProvisioner/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:33;a:31:{s:4:"name";s:5:"Seven";s:11:"displayName";s:5:"Seven";s:5:"owner";s:8:"seven-io";s:11:"description";s:22:"Send SMS via seven.io.";s:8:"homepage";s:20:"https://www.seven.io";s:15:"createdDateTime";s:19:"2023-11-23 08:30:03";s:6:"donate";a:0:{}s:7:"support";a:5:{i:0;a:4:{s:4:"name";s:13:"Documentation";s:3:"key";s:4:"docs";s:5:"value";s:59:"https://www.seven.io/en/docs/gateway/http-api/sms-disptach/";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"support@seven.io";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:41:"https://github.com/seven-io/matomo/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:34:"https://github.com/seven-io/matomo";s:4:"type";s:3:"url";}i:4;a:4:{s:4:"name";s:3:"RSS";s:3:"key";s:3:"rss";s:5:"value";s:29:"https://www.seven.io/en/feed/";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:3:"SMS";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:34:"seven communications GmbH & Co. KG";s:5:"email";s:16:"support@seven.io";s:8:"homepage";s:20:"https://www.seven.io";}}s:13:"repositoryUrl";s:34:"https://github.com/seven-io/matomo";s:11:"lastUpdated";s:19:"2023-11-23 08:30:03";s:13:"latestVersion";s:5:"2.0.0";s:12:"numDownloads";i:1049;s:11:"screenshots";a:5:{i:0;s:66:"https://plugins.matomo.org/Seven/images/2.0.0/add_phone_number.png";i:1;s:66:"https://plugins.matomo.org/Seven/images/2.0.0/add_sms_provider.png";i:2;s:63:"https://plugins.matomo.org/Seven/images/2.0.0/create_report.png";i:3;s:66:"https://plugins.matomo.org/Seven/images/2.0.0/reports_overview.png";i:4;s:71:"https://plugins.matomo.org/Seven/images/2.0.0/validate_phone_number.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"12";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-12-15 13:12:07";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"2.0.0";s:7:"release";s:19:"2023-11-23 08:30:03";s:8:"requires";a:1:{s:6:"matomo";s:17:">=4.1.1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1049;s:7:"license";a:2:{s:4:"name";s:3:"MIT";s:3:"url";s:46:"https://plugins.matomo.org/Seven/2.0.0/license";}s:22:"repositoryChangelogUrl";s:49:"https://github.com/seven-io/matomo/commits/v2.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:1605:"

<p>Send SMS Reports from Matomo via <a href="https://www.seven.io">seven</a>.</p>

<h3>Installation</h3>

<p>You can install this plugin via the <a href="https://plugins.matomo.org/">marketplace</a> or manually by
going through the following steps:</p>

<ol>
<li>Download
the <a href="https://github.com/seven-io/matomo/releases/latest/download/seven-matomo-latest.zip">latest release</a></li>
<li>Extract the archive contents to /plugins relative to your Matomo installation path</li>
<li>Go to <code>Settings -&gt; System -&gt; Plugins</code> and activate the plugin named <code>Seven</code></li>
<li><a href="https://raw.githubusercontent.com/seven-io/matomo/master/screenshots/add_sms_provider.png">Add a new SMS provider</a></li>
<li><a href="https://raw.githubusercontent.com/seven-io/matomo/master/screenshots/add_phone_number.png">Add a new phone number</a></li>
<li><a href="https://raw.githubusercontent.com/seven-io/matomo/master/screenshots/validate_phone_number.png">Validate the phone number</a></li>
<li><a href="https://raw.githubusercontent.com/seven-io/matomo/master/screenshots/create_report.png">Create a report</a></li>
<li>Test the workflow by clicking <code>Send Report now</code> in
the <a href="https://raw.githubusercontent.com/seven-io/matomo/master/screenshots/reports_overview.png">Personal Email Reports</a></li>
</ol>

<h4>Support</h4>

<p>Need help? Feel free to <a href="https://www.seven.io/en/company/contact">contact us</a>.</p>

<h5>License</h5>

<p><a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-teal.svg" alt="License-MIT-teal.svg" /></a></p>";s:3:"faq";s:535:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What do I need to start sending SMS?</strong></p>

<p>All you need is an account from seven.io with sufficient balance.</p>

<p><strong>Where can I register a new account?</strong></p>

<p>Visit https://app.seven.io/signup for registering.</p>

<p><strong>Where can I find my API key?</strong></p>

<p>Check out our <a href="https://help.seven.io/en/api-key-access">helpdesk article</a>.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:460:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>v2.0.0</p>

<ul>
<li>Support v5</li>
<li>Rebranding</li>
</ul>

<p>v1.1.1</p>

<ul>
<li>fixed typo in README</li>
</ul>

<p>v1.1.0</p>

<ul>
<li>getCreditLeft return balance with currency sign</li>
<li>verifyCredential now respects cases like non-whitelisted IP</li>
</ul>

<p>v1.0.0</p>

<ul>
<li>Initial release</li>
</ul>";}s:8:"download";s:37:"/api/2.0/plugins/Seven/download/2.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:58:"https://plugins.matomo.org/Seven/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:34;a:31:{s:4:"name";s:14:"WeatherReports";s:11:"displayName";s:15:"Weather Reports";s:5:"owner";s:8:"openmost";s:11:"description";s:46:"Track weather data from your website visitors.";s:8:"homepage";s:28:"https://openmost.io/products";s:15:"createdDateTime";s:19:"2023-09-30 09:30:03";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:17:"ronan@openmost.io";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:49:"https://github.com/openmost/WeatherReports/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:42:"https://github.com/openmost/WeatherReports";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:6:"Report";i:1;s:7:"reports";i:2;s:6:"Visits";i:3;s:7:"Weather";i:4;s:5:"Meteo";i:5;s:9:"Reporting";i:6;s:8:"Openmost";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:8:"Openmost";s:5:"email";s:17:"ronan@openmost.io";s:8:"homepage";s:19:"https://openmost.io";}}s:13:"repositoryUrl";s:42:"https://github.com/openmost/WeatherReports";s:11:"lastUpdated";s:19:"2023-11-22 17:12:04";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:853;s:11:"screenshots";a:4:{i:0;s:66:"https://plugins.matomo.org/WeatherReports/images/5.0.1/Reports.png";i:1;s:70:"https://plugins.matomo.org/WeatherReports/images/5.0.1/Visitor_log.png";i:2;s:70:"https://plugins.matomo.org/WeatherReports/images/5.0.1/Weather_tag.png";i:3;s:84:"https://plugins.matomo.org/WeatherReports/images/5.0.1/Weather_tag_configuration.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"38";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-11-22 17:10:08";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-11-22 16:28:04";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:0;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:56:"https://github.com/openmost/WeatherReports/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:46:"/api/2.0/plugins/WeatherReports/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-11-22 17:12:04";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:157;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:56:"https://github.com/openmost/WeatherReports/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:226:"

<p>This Matomo plugin allows you to collect weather data on your visitors. This data allows you to have a more in-depth analysis of your data by allowing you to correlate external actions to the behavior of your users.</p>

";s:3:"faq";s:1638:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>How to install this plugin</strong></p>

<p>This plugin is available in the official marketplace of Matomo. You have to install the same way as other plugins</p>

<ul>
<li>Go to the administration panel</li>
<li>Look for the Marketplace section and select "Plugins" in the dropdown</li>
<li>Then search for "<strong>WeatherReports</strong>", install and activate the plugin.</li>
<li>Follow the documentation to install the API fetch method to get the data you want.</li>
</ul>

<p><strong>Can I use something other than the WeatherAPI API to get my data?</strong></p>

<p>Yes of course ! You can use any Weather API you want.
We recommend using <a href="https://www.weatherapi.com/">WeatherAPI</a>, this is the API we used to create the plugin and it works perfectly, but feel free to try another service.</p>

<p><strong>Is the plugin active for all Matomo users in my instance ?</strong></p>

<p>Yes, if you choose this plugin for your Matomo instance, all users will be able to use it.</p>

<p><strong>How can I contribute to this plugin ?</strong></p>

<p>You can help me develop this plugin by contacting me. You can also create the project and request an integration. Any way you consider legitimate to contribute is welcome.</p>

<p><strong>How long this plugin will be maintained ?</strong></p>

<p>As long as possible, I have many project to maintain, I\'m the first user of this plugin and I use Matomo on many project, if I see errors, I\'ll patch this plugin faster as possible !</p>";s:13:"documentation";s:6560:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>1- Install the plugin from the marketplace or via GitHub</h3>

<p>Install this plugin from the Marketplace as super user or download the plugin and install it on your server from FTP in
the <code>/plugins</code> folder.</p>

<p>Upon activation, this plugin will automatically update the structure of your database\'s <code>log.visit</code> table by adding 11
new columns prefixed <code>weather_</code> for the new dimensions.</p>

<h3>2 - Fetch data on your website</h3>

<p>This code allows you to retrieve weather data from <a href="https://www.weatherapi.com">WeatherAPI</a> and send it to your Matomo
instance in Weather reports. Because you only need to retrieve data once per visit, this code has a sessionStorage
variable to avoid multiple requests. The sessionStorage is purged each time the browser is closed.</p>

<p>You\'ll need to generate your own API key (Free plan is up to 1 Million calls per month).
Replace <code>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</code> with your API Key and adjust your language if necessary.</p>

<h3>2 - 1 With Matomo Tag Manager (Recommended)</h3>

<p>Use the Weather custom Tag in Matomo Tag Manager (in the Openmost section)</p>

<p>Set your API Key and publish a new version of your container.</p>

<p>That\'s all !</p>

<h3>2 - 2 OR with Matomo classic code (Only if you don\'t use Matomo Tag Manager)</h3>

<p>Implement the <code>_paq.push([\'WeatherReports.setWeather\'])</code> method on your website using the following snippet:</p>

<pre><code>&lt;!-- Openmost WeatherReports code for Matomo --&gt;
&lt;script&gt;
    async function fetchWeatherData() {

        // Fill with your credentials
        const apiKey = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
        const lang = "en"; // Available lang code here https://www.weatherapi.com/docs/


        if (!sessionStorage.getItem("matomoWeather")) {
            // Get visitor IP address
            const ipapiResponse = await fetch("https://ipapi.co/json/");
            const ipapiData = await ipapiResponse.json();

            if (ipapiData.ip) {
                // Fetch Weather data
                const response = await fetch(`https://api.weatherapi.com/v1/current.json?key=${apiKey}&amp;q=${ipapiData.ip}&amp;aqi=no&amp;lang=${lang}`)
                const data = await response.json();
                const weather = data.current;

                // Send data to Matomo instance
                _paq.push(["WeatherReports.setWeather",
                    weather.cloud,            // Cloud
                    weather.condition.text,   // Condition
                    weather.feelslike_c,      // Temperature in Celsius (for Fahrenheit, use: weather.feelslike_f)
                    weather.humidity,         // Humidity
                    weather.precip_mm,        // Precipitation in millimeters (for inches, use: weather.precip_in)
                    weather.pressure_mb,      // Pressure in millibars (for inches, use: weather.pressure_in)
                    weather.temp_c,           // Temperature in Celsius (for Fahrenheit, use: weather.temp_f)
                    weather.uv,               // Uv
                    weather.vis_km,           // Visibility in kilometers (for miles, use: weather.vis_miles)
                    weather.wind_dir,         // WindDirection
                    weather.wind_kph,         // WindSpeed in Kilometers/h (for miles/h, use: weather.wind_mph)
                ]);

                sessionStorage.setItem("matomoWeather", JSON.stringify(weather));
            }
        }
    }

    fetchWeatherData();
&lt;/script&gt;
&lt;!-- End Openmost WeatherReports code for Matomo --&gt;
</code></pre>

<h3>3 - Enjoy new reports and features</h3>

<p>Now that the plugin is correctly configured, you will find the different reports in the "Weather" section of the
Matomo "Visitors" menu.</p>

<p>These different reports support Matomo\'s automatic archiving CRON for better performance (recommended)</p>

<p><strong>New dimensions with segments and API methods:</strong></p>

<pre><code>| Dimension name   | Type   | Segment name           | API method                        | Tracking HTTP API parameter |
|------------------|--------|------------------------|-----------------------------------|-----------------------------|
| Condition        | string | weatherCondition       | WeatherReports.getCondition       | weather_condition           |
| Cloud            | int    | weatherCloud           | WeatherReports.getCloud           | weather_cloud               |
| Temperature      | float  | weatherTemperature     | WeatherReports.getTemperature     | weather_temperature         |
| Felt temperature | float  | weatherFeltTemperature | WeatherReports.getFeltTemperature | weather_felt_temperature    |
| Pressure         | int    | weatherPressure        | WeatherReports.getPressure        | weather_pressure            |
| Precipitation    | float  | weatherPrecipitation   | WeatherReports.getPrecipitation   | weather_precipitation       |
| Humidity         | int    | weatherHumidity        | WeatherReports.getHumidity        | weather_humidity            |
| Uv               | float  | weatherUv              | WeatherReports.getUv              | weather_uv                  |
| Visibility       | int    | weatherVisibility      | WeatherReports.getVisibility      | weather_visibility          |
| Wind direction   | string | weatherWindDirection   | WeatherReports.getWindDirection   | weather_wind_direction      |
| Wind speed       | float  | weatherWindSpeed       | WeatherReports.getWindSpeed       | weather_wind_speed          |
</code></pre>

<p>Enjoy !</p>

<h3>This is an example of WeatherAPI response:</h3>

<p>You do not have to copy or understand this code, it is simply information about the type of metric returned by
WeatherAPI.</p>

<pre><code> {
  "last_updated_epoch": 1695921300,
  "last_updated": "2023-09-28 19:15",
  "temp_c": 23,
  "temp_f": 73.4,
  "is_day": 1,
  "condition": {
    "text": "Partly cloudy",
    "icon": "//cdn.weatherapi.com/weather/64x64/day/116.png",
    "code": 1003
  },
  "wind_mph": 10.5,
  "wind_kph": 16.9,
  "wind_degree": 220,
  "wind_dir": "SW",
  "pressure_mb": 1015,
  "pressure_in": 29.97,
  "precip_mm": 0,
  "precip_in": 0,
  "humidity": 69,
  "cloud": 75,
  "feelslike_c": 25.1,
  "feelslike_f": 77.2,
  "vis_km": 10,
  "vis_miles": 6,
  "uv": 5,
  "gust_mph": 18.7,
  "gust_kph": 30.2
}
</code></pre>";s:9:"changelog";s:1591:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>v5.0.1</h3>

<p>update: MeasurableSettings</p>

<h3>v5.0.0</h3>

<p>Support Matomo v5</p>

<h3>v4.3.3</h3>

<p>Update documentation FAQ</p>

<h3>v4.3.2</h3>

<p>Update tag language selector</p>

<h3>v4.3.1</h3>

<p>Add screenshots</p>

<h3>v4.3.0</h3>

<p>Add custom unit in Weather Tag from Tag Manager</p>

<h3>v4.2.1</h3>

<p>Add screenshots and update documentation</p>

<h3>v4.2.0</h3>

<p>Add Matomo Tag Manager Custom Tag</p>

<h3>v4.1.0</h3>

<p>Support Matomo Tag Manager</p>

<p>Add FR translation</p>

<p>Change <code>_paq.push([\'WeatherReports.setWeather\'])</code> parameters order</p>

<h3>v4.0.13</h3>

<p>Add fetch to IPApi to get rid of PHP global variable</p>

<h3>v4.0.12</h3>

<p>Change request to PING=1</p>

<h3>v4.0.11</h3>

<p>Rename screenshots</p>

<h3>v4.0.10</h3>

<p>Add screenshots</p>

<h3>v4.0.9</h3>

<p>Fix report Archiver.php class</p>

<h3>v4.0.8</h3>

<p>Test #3 with methods in Archiver.php</p>

<h3>v4.0.7</h3>

<p>Test #2 with abstract Class in Archiver.php</p>

<h3>v4.0.6</h3>

<p>Test #2 with abstract method in Archiver.php</p>

<h3>v4.0.5</h3>

<p>Remove abstract method from Archiver.php</p>

<h3>v4.0.4</h3>

<p>Change blade view for VisitorDetails</p>

<h3>v4.0.3</h3>

<p>Add abstract method to Archiver.php</p>

<h3>v4.0.2</h3>

<p>Update IP Address</p>

<h3>v4.0.1</h3>

<p>Update table in docs/index.md (Markdown tables are not supported by Matomo)</p>

<h3>v4.0.0</h3>

<p>Plugin starting code base</p>";}s:8:"download";s:46:"/api/2.0/plugins/WeatherReports/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:67:"https://plugins.matomo.org/WeatherReports/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:35;a:31:{s:4:"name";s:11:"CampusGeoIP";s:11:"displayName";s:13:"Campus Geo IP";s:5:"owner";s:6:"jbrule";s:11:"description";s:100:"This location provider is designed to geolocate ips across a campus in an intranet type environment.";s:8:"homepage";s:50:"https://github.com/jbrule/matomoplugin-CampusGeoIP";s:15:"createdDateTime";s:19:"2021-07-21 23:50:03";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:8:"Intranet";i:1;s:5:"GeoIP";i:2;s:9:"locations";i:3;s:15:"custom networks";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:10:"Josh Brule";s:5:"email";N;s:8:"homepage";s:26:"https://github.com/jbrule/";}}s:13:"repositoryUrl";s:50:"https://github.com/jbrule/matomoplugin-CampusGeoIP";s:11:"lastUpdated";s:19:"2023-11-22 03:36:03";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";i:18254;s:11:"screenshots";a:2:{i:0;s:68:"https://plugins.matomo.org/CampusGeoIP/images/5.0.2/geoip_screen.png";i:1;s:65:"https://plugins.matomo.org/CampusGeoIP/images/5.0.2/locations.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"7";s:15:"numContributors";s:1:"3";s:14:"lastCommitDate";s:19:"2023-11-22 03:34:47";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-11-22 02:02:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:2;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:64:"https://github.com/jbrule/matomoplugin-CampusGeoIP/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:43:"/api/2.0/plugins/CampusGeoIP/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-11-22 03:36:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1297;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:64:"https://github.com/jbrule/matomoplugin-CampusGeoIP/commits/5.0.2";s:10:"readmeHtml";a:4:{s:11:"description";s:621:"

<p>Custom Geo IP resolver that was designed to resolve private IP space across many campuses. Add your network ranges and locations and this will find which IP address maps to the location</p>

<ul>
<li>Used in production on a LAN with 23,000+ defined networks across 95 locations</li>
<li>Supports custom IP networks</li>
<li>IPv6 ready (not production tested)</li>
<li>Includes bulk IP resolution API</li>
<li>Includes CIDR range resolver</li>
<li>Includes a testing function that harvests IPs from vistor log</li>
<li>GeoIP database resides in MySQL/MariaDB</li>
<li>Fallback support (added by @tsgeolu)</li>
</ul>

";s:3:"faq";s:145:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>FAQ</h2>";s:13:"documentation";s:3755:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>This is a Location Provider plugin that supports GeoIP resolution for configured networks. We use it to resolve IPs to locations across our campuses. It theoretically supports IPv6 but that hasn\'t been heavily tested. It has been used since 2019 to resolve IPs from 23,000+ private network ranges across 95 locations.</p>

<p>Upon install this plugin creates two table in the database</p>

<h3>Locations (Campuses)</h3>

<ul>
<li><code>campusgeoip_locations</code> - this table needs to be populated directly (Sequel Ace, phpMyAdmin) as there is no UI built to do that. <img src="/screenshots/locations.png" alt="locations.png" /></li>
</ul>

<p>Sample location data is available in <a href="./location-test-data.sql">location-test-data.sql</a>. This data is a match for the networks-example.txt network data provided later.</p>

<h3>Networks</h3>

<ul>
<li><code>campusgeoip_networks</code> - this table is populated and maintained using the following console command  <code>./console campusgeoip:update-networks http://&lt;yournetworkdata&gt;</code> to load from web or <code>./console campusgeoip:update-networks ./networks-data.txt</code> to load from a local file.</li>
</ul>

<p>Make sure your campus and CampusCode fields match across the locations table and network data as that is what the join is preformed on.</p>

<h4>Format of Networks data file (yournetworkdata)</h4>

<pre><code>NetworkFirstAsInteger|NetworkLastAsInteger|NetworkAsInteger|NetworkWithCIDR|NetworkAddress|NetworkCIDR|NetworkMask|NetworkHostCount|NetworkComment|Region|CampusCode|BuildingCode|FloorCode|Use|Disabled
167772160|167772415|167772160|10.0.0.0/24|10.0.0.0|24|255.255.255.0|256|My Network Comment|Region Name|CA|BA|01||false
167816704|167816959|167816704|10.0.174.0/24|10.0.174.0|24|255.255.255.0|256|My Network Comment 2|Region Name|CA|BA|03||false
</code></pre>

<p>There is a <a href="./networks-example.txt">networks-example.txt</a> file available for reference</p>

<p>The following fields are the only ones parsed. The plugin was written against this format because it was what our IPAM delivers. Ideally this would be configurable. Pull Requests welcome.
["cidr"=&gt;3,"note"=&gt;8,"region"=&gt;9,"campus"=&gt;10,"building"=&gt;11,"floor"=&gt;12,"use"=&gt;13,"disabled"=&gt;14]</p>

<h3>Alternate Network Population Method</h3>

<p>As of plugin version 5.0.1 an alternate population option was added. If you are comfortable you can now populate the database with a tool (Sequel Ace, phpMyAdmin) using a query like the following.</p>

<pre><code>INSERT INTO `matomo_campusgeoip_networks` (`cidr`, `campus`, `region`, `building`, `floor`, `note`) VALUES (\'192.168.20.0/24\',\'TH\',\'MD\',\'J\',\'Upper\',\'Tree House Upper Floor\');
</code></pre>

<p>The required network_start and network_end fields will not be populated initially if using this method. The following <a href="https://matomo.org/faq/general/faq_21827/">console</a> command will need to be run to resolve the start and end range for the network.</p>

<pre><code>./console campusgeoip:resolve-network-ranges
</code></pre>

<p>The command will print out the network cidrs it has resolved.</p>

<pre><code>Resolved ranges for 192.168.20.0/24
</code></pre>

<h1>Enable</h1>

<p>When you have all the data populated go into the Matomo admin and switch the location provider under ![Geolocation](/screenshots/GeoIP Screen.png).</p>

<h1>Wish List</h1>

<p>Pull Requests are welcome if you would like to implement these features
* Clean implementation that includes building and floor in reports
* Configurable network data parser
* GUI for managing locations and networks</p>";s:9:"changelog";s:820:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h1>5.0.2</h1>

<p>Fixed plugin.json version</p>

<h1>5.0.1</h1>

<p>Added resolve-network-range feature</p>

<h1>5.0.0</h1>

<p>Matomo 5.x compatibility</p>

<h1>4.1.6</h1>

<p>Added Geolocation Provider fallback support. Thank you  @tsgeolu</p>

<h1>4.1.5</h1>

<p>Increased region length from 2 to 4 chars to support international regions. Thank you @rockyluke</p>

<h1>4.1.4</h1>

<p>Fixed network import bugs</p>

<h1>4.1.3</h1>

<p>Added debug information when exception occurrs on network data import</p>

<h1>4.1.2</h1>

<p>Added support for importing networks data from local file system.</p>

<h1>4.0.1</h1>

<p>Screenshot Correction</p>

<h1>4.0.0</h1>

<p>Initial release</p>";}s:8:"download";s:43:"/api/2.0/plugins/CampusGeoIP/download/5.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:64:"https://plugins.matomo.org/CampusGeoIP/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:36;a:31:{s:4:"name";s:17:"AdminNotification";s:11:"displayName";s:18:"Admin Notification";s:5:"owner";s:6:"jbrule";s:11:"description";s:156:"Adds the ability for Matomo (Piwik) administrators to include an informative message to all user\'s dashboards. This uses the built in Notification function.";s:8:"homepage";s:55:"https://github.com/jbrule/piwikplugin-AdminNotification";s:15:"createdDateTime";s:19:"2015-04-13 17:52:03";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:12:"notification";i:1;s:13:"admin message";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:10:"Josh Brule";s:5:"email";N;s:8:"homepage";s:25:"https://github.com/jbrule";}}s:13:"repositoryUrl";s:55:"https://github.com/jbrule/piwikplugin-AdminNotification";s:11:"lastUpdated";s:19:"2023-11-21 05:44:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:33272;s:11:"screenshots";a:2:{i:0;s:89:"https://plugins.matomo.org/AdminNotification/images/5.0.0/Dashboard_with_Notification.png";i:1;s:83:"https://plugins.matomo.org/AdminNotification/images/5.0.0/Notification_Settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"17";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-11-21 05:43:35";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-11-21 05:44:02";s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1213;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:58:"https://plugins.matomo.org/AdminNotification/5.0.0/license";}s:22:"repositoryChangelogUrl";s:69:"https://github.com/jbrule/piwikplugin-AdminNotification/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:344:"

<p>Adds the ability for Matomo administrators to include an informative message on all users\' dashboards. This may be useful for communicating with users in larger shared environments. In our setup we were tracking 1,900 websites with 250 users. This is a solution we wrote to allow us to easily inform our users of maintenance windows.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:422:"<ul>
<li>5.0.0 Matomo v5 compatible, not backwards compatible.</li>
<li>3.0.0 Piwik v3 compatible. Effort was made to maintain backwards compatibility. This should work all the way back to 2.12.x</li>
<li>0.1.2 Tested with Piwik v2.15 and included new registerEvents() hook for compatibility with Piwik 3.0</li>
<li>0.1.1 Cleanup. Removed plugin template verbiage from code files.</li>
<li>0.1.0 Initial Release</li>
</ul>";}s:8:"download";s:49:"/api/2.0/plugins/AdminNotification/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:70:"https://plugins.matomo.org/AdminNotification/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:37;a:31:{s:4:"name";s:19:"DeviceDetectorCache";s:11:"displayName";s:21:"Device Detector Cache";s:5:"owner";s:10:"matomo-org";s:11:"description";s:100:"Makes tracking faster by detecting many devices, operating systems, bots, and browsers from a cache.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2019-10-23 20:14:04";s:6:"donate";a:0:{}s:7:"support";a:1:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:63:"https://github.com/matomo-org/plugin-DeviceDetectorCache/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:11:"performance";i:1;s:8:"tracking";i:2;s:6:"device";i:3;s:8:"detector";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:56:"https://github.com/matomo-org/plugin-DeviceDetectorCache";s:11:"lastUpdated";s:19:"2023-11-21 00:40:03";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";i:18342;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"145";s:15:"numContributors";s:2:"19";s:14:"lastCommitDate";s:19:"2023-12-21 01:34:35";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:3:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-05 00:28:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:67;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:60:"https://plugins.matomo.org/DeviceDetectorCache/5.0.0/license";}s:22:"repositoryChangelogUrl";s:73:"https://github.com/matomo-org/plugin-DeviceDetectorCache/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:51:"/api/2.0/plugins/DeviceDetectorCache/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-10-03 04:32:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:90;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:60:"https://plugins.matomo.org/DeviceDetectorCache/5.0.1/license";}s:22:"repositoryChangelogUrl";s:70:"https://github.com/matomo-org/plugin-DeviceDetectorCache/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:51:"/api/2.0/plugins/DeviceDetectorCache/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-11-21 00:40:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:660;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:60:"https://plugins.matomo.org/DeviceDetectorCache/5.0.2/license";}s:22:"repositoryChangelogUrl";s:70:"https://github.com/matomo-org/plugin-DeviceDetectorCache/commits/5.0.2";s:10:"readmeHtml";a:4:{s:11:"description";s:2548:"

<p>Makes device detection in Matomo faster by having cached entries for many commonly used user agents.</p>

<p>By default, Matomo runs thousands of regular expressions for each tracking request to detect what Browser, Device, Operating system, ... is being used and to detect if a user agent is a bot or not.</p>

<p>This plugin changes this by first looking if a cached result exists for the particular user agent and if so, directly loads the result from the file system.</p>

<p>We recommend this plugin only if you have a very high traffic website (&gt; 200M requests a month). Depending on your server it may save you a few ms per tracking request (say 5ms which may be say 10% of the total tracking request time).</p>

<p>If you have not that much traffic, the overhead might not be worth it.</p>

<h3>How to set it up</h3>

<h4>Config setup</h4>

<p>Configure these values in your <code>config/config.ini.php</code></p>

<pre><code>[DeviceDetectorCache]
access_log_path = "/var/log/httpd/access_log" # The path to your access log file. This command needs to have read permission for this file
access_log_regex = "/^(\\S+) (\\S+) (\\S+) \\[([^:]+):(\\d+:\\d+:\\d+) ([^\\]]+)\\] \\"(\\S+) (.*?) (\\S+)\\" (\\S+) (\\S+) \\"([^\\"]*)\\" \\"([^\\"]*)\\"$/" # the regex used to extract the user agent
regex_match_entry = 14 # defines which subpattern of the abovce regex matches the user agent
num_cache_entries = 200000 # how many user agents should be cached. This value basically depends on your memory and disk space. Likely there is no need to change this
</code></pre>

<h4>Testing if it works</h4>

<p>Run this command to see if it works:</p>

<pre><code>php /path/to/matomo/console device-detector-cache:warm-cache -vvv
</code></pre>

<p>It should show how many user agents were detected and should print the top 10 most commonly found user agents if things are configured correctly.</p>

<p>Cached files will be stored in <code>/tmp/devicecache/</code>. Make sure there is write access for this folder. Every time this command runs previously created cache entries will be deleted.</p>

<h4>Set up a cronjob</h4>

<p>If above test goes well you need to set up a cronjob that runs regularly (eg every few hours or days) to update the cached entries based on the access log.</p>

<p>The cronjob needs to look like for example like this:</p>

<pre><code>0 8 * * * php /path/to/matomo/console device-detector-cache:warm-cache
</code></pre>

<p>If you have multiple servers, you need to set up the command on every server that processes tracking requests.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:931:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>5.0.2
- Fixes errors due to incorrect default values</p>

<p>5.0.1
- Fixes errors from undefined indexes</p>

<p>5.0.0
- Compatibility with Matomo 5.X</p>

<p>4.3.0
- Compatibility with Matomo 4.12, and Adjustments for client hints support</p>

<p>4.2.3
- Fixed parsers not being set when cache is present</p>

<p>4.2.2
- Compatibility with Matomo 4</p>

<p>4.2.1
- Compatibility with PHP DI 6</p>

<p>4.2.0
- Performance improvements</p>

<p>4.1.0
- Changed how this command works. It now requires a configuration.</p>

<p>4.0.0
- Compatibility with Matomo 4.X</p>

<p>3.1.0
- Changed how this command works. It now requires a configuration.</p>

<p>3.0.3
- Add more cache entries</p>

<p>3.0.2
- Add more cache entries</p>

<p>3.0.1
- Add more cache entries</p>

<p>3.0.0
- Initial version</p>";}s:8:"download";s:51:"/api/2.0/plugins/DeviceDetectorCache/download/5.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:72:"https://plugins.matomo.org/DeviceDetectorCache/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:38;a:31:{s:4:"name";s:12:"SecurityInfo";s:11:"displayName";s:13:"Security Info";s:5:"owner";s:10:"matomo-org";s:11:"description";s:133:"Provides security information about your PHP environment and offers suggestions based on PhpSecInfo from the PHP Security Consortium.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2013-10-31 22:12:08";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:56:"https://github.com/matomo-org/plugin-SecurityInfo/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:49:"https://github.com/matomo-org/plugin-SecurityInfo";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:8:"security";i:1;s:6:"phpsec";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:49:"https://github.com/matomo-org/plugin-SecurityInfo";s:11:"lastUpdated";s:19:"2023-11-20 05:24:03";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:104241;s:11:"screenshots";a:1:{i:0;s:70:"https://plugins.matomo.org/SecurityInfo/images/5.0.1/Security_Info.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"321";s:15:"numContributors";s:2:"34";s:14:"lastCommitDate";s:19:"2023-12-21 01:36:32";}s:8:"featured";b:1;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-05 05:26:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:434;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/matomo-org/plugin-SecurityInfo/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:44:"/api/2.0/plugins/SecurityInfo/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-11-20 05:24:03";s:8:"requires";a:1:{s:6:"matomo";s:21:">=5.0.0-rc5,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:2187;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-SecurityInfo/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:342:"

<p>We highly recommend that all Matomo administrators enable the SecurityInfo plugin, and then view the Settings. The plugin is a tool in a multilayered security approach.</p>

<p>Performed checks include for instance usage of latest PHP version, usage of latest Matomo version, usage of PHP ini settings like magic_quotes_gpc and more.</p>";s:3:"faq";s:353:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Does the plugin replace secure development practices or audit the code/application?</strong></p>

<p>No, it doesn\'t. It just gives you some information based on PhpSecInfo from the PHP Security Consortium.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";s:44:"/api/2.0/plugins/SecurityInfo/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:65:"https://plugins.matomo.org/SecurityInfo/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:39;a:31:{s:4:"name";s:9:"TwilioSMS";s:11:"displayName";s:10:"Twilio SMS";s:5:"owner";s:7:"9joshua";s:11:"description";s:87:"Adds the ability to use Twilio as your SMS provider for Mobile Messaging (SMS Reports).";s:8:"homepage";s:36:"https://github.com/9joshua/TwilioSMS";s:15:"createdDateTime";s:19:"2023-05-12 00:08:02";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:43:"https://github.com/9joshua/TwilioSMS#readme";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:50:"https://github.com/9joshua/TwilioSMS/discussions/1";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:15:"support@base.nz";s:4:"type";s:5:"email";}i:3;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:43:"https://github.com/9joshua/TwilioSMS/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:3:"SMS";i:1;s:7:"reports";i:2;s:6:"Twilio";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:7:"9joshua";s:5:"email";s:15:"support@base.nz";s:8:"homepage";s:15:"https://base.nz";}}s:13:"repositoryUrl";s:36:"https://github.com/9joshua/TwilioSMS";s:11:"lastUpdated";s:19:"2023-11-17 21:04:02";s:13:"latestVersion";s:5:"1.0.2";s:12:"numDownloads";i:1714;s:11:"screenshots";a:4:{i:0;s:55:"https://plugins.matomo.org/TwilioSMS/images/1.0.2/2.png";i:1;s:55:"https://plugins.matomo.org/TwilioSMS/images/1.0.2/3.png";i:2;s:55:"https://plugins.matomo.org/TwilioSMS/images/1.0.2/4.png";i:3;s:55:"https://plugins.matomo.org/TwilioSMS/images/1.0.2/5.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"16";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-11-17 21:02:44";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"1.0.2";s:7:"release";s:19:"2023-11-17 21:04:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=4.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:158;s:7:"license";a:2:{s:4:"name";s:3:"MIT";s:3:"url";s:50:"https://plugins.matomo.org/TwilioSMS/1.0.2/license";}s:22:"repositoryChangelogUrl";s:51:"https://github.com/9joshua/TwilioSMS/commits/v1.0.2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:187:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>My question?</strong></p>

<p>My answer</p>";s:13:"documentation";s:155:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>Documentation</h2>";s:9:"changelog";s:161:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>Initial release 0.1.0</p>";}s:8:"download";s:41:"/api/2.0/plugins/TwilioSMS/download/1.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:62:"https://plugins.matomo.org/TwilioSMS/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:40;a:31:{s:4:"name";s:11:"VipDetector";s:11:"displayName";s:12:"Vip Detector";s:5:"owner";s:8:"deadda7a";s:11:"description";s:69:"Detect visits from special predefined IP ranges and display the name.";s:8:"homepage";s:47:"https://github.com/deadda7a/Matomo-VIP-Detector";s:15:"createdDateTime";s:19:"2023-07-12 13:40:02";s:6:"donate";a:2:{s:6:"paypal";s:34:"sebastian.pfeifer@unicorncloud.org";s:7:"bitcoin";N;}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:36:"sebastian@sebastian-elisa-pfeifer.eu";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:54:"https://github.com/deadda7a/Matomo-VIP-Detector/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:47:"https://github.com/deadda7a/Matomo-VIP-Detector";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:5:"range";i:1;s:2:"ip";i:2;s:3:"isp";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:23:"Sebastian Elisa Pfeifer";s:5:"email";s:36:"sebastian@sebastian-elisa-pfeifer.eu";s:8:"homepage";s:39:"https://blog.sebastian-elisa-pfeifer.eu";}}s:13:"repositoryUrl";s:47:"https://github.com/deadda7a/Matomo-VIP-Detector";s:11:"lastUpdated";s:19:"2023-11-17 20:04:02";s:13:"latestVersion";s:5:"2.0.0";s:12:"numDownloads";i:1112;s:11:"screenshots";a:1:{i:0;s:71:"https://plugins.matomo.org/VipDetector/images/2.0.0/access_from_vip.jpg";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"1";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-11-17 20:03:19";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"2.0.0";s:7:"release";s:19:"2023-11-17 20:04:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:144;s:7:"license";a:2:{s:4:"name";s:3:"MIT";s:3:"url";s:52:"https://plugins.matomo.org/VipDetector/2.0.0/license";}s:22:"repositoryChangelogUrl";s:62:"https://github.com/deadda7a/Matomo-VIP-Detector/commits/v2.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:212:"

<p>This plugin links the IP of the visitor with a database of IP ranges to be able to recognize special visitors. This database can be imported from a json file. For more infos check the docs and the FAQ.</p>

";s:3:"faq";s:695:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>Why</h2>

<p>I am a let\'s say "known person" in the Austrian government, mostly because I was one of five people suing them in a civil rights case. And I\'ve a blog. Said blog get\'s visited by government agencies regulary, and I wanted to have an overview of this.</p>

<h2>Limitations</h2>

<p>The subnets you want to match on can\'t be smaller than what you set as the anonymisation factor for the IP adresses. For example if you set the masking for 2 bytes as recommended, the smallest subnet you can match is a /16, if you mask the last byte it is /24.</p>";s:13:"documentation";s:720:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>Quick start</h2>

<ol>
<li>Install the plugin</li>
<li>Create your Json file

<ol>
<li>If you don\'t have one, you can use the one I <a href="https://deadda7a.gitlab.io/austroedit-ranges/">created</a> with Austrian Government Agencies</li>
</ol></li>
<li>Import it <code>./console vipdetector:import-data /path/to/file.json</code></li>
</ol>

<h3>Json File Structure</h3>

<pre><code>[
 {
  "name": "Example Org 1",
  "ranges": [
   "192.0.2.0/24",
   "198.51.100.0/24"
  ]
 },
 {
  "name": "Example Org 2",
  "ranges": [
   "203.0.113.0/24",
   "2001:db8::/32"
  ]
 }
]
</code></pre>";s:9:"changelog";s:216:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>v2.0.0: Matomo 5 compatibility</li>
<li>v1.0.0: Initial release</li>
</ul>";}s:8:"download";s:43:"/api/2.0/plugins/VipDetector/download/2.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:64:"https://plugins.matomo.org/VipDetector/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:41;a:31:{s:4:"name";s:16:"IndexationViewer";s:11:"displayName";s:17:"Indexation Viewer";s:5:"owner";s:9:"ligeo-dev";s:11:"description";s:50:"Show indexation statuses in Matomo administration.";s:8:"homepage";s:31:"https://developpement.ligeo.fr/";s:15:"createdDateTime";s:19:"2023-11-13 15:46:02";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:30:"contact@empreintedigitale.coop";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:66:"https://github.com/ligeo-dev/matomo-plugin-IndexationViewer/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:59:"https://github.com/ligeo-dev/matomo-plugin-IndexationViewer";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:6:"viewer";i:1;s:10:"diagnostic";i:2;s:7:"Archive";i:3;s:10:"indexation";}s:9:"basePrice";i:0;s:7:"authors";a:2:{i:0;a:3:{s:4:"name";s:13:"Kára Sibille";s:5:"email";s:35:"kara.sibille@empreintedigitale.coop";s:8:"homepage";s:30:"https://git.vtech.fr/k.sibille";}i:1;a:3:{s:4:"name";s:16:"Valentin Baraise";s:5:"email";s:39:"valentin.baraise@empreintedigitale.coop";s:8:"homepage";s:29:"https://git.vtech.fr/valentin";}}s:13:"repositoryUrl";s:59:"https://github.com/ligeo-dev/matomo-plugin-IndexationViewer";s:11:"lastUpdated";s:19:"2023-11-14 20:56:03";s:13:"latestVersion";s:5:"0.1.1";s:12:"numDownloads";i:5624;s:11:"screenshots";a:1:{i:0;s:77:"https://plugins.matomo.org/IndexationViewer/images/0.1.1/IndexationViewer.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"4";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-11-14 20:55:57";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"0.1.0";s:7:"release";s:19:"2023-11-13 15:46:03";s:8:"requires";a:1:{s:6:"matomo";s:18:">=4.14.0,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:639;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:57:"https://plugins.matomo.org/IndexationViewer/0.1.0/license";}s:22:"repositoryChangelogUrl";s:73:"https://github.com/ligeo-dev/matomo-plugin-IndexationViewer/commits/0.1.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:48:"/api/2.0/plugins/IndexationViewer/download/0.1.0";}i:1;a:10:{s:4:"name";s:5:"0.1.1";s:7:"release";s:19:"2023-11-14 20:56:03";s:8:"requires";a:1:{s:6:"matomo";s:18:">=4.14.0,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:4985;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:57:"https://plugins.matomo.org/IndexationViewer/0.1.1/license";}s:22:"repositoryChangelogUrl";s:73:"https://github.com/ligeo-dev/matomo-plugin-IndexationViewer/commits/0.1.1";s:10:"readmeHtml";a:4:{s:11:"description";s:225:"

<p>IndexationViewer is a plugin that allows you to visualize archive statuses — i.e. rows with a <code>name</code> value of <code>done*</code>, 
where the suffix can contain a specific plugin name and/or segment hash.</p>";s:3:"faq";s:457:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What does this plugin do?</strong></p>

<p>It provides a user interface to check if your indexation has been run successfully directly from Matomo.</p>

<p><strong>Where can I find the data?</strong></p>

<p>As it relies on "maintenance task" we thought that they should be available in the "Diagnostic" view.</p>";s:13:"documentation";s:1522:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>API Reference</h3>

<ul>
<li><strong>IndexationViewer.getIndexationStatuses</strong>

<ul>
<li>Parameters: (idSite = \'\', period = \'day\', date = \'today\', \'segment\' = \'\', status = \'\', page = 1, limitPerPage = 15)</li>
<li>Response is an array of objects containing:</li>
<li><code>id_archive</code> — (int) Database ID of the archive row ;</li>
<li><code>name</code> — (string) Value of <code>done*</code>, where the suffix can contain a specific plugin name and/or segment hash ;</li>
<li><code>id_site</code> — (int) ID of the website ;</li>
<li><code>period</code> — (string) Period of the archive. Can be any of: day, week, month, year or range ;</li>
<li><code>period_begin_date</code> — (string) Date of the beginning of the period (format: <code>YYYY-MM-DD</code>) ;</li>
<li><code>period_end_date</code> — (string) Date of the end of the period (format: <code>YYYY-MM-DD</code>) ;</li>
<li><code>ts_archived</code> — (string) Timestamp of the archive process (format: <code>Y-m-d H:i:s</code>) ;</li>
<li><code>value</code> — (string) Translation of the archive row status (<code>OK</code>, <code>Error</code> or <code>Invalidated</code>).</li>
</ul></li>
</ul>

<h3>Useful links</h3>

<ul>
<li>https://developer.matomo.org/guides/archiving</li>
<li>https://developer.matomo.org/guides/archive-data</li>
<li>https://developer.matomo.org/guides/segments</li>
</ul>";s:9:"changelog";s:1087:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>All notable changes to this project will be documented in this file.</p>

<p>The format is based on <a href="https://keepachangelog.com/en/1.0.0/">Keep a Changelog</a>,
and this project adheres to <a href="https://semver.org/spec/v2.0.0.html">Semantic Versioning</a>.</p>

<h2><a href="https://github.com/ligeo-dev/matomo-plugin-IndexationViewer/compare/0.1.1...main">unreleased</a></h2>

<h2><a href="https://github.com/ligeo-dev/matomo-plugin-IndexationViewer/releases/tag/0.1.1">0.1.1</a> - 2023-11-14</h2>

<h3>Fixed</h3>

<ul>
<li>Replace links in CHANGELOG that where pointing to the old repository ;</li>
</ul>

<h2><a href="https://github.com/ligeo-dev/matomo-plugin-IndexationViewer/releases/tag/0.1.0">0.1.0</a> - 2023-11-13</h2>

<h3>Added</h3>

<ul>
<li>First plugin release ;</li>
<li>Add a new administration page to list indexation statuses. Indexation
statuses can be filtered by site, date and period, segment, and status ;</li>
</ul>";}s:8:"download";s:48:"/api/2.0/plugins/IndexationViewer/download/0.1.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:69:"https://plugins.matomo.org/IndexationViewer/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:42;a:31:{s:4:"name";s:14:"ProtectTrackID";s:11:"displayName";s:16:"Protect Track ID";s:5:"owner";s:13:"joubertredrat";s:11:"description";s:71:"Provides a option to protect idSite using hash instead default numeric.";s:8:"homepage";s:54:"https://github.com/joubertredrat/Matomo-ProtectTrackID";s:15:"createdDateTime";s:19:"2016-06-30 14:56:04";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:6:"hashid";i:1;s:9:"protectid";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:14:"Joubert RedRat";s:5:"email";s:23:"eu+matomo@redrat.com.br";s:8:"homepage";N;}}s:13:"repositoryUrl";s:54:"https://github.com/joubertredrat/Matomo-ProtectTrackID";s:11:"lastUpdated";s:19:"2023-10-30 14:44:03";s:13:"latestVersion";s:5:"3.0.0";s:12:"numDownloads";i:58567;s:11:"screenshots";a:6:{i:0;s:70:"https://plugins.matomo.org/ProtectTrackID/images/3.0.0/01_settings.png";i:1;s:86:"https://plugins.matomo.org/ProtectTrackID/images/3.0.0/02_javascript-tracking-code.png";i:2;s:81:"https://plugins.matomo.org/ProtectTrackID/images/3.0.0/03_image-tracking-code.png";i:3;s:98:"https://plugins.matomo.org/ProtectTrackID/images/3.0.0/04_api-request-javascript-tracking-code.png";i:4;s:93:"https://plugins.matomo.org/ProtectTrackID/images/3.0.0/05_api-request-image-tracking-code.png";i:5;s:87:"https://plugins.matomo.org/ProtectTrackID/images/3.0.0/06_api-request-get-hashed-id.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"178";s:15:"numContributors";s:2:"17";s:14:"lastCommitDate";s:19:"2023-12-23 12:06:53";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"3.0.0";s:7:"release";s:19:"2023-10-30 14:44:03";s:8:"requires";a:2:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";s:3:"php";s:7:">=7.3.5";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1415;s:7:"license";a:2:{s:4:"name";s:3:"MIT";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:68:"https://github.com/joubertredrat/Matomo-ProtectTrackID/commits/3.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:139:"

<p>Provides a option to protect idSite using hash instead default numeric. This plugin was formerly Matomo (Piwik) Protect TrackID.</p>

";s:3:"faq";s:2210:"<p><strong>Why isn\'t good to change configuration more times?</strong></p>

<p>Because if you change configurations (<code>base string</code>, <code>salt</code> and <code>length</code>), hashed string will change too, then old hashes will not work. ONLY change salt if you will change all JavaScript Tracking Code or Image Tracking Link after change configuration. Then is <strong>HIGHT RECOMMENDED to set configurations ONLY ONE TIME</strong>.</p>

<p><strong>How to I config plugin?</strong></p>

<p>On Administration &gt; Plugin Settings. For plugin work, is required all configurations defined, if only one or two defined, plugin will not work.</p>

<p>Plugin need 3 configurations, <code>base string</code>, <code>salt</code> and <code>length</code>.</p>

<p><code>base string</code> is string used to generate hash. Example, if you set <code>ABCDEFGHIJKLMNOPQRSTUVXWYZ</code>, plugin will use only this characters for build hash.</p>

<p><code>salt</code> is a radom string key for generate hash with <code>base string</code> and <code>length</code> configurations.</p>

<p><code>length</code> is a hash string size. If you set <code>10</code> as example, plugin will generete hash with 10 characters defined on <code>base string</code>.</p>

<p><strong>Why JavaScript Tracking Code and Image Tracking Link is blank?</strong></p>

<p>This plugin will hash siteId by configurations, but if you define small <code>base string</code>, <code>salt</code> or <code>length</code>, plugin wont haven\'t combinations enough for create hash string. Then you need incresease <code>base string</code>, <code>salt</code> and/or <code>length</code>.</p>

<p><strong>If I install this plugin I need to change track code for all sites or old track code still will work?</strong> Thanks <a href="https://github.com/yurgon">@yurgon</a> for the question.</p>

<p>You can install and set plugin configuration, old tracking code will work without problems because plugin validates tracking <code>siteId</code> with plugin settings to set if <code>siteId</code> is hashed id or normal numeric id. But is necessary attention, because although old tracking code will continue work, Matomo will display only new tracking code.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:190:"<p>See <a href="https://github.com/joubertredrat/Matomo-ProtectTrackID/releases">releases</a>. This project follows the guidelines of <a href="http://semver.org">semantic versioning</a>.</p>";}s:8:"download";s:46:"/api/2.0/plugins/ProtectTrackID/download/3.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:67:"https://plugins.matomo.org/ProtectTrackID/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:43;a:31:{s:4:"name";s:12:"iPadDetector";s:11:"displayName";s:13:"iPad Detector";s:5:"owner";s:8:"Starker3";s:11:"description";s:98:"Simple plugin that allows Matomo to detect iPad devices as iPads instead of macOS Desktop devices.";s:8:"homepage";N;s:15:"createdDateTime";s:19:"2023-10-20 00:40:02";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:0:{}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:8:"Starker3";s:5:"email";N;s:8:"homepage";s:46:"https://github.com/Starker3/MatomoiPadDetector";}}s:13:"repositoryUrl";s:46:"https://github.com/Starker3/MatomoiPadDetector";s:11:"lastUpdated";s:19:"2023-10-20 00:50:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:780;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"2";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-10-20 00:48:16";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-10-20 00:50:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:283;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:53:"https://plugins.matomo.org/iPadDetector/5.0.0/license";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/Starker3/MatomoiPadDetector/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:172:"

<p>This is a simple plugin that forces the tracking of iPad devices by overwriting the User Agent sent with each tracking request when the an iPad device is detected.</p>";s:3:"faq";s:1205:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Does this plugin require configuration?</strong></p>

<p>No, simply install and activate the plugin and you\'ll be able to track iPad devices.</p>

<p><strong>Does this plugin work with Tag Manager?</strong></p>

<p>Yes, as long as you bundle matomo.js in your Matomo Configuration variable and enable "Register as default tracker".</p>

<p><strong>Why do I need this plugin? Why doesn\'t this functionality exist already?</strong></p>

<p>Matomo detects what device/user agent is sending requests to your Matomo server by using the user agent sent with the request to the web server.
iPads pretend to be Desktop devices to websites by sending a macOS desktop User Agent to prevent receiving mobile versions of websites which are not optimised for iPad screen sizes. This plugin detects iPads using User Agent detection for a Macbook device with a touchscreen and then overwrites the User Agent with that of a iPad User agent so that Matomo can track it correctly. Since no Macbook exists with a touchscreen this method should be safe to use for this purpose.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:217:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>4.0.0 Initial release for Matomo 4</p>

<p>5.0.0 Initial release for Matomo 5</p>";}s:8:"download";s:44:"/api/2.0/plugins/iPadDetector/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:65:"https://plugins.matomo.org/iPadDetector/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:44;a:31:{s:4:"name";s:27:"MarketingCampaignsReporting";s:11:"displayName";s:29:"Marketing Campaigns Reporting";s:5:"owner";s:10:"matomo-org";s:11:"description";s:149:"Measure the effectiveness of your marketing campaigns. New reports, segments & track up to five channels: campaign, source, medium, keyword, content.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2017-03-16 00:16:03";s:6:"donate";a:0:{}s:7:"support";a:5:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:69:"https://github.com/matomo-org/plugin-MarketingCampaignsReporting/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"hello@matomo.org";s:4:"type";s:5:"email";}i:3;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:71:"https://github.com/matomo-org/plugin-MarketingCampaignsReporting/issues";s:4:"type";s:3:"url";}i:4;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:64:"https://github.com/matomo-org/plugin-MarketingCampaignsReporting";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:8:"Campaign";i:1;s:9:"Marketing";i:2;s:8:"Channels";i:3;s:8:"UTM tags";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:64:"https://github.com/matomo-org/plugin-MarketingCampaignsReporting";s:11:"lastUpdated";s:19:"2023-10-09 08:36:04";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";i:119931;s:11:"screenshots";a:2:{i:0;s:27:"https://plugins.matomo.org/";i:1;s:107:"https://plugins.matomo.org/MarketingCampaignsReporting/images/5.0.2/Marketing-Campaign-Analytics-report.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"319";s:15:"numContributors";s:2:"32";s:14:"lastCommitDate";s:19:"2023-12-27 00:02:48";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:3:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-05 00:46:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:386;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:68:"https://plugins.matomo.org/MarketingCampaignsReporting/5.0.0/license";}s:22:"repositoryChangelogUrl";s:81:"https://github.com/matomo-org/plugin-MarketingCampaignsReporting/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:59:"/api/2.0/plugins/MarketingCampaignsReporting/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-08-08 22:34:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:170;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:68:"https://plugins.matomo.org/MarketingCampaignsReporting/5.0.1/license";}s:22:"repositoryChangelogUrl";s:81:"https://github.com/matomo-org/plugin-MarketingCampaignsReporting/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:59:"/api/2.0/plugins/MarketingCampaignsReporting/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-10-09 08:36:04";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1803;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:68:"https://plugins.matomo.org/MarketingCampaignsReporting/5.0.2/license";}s:22:"repositoryChangelogUrl";s:78:"https://github.com/matomo-org/plugin-MarketingCampaignsReporting/commits/5.0.2";s:10:"readmeHtml";a:4:{s:11:"description";s:5097:"

<p>Measure the effectiveness of your marketing campaigns. 
Measure up to five of your marketing campaigns channels: name, source, medium, keyword, content. 
Access all your campaign analytics reports into a unified interface and track the effectiveness of all your channels.
Supports any kind of campaign and channel: Adwords, Facebook, Twitter, Youtube, Display advertising, Custom Marketing campaigns, Email newsletters.</p>

<h3>The Marketing URL Builder</h3>

<p><a href="https://matomo.org/docs/tracking-campaigns-url-builder/">Generate your trackable marketing URLs with our URL Builder tool.</a></p>

<h3>Tracking campaigns</h3>

<p>To track a campaign, you add special URL parameters to your URLs.</p>

<p>The URL parameters are:</p>

<ul>
<li><code>mtm_campaign</code> (campaign name such as mailing_2017_03 or Easter_Sale),</li>
<li><code>mtm_source</code> (campaign source such as google or facebook),</li>
<li><code>mtm_medium</code> (campaign medium such as email or cpc),</li>
<li><code>mtm_keyword</code> (campaign keyword),</li>
<li><code>mtm_content</code> (campaign content),</li>
<li><code>mtm_cid</code> (campaign ID code).</li>
<li><code>mtm_group</code> (campaign group).</li>
<li><code>mtm_placement</code> (campaign placement).</li>
</ul>

<p>If you already have URLs tagged with Google Analytics parameters these are also supported:</p>

<ul>
<li><code>utm_campaign</code>,</li>
<li><code>utm_source</code>,</li>
<li><code>utm_medium</code>,</li>
<li><code>utm_term</code>,</li>
<li><code>utm_content</code>,</li>
<li><code>utm_id</code>.</li>
</ul>

<p>For example if your Ad URL or landing page URL is <code>example.com/offer</code>, you would track all clicks on this URL by 
adding one or more of the parameters above:</p>

<pre><code>example.com/offer?mtm_campaign=Best-Seller&amp;mtm_source=Newsletter_7&amp;mtm_medium=email
</code></pre>

<h3>Features</h3>

<ul>
<li>Real time Analytics Reports of all your Campaign Marketing.</li>
<li>Detects Campaign parameters from the landing page URL, within the query string or in the #hash string.</li>
<li>The Referrers&gt;Overview report displays a left column "Referrers Overview" with a list of reports that can be loaded on click.
This report viewer now also lists the new Campaign reports under "View Referrers by Campaign".</li>
<li>The content of Referrers&gt; Campaign will be replaced with the new enhanced Campaigns reports.</li>
<li>The default Referrers Campaign widget and API are working as before.</li>
<li>The campaign reports are available in Matomo Mobile and can be sent as Scheduled reports (by email, as HTML or PDF).</li>
<li>Segment editor: a new "Campaigns" category lists the five new segment for each campaign dimension (campaign name, campaign keyword, campaign source, campaign medium, campaign content).</li>
<li>Add Marketing campaign reports to your personalized Dashboard.</li>
<li>Access the Campaign Report data with the Marketing Campaigns Reporting API.</li>
<li>Will track up to 250 characters for each of the five Campaign dimension.</li>
<li>Get automatic <a href="https://matomo.org/docs/email-reports/">email and sms reports</a> for your campaigns, or send them to your colleagues or customers.</li>
</ul>

<h3>Reports for more than 1,000 campaigns</h3>

<p>In the Campaign reports by default Matomo will only archive the first 1000 rows (your 1000 most popular campaigns). 
To report on all your campaigns you can configure Matomo so it does not truncate your data. 
For example to keep the top 10,000 campaigns edit your <code>config/config.ini.php</code> and add the following:</p>

<pre><code>[General]
datatable_archiving_maximum_rows_referrers = 10000
datatable_archiving_maximum_rows_subtable_referrers = 10000
</code></pre>

<h3>Customising your campaign parameters</h3>

<p>It is possible to configure custom names for campaign parameters. In order to do so you have add config to config.ini.php file.
If you configure any campaign parameter this configuration will overwrite default config for this parameter.</p>

<pre><code>[MarketingCampaignsReporting]
campaign_name = "matomo_campaign,mtm_cpn,utm_campaign"
campaign_keyword = "mtm_keyword,matomo_kwd,mtm_kwd,utm_term"
campaign_source = "mtm_source,utm_source"
campaign_medium = "mtm_medium,utm_medium"
campaign_content = "mtm_content,utm_content"
campaign_id = "mtm_cid,utm_id,mtm_clid"
campaign_group = "mtm_group"
campaign_placement = "mtm_placement"
</code></pre>

<p>For example, by default parameter <code>campaign_name</code> track following parameters if they are found in URL: <code>\'mtm_campaign\', \'matomo_campaign\', \'mtm_cpn\', \'utm_campaign\'</code>. If you configure <code>campaign_name</code> like this <code>campaign_name="mtm_campaign,custom_name_parameter"</code>, then parameter <code>campaign_name</code> will detect only presence of <code>mtm_campaign</code> and <code>custom_name_parameter</code> in URL. <code>matomo_campaign</code>, <code>mtm_cpn</code>, <code>utm_campaign</code> will be ignored until they are present in config.
All parameter are case-insensitiv except optional mtm_clid.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:427:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>Learn more about tracking campaigns in Matomo (Piwik) in our <a href="https://matomo.org/docs/tracking-campaigns/">user guide</a> and use the <a href="https://matomo.org/docs/tracking-campaigns-url-builder/">URL Builder</a> to generate URLs ready to use for tracking campaigns in Matomo.</p>";s:9:"changelog";s:1896:"<ul>
<li>5.0.2 (Oct 09th 2023) Archiving: Ensure parameter is provided in correct type</li>
<li>5.0.1 (Aug 09th 2023) Compatability with Matomo 5</li>
<li>5.0.0-b1 (May 05th 2023) Compatability with Matomo 5</li>
<li>4.1.3 (Aug 01st 2022) Translation changes</li>
<li>4.1.2 (Dec 20th 2021) Allowed creating new visit when campaign changes to be different per site if necessary</li>
<li>4.1.1 (Nov 15th 2021) Fixed deprecation warnings for PHP 8.1</li>
<li>4.1.0 (Nov 10th 2020) Additional dimensions for campaign group and placement</li>
<li>4.0.0 (July 29th 2020) Compatibility with Matomo 4 and translation updates</li>
<li>3.1.1 (June 18th 2018) Rebrand and translation updates</li>
<li>3.1.0 (Sept 5th 2017) Show campaign information in visitor log and profile</li>
<li>3.0.1 (Mar 16th 2017) Enables segmented visitorlog for campaign reports</li>
<li>3.0.0 (March 2017) Plugin forked by Piwik team + Renamed + Compatibility with Piwik 3</li>
<li>1.4.0 Added possibility to configure custom campaign parameters names</li>
<li>1.3.1 Better support for campaign parameters behind hash tag (#)</li>
<li>1.3.0 Compatibility with Piwik 2.16.0</li>
<li>1.2.0 (Nov 10th 2015) - Plugin comaptibility with Piwik 2.15.0</li>
<li>1.1.1 (Sept 3rd 2015) - Campaign reports now display your campaign report data even for campaign data before you activated AdvancedCampaignReporting</li>
<li>1.1.0 (July 28th 2015)</li>
<li>1.0.8 (Apr 1st 2015) - Exclude Google Analytics campaign parameters from the Page URLs</li>
<li>1.0.6 (Nov 17th 2014) - Documentation</li>
<li>1.0.5 (Nov 14th 2014) - Detect new URL parameters: piwik_campaign, pk_cpn and for Keywords: pk_kwd, piwik_keyword</li>
<li>1.0.4 (Nov 4th 2014) - View Goals by Campaign Dimension in the Goals &amp; Ecommerce reports</li>
<li>1.0.3 (Oct 1st 2014) - Released for free on the <a href="http://plugins.piwik.org/">Piwik Marketplace</a></li>
</ul>";}s:8:"download";s:59:"/api/2.0/plugins/MarketingCampaignsReporting/download/5.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:80:"https://plugins.matomo.org/MarketingCampaignsReporting/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:45;a:31:{s:4:"name";s:15:"CustomVariables";s:11:"displayName";s:16:"Custom Variables";s:5:"owner";s:10:"matomo-org";s:11:"description";s:143:"Categorise your visitors and actions with custom name-value pairs. Segment by these values and get more insights to draw the right conclusions.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2020-08-24 02:16:02";s:6:"donate";a:0:{}s:7:"support";a:5:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:57:"https://github.com/matomo-org/plugin-CustomVariables/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"hello@matomo.org";s:4:"type";s:5:"email";}i:3;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:59:"https://github.com/matomo-org/plugin-CustomVariables/issues";s:4:"type";s:3:"url";}i:4;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:52:"https://github.com/matomo-org/plugin-CustomVariables";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:16:"custom variables";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:52:"https://github.com/matomo-org/plugin-CustomVariables";s:11:"lastUpdated";s:19:"2023-10-09 08:20:03";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";i:134819;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"499";s:15:"numContributors";s:2:"34";s:14:"lastCommitDate";s:19:"2023-12-23 13:10:27";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:3:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-05 00:04:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:183;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:69:"https://github.com/matomo-org/plugin-CustomVariables/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:47:"/api/2.0/plugins/CustomVariables/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-08-10 21:42:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:109;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:69:"https://github.com/matomo-org/plugin-CustomVariables/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:47:"/api/2.0/plugins/CustomVariables/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-10-09 08:20:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:8564;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/matomo-org/plugin-CustomVariables/commits/5.0.2";s:10:"readmeHtml";a:4:{s:11:"description";s:16274:"

<p>This plugins allows you to configure and track <a href="https://matomo.org/docs/custom-variables/">Custom Variables</a> in your Matomo Analytics.</p>

<p>This feature used to be part of Matomo. However, we no longer plan to further develop custom variables and only fix important bugs or security issues and we might stop supporting Custom Variables in the future.</p>

<p>We therefore highly recommend using <a href="https://matomo.org/docs/custom-dimensions/">Custom Dimensions</a> instead which is directly available within your Matomo. Learn more about the <a href="https://matomo.org/faq/general/faq_21117/">advantages of Custom Dimensions</a>.</p>

<p><strong>Warning</strong>: Depending on the database size of your Matomo this plugin may take a long time to install.</p>

<h1>Custom Variables User Guide</h1>

<h3>What is the value of Custom Variables?</h3>

<p>Matomo offers a Custom Variables feature for collecting custom metrics related to your page views and visits. For example, if you want to track things such as the Tags associated with a certain page that is viewed or the user role of somebody navigating through your website. This kind of data is typically managed through your CMS (Content Management System) and is likely to be different for each site so it needs a little configuration to get started.</p>

<h3>Custom Variables vs Custom Dimensions</h3>

<p><strong>Custom Variables serve a similar purpose to Custom Dimensions, however, <a href="https://matomo.org/docs/custom-dimensions/">Custom Dimensions</a> have many <a href="https://matomo.org/faq/general/faq_21117/">advantages over Custom Variables</a> so in most cases you should use Custom Dimensions.</strong></p>

<p>In fact, we generally recommend that the only time that you should use Custom Variables is when you need to store more than one value for the same dimension. For example in blogging and social media systems it is common to associate multiple tags with a post. In this case you could collect all of the tags within your analytics for analysis which wouldn’t be possible with Custom Dimensions.</p>

<h3>The Anatomy of a Custom Variable</h3>

<p>Custom Variables consist of four different elements, all of which are required.</p>

<ul>
<li><strong>Index</strong> - This is a unique numeric ID which is typically between 1-5 that references the data. You can hold up to 5 custom variables for each scope by default, however if you are using Matomo On-Premise, it is possible to configure it to <a href="https://matomo.org/faq/how-to/faq_17931/">add more than 5 custom variables</a> for each scope.</li>
<li><strong>Name</strong> - This is a user-friendly label to identify the variable. For example, <strong>Tag</strong>.</li>
<li><strong>Value</strong> - This is the actual value of the variable. For example, if the variable is tracking tags an article about Matomo could be filed as “Marketing”, “Analytics” or both.</li>
<li><strong>Scope</strong> - This defines whether the variable is page scoped i.e. attached to the page it is loaded on or visit scoped and connected with the visitor that is on the page.</li>
</ul>

<p>All of the fields are limited to a total of 200 characters.</p>

<h3>Example Custom Variables</h3>

<p>To help you understand the different elements we have provided an example Variable for each of the potential scopes below.</p>

<h4>Visit Scope Dimensions: User Role</h4>

<p>This is useful because in many cases users can have multiple roles on a website. For example somebody who is both Staff and a Moderator.</p>

<p><strong>Sample Values:</strong></p>

<ul>
<li>Index: <strong><i>1</i></strong></li>
<li>Name: <strong><i>User Role</i></strong></li>
<li>Value: <strong><i>Staff</i></strong></li>
<li>Scope: <strong><i>visit</i></strong></li>
</ul>

<h4>Action Scope Dimension: Tags</h4>

<p>A common design pattern for websites on platforms like WordPress is filing content under a single “Category” while adding several “Tags” to add more specific definitions to the content. For example an article might be found in the “Marketing” category while also holding tags for “Analytics” “Matomo” and “Plugins”.</p>

<p><strong>Sample Values:</strong></p>

<ul>
<li>Index: <strong><i>1</i></strong></li>
<li>Name: <strong><i>Tags</i></strong></li>
<li>Value: <strong><i>Marketing</i></strong></li>
<li>Scope: <strong><i>action</i></strong></li>
</ul>

<h3>How to Get Started with Custom Variables</h3>

<p>While Custom Variables are available by default in <a href="https://matomo.org/matomo-cloud/">Matomo Cloud</a>, they are no longer installed by default in <a href="https://matomo.org/matomo-on-premise/">Matomo On-Premise</a>. Therefore if you do want to use them, the first thing that you need to do is install the <a href="https://plugins.matomo.org/CustomVariables">Custom Variables plugin</a>. You can find instructions on how to do that below.</p>

<h4>How to install the Custom Variables Plugin</h4>

<h5>How to install the Custom Variables Plugin for Matomo On-Premise</h5>

<ol>
<li>Log in to your Matomo Dashboard with a <strong>Super User</strong> account.</li>
<li>Click the <strong>Cog Icon</strong> in the Top Menu to visit your Matomo settings.</li>
<li>Go to the <strong>Marketplace</strong> page within the <strong>Platform</strong> settings.</li>
<li>Find the <strong>Custom Variables</strong> plugin and click the big green <strong>Install</strong> button. (You may need to confirm your password at this stage.)</li>
<li>The plugin will be downloaded to your Matomo instance and you can click the big green <strong>Activate Plugin</strong> button to start using it. Note: It is also possible to activate it via the command line by using the following command: ./console plugin:activate CustomVariables</li>
</ol>

<h5>How to install the Custom Variables Plugin for WordPress</h5>

<ol>
<li>Log in to your WordPress dashboard.</li>
<li>Go to the <strong>Marketplace</strong> section of the <strong>Matomo Analytics</strong> menu.</li>
<li>Download the Custom Variables Plugin.</li>
<li>Tap on <strong>Add New</strong> within the WordPress <strong>Plugins</strong> menu.</li>
<li>Click <strong>Upload Plugin</strong> and follow the prompts to upload the Custom Variables plugin zip that you just downloaded.</li>
<li>Click <strong>Activate</strong> to enable the plugin with Matomo.</li>
</ol>

<h4>How to add Custom Variables to your Web pages</h4>

<p>Setting up Custom Variables will generally require that you are comfortable editing code or have access to a developer who can configure them for you. If you are already creating custom code to pull data from a content management system then it likely makes sense to set up your tracking within that custom code at the same time. However, in some cases it is possible to extract data using Matomo Tag Manager and there are details on that process below.</p>

<h5>How to set up the HTTP Tracking API with Tag Manager</h5>

<p>The actual code for setting Custom Variables is fairly simple. It starts by wrapping the function with a <code>_paq.push([   ]);</code> which sends it to Matomo. Next, the <code>setCustomVariable()</code> is set and within that are the four elements: index, name, value and scope.</p>

<pre>
_paq.push([setCustomVariable(index, name, value, scope = "visit"]);
</pre>

<p>It is important that you use a unique index for each value as the index will only ever store the most recent value. However, you can use the same name against multiple indexes so that you can store multiple values for a metric. You can find examples of this for both scopes formatted for the <a href="https://developer.matomo.org/api-reference/tracking-api">HTTP tracking API</a> below.</p>

<p><strong>Visit Scoped Custom Variable Examples</strong></p>

<p>In this example we are tracking a Role variable where website users can hold multiple roles at the same time. In this case it is associating both a “Staff” and “Moderator” role with the visitor that will persist for all actions within their entire visit.</p>

<pre>
_paq.push([setCustomVariable(1, "Role", "Staff", scope = "visit"]);
_paq.push([setCustomVariable(2, "Role", "Moderator", scope = "visit"]);
</pre>

<p><strong>Page Scoped Custom Variable Examples</strong></p>

<p>In this example of a Page scoped custom variable multiple tags are associated with a specific page view. In this case both the “Guide” and “Videos” tag will be associated with the pageview, however this won’t be associated with other page views unless the same code is also present on those pages.</p>

<pre>
_paq.push([setCustomVariable, 1, "Tag", "Guides", scope = "page"]);
_paq.push([setCustomVariable, 2, "Tag", "Videos", scope = "page"]);
</pre>

<p>When using the <a href="https://developer.matomo.org/api-reference/tracking-api">HTTP tracking API</a> you must make sure that you set your custom variables before <code>trackPageview</code> is called. You can find more information on doing this via Matomo Tag Manager further down the page.</p>

<h5>Tracking/Capturing Custom Variables via Matomo Tag Manager</h5>

<p>While it may not always be the easiest way to pull data from your existing content management system, it is also possible to set up Custom Variables with <a href="https://matomo.org/docs/tag-manager/">Matomo Tag Manager</a>. The specific method for collecting data will vary depending on what you would like to collect but the general configuration is detailed below.</p>

<ol>
<li>You will need to start out by installing and <a href="https://matomo.org/docs/tag-manager/#how-can-i-set-up-matomo-tag-manager-on-my-website">configuring Matomo Tag Manager</a> if you haven’t already.</li>
<li>Next, Set up a Matomo Analytics Tag with the <strong>Tracking Type</strong> set to <strong><i>Initialise tracker only. Don’t track anything</i></strong>. This is because we will be creating separate tags to ensure that tracking works correctly. You will also need to click to <strong>Show advanced settings</strong> and look for the <strong>Priority</strong> text field. By default, this is set to <strong>999</strong>, however you should change this to <strong>1</strong> so it becomes one of the first tags to fire when a page is loaded.</li>
<li>Next, you need to set up the tag that will actually track your pageviews. This can be done using a <strong>Custom HTML</strong> tag and should contain the following code:
<pre>
&lt;script&gt;
  var _paq = window._paq = window._paq || [];
  _paq.push([\'trackPageView\']);
&lt;/script&gt;
</pre>
You will also want to ensure that this tag fires after your existing Priority for this tag so make sure you click <strong>Show advanced settings</strong> and update the Priority text field to <strong>999</strong> so that it always fires after the initial tag.</li>
<li>And finally you need to set up a <strong>Custom HTML</strong> tag for any Custom Variables that you would like to set.
<pre>
&lt;script&gt;
  var _paq = window._paq = window._paq || [];
_paq.push([\'setCustomVariable\', 1, \'User Role\', \'Guest\', scope = \'visit\']);
_paq.push([\'setCustomVariable\', 1, \'Tag\', \'Marketing\', scope = \'page\']);
_paq.push([\'setCustomVariable\', 2, \'Tag\', {&#8291;{dataLayer - Tags}}, scope = \'page\']);
&lt;/script&gt;
</pre>
You can combine several variables in a single tag if it makes sense, but you will need to ensure that the tag only fires when relevant. For example, if you create a <strong>Tags</strong> variable for tracking tags associated with pageviews, then you will need to create a Trigger that only fires when a page is loaded with the relevant tags. You can <a href="https://matomo.org/docs/tag-manager/#triggers">learn more about triggers here</a>. Any tags that you create containing variables will need to be set to a <strong>Priority</strong> number somewhere between your first tag <strong>1</strong> and your pageview tag <strong>999</strong>. This is so the tags all load in the correct sequence. For example:

<ul>
<li><strong>Matomo Analytics Init Tag</strong> - Priority 1</li>
<li><strong>Custom Variables Tag</strong> - Priority 99</li>
<li><strong>Pageview Tag</strong> - Priority 999</li>
</ul>
</li>
</ol>

<h5>Advanced: Output custom variables in your CMS dynamic code with the PHP API</h5>

<p>If you are a developer then you may also want to look at our case study where we show how one website integrated dynamic custom Variables with WordPress CMS using the <a href="https://developer.matomo.org/api-reference/PHP-Matomo-Tracker">PHP Tracking API</a>. You can also find full documentation on how to set custom variables this way in the <a href="https://developer.matomo.org/api-reference/PHP-Matomo-Tracker#setcustomvariable">official PHP tracking development documentation</a> here.</p>

<h3>How to Analyse Custom Variables</h3>

<p>You can find the <strong>Custom Variables</strong> report within the <strong>Visitors</strong> section of main navigation down the left hand side of the page. Custom Variable reports are shown in <a href="https://matomo.org/docs/matomo-tour/#tables-5">Table format</a> by default, however, like most tables in Matomo there are <a href="https://matomo.org/docs/matomo-tour/#alternative-visualisations-of-table-data">alternative visualisations available</a>.</p>

<p>The specific metrics available vary depending on the scope of the custom variable. The number of <strong>Actions</strong> will be shown for both <strong>Page</strong> and <strong>Visit</strong> scoped variables, but <strong>Visit</strong> scoped variables also offer the following additional metrics:</p>

<ul>
<li>Visits</li>
<li>Unique Visitors</li>
<li>Users</li>
</ul>

<p>When reviewing Action scoped results, these values are simply blank and replaced with a hyphen as no relevant data is stored.</p>

<p><img src="https://matomo.org/wp-content/uploads/2023/03/Custom_Variable_Actions.png" alt="" width="933" height="598" class="alignnone size-full wp-image-62440" /></p>

<h4>Hierarchical vs Flat Analysis</h4>

<p>By default variable data is displayed in hierarchical format. This means you can click on the plus icon for any of the top level names to reveal the values stored against that specific Name for easy comparison. Below is an example comparing different page type on a dive review website:</p>

<p><img src="https://matomo.org/wp-content/uploads/2023/03/Custom_Variables_By_Type.png" alt="" width="933" height="659" class="alignnone size-full wp-image-62442" /></p>

<p>Alternatively you can flatten the table to compare disparate metrics against each other. For example comparing the success of certain page types against content from certain authors. Not all comparisons will make sense so it is up to you to consider whether this view is relevant for the custom variables tracked on your site.</p>

<p><img src="https://matomo.org/wp-content/uploads/2023/03/Custom_Variables_Flattened.png" alt="" width="933" height="529" class="alignnone size-full wp-image-62444" /></p>

<p>You can switch between these modes by hovering your mouse over the table to reveal a green icon menu in the bottom left of the screen. You can then click on the cog icon which provides several options including switching between hierarchical and flat data views, exclude rows with low data or <a href="https://matomo.org/faq/custom-reports/faq_25253/">pivot your data</a>.</p>

<p><img src="https://matomo.org/wp-content/uploads/2023/03/Custom_Variables_Flat_Actions.png" alt="" width="933" height="529" class="alignnone size-full wp-image-62470" /></p>

<h3>Resources</h3>

<ul>
<li><a href="https://developer.matomo.org/guides/tracking-javascript-guide#custom-variables">Developer JavaScript Tracking Guide for Custom Variables</a></li>
<li><a href="https://developer.matomo.org/api-reference/reporting-api#CustomVariables">Developer Hooks for Custom Variables in the Reporting API</a></li>
<li><a href="https://matomo.org/faq/how-to/faq_17931/">How to Extend Custom Variable Limits for Matomo On-Premise</a></li>
<li><a href="https://matomo.org/faq/general/faq_21117/">Advantages of Custom Dimensions over Custom Variables</a></li>
<li><a href="http://developer.matomo.org/api-reference/reporting-api#CustomVariables">Developer Documentation of REST API for Custom Variables</a></li>
</ul>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:590:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>5.0.2
- Archiving: Ensure parameter is provided in correct type</p>

<p>5.0.1
- Compatibility with Matomo 5.0.0-b4</p>

<p>5.0.0
- Compatibility with Matomo 5</p>

<p>4.1.3
- Update documentation</p>

<p>4.1.2
- Update documentation
- Translation updates</p>

<p>4.1.1
- Translation updates</p>

<p>4.1.0 
- migrate from AngularJS to Vue.
- Replaced substr() with mb_substr() to correctly cut utf8 values.
- Fixed warnings and depreciation for PHP8.1</p>";}s:8:"download";s:47:"/api/2.0/plugins/CustomVariables/download/5.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:68:"https://plugins.matomo.org/CustomVariables/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:46;a:31:{s:4:"name";s:27:"TwitterFeedWidgetByAmperage";s:11:"displayName";s:31:"Twitter Feed Widget By Amperage";s:5:"owner";s:18:"AMPERAGE-Marketing";s:11:"description";s:56:"Show X (formerly Twitter) Feed as a configurable widget.";s:8:"homepage";s:33:"https://www.amperagemarketing.com";s:15:"createdDateTime";s:19:"2019-08-27 21:50:04";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:69:"https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"kzeni1@gmail.com";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:71:"https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:64:"https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:8:{i:0;s:6:"widget";i:1;s:6:"social";i:2;s:9:"dashboard";i:3;s:8:"amperage";i:4;s:7:"twitter";i:5;s:12:"twitter feed";i:6;s:1:"x";i:7;s:6:"x feed";}s:9:"basePrice";i:0;s:7:"authors";a:2:{i:0;a:3:{s:4:"name";s:32:"Amperage Marketing & Fundraising";s:5:"email";s:29:"digital@amperagemarketing.com";s:8:"homepage";s:32:"http://www.amperagemarketing.com";}i:1;a:3:{s:4:"name";s:12:"Kurt Zenisek";s:5:"email";s:16:"kzeni1@gmail.com";s:8:"homepage";s:16:"http://kzeni.com";}}s:13:"repositoryUrl";s:64:"https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget";s:11:"lastUpdated";s:19:"2023-10-02 22:16:14";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:6145;s:11:"screenshots";a:2:{i:0;s:79:"https://plugins.matomo.org/TwitterFeedWidgetByAmperage/images/5.0.1/setting.png";i:1;s:91:"https://plugins.matomo.org/TwitterFeedWidgetByAmperage/images/5.0.1/twitter-feed-widget.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"12";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-10-02 22:14:38";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-10-02 22:04:17";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:0;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:68:"https://plugins.matomo.org/TwitterFeedWidgetByAmperage/5.0.0/license";}s:22:"repositoryChangelogUrl";s:78:"https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:59:"/api/2.0/plugins/TwitterFeedWidgetByAmperage/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-10-02 22:16:14";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:87;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:68:"https://plugins.matomo.org/TwitterFeedWidgetByAmperage/5.0.1/license";}s:22:"repositoryChangelogUrl";s:78:"https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:154:"

<p>A widget for Matomo (formerly Piwik) that allows you to specify your Twitter Username and it then displays your Twitter Feed on your dashboard.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:907:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>5.0.1</h2>

<ul>
<li>Updated changelog &amp; other metadata for 5.x releases.</li>
</ul>

<h2>5.0.0</h2>

<ul>
<li>Prepped release for Matomo 5.x while also version-bumping the plugin to 5.0.0 as a base value per Matomo\'s recommendation/convention for Matomo 5.x plugins.</li>
</ul>

<h2>1.0.6</h2>

<ul>
<li>Version bump Matomo 4 plugin as that is technically newer.</li>
</ul>

<h2>1.0.5</h2>

<ul>
<li>Split Matomo 3 and Matomo 4 versions.</li>
</ul>

<h2>1.0.4</h2>

<ul>
<li>Confirmed Matomo 4 compliance.</li>
</ul>

<h2>1.0.3</h2>

<ul>
<li>Better scoped the widget styles.</li>
</ul>

<h2>1.0.2</h2>

<ul>
<li>Matomo plugin marketplace update.</li>
</ul>

<h2>1.0.1</h2>

<ul>
<li>Minor maintenance.</li>
</ul>

<h2>1.0</h2>

<ul>
<li>Initial Release.</li>
</ul>";}s:8:"download";s:59:"/api/2.0/plugins/TwitterFeedWidgetByAmperage/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:80:"https://plugins.matomo.org/TwitterFeedWidgetByAmperage/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:47;a:31:{s:4:"name";s:27:"SharpSpringWidgetByAmperage";s:11:"displayName";s:19:"Sharp Spring Widget";s:5:"owner";s:18:"AMPERAGE-Marketing";s:11:"description";s:34:"Show SharpSpring info as a widget.";s:8:"homepage";s:32:"http://www.amperagemarketing.com";s:15:"createdDateTime";s:19:"2018-01-16 00:36:04";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:68:"https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"kzeni1@gmail.com";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:70:"https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:63:"https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:6:{i:0;s:6:"widget";i:1;s:8:"amperage";i:2;s:11:"sharpspring";i:3;s:12:"Sharp Spring";i:4;s:3:"CRM";i:5;s:5:"leads";}s:9:"basePrice";i:0;s:7:"authors";a:2:{i:0;a:3:{s:4:"name";s:32:"Amperage Marketing & Fundraising";s:5:"email";s:29:"digital@amperagemarketing.com";s:8:"homepage";s:32:"http://www.amperagemarketing.com";}i:1;a:3:{s:4:"name";s:12:"Kurt Zenisek";s:5:"email";s:16:"kzeni1@gmail.com";s:8:"homepage";s:16:"http://kzeni.com";}}s:13:"repositoryUrl";s:63:"https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget";s:11:"lastUpdated";s:19:"2023-10-02 22:16:10";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:13205;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"17";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-10-02 22:14:34";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-10-02 22:04:14";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:0;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:68:"https://plugins.matomo.org/SharpSpringWidgetByAmperage/5.0.0/license";}s:22:"repositoryChangelogUrl";s:77:"https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:59:"/api/2.0/plugins/SharpSpringWidgetByAmperage/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-10-02 22:16:10";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:70;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:68:"https://plugins.matomo.org/SharpSpringWidgetByAmperage/5.0.1/license";}s:22:"repositoryChangelogUrl";s:77:"https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:45:"

<p>Show SharpSpring info as a widget.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:1078:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>5.0.1</h2>

<ul>
<li>Updated changelog &amp; other metadata for 5.x releases.</li>
</ul>

<h2>5.0.0</h2>

<ul>
<li>Prepped release for Matomo 5.x while also version-bumping the plugin to 5.0.0 as a base value per Matomo\'s recommendation/convention for Matomo 5.x plugins.</li>
</ul>

<h2>0.2.4</h2>

<ul>
<li>Version bump Matomo 4 plugin as that is technically newer.</li>
</ul>

<h2>0.2.3</h2>

<ul>
<li>Split Matomo 3 and Matomo 4 versions.</li>
</ul>

<h2>0.2.2</h2>

<ul>
<li>Confirmed Matomo 4 compliance.</li>
</ul>

<h2>0.2.1</h2>

<ul>
<li>Better scoped the widget styles.</li>
<li>Made more use of existing CSS within Matomo instead of using custom styles.</li>
</ul>

<h2>0.2.0</h2>

<ul>
<li>Formatted the lead output.</li>
</ul>

<h2>0.1.1</h2>

<ul>
<li>Updated some plugin metadata.</li>
</ul>

<h2>0.1.0</h2>

<ul>
<li>Added API keys as a user-specific setting.</li>
</ul>

<h2>0.0.1</h2>

<ul>
<li>Initial Release.</li>
</ul>";}s:8:"download";s:59:"/api/2.0/plugins/SharpSpringWidgetByAmperage/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:80:"https://plugins.matomo.org/SharpSpringWidgetByAmperage/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:48;a:31:{s:4:"name";s:28:"FacebookPageWidgetByAmperage";s:11:"displayName";s:20:"Facebook Page Widget";s:5:"owner";s:18:"AMPERAGE-Marketing";s:11:"description";s:51:"Show Facebook Page plugin as a configurable widget.";s:8:"homepage";s:33:"https://www.amperagemarketing.com";s:15:"createdDateTime";s:19:"2018-02-01 03:00:05";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:70:"https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"kzeni1@gmail.com";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:72:"https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:65:"https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:6:{i:0;s:6:"widget";i:1;s:6:"social";i:2;s:9:"dashboard";i:3;s:8:"Facebook";i:4;s:8:"amperage";i:5;s:13:"facebook page";}s:9:"basePrice";i:0;s:7:"authors";a:2:{i:0;a:3:{s:4:"name";s:32:"Amperage Marketing & Fundraising";s:5:"email";s:29:"digital@amperagemarketing.com";s:8:"homepage";s:32:"http://www.amperagemarketing.com";}i:1;a:3:{s:4:"name";s:12:"Kurt Zenisek";s:5:"email";s:16:"kzeni1@gmail.com";s:8:"homepage";s:16:"http://kzeni.com";}}s:13:"repositoryUrl";s:65:"https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget";s:11:"lastUpdated";s:19:"2023-10-02 22:16:06";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:17309;s:11:"screenshots";a:2:{i:0;s:93:"https://plugins.matomo.org/FacebookPageWidgetByAmperage/images/5.0.1/facebook-page-widget.png";i:1;s:80:"https://plugins.matomo.org/FacebookPageWidgetByAmperage/images/5.0.1/setting.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"16";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-10-02 22:14:31";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-10-02 22:04:10";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:0;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:69:"https://plugins.matomo.org/FacebookPageWidgetByAmperage/5.0.0/license";}s:22:"repositoryChangelogUrl";s:79:"https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:60:"/api/2.0/plugins/FacebookPageWidgetByAmperage/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-10-02 22:16:06";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:160;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:69:"https://plugins.matomo.org/FacebookPageWidgetByAmperage/5.0.1/license";}s:22:"repositoryChangelogUrl";s:79:"https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:158:"

<p>A widget for Matomo (formerly Piwik) that allows you to specify your Facebook Page and it then displays your Facebook Page stats on your dashboard.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:999:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>5.0.1</h2>

<ul>
<li>Updated changelog &amp; other metadata for 5.x releases.</li>
</ul>

<h2>5.0.0</h2>

<ul>
<li>Prepped release for Matomo 5.x while also version-bumping the plugin to 5.0.0 as a base value per Matomo\'s recommendation/convention for Matomo 5.x plugins.</li>
</ul>

<h2>1.0.7</h2>

<ul>
<li>Version bump Matomo 4 plugin as that is technically newer.</li>
</ul>

<h2>1.0.6</h2>

<ul>
<li>Split Matomo 3 and Matomo 4 versions.</li>
</ul>

<h2>1.0.5</h2>

<ul>
<li>Confirmed Matomo 4 compliance.</li>
</ul>

<h2>1.0.4</h2>

<ul>
<li>Better scoped the widget styles.</li>
</ul>

<h2>1.0.3</h2>

<ul>
<li>Matomo plugin marketplace update.</li>
</ul>

<h2>1.0.2</h2>

<ul>
<li>Typo correction.</li>
</ul>

<h2>1.0.1</h2>

<ul>
<li>Updated text that’s shown when the widget’s loading.</li>
</ul>

<h2>1.0</h2>

<ul>
<li>Initial Release.</li>
</ul>";}s:8:"download";s:60:"/api/2.0/plugins/FacebookPageWidgetByAmperage/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:81:"https://plugins.matomo.org/FacebookPageWidgetByAmperage/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:49;a:31:{s:4:"name";s:24:"CrazyEggWidgetByAmperage";s:11:"displayName";s:16:"Crazy Egg Widget";s:5:"owner";s:18:"AMPERAGE-Marketing";s:11:"description";s:68:"Show Crazy Egg snapshots for the current site as a dashboard widget.";s:8:"homepage";s:33:"https://www.amperagemarketing.com";s:15:"createdDateTime";s:19:"2018-01-16 00:04:03";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:66:"https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"kzeni1@gmail.com";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:68:"https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:61:"https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:6:"widget";i:1;s:9:"dashboard";i:2;s:7:"heatmap";i:3;s:8:"amperage";i:4;s:9:"crazy egg";i:5;s:8:"crazyegg";i:6;s:8:"heat map";}s:9:"basePrice";i:0;s:7:"authors";a:2:{i:0;a:3:{s:4:"name";s:32:"Amperage Marketing & Fundraising";s:5:"email";s:29:"digital@amperagemarketing.com";s:8:"homepage";s:32:"http://www.amperagemarketing.com";}i:1;a:3:{s:4:"name";s:12:"Kurt Zenisek";s:5:"email";s:16:"kzeni1@gmail.com";s:8:"homepage";s:16:"http://kzeni.com";}}s:13:"repositoryUrl";s:61:"https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget";s:11:"lastUpdated";s:19:"2023-10-02 22:16:02";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:10895;s:11:"screenshots";a:3:{i:0;s:91:"https://plugins.matomo.org/CrazyEggWidgetByAmperage/images/5.0.1/crazy-egg-widget-hover.png";i:1;s:85:"https://plugins.matomo.org/CrazyEggWidgetByAmperage/images/5.0.1/crazy-egg-widget.png";i:2;s:77:"https://plugins.matomo.org/CrazyEggWidgetByAmperage/images/5.0.1/settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"11";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-10-02 22:14:26";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-10-02 22:04:06";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:0;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:65:"https://plugins.matomo.org/CrazyEggWidgetByAmperage/5.0.0/license";}s:22:"repositoryChangelogUrl";s:75:"https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:56:"/api/2.0/plugins/CrazyEggWidgetByAmperage/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-10-02 22:16:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:169;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:65:"https://plugins.matomo.org/CrazyEggWidgetByAmperage/5.0.1/license";}s:22:"repositoryChangelogUrl";s:75:"https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:280:"

<p>Show Crazy Egg snapshots for the current site as a dashboard widget. First, you specify your CrazyEgg.com API keys in your user settings, and then your dashboard widget will check which site\'s being viewed and display any/all snapshots under that account for that site.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:1032:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>5.0.1</h2>

<ul>
<li>Updated changelog &amp; other metadata for 5.x releases.</li>
</ul>

<h2>5.0.0</h2>

<ul>
<li>Prepped release for Matomo 5.x while also version-bumping the plugin to 5.0.0 as a base value per Matomo\'s recommendation/convention for Matomo 5.x plugins.</li>
</ul>

<h2>1.0.6</h2>

<ul>
<li>Version bump Matomo 4 plugin as that is technically newer.</li>
</ul>

<h2>1.0.5</h2>

<ul>
<li>Split Matomo 3 and Matomo 4 versions.</li>
</ul>

<h2>1.0.4</h2>

<ul>
<li>Confirmed Matomo 4 compliance.</li>
</ul>

<h2>1.0.3</h2>

<ul>
<li>Better scoped the widget styles.</li>
<li>Made more use of existing CSS within Matomo instead of using custom styles.</li>
</ul>

<h2>1.0.2</h2>

<ul>
<li>Added API keys as a user-specific setting.</li>
</ul>

<h2>1.0.1</h2>

<ul>
<li>Added snapshot screenshots &amp; heatmap overlay.</li>
</ul>

<h2>1.0</h2>

<ul>
<li>Initial Release.</li>
</ul>";}s:8:"download";s:56:"/api/2.0/plugins/CrazyEggWidgetByAmperage/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:77:"https://plugins.matomo.org/CrazyEggWidgetByAmperage/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:50;a:31:{s:4:"name";s:19:"MozWidgetByAmperage";s:11:"displayName";s:10:"Moz Widget";s:5:"owner";s:18:"AMPERAGE-Marketing";s:11:"description";s:132:"Show Moz.com info for the current site as a dashboard widget. Also links to the latest Moz Pro Campaign Custom Report, if available.";s:8:"homepage";s:33:"https://www.amperagemarketing.com";s:15:"createdDateTime";s:19:"2019-01-24 03:14:05";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:60:"https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"kzeni1@gmail.com";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:62:"https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:55:"https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:6:"widget";i:1;s:6:"search";i:2;s:9:"dashboard";i:3;s:3:"SEO";i:4;s:8:"amperage";i:5;s:3:"moz";i:6;s:6:"seomoz";}s:9:"basePrice";i:0;s:7:"authors";a:2:{i:0;a:3:{s:4:"name";s:32:"Amperage Marketing & Fundraising";s:5:"email";s:29:"digital@amperagemarketing.com";s:8:"homepage";s:32:"http://www.amperagemarketing.com";}i:1;a:3:{s:4:"name";s:12:"Kurt Zenisek";s:5:"email";s:16:"kzeni1@gmail.com";s:8:"homepage";s:16:"http://kzeni.com";}}s:13:"repositoryUrl";s:55:"https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget";s:11:"lastUpdated";s:19:"2023-10-02 22:14:02";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:6839;s:11:"screenshots";a:5:{i:0;s:83:"https://plugins.matomo.org/MozWidgetByAmperage/images/5.0.1/measurable-settings.png";i:1;s:79:"https://plugins.matomo.org/MozWidgetByAmperage/images/5.0.1/moz-widget-more.png";i:2;s:74:"https://plugins.matomo.org/MozWidgetByAmperage/images/5.0.1/moz-widget.png";i:3;s:77:"https://plugins.matomo.org/MozWidgetByAmperage/images/5.0.1/user-settings.png";i:4;s:96:"https://plugins.matomo.org/MozWidgetByAmperage/images/5.0.1/view-latest-custom-report-button.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"21";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-10-02 22:13:48";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-10-02 22:04:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:0;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:60:"https://plugins.matomo.org/MozWidgetByAmperage/5.0.0/license";}s:22:"repositoryChangelogUrl";s:69:"https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:51:"/api/2.0/plugins/MozWidgetByAmperage/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-10-02 22:14:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:169;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:60:"https://plugins.matomo.org/MozWidgetByAmperage/5.0.1/license";}s:22:"repositoryChangelogUrl";s:69:"https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:404:"

<p>Show Moz.com info for the current site as a dashboard widget. First, you specify your Moz.com API keys in your user settings, and then your dashboard widget will check which site\'s being viewed and display info for that site. Additionally/alternatively, you can provide the URL to view your latest Moz Pro Campaign Custom Report, if available, to be shown in the widget for the specified site.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:1352:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>5.0.1</h2>

<ul>
<li>Updated changelog &amp; other metadata for 5.x releases.</li>
</ul>

<h2>5.0.0</h2>

<ul>
<li>Prepped release for Matomo 5.x while also version-bumping the plugin to 5.0.0 as a base value per Matomo\'s recommendation/convention for Matomo 5.x plugins.</li>
</ul>

<h2>1.1.6</h2>

<ul>
<li>Version bump Matomo 4 plugin as that is technically newer.</li>
</ul>

<h2>1.1.5</h2>

<ul>
<li>Split Matomo 3 and Matomo 4 versions.</li>
</ul>

<h2>1.1.4</h2>

<ul>
<li>Confirmed Matomo 4 compliance.</li>
</ul>

<h2>1.1.3</h2>

<ul>
<li>Better scoped the widget styles.</li>
<li>Made more use of existing CSS within Matomo instead of using custom styles.</li>
</ul>

<h2>1.1.2</h2>

<ul>
<li>Minor adjustment to plugin metadata.</li>
</ul>

<h2>1.1.1</h2>

<ul>
<li>Improved the output of the custom report link in the widget.</li>
</ul>

<h2>1.1.0</h2>

<ul>
<li>Added the ability to specify a Moz Pro Custom Report for quickly opening/viewing from the Dashboard widget (a measurable [website/app] specific setting.)</li>
</ul>

<h2>1.0.1</h2>

<ul>
<li>Added titles/tooltips describing each result.</li>
<li>Improved formatting of results.</li>
</ul>

<h2>1.0</h2>

<ul>
<li>Initial Release.</li>
</ul>";}s:8:"download";s:51:"/api/2.0/plugins/MozWidgetByAmperage/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:72:"https://plugins.matomo.org/MozWidgetByAmperage/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:51;a:31:{s:4:"name";s:23:"CustomDimensionsManager";s:11:"displayName";s:25:"Custom Dimensions Manager";s:5:"owner";s:8:"NatLibFi";s:11:"description";s:63:"Manage custom dimensions configuration. Console interface only.";s:8:"homepage";s:51:"https://github.com/NatLibFi/CustomDimensionsManager";s:15:"createdDateTime";s:19:"2023-04-24 08:04:06";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:58:"https://github.com/NatLibFi/CustomDimensionsManager/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:51:"https://github.com/NatLibFi/CustomDimensionsManager";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:17:"custom dimensions";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:11:"Ere Maijala";s:5:"email";s:23:"ere.maijala@helsinki.fi";s:8:"homepage";s:51:"https://github.com/NatLibFi/CustomDimensionsManager";}}s:13:"repositoryUrl";s:51:"https://github.com/NatLibFi/CustomDimensionsManager";s:11:"lastUpdated";s:19:"2023-10-02 09:36:03";s:13:"latestVersion";s:5:"0.1.2";s:12:"numDownloads";i:2112;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"2";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-10-02 09:35:06";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.1.2";s:7:"release";s:19:"2023-10-02 09:36:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:170;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:64:"https://plugins.matomo.org/CustomDimensionsManager/0.1.2/license";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/NatLibFi/CustomDimensionsManager/commits/v0.1.2";s:10:"readmeHtml";a:4:{s:11:"description";s:432:"

<p>This plugin allows management of custom dimensions configuration using Matomo\'s <a href="https://matomo.org/faq/general/faq_21827/">console</a>. No web interface is provided.</p>

<h3>Available Functions</h3>

<p>Currently the following functionality is provided:</p>

<ul>
<li>Synchronization of custom dimensions configuration between sites.</li>
<li>Deletion of custom dimensions configuration of a single site.</li>
</ul>

";s:3:"faq";s:0:"";s:13:"documentation";s:1265:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>CustomDimensionsManager provides some administrative commands that can be used to manage custom dimensions configuration of multiple sites. The commands are executed using Matomo\'s <a href="https://matomo.org/faq/general/faq_21827/">console</a>.</p>

<h3>The \'synchronize\' Command</h3>

<p>This is the main function with the purpose of synchronizing custom dimensions configurations of sites.</p>

<p>The command <code>customdimensionsmanager:synchronize</code> allows you to copy configuration of custom dimensions from a specific site to another in a Matomo installation. The source site could be considered a template for other sites.</p>

<p>You can also use <code>*</code> as the target site to copy configuration of the source site to all other sites. This makes it possible to e.g. run the process regularly as a cron task.</p>

<p>The <code>--dry-run</code> option can be used to test what the command would do without actually making any changes.</p>

<h3>The \'delete\' Command</h3>

<p>The command <code>customdimensionsmanager:delete</code> allows you to delete all custom dimensions configuration of a single site.</p>";s:9:"changelog";s:418:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>v0.1.2</h3>

<ul>
<li>Added support for Matomo 5.x.</li>
</ul>

<h3>v0.1.1</h3>

<ul>
<li>Improvements to the README file and docs.</li>
<li>Addition of LICENSE file in preparation for publishing on the Marketplace.</li>
</ul>

<h3>v0.1.0</h3>

<ul>
<li>Initial release.</li>
</ul>";}s:8:"download";s:55:"/api/2.0/plugins/CustomDimensionsManager/download/0.1.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:76:"https://plugins.matomo.org/CustomDimensionsManager/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:52;a:31:{s:4:"name";s:7:"LiveTab";s:11:"displayName";s:8:"Live Tab";s:5:"owner";s:6:"tsteur";s:11:"description";s:140:"Keep an eye on the number of live visitors in the browser tab. It displays the number of visitors in the last 30 minutes in the browser tab.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2013-09-30 01:03:12";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:52:"https://github.com/tsteur/matomo-livetab-plugin/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:54:"https://github.com/tsteur/matomo-livetab-plugin/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:47:"https://github.com/tsteur/matomo-livetab-plugin";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:4:"live";i:1;s:3:"tab";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Thomas Steur";s:5:"email";N;s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:47:"https://github.com/tsteur/matomo-livetab-plugin";s:11:"lastUpdated";s:19:"2023-10-01 20:10:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:41493;s:11:"screenshots";a:1:{i:0;s:63:"https://plugins.matomo.org/LiveTab/images/5.0.0/Browser_Tab.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"59";s:15:"numContributors";s:1:"3";s:14:"lastCommitDate";s:19:"2023-10-01 20:08:17";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-10-01 20:10:03";s:8:"requires";a:1:{s:5:"piwik";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1700;s:7:"license";a:2:{s:4:"name";s:8:"GPL-3.0+";s:3:"url";s:48:"https://plugins.matomo.org/LiveTab/5.0.0/license";}s:22:"repositoryChangelogUrl";s:61:"https://github.com/tsteur/matomo-livetab-plugin/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:609:"

<p>This is a plugin for the Open Source Web Analytics platform <a href="https://matomo.org">Matomo</a>. It allows you to keep an eye on the number of live visitors in the browser tab. It displays the number of visits, actions, unique visitors or converted goals in the last X minutes in the browser tab. The number will be updated every minute.</p>

<p>For better and faster readability the value will be shortened when greater than 1000. For instance to 3.12K or 3.43M.</p>

<p><img src="https://raw.github.com/tsteur/matomo-livetab-plugin/master/screenshots/Browser_Tab.png" alt="Browser_Tab.png" /></p>

";s:3:"faq";s:655:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Is it possible to configure the displayed metric?</strong></p>

<p>Yes, you can choose between Visits, Actions, Converted Visits and Visitors.</p>

<p><strong>Is it possible to configure the displayed metric per user?</strong></p>

<p>Yes, this is also possible. Each user can configure the plugin differently.</p>

<p><strong>Is it possible to configure the website that should be used?</strong></p>

<p>No, this is currently not possible. It will always display the metric of the current selected website.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:530:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>5.0.0</strong>
* Compatible with Matomo 5</p>

<p><strong>4.0.1</strong>
* Compatible with Piwik 4.0</p>

<p><strong>4.0.0</strong>
* Compatible with Piwik 4.0</p>

<p><strong>3.0.1</strong>
* Rename Piwik to Matomo</p>

<p><strong>3.0.0</strong>
* Compatible with Piwik 3.0</p>

<p><strong>1.0.2</strong>
* Compatible with Piwik 2.0</p>

<p><strong>1.0.0</strong>
* Initial release</p>";}s:8:"download";s:39:"/api/2.0/plugins/LiveTab/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:60:"https://plugins.matomo.org/LiveTab/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:53;a:31:{s:4:"name";s:14:"CrashAnalytics";s:11:"displayName";s:15:"Crash Analytics";s:5:"owner";s:10:"matomo-org";s:11:"description";s:144:"Detect crashes to improve the user experience, increase conversions and recover revenue. Resolve them with insights to minimise developer hours.";s:8:"homepage";s:41:"https://plugins.matomo.org/CrashAnalytics";s:15:"createdDateTime";s:19:"2023-08-30 05:06:01";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:9:{i:0;s:10:"monitoring";i:1;s:7:"monitor";i:2;s:10:"javascript";i:3;s:3:"log";i:4;s:5:"error";i:5;s:3:"php";i:6;s:5:"crash";i:7;s:9:"exception";i:8;s:2:"js";}s:9:"basePrice";i:140;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-09-20 07:36:18";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";N;s:11:"screenshots";a:8:{i:0;s:69:"https://plugins.matomo.org/CrashAnalytics/images/5.0.1/0_Overview.png";i:1;s:77:"https://plugins.matomo.org/CrashAnalytics/images/5.0.1/1_Overview_changes.png";i:2;s:70:"https://plugins.matomo.org/CrashAnalytics/images/5.0.1/2_Real_time.png";i:3;s:71:"https://plugins.matomo.org/CrashAnalytics/images/5.0.1/3_Visits_log.png";i:4;s:75:"https://plugins.matomo.org/CrashAnalytics/images/5.0.1/4_Crash_messages.png";i:5;s:73:"https://plugins.matomo.org/CrashAnalytics/images/5.0.1/5_Crash_detail.png";i:6;s:74:"https://plugins.matomo.org/CrashAnalytics/images/5.0.1/6_Row_evolution.png";i:7;s:75:"https://plugins.matomo.org/CrashAnalytics/images/5.0.1/7_Replay_session.png";}s:8:"previews";a:1:{i:0;a:3:{s:4:"type";s:4:"demo";s:8:"provider";s:4:"link";s:3:"url";s:203:"https://demo.matomo.cloud/index.php?module=CoreHome&action=index&idSite=1&period=day&date=yesterday#?idSite=1&period=day&date=yesterday&category=CrashAnalytics_Crashes&subcategory=CrashAnalytics_Overview";}}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:41:"https://plugins.matomo.org/CrashAnalytics";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"139";s:11:"prettyPrice";s:6:"139EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/CrashAnalytics?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/plugin-crashanalytics/?attribute_type=Up+to+4+users&add-to-cart=84315&variation_id=84316&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"159";s:11:"prettyPrice";s:6:"USD159";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/CrashAnalytics?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/plugin-crashanalytics/?attribute_type=Up+to+4+users&add-to-cart=84315&variation_id=84316&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"279";s:11:"prettyPrice";s:6:"279EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/CrashAnalytics?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/plugin-crashanalytics/?attribute_type=5+to+15+users&add-to-cart=84315&variation_id=84317&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:3:"319";s:11:"prettyPrice";s:6:"USD319";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/CrashAnalytics?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:142:"https://shop.matomo.org/product/plugin-crashanalytics/?attribute_type=5+to+15+users&add-to-cart=84315&variation_id=84317&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:3:"419";s:11:"prettyPrice";s:6:"419EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/CrashAnalytics?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:144:"https://shop.matomo.org/product/plugin-crashanalytics/?attribute_type=Unlimited+users&add-to-cart=84315&variation_id=84318&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:3:"489";s:11:"prettyPrice";s:6:"USD489";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:0;s:14:"prettyDiscount";s:0:"";s:12:"addToCartUrl";s:68:"https://plugins.matomo.org/CrashAnalytics?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:144:"https://shop.matomo.org/product/plugin-crashanalytics/?attribute_type=Unlimited+users&add-to-cart=84315&variation_id=84318&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:83:"https://shop.matomo.org/product/plugin-crashanalytics/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";N;s:11:"ratingCount";i:0;s:11:"reviewCount";i:0;}}s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";N;s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:55:"https://plugins.matomo.org/CrashAnalytics/5.0.1/license";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:5996:"

<p><strong>Crash Analytics</strong> by Matomo: Uncover Errors and Elevate Your Site’s Performance.</p>

<p>Broken carts, glitchy checkouts, unresponsive contact forms – they\'re not just annoyances; they\'re revenue pitfalls waiting to happen.</p>

<p>13% of all pageviews come with lurking JavaScript errors that can cripple your visitors\' experiences and jeopardise your revenue potential. Recent statistics reveal that <a href="https://www.retaildive.com/news/website-bugs-lead-to-cart-abandonment/549828/">58%</a> of visitors are inclined to abandon purchases as a result of bugs, while an astonishing <a href="https://www.retaildive.com/news/website-bugs-lead-to-cart-abandonment/549828/">75%</a> are driven to completely abandon websites due to these frustrating experiences.</p>

<p>To provide some context, consider a website that usually earns 25,000 EUR per month. If this site is encountering errors in 13% of all pageviews, it could potentially result in a monthly loss of 1,855 EUR.</p>

<p>With Crash Analytics, you can improve the user experience, boost conversion rates and grow revenue with 100% website reliability.</p>

<p>Even with the most rigorous tests, you can\'t foresee every glitch across diverse browsers, setups and scenarios. Factors like ad blockers, fluctuating internet speeds and evolving browser versions compound the complexity. This is where Crash Analytics excels.</p>

<p><strong>Crash Analytics for Matomo</strong> empowers you to preemptively detect and efficiently resolve errors that could impact your conversions and bottom line. Here\'s how:</p>

<ul>
<li><strong>Reliability Out-of-the-Box:</strong> Begin detecting crashes instantly with no configuration needed, giving you the power to resolve issues and enhance your site\'s performance right away.</li>
<li><strong>Real-Time Crash Insight:</strong> Catch errors in real-time, especially after deploying changes, so you\'re always on the pulse.</li>
<li><strong>Proactive Alert System:</strong> Stay ahead with instant alerts when an error occurs and scheduled crash reports, ensuring bugs never compromise your site\'s speed, user experience or bottom line again.</li>
<li><strong>Holistic Insights:</strong> Combine Matomo features such as segments, session recordings or visitor logs with crashes to dig deep and understand the user’s device, software and precise actions taken before encountering a bug.</li>
<li><strong>Synchronising Developers and Marketers:</strong> Bridge the gap between your technical team and marketing experts. Track emerging, disappearing and recurring errors, forward crash data to developers and prioritise fixes that matter.</li>
<li><strong>Cross-stack Proficiency:</strong> It\'s not just about JavaScript. Crash Analytics is your ally in tackling server-side crashes too – whether PHP, Android, iOS, Java or more.</li>
</ul>

<p><strong>Finally, all your website metrics in one place.</strong></p>

<p>Matomo\'s traditional and behavioural web analytics, now enhanced with Crash Analytics.</p>

<h3>Our promise</h3>

<p><a href="https://shop.matomo.org/free-trial/"><img src="https://plugins.matomo.org/img/free_trial_image.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>Crash Analytics is simple to use, since we started using it, we were able to identify and remediate issues that we either weren’t aware of or couldn’t understand before. This raised the quality and reduced the amount of lost conversions. Hand-crafted by the makers of Matomo, we are certain once you start using it, you will absolutely love it as well.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/free-trial/">free 30 day trial</a>. We will remind you about the subscription seven days before the end of the trial. There are no strings attached.</p>
</blockquote>

<p>So now that you know that you have nothing to lose, start identifying and fixing crashes on your website now and let us know how you go. We are happy to help you get started and are looking forward to hearing how it helps you.</p>

<h3>Perfectly integrated and supported</h3>

<p>We are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business.</p>

<ul>
<li>Use annotations to mark deploys.</li>
<li>Get alerted when crashes increase.</li>
<li>Set up regular automated reports via email or text message.</li>
<li>View crash information on the go via our mobile app.</li>
<li>View which actions people performed before and after a crash.</li>
<li>Slice and dice your data by using the powerful segmentation feature.</li>
<li>Struggle to reproduce an issue? Set up a session recording.</li>
</ul>

<h3>Features</h3>

<ul>
<li>Automatically tracks JavaScript errors on your website.</li>
<li>Ability to track server-side errors via one of our SDKs.</li>
<li>Various real-time reports about what crashes are happening right now.</li>
<li>View new, disappeared, and reappeared crashes.</li>
<li>Merge similar crashes into one crash.</li>
<li>View reports by evolution over time.</li>
<li>Easily find out which pages have the most crashes.</li>
<li>Break down crashes by source, first party, third party, custom category, and more</li>
<li>Merge similar crashes into one crash</li>
<li>Get relevant visitor and device information about every crash as well as stack trace, and more.</li>
<li>Not interested in certain crashes? Easily ignore crashes you don’t want to see to reduce noise</li>
<li>Merge different crashes to remove the noise in your data</li>
<li>Easily forward crash data to developers</li>
<li>Optionally possible to sample crashes, customise crashing information such as stack traces, and more.</li>
</ul>

<h3>More information</h3>

<p>To learn more about this premium feature have a look at the <a href="https://matomo.org/guide/reports/crash-analytics/">Crash Analytics User guide</a>.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:473:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The <a href="https://matomo.org/guide/reports/crash-analytics/">Crash Analytics User Guide</a> covers how to get the most out of this plugin.</p>

<p>The <a href="https://developer.matomo.org/guides/crash-analytics">Crash Analytics developer guides</a> help you set up and configure the tracking of crashes in your websites and apps.</p>";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:54;a:31:{s:4:"name";s:22:"ImportAnnotationWidget";s:11:"displayName";s:24:"Import Annotation Widget";s:5:"owner";s:12:"Chardonneaur";s:11:"description";s:78:"A simple widget to import multiple annotations at once by using the Matomo UI.";s:8:"homepage";s:55:"https://github.com/Chardonneaur/ImportAnnotationWidget/";s:15:"createdDateTime";s:19:"2023-09-14 15:00:03";s:6:"donate";a:0:{}s:7:"support";a:1:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:61:"https://github.com/Chardonneaur/ImportAnnotationWidget/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:11:"annotations";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:33:"Ronan Chardonneau and Ronan Hello";s:5:"email";N;s:8:"homepage";s:55:"https://github.com/Chardonneaur/ImportAnnotationWidget/";}}s:13:"repositoryUrl";s:54:"https://github.com/Chardonneaur/ImportAnnotationWidget";s:11:"lastUpdated";s:19:"2023-09-15 13:32:02";s:13:"latestVersion";s:5:"0.1.0";s:12:"numDownloads";i:1386;s:11:"screenshots";a:1:{i:0;s:93:"https://plugins.matomo.org/ImportAnnotationWidget/images/0.1.0/importannotationscreenshot.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"29";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-09-15 13:30:20";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.1.0";s:7:"release";s:19:"2023-09-14 15:00:03";s:8:"requires";a:1:{s:6:"matomo";s:18:">=4.15.1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:29;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:63:"https://plugins.matomo.org/ImportAnnotationWidget/0.1.0/license";}s:22:"repositoryChangelogUrl";s:69:"https://github.com/Chardonneaur/ImportAnnotationWidget/commits/v1.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:966:"

<p>This plugin has been created in order to offer a User Interface within Matomo to import annotations.
By default, it is possible to import annotations within Matomo but only through the API. The issue is that end users don\'t know it.
So the idea was to create an easy viewable plugin that anyone can use to import annotations.
It has been created as a widget in order to quickly show that annotations have been imported within a graph.
In order to use this feature, Matomo end users will have to create a token, indicate the siteID they want to import the annotations for and then write the annotations in this format:
YYYY-MM-DD,my annotation to import
YYYY-MM-DD,my second annotation to import
YYYY-MM-DD,my third annotation to import
etc etc.
Possibilities offered by this plugin are endless, if you look at the source code, you can easily create your own version of this plugin for any other methods of the Matomo API to offer a User Interface.
Have fun,</p>";s:3:"faq";s:537:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What is this plugin do?</strong></p>

<p>It provides you a user interface in order to import annotations.</p>

<p><strong>Why is it available on the dashboard panel and not in the admin?</strong></p>

<p>Good question. It is a choice we made. It would have been cleaner within the admin but on the other way around, it would have been difficult to view the result straight away on a graph.</p>";s:13:"documentation";s:725:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>The import annotation plugin is straightforward, it is providing you a User Interface on the dashboard in order to give any users the possibility to import annotations.
In order to import annotations, end users will need to create a token through the admin --&gt; Personnal --&gt; Security, and indicate the siteID they wish to import the data for.
Once they push the import button, the annotations get imported straight away.
Important thing to know, there is a limit in the number of caracters you can include within your annotations which is determine by the lenght of your request.</p>";s:9:"changelog";s:204:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>14/09/2023 - First version released on the Matomo\'s marketplace.</p>";}s:8:"download";s:54:"/api/2.0/plugins/ImportAnnotationWidget/download/0.1.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:75:"https://plugins.matomo.org/ImportAnnotationWidget/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:55;a:31:{s:4:"name";s:9:"LogViewer";s:11:"displayName";s:10:"Log Viewer";s:5:"owner";s:10:"matomo-org";s:11:"description";s:35:"View log messages logged by Matomo.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2015-09-22 09:26:18";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:53:"https://github.com/matomo-org/plugin-LogViewer/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:46:"https://github.com/matomo-org/plugin-LogViewer";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:5:{i:0;s:5:"debug";i:1;s:3:"log";i:2;s:6:"viewer";i:3;s:10:"diagnostic";i:4;s:9:"debugging";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:46:"https://github.com/matomo-org/plugin-LogViewer";s:11:"lastUpdated";s:19:"2023-09-11 08:52:03";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:58102;s:11:"screenshots";a:1:{i:0;s:63:"https://plugins.matomo.org/LogViewer/images/5.0.1/LogViewer.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"189";s:15:"numContributors";s:2:"25";s:14:"lastCommitDate";s:19:"2023-12-21 01:44:45";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-04 03:04:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:72;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/LogViewer/5.0.0/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-LogViewer/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:41:"/api/2.0/plugins/LogViewer/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-09-11 08:52:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:2112;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/LogViewer/5.0.1/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-LogViewer/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:94:"

<p>View log messages that were logged by Matomo via the Matomo UI or HTTP Reporting API.</p>";s:3:"faq";s:1748:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>I want to see more than 100 log messages, is it possible?</strong></p>

<p>Yes, there is a <code>limit</code> URL parameter that you can change to any number.</p>

<p><strong>Can I use regular expressions in the search field?</strong></p>

<p>Yes, you can enable regular expressions next to the search field.</p>

<p><strong>Is the search field case insensitive?</strong></p>

<p>Yes.</p>

<p><strong>How is a Matomo (Piwik) log line formatted by default?</strong></p>

<p><code>\'$severity $tag[$datetime] [$requestId] $message</code> eg <code>WARNING Matomo\\Common[2015-01-01 01:02:03] [cf27] The log message</code></p>

<p><strong>Is the search pattern applied to the whole log line?</strong></p>

<p>Yes, this means a search for <code>WARNING Matomo\\Common</code> would deliver you all warnings triggered by <code>Piwik\\Common</code>.</p>

<p><strong>How do I find all messages that belong to a certain request?</strong></p>

<p>Each log message shows a "Request Id". By clicking on this Id it selects all log messages of the same request.
Alternatively you can search for the expression <code>\\[1234\\]</code> where <code>1234</code> need to be replaced by a Request Id.</p>

<p><strong>How do I find messages that belong to the same day?</strong></p>

<p>Either click on a date field or search for it, eg <code>2012-12-12</code>.</p>

<p><strong>What are the known issues?</strong></p>

<ul>
<li>If there are messages being logged while viewing the log messages, the paging might not work 100% correctly.</li>
<li>There seems to be a problem when searching for a single quotation mark "\'".</li>
</ul>";s:13:"documentation";s:0:"";s:9:"changelog";s:605:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>5.0.1 Prefer using ellipsis over three dots</li>
<li>5.0.0 Compatibility with Matomo 5.0</li>
<li>4.1.2 PHP 8.2 Deprecation warnings handled</li>
<li>4.1.1 Translation changes</li>
<li>4.1.0 Migrate angularjs to Vue.</li>
<li>4.0.1 Compatibility with Matomo 4.0</li>
<li>4.0.0 Compatibility with Matomo 4.0</li>
<li>3.0.0 Compatibility with Piwik 3.0</li>
<li>0.2.0 Compatibility w/ Piwik 2.15.</li>
<li>0.1.1 Fix for IE8</li>
<li>0.1.0 Initial Release</li>
</ul>";}s:8:"download";s:41:"/api/2.0/plugins/LogViewer/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:62:"https://plugins.matomo.org/LogViewer/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:56;a:31:{s:4:"name";s:20:"SegmentAuthorization";s:11:"displayName";s:21:"Segment Authorization";s:5:"owner";s:12:"Chardonneaur";s:11:"description";s:112:"This plugin allows you to decide which users can create segments based on their status: user, admin, super user.";s:8:"homepage";s:52:"https://github.com/Chardonneaur/SegmentAuthorization";s:15:"createdDateTime";s:19:"2023-09-05 12:28:05";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:7:"segment";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:17:"Ronan Chardonneau";s:5:"email";N;s:8:"homepage";N;}}s:13:"repositoryUrl";s:52:"https://github.com/Chardonneaur/SegmentAuthorization";s:11:"lastUpdated";s:19:"2023-09-05 12:28:05";s:13:"latestVersion";s:5:"0.1.0";s:12:"numDownloads";i:262;s:11:"screenshots";a:1:{i:0;s:102:"https://plugins.matomo.org/SegmentAuthorization/images/0.1.0/segment_authorization_system_settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"11";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-09-05 12:45:01";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.1.0";s:7:"release";s:19:"2023-09-05 12:28:05";s:8:"requires";a:1:{s:6:"matomo";s:18:">=4.13.0,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:262;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/Chardonneaur/SegmentAuthorization/commits/0.1.0";s:10:"readmeHtml";a:4:{s:11:"description";s:573:"

<p>By default, anyone with write access can create segments within Matomo Analytics. It can be an issue if you have many users as a segment creation will require a lot of calculation from the server side. This plugin allows you to define who has the authorization to create segments within Matomo Analytics. Only the super user can access to this User Interface feature in order to define who can create segments. If the feature is set on admin, users with a write access only won\'t see the button to create segments, though they will still be able to apply segments.</p>";s:3:"faq";s:948:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What does this plugin do?</strong></p>

<p>Very simple, it is using an internal function of Matomo core to edit the config file through the Matomo User Interface. So to say, you can perform exactly the same thing by editing the config file directly.</p>

<p>__Why should I use this feature? __</p>

<p>When creating a segment within Matomo Analytics, it takes a lot of time for the server to perform the calculations. As a result if your Matomo instance has many users, technically it can slow down a lot the User Interface of Matomo. The idea of this plugin is to allow only some users in particular to have the right to create segments.</p>

<p><strong>Can users still access to the segment feature?</strong></p>

<p>Of course, this plugin just remove the possibility to create segments. That\'s it.</p>";s:13:"documentation";s:155:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>Documentation</h2>";s:9:"changelog";s:169:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>Here goes the changelog text.</p>";}s:8:"download";s:52:"/api/2.0/plugins/SegmentAuthorization/download/0.1.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:73:"https://plugins.matomo.org/SegmentAuthorization/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:57;a:31:{s:4:"name";s:14:"LanguageToogle";s:11:"displayName";s:15:"Language Toogle";s:5:"owner";s:8:"Findus23";s:11:"description";s:38:"Quickly change the language of Matomo.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2018-05-06 10:14:03";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:23:"https://forum.piwik.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:56:"https://github.com/Findus23/plugin-LanguageToogle/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:49:"https://github.com/Findus23/plugin-LanguageToogle";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:8:"language";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:49:"https://github.com/Findus23/plugin-LanguageToogle";s:11:"lastUpdated";s:19:"2023-08-29 19:52:02";s:13:"latestVersion";s:5:"0.4.0";s:12:"numDownloads";i:19892;s:11:"screenshots";a:2:{i:0;s:67:"https://plugins.matomo.org/LanguageToogle/images/0.4.0/Settings.png";i:1;s:67:"https://plugins.matomo.org/LanguageToogle/images/0.4.0/top_menu.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"38";s:15:"numContributors";s:2:"10";s:14:"lastCommitDate";s:19:"2023-12-19 07:21:18";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.4.0";s:7:"release";s:19:"2023-08-29 19:52:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1388;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:55:"https://plugins.matomo.org/LanguageToogle/0.4.0/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/Findus23/plugin-LanguageToogle/commits/0.4.0";s:10:"readmeHtml";a:4:{s:11:"description";s:214:"

<p>This plugin allows every user to select a list of languages that then can be quickly switched to via the top menu.</p>

<p>Ideal if you want to show the UI to or quickly create screenhost for other people.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:1184:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>0.4.0</h3>

<p>Matomo 5 compatibility</p>

<h3>0.3.6</h3>

<p>hide setting from non-superusers</p>

<h3>0.3.5</h3>

<p>fix typo in 0.3.4</p>

<h3>0.3.4</h3>

<p>add workaround for bug in Matomo 4.7.0 and 4.7.1</p>

<h3>0.3.3</h3>

<p>add Italian, Japanese, Portuguese, Portuguese (Brazil) and Ukrainian translations</p>

<h3>0.3.2</h3>

<p>Add Bulgarian, French, German, Greek, Turkish translations (thanks to the contributors in the Matomo weblate project)</p>

<h3>0.3.1 (Matomo 4+ only)</h3>

<ul>
<li>use local names for languages</li>
<li>move menu entry right of "Tag Manager"</li>
</ul>

<h3>0.3.0</h3>

<ul>
<li>Matomo 4 compatibility</li>
</ul>

<h3>0.2.0</h3>

<ul>
<li>replace multiselect with new multituple (needs Matomo 3.5.0)</li>
</ul>

<h3>0.1.4</h3>

<ul>
<li>performance improvements</li>
</ul>

<h3>0.1.3</h3>

<ul>
<li>update version in plugin.json</li>
</ul>

<p>0.1.2</p>

<ul>
<li>remove placeholder docs</li>
</ul>

<p>0.1.1</p>

<ul>
<li>Submit to marketplace</li>
</ul>

<p>0.1.0</p>

<ul>
<li>Initial Release</li>
</ul>";}s:8:"download";s:46:"/api/2.0/plugins/LanguageToogle/download/0.4.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:67:"https://plugins.matomo.org/LanguageToogle/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:58;a:31:{s:4:"name";s:12:"CustomAlerts";s:11:"displayName";s:13:"Custom Alerts";s:5:"owner";s:10:"matomo-org";s:11:"description";s:80:"Create custom Alerts to be notified of important changes on your website or app!";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2014-01-15 23:26:05";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:54:"https://github.com/matomo-org/plugin-CustomAlerts/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:56:"https://github.com/matomo-org/plugin-CustomAlerts/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:49:"https://github.com/matomo-org/plugin-CustomAlerts";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:6:"Report";i:1;s:6:"alerts";i:2;s:12:"notification";i:3;s:10:"monitoring";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:49:"https://github.com/matomo-org/plugin-CustomAlerts";s:11:"lastUpdated";s:19:"2023-08-28 05:48:08";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";i:105419;s:11:"screenshots";a:3:{i:0;s:69:"https://plugins.matomo.org/CustomAlerts/images/5.0.2/Create_Alert.png";i:1;s:74:"https://plugins.matomo.org/CustomAlerts/images/5.0.2/History_Of_Alerts.png";i:2;s:71:"https://plugins.matomo.org/CustomAlerts/images/5.0.2/List_Of_Alerts.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"584";s:15:"numContributors";s:2:"26";s:14:"lastCommitDate";s:19:"2023-12-21 01:48:13";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:3:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-04 02:26:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:139;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:53:"https://plugins.matomo.org/CustomAlerts/5.0.0/license";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/matomo-org/plugin-CustomAlerts/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:44:"/api/2.0/plugins/CustomAlerts/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-08-08 22:46:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:14;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:53:"https://plugins.matomo.org/CustomAlerts/5.0.1/license";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/matomo-org/plugin-CustomAlerts/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:44:"/api/2.0/plugins/CustomAlerts/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-08-28 05:48:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1733;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:53:"https://plugins.matomo.org/CustomAlerts/5.0.2/license";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/matomo-org/plugin-CustomAlerts/commits/5.0.0-b3";s:10:"readmeHtml";a:4:{s:11:"description";s:715:"

<p>Create Custom Alerts + Be notified by email/SMS!</p>

<p>Alerts are a great way to get notified of changes on your website. Want to know if your new product hits less than 100 sales in a week or your new article attracts more than 200 visitors a day? Create alerts that make sense to you. Be notified by email or SMS when the conditions for your alerts are met. Stay on top of your website!</p>

<p>The Alert log will help you to better understand the success of your website. You can use it to analyze how often your website hit more than 10000 visits per day or on how many days a product was sold more than 50 times.</p>

<p>This plugin was crowdfunded with the support of 37 Matomo community members!</p>

";s:3:"faq";s:1774:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What exactly is included in this feature?</strong></p>

<p>Here is the complete list of features that are included in this project:</p>

<ul>
<li>Define new Alert ("Big drop in purchases")</li>
<li>Select a website on which the Alert is defined</li>
<li>Receive an alert by email (email will contain Alert description + link to Matomo (Piwik) dashboard URL for the given website ID and period).</li>
<li>Receive an alert by SMS (SMS will contain Alert description and numbers that triggered the Alert)</li>
<li>Select the Alert period: should it be daily, weekly or monthly?</li>
<li>Select the report (Websites, Keywords, Countries, general stats)</li>
<li>Define Metrics (visits, page view, avg. visit duration, Goal 1 conversions, total goal conversions, etc.)</li>
<li>Define the Alert: when Visits decrease 50%, when purchases are more than 50 per day, etc.</li>
</ul>

<p><strong>What reports are available to the Alert system?</strong></p>

<p>You can create an alert for any available report in Matomo. Plugins can define new reports which will be automatically picked up by Alerts.</p>

<p><strong>What alert conditions are available?</strong></p>

<p>You can create alerts for the following metrics:</p>

<ul>
<li>Visits, Visits Evolution, Unique Visits</li>
<li>Actions, Action Evolution</li>
<li>Pageviews, Pageviews Evolution</li>
<li>Time on page</li>
<li>Bounce rate</li>
<li>Goal revenue</li>
<li>Downloads</li>
<li>and many more..</li>
</ul>

<p>To define the condition you can select the conditions:</p>

<ul>
<li>Greater than, less than</li>
<li>Equal, Not Equal</li>
<li>Percentage increase/decrease</li>
</ul>";s:13:"documentation";s:0:"";s:9:"changelog";s:934:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>5.0.2 Fixed alert conditions not reloading on site change</li>
<li>5.0.1 Compatibility with Matomo 5.0.0-b4</li>
<li>5.0.0 Compatibility with Matomo 5.0</li>
<li>4.1.0 Migrate AngularJS to Vue</li>
<li>4.0.4 Fixed autocomplete for country to trigger alerts</li>
<li>4.0.3 Grouped alert condition select in UI</li>
<li>4.0.2 Improve report selector when defining a custom alert</li>
<li>4.0.0 Compatibility with Matomo 4.0</li>
<li>3.0.6: Do not pass trigger=archivephp to API method calls.</li>
<li>3.0.1: Email alerts: beautiful email design</li>
<li>3.0.0: Compatibility with Piwik 3.0</li>
<li>0.1.22: Improved the look of some form elements</li>
<li>0.1.21: Compatible with Piwik 2.15.0, fixed: alert number format can be wrong when using percentages</li>
<li>0.1.0: First beta</li>
</ul>";}s:8:"download";s:44:"/api/2.0/plugins/CustomAlerts/download/5.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:65:"https://plugins.matomo.org/CustomAlerts/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:59;a:31:{s:4:"name";s:8:"Provider";s:11:"displayName";s:8:"Provider";s:5:"owner";s:10:"matomo-org";s:11:"description";s:54:"Reports the Internet Service Provider of the visitors.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2020-07-31 00:36:02";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"hello@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:52:"https://github.com/matomo-org/plugin-Provider/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:45:"https://github.com/matomo-org/plugin-Provider";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:6:"Report";i:1;s:8:"provider";i:2;s:8:"internet";i:3;s:7:"service";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:45:"https://github.com/matomo-org/plugin-Provider";s:11:"lastUpdated";s:19:"2023-08-28 05:42:03";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";i:113288;s:11:"screenshots";a:1:{i:0;s:59:"https://plugins.matomo.org/Provider/images/5.0.2/Report.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"100";s:15:"numContributors";s:2:"13";s:14:"lastCommitDate";s:19:"2023-12-21 01:43:38";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:3:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-04 02:36:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:159;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:62:"https://github.com/matomo-org/plugin-Provider/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:40:"/api/2.0/plugins/Provider/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-08-10 21:32:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:83;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:62:"https://github.com/matomo-org/plugin-Provider/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:40:"/api/2.0/plugins/Provider/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-08-28 05:42:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:9185;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:62:"https://github.com/matomo-org/plugin-Provider/commits/5.0.0-b3";s:10:"readmeHtml";a:4:{s:11:"description";s:257:"

<p>This plugin adds a new report to your Matomo showing which Internet Service Providers your visitors used to access your website. 
You can click on a provider name for more details. If Matomo can\'t determine a visitor\'s provider, it is listed as IP.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:754:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>5.0.2</h3>

<ul>
<li>Fixes empty label causing archiving to fail</li>
</ul>

<h3>5.0.1</h3>

<ul>
<li>Compatibility with Matomo 5.0.0-b4</li>
</ul>

<h3>5.0.0</h3>

<ul>
<li>Compatibility with Matomo 5</li>
</ul>

<h3>4.0.5</h3>

<ul>
<li>Remove code for event that does no longer exist</li>
</ul>

<h3>4.0.4</h3>

<ul>
<li>Translation updates</li>
</ul>

<h3>4.0.3</h3>

<ul>
<li>Translation updates</li>
<li>Do GeoIP lookup even if param dp=1 is given (only used in log analytics)</li>
</ul>

<h3>4.0.2</h3>

<ul>
<li>Fix plugin not working in WordPress or On-Premise when using custom plugin directories</li>
</ul>";}s:8:"download";s:40:"/api/2.0/plugins/Provider/download/5.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:61:"https://plugins.matomo.org/Provider/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:60;a:31:{s:4:"name";s:13:"ExcludeByDDNS";s:11:"displayName";s:15:"Exclude By DDNS";s:5:"owner";s:6:"sgiehl";s:11:"description";s:69:"This plugin allows you to dynamically exclude a IP using DDNS update.";s:8:"homepage";s:51:"http://github.com/sgiehl/piwik-plugin-ExcludeByDDNS";s:15:"createdDateTime";s:19:"2015-02-08 22:10:03";s:6:"donate";a:3:{s:6:"paypal";s:18:"stefangiehl@web.de";s:6:"flattr";s:39:"https://flattr.com/thing/2578144/sgiehl";s:7:"bitcoin";N;}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:4:"ddns";i:1;s:9:"ipexclude";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Stefan Giehl";s:5:"email";s:17:"stefan@matomo.org";s:8:"homepage";s:24:"http://github.com/sgiehl";}}s:13:"repositoryUrl";s:52:"https://github.com/sgiehl/piwik-plugin-ExcludeByDDNS";s:11:"lastUpdated";s:19:"2023-08-24 08:50:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:21200;s:11:"screenshots";a:2:{i:0;s:66:"https://plugins.matomo.org/ExcludeByDDNS/images/5.0.0/settings.png";i:1;s:74:"https://plugins.matomo.org/ExcludeByDDNS/images/5.0.0/superuser_status.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"155";s:15:"numContributors";s:2:"24";s:14:"lastCommitDate";s:19:"2023-12-20 12:42:44";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-08-24 08:50:03";s:8:"requires";a:2:{s:5:"piwik";s:20:">=5.0.0-b1,<6.0.0-b1";s:3:"php";s:7:">=7.2.0";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1367;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/sgiehl/piwik-plugin-ExcludeByDDNS/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:360:"

<p>This plugin allows the Matomo users to dynamically exclude their IP address using DDNS update.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/matomo-org/matomo">Matomo</a> 5.0.0-b1 or higher is required.</p>

<h3>Features</h3>

<ul>
<li>Exclude one IP for each Matomo user</li>
<li>Exclude and IP using an already updated hostname</li>
</ul>

";s:3:"faq";s:1580:"<p><strong>Which update method should I use, <em>DDNS Update</em> or <em>DDNS Hostname</em>?</strong></p>

<p>If available, <strong><em>DDNS Update</em></strong> is recommended. This method is a bit more complicated to set up, but it leads to immediately updated IP\'s, as the client will trigger the update whenever a new IP is assigned.
But it may not be viable for all users, eg. 
* Not all DDNS clients allow custom update-URL\'s.
* The client may be already serving another server and have no ability to talk to multiple servers at the same time.</p>

<p>So, the <strong><em>DDNS Hostname</em></strong> can be an alternative. Use a DDNS service that is compatible with your client and enter the hostname from there to have the plugin resolve your dynamic IP. The downside: Updating happens via a scheduled task every hour, so there might be small windows with the new IP still being tracked, but not the old one.</p>

<p><strong>What data do I need to set for DDNS Update</strong></p>

<p>You need to set a custom URL to be triggered for an update.
Your personal update-URL is shown in your Matomo installation (user-menu &gt; Personal &gt; DDNS Settings).</p>

<p>The URL has the following scheme:</p>

<pre><code>http{s}://{matomo.url}/index.php?module=ExcludeByDDNS&amp;action=update&amp;token_auth={token_auth}
</code></pre>

<ul>
<li>{s} Use HTTPS if available.</li>
<li>{matomo.url}: The URL to your Matomo installation.</li>
<li>{token_auth}: A token auth (user-menu &gt; Personal &gt; Security).</li>
</ul>

<p>There is no need to set user, password or domain name.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:392:"<ul>
<li>Version 5.0.0 - Compatibility for Matomo &gt; 5.0.0</li>
<li>Version 4.0.0 - Compatibility for Matomo &gt; 4.0.0</li>
<li>Version 3.0.0 - Compatibility for Piwik &gt; 3.0.0</li>
<li>Version 0.4.0 - Compatibility for Piwik &gt; 2.4.0</li>
<li>Version 0.3.0 - Various improvements and translations</li>
<li>Version 0.2.0 - Beta Release</li>
<li>Version 0.1.0 - Alpha Release</li>
</ul>";}s:8:"download";s:45:"/api/2.0/plugins/ExcludeByDDNS/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:66:"https://plugins.matomo.org/ExcludeByDDNS/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:61;a:31:{s:4:"name";s:11:"FlagCounter";s:11:"displayName";s:12:"Flag Counter";s:5:"owner";s:6:"sgiehl";s:11:"description";s:137:"This plugin allows you to include a simple statistic in your website showing the flags and hits of the countries your visitors came from.";s:8:"homepage";s:49:"http://github.com/sgiehl/piwik-plugin-FlagCounter";s:15:"createdDateTime";s:19:"2015-01-05 23:22:04";s:6:"donate";a:3:{s:6:"paypal";s:18:"stefangiehl@web.de";s:6:"flattr";s:39:"https://flattr.com/thing/2578144/sgiehl";s:7:"bitcoin";N;}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:4:"flag";i:1;s:11:"flagcounter";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Stefan Giehl";s:5:"email";s:17:"stefan@matomo.org";s:8:"homepage";s:24:"http://github.com/sgiehl";}}s:13:"repositoryUrl";s:50:"https://github.com/sgiehl/piwik-plugin-FlagCounter";s:11:"lastUpdated";s:19:"2023-08-21 16:54:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:27418;s:11:"screenshots";a:5:{i:0;s:64:"https://plugins.matomo.org/FlagCounter/images/5.0.0/counter1.png";i:1;s:64:"https://plugins.matomo.org/FlagCounter/images/5.0.0/counter2.png";i:2;s:64:"https://plugins.matomo.org/FlagCounter/images/5.0.0/counter3.png";i:3;s:64:"https://plugins.matomo.org/FlagCounter/images/5.0.0/counter4.png";i:4;s:64:"https://plugins.matomo.org/FlagCounter/images/5.0.0/settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"91";s:15:"numContributors";s:2:"12";s:14:"lastCommitDate";s:19:"2023-12-20 12:42:24";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-08-21 16:54:03";s:8:"requires";a:1:{s:5:"piwik";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1575;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:64:"https://github.com/sgiehl/piwik-plugin-FlagCounter/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:1166:"

<p>This plugin allows you to include a small image or iframe in your website displaying the flags and total hits of the countries your website visitors came from</p>

<p>Please keep in mind that everyone will be able to see that kind of statistic as this plugin does not consider the access rights.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/matomo-org/matomo">Matomo</a> 2.0.4 or higher is required.
GD library including ttf support.</p>

<h3>Features</h3>

<ul>
<li>Configurable with following parameters:

<ul>
<li>idSite: Website to display</li>
<li>period: period to display</li>
<li>date: date to display</li>
<li>cols: count of columns to display (default 2)</li>
<li>rows: count of rows to display (default 5)</li>
<li>showflag: show flags (default 1)</li>
<li>showcountryode: show country codes (default 0)</li>
<li>font: font family to use</li>
<li>fontsize: font size to use (between 2 and 30; default 12)</li>
<li>fontcolor: font color to use (rgb value; default 0,0,0)</li>
</ul></li>
<li>Generates a transparent PNG image showing the flag icons and their total hits</li>
<li>Generates simple HTML to be included as iframe</li>
</ul>

";s:3:"faq";s:1173:"<p><strong>The image is not displayed. What can I do?</strong></p>

<p>Maybe you have some kind of access restriction for your Matomo like http auth. The Url needs to be public accessible, or at least accessible to those, who should be able to see the counter.</p>

<p><strong>How can I display the counter for all data in the past</strong></p>

<p>To do that, set period to <code>range</code> and date to something like <code>1992-01-01,today</code>.</p>

<p>The full URL for the image would then look like:</p>

<pre><code>http://matomo.url/index.php?module=FlagCounter&amp;action=image&amp;idSite=1&amp;period=range&amp;date=1992-01-01,today&amp;cols=2&amp;rows=6
</code></pre>

<p>This URL can then be simply used in an img tag on your site. e.g.</p>

<pre><code>&lt;img src="http://matomo.url/index.php?module=FlagCounter&amp;action=image&amp;idSite=1&amp;period=range&amp;date=1992-01-01,today&amp;cols=2&amp;rows=6" /&gt;
</code></pre>

<p><strong>Can I use a custom font?</strong></p>

<p>Currently all ttf fonts located in the <code>fonts</code> directory within this plugin are available for usage. If you place a new font there, you should be able to use it.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:618:"<ul>
<li>Version 0.1 - Alpha Release</li>
<li>Version 0.2

<ul>
<li>improved image generation (automatic spacing between items)</li>
<li>possibility to show country codes besides or instead of the flags</li>
</ul></li>
<li>Version 0.3

<ul>
<li>added ability to choose a font family, size &amp; color</li>
</ul></li>
<li>Version 3.0.0

<ul>
<li>Compatibility for Piwik 3</li>
</ul></li>
<li>Version 3.0.3

<ul>
<li>fixed caching bug with multiple sites</li>
</ul></li>
<li>Version 4.0.0

<ul>
<li>Compatibility with Matomo 4</li>
</ul></li>
<li>Version 5.0.0

<ul>
<li>Compatibility with Matomo 5</li>
</ul></li>
</ul>";}s:8:"download";s:43:"/api/2.0/plugins/FlagCounter/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:64:"https://plugins.matomo.org/FlagCounter/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:62;a:31:{s:4:"name";s:9:"IPReports";s:11:"displayName";s:9:"IPReports";s:5:"owner";s:6:"sgiehl";s:11:"description";s:30:"Adds new IP reports to Matomo.";s:8:"homepage";s:47:"http://github.com/sgiehl/piwik-plugin-IPReports";s:15:"createdDateTime";s:19:"2017-11-18 22:46:03";s:6:"donate";a:3:{s:6:"paypal";s:18:"stefangiehl@web.de";s:6:"flattr";s:71:"https://flattr.com/thing/3787742/sgiehlpiwik-plugin-IPReports-on-GitHub";s:7:"bitcoin";N;}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:17:"stefan@matomo.org";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:55:"https://github.com/sgiehl/piwik-plugin-IPReports/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:48:"https://github.com/sgiehl/piwik-plugin-IPReports";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:6:"Report";i:1;s:2:"ip";i:2;s:3:"ips";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Stefan Giehl";s:5:"email";s:17:"stefan@matomo.org";s:8:"homepage";s:24:"http://github.com/sgiehl";}}s:13:"repositoryUrl";s:48:"https://github.com/sgiehl/piwik-plugin-IPReports";s:11:"lastUpdated";s:19:"2023-08-21 14:34:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:23229;s:11:"screenshots";a:2:{i:0;s:60:"https://plugins.matomo.org/IPReports/images/5.0.0/report.png";i:1;s:61:"https://plugins.matomo.org/IPReports/images/5.0.0/report2.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"150";s:15:"numContributors";s:2:"19";s:14:"lastCommitDate";s:19:"2023-12-19 09:02:53";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-08-21 14:34:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1677;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:62:"https://github.com/sgiehl/piwik-plugin-IPReports/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:221:"

<p>This plugin adds additional reports "Top IP-Addresses" and "IPv4 / IPv6 usage" to Matomo.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/matomo-org/matomo">Matomo</a> 5.0.0-b1 or higher is required.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";s:41:"/api/2.0/plugins/IPReports/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:62:"https://plugins.matomo.org/IPReports/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:63;a:31:{s:4:"name";s:25:"RestrictLanguageSelection";s:11:"displayName";s:27:"Restrict Language Selection";s:5:"owner";s:6:"sgiehl";s:11:"description";s:74:"Allows you to modify the list of available languages in language selector.";s:8:"homepage";s:64:"https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection";s:15:"createdDateTime";s:19:"2016-11-01 21:24:03";s:6:"donate";a:3:{s:6:"paypal";s:18:"stefangiehl@web.de";s:6:"flattr";s:87:"https://flattr.com/thing/3787742/sgiehlpiwik-plugin-RestrictLanguageSelection-on-GitHub";s:7:"bitcoin";N;}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:71:"https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:17:"stefan@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:71:"https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:71:"https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:8:"language";i:1;s:4:"i18n";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Stefan Giehl";s:5:"email";s:17:"stefan@matomo.org";s:8:"homepage";s:25:"https://github.com/sgiehl";}}s:13:"repositoryUrl";s:64:"https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection";s:11:"lastUpdated";s:19:"2023-08-21 14:18:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:11937;s:11:"screenshots";a:1:{i:0;s:90:"https://plugins.matomo.org/RestrictLanguageSelection/images/5.0.0/language_restriction.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"177";s:15:"numContributors";s:2:"18";s:14:"lastCommitDate";s:19:"2023-12-19 09:02:13";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-08-21 14:18:03";s:8:"requires";a:2:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";s:3:"php";s:7:">=7.2.0";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:85;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:66:"https://plugins.matomo.org/RestrictLanguageSelection/5.0.0/license";}s:22:"repositoryChangelogUrl";s:78:"https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:213:"

<p>This plugin allows you to restrict the languages available in language selectors.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/matomo-org/matomo">Matomo</a> 5.0.0-b1 or higher is required.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:365:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>5.0</strong></p>

<ul>
<li>Compatibility with Matomo 5</li>
</ul>

<p><strong>4.0</strong></p>

<ul>
<li>Compatibility with Matomo 4</li>
</ul>

<p><strong>3.0</strong></p>

<ul>
<li>Initial version for Piwik 3</li>
</ul>";}s:8:"download";s:57:"/api/2.0/plugins/RestrictLanguageSelection/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:78:"https://plugins.matomo.org/RestrictLanguageSelection/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:64;a:31:{s:4:"name";s:18:"DeviceFeatureWebGL";s:11:"displayName";s:21:"Device Feature Web GL";s:5:"owner";s:6:"sgiehl";s:11:"description";s:64:"This plugin allows you to track browser compatibility for WebGL.";s:8:"homepage";s:56:"http://github.com/sgiehl/piwik-plugin-DeviceFeatureWebGL";s:15:"createdDateTime";s:19:"2017-07-05 19:54:03";s:6:"donate";a:3:{s:6:"paypal";s:18:"stefangiehl@web.de";s:6:"flattr";s:39:"https://flattr.com/thing/2578144/sgiehl";s:7:"bitcoin";N;}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:5:"webgl";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Stefan Giehl";s:5:"email";s:17:"stefan@matomo.org";s:8:"homepage";s:24:"http://github.com/sgiehl";}}s:13:"repositoryUrl";s:57:"https://github.com/sgiehl/piwik-plugin-DeviceFeatureWebGL";s:11:"lastUpdated";s:19:"2023-08-21 14:10:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:38145;s:11:"screenshots";a:1:{i:0;s:69:"https://plugins.matomo.org/DeviceFeatureWebGL/images/5.0.0/report.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"34";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-08-21 14:08:19";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-08-21 14:10:03";s:8:"requires";a:2:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";s:3:"php";s:7:">=7.2.5";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:165;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:71:"https://github.com/sgiehl/piwik-plugin-DeviceFeatureWebGL/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:329:"

<p>This plugin adds browser plugin detection for WebGL to the already existing browser plugin reports in Matomo</p>

<h3>Requirements</h3>

<p><a href="https://github.com/matomo-org/matomo">Matomo</a> 5.0.0-b1 or higher is required.</p>

<h3>Features</h3>

<ul>
<li>automatic detection of WebGL support in browsers</li>
</ul>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";s:50:"/api/2.0/plugins/DeviceFeatureWebGL/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:71:"https://plugins.matomo.org/DeviceFeatureWebGL/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:65;a:31:{s:4:"name";s:16:"ReferrersManager";s:11:"displayName";s:17:"Referrers Manager";s:5:"owner";s:6:"sgiehl";s:11:"description";s:95:"Allows to view and manage the search engines and social networks that Matomo is able to detect.";s:8:"homepage";s:55:"https://github.com/sgiehl/piwik-plugin-ReferrersManager";s:15:"createdDateTime";s:19:"2014-02-01 21:48:04";s:6:"donate";a:3:{s:6:"paypal";s:18:"stefangiehl@web.de";s:6:"flattr";s:78:"https://flattr.com/thing/3787742/sgiehlpiwik-plugin-ReferrersManager-on-GitHub";s:7:"bitcoin";N;}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:62:"https://github.com/sgiehl/piwik-plugin-ReferrersManager/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:17:"stefan@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:62:"https://github.com/sgiehl/piwik-plugin-ReferrersManager/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:62:"https://github.com/sgiehl/piwik-plugin-ReferrersManager/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:8:"referrer";i:1;s:6:"search";i:2;s:6:"engine";i:3;s:6:"social";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:12:"Stefan Giehl";s:5:"email";s:17:"stefan@matomo.org";s:8:"homepage";s:25:"https://github.com/sgiehl";}}s:13:"repositoryUrl";s:55:"https://github.com/sgiehl/piwik-plugin-ReferrersManager";s:11:"lastUpdated";s:19:"2023-08-21 13:48:03";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:67032;s:11:"screenshots";a:3:{i:0;s:70:"https://plugins.matomo.org/ReferrersManager/images/5.0.1/check_url.jpg";i:1;s:75:"https://plugins.matomo.org/ReferrersManager/images/5.0.1/search_engines.jpg";i:2;s:68:"https://plugins.matomo.org/ReferrersManager/images/5.0.1/socials.jpg";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"244";s:15:"numContributors";s:2:"20";s:14:"lastCommitDate";s:19:"2023-12-08 07:51:43";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-06-06 12:06:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:53;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:57:"https://plugins.matomo.org/ReferrersManager/5.0.0/license";}s:22:"repositoryChangelogUrl";s:69:"https://github.com/sgiehl/piwik-plugin-ReferrersManager/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:48:"/api/2.0/plugins/ReferrersManager/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-08-21 13:48:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:2337;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:57:"https://plugins.matomo.org/ReferrersManager/5.0.1/license";}s:22:"repositoryChangelogUrl";s:69:"https://github.com/sgiehl/piwik-plugin-ReferrersManager/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:657:"

<p>This plugin allows to view and manage custom search engines and social networks that are recognized with Matomo.
Note: You can find the configuration panel for this plugin within the global administration. There are no changes done to the Matomo frontend/dashboard.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/matomo-org/matomo">Matomo</a> 5.0.0-b1 or higher is required.</p>

<h3>Features</h3>

<ul>
<li>Shows a list of all search engines and social networks defined in Matomo core.</li>
<li>Ability to manage custom search engines and social networks</li>
<li>Ability to disable/enable Matomo\'s default social network list</li>
</ul>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:1902:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>5.0.0</strong></p>

<ul>
<li>Migrate AngularJS components to Vue.js</li>
<li>Compatibility with Matomo 5</li>
</ul>

<p><strong>4.0.4</strong></p>

<ul>
<li>Minor code improvements</li>
<li>Translation updates</li>
</ul>

<p><strong>4.0.3</strong></p>

<ul>
<li>Small UI/UX improvements</li>
<li>Translation updates</li>
</ul>

<p><strong>4.0.2</strong></p>

<ul>
<li>Translation updates</li>
<li>Small UI improvements</li>
</ul>

<p><strong>4.0.1</strong></p>

<ul>
<li>Translation updates</li>
</ul>

<p><strong>4.0.0</strong></p>

<ul>
<li>Compatibility for Piwik 4.x</li>
</ul>

<p><strong>3.0.4</strong></p>

<ul>
<li>Piwik ist now Matomo</li>
</ul>

<p><strong>3.0</strong></p>

<ul>
<li>Compatibility for Piwik 3.x</li>
<li>Rewrote UI using angular JS</li>
<li>Materialised UI/UX</li>
<li>Searchable lists for search engines / social networks</li>
</ul>

<p><strong>1.9</strong></p>

<ul>
<li>Mark plugin as incompatible with 3.x</li>
<li>Translation updates</li>
</ul>

<p><strong>1.8</strong></p>

<ul>
<li>fixes minor bugs</li>
<li>adds possibility to refresh lists (clears caches)</li>
</ul>

<p><strong>1.7</strong></p>

<ul>
<li>Fix Compatibility with Piwik 2.16</li>
</ul>

<p><strong>1.6</strong></p>

<ul>
<li>Compatibility for Piwik &gt; 2.15 / translation updates</li>
</ul>

<p><strong>1.5</strong></p>

<ul>
<li>Compatibility issues for older Piwik versions</li>
</ul>

<p><strong>1.4</strong></p>

<ul>
<li>Translation updates</li>
</ul>

<p><strong>1.3</strong></p>

<ul>
<li>Adjustments for new Piwik menu api</li>
</ul>

<p><strong>1.2</strong></p>

<ul>
<li>Compatibility fix for PHP &lt; 5.4</li>
</ul>

<p><strong>1.1</strong></p>

<ul>
<li>Minor Changes</li>
</ul>

<p><strong>1.0</strong></p>

<ul>
<li>Initial release</li>
</ul>";}s:8:"download";s:48:"/api/2.0/plugins/ReferrersManager/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:69:"https://plugins.matomo.org/ReferrersManager/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:66;a:31:{s:4:"name";s:25:"ContentOptimizationBundle";s:11:"displayName";s:27:"Content Optimization Bundle";s:5:"owner";s:10:"matomo-org";s:11:"description";s:111:"Bring your content to another level with these premium features and enjoy a discount when buying them together.";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2017-10-12 19:42:36";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:12:"optimization";i:1;s:10:"conversion";i:2;s:3:"cro";i:3;s:5:"sales";i:4;s:7:"content";i:5;s:6:"bundle";i:6;s:7:"revenue";}s:9:"basePrice";i:500;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-08-17 23:29:55";s:13:"latestVersion";s:5:"3.0.9";s:12:"numDownloads";N;s:11:"screenshots";a:15:{i:0;s:88:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/0_Optimize_Content.jpg";i:1;s:85:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/1_Click_Heatmap.jpg";i:2;s:84:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/1_Move_Heatmap.png";i:3;s:109:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/2_Session_Recording_Move_And_Click_Path.jpg";i:4;s:96:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/2_Session_Recording_Player.png";i:5;s:98:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/3_Form_Analytics_By_Page_URL.png";i:6;s:102:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/3_Form_Analytics_Drop_Off_Fields.png";i:7;s:96:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/3_Form_Analytics_Evolution.png";i:8;s:96:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/4_Media_Analytics_Overview.png";i:9;s:105:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/4_Media_Analytics_Real-time_Reports.png";i:10;s:101:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/4_Media_Analytics_Video_Details.png";i:11;s:100:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/4_Media_Analytics_Video_Report.png";i:12;s:82:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/5_Users_Flow.png";i:13;s:99:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/5_Users_Flow_Interaction_Menu.png";i:14;s:92:"https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.9/5_Users_Flow_Top_Paths.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:1;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:52:"https://plugins.matomo.org/ContentOptimizationBundle";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"499";s:11:"prettyPrice";s:6:"499EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:97;s:14:"prettyDiscount";s:5:"97€";s:12:"addToCartUrl";s:79:"https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:151:"https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=Up+to+4+users&add-to-cart=5914&variation_id=5915&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:3:"579";s:11:"prettyPrice";s:6:"USD579";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:117;s:14:"prettyDiscount";s:4:"$117";s:12:"addToCartUrl";s:79:"https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:151:"https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=Up+to+4+users&add-to-cart=5914&variation_id=5915&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:3:"999";s:11:"prettyPrice";s:6:"999EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:187;s:14:"prettyDiscount";s:6:"187€";s:12:"addToCartUrl";s:79:"https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:151:"https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=5+to+15+users&add-to-cart=5914&variation_id=5916&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:4:"1149";s:11:"prettyPrice";s:7:"USD1149";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:227;s:14:"prettyDiscount";s:4:"$227";s:12:"addToCartUrl";s:79:"https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:151:"https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=5+to+15+users&add-to-cart=5914&variation_id=5916&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:4:"1499";s:11:"prettyPrice";s:7:"1499EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:287;s:14:"prettyDiscount";s:6:"287€";s:12:"addToCartUrl";s:79:"https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:153:"https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=Unlimited+users&add-to-cart=5914&variation_id=5917&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:4:"1729";s:11:"prettyPrice";s:7:"USD1729";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:327;s:14:"prettyDiscount";s:4:"$327";s:12:"addToCartUrl";s:79:"https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:153:"https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=Unlimited+users&add-to-cart=5914&variation_id=5917&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:94:"https://shop.matomo.org/product/plugin-contentoptimizationbundle/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";N;s:11:"ratingCount";i:0;s:11:"reviewCount";i:0;}}s:6:"bundle";a:1:{s:7:"plugins";a:4:{i:0;a:2:{s:4:"name";s:14:"MediaAnalytics";s:11:"displayName";s:15:"Media Analytics";}i:1;a:2:{s:4:"name";s:9:"UsersFlow";s:11:"displayName";s:10:"Users Flow";}i:2;a:2:{s:4:"name";s:13:"FormAnalytics";s:11:"displayName";s:14:"Form Analytics";}i:3;a:2:{s:4:"name";s:23:"HeatmapSessionRecording";s:11:"displayName";s:27:"Heatmap & Session Recording";}}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"3.0.9";s:7:"release";N;s:8:"requires";a:1:{s:5:"piwik";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:2689:"

<p>This bundles combines a set of premium features that lets you improve your content, content structure, usability, forms, videos, audios, user flow, and more. It enables you to find out easily what your users really want, what they are looking for, how engaging your content is, and what really is important to your users. You will be also able to find all the pain points on your forms so you can increase the number of users that start interacting with your forms, and the number of users that complete your forms. Finally, you will understand who has watched your media, how much of each media they have watched, and which medias are contributing the most value to your business or organization.</p>

<p>This bundle includes:</p>

<ul>
<li><a href="https://plugins.matomo.org/FormAnalytics">Form Analytics</a></li>
<li><a href="https://plugins.matomo.org/HeatmapSessionRecording">Heatmap &amp; Session Recording</a></li>
<li><a href="https://plugins.matomo.org/MediaAnalytics">Media Analytics</a></li>
<li><a href="https://plugins.matomo.org/UsersFlow">Users Flow</a></li>
</ul>

<h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://plugins.matomo.org/img/free_trial_image.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>All of our premium features are built on top of Matomo, which means you get all the benefits and features from Matomo on top. Like data ownership, no data limits, being able to host it yourself on premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Matomo is used and trusted by over a million websites and apps. Hand-crafted with a lot of attention to detail directly by the makers of Matomo, we are sure you will love this bundle.</p>

<blockquote>
  <p>This is why we give you a free 30 day trial. We will remind you about the subscription seven days before the end of the trial. There are no strings attached.</p>
</blockquote>

<p>So try it now and start getting a 360 degree view on your users. With our <a href="https://shop.matomo.org/refund-policy/">100% money back guarantee</a> you have nothing to lose.</p>

<h3>Perfectly integrated and supported</h3>

<p>We are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of medium and large businesses alike.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:67;a:31:{s:4:"name";s:12:"GrowthBundle";s:11:"displayName";s:13:"Growth Bundle";s:5:"owner";s:10:"matomo-org";s:11:"description";s:121:"This bundle lets you optimize your content, increase your conversions, and gives you insights into your user acquisition.";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2017-10-12 19:43:01";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:12:"optimization";i:1;s:10:"conversion";i:2;s:3:"cro";i:3;s:5:"sales";i:4;s:7:"content";i:5;s:6:"bundle";i:6;s:7:"revenue";}s:9:"basePrice";i:1000;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";N;s:11:"lastUpdated";s:19:"2023-08-17 23:20:12";s:13:"latestVersion";s:5:"3.1.2";s:12:"numDownloads";N;s:11:"screenshots";a:17:{i:0;s:72:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/0_Grow_Business.jpg";i:1;s:72:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/1_Click_Heatmap.jpg";i:2;s:96:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/2_Session_Recording_Move_And_Click_Path.jpg";i:3;s:83:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/2_Session_Recording_Player.png";i:4;s:69:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/3_AB_Testing.png";i:5;s:75:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/3_Manage_A_B_Tests.png";i:6;s:66:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/4_Funnels.png";i:7;s:69:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/5_Users_Flow.png";i:8;s:86:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/5_Users_Flow_Interaction_Menu.png";i:9;s:83:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/6_Media_Analytics_Overview.png";i:10;s:92:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/6_Media_Analytics_Real-time_Reports.png";i:11;s:74:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/7_Crawling_Errors.png";i:12;s:147:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/7_Keywords_on_Google_Search_Clicks_-_Impressions_-_Clickthrough_-_Position_in_results_page.png";i:13;s:68:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/7_WebVitals.png";i:14;s:85:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/8_Form_Analytics_By_Page_URL.png";i:15;s:89:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/8_Form_Analytics_Drop_Off_Fields.png";i:16;s:83:"https://plugins.matomo.org/GrowthBundle/images/3.1.2/8_Form_Analytics_Evolution.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";N;s:15:"numContributors";N;s:14:"lastCommitDate";N;}s:8:"featured";b:0;s:6:"isFree";b:0;s:6:"isPaid";b:1;s:8:"isBundle";b:1;s:14:"isCustomPlugin";b:0;s:4:"shop";a:3:{s:3:"url";s:39:"https://plugins.matomo.org/GrowthBundle";s:10:"variations";a:6:{i:0;a:9:{s:5:"price";s:3:"999";s:11:"prettyPrice";s:6:"999EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:421;s:14:"prettyDiscount";s:6:"421€";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/GrowthBundle?add-to-cart=s&currency=EUR";s:17:"addToCartEmbedUrl";s:138:"https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=Up+to+4+users&add-to-cart=5918&variation_id=5919&aelia_cs_currency=EUR";}i:1;a:11:{s:5:"price";s:4:"1149";s:11:"prettyPrice";s:7:"USD1149";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"Up to 4 users";s:8:"discount";i:491;s:14:"prettyDiscount";s:4:"$491";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/GrowthBundle?add-to-cart=s&currency=USD";s:17:"addToCartEmbedUrl";s:138:"https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=Up+to+4+users&add-to-cart=5918&variation_id=5919&aelia_cs_currency=USD";s:8:"cheapest";b:1;s:11:"recommended";b:1;}i:2;a:9:{s:5:"price";s:4:"1999";s:11:"prettyPrice";s:7:"1999EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:811;s:14:"prettyDiscount";s:6:"811€";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/GrowthBundle?add-to-cart=m&currency=EUR";s:17:"addToCartEmbedUrl";s:138:"https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=5+to+15+users&add-to-cart=5918&variation_id=5920&aelia_cs_currency=EUR";}i:3;a:11:{s:5:"price";s:4:"2299";s:11:"prettyPrice";s:7:"USD2299";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:13:"5 to 15 users";s:8:"discount";i:961;s:14:"prettyDiscount";s:4:"$961";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/GrowthBundle?add-to-cart=m&currency=USD";s:17:"addToCartEmbedUrl";s:138:"https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=5+to+15+users&add-to-cart=5918&variation_id=5920&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}i:4;a:9:{s:5:"price";s:4:"2999";s:11:"prettyPrice";s:7:"2999EUR";s:8:"currency";s:3:"EUR";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:1241;s:14:"prettyDiscount";s:7:"1241€";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/GrowthBundle?add-to-cart=l&currency=EUR";s:17:"addToCartEmbedUrl";s:140:"https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=Unlimited+users&add-to-cart=5918&variation_id=5921&aelia_cs_currency=EUR";}i:5;a:11:{s:5:"price";s:4:"3449";s:11:"prettyPrice";s:7:"USD3449";s:8:"currency";s:3:"USD";s:6:"period";s:4:"year";s:4:"name";s:15:"Unlimited users";s:8:"discount";i:1441;s:14:"prettyDiscount";s:5:"$1441";s:12:"addToCartUrl";s:66:"https://plugins.matomo.org/GrowthBundle?add-to-cart=l&currency=USD";s:17:"addToCartEmbedUrl";s:140:"https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=Unlimited+users&add-to-cart=5918&variation_id=5921&aelia_cs_currency=USD";s:8:"cheapest";b:0;s:11:"recommended";b:0;}}s:7:"reviews";a:5:{s:8:"embedUrl";s:81:"https://shop.matomo.org/product/plugin-growthbundle/?show_reviews=1&piwik_embed=1";s:6:"height";i:200;s:13:"averageRating";N;s:11:"ratingCount";i:0;s:11:"reviewCount";i:0;}}s:6:"bundle";a:1:{s:7:"plugins";a:10:{i:0;a:2:{s:4:"name";s:14:"MediaAnalytics";s:11:"displayName";s:15:"Media Analytics";}i:1;a:2:{s:4:"name";s:9:"AbTesting";s:11:"displayName";s:11:"A/B Testing";}i:2;a:2:{s:4:"name";s:7:"Funnels";s:11:"displayName";s:7:"Funnels";}i:3;a:2:{s:4:"name";s:9:"UsersFlow";s:11:"displayName";s:10:"Users Flow";}i:4;a:2:{s:4:"name";s:13:"FormAnalytics";s:11:"displayName";s:14:"Form Analytics";}i:5;a:2:{s:4:"name";s:31:"SearchEngineKeywordsPerformance";s:11:"displayName";s:34:"Search Engine Keywords Performance";}i:6;a:2:{s:4:"name";s:23:"HeatmapSessionRecording";s:11:"displayName";s:27:"Heatmap & Session Recording";}i:7;a:2:{s:4:"name";s:33:"MultiChannelConversionAttribution";s:11:"displayName";s:36:"Multi Channel Conversion Attribution";}i:8;a:2:{s:4:"name";s:27:"AdvertisingConversionExport";s:11:"displayName";s:29:"Advertising Conversion Export";}i:9;a:2:{s:4:"name";s:12:"SEOWebVitals";s:11:"displayName";s:14:"SEO Web Vitals";}}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"3.1.2";s:7:"release";N;s:8:"requires";a:1:{s:5:"piwik";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";N;s:7:"license";a:2:{s:4:"name";s:14:"InnoCraft EULA";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";N;s:10:"readmeHtml";a:4:{s:11:"description";s:3409:"

<p>Are you afraid of making the wrong business decisions? Do you want to make your day to day life much easier? Do you want to grow your business? This bundles lets you improve your sales, conversions, content, forms, videos, audio, and user acquisitions with ease. When you have this bundle, you can be confident that you truly understand your visitors, make reliable decisions fast, and gain new insights in a way that was not possible before. You will be surprised how much more successful it will make you! And with our <a href="https://shop.matomo.org/refund-policy/">100% money back guarantee</a> you have nothing to lose.</p>

<p>This bundle includes the following premium features:</p>

<ul>
<li><a href="https://plugins.matomo.org/AbTesting">A/B Testing</a></li>
<li><a href="https://plugins.matomo.org/FormAnalytics">Form Analytics</a></li>
<li><a href="https://plugins.matomo.org/Funnels">Funnels</a></li>
<li><a href="https://plugins.matomo.org/HeatmapSessionRecording">Heatmap &amp; Session Recording</a></li>
<li><a href="https://plugins.matomo.org/MediaAnalytics">Media Analytics</a></li>
<li><a href="https://plugins.matomo.org/SearchEngineKeywordsPerformance">Search Engine Keywords Performance</a></li>
<li><a href="https://plugins.matomo.org/SEOWebVitals">SEO Web Vitals</a></li>
<li><a href="https://plugins.matomo.org/MultiChannelConversionAttribution">Multi Channel Conversion Attribution</a></li>
<li><a href="https://plugins.matomo.org/AdvertisingConversionExport">Advertising Conversion Export</a></li>
<li><a href="https://plugins.matomo.org/UsersFlow">Users Flow</a></li>
</ul>

<p>Wonder how to make even more out of your Matomo? If you have multiple websites, if you resell Matomo, or if you want to create custom reports, have a look at our <a href="https://plugins.matomo.org/PremiumBundle">Premium Bundle</a>.</p>

<h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://plugins.matomo.org/img/free_trial_image.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>All of our premium features are built on top of Matomo, which means you get all the benefits and features from Matomo on top. Like data ownership, no data limits, being able to host it yourself on premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Matomo is used and trusted by over a million websites and apps. Hand-crafted with a lot of attention to detail directly by the makers of Matomo, we are sure you will love this bundle.</p>

<blockquote>
  <p>This is why we give you a free 30 day trial. We will remind you about the subscription seven days before the end of the trial. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you do. We are happy to help you get started and to hear how it changes your business or organization.</p>

<h3>Perfectly integrated and supported</h3>

<p>We are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of medium and large businesses alike.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";N;}}s:14:"isDownloadable";b:0;s:9:"changelog";a:1:{s:3:"url";s:0:"";}s:8:"consumer";a:2:{s:7:"license";N;s:8:"loginUrl";s:34:"https://shop.matomo.org/my-account";}}i:68;a:31:{s:4:"name";s:14:"QueuedTracking";s:11:"displayName";s:15:"Queued Tracking";s:5:"owner";s:10:"matomo-org";s:11:"description";s:150:"Scale your large traffic Matomo service by queuing tracking requests in Redis or MySQL for better performance and reliability when experiencing peaks.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2015-01-05 23:28:04";s:6:"donate";a:0:{}s:7:"support";a:5:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:56:"https://github.com/matomo-org/plugin-QueuedTracking/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"hello@matomo.org";s:4:"type";s:5:"email";}i:3;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:58:"https://github.com/matomo-org/plugin-QueuedTracking/issues";s:4:"type";s:3:"url";}i:4;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:51:"https://github.com/matomo-org/plugin-QueuedTracking";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:7:"tracker";i:1;s:8:"tracking";i:2;s:5:"queue";i:3;s:5:"redis";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:51:"https://github.com/matomo-org/plugin-QueuedTracking";s:11:"lastUpdated";s:19:"2023-08-09 02:24:03";s:13:"latestVersion";s:5:"5.0.2";s:12:"numDownloads";i:377560;s:11:"screenshots";a:1:{i:0;s:67:"https://plugins.matomo.org/QueuedTracking/images/5.0.2/Settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"347";s:15:"numContributors";s:2:"35";s:14:"lastCommitDate";s:19:"2023-12-21 01:43:04";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:3:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-05 05:36:06";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:2237;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:55:"https://plugins.matomo.org/QueuedTracking/5.0.0/license";}s:22:"repositoryChangelogUrl";s:68:"https://github.com/matomo-org/plugin-QueuedTracking/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:46:"/api/2.0/plugins/QueuedTracking/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-08-08 22:40:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:0;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:55:"https://plugins.matomo.org/QueuedTracking/5.0.1/license";}s:22:"repositoryChangelogUrl";s:68:"https://github.com/matomo-org/plugin-QueuedTracking/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:46:"/api/2.0/plugins/QueuedTracking/download/5.0.1";}i:2;a:10:{s:4:"name";s:5:"5.0.2";s:7:"release";s:19:"2023-08-09 02:24:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:104202;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:55:"https://plugins.matomo.org/QueuedTracking/5.0.2/license";}s:22:"repositoryChangelogUrl";s:68:"https://github.com/matomo-org/plugin-QueuedTracking/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:820:"

<p>This plugin writes all tracking requests into a <a href="http://redis.io/">Redis</a> instance or a MySQL queue instead of directly into the database.
This is useful if you have too many requests per second and your server cannot handle all of them directly (eg too many connections in nginx or MySQL).
It is also useful if you experience peaks sometimes. Those peaks can be handled much better by using this queue.
Writing a tracking request into the queue is very fast (a tracking request takes in total a few milliseconds) compared to a regular tracking request (that takes multiple hundreds of milliseconds). The queue makes sure to process the tracking requests whenever possible even if it takes a while to process all requests after there was a peak.</p>

<p>Have a look at the FAQ for more information.</p>

";s:3:"faq";s:12523:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What are the requirements for this plugin?</strong></p>

<p>We recommend to use the plugin with Redis, but it may work just as well by using the MySQL database which is already used
for Matomo anyway.</p>

<ul>
<li>Recommended <a href="http://redis.io/">Redis server 2.8+</a> - <a href="http://redis.io/topics/quickstart">Redis quickstart</a></li>
<li>Recommended <a href="https://github.com/nicolasff/phpredis">phpredis PHP extension</a> - <a href="https://github.com/nicolasff/phpredis#installingconfiguring">Install</a></li>
<li>Instead of Redis it is possible to use MySQL</li>
<li>Transactions are used and must be supported by the SQL database.</li>
</ul>

<p><strong>Where can I configure and enable the queue?</strong></p>

<p>In your Piwik instance go to "Administration =&gt; General Settings". There is a config section for this plugin.</p>

<p><strong>When will a queued tracking request be processed?</strong></p>

<p>First you should know that multiple tracking requests will be inserted into the database at once using
<a href="http://developer.piwik.org/api-reference/tracking-api#bulk-tracking">bulk tracking</a> as soon as a configurable number
of requests is queued. By default we will check whether enough requests are queued during a regular tracking request
and start processing them right after sending a response to the browser to make sure a user won\'t have to wait until
the queue has finished to process all requests. Have a look at this graph to see how it works:</p>

<p><img src="https://raw.githubusercontent.com/piwik/plugin-QueuedTracking/master/docs/How_it_works.png" alt="How it works" /></p>

<p><strong>I do not want to process queued requests within a tracking request, what shall I do?</strong></p>

<p>Don\'t worry, if this solution doesn\'t work out for you for some reason you can disable it and process all queued
requests using the <a href="http://developer.piwik.org/guides/piwik-on-the-command-line">Piwik console</a>. Just follow these steps:</p>

<ul>
<li>Disable the setting "Process during tracking request" in the Piwik UI under "Settings =&gt; Plugin Settings"</li>
<li>Setup a cronjob that executes the command <code>./console queuedtracking:process</code> for instance every minute</li>
<li>That\'s it</li>
</ul>

<p>The <code>queuedtracking:process</code> command will make sure to process all queued tracking requests whenever possible and the
command will exit as soon as there are not enough requests queued anymore. That\'s why you should setup a cronjob to start
the command every minute as it will just start processing again as soon as there are enough requests. Be aware that it won\'t
speed up processing queued requests when starting this command multiple times. Only one process will actually replay
queued requests at a time.</p>

<p>Example crontab entry that starts the processor every minute:</p>

<p><code>* * * * * cd /piwik &amp;&amp; ./console queuedtracking:process &gt;/dev/null 2&gt;&amp;1</code></p>

<p><strong>Can I keep track of the state of the queue?</strong></p>

<p>Yes, you can. Just execute the command <code>./console queuedtracking:monitor</code>. This will show the current state of the queue. To exit this command you can for example press <code>CTRL + C</code> key at the same time.</p>

<p><strong>Can I improve the speed of inserting requests from the Redis queue to the database?</strong></p>

<p>Yes, you can by adding more workers. By default only one worker is activated at a time and only one worker processes tracking requests from Redis to the database. When inserting tracking requests into the database, at time of writing this, about 80% of the time is spent in PHP and the database might be rather bored. If you have multiple CPUs available on your server you can add more workers. You can do this by going in the Piwik Admin interface to "Plugin Settings". There will be a setting "Number of queue workers". Increase this number to the number of CPUs you want to dedeciate for processing requests. Best practice is to add more workers step by step. So first increase this number to 2 and check if the tracking request insertions is fast enough for you. If not and you have more CPUs available, increase the number again.</p>

<p>When using multiple workers it might be worth to lower the number of "Number of requests to process" to eg 15 in "Plugin Settings". By default 25 requests are inserted in one step by using transactions. This means different workers might have to wait for each other. By lowering that number each worker will block the DB for less time.</p>

<p>If you process requests from the command line via <code>./console queuedtracking:process</code> make sure to always start enough workers. Each time you execute this command one worker will be started. If already enough workers are in process no new worker will be started and the command just finishes immediately.</p>

<p><strong>How fast are the requests inserted from Redis to the Database?</strong></p>

<p>This very much depends on your setup and hardware. With fast CPUs you can achieve up to 250req/s with 1 worker, 400req/s with 2 workers and 1500req/s with 8 workers (tested on a AWS c3.x2large instance).</p>

<p><strong>How should the redis server be configured?</strong></p>

<p>Make sure to have enough memory to save all tracking requests in the queue. One tracking request in the queue takes about 2KB,
20.000 tracking requests take about 50MB. All tracking requests of all websites are stored in the same queue.
There should be only one Redis server to make sure the data will be replayed in the same order as they were recorded.
If you want to configure Redis HA (High Availability) it is possible to use Redis Sentinel see further down.
We currently write into the Redis default database by default but you can configure to use a different one.</p>

<p><strong>Why do some tests fail on my local Piwik instance?</strong></p>

<p>Make sure the requirements mentioned above are met and Redis needs to run on 127.0.0.1:6379 with no password for the
integration tests to work. It will use the database "15" and the tests may flush all data it contains. Make sure
it does not contain any important data.</p>

<p><strong>What if I want to disable the queue?</strong></p>

<p>You might want to disable the queue at some point but there are still some pending requests in the queue. We recommend to
change the "Number of requests to process" in plugin settings to "1" and process all requests using the command
<code>./console queuedtracking:process</code> shortly before disabling the queue and directly afterwards. It is still possible to
process remaining request once the queue is disabled but new tracking requests won\'t be written into the queue.</p>

<p><strong>How can I access the queued data?</strong></p>

<p><strong>Redis</strong>
You can either access data on the command line via <code>redis-cli</code> or use a Redis monitor like <a href="https://github.com/ErikDubbelboer/phpRedisAdmin">phpRedisAdmin</a>.
In case you are using something like a Redis monitor make sure it is not accessible by everyone.</p>

<p><strong>MySQL</strong>
There will be some DB tables in regular Matomo DB containing <code>queuedtracking_list_*</code>. Depending on your DB prefix, the name
of the tables might be for example <code>matomo_queuedtracking_list_*</code>. Locks are stored in <code>queuedtracking_queue</code>.</p>

<p><strong>The processor won\'t start processing again as it thinks another processor is processing the data already, what can I do?</strong></p>

<p>First make sure there is actually no processor processing any requests. For example by executing the command
<code>./console queuedtracking:monitor</code>. In case you are using the command line to process tracking requests make sure there
is no processer running using the Linux command <code>ps</code>. If you are sure there is no process running you can release the lock
by executing the command <code>./console queuedtracking:lock-status</code>. This will output more information which locks are in use and how to unlock them. Afterwards everything should work as normal again.
You should actually never have to do this as a lock automatically expires after a while. It just may take a while depending
on the amount of requests you are importing.</p>

<p><strong>How can I test my Redis / MySQL / QueuedTracking setup in case I\'m getting errors?</strong></p>

<p>There is a command to test some the connection to Redis as well as some needed features: <code>./console queuedtracking:test</code>.</p>

<p>It might directly give you an error message if something goes wrong that helps you to resolve the issue. If your queue
is always locked you might be as well interested in executing <code>.console queuedtracking:lock-status</code>.</p>

<p><strong>How can I debug in case something goes wrong?</strong></p>

<ul>
<li>Use the command <code>./console queuedtracking:monitor</code> to view the current state of all workers</li>
<li>Use the command <code>./console queuedtracking:lock-status</code> to view the current state of all locks</li>
<li>Set the option <code>-vvv</code> when processing via <code>./console queuedtracking:process -vvv</code> to enable the tracker debug mode for this run. This will print detailed information to screen.</li>
<li>Enable tracker debug mode in <code>config.ini.php</code> via <code>[Tracker] debug=1</code> if processing requests during tracking is enabled.</li>
<li>Use the command <code>./console queuedtracking:print-queued-requests</code> to view the next requests to process in each queue. If you execute this command twice within 1-10 minutes, and it outputs the same, the queue is not being processed most likely indicating a problem.</li>
<li>You can add the tracking parameter <code>&amp;queuedtracking=0</code> to the tracking request to insert a tracking request directly into the database instead of into the queued tracking handler</li>
<li>Plugin version 4.0.7 and greater logs a warning level message containing the error and has a new <code>log_failed_tracking_request_body</code> configuration. The new config is only for debugging purposes as always recording the request body for failed requests could be a privacy concern and considerably increase the size of the log file. To use the config, you would edit your <code>config/config.ini.php</code> to look something like the following:</li>
</ul>

<pre><code>[QueuedTracking]
log_failed_tracking_request_body = 1
</code></pre>

<p><strong>I am using the Log Importer in combination with Queued Tracking, is there something to consider?</strong></p>

<p>Yes, we recommend to set the "Number of requests to process" to <code>1</code> as the log importer usually sends multiple requests at once using bulk tracking already.</p>

<p><strong>How can I configure the QueuedTracking plugin to use Redis Sentinel?</strong></p>

<p>You can enable the Sentinel in the plugin settings. Make sure to specify the correct Sentinel "master" name.</p>

<p>When using Sentinel, the <code>phpredis</code> extension is not needed as it uses a PHP class to connect to your Redis. Please note that calls to Redis might be a little bit slower.</p>

<p><strong>Can I configure multiple Sentinel servers?</strong></p>

<p>Yes, once Sentinel is enabled you can configure multiple servers by specifying multiple hosts and ports comma separated via the UI.</p>

<p><strong>Can I be notified when a queue reaches a certain threshold?</strong></p>

<p>Yes, you can optionally receive an email when the number of requests queued in a single queue reaches a configured
threshold. You can configure this in your <code>config/config.ini.php</code> config file using the following configuration:</p>

<pre><code>[QueuedTracking]
notify_queue_threshold_emails[] = example@example.org
notify_queue_threshold_single_queue = 250000
</code></pre>

<p><strong>Are there any known issues?</strong></p>

<ul>
<li>In case you are using bulk tracking the bulk tracking response varies compared to the regular one. We will always return
either an image or a 204 HTTP response code in case the parameter <code>send_image=0</code> is sent.</li>
<li>By design this plugin can delay the insertion of tracking requests causing real time plugins to not show the actual data since
under load tracking requests may take a while until they are replayed.</li>
</ul>";s:13:"documentation";s:0:"";s:9:"changelog";s:4632:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>5.0.2
- Fix merge issue in previous release</p>

<p>5.0.1
- Compatibility with Matomo 5.0.0-b4</p>

<p>5.0.0
- Compatibility with Matomo 5.0</p>

<p>4.0.7
- Improved error handling for tracking requests</p>

<p>4.0.6
- Started using flushDB instead of flushAll for Redis</p>

<p>4.0.5
- Translation changes</p>

<p>4.0.4
- Clarify inline help for "Queue enabled" config setting</p>

<p>4.0.3
- Replace Redis::delete() with Redis::del() and fix a warning</p>

<p>4.0.2
- Support new option <code>--force-num-requests-process-at-once</code> to the process command</p>

<p>4.0.1
- Improve compatibility with PHP 7.4</p>

<p>4.0.0
- Compatibility with Matomo 4.0</p>

<p>3.3.5
- Improve update script to first add primary key and then remove index</p>

<p>3.3.4
- Use primary key instead of a unique index for mysql backend for better replication</p>

<p>3.3.3
- Add possibility to ignore queued tracking handler and track request directly into the database</p>

<p>3.3.2
- Send branded HTML email</p>

<p>3.3.1
- Support MySQLi adapter</p>

<p>3.3.0 
- When using 3rd party cookies, the 3rd party cookie value will not be overwritten by local site visitor id values</p>

<p>3.2.1
- Faster queue locking
- More debug output while processing</p>

<p>3.2.0
- Added possibility to use a MySQL backend instead of redis
- New option <code>queue-id</code> for the <code>queuedtracking:process</code> command which may improve processing speed as the command would only focus on one queue instead of trying to get the lock for a random queue.
- Various other minor performance improvements
- New feature: Get notified by email when a single queue reaches a specific threshold</p>

<p>3.0.2</p>

<ul>
<li>Ensure do not track cookie works</li>
</ul>

<p>3.0.1</p>

<ul>
<li>Added possibility to define a unix socket instead of a host and path.</li>
</ul>

<p>3.0.0</p>

<ul>
<li>Compatibility with Piwik 3.0</li>
</ul>

<p>0.3.2</p>

<ul>
<li>Fixes a bug in the lock-status command where it may report a queue as locked while it was not</li>
</ul>

<p>0.3.1</p>

<ul>
<li>Fixed Redis Sentinel was not working properly. Sentinel can be now configured via the UI and not via config. Also
multiple servers can be configured now.</li>
</ul>

<p>0.3.0</p>

<ul>
<li>Added support to use Redis Sentinel for automatic failover</li>
</ul>

<p>0.2.6</p>

<ul>
<li>When a request takes more than 2 seconds and debug tracker mode is enabled, log information about the request.</li>
</ul>

<p>0.2.5</p>

<ul>
<li>Use a better random number generator if available on the system to more evenly process queues.</li>
</ul>

<p>0.2.4</p>

<ul>
<li>The command <code>queuedtracking:monitor</code> will now work even when the queue is disabled</li>
</ul>

<p>0.2.3</p>

<ul>
<li>Added more tests and information to the <code>queuedtracking:test</code> command</li>
<li>It is now possible to configure up to 16 workers</li>
</ul>

<p>0.2.2</p>

<ul>
<li>Improved output for the new <code>test</code> command</li>
<li>New FAQ entries</li>
</ul>

<p>0.2.1</p>

<ul>
<li>Added a new command to test the connection to Redis. To test yor connection use <code>./console queuedtracking:test</code></li>
</ul>

<p>0.2.0</p>

<ul>
<li>Compatibility w/ Piwik 2.15.</li>
</ul>

<p>0.1.6</p>

<ul>
<li>For bulk requests we do no longer skip all tracking requests after a tracking request that has an invalid <code>idSite</code> set. The same behaviour was changed in Piwik 2.14 for regular bulk requests.</li>
</ul>

<p>0.1.5</p>

<ul>
<li>Fixed a notice in case an incompatible Redis version is used.</li>
</ul>

<p>0.1.4</p>

<ul>
<li>It is now possible to start multiple workers for faster insertion from Redis to the database. This can be configured in the "Plugin Settings"</li>
<li>Monitor does now output information whether a processor is currently processing the queue.</li>
<li>Added a new command <code>queuedtracking:lock-status</code> that outputs the status of each queue lock. This command can also unlock a queue by using the option <code>--unlock</code>.</li>
<li>Added a new command <code>queuedtracking:print-queued-requests</code> that outputs the next requests to process in each queue.</li>
<li>If someone passes the option <code>-vvv</code> to <code>./console queuedtracking:process</code> the Tracker debug mode will be enabled and additional information will be printed to the screen.</li>
</ul>

<p>0.1.2</p>

<ul>
<li>Updated description on Marketplace</li>
</ul>

<p>0.1.0</p>

<ul>
<li>Initial Release</li>
</ul>";}s:8:"download";s:46:"/api/2.0/plugins/QueuedTracking/download/5.0.2";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:67:"https://plugins.matomo.org/QueuedTracking/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:69;a:31:{s:4:"name";s:9:"Bandwidth";s:11:"displayName";s:9:"Bandwidth";s:5:"owner";s:10:"matomo-org";s:11:"description";s:124:"Monitor Bandwidth for each page, download, and measure overall traffic in bytes. For requirements check out the description.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2015-02-18 03:50:04";s:6:"donate";a:0:{}s:7:"support";a:5:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:51:"https://github.com/matomo-org/plugin-Bandwidth/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"hello@matomo.org";s:4:"type";s:5:"email";}i:3;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:53:"https://github.com/matomo-org/plugin-Bandwidth/issues";s:4:"type";s:3:"url";}i:4;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:46:"https://github.com/matomo-org/plugin-Bandwidth";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:9:"bandwidth";i:1;s:8:"filesize";i:2;s:4:"size";i:3;s:8:"download";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:46:"https://github.com/matomo-org/plugin-Bandwidth";s:11:"lastUpdated";s:19:"2023-08-08 22:50:03";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:78478;s:11:"screenshots";a:3:{i:0;s:63:"https://plugins.matomo.org/Bandwidth/images/5.0.1/Downloads.png";i:1;s:63:"https://plugins.matomo.org/Bandwidth/images/5.0.1/Pageviews.png";i:2;s:70:"https://plugins.matomo.org/Bandwidth/images/5.0.1/Visitor_Overview.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"250";s:15:"numContributors";s:2:"21";s:14:"lastCommitDate";s:19:"2023-12-21 01:44:02";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-04 02:04:04";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:46;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/Bandwidth/5.0.0/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-Bandwidth/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:41:"/api/2.0/plugins/Bandwidth/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-08-08 22:50:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b4,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:2465;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/Bandwidth/5.0.1/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-Bandwidth/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:468:"

<p>This plugin allows you to measure the bandwidth that was used by each page view or download. 
It enriches existing reports and APIs to show the used bandwidth.</p>

<p>This feature only works when using the plugin in combination with our <a href="https://matomo.org/log-analytics/">Log Analytics tracking method</a> or if you use our HTTP Tracking API directly. It does not work with our standard JavaScript or image tracker. Find more information in the FAQ.</p>";s:3:"faq";s:2322:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>How can I track the bandwidth?</strong></p>

<p>Log analytics:</p>

<p>The bandwidth will be automatically tracked when using the <a href="http://piwik.org/log-analytics/">log importer</a> as long as 
your log format is supported.</p>

<p>Tracking API:</p>

<p>If you are using the <a href="http://developer.piwik.org/api-reference/tracking-api">HTTP Tracking API</a> 
you can specify the bandwidth in bytes by appending the URL parameter <code>bw_bytes=1234</code> to the tracking URL. In this case 
a bandwidth of 1234 bytes will be tracked.</p>

<p><strong>Which actions support tracking of bandwidth?</strong></p>

<p>Pageviews (Page URLs and Page Titles) as well as Downloads.</p>

<p><strong>In which reports is the used bandwidth displayed?</strong></p>

<ul>
<li>Page URLs</li>
<li>Page Titles</li>
<li>Downloads</li>
</ul>

<p>All reports will show a column <code>Average Bandwidth</code> and <code>Sum Bandwidth</code></p>

<p>The "Visitors =&gt; Overview" report shows a total bandwidth overview and it is possible to view the evolution over period.</p>

<p><strong>Which APIs does this plugin define or enrich?</strong></p>

<p>There is a report <code>Bandwidth.get</code> returning the total bandwidth (across all actions).</p>

<p>It also enriches varies reports such as <code>Actions.get</code>, <code>Actions.getPageUrls</code>, <code>Actions.getPageTitles</code> and <code>Actions.getDownloads</code>.
For example it adds columns such as <code>avg_bandwidth</code>, <code>sum_bandwidth</code>, <code>min_bandwidth</code>, <code>max_bandwidth</code> to each page view.</p>

<p><strong>Why are the bandwidth columns are not displayed in the UI?</strong></p>

<p>Make sure the Bandwidth plugin is activated by going to <code>Administration =&gt; Plugins</code>. Also the bandwidth columns are not 
displayed if no bandwidth was tracked in the current selected month.</p>

<p><strong>Is it possible to track bandwidth using the Matomo (Piwik) JavaScript Tracker?</strong></p>

<p>Yes, you can set the <code>bw_bytes</code> value manually in JavaScript using <code>_paq.push([\'appendToTrackingUrl\', \'bw_bytes=1234\']);</code> to track the bandwidth of your pages.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:654:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>5.0.1 Compatibility with Matomo 5.0.0-b4</li>
<li>5.0.0 Compatibility with Matomo 5.0</li>
<li>4.0.5 Reused Dimension TYPE_ constants</li>
<li>4.0.4 Added metric semantics type</li>
<li>4.0.3 Updated expected test files</li>
<li>4.0.2 Added support for showing evolution values on sparklines</li>
<li>4.0.1 Compatibility with Matomo 4.0</li>
<li>4.0.0 Compatibility with Matomo 4.0</li>
<li>3.2.0 Support for comparisons view.</li>
<li>3.0.0 Compatibility with Piwik 3.0</li>
<li>0.1.0 Initial Release</li>
</ul>";}s:8:"download";s:41:"/api/2.0/plugins/Bandwidth/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:62:"https://plugins.matomo.org/Bandwidth/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:70;a:31:{s:4:"name";s:9:"Migration";s:11:"displayName";s:9:"Migration";s:5:"owner";s:10:"matomo-org";s:11:"description";s:83:"Migrate/copy any measurable (site, app, roll-up) from one Matomo to another Matomo.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2019-01-23 21:04:04";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:53:"https://github.com/matomo-org/plugin-Migration/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:46:"https://github.com/matomo-org/plugin-Migration";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:7:"website";i:1;s:9:"migration";i:2;s:4:"site";i:3;s:4:"move";i:4;s:10:"measurable";i:5;s:7:"migrate";i:6;s:4:"copy";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:46:"https://github.com/matomo-org/plugin-Migration";s:11:"lastUpdated";s:19:"2023-07-31 04:22:03";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:16193;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"85";s:15:"numContributors";s:1:"6";s:14:"lastCommitDate";s:19:"2023-11-13 21:15:30";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-08 02:04:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:20;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-Migration/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:41:"/api/2.0/plugins/Migration/download/5.0.0";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-07-31 04:22:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1545;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/matomo-org/plugin-Migration/commits/5.0.0-b2";s:10:"readmeHtml";a:4:{s:11:"description";s:4815:"

<p>Lets you copy a Matomo Measurable (Website, Mobile App, ...) including all tracked raw data and generated reports
from one Matomo instance to another Matomo instance.</p>

<h3>Requirements</h3>

<ul>
<li>You need access to source Matomo server and be able to execute a command on the console.</li>
<li>You need access to target Matomo database.</li>
<li>Make sure you have updated both Matomo servers to the same Matomo version or have at least the same DB structure.</li>
<li>Wanting to migrate from Matomo On-Premise to Matomo for WordPress? <a href="https://matomo.org/faq/wordpress/how-do-i-migrate-all-my-data-from-matomo-on-premise-to-matomo-for-wordpress/">Learn more about this here</a></li>
</ul>

<h3>Usage</h3>

<p>Before executing the migration command we always recommend to make a backup of the target database and ideally also test
it first with the <code>dry-run</code> flag (dry-run is faster but can take a long time as well and will give you an idea of how long migration
will take).</p>

<p><strong>NOTE:</strong> The migration tool will create a <strong>new website</strong> in the target Matomo, using the next available <code>siteid</code>, and copy all the data from the source website to this newly created target website.
Remember to update the tracking code to match the new <code>siteid</code>.</p>

<p>To start a migration execute the <code>migration:measurable</code> command, example:</p>

<pre><code> ./console migration:measurable --source-idsite=1 --target-db-host=192.168.1.1 --target-db-username=root --target-db-password=secure --target-db-name=piwik2
</code></pre>

<p>Optional parameters are:</p>

<pre><code> --target-db-prefix=piwik_      Target database table prefix (default: "")
 --target-db-port=3306          Target database port (default: "3306")
 --skip-logs                    Skip migration of logs (Raw tracking data)
 --skip-archives                Skip migration of archives (Report data)
 --dry-run                      Enable debug mode where it does not insert anything.
 --disable-db-transactions      Disable the usage of MySQL database transactions
</code></pre>

<p>Both Matomo instances may be on different servers with proper firewall rules that restrict database access on target instance.
In such case, the easiest way for source server to access target database is to create a <a href="https://www.ssh.com/academy/ssh/tunneling">ssh tunnel</a> on new port (e.g. 3307) in another terminal.
Then, execute to the above command with <code>--target-db-port=3307</code> instead to access port 3306 on target host. Example:</p>

<pre><code>ssh -NL 3307:localhost:3306 targetuser@targethost
</code></pre>

<p>This command should be run on the source Matomo server. It essentially maps port 3307 of the server to port 3306 of the server you are migrating to and is specified by <code>targethost</code>.
The <code>targethost</code> should be replaced by a valid IP or domain name referencing the server you are migrating to and must be accessible to the server that you are migrating from. So, the source server should be able to <a href="https://www.redhat.com/sysadmin/ping-usage-basics">ping</a> the target server.
The <code>targetuser</code> should be replaced with a valid SSH user account that has been setup on the server that you are migrating to. It\'s preferable to setup <a href="https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent">an SSH key</a> on the source server and use <a href="https://www.ssh.com/academy/ssh/copy-id">the ssh-copy-id command</a> to add it to the authorized keys for the <code>targetuser</code>, but using the user\'s password should work too.</p>

<p>An alternative to using an SSH tunnel is to make a backup of your MySQL database, copy it to the new server, import it into a temporary database, and then migrate using that database name.
Remember to delete the temporary database after completing the migration, and checking that everything works.
For more information about this process please refer to: <a href="https://matomo.org/faq/how-to-install/faq_76/">How can I move Matomo from one server to another, also migrating the data from one mysql server to another?</a>.</p>

<p>Matomo instance and files in folders may be owned by a special user (e.g. <code>www-data</code>) with restricted ssh access.
The abovementioned may be run either under root (e.g. <code>sudo ...</code>), or the special user (<code>sudo -u www-data ...</code>).</p>

<p>Please note that the migration can take a while depending on the amount of data that needs to be copied.</p>

<p>No data from the original Matomo instance will be deleted, only new data will be added to the new Matomo instance.</p>

<p>No premium feature data is currently being migrated.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:978:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>5.0.1</h3>

<ul>
<li>Second beta release</li>
</ul>

<h3>5.0.0</h3>

<ul>
<li>Compatibility with Matomo 5</li>
</ul>

<h3>4.0.3</h3>

<ul>
<li>Security improvements in query builder</li>
</ul>

<h3>4.0.2</h3>

<ul>
<li>Support export from Matomo for WordPress</li>
</ul>

<h3>4.0.1</h3>

<ul>
<li>Update sequence table if needed</li>
</ul>

<h3>4.0.0</h3>

<ul>
<li>Compatibility with Matomo 4</li>
</ul>

<h3>3.0.5</h3>

<ul>
<li>Fix an issue in copying visits</li>
</ul>

<h3>3.0.4</h3>

<ul>
<li>Fix possible duplicate entry error while migrating archives</li>
</ul>

<h3>3.0.3</h3>

<ul>
<li>Migrate segments &amp; annotations</li>
</ul>

<h3>3.0.2</h3>

<ul>
<li>More logging</li>
</ul>

<h3>3.0.1</h3>

<ul>
<li>Fix possible notice when Custom Dimensions is not installed</li>
</ul>

<h3>3.0.0</h3>

<ul>
<li>Initial version</li>
</ul>";}s:8:"download";s:41:"/api/2.0/plugins/Migration/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:62:"https://plugins.matomo.org/Migration/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:71;a:31:{s:4:"name";s:19:"DiagnosticsExtended";s:11:"displayName";s:20:"Diagnostics Extended";s:5:"owner";s:8:"Findus23";s:11:"description";s:39:"Additional checks for the System Check.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2021-04-12 17:10:04";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:61:"https://github.com/Findus23/plugin-DiagnosticsExtended/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:54:"https://github.com/Findus23/plugin-DiagnosticsExtended";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:9:"debugging";i:1;s:12:"system check";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:54:"https://github.com/Findus23/matomo-DiagnosticsExtended";s:11:"lastUpdated";s:19:"2023-07-22 21:44:02";s:13:"latestVersion";s:5:"0.2.0";s:12:"numDownloads";i:7675;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"82";s:15:"numContributors";s:2:"18";s:14:"lastCommitDate";s:19:"2023-12-22 05:48:06";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.2.0";s:7:"release";s:19:"2023-07-22 21:44:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:300;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:68:"https://github.com/Findus23/matomo-DiagnosticsExtended/commits/0.2.0";s:10:"readmeHtml";a:4:{s:11:"description";s:776:"

<p>This plugin adds a collection of new checks to the Matomo System Check page. They are a bit <strong>more experimental</strong> and can be more likely to give incorrect results, but might help you find issues with your Matomo setup.</p>

<p>Please report back any unexpected results you come across or other feedback so that the checks can be improved and possible integrated into Matomo core once they work reliably.</p>

<h3>Currently supported tests:</h3>

<ul>
<li>curl version check</li>
<li>MySQL/MariaDB version check</li>
<li>matomo.js check (Gzip, MIME-Type)</li>
<li>Opcache check (enabled and set up correctly)</li>
<li>php.ini settings</li>
<li>php running as root</li>
<li>php version check</li>
<li>check if secret files are protected by webserver</li>
</ul>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:1268:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>0.2.0</h3>

<p>Matomo 5 compatibility</p>

<h3>0.1.9</h3>

<ul>
<li>removed URLCheck as a similar test is now part of Matomo</li>
<li>improved matomo.js check thanks to @d--j</li>
<li>improved and added translations thanks to the <a href="https://hosted.weblate.org/credits/matomo/communityplugin-diagnosticsextended/">contributors on Weblate</a></li>
</ul>

<h3>0.1.8</h3>

<p>Add Greek translation</p>

<h3>0.1.7</h3>

<p>Add German and Turkish translation</p>

<h3>0.1.6</h3>

<p>skip user check if <code>posix_getuid()</code> doesn\'t exist</p>

<h3>0.1.5</h3>

<p>fix a warning when <code>opcache_get_status()</code> is not allowed</p>

<h3>0.1.4</h3>

<p>fix the repository URL</p>

<h3>0.1.3 (unpublished)</h3>

<ul>
<li>remove logged warning from PHP check</li>
<li>don\'t fail if headers are missing</li>
<li>skip checks when <code>enable_internet_features = 0</code> is set</li>
<li>also accept brotli compression</li>
</ul>

<h3>0.1.2</h3>

<ul>
<li>fix PHP version check</li>
<li>add version output to curl check</li>
</ul>

<h3>0.1.1</h3>

<p>fix incorrect translations</p>

<h3>0.1.0</h3>

<p>first version released</p>";}s:8:"download";s:51:"/api/2.0/plugins/DiagnosticsExtended/download/0.2.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:72:"https://plugins.matomo.org/DiagnosticsExtended/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:72;a:31:{s:4:"name";s:21:"QuickExcludeVisitorIP";s:11:"displayName";s:24:"Quick Exclude Visitor IP";s:5:"owner";s:8:"Findus23";s:11:"description";s:80:"Adds a button to Visitor Profile to quickly add them to the list of ignored IPs.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2020-05-22 14:44:03";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:63:"https://github.com/Findus23/plugin-QuickExcludeVisitorIP/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:56:"https://github.com/Findus23/plugin-QuickExcludeVisitorIP";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:2:"ip";i:1;s:6:"ignore";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:56:"https://github.com/Findus23/plugin-QuickExcludeVisitorIP";s:11:"lastUpdated";s:19:"2023-07-22 21:32:02";s:13:"latestVersion";s:5:"0.2.0";s:12:"numDownloads";i:5481;s:11:"screenshots";a:1:{i:0;s:77:"https://plugins.matomo.org/QuickExcludeVisitorIP/images/0.2.0/Visitor_Log.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"4";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-07-22 21:30:40";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.2.0";s:7:"release";s:19:"2023-07-22 21:32:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:218;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:70:"https://github.com/Findus23/plugin-QuickExcludeVisitorIP/commits/0.2.0";s:10:"readmeHtml";a:4:{s:11:"description";s:282:"

<p>You want to ignore the visits of your colleagues with static IP addresses, but don\'t copy all of them manually?</p>

<p>This plugin adds a <code>ignore</code> button to the visitor log that immediately adds the IP Address of the visitor to the global Matomo IP ignore list.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:285:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>0.2.0</h3>

<p>Matomo 5 compatibility</p>

<p>release version</p>

<h3>0.1.1</h3>

<p>release version</p>

<h3>0.1.0</h3>

<p>first beta version</p>";}s:8:"download";s:53:"/api/2.0/plugins/QuickExcludeVisitorIP/download/0.2.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:74:"https://plugins.matomo.org/QuickExcludeVisitorIP/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:73;a:31:{s:4:"name";s:13:"ProfileAvatar";s:11:"displayName";s:14:"Profile Avatar";s:5:"owner";s:8:"Findus23";s:11:"description";s:44:"Show a random avatar on the Visitor Profile.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2020-05-20 08:58:04";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:55:"https://github.com/Findus23/plugin-ProfileAvatar/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:48:"https://github.com/Findus23/plugin-ProfileAvatar";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:15:"Visitor Profile";i:1;s:15:"profile picture";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:48:"https://github.com/Findus23/plugin-ProfileAvatar";s:11:"lastUpdated";s:19:"2023-07-22 21:26:03";s:13:"latestVersion";s:5:"0.2.0";s:12:"numDownloads";i:9318;s:11:"screenshots";a:2:{i:0;s:73:"https://plugins.matomo.org/ProfileAvatar/images/0.2.0/Visitor_Profile.png";i:1;s:65:"https://plugins.matomo.org/ProfileAvatar/images/0.2.0/avatars.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"102";s:15:"numContributors";s:2:"18";s:14:"lastCommitDate";s:19:"2023-12-19 07:20:34";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.2.0";s:7:"release";s:19:"2023-07-22 21:26:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1407;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:54:"https://plugins.matomo.org/ProfileAvatar/0.2.0/license";}s:22:"repositoryChangelogUrl";s:62:"https://github.com/Findus23/plugin-ProfileAvatar/commits/0.2.0";s:10:"readmeHtml";a:4:{s:11:"description";s:954:"

<p>Are you tired of always seeing the same placeholder profile picture in the Vistitor Profile?</p>

<p>This plugin creates randomly generated user avatars based on the visitorID inspired by classical identicons:</p>

<ul>
<li>Cat Avatar (based on <a href="https://framagit.org/Deevad/cat-avatar-generator/">cat-avatar-generator</a> by <a href="https://www.davidrevoy.com/">David Revoy</a>)</li>
<li>Bird Avatar (the same with birds)</li>
<li>MonsterID (based on <a href="https://www.splitbrain.org/projects/monsterid">MonsterID</a> by Andreas Gohr)</li>
<li>Identicon (based on <a href="https://github.com/stewartlord/identicon.js">indenticon.js</a> by Stewart Lord)</li>
<li>Blockies (based on <a href="https://github.com/download13/blockies">blockies</a> by Erin Dachtler)</li>
</ul>

<p>In the Personal Settings every use can choose which avatar type they want to see. 
No data is shared with other services as all images are generated locally.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:494:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>0.2.0</h3>

<p>Matomo 5 compatibility</p>

<h3>0.1.6</h3>

<p>add French, Japanese, Italian, Portuguese, Portuguese (Brazil) and Ukrainian translations</p>

<h3>0.1.5</h3>

<p>add German, Greek and Turkish translations</p>

<h3>0.1.2</h3>

<p>Matomo 4 compatibility</p>

<h3>0.1.1</h3>

<p>fix invalid plugin.json</p>

<h3>0.1.0</h3>

<p>initial release</p>";}s:8:"download";s:45:"/api/2.0/plugins/ProfileAvatar/download/0.2.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:66:"https://plugins.matomo.org/ProfileAvatar/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:74;a:31:{s:4:"name";s:16:"PasswordVerifier";s:11:"displayName";s:17:"Password Verifier";s:5:"owner";s:8:"Findus23";s:11:"description";s:89:"Reject insecure passwords by searching for their hash in the haveibeenpwned.com database.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2018-11-06 13:30:05";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:58:"https://github.com/Findus23/plugin-PasswordVerifier/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:51:"https://github.com/Findus23/plugin-PasswordVerifier";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:3:{i:0;s:8:"security";i:1;s:9:"passwords";i:2;s:14:"haveibeenpwned";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:51:"https://github.com/Findus23/plugin-PasswordVerifier";s:11:"lastUpdated";s:19:"2023-07-22 21:20:03";s:13:"latestVersion";s:5:"0.3.0";s:12:"numDownloads";i:10909;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"83";s:15:"numContributors";s:2:"24";s:14:"lastCommitDate";s:19:"2023-12-19 07:21:11";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.3.0";s:7:"release";s:19:"2023-07-22 21:20:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1339;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:57:"https://plugins.matomo.org/PasswordVerifier/0.3.0/license";}s:22:"repositoryChangelogUrl";s:65:"https://github.com/Findus23/plugin-PasswordVerifier/commits/0.3.0";s:10:"readmeHtml";a:4:{s:11:"description";s:740:"

<p>This plugin sends the first 5 characters of the SHA1 hash of the password to the <a href="https://haveibeenpwned.com/Passwords">haveibeenpwned.com database</a> of over 500 million passwords exposed in data breaches. If the password is found, Matomo rejects it and asks the user to use a more secure password.</p>

<p>This plugin only acts on passwords changes and can\'t access existing passwords as they are stored securely hashed by Matomo.</p>

<h3>Disclaimer</h3>

<p><strong>Attention</strong>: This is a beta plugin. Please don\'t use it in security critical environments without checking the correctness of <a href="https://github.com/Findus23/plugin-PasswordVerifier/blob/master/PasswordVerifier.php">the source</a> yourself.</p>";s:3:"faq";s:359:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>This plugin is rejecting too many passwords. Can I set a threshold of occurances required to reject a password?</strong></p>

<p>Not yet, but it would be very easy to add. If you are interested, just contact me.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:612:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>0.3.0</h3>

<p>Matomo 5 compatibility</p>

<h3>0.2.3</h3>

<p>Translation updates</p>

<h3>0.2.2</h3>

<p>add French, Japanese, Italian, Portuguese, Portuguese (Brazil) and Ukrainian translations</p>

<h3>0.2.1</h3>

<p>Add German, Greek and French translations</p>

<h3>0.2.0</h3>

<p>Matomo 4 compatibility</p>

<h3>0.1.2</h3>

<p>add French translation (by @darkvodka)</p>

<h3>0.1.1</h3>

<p>add disclaimer in description</p>

<h3>0.1.0</h3>

<p>first working version</p>";}s:8:"download";s:48:"/api/2.0/plugins/PasswordVerifier/download/0.3.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:69:"https://plugins.matomo.org/PasswordVerifier/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:75;a:31:{s:4:"name";s:16:"ExcludeCountries";s:11:"displayName";s:17:"Exclude Countries";s:5:"owner";s:8:"Findus23";s:11:"description";s:52:"Exclude or include visitors from selected countries.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2020-09-01 16:24:03";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:58:"https://github.com/Findus23/plugin-ExcludeCountries/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:51:"https://github.com/Findus23/plugin-ExcludeCountries";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:8:"tracking";i:1;s:11:"geolocation";i:2;s:6:"filter";i:3;s:9:"countries";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:51:"https://github.com/Findus23/plugin-ExcludeCountries";s:11:"lastUpdated";s:19:"2023-07-22 21:10:02";s:13:"latestVersion";s:5:"0.3.0";s:12:"numDownloads";i:10672;s:11:"screenshots";a:1:{i:0;s:69:"https://plugins.matomo.org/ExcludeCountries/images/0.3.0/settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"12";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-07-22 21:08:31";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.3.0";s:7:"release";s:19:"2023-07-22 21:10:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1415;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:65:"https://github.com/Findus23/plugin-ExcludeCountries/commits/0.3.0";s:10:"readmeHtml";a:4:{s:11:"description";s:802:"

<p>This plugin allows you to only track visitors from specific countries (or all but specific countries) and discards data from everyone else, reducing the amound of data stored in the database.</p>

<p>You can verify that the plugin works by temporarily enabling <a href="https://developer.matomo.org/api-reference/tracking-api#debugging-the-tracker">tracking debugging</a> and checking the log.</p>

<h3>Important Limitations:</h3>

<ul>
<li>This plugin needs to check the geolocation while recieving the data. This means that every visit is geolocated twice which might cause (a small amount of) additional server load</li>
<li>This plugin depends on your geolocation to be properly set up in Matomo. If the geolocation returns incorrect result, this plugin discards incorrect visitors.</li>
</ul>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:405:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>0.3.0</h3>

<p>Matomo 5 compatibility</p>

<h3>0.2.0</h3>

<p>Matomo 4 compatibility</p>

<h3>0.1.3</h3>

<p>fix bug causing no countries to be selected</p>

<h3>0.1.2</h3>

<p>fix release</p>

<h3>0.1.1</h3>

<p>fix release</p>

<h3>0.1.0</h3>

<p>Initial release</p>";}s:8:"download";s:48:"/api/2.0/plugins/ExcludeCountries/download/0.3.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:69:"https://plugins.matomo.org/ExcludeCountries/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:76;a:31:{s:4:"name";s:17:"DevelopmentToogle";s:11:"displayName";s:18:"Development Toogle";s:5:"owner";s:8:"Findus23";s:11:"description";s:48:"Quickly enable and disable the development mode.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2019-09-09 21:04:03";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:59:"https://github.com/Findus23/plugin-DevelopmentToogle/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:52:"https://github.com/Findus23/plugin-DevelopmentToogle";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:11:"development";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:52:"https://github.com/Findus23/plugin-DevelopmentToogle";s:11:"lastUpdated";s:19:"2023-07-22 20:58:02";s:13:"latestVersion";s:5:"0.3.0";s:12:"numDownloads";i:5659;s:11:"screenshots";a:1:{i:0;s:72:"https://plugins.matomo.org/DevelopmentToogle/images/0.3.0/screenshot.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"52";s:15:"numContributors";s:2:"18";s:14:"lastCommitDate";s:19:"2023-12-19 07:20:43";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.3.0";s:7:"release";s:19:"2023-07-22 20:58:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:109;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:66:"https://github.com/Findus23/plugin-DevelopmentToogle/commits/0.3.0";s:10:"readmeHtml";a:4:{s:11:"description";s:282:"

<p>This plugin adds a new icon to the main navbar for admins that quickly toogles the development features.</p>

<p>Disabling the development mode makes Matomo far quicker as caches aren\'t disabled.</p>

<pre><code>[Development]
enabled = 0
disable_merged_assets = 0
</code></pre>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:541:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>0.3.0</h3>

<p>Matomo 5 compatibility</p>

<h3>0.2.3</h3>

<p>add Japanese, Italian, Chinese, Portuguese, Portuguese (Brazil) and Ukrainian translations</p>

<h3>0.2.2</h3>

<p>Add French, German, Treek and Turkish translations</p>

<h3>0.2.1</h3>

<p>fix order in top menu</p>

<h3>0.2.0</h3>

<p>Matomo 4 compatibility</p>

<h3>0.1.1</h3>

<p>fix description</p>

<h3>0.1.0</h3>

<p>initial version</p>";}s:8:"download";s:49:"/api/2.0/plugins/DevelopmentToogle/download/0.3.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:70:"https://plugins.matomo.org/DevelopmentToogle/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:77;a:31:{s:4:"name";s:21:"CustomiseTranslations";s:11:"displayName";s:22:"Customise Translations";s:5:"owner";s:8:"Findus23";s:11:"description";s:69:"This plugin allows you to modify all translateable strings in Matomo.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2018-10-26 19:32:03";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:63:"https://github.com/Findus23/plugin-CustomiseTranslations/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:56:"https://github.com/Findus23/plugin-CustomiseTranslations";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:8:"language";i:1;s:13:"customisation";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:56:"https://github.com/Findus23/plugin-CustomiseTranslations";s:11:"lastUpdated";s:19:"2023-07-22 20:46:02";s:13:"latestVersion";s:5:"1.1.0";s:12:"numDownloads";i:7382;s:11:"screenshots";a:1:{i:0;s:74:"https://plugins.matomo.org/CustomiseTranslations/images/1.1.0/settings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"48";s:15:"numContributors";s:2:"17";s:14:"lastCommitDate";s:19:"2023-12-24 18:28:33";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"1.1.0";s:7:"release";s:19:"2023-07-22 20:46:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:219;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:70:"https://github.com/Findus23/plugin-CustomiseTranslations/commits/1.1.0";s:10:"readmeHtml";a:4:{s:11:"description";s:80:"

<p>This plugin allows you to quickly replace translatable texts in Matomo.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:560:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>1.1.0</h2>

<p>Matomo 5 compatibility</p>

<h2>1.0.3</h2>

<p>add French, Japanese, Portuguese, Portuguese (Brazil) and Ukrainian translations</p>

<h2>1.0.2</h2>

<p>add German, Greek, Italian and Turkish translations</p>

<h2>1.0.1</h2>

<p>fix DI (thanks to @Aramics)</p>

<h2>1.0.0</h2>

<p>Matomo 4 compatibility</p>

<h2>0.2.0</h2>

<p>Allow translating "General", "Mobile" and "RowEvolution" translation strings.</p>";}s:8:"download";s:53:"/api/2.0/plugins/CustomiseTranslations/download/1.1.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:74:"https://plugins.matomo.org/CustomiseTranslations/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:78;a:31:{s:4:"name";s:14:"ClassicCounter";s:11:"displayName";s:15:"Classic Counter";s:5:"owner";s:8:"Findus23";s:11:"description";s:75:"Embed a view counter in the style of classic CGI scripts into your website.";s:8:"homepage";s:14:"https://lw1.at";s:15:"createdDateTime";s:19:"2019-03-11 09:54:04";s:6:"donate";a:0:{}s:7:"support";a:4:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"lukas@matomo.org";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:56:"https://github.com/Findus23/plugin-ClassicCounter/issues";s:4:"type";s:3:"url";}i:3;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:49:"https://github.com/Findus23/plugin-ClassicCounter";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:9:"nostalgia";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:13:"Lukas Winkler";s:5:"email";s:16:"lukas@matomo.org";s:8:"homepage";s:14:"https://lw1.at";}}s:13:"repositoryUrl";s:49:"https://github.com/Findus23/plugin-ClassicCounter";s:11:"lastUpdated";s:19:"2023-07-22 20:32:03";s:13:"latestVersion";s:5:"0.4.0";s:12:"numDownloads";i:21740;s:11:"screenshots";a:1:{i:0;s:63:"https://plugins.matomo.org/ClassicCounter/images/0.4.0/4909.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"15";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-07-22 20:31:32";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.4.0";s:7:"release";s:19:"2023-07-22 20:32:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1556;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:55:"https://plugins.matomo.org/ClassicCounter/0.4.0/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/Findus23/plugin-ClassicCounter/commits/0.4.0";s:10:"readmeHtml";a:4:{s:11:"description";s:1347:"

<p>No website is complete without a nostalgic view counter at the bottom!</p>

<p>This plugin allows you to add an image showing the total amount of visits per <code>idSite</code>.</p>

<p><strong>Important: Installing this plugin makes the output of the <code>VisitsSummary.get</code> API endpoint visible for everyone!</strong></p>

<pre><code>&lt;img src="https://yourmatomoinstance.example/index.php?module=ClassicCounter&amp;action=svg&amp;idSite=1&amp;period=day"&gt;
</code></pre>

<h3>Optional parameters:</h3>

<ul>
<li><code>&amp;mode=</code> one of <code>["nb_visits", "nb_actions", "nb_visits_converted", "bounce_count", "sum_visit_length", "max_actions", "bounce_rate", "nb_actions_per_visit", "avg_time_on_site"]</code> (responses from the <code>VisitsSummary.get</code> API)</li>
<li><code>&amp;backgroundColor=</code>: A hex color without the <code>#</code> (e.g. <code>f00</code> or <code>fe1234</code>)</li>
<li><code>&amp;foregroundColor=</code></li>
<li><code>&amp;lightColor=</code></li>
<li><code>&amp;historicValue=</code>: A number that is added to the value from Matomo before being displayed. Useful if you want to add data from a counter before starting to use Matomo.</li>
</ul>

<p><img src="https://github.com/Findus23/plugin-ClassicCounter/blob/4.x-dev/screenshots/4909.png?raw=true" alt="4909.png?raw=true" /></p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:463:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>0.4.0</h3>

<p>Matomo 5 compatibility</p>

<h3>0.3.0</h3>

<p>Matomo 4 compatibility</p>

<h3>0.2.2</h3>

<p>another bugfix (increase version in plugin.json)</p>

<h3>0.2.1</h3>

<p>quick bugfix (task)</p>

<h3>0.2.0</h3>

<p>add support for changing colors and and more API responses</p>

<h3>0.1.0</h3>

<p>first version</p>";}s:8:"download";s:46:"/api/2.0/plugins/ClassicCounter/download/0.4.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:67:"https://plugins.matomo.org/ClassicCounter/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:79;a:31:{s:4:"name";s:13:"BraveDetector";s:11:"displayName";s:14:"Brave Detector";s:5:"owner";s:8:"Starker3";s:11:"description";s:80:"Simple plugin that adds the Brave User Agent to tracking requests when detected.";s:8:"homepage";N;s:15:"createdDateTime";s:19:"2023-01-31 08:54:03";s:6:"donate";a:0:{}s:7:"support";a:0:{}s:7:"isTheme";b:0;s:8:"keywords";a:0:{}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:8:"Starker3";s:5:"email";N;s:8:"homepage";s:47:"https://github.com/Starker3/MatomoBraveDetector";}}s:13:"repositoryUrl";s:47:"https://github.com/Starker3/MatomoBraveDetector";s:11:"lastUpdated";s:19:"2023-06-15 00:30:03";s:13:"latestVersion";s:5:"0.1.3";s:12:"numDownloads";i:12288;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"11";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-06-15 00:38:26";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"0.1.3";s:7:"release";s:19:"2023-06-15 00:30:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1705;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:54:"https://plugins.matomo.org/BraveDetector/0.1.3/license";}s:22:"repositoryChangelogUrl";s:61:"https://github.com/Starker3/MatomoBraveDetector/commits/0.2.0";s:10:"readmeHtml";a:4:{s:11:"description";s:173:"

<p>This is a simple plugin that forces the tracking of Brave browsers by overwriting the User Agent sent with each tracking request when the Brave browser is detected.</p>";s:3:"faq";s:1175:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Does this plugin require configuration?</strong></p>

<p>No, simply install and activate the plugin and you\'ll be able to track Brave browser agents.</p>

<p><strong>Does this plugin work with Tag Manager?</strong></p>

<p>Yes, as long as you bundle matomo.js in your Matomo Configuration variable.</p>

<p><strong>Why do I need this plugin? Why doesn\'t this functionality exist already?</strong></p>

<p>Matomo detects what device/user agent is sending requests to your Matomo server by using the user agent sent with the request to the web server.
The Brave browser is unique because it doesn\'t send it\'s own custom "User Agent" with web requests - it pretends to be a normal Chrome browser. The only way to detect if a browser is a Brave browser is with the use a Brave-specific function using Javascript.</p>

<p><strong>Will this plugin allow be to track Brave browsers with "Shields Up"?</strong>
No, this plugin can\'t track anything if the Matomo tracking script is being blocked when the Brave browser\'s shields are up.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:250:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>0.1.0 Initial release</p>

<p>0.1.1 Update FAQ</p>

<p>0.1.2 version bump</p>

<p>0.2.0 Matomo 5 compatibility</p>";}s:8:"download";s:45:"/api/2.0/plugins/BraveDetector/download/0.1.3";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:66:"https://plugins.matomo.org/BraveDetector/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:80;a:31:{s:4:"name";s:16:"DevicePixelRatio";s:11:"displayName";s:18:"Device Pixel Ratio";s:5:"owner";s:8:"johsin18";s:11:"description";s:148:"Collects statistics on the device pixel ratio of the visitor\'s devices.  Useful to analyze how many visitors have Retina or other high DPI displays.";s:8:"homepage";N;s:15:"createdDateTime";s:19:"2018-07-29 19:18:04";s:6:"donate";a:3:{s:6:"paypal";s:21:"johannes@singler.name";s:6:"flattr";s:0:"";s:7:"bitcoin";N;}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:4:"Wiki";s:3:"key";s:4:"wiki";s:5:"value";s:61:"https://github.com/johsin18/DevicePixelRatioMatomoPlugin/wiki";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:63:"https://github.com/johsin18/DevicePixelRatioMatomoPlugin/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:56:"https://github.com/johsin18/DevicePixelRatioMatomoPlugin";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:6:{i:0;s:6:"Retina";i:1;s:8:"high DPI";i:2;s:15:"high resolution";i:3;s:5:"hires";i:4;s:6:"hi-res";i:5;s:18:"device pixel ratio";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:16:"Johannes Singler";s:5:"email";s:21:"johannes@singler.name";s:8:"homepage";N;}}s:13:"repositoryUrl";s:56:"https://github.com/johsin18/DevicePixelRatioMatomoPlugin";s:11:"lastUpdated";s:19:"2023-06-05 20:22:02";s:13:"latestVersion";s:5:"2.0.1";s:12:"numDownloads";i:22938;s:11:"screenshots";a:2:{i:0;s:93:"https://plugins.matomo.org/DevicePixelRatio/images/2.0.1/Device_Pixel_Ratio_Ranges_Report.png";i:1;s:86:"https://plugins.matomo.org/DevicePixelRatio/images/2.0.1/Device_Pixel_Ratio_Report.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"34";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-06-05 20:20:22";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"2.0.1";s:7:"release";s:19:"2023-06-05 20:22:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=4.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:5008;s:7:"license";a:2:{s:4:"name";s:8:"GPL-3.0+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:70:"https://github.com/johsin18/DevicePixelRatioMatomoPlugin/commits/2.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:1272:"

<p>This plugin collects statistics on the device pixel ratio of the visitor\'s devices.  This is useful to analyze how many visitors have Retina or other high DPI displays.  Find the respective report in the Visitors - Devices section.  You can switch to "Device Pixel Ratio Ranges" to see what share of visitors has a device pixel ratio of up to 1.00, 2.00, and so on.  Also, the screen resolution in the visitor log is augmented with the device pixel ratio (abbreviated to DPR there).</p>

<p>The measurement is based on the <a href="https://drafts.csswg.org/cssom-view/#dom-window-devicepixelratio">window.devicePixelRatio</a> browser variable, which is <a href="https://caniuse.com/#search=devicePixelRatio">supported</a> by all modern browsers.  Note that also a full page zoom different from 100% changes the device pixel ratio.  A user setting the zoom to 200% on a regular screen will be counted in the same way as a user having a Retina display with 100% zoom.  Still, the user with 200% zoom would also benefit from higher DPI assets.</p>

<p>The device pixel ratio is stored with two decimals accuracy.  For browsers not reporting the device pixel ratio, and for visits having occurred before the installation of this plugin, we report the value "Unknown".</p>";s:3:"faq";s:1383:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Shouldn\'t the plugin analyze the pure device pixel ratio, wihtout taking the zoom into account?</strong></p>

<p>I do not think that you can query the browser for neither the full page zoom nor the pure pixel device ratio, window.pixelDeviceRatio gives you both at the same time.</p>

<p><strong>What if the device pixel ratio changes during the visit (e.g. by the user changing the full page zoom level)?</strong></p>

<p>The plugin records the device pixel ratio at the beginning of each visit, later changes are ignored.  I might think about an option for taking the value for the last action instead, if you provide me with very good arguments for that.</p>

<p><strong>An unknown device pixel ratio is reported for all visitors.  What is wrong?</strong></p>

<p>This plugin needs to add a snippet to the JavaScript code that make the browser report visitor actions.  To allow this addition, matomo.js must be writable in you installation ("Writable JavaScript Tracker" in System Check must be checked).  As the script might be cached on client side, it might take a while until all clients will correctly report the device pixel ratio.  If you report the actions using some other API, add "devicePixelRatio=1.23" to the arguments.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:778:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>2.0.1</h2>

<ul>
<li>Declare compatible with Matomo 5 (no real changes).</li>
</ul>

<h2>2.0.0</h2>

<ul>
<li>Make compatible with Matomo 4.</li>
<li>Reverted the change of 1.0.2, as the reason turned out to be a bug in Matomo core, which was fixed in Matomo 3.13.6.</li>
</ul>

<h2>1.0.2</h2>

<ul>
<li>Fixed a bug revealed by Matomo 3.13, which made the devicePixelRatio query not being added to the JavaScript tracker code.</li>
</ul>

<h2>1.0.1</h2>

<ul>
<li>Pie chart now the default visualization for device pixel ratio ranges.</li>
<li>Improvements to the description.</li>
</ul>

<h2>1.0.0</h2>

<ul>
<li>Initial release.</li>
</ul>";}s:8:"download";s:48:"/api/2.0/plugins/DevicePixelRatio/download/2.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:69:"https://plugins.matomo.org/DevicePixelRatio/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:81;a:31:{s:4:"name";s:9:"LoginOIDC";s:11:"displayName";s:10:"Login OIDC";s:5:"owner";s:10:"dominik-th";s:11:"description";s:62:"Adds support for integrating external authentication services.";s:8:"homepage";s:53:"https://github.com/dominik-th/matomo-plugin-LoginOIDC";s:15:"createdDateTime";s:19:"2019-03-30 20:08:04";s:6:"donate";a:2:{s:6:"paypal";s:33:"matomo-loginoidc@dthiemermann.org";s:7:"bitcoin";N;}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:33:"matomo-loginoidc@dthiemermann.org";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:60:"https://github.com/dominik-th/matomo-plugin-LoginOIDC/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:53:"https://github.com/dominik-th/matomo-plugin-LoginOIDC";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:6:{i:0;s:5:"login";i:1;s:14:"authentication";i:2;s:3:"sso";i:3;s:5:"oauth";i:4;s:6:"openid";i:5;s:7:"connect";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:19:"Dominik Thiemermann";s:5:"email";s:22:"hello@dthiemermann.org";s:8:"homepage";s:28:"https://www.dthiemermann.org";}}s:13:"repositoryUrl";s:53:"https://github.com/dominik-th/matomo-plugin-LoginOIDC";s:11:"lastUpdated";s:19:"2023-05-21 17:34:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:167136;s:11:"screenshots";a:5:{i:0;s:78:"https://plugins.matomo.org/LoginOIDC/images/5.0.0/LoginOIDC_Admin_Settings.png";i:1;s:88:"https://plugins.matomo.org/LoginOIDC/images/5.0.0/LoginOIDC_Github_Authorize_Consent.png";i:2;s:71:"https://plugins.matomo.org/LoginOIDC/images/5.0.0/LoginOIDC_Sign_In.png";i:3;s:82:"https://plugins.matomo.org/LoginOIDC/images/5.0.0/LoginOIDC_User_Settings_Link.png";i:4;s:84:"https://plugins.matomo.org/LoginOIDC/images/5.0.0/LoginOIDC_User_Settings_Unlink.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"96";s:15:"numContributors";s:1:"9";s:14:"lastCommitDate";s:19:"2023-12-18 16:39:05";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-21 17:34:02";s:8:"requires";a:2:{s:5:"piwik";s:20:">=5.0.0-b1,<6.0.0-b1";s:3:"php";s:7:">=7.0.0";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1427;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:50:"https://plugins.matomo.org/LoginOIDC/5.0.0/license";}s:22:"repositoryChangelogUrl";s:67:"https://github.com/dominik-th/matomo-plugin-LoginOIDC/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:198:"

<p>Login via third party authentication services.</p>

<p>Easily add a "Login with GitHub" button your Matomo instance. You can also setup any other service to do the authentication for you.</p>

";s:3:"faq";s:4431:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>What is the callback url?</strong></p>

<p><code>http(s)://&lt;YOUR_MATOMO_URL&gt;/index.php?module=LoginOIDC&amp;action=callback&amp;provider=oidc</code></p>

<p><strong>Which providers can I use?</strong></p>

<p>I tested the plugin with Auth0, GitHub and Keycloak, which work fine.
If your provider does not seem to work, leave an issue on GitHub.</p>

<p><strong>How can I unlink all users?</strong></p>

<p>The easiest way is to fully uninstall the plugin and reinstall afterwards.
Otherwise you can delete data from <code>matomo_loginoidc_provider</code> in your sql database.</p>

<p>If you change the OAuth provider and there could be user id collisions, you should make sure to unlink all users beforehand.</p>

<p><strong>Can I embed the Login button on another website?</strong></p>

<p>You have to uncheck the <code>Disable direct login url</code> option in the settings.
Afterwards you can link to <code>http(s)://&lt;YOUR_MATOMO_URL&gt;/index.php?module=LoginOIDC&amp;action=signin&amp;provider=oidc</code> and Matomo will redirect the client accordingly.</p>

<p><strong>Can I setup more than one provider?</strong></p>

<p>Currently that is <strong>not</strong> possible.
But you can use services like Auth0, which support multiple providers.</p>

<p><strong>I get a <code>Can\'t create table</code> error when installing the plugin</strong></p>

<p>Most likely you are using a very old Piwik installation, which still uses MyISAM tables.
Learn here on how to update the database engine:
https://matomo.org/faq/troubleshooting/faq_25610/</p>

<p><strong>What are the settings for ...?</strong></p>

<ul>
<li><p>GitHub:</p>

<ul>
<li>Authorize URL: <code>https://github.com/login/oauth/authorize</code></li>
<li>Token URL: <code>https://github.com/login/oauth/access_token</code></li>
<li>Userinfo URL: <code>https://api.github.com/user</code></li>
<li>Userinfo ID: <code>id</code></li>
<li>OAuth Scopes: <code>&lt;EMPTY&gt;</code></li>
</ul></li>
<li><p>Auth0:</p>

<ul>
<li>Authorize URL: <code>https://&lt;USERNAME&gt;.eu.auth0.com/authorize</code></li>
<li>Token URL: <code>https://&lt;USERNAME&gt;.eu.auth0.com/oauth/token</code></li>
<li>Userinfo URL: <code>https://&lt;USERNAME&gt;.eu.auth0.com/userinfo</code></li>
<li>Userinfo ID: <code>sub</code></li>
<li>OAuth Scopes: <code>openid email</code></li>
</ul></li>
<li><p>Keycloak:</p>

<ul>
<li>Authorize URL: <code>http(s)://&lt;YOUR_KEYCLOAK_URL&gt;/auth/realms/&lt;REALM&gt;/protocol/openid-connect/auth</code></li>
<li>Token URL: <code>http(s)://&lt;YOUR_KEYCLOAK_URL&gt;/auth/realms/&lt;REALM&gt;/protocol/openid-connect/token</code></li>
<li>Userinfo URL: <code>http(s)://&lt;YOUR_KEYCLOAK_URL&gt;/auth/realms/&lt;REALM&gt;/protocol/openid-connect/userinfo</code></li>
<li>Logout URL: <code>http(s)://&lt;YOUR_KEYCLOAK_URL&gt;/auth/realms/&lt;REALM&gt;/protocol/openid-connect/logout?redirect_uri=&lt;MATOMO_URL&gt;</code></li>
<li>Userinfo ID: <code>sub</code></li>
<li>OAuth Scopes: <code>openid email</code></li>
</ul></li>
<li><p>Gitlab (self-hosted Community Edition 12.6.2):</p>

<ul>
<li>Authorize URL: <code>http(s)://&lt;YOUR_GITLAB_URL&gt;/oauth/authorize</code></li>
<li>Token URL: <code>http(s)://&lt;YOUR_GITLAB_URL&gt;/oauth/token</code></li>
<li>Userinfo URL: <code>http(s)://&lt;YOUR_GITLAB_URL&gt;/oauth/userinfo</code></li>
<li>Userinfo ID: <code>sub</code></li>
<li>OAuth Scopes: <code>openid email</code></li>
</ul></li>
<li><p>Unikname Connect:</p>

<ul>
<li>Name: <code>Connect with your private @unikname</code></li>
<li>Authorize URL: <code>https://connect.unikname.com/oidc/authorize</code></li>
<li>Token URL: <code>https://connect.unikname.com/oidc/accessToken</code></li>
<li>Userinfo URL: <code>https://connect.unikname.com/oidc/profile</code></li>
<li>Userinfo ID: <code>sub</code></li>
<li>OAuth Scopes: <code>openid email</code></li>
</ul></li>
<li><p>Microsoft Azure AD</p>

<ul>
<li>Authorize URL: <code>https://login.microsoftonline.com/&lt;TENANT_ID&gt;/oauth2/v2.0/authorize</code></li>
<li>Token URL: <code>https://login.microsoftonline.com/&lt;TENANT_ID&gt;/oauth2/v2.0/token</code></li>
<li>Userinfo URL: <code>https://graph.microsoft.com/oidc/userinfo</code></li>
<li>Userinfo ID: <code>sub</code></li>
<li>OAuth Scopes: <code>openid email</code></li>
</ul></li>
</ul>";s:13:"documentation";s:0:"";s:9:"changelog";s:1966:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>4.1.2</h3>

<ul>
<li>Fix disabling OIDC for superusers not having any effect (#68).</li>
</ul>

<h3>4.1.1</h3>

<ul>
<li>Hotfix warning about session variable not being set when signing in with username/password.</li>
</ul>

<h3>4.1.0</h3>

<ul>
<li>Add option to skip password confirmation requests when user has signed in via LoginOIDC (requires Matomo &gt;4.12.0) (#72).</li>
<li>Add option to automatically link existing users when IdP user id matches Matomos user id (#44).</li>
<li>Fix logout redirect (#64).</li>
<li>Improve db table creation (#31).</li>
</ul>

<h3>4.0.0</h3>

<ul>
<li>Prepare plugin for Matomo 4.</li>
<li>Linking accounts has been moved to the users security settings.</li>
</ul>

<h3>3.0.1</h3>

<ul>
<li>Hotfix saving plugin system settings with empty domain whitelist (#34).</li>
</ul>

<h3>3.0.0</h3>

<ul>
<li>Align version number with Matomo major release version.</li>
<li>Support embedding login button on third-party sites.</li>
<li>Restrict account creation to specified domains.</li>
<li>Support <a href="https://openid.net/specs/openid-connect-session-1_0-17.html#RPLogout">OIDC Logout URLs</a>.</li>
<li>Support Matomos regular password verification (currently requires modification of plugins/Login/templates/confirmPassword.twig)</li>
</ul>

<h3>0.1.5</h3>

<ul>
<li>Add option to bypass second factor when sign in with OIDC.</li>
</ul>

<h3>0.1.4</h3>

<ul>
<li>Add option to automatically create unknown users.</li>
</ul>

<h3>0.1.3</h3>

<ul>
<li>Add an option to override the redirect URI.</li>
</ul>

<h3>0.1.2</h3>

<ul>
<li>Fix oauth flow for <a href="https://github.com/keycloak/keycloak">Keycloak</a>.</li>
<li>Improve FAQ.</li>
</ul>

<h3>0.1.1</h3>

<ul>
<li>Lowered the required Matomo version for this plugin.</li>
</ul>

<h3>0.1.0</h3>

<ul>
<li>Initial version.</li>
</ul>";}s:8:"download";s:41:"/api/2.0/plugins/LoginOIDC/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:62:"https://plugins.matomo.org/LoginOIDC/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:82;a:31:{s:4:"name";s:13:"TrackerDomain";s:11:"displayName";s:14:"Tracker Domain";s:5:"owner";s:13:"digitalist-se";s:11:"description";s:69:"Set Domain for js trackers, useful when your UI is on another domain.";s:8:"homepage";s:46:"https://github.com/digitalist-se/TrackerDomain";s:15:"createdDateTime";s:19:"2021-11-18 16:30:04";s:6:"donate";a:0:{}s:7:"support";a:1:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:53:"https://github.com/digitalist-se/TrackerDomain/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:0:{}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:14:"Mikke Schirén";s:5:"email";s:27:"mikke.schiren@digitalist.se";s:8:"homepage";s:46:"https://github.com/digitalist-se/TrackerDomain";}}s:13:"repositoryUrl";s:46:"https://github.com/digitalist-se/TrackerDomain";s:11:"lastUpdated";s:19:"2023-05-17 10:08:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:8571;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"19";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-05-17 10:07:06";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"0.3.3";s:7:"release";s:19:"2023-04-11 11:42:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=4.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:3499;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/digitalist-se/TrackerDomain/commits/0.3.3";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:45:"/api/2.0/plugins/TrackerDomain/download/0.3.3";}i:1;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-17 10:08:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1482;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:60:"https://github.com/digitalist-se/TrackerDomain/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:285:"

<p>This  plugin could be useful if you are running your UI part of Matomo
on another domain then you are tracking from.
This plugin replaces the matomo url from your installation to a custom domain.
The plugin changes both Matomo core tracking script and the TagManager script.</p>

";s:3:"faq";s:150:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>See readme</p>";s:13:"documentation";s:1679:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>Description</h2>

<p>This  plugin could be useful if you are running your UI part of Matomo
on another domain then you are tracking from.
This plugin replaces the matomo url from your installation to a custom domain.
The plugin changes both Matomo core tracking script and the TagManager script.</p>

<h2>Use</h2>

<p>To use this:
Add to config.ini.php or common.ini.php:</p>

<pre><code>[TrackerDomain]
url = "my.domain"
</code></pre>

<p>Or add the domain in <code>General settings -&gt; TrackerDomain</code>.</p>

<p>This would give you something like this:</p>

<pre><code>&lt;!-- Matomo --&gt;
&lt;script&gt;
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push([\'trackPageView\']);
  _paq.push([\'enableLinkTracking\']);
  (function() {
    var u="//my.domain/";
    _paq.push([\'setTrackerUrl\', u+\'matomo.php\']);
    _paq.push([\'setSiteId\', \'1\']);
    var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];
    g.async=true; g.src=u+\'matomo.js\'; s.parentNode.insertBefore(g,s);
  })();
&lt;/script&gt;
&lt;!-- End Matomo Code --&gt;

</code></pre>

<p>The plugin changes the variable <code>u</code>.</p>

<p>A global javascript variable is added <code>piwik.trackerDomain</code>, that could be used by other plugins.</p>

<h2>Credits</h2>

<p>This plugin is more or less a copy paste of answers from https://github.com/Findus23 (Matomo)
and https://github.com/tsteur (Matomo Tag Manager). Sharing is caring. ♥</p>";s:9:"changelog";s:169:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>Here goes the changelog text.</p>";}s:8:"download";s:45:"/api/2.0/plugins/TrackerDomain/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:66:"https://plugins.matomo.org/TrackerDomain/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:83;a:31:{s:4:"name";s:11:"UserConsole";s:11:"displayName";s:12:"User Console";s:5:"owner";s:13:"digitalist-se";s:11:"description";s:71:"Use the console to manage users, like adding users, reset password etc.";s:8:"homepage";s:41:"https://digitalist.se/contributing-matomo";s:15:"createdDateTime";s:19:"2019-02-28 21:24:03";s:6:"donate";a:0:{}s:7:"support";a:1:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:45:"https://github.com/nodeone/userconsole/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:0:{}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:14:"Mikke Schirén";s:5:"email";s:33:"mikke.schiren@digitalistgroup.com";s:8:"homepage";s:21:"https://digitalist.se";}}s:13:"repositoryUrl";s:44:"https://github.com/digitalist-se/userconsole";s:11:"lastUpdated";s:19:"2023-05-15 13:38:03";s:13:"latestVersion";s:5:"5.0.1";s:12:"numDownloads";i:21603;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"19";s:15:"numContributors";s:1:"1";s:14:"lastCommitDate";s:19:"2023-05-15 13:36:53";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"4.0.1";s:7:"release";s:19:"2023-04-11 12:08:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=4.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:554;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:52:"https://plugins.matomo.org/UserConsole/4.0.1/license";}s:22:"repositoryChangelogUrl";s:58:"https://github.com/digitalist-se/userconsole/commits/4.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:43:"/api/2.0/plugins/UserConsole/download/4.0.1";}i:1;a:10:{s:4:"name";s:5:"5.0.1";s:7:"release";s:19:"2023-05-15 13:36:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:0;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:552;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:52:"https://plugins.matomo.org/UserConsole/5.0.1/license";}s:22:"repositoryChangelogUrl";s:58:"https://github.com/digitalist-se/userconsole/commits/5.0.1";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:187:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>My question?</strong></p>

<p>My answer</p>";s:13:"documentation";s:2332:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>Usage</h2>

<p>This plugin adds the possibility to work with users via console commands.</p>

<h2>Console commands</h2>

<ul>
<li><a href="#useraccess">user:access</a></li>
<li><a href="#usercreate">user:create</a></li>
<li><a href="#userdelete">user:delete</a></li>
<li><a href="#userlist">user:list</a></li>
<li><a href="#makesuper">user:make-super</a></li>
<li><a href="#removesuper">user:remove-super</a></li>
<li><a href="#resetpassword">user:reset-password</a></li>
</ul>

<h3><a>user:create</a></h3>

<p>Creates a user.</p>

<p>Options:</p>

<ul>
<li><code>login</code> User name for the user (required)</li>
<li><code>email</code> Email for the user (required)</li>
<li><code>password</code> Password for the user (required)</li>
<li><code>super</code> Add super user privileges to the user (optional)</li>
</ul>

<h3><a>user:delete</a></h3>

<p>Deletes a user.</p>

<p>Options:</p>

<ul>
<li><p><code>login</code> User name for the user (required)</p>

<h3><a>user:access</a></h3></li>
</ul>

<p>Menage access to a user, for which sites and what access.</p>

<p>Options:</p>

<ul>
<li><code>login</code> User name for the user (required)</li>
<li><code>sites</code> One or more sites that you would like to set the permission for (required)</li>
<li><code>access</code> Which access the user should have to the site - <code>noaccess</code>, <code>view</code>, <code>write</code>, <code>admin</code> (required)</li>
</ul>

<h3><a>user:make-super</a></h3>

<p>Adds super user privileges to a user</p>

<p>Options:</p>

<ul>
<li><code>login</code> User name for the user (required)</li>
</ul>

<h3><a>user:remove-super</a></h3>

<p>Remove super user privileges from a user</p>

<p>Options:</p>

<ul>
<li><code>login</code> User name for the user (required)</li>
</ul>

<p>If the user is the only one that has super user access, this will fail. At least one super user is needed.</p>

<h3><a>user:list</a></h3>

<p>List all users.</p>

<p>No options.</p>

<h3><a>user:reset-password</a></h3>

<p>Resets password for a user.</p>

<p>Options:</p>

<ul>
<li><code>login</code> User name for the user (required)</li>
<li><code>new-password</code> New password for the user (required)</li>
</ul>";s:9:"changelog";s:169:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>Here goes the changelog text.</p>";}s:8:"download";s:43:"/api/2.0/plugins/UserConsole/download/5.0.1";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:64:"https://plugins.matomo.org/UserConsole/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:84;a:31:{s:4:"name";s:19:"JsTrackerForceAsync";s:11:"displayName";s:22:"Js Tracker Force Async";s:5:"owner";s:10:"matomo-org";s:11:"description";s:134:"Forces the JavaScript Tracker to always load asynchronous when embedding the Tracking Code via HTTP API automatically in your website.";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2017-01-23 05:00:03";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:62:"https://github.com/innocraft/plugin-JsTrackerForceAsync/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:55:"https://github.com/innocraft/plugin-JsTrackerForceAsync";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:5:{i:0;s:7:"tracker";i:1;s:10:"javascript";i:2;s:5:"async";i:3;s:11:"a/b testing";i:4;s:10:"experiment";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:55:"https://github.com/innocraft/plugin-JsTrackerForceAsync";s:11:"lastUpdated";s:19:"2023-05-08 02:04:10";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:11848;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"7";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-05-08 02:03:56";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-08 02:04:10";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:239;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:72:"https://github.com/innocraft/plugin-JsTrackerForceAsync/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:1192:"

<p>This plugin is especially useful in combination with our <a href="https://plugins.matomo.org/AbTesting">A/B Testing</a> feature
if you embed the tracking code directly in your website using the <code>SitesManager.getJavascriptTag</code> <a href="https://developer.matomo.org/api-reference/reporting-api">HTTP API</a> method.</p>

<p>When you use A/B Testing and have at least one active experiment for your website, the JavaScript code will load 
synchronously to prevent the content to flickr. If you still want to load the Matomo JavaScript Tracking code async,
you can install this plugin and it will make sure to always generate the async code.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:0:"";}s:8:"download";s:51:"/api/2.0/plugins/JsTrackerForceAsync/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:72:"https://plugins.matomo.org/JsTrackerForceAsync/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:85;a:31:{s:4:"name";s:15:"JsTrackerCustom";s:11:"displayName";s:17:"Js Tracker Custom";s:5:"owner";s:10:"matomo-org";s:11:"description";s:73:"This plugin allows you to add custom JavaScript to Matomos tracking code.";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2018-07-18 13:54:04";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:58:"https://github.com/innocraft/plugin-JsTrackerCustom/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:51:"https://github.com/innocraft/plugin-JsTrackerCustom";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:1:{i:0;s:7:"tracker";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:51:"https://github.com/innocraft/plugin-JsTrackerCustom";s:11:"lastUpdated";s:19:"2023-05-08 02:04:07";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:14203;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"111";s:15:"numContributors";s:2:"30";s:14:"lastCommitDate";s:19:"2023-12-21 01:35:06";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-08 02:04:07";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1473;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:68:"https://github.com/innocraft/plugin-JsTrackerCustom/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:1128:"

<p>This plugin allows you to extend the piwik.js with custom js code.</p>

<p>Once you have activated the plugin, you can customise the tracking code in Administration &gt; Diagnostics &gt;  Custom Tracker JS.</p>

<p>To be able to add custom JavaScript, the file <code>plugins/JsTrackerCustom/tracker.js</code> needs to be writable.</p>

<p>NOTE: We recommend to use the <a href="https://plugins.matomo.org/TagManager">Matomo Tag Manager plugin</a> instead.</p>

<p>Any questions, feature wishes or problems? <a href="https://www.innocraft.com">Get in touch with us</a>, we are happy to help.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Piwik and know it better than anyone else. 
This means all plugins are perfectly integrated into Piwik and come with outstanding features and quality to grow 
your business. We help our clients get started, configure, monitor and make the most of their Piwik analytics service. 
We also offer unique analytics products and services that help grow your business and meet the needs of medium and large 
businesses alike.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:290:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>5.0.0</strong>
* Compatibility with Matomo 5</p>

<p><strong>4.0.2</strong>
* Added code to auto create empty tracker.js if folder is writable</p>";}s:8:"download";s:47:"/api/2.0/plugins/JsTrackerCustom/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:68:"https://plugins.matomo.org/JsTrackerCustom/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:86;a:31:{s:4:"name";s:17:"InvalidateReports";s:11:"displayName";s:18:"Invalidate Reports";s:5:"owner";s:10:"matomo-org";s:11:"description";s:122:"This plugin allows Super Users to invalidate historical reports in the UI in Administration > System > Invalidate reports.";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2017-11-17 12:34:03";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:60:"https://github.com/innocraft/plugin-InvalidateReports/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:53:"https://github.com/innocraft/plugin-InvalidateReports";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:7:"reports";i:1;s:10:"invalidate";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:53:"https://github.com/innocraft/plugin-InvalidateReports";s:11:"lastUpdated";s:19:"2023-05-08 01:40:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:61699;s:11:"screenshots";a:1:{i:0;s:72:"https://plugins.matomo.org/InvalidateReports/images/5.0.0/screenshot.jpg";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"132";s:15:"numContributors";s:2:"23";s:14:"lastCommitDate";s:19:"2023-12-27 23:53:35";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-08 01:40:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:488;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:70:"https://github.com/innocraft/plugin-InvalidateReports/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:1119:"

<p>This plugins allows you to <a href="https://matomo.org/faq/how-to/faq_155/">invalidate historical reports</a>.</p>

<p>You can invalidate all historical reports for a specific or for all websites and for a specific or all segments. When you invalidate historical reports, they will be re-processed from the raw logs the next time archiving will run. This is useful when you want to force Matomo to re-process historical data for all reports, for example when:</p>

<ul>
<li>you created a new <a href="https://matomo.org/docs/custom-reports/">Custom Report</a> and want the <a href="https://matomo.org/docs/custom-reports/">Custom Reports</a> to be processed for all historical data</li>
<li>you created a new <a href="https://matomo.org/docs/funnels/">Funnel</a> and want your <a href="https://matomo.org/docs/funnels/">Funnel</a> reports to be processed for all historical data</li>
<li>you have modified the raw visitor information (for example by <a href="https://matomo.org/log-analytics/">importing new visitor logs</a> in the past) and want these changes to raw logs reflected in all your reports.</li>
</ul>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:292:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li><p>5.0.0: Compatibility with Matomo 5</p></li>
<li><p>4.1.1: Translation updates.</p></li>
<li><p>4.1.0: migrate AngularJS code to Vue.</p></li>
</ul>";}s:8:"download";s:49:"/api/2.0/plugins/InvalidateReports/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:70:"https://plugins.matomo.org/InvalidateReports/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:87;a:31:{s:4:"name";s:14:"TasksTimetable";s:11:"displayName";s:15:"Tasks Timetable";s:5:"owner";s:10:"matomo-org";s:11:"description";s:113:"List all maintenance tasks that are scheduled to run. Displays the task names and next execution time in a table.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2014-01-16 20:14:04";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:58:"https://github.com/matomo-org/plugin-TasksTimetable/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:51:"https://github.com/matomo-org/plugin-TasksTimetable";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:10:"monitoring";i:1;s:5:"tasks";i:2;s:9:"scheduled";i:3;s:9:"timetable";}s:9:"basePrice";i:0;s:7:"authors";a:3:{i:0;a:3:{s:4:"name";s:11:"Megan Liang";s:5:"email";N;s:8:"homepage";N;}i:1;a:3:{s:4:"name";s:13:"Jay Deshpande";s:5:"email";N;s:8:"homepage";N;}i:2;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:17:"http://matomo.org";}}s:13:"repositoryUrl";s:51:"https://github.com/matomo-org/plugin-TasksTimetable";s:11:"lastUpdated";s:19:"2023-05-08 01:24:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:74280;s:11:"screenshots";a:1:{i:0;s:68:"https://plugins.matomo.org/TasksTimetable/images/5.0.0/Timetable.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"178";s:15:"numContributors";s:2:"17";s:14:"lastCommitDate";s:19:"2023-12-21 01:39:59";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-08 01:24:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1664;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:55:"https://plugins.matomo.org/TasksTimetable/5.0.0/license";}s:22:"repositoryChangelogUrl";s:68:"https://github.com/matomo-org/plugin-TasksTimetable/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:108:"

<p>Plugin to list all scheduled tasks: Name of the tasks and next execution time displayed in a table.</p>";s:3:"faq";s:283:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Where can I find the timetable?</strong></p>

<p>It is located as a menu item "Scheduled Tasks" under diagnostics on the settings page.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:597:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>5.0.0 Compatibility with Matomo 5.0</li>
<li>4.0.2 Better unserialise</li>
<li>4.0.1 Compatibility with Matomo 4.0</li>
<li>4.0.0 Compatibility with Matomo 4.0</li>
<li>3.0.2 translation updates</li>
<li>3.0.0 Compatibility with Piwik 3.0</li>
<li>0.2.2 Display time of day in table and renamed column to "Date in UTC timezone"</li>
<li>0.2.1 Minor translation updates.</li>
<li>0.2.0 Compatibility w/ Piwik 2.15.</li>
<li>0.1.0 Initial release</li>
</ul>";}s:8:"download";s:46:"/api/2.0/plugins/TasksTimetable/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:67:"https://plugins.matomo.org/TasksTimetable/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:88;a:31:{s:4:"name";s:22:"TrackingSpamPrevention";s:11:"displayName";s:24:"Tracking Spam Prevention";s:5:"owner";s:10:"matomo-org";s:11:"description";s:132:"This plugin offers various options to prevent spammers and bots from making your data inaccurate so you can rely on your data again.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2021-01-11 21:08:02";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:25:"https://forum.matomo.org/";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:66:"https://github.com/matomo-org/plugin-TrackingSpamPrevention/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:5:{i:0;s:4:"spam";i:1;s:7:"prevent";i:2;s:5:"cloud";i:3;s:8:"requests";i:4;s:4:"ddos";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";N;s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:59:"https://github.com/matomo-org/plugin-TrackingSpamPrevention";s:11:"lastUpdated";s:19:"2023-05-08 01:22:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:18611;s:11:"screenshots";a:2:{i:0;s:77:"https://plugins.matomo.org/TrackingSpamPrevention/images/5.0.0/1_Settings.png";i:1;s:85:"https://plugins.matomo.org/TrackingSpamPrevention/images/5.0.0/2_Settings_Country.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"279";s:15:"numContributors";s:2:"28";s:14:"lastCommitDate";s:19:"2023-12-22 05:48:16";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-08 01:22:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:951;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:63:"https://plugins.matomo.org/TrackingSpamPrevention/5.0.0/license";}s:22:"repositoryChangelogUrl";s:76:"https://github.com/matomo-org/plugin-TrackingSpamPrevention/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:3917:"

<p>Ever noticed tracking requests that look unnatural or originated from locations you wouldn\'t expect to get visits from?</p>

<p>These tracking requests may be caused by spammers or bots and make your data less accurate. The only thing that is worse than having no data is inaccurate data.</p>

<p>This plugin offers various options to fight spam and bots, so you can rely on your data:</p>

<h3>1. Block requests from cloud providers</h3>

<p>When enabled, this plugin will automatically detect IP addresses used by popular cloud providers like AWS, Azure, Digital Ocean, Google Cloud and Oracle Cloud.</p>

<p>When a tracking request matches such an IP address, then the tracking request will be blocked. Additionally, some Cloud providers like Alibaba Cloud may be detected using the geolocation database (requires eg DB-IP City DB).</p>

<p>If you are only tracking using the JavaScript tracker then this should be a safe feature to enable as tracking requests from humans would not originate from these clouds.</p>

<p>If you are sending tracking requests from a cloud server, then you can also configure IP addresses that are always allowed, so you can still use this feature.</p>

<h3>2. Block requests from headless browsers</h3>

<p>When enabled, this plugin detects the most popular headless browsers and block tracking requests that originate from a headless browser.</p>

<p>Headless browsers are browsers without a user interface and are mostly used for automation. Regular visitors would not use such a browser. It can block additional bots and spam requests that otherwise would not be detected.</p>

<p>It cannot detect a headless browser when the user agent is customised. Often, we can detect them though.</p>

<h3>3. Restrict number of actions per visit</h3>

<p>When enabled, you can configure how many actions a visit should max have.</p>

<p>Most sites never have more than around 100 to 300 actions within one visit under normal circumstances. In many cases it might therefore be safe to assume that if someone has caused more actions than the configured amount of actions, it might be actually tracking spam or a bot or something else like non-human activity is causing these actions.</p>

<p>Matomo will in this case stop recording further actions for that visit to have less inaccurate data and to reduce server load. The IP address of this visit will then be blocked for up to 24 hours.</p>

<p>You can also be notified by email when an IP address is banned because a visit had too many actions.</p>

<h3>4. Exclude countries</h3>

<p>This feature lets you configure to only accept tracking requests for visitors from specific countries. For example, if you have a German website, then it might be unexpected to have any legit visitors from a country outside of Europe meaning a visitor is likely a spammer or a bot in this case. By only tracking visitors from certain countries you can easily avoid a lot of potential spam and bots plus you might also avoid needing to be compliant with certain privacy laws.</p>

<h3>5. Referrer spam</h3>

<p>This feature is not part of this plugin but part of Matomo core.
Matomo maintains a <a href="https://matomo.org/blog/2015/05/stopping-referrer-spam/">list of spam referrers</a> and Matomo will block tracking requests when such a referrer is detected.</p>

<h3>Recommended other features</h3>

<p>You might also want to <a href="https://matomo.org/faq/how-to/faq_21077/">configure to track only URLs that belong to your website</a>. This way any URL that does not belong to your website will not be tracked. This feature is part of Matomo core.</p>

<h3>Privacy</h3>

<p>The plugin does not send any information of your visitors to another server. If you enable the "block requests from cloud providers" feature, then your server will download up to date IP ranges from cloud providers directly and store the information in your database.</p>";s:3:"faq";s:2369:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>How do I allow specific IPs to not be blocked?</strong></p>

<p>Say you are using AWS to replay your traffic using log analytics. When you have the block clouds feature enabled, all the requests from your AWS would be blocked. However, you can specifically allow your own IPs to be allowed and not blocked by editing your <code>config/config.ini.php</code> file and configuring a list of allowed IP ranges like this:</p>

<pre><code>[TrackingSpamPrevention]
iprange_allowlist[] = "127.0.0.1/32"
iprange_allowlist[] = "192.168.0.0/21"
</code></pre>

<p>Make sure to enter a valid IP range.</p>

<p><strong>What happens when it fails to synchronise public IPs from cloud providers?</strong></p>

<p>Any error is currently ignored and if it does not synchronise successfully, then the IP for the provider that failed are not synced.</p>

<p>To be aware when such an error happens you can enable the following setting:</p>

<pre><code>[TrackingSpamPrevention]
block_cloud_sync_throw_exception_on_error = 1
</code></pre>

<p>It is disabled by default as it could stop other scheduled tasks from being executed.</p>

<p><strong>How can I block specific organisations from being tracked?</strong></p>

<p>This can be useful if you are receiving spam requests from a provider that isn\'t automatically detected yet by this plugin.</p>

<p>For this to work the "Block cloud provider" setting must be enabled and a geolocation provider must be enabled.</p>

<p>You can block any organisation (if the geolocation database you are using includes this information) like this:</p>

<pre><code>[TrackingSpamPrevention]
block_geoip_organisations[] = "ExampleOrg"
block_geoip_organisations[] = "another example"
</code></pre>

<p>Alternatively, you can execute a command to block a new organisation like this:</p>

<pre><code class="bash">./console trackingspamprevention:block-geo-ip-organisation --organisation-name="Example"
</code></pre>

<p>Each organisation will be compared lower case and the organisation only needs to contain the configured value, it does not need to match it exactly.</p>

<p>You can find out the organisation name for an IP address by visiting the website of your geolocation database and using their demo tool.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:1431:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h1>5.0.0</h1>

<ul>
<li>Compatibility with Matomo 5.0</li>
</ul>

<h1>4.1.7</h1>

<ul>
<li>Fixed Azure IP ranges download URL parsing code better accounting for character encoding</li>
</ul>

<h1>4.1.6</h1>

<ul>
<li>Started including userAgent in the banned IP email</li>
</ul>

<h1>4.1.5</h1>

<ul>
<li>Azure IP ranges download code updated and added tests to alert if download fails</li>
</ul>

<h1>4.1.4</h1>

<ul>
<li>Add new command to block new organisations <code>./console trackingspamprevention:block-geo-ip-organisation --organisation-name="Example"</code></li>
</ul>

<h1>4.1.3</h1>

<ul>
<li>Translation changes</li>
<li>Added code to not throw exception if digitalOcean file is empty</li>
</ul>

<h1>4.1.2</h1>

<ul>
<li>Fix location data in email to show IP instead of IP range</li>
<li>Started blocking digital ocean through providers.</li>
<li>Stopped checking GeoIp DB if UserCountry plugin is disabled</li>
<li>Azure IP ranges download code updated</li>
</ul>

<h1>4.1.1</h1>

<ul>
<li>Fixed IP ban notification email leading to internal sever error</li>
</ul>

<h1>4.1.0</h1>

<ul>
<li>Exclude user agents from load testing services</li>
<li>Exclude user agents from server side tracking SDK by enabling an option</li>
</ul>

<h1>4.0.0</h1>

<ul>
<li>Initial version</li>
</ul>";}s:8:"download";s:54:"/api/2.0/plugins/TrackingSpamPrevention/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:75:"https://plugins.matomo.org/TrackingSpamPrevention/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:89;a:31:{s:4:"name";s:8:"ForceSSL";s:11:"displayName";s:9:"Force SSL";s:5:"owner";s:10:"matomo-org";s:11:"description";s:138:"Automatically redirect all http requests to https. For security reasons it is recommended to always use Matomo Analytics over https (SSL).";s:8:"homepage";s:25:"https://www.innocraft.com";s:15:"createdDateTime";s:19:"2017-01-06 03:40:03";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:51:"https://github.com/innocraft/plugin-ForceSSL/issues";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:44:"https://github.com/innocraft/plugin-ForceSSL";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:8:"security";i:1;s:5:"https";i:2;s:3:"ssl";i:3;s:9:"analytics";i:4;s:11:"certificate";i:5;s:6:"secure";i:6;s:7:"privacy";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:44:"https://github.com/innocraft/plugin-ForceSSL";s:11:"lastUpdated";s:19:"2023-05-08 01:12:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:195201;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"15";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-07-31 12:57:59";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-08 01:12:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:152003;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:61:"https://github.com/innocraft/plugin-ForceSSL/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:1581:"

<p>When you activate this plugin, it will automatically redirect all "http://" requests to "https://" in the Matomo UI and API.
It also makes sure that the generated tracking code will use HTTPS. This is especially useful if your tracking code is
 embedded into your website automatically, for example via the WP-Matomo (WP-Piwik) Wordpress plugin.</p>

<p>For security and privacy reasons you should always use Matomo over HTTPS (SSL).</p>

<p>Note: If SSL or HTTPS is not correctly configured on your server, activating this plugin may break your Matomo. In such 
a case you can disable this plugin again by removing the line <code>Plugins[] = ForceSSL</code> from the <code>config/config.ini.php</code> file. 
In the same file there may be also a line <code>force_ssl = 1</code>. If you find such an entry and your server is not configured properly,
 we recommend to remove this line from the config file.</p>

<p>Any questions, feature wishes or problems? <a href="https://www.innocraft.com">Get in touch with us</a>, we are happy to help.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. 
This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow 
your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. 
We also offer unique analytics products and services that help grow your business and meet the needs of medium and large 
businesses alike.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:298:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>5.0.0
- Compatibility with Matomo 5</p>

<p>4.0.0
 - Compatibility with Matomo 4</p>

<p>3.0.1
 - Force SSL in tracking code</p>

<p>3.0.0 
 - Initial version</p>";}s:8:"download";s:40:"/api/2.0/plugins/ForceSSL/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:61:"https://plugins.matomo.org/ForceSSL/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:90;a:31:{s:4:"name";s:18:"CustomTranslations";s:11:"displayName";s:19:"Custom Translations";s:5:"owner";s:10:"matomo-org";s:11:"description";s:150:"Translate entities and tracked values into different languages. For example Custom dimensions, dashboard names, custom report names, event values, ...";s:8:"homepage";s:21:"https://innocraft.com";s:15:"createdDateTime";s:19:"2018-12-11 21:46:04";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:21:"contact@innocraft.com";s:4:"type";s:5:"email";}i:2;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:61:"https://github.com/innocraft/plugin-CustomTranslations/issues";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:6:{i:0;s:4:"i18n";i:1;s:11:"translation";i:2;s:9:"translate";i:3;s:13:"international";i:4;s:16:"custom dimension";i:5;s:14:"custom reports";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:21:"contact@innocraft.com";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:54:"https://github.com/innocraft/plugin-CustomTranslations";s:11:"lastUpdated";s:19:"2023-05-08 00:24:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:7427;s:11:"screenshots";a:5:{i:0;s:91:"https://plugins.matomo.org/CustomTranslations/images/5.0.0/0_Custom_Translations_Manage.png";i:1;s:87:"https://plugins.matomo.org/CustomTranslations/images/5.0.0/1_Renamed_Custom_Reports.png";i:2;s:83:"https://plugins.matomo.org/CustomTranslations/images/5.0.0/2_Renamed_Dimensions.png";i:3;s:83:"https://plugins.matomo.org/CustomTranslations/images/5.0.0/3_Renamed_Event_Name.png";i:4;s:84:"https://plugins.matomo.org/CustomTranslations/images/5.0.0/4_Renamed_Event_Value.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"208";s:15:"numContributors";s:2:"25";s:14:"lastCommitDate";s:19:"2023-12-21 01:46:23";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-08 00:24:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:221;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:59:"https://plugins.matomo.org/CustomTranslations/5.0.0/license";}s:22:"repositoryChangelogUrl";s:71:"https://github.com/innocraft/plugin-CustomTranslations/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:872:"

<p>Lets you translate the following entities and tracked values into another language:</p>

<ul>
<li>Tracked <a href="https://plugins.matomo.org/CustomDimensions">custom dimension</a> values</li>
<li>Tracked event values</li>
<li>Configured <a href="https://plugins.matomo.org/CustomDimensions">custom dimension</a> names</li>
<li>Configured <a href="https://plugins.matomo.org/CustomReports">custom report</a> names</li>
<li>Configured Dashboard names</li>
</ul>

<p>This plugin does currently not let you change any already translated text in Matomo itself. You may be interested in
the <a href="https://plugins.matomo.org/CustomiseTranslations">Customise Translations</a> plugin if you want to alter any translation.</p>

<p>Once you have installed and activated the plugin, go to "Administration =&gt; System =&gt; Custom Translations" to customise translations.</p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:439:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>5.0.0</h3>

<ul>
<li>Compatibility with Matomo 5</li>
</ul>

<h3>4.1.1</h3>

<ul>
<li>Translation updates</li>
</ul>

<h3>4.1.0</h3>

<ul>
<li>Migrate from AngularJS to Vue.</li>
</ul>

<h3>4.0.1</h3>

<ul>
<li>Compatibility with Matomo 4</li>
</ul>

<h3>3.0.0</h3>

<ul>
<li>Initial version</li>
</ul>";}s:8:"download";s:50:"/api/2.0/plugins/CustomTranslations/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:71:"https://plugins.matomo.org/CustomTranslations/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:91;a:31:{s:4:"name";s:16:"VisitorGenerator";s:11:"displayName";s:17:"Visitor Generator";s:5:"owner";s:10:"matomo-org";s:11:"description";s:129:"Developer tool that lets you generate fake visits. Useful if you are working with plugins or themes or if you use the Matomo API.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2013-10-31 22:23:05";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:60:"https://github.com/matomo-org/plugin-VisitorGenerator/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:53:"https://github.com/matomo-org/plugin-VisitorGenerator";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:2:{i:0;s:11:"development";i:1;s:5:"tools";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:53:"https://github.com/matomo-org/plugin-VisitorGenerator";s:11:"lastUpdated";s:19:"2023-05-07 23:00:06";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:54624;s:11:"screenshots";a:1:{i:0;s:78:"https://plugins.matomo.org/VisitorGenerator/images/5.0.0/Visitor_Generator.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"412";s:15:"numContributors";s:2:"43";s:14:"lastCommitDate";s:19:"2023-12-27 23:53:33";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-07 23:00:06";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:670;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:57:"https://plugins.matomo.org/VisitorGenerator/5.0.0/license";}s:22:"repositoryChangelogUrl";s:70:"https://github.com/matomo-org/plugin-VisitorGenerator/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:3155:"

<p>Plugin to create fake visits, websites, users and goals. This can be used by Matomo users or developers as an easy way to generate fake data to populate Matomo reports.</p>

<p>You can overwrite the log files that are used to generate fake visits in <a href="https://github.com/matomo-org/plugin-VisitorGenerator/blob/master/data">plugins/VisitorGenerator/data</a> or add new logs to the <code>data</code> directory. All files ending with <code>*.log</code> will be replayed.</p>

<p>Plugin developers can provide their own log files by placing \'*.log\' files within a \'data\' directory of their plugin. This way plugin developers make sure there will be always useful test data.</p>

<h3>Usage</h3>

<h4>UI</h4>

<p>The plugin adds a new item to the Matomo admin UI visible only for users having Super User access under the section "Development". There you can select a site and for how many days in the past you want to generate new visits.</p>

<p>Note: you need to first enable the Development mode in Matomo. In the root directory of your Matomo install, run the following command to enable development mode: <code>./console development:enable</code></p>

<h4>CLI</h4>

<p>It also adds the following commands to the <a href="http://developer.matomo.org/guides/piwik-on-the-command-line">Matomo CLI tool</a>:</p>

<ul>
<li>Generate visits</li>
<li>Generate goals</li>
<li>Generate users</li>
<li>Generate websites</li>
<li>Generate annotation</li>
<li>Shorten log file</li>
<li>Anonymize log file</li>
</ul>

<h5>Examples</h5>

<ul>
<li><code>./console visitorgenerator:generate-annotation --idsite 5</code> generate one annotation for the current day for site with id 5</li>
<li><code>./console visitorgenerator:generate-goals --idsite 5</code> generates some predefined goals for site with id 5</li>
<li><code>./console visitorgenerator:generate-users --limit 100</code>  generates 100 users</li>
<li><code>./console visitorgenerator:generate-websites --limit 100</code> generates 100 websites</li>
<li><code>./console visitorgenerator:generate-visits --idsite 5</code>  generates many visits for site with id 5 for today</li>
<li><code>./console visitorgenerator:generate-visits --idsite 5 --days 2</code> generates many visits for site with id 5 for today and yesterday</li>
<li><code>./console visitorgenerator:anonymize-log /path/to/log</code> takes an Apache log file, anonymizes it and places it in a data directory so it will be replayed the next time "generate-visits" is executed</li>
<li><code>./console visitorgenerator:shorten-log /path/to/file.log &gt; file.short.log</code> takes a large Apache log file and keeps only a small number of logs per day</li>
<li><code>./console visitorgenerator:generate-visits --idsite 5 --custom-matomo-url=http://example.com/</code> Uses \'http://example.com/\' as Matomo-URL and generates many visits for site with id 5 for today</li>
</ul>

<h4>Other notes</h4>

<p>VisitorGenerator makes a lot of requests to the Matomo tracking API to send the visits, so if your server blocks requests based on rules (e.g. with mod_security), you might want to create an exception rule for VisitorGenerator.</p>

";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:2436:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>1.0 Initial release</li>
<li>1.1 New features:

<ul>
<li>Added CLI commands</li>
<li>Added possibility to generate websites, users and goals</li>
<li>Replay all log files within the data directory</li>
</ul></li>
<li>1.2 New features:

<ul>
<li>New log file added</li>
<li>Added possibility to shorten and anonymize log files</li>
<li>Added possibility to let plugins define their own log files</li>
<li>Added possibility to generate annotations</li>
<li>Replay only log entries having the same day of the month</li>
</ul></li>
<li>1.2.1 New workaround:

<ul>
<li>When force_ssl is enabled, and visits are generated on <code>localhost</code>, force to use HTTP instead of HTTPS</li>
</ul></li>
<li>1.2.3 Minor UI tweaks to make it consistent with Piwik look &amp; feel</li>
<li>3.0.0

<ul>
<li>Compatibility with Piwik 3.0</li>
</ul></li>
<li>3.0.1

<ul>
<li>Adds tracking of bandwidth</li>
<li>Adds tracking of custom dimensions and ecommerce cart updates + orders</li>
</ul></li>
<li>3.1.0

<ul>
<li>Add new command to log visits live as if they were from real incoming traffic</li>
</ul></li>
<li>3.1.1

<ul>
<li>Correct URL processing in manipulateRequestUrl after LogHelper regex change</li>
<li>Fix log out of order exception that occurs on large logs</li>
<li>Adds search engine referrers without keyword</li>
</ul></li>
<li>3.1.2

<ul>
<li>New timeout option</li>
</ul></li>
<li>3.2.0

<ul>
<li>PHP 7.4 compatibility</li>
<li>Rename from Piwik to Matomo</li>
<li>command line option <code>custom-piwik-url</code> was removed, use <code>custom-matomo-url</code> instead</li>
</ul></li>
<li>4.0.0

<ul>
<li>Compatibility with Matomo 4</li>
</ul></li>
<li>4.0.1

<ul>
<li>Fix generating visits may cause issues in Matomo 4</li>
</ul></li>
<li>4.0.2

<ul>
<li>Compatibility with Matomo 4</li>
</ul></li>
<li>4.0.3

<ul>
<li>Adds tracking for media analytics plugin</li>
<li>Fix menu item visibility</li>
<li>Translation updates</li>
</ul></li>
<li>4.0.4

<ul>
<li>Add support for Matomo for WordPress</li>
</ul></li>
<li>4.0.5

<ul>
<li>Fix deprecation warnings for php8.1</li>
</ul></li>
<li>4.0.6

<ul>
<li>Translation changes</li>
</ul></li>
<li>4.0.7

<ul>
<li>Ensure console commands return integers</li>
</ul></li>
<li>5.0.0

<ul>
<li>Compatibility with Matomo 5</li>
</ul></li>
</ul>";}s:8:"download";s:48:"/api/2.0/plugins/VisitorGenerator/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:69:"https://plugins.matomo.org/VisitorGenerator/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:92;a:31:{s:4:"name";s:20:"TreemapVisualization";s:11:"displayName";s:21:"Treemap Visualization";s:5:"owner";s:10:"matomo-org";s:11:"description";s:112:"Visualise any report in Matomo as a Treemap. Click on the Treemap icon in each report to load the visualisation.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2013-09-30 01:03:48";s:6:"donate";a:0:{}s:7:"support";a:6:{i:0;a:4:{s:4:"name";s:13:"Documentation";s:3:"key";s:4:"docs";s:5:"value";s:24:"https://matomo.org/docs/";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:16:"hello@matomo.org";s:4:"type";s:5:"email";}i:3;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:64:"https://github.com/matomo-org/plugin-TreemapVisualization/issues";s:4:"type";s:3:"url";}i:4;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:57:"https://github.com/matomo-org/plugin-TreemapVisualization";s:4:"type";s:3:"url";}i:5;a:4:{s:4:"name";s:3:"RSS";s:3:"key";s:3:"rss";s:5:"value";s:24:"https://matomo.org/feed/";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:5:{i:0;s:7:"treemap";i:1;s:5:"graph";i:2;s:13:"visualization";i:3;s:7:"infovis";i:4;s:3:"jit";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:57:"https://github.com/matomo-org/plugin-TreemapVisualization";s:11:"lastUpdated";s:19:"2023-05-07 22:44:02";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:49170;s:11:"screenshots";a:3:{i:0;s:90:"https://plugins.matomo.org/TreemapVisualization/images/5.0.0/Screen_Resolution_Treemap.png";i:1;s:87:"https://plugins.matomo.org/TreemapVisualization/images/5.0.0/Social_Network_Treemap.png";i:2;s:72:"https://plugins.matomo.org/TreemapVisualization/images/5.0.0/Treemap.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"266";s:15:"numContributors";s:2:"31";s:14:"lastCommitDate";s:19:"2023-12-21 01:40:56";}s:8:"featured";b:1;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-07 22:44:02";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:823;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:61:"https://plugins.matomo.org/TreemapVisualization/5.0.0/license";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/matomo-org/plugin-TreemapVisualization/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:1755:"

<p>TreemapVisualization contains a new report visualization that will display your reports as tiles of different sizes and will show you how each metric has changed from the last period.</p>

<p>The treemap visualization displays rows of data as squares whose size corresponds to a metric in each row.</p>

<p>If you\'re looking at the visits in a report, the row with the most visits will take up the most space. Just like other graph visualizations, <strong>you can use it to easily see which rows have the largest values</strong>. The treemap differs from other graphs though, in that <strong>it can show many more rows</strong>.</p>

<h4>Treemap colors for comparison with previous period</h4>

<p>The treemap visualization will also show you one thing that no other visualization included with Matomo does: the <strong>evolution</strong> of each row. Hovering over a treemap square will show you how much the row changed from the last period (ie, the last day, week, etc.).</p>

<p>Each treemap square is colored based on the evolution value <strong>so you can easily see how your data is changing</strong>. A red square means the change is negative; a green square means the change is positive. The more green the bigger the change; the more red the smaller the change.</p>

<h4>Known limitations</h4>

<ul>
<li>Treemaps will not work with flattened tables. Currently, if a table is flattened, the treemap icon will be removed.</li>
<li>Evolution values cannot be calculated for subtables (reports that are displayed when you click on a row or node).</li>
</ul>

<h4>Feedback, bug report or requests</h4>

<p><a href="https://github.com/matomo-org/plugin-TreemapVisualization/issues">github.com/matono-org/plugin-TreemapVisualization/issues</a></p>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:282:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h1>5.0.0</h1>

<ul>
<li>Compatibility with Matomo 5</li>
</ul>

<h1>4.0.2</h1>

<ul>
<li>Translation changes and made plugin translatable</li>
</ul>";}s:8:"download";s:52:"/api/2.0/plugins/TreemapVisualization/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:73:"https://plugins.matomo.org/TreemapVisualization/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:93;a:31:{s:4:"name";s:10:"KPIWidgets";s:11:"displayName";s:10:"KPIWidgets";s:5:"owner";s:11:"ronan-hello";s:11:"description";s:53:"Display KPIs on the dashboard for better readability.";s:8:"homepage";s:21:"https://lazuli.agency";s:15:"createdDateTime";s:19:"2020-04-21 19:32:04";s:6:"donate";a:2:{s:6:"paypal";s:23:"ronan56.hello@gmail.com";s:7:"bitcoin";N;}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Email";s:3:"key";s:5:"email";s:5:"value";s:22:"contact@ronan-hello.fr";s:4:"type";s:5:"email";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:56:"https://github.com/ronan-hello/matomo-kpi-widgets/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:49:"https://github.com/ronan-hello/matomo-kpi-widgets";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:7:{i:0;s:5:"users";i:1;s:5:"pages";i:2;s:8:"visitors";i:3;s:3:"KPI";i:4;s:6:"Visits";i:5;s:8:"Sessions";i:6;s:10:"KpiWidgets";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:11:"Ronan HELLO";s:5:"email";s:22:"contact@ronan-hello.fr";s:8:"homepage";s:22:"https://ronan-hello.fr";}}s:13:"repositoryUrl";s:49:"https://github.com/ronan-hello/matomo-kpi-widgets";s:11:"lastUpdated";s:19:"2023-05-05 13:06:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:12837;s:11:"screenshots";a:3:{i:0;s:80:"https://plugins.matomo.org/KPIWidgets/images/5.0.0/Add_a_widget_to_dashboard.png";i:1;s:72:"https://plugins.matomo.org/KPIWidgets/images/5.0.0/Page_views_widget.png";i:2;s:68:"https://plugins.matomo.org/KPIWidgets/images/5.0.0/Visits_widget.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:2:"27";s:15:"numContributors";s:1:"2";s:14:"lastCommitDate";s:19:"2023-11-22 16:48:30";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-05 13:06:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:1500;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:51:"https://plugins.matomo.org/KPIWidgets/5.0.0/license";}s:22:"repositoryChangelogUrl";s:63:"https://github.com/ronan-hello/matomo-kpi-widgets/commits/5.0.0";s:10:"readmeHtml";a:4:{s:11:"description";s:180:"

<p>With KPI Widgets plugin, you\'ll be able to display the most important KPI on your Matomo dashboard the easyeast way !</p>

<p><strong>Thank you for installing !</strong></p>

";s:3:"faq";s:1183:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>How to install this plugin</strong></p>

<p>This plugin is available in the official marketplace of Matomo. You have to install the same way as other plugins
- Go to the administration panel
- Look for the Marketplace section and select "Plugins" in the dropdown
- Then search for \'KPI Widgets\' and install it.
- Activate the plugin and you\'re done !</p>

<p><strong>Is the plugin active for all Matomo users in my instance ?</strong></p>

<p>Yes, if you choose this plugin for your Matomo instance, all users will be able to use it.</p>

<p><strong>How can I contribute to this plugin ?</strong></p>

<p>You can help me developping this plugin by contacting me. You can also fork the project and ask for an integration. All way you consider as legit to contribute are welcome.</p>

<p><strong>How long this plugin will be maintained ?</strong></p>

<p>As long as possible, I have many project to maintain, I\'m the first user of this plugin and I use Matomo on many project, if I see errors, I\'ll patch this plugin faster as possible !</p>";s:13:"documentation";s:1083:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p>This plugin use the Matomo internal API to work, no additional code needed.</p>

<p>If you want to contribute, please download the folder and continue in this direction using small and maintainable components and PHP Class.</p>

<p>Consider this is my first Matomo plugin, be compliant and please tell me how to make it better if you see any errors.</p>

<h3>Available Widgets</h3>

<ul>
<li>Actions per visits</li>
<li>Average time generation</li>
<li>Average time on site</li>
<li>Bounce rate</li>
<li>Conversion rate</li>
<li>Conversions</li>
<li>Downloads</li>
<li>Keywords</li>
<li>Max Actions</li>
<li>Outlinks</li>
<li>Page views</li>
<li>Returning users</li>
<li>Returning visitors</li>
<li>Revenue</li>
<li>Searches</li>
<li>Unique downloads</li>
<li>Unique outlinks</li>
<li>Unique page views</li>
<li>Unique returning visitors</li>
<li>Unique visitors</li>
<li>Unique users</li>
<li>Unique visits</li>
</ul>

<p>Want more ? Ask me !</p>";s:9:"changelog";s:694:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h2>v5.0.0</h2>

<ul>
<li>Compatibility with Matomo 5.x</li>
<li>Starting using semver for versioning</li>
</ul>

<h2>v1.1.4</h2>

<ul>
<li>Fix : stdClass::$avg_time_generation error</li>
</ul>

<h2>v1.1.3</h2>

<ul>
<li>Add \'-\' when no data to display</li>
<li>Set min height to widget body</li>
</ul>

<h2>v1.1.0</h2>

<ul>
<li>Support for Matomo 4.x</li>
<li>Fix 1 translation</li>
</ul>

<h2>v1.0.1</h2>

<ul>
<li>Fixing issue from root folder name</li>
</ul>

<h2>v1.0.0</h2>

<ul>
<li>Create many widgets</li>
<li>Add translation to french (fr)</li>
</ul>";}s:8:"download";s:42:"/api/2.0/plugins/KPIWidgets/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:63:"https://plugins.matomo.org/KPIWidgets/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:94;a:31:{s:4:"name";s:20:"EnvironmentVariables";s:11:"displayName";s:21:"Environment Variables";s:5:"owner";s:10:"matomo-org";s:11:"description";s:88:"Allows you to specify Matomo config in environment variables instead of the config file.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2019-01-25 03:12:04";s:6:"donate";a:0:{}s:7:"support";a:2:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:65:"https://github.com/matomo-org/plugin-EnvironmentVariables/issues/";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:13:"configuration";i:1;s:3:"php";i:2;s:11:"environment";i:3;s:9:"variables";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:57:"https://github.com/matomo-org/plugin-EnvironmentVariables";s:11:"lastUpdated";s:19:"2023-05-05 04:16:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:19917;s:11:"screenshots";a:0:{}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:1:"8";s:15:"numContributors";s:1:"3";s:14:"lastCommitDate";s:19:"2023-09-22 06:57:19";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:1:{i:0;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-05 04:16:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:298;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:0:"";}s:22:"repositoryChangelogUrl";s:74:"https://github.com/matomo-org/plugin-EnvironmentVariables/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:1340:"

<p>Override any Matomo config with environment variables. To overwrite any setting simply specify an environment variable in the following format:</p>

<pre><code>MATOMO_$CATEGORY_$SETTING
</code></pre>

<p>For example to overwrite the database username and password which is usually defined in the <code>config/config.ini.php</code> like this:</p>

<pre><code class="ini">[database]
username = "root"
password = "secure"
</code></pre>

<p>using environment variables like this:</p>

<pre><code class="bash">export MATOMO_DATABASE_USERNAME=root
export MATOMO_DATABASE_PASSWORD=secure
</code></pre>

<h3>Known issues:</h3>

<ul>
<li>Configuration arrays are currently not supported, for example you cannot define which <code>Plugins[]</code> should be loaded.</li>
<li>At some point your Matomo may save/write the config file, for example when changing certain settings through the UI such as the trusted hosts. In this case, the currently read environment variables will be saved in the config file.</li>
<li>If this plugin is used with PHP-FPM, for example in combination with NGINX, PHP-FPM will not have access to the environment variables by default. The pool used by PHP-FPM must either explicit define which ENVs should be exposed, or set <code>clear_env = no</code> in <code>/etc/php7/php-fpm.f/&lt;pool&gt;.conf</code>.</li>
</ul>";s:3:"faq";s:0:"";s:13:"documentation";s:0:"";s:9:"changelog";s:379:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><h3>5.0.0</h3>

<ul>
<li>Compatibility with Matomo 5</li>
</ul>

<h3>4.0.1</h3>

<ul>
<li>Compatibility with PHP DI 6</li>
</ul>

<h3>4.0.0</h3>

<ul>
<li>Compatibility with Matomo 4</li>
</ul>

<h3>3.0.0</h3>

<ul>
<li>Initial version</li>
</ul>";}s:8:"download";s:52:"/api/2.0/plugins/EnvironmentVariables/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:73:"https://plugins.matomo.org/EnvironmentVariables/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}i:95;a:31:{s:4:"name";s:30:"AnonymousPiwikUsageMeasurement";s:11:"displayName";s:33:"Anonymous Piwik Usage Measurement";s:5:"owner";s:10:"matomo-org";s:11:"description";s:78:"Send anonymized usage data to your own Matomo instance or to any other Matomo.";s:8:"homepage";s:18:"https://matomo.org";s:15:"createdDateTime";s:19:"2015-10-19 14:04:02";s:6:"donate";a:0:{}s:7:"support";a:3:{i:0;a:4:{s:4:"name";s:5:"Forum";s:3:"key";s:5:"forum";s:5:"value";s:24:"https://forum.matomo.org";s:4:"type";s:3:"url";}i:1;a:4:{s:4:"name";s:13:"Issues / Bugs";s:3:"key";s:6:"issues";s:5:"value";s:74:"https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/issues";s:4:"type";s:3:"url";}i:2;a:4:{s:4:"name";s:6:"Source";s:3:"key";s:6:"source";s:5:"value";s:67:"https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement";s:4:"type";s:3:"url";}}s:7:"isTheme";b:0;s:8:"keywords";a:4:{i:0;s:5:"piwik";i:1;s:8:"tracking";i:2;s:5:"usage";i:3;s:11:"measurement";}s:9:"basePrice";i:0;s:7:"authors";a:1:{i:0;a:3:{s:4:"name";s:6:"Matomo";s:5:"email";s:16:"hello@matomo.org";s:8:"homepage";s:18:"https://matomo.org";}}s:13:"repositoryUrl";s:67:"https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement";s:11:"lastUpdated";s:19:"2023-05-04 21:50:03";s:13:"latestVersion";s:5:"5.0.0";s:12:"numDownloads";i:17715;s:11:"screenshots";a:2:{i:0;s:88:"https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/images/5.0.0/AdminSettings.png";i:1;s:87:"https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/images/5.0.0/UserSettings.png";}s:8:"previews";a:0:{}s:8:"activity";a:3:{s:10:"numCommits";s:3:"183";s:15:"numContributors";s:1:"9";s:14:"lastCommitDate";s:19:"2023-11-13 03:31:04";}s:8:"featured";b:0;s:6:"isFree";b:1;s:6:"isPaid";b:0;s:8:"isBundle";b:0;s:14:"isCustomPlugin";b:0;s:4:"shop";N;s:6:"bundle";a:1:{s:7:"plugins";a:0:{}}s:12:"specialOffer";s:0:"";s:8:"versions";a:2:{i:0;a:10:{s:4:"name";s:5:"4.1.0";s:7:"release";s:19:"2022-04-26 02:34:02";s:8:"requires";a:1:{s:6:"matomo";s:21:">=4.10.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:2785;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:71:"https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/4.1.0/license";}s:22:"repositoryChangelogUrl";s:81:"https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/commits/4.1.0";s:10:"readmeHtml";a:4:{s:11:"description";s:0:"";s:3:"faq";s:0:"";s:9:"changelog";s:0:"";s:13:"documentation";s:0:"";}s:8:"download";s:62:"/api/2.0/plugins/AnonymousPiwikUsageMeasurement/download/4.1.0";}i:1;a:10:{s:4:"name";s:5:"5.0.0";s:7:"release";s:19:"2023-05-04 21:50:03";s:8:"requires";a:1:{s:6:"matomo";s:20:">=5.0.0-b1,<6.0.0-b1";}s:19:"wordPressCompatible";b:1;s:19:"onPremiseCompatible";b:1;s:12:"numDownloads";i:257;s:7:"license";a:2:{s:4:"name";s:7:"GPL v3+";s:3:"url";s:71:"https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/5.0.0/license";}s:22:"repositoryChangelogUrl";s:84:"https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/commits/5.0.0-b1";s:10:"readmeHtml";a:4:{s:11:"description";s:1708:"

<p>Track usage of your Matomo service into up to two Matomos:</p>

<ul>
<li>your own Matomo (can be configured optionally)</li>
<li>a custom Matomo (can be configured optionally)</li>
</ul>

<h3>What is Matomo doing to make sure the data is anonymized?</h3>

<p>We are very careful in what we track and we make sure to anonymize data that could contain user data.</p>

<ul>
<li>We overwrite the page title as the title could contain the name of the viewed website</li>
<li>We remove any referrer information</li>
<li>We replace URL parameters with a predefined value apart from a few whitelisted ones to make sure no actual token_auth, CSRF token or user defined value will be tracked</li>
<li>We do not just track any outlinks or downloads</li>
</ul>

<p>We track any information as efficient as possible to not slow down your Matomo. If you have already performance problems with your Matomo we recommend to not install this plugin though.</p>

<h3>Which data is tracked?</h3>

<p>When the plugin is activated, the following data will be tracked:</p>

<ul>
<li>The pages and reports that are viewed</li>
<li>The visitors\' software and devices data like the used browser and the resolution</li>
<li>Some clicks or interactions with certain selectors or buttons. For example we track an event when a segment is selected but we do not track the actual segment.</li>
<li>In a daily task we track the following data:

<ul>
<li>Matomo version</li>
<li>PHP version</li>
<li>Number of websites</li>
<li>Number of users</li>
<li>Number of segments</li>
<li>How often which API method was called (only plugin name and method name but no parameters) and how long the API calls took on average.</li>
</ul></li>
</ul>";s:3:"faq";s:680:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><p><strong>Are there any prerequisites?</strong></p>

<ul>
<li>If tracking to a custom Matomo installation is enabled, your Matomo installation and your Matomo users must be able to connect to this instance</li>
<li>If tracking to a custom Matomo installation is enabled and your Matomo is served via HTTPS, the custom Matomo installation must be available via HTTPS as well</li>
</ul>

<p><strong>Why was this plugin created?</strong></p>

<p>This plugin was created to provide a simple way to measure how Matomo product itself is being used.</p>";s:13:"documentation";s:0:"";s:9:"changelog";s:907:"<style> .main-div-readme { display: flex; } .left-div-readme { width: 50%; } .right-div-readme { flex-grow: 1; width: 50%; } </style><ul>
<li>5.0.0 Compatibility with Matomo 5</li>
<li>4.1.0 Migrating from AngularJS to Vue</li>
<li>4.0.2 Compatibility with Matomo 4</li>
<li>4.0.1 Compatibility with Matomo 4</li>
<li>4.0.0 Compatibility with Matomo 4</li>
<li>3.1.0 No longer send optionally any usage data to Matomo</li>
<li>3.0.3 Renaming from Piwik to Matomo</li>
<li>3.0.0 Compatibility with Matomo 3</li>
<li>0.2.1 Track MySQL server version in a custom variable.</li>
<li>0.2.0 Add possibility to enable/disable anonymization and tracking user login as userID</li>
<li>0.1.4 Fixed a bug that failed to track under HTTPS under circumstances</li>
<li>0.1.3 Updated plugin description only</li>
<li>0.1.2 Bugfixes</li>
<li>0.1.1 Track average API executime time</li>
<li>0.1.0 Initial release</li>
</ul>";}s:8:"download";s:62:"/api/2.0/plugins/AnonymousPiwikUsageMeasurement/download/5.0.0";}}s:14:"isDownloadable";b:1;s:9:"changelog";a:1:{s:3:"url";s:83:"https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/changelog?matomoversion=5";}s:8:"consumer";a:1:{s:7:"license";N;}}}}}', ['allowed_classes' => false]);