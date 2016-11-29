<?php
$active = array("","",'class="active"',"","","");
$title = '<h1>Routing</h1>';
$content = <<<EOF
<h2>Introduction</h2>
<p>Laravel provdes a very simple way of defining routes, the most basic routes simple takes in a URI and a closure. All Laravel routes are defined and located in the routes directory.
Most application begin defining routes in the <code>routes\web.php</code> directory.</p>

<h3>Defining a Route</h3>
<p>When you open up the web.php file you should already see one route defined. This route defines the root for our application</p>
<pre><code>Route::get('/', function () {
    return view('welcome');
});</code></pre>
<p>The general syntax for creating a route is <code>Route::get(<em>uri</em>, <em>callback</em>)</code>. Where the route is using the method <em>get</em> accepting a URI and the callback function when someone
access that URI.</p>
<p>So this route will display a file called 'welcome' in our views folder (which will be talked about later) to the broswer when someone tries to access the root of our application. If you recall from the installation page, this is essentailly the route that
display the Laravel page when we enter <code>http://localhost:8000</code>.</p>
<br>
<h4>Available Methods</h4>
<p>There are many other methods you can use. But for this tutorial we are just going to use the <em>get</em> method </p>
<pre><code>Route::get(uri, callback);
Route::post(uri, callback);
Route::put(uri, callback);
Route::patch(uri, callback);
Route::delete(uri, callback);
Route::options(uri, callback);
</code></pre>
<p>Now let's create our own route. Type the following into your web.php file.</p>
<pre><code>Route::get('hello', function () {
    echo 'Hello World';
});</code></pre>
<p>Save it and go to <code>http://localhost:8000/hello</code> or try it at https://laraveldemo.000webhostapp.com/hello if you haven't set up laravel. The page should output 'Hello World'.</p>
<img src="../images/routeImg1.png" ></img>

<h3>Route Parameters</h3>
<br>
<h4>Required Parameter</h4>
<p>In addition to being able to create routes for a specific URI, you can also specify a parameter.</p>
<pre><code>Route::get('hello/{name}', function (\$name) {
    echo 'Hello '. \$name;
});</code></pre>
<p>Note: The parameters are always encased in {}. The paramter name must not have a dash '-' character, use an underscore '_' instead.</p>
<p>Now if you try to access <code>http://localhost:8000/hello/John</code> it will now display:</p>
<img src="../images/routeImg2.png"></img>
<p>You can also create as many route parameters as you need. </p>
<pre><code>Route::get('hello/{name}/age/{age}/feeling/{mood}', function (\$name, \$age, \$mood) {
    echo 'Hello '. \$name . '! You are a ' . \$mood . ' ' . \$age . ' years old human being.';
});</code></pre>
<p>Feel free to play around with the url and change the name.</p>
<br>
<h4>Optional Parameter</h4>
<p>Sometimes you might a paramter to be optional instead of required. To do that simply add a ? at the end of the variable name. Make sure to have the variable set to a value in the function, just
in case if a variable was not typed in. </p>
<pre><code>Route::get('user/{id?}', function(\$id = 'none'){
    echo 'User ID: ' . \$id;
});</code></pre>
<p>This route will take in a parameter called <code>id</code> after <code>user</code>. However if no value was inputted, the function will set the parameter <code>id</code> to <code>'none'</code></p>
<p>Here it is with the parameter inputted.</p>
<img src="../images/routeImg3.png"></img>
<p>And here it is without the paramter</p>
<img src="../images/routeImg4.png"></img>
<p>Feel free to try this example out at https://laraveldemo.000webhostapp.com/user</p>
EOF;

include '../layouts/sidebar.php';
?>
