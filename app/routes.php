<?php

Route::get('/auth/login', ['uses' => 'AuthController@showLogin']);
Route::post('/auth/login', ['uses' => 'AuthController@login']);

Route::get('/auth/register', ['uses' => 'AuthController@showRegister']);
Route::post('/auth/register', ['uses' => 'AuthController@register']);
Route::post('/auth/register/portal', ['uses' => 'AuthController@registerPortal']);

Route::get('/auth/forgot', ['uses' => 'AuthController@showForgot']);
Route::post('/auth/forgot', ['uses' => 'RemindersController@postRemind']);

Route::get('/auth/forgot/{token}', ['uses' => 'RemindersController@getReset']);
Route::post('/auth/forgot/reset', ['uses' => 'RemindersController@postReset']);

Route::get('logout', ['uses' => 'AuthController@logout']);

// Paneles
Route::group(['before' => 'auth'], function () {

	if(Auth::user())
    require (__DIR__ . '/routes/' . Auth::user()->tipo . '.php');

});

Route::get('{cc}/{page?}', ['uses' => 'HomeController@cc']);


if(!Auth::user())
Route::get('/', function(){
	return Redirect::to('/auth/login');
});

App::missing(function($exception)
{
    //return Redirect::to('login');
});

