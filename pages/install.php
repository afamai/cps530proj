<?php

$content = <<<EOF
<h1>Installation</h1>

<h3>Server Requirements</h3>

<p>Before installing the Laravel framework. There are some server requirements that must be meet in order for Laravel to work.</p>

<ul>
  <li>PHP >= 5.6.4</li>
  <li>OpenSSL PHP Extension</li>
  <li>PDO PHP Extension</li>
  <li>Mbstring PHP Extension</li>
  <li>Tokenizer PHP Extension</li>
  <li>XML PHP Extension</li>
</ul>

<h3>Installing Composer</h3>

<p>Now that you have found or created a server with the specific requirements. You need to install <a href="https://getcomposer.org/">Composer</a>, a tool for dependency management in PHP, for Laravel.
Essentially Composer allows us to install libraries we need for our project, more info <a target="_blank" href="https://getcomposer.org/doc/00-intro.md">here</a>.</p>
<p>After installing Composer into your system, type <code><kbd>composer</kbd></code> into your terminal or command prompt.</p>

<p>You should get somthing like this. As you can see it displays how to use Composer along with the available commands.<img src="../images/composerEX.png"></img></p>

<h3>Installing Laravel</h3>
<p>There are 2 ways to create your Laravel projects</p>

<h4>1. Through Laravel Installer</h4>

<p>Using Composer, type the following to download the Laravel installer.</p>

<code>
<kbd>composer global require "laravel/installer"</kbd>
</code>

<p>The Laravel installer should now be downloaded into
<code>C:\Users\[username]\AppData\Roaming\Composer\vendor\bin</code>
 where [username] is whatever account you are currently using in windows.<br>
If you are using Ubuntu or some kind of UNIX system it should be in your
<code>\$HOME/.composer/vendor/bin</code>
directory. Make sure you to place the directory into your \$PATH so you can use the <code>laravel</code> command anywhere in your system.
</p>

<p>To check type <code><kbd>laravel</kbd></code> into your terminal. You should see this.</p>
<img src="../images/laravelEx.png"></img>
<p>Now that you have access to the Laravel installer, it is time to create fresh Laravel installation.</p>

EOF;

include '../layouts/default.php';
?>
