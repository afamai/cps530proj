<?php
$active = array("","","","",'class="active"',"");
$content = <<<EOF
<h1>Conclusion</h1>

<u><h4>Did the framework/CMS you choose perform to your expectations?</h4></u>
<p>For what we wanted to create, Laravel performed to our expectations.</p>
<br>
<u><h4>Was the framework/CMS you chose difficult to install or configure?</h4></u>
<p>Installing Laravel and trying to host a server for it was a pain in the butt.</p>
<br>
<u><h4>Was it easy the create the page with the chosen framework/CMS?</h4></u>
<p>Pages were fairly easy to create, as Laravel uses the blade template. This template allows us to quickly create pages using
a built in feature. Click <a href="bladetemp.php">here</a> for more info.</p>
<br>
<u><h4>Was the learning curve steep compared with regular HTML/CSS?</h4></u>
<p>There is definitely a steep learning curve for Laravel compared to regular HTML and CSS. Laravel has many features that allow the user to create databases and implement secutrity (authentication, authorization, etc); however, these features were not neccessary for us to complete the assignemnt so we did not use them.</p>
<br>
<u><h4>Would you have done things differently in retrospect?</h4></u>
<p>Pick a less complex framework. </p>
<br>
<u><h4>Did you regret your choice of framework/CMS?</h4></u>
<p>Haha...Yeah. There are more suitable frameworks for this assignment. </p>
<br>
<br>
<br>
EOF;

include '../layouts/default.php';
?>
