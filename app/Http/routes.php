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
    return view('welcome');
});

Route::get('/sayhello/{name?}', function($name = 'Lassen'){
	if ($name == "Chris") {
        return redirect('/');
    }

	return 'Hello ' . $name;
});

Route::get('/uppercase/{str?}', 'HomeController@uppercase');

Route::get('/increment/{num?}', 'HomeController@increment');

Route::get('/add/{num1?}/{num2?}', function ($num1 = 0, $num2 = 0) {
    return $num1 + $num2;
});

Route::get('/rolldice/{guess?}', 'HomeController@rolldice');

Route::resource('posts', 'PostsController');