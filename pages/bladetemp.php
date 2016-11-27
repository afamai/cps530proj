<?php

$title = '<h1>Blade Templates</h1>';
$content = <<<EOF
<h3>Introduction</h3>
<p>Blade is a powerful templating engine that has been provided with Laravel. In your views, Blade provides you with a new syntax for PHP but does not resrict your use of plain PHP code. All Blade views are compiled into plain PHP code which are cached until they are modified, and use the file extension .blade.php.</p>

<h4>Displaying Data</h4>
<p>Given your route, you may display data that has been passed onto your Blade view by using curly brackets. You may also echo the results of any PHP function.</p>

<p>Route::get('hello', function () {<br>
    return view('hello', ['name' => 'Laravel']);<br>
});</p>

<p>Hello, {{ $name }}.</p>

<h4>If Statements</h4>
<p>Blade provides a short and clean way to write PHP control structures. If statements can be written with the @if, @elseif, @else, and @endif directives. These directives work the same way as their PHP counterparts. Blade also provides us with a @unless directive aswell.</p>

<p>@if($name == 'Laravel')<br>
    My name is Laravel.<br>
@endif</p>

<h4>Loops</h4>
<p>Blade provides directives for PHP loop structures too. Some of them are @for, @endfor, @foreach, @endforeach, @forelse, @endforelse, @while, and @endwhile. Same as the if statements, these directives work the same way as their PHP counterparts.</p>

<p>@for ($i = 0; $i < 10; $i++)<br>
    The current value is {{ $i }}<br>
@endfor</p>
EOF;

include '../layouts/sidebar.php';
?>
