<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/install', function () {
    return view('pages.install');
});

Route::get('/tutorial', function () {
    return view('pages.tutorial');
});

Route::get('/conclusion', function () {
    return view('pages.conclusion');
});
Route::get('/credits', function () {
    return view('pages.credits');
});

Route::get('hello', function(){
	echo "hello";
  echo "heee";
});
