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

Route::get('/', ['as' => 'home', 'uses' =>'CausaController@index']);

Route::get('/login', function () {
	return view('login');
});

/*FACEBOOK*/
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::group(['middleware' => 'auth'], function() {
		Route::get('causas/crear/{id?}', 'CausaController@create');
        Route::post('causas', 'CausaController@store');
});