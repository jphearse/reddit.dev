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

Route::get('/uppercase/{str?}', function ($str = 'uppercase') {
    return strtoupper($str);
});

Route::get('/increment/{num?}', function ($num = 0) {
    return $num + 1;
});

Route::get('/add/{num1?}/{num2?}', function ($num1 = 0, $num2 = 0) {
    return $num1 + $num2;
});

Route::get('/rolldice/{guess?}', function ($guess = 0) {
    $dice['random'] = rand(1, 6);
    $dice['guess'] = $guess;
    return view('roll-dice') -> with($dice);
});