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

 //Route::resource('users', 'UserController');

Route::get('/', function () {
    return view('home');
});

Route::get('/voluntarios', 'CausaController@index');

Route::get('/login', function () {
	return view('login');
});

/*FACEBOOK*/
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('home', array('as' => 'home', 'uses' => function(){
  return view('home');
}));
Route::group(['middleware' => 'auth'], function() {
		Route::get('/get_manual_data', function () {
			return view('get_manual_data');  //TO-DO
		});
		Route::resource('causas', 'CausaController');
		Route::get('causas/crear/{id}', 'CausaController@create');
});
