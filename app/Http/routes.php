<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('newhome');
});
Route::get('/upload', function(){
	return view('upload');
});
Route::get('/scale', function(){
	return view('scale');
});
Route::get('/maths', function(){
	return view('maths');
});
Route::auth();

Route::get('/home', 'HomeController@index');
