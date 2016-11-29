<?php
$active = array("","",'class="active"',"","","");
$title = '<h1>Views</h1>';
$content = <<<EOF
<h2>Introduction</h2>
<p>Laravel views are the files that display the output of our application. Essenstially the HTML and CSS files that you are going output. The views files are located in <code>resources\\views</code></p>
<h3>Creating a View</h3>
<p>Let's go to <code>resources\views</code>, inside this directory you should see a file called
<code>welcome.blade.php</code>. This is the welcome file metioned in the Route section, this file is the HTML you see when
you access the root of the application. As you can see it has an extension <code>blade.php</code>, which means that the
file uses the blade template in Laravel (This will be covered in another section).
</p>
<p>To begin, create let us create a simple HTML page. Name the file <code>test.php</code> and type the following into
the file.</p>
<pre><code>&lt!DOCTYPE html&gt
&lthtml&gt
  &lthead&gt
    &lttitle&gtTest&lt/title&gt
  &lt/head&gt
  &ltbody&gt
    &lth1&gtHello World!&lt/h1&gt
    &ltp&gtThis is written in HTML!&lt/p&gt
  &lt/body&gt
&lt/html&gt
</code></pre>
<p>Now let's go back to the <code>routes\web.php</code> file and add a new route.</p>
<pre><code>Route::get('test', function(){
	  return view('test');
});</code></pre>
<p>You can try this example on your own local machine  or at https://laraveldemo.000webhostapp.com/test. </p>
<p>With the views you no longer have to output the result on the spot while you are defining a route. Instead you just
simply return the view for the corresponding file for that specified URI. </p>
<p>Note: All views file must be php files, since Laravel is a php framework after all.</p>

<h3>Using Route Parameters</h3>
<p>Remember how you can use paramters in routes? Well you can actually make use of them inside your views files as well!</p>
<p>Edit the <code>&ltbody&gt</code> section of the <code>test.php</code> file to this.</p>
<pre><code>&lth1&gtHello &lt?php echo \$name;?&gt !&lt/h1&gt</code></pre>
<p>Go back to your <code>routes\web.php</code> file and edit the <code>test</code> route to this.
<pre><code>Route::get('test/{str?}', function(\$str = 'World'){
	  return view('test', ['name' => \$str]);
});</code></pre>
<p>The code <code>['name' => \$str]</code> will initialize a variable named <code>name</code> with the value of
<code>\$str</code>. With this line, the variable <code>\$name</code> can now be used in side of <code>test.php</code> with
the value of <code>\$str</code>. sThis Route now will display the <code>test.php</code> file along side with the route parameter that was entered into the
URI. </p>
<h3>Linking CSS Files</h3>
<p>The css files should be saved in the <code>public\css</code> directory.
To link the css file from the views directory simple type.</p>
<pre><code>&ltlink rel="stylesheet" type="text/css" href="/css/stylesheet.css"&gt</code></pre>
<br>
<br>
EOF;

include '../layouts/sidebar.php';
?>
