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

Route::get('/', ['middleware'=>'auth','uses'=>'PostsController@index'], function () {
    return redirect()->action('PostsController@index');
});

Route::resource('posts', 'PostsController');

Route::resource('users', 'UserController', ['except' => ['create', 'store']]);

// Route::get('posts', 'PostsController@search');


Route::get('orm-test', function ()
{
	$post1 = new \App\Models\Post();
	$post1->title = 'Eloquent is awesome!';
	$post1->url='https://laravel.com/docs/5.1/eloquent';
	$post1->content  = 'It is super easy to create a new post.';
	$post1->created_by = 1;
	$post1->save();

	$post2 = new \App\Models\Post();
	$post2->title = 'Eloquent is really easy!';
	$post2->url='https://laravel.com/docs/5.1/eloquent';
	$post2->content = 'It is super easy to create a new post.';
	$post2->created_by = 1;
	$post2->save();

});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');