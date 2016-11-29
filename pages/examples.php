<?php
$active = array("","","",'class="active"',"","");
$content = <<<EOF
<h1>Examples</h1>
<h3>Links to the examples.</h3>
<h3>Routes</h3>
<a target="_blank" href="https://laraveldemo.000webhostapp.com">https://laraveldemo.000webhostapp.com</a>
<br>
<a target="_blank" href="https://laraveldemo.000webhostapp.com/hello">https://laraveldemo.000webhostapp.com/hello/{name?}</a>
<br>
<a target="_blank" href="https://laraveldemo.000webhostapp.com/hello/John/age/30/feeling/happy">
https://laraveldemo.000webhostapp.com/hello/{name}/age/{age}/feeling/{mood}</a>
<br>
<a target="_blank" href="https://laraveldemo.000webhostapp.com/user">https://laraveldemo.000webhostapp.com/user/{id?}</a>
<h3>Views, Blade Template and Demo</h3>
<p><a target="_blank" href="https://laraveldemo.000webhostapp.com/test">Views example</a>. Try adding a paramter at the end of the url.
https://laraveldemo.000webhostapp.com/test/{str?}</p>
<a target="_blank" href="https://laraveldemo.000webhostapp.com/blade"> Blade Template example</a>
<br><br>
<p><a target="_blank" href="https://laraveldemo.000webhostapp.com/demo">Simple Page Demo</a>. The route contains
2 paramters https://laraveldemo.000webhostapp.com/demo/{title?}/{num?}</p>
<br>
<br>
EOF;

include '../layouts/default.php';
?>
