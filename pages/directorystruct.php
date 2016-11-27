<?php
$title = '<h1>Directory Structure</h1>';
$content = <<<EOF
<h3>Introduction</h3>
<p>The default Laravel directory may seem overwhelming at the beginning, but it is actually a great way to begin creating your application regardless of how large or small it is. Hopefully
by the end of this section you have a decent understanding of the Laravel directory srtucture</p>
<img src="../images/laravelDirectory.png"></img>
<h4>App Directory</h4>
<p>This directory contains the core code or logic for your application. </p>
<h4>Bootstrap Directory</h4>
<p>This directory contain files that bootstraps laravel and gets starts it up.</p>
<h4>Config Directory</h4>
<p>This directry contain all the configurations for Laravel settings and other packages that might be used for your application.</p>
<h4>Database Directory</h4>
<p>This directory contains your database seeds and migration.</p>
<h4>Public Diectory</h4>
<p>This directory contains the <code>index.php</code> file where it is the entry point for all requiest entering your application. This also contains other assets, such as images, CSS and JavaScript.</p>
<h4>Resources Directory</h4>
<p>This contains the view, which essentially are the HTML files that is going to be used to display our webpages.</p>
<h4>Routes Direstory</h4>
<p>This is where all the routes are going to live</p>
<h4>Storage Directory</h4>
<p>This directory contains all the logs and other storage that it is going to be used by your application.</p>
<h4>Tests Directory</h4>
<p>This directory contains all the automated tests for your application to make sure it is functioning correctly.</p>
<h4>Vendor Directory</h4>
<p>This directory contains your Composer dependencies.</p>
EOF;

include '../layouts/sidebar.php';

?>
