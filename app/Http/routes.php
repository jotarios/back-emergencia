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

//Get data of the FB's Event
Route::get('/get_event', function () {
    return view('create_initiative'); //TO-DO
});

Route::get('/get_manual_data', function () {
	return view('get_manual_data');  //TO-DO
});

Route::get('/create_event', function (){
	return view('create_event');
});


Route::resource('causas', 'CausaController');

/*FACEBOOK*/
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');