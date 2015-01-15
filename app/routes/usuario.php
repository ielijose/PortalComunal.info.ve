<?php

Route::get('/', ['uses' => 'UsuarioController@dashboard']);

Route::get('/registrar-pasantia', ['before'=> 'canRegister', 'uses' => 'UsuarioController@registrarPasantia']);

Route::post('/registrar', ['uses' => 'UsuarioController@registrar']);

Route::get('/generar-carta', ['before'=> 'canGenerate', 'uses' => 'UsuarioController@generarCarta']);


Route::get('/pasantias', ['uses' => 'UsuarioController@pasantias']);
Route::get('/pasantia/{id}', ['uses' => 'UsuarioController@pasantia']);

Route::get('/documentos', ['uses' => 'UsuarioController@documentos']);

Route::get('/calendario', ['uses' => 'UsuarioController@calendario']);

Route::get('eventos/semestre/{id}', ['uses' => 'UsuarioController@eventos_semestre']);


View::composer('usuario.pasantia', function($view)
{
    $view->with('current', Pasantia::current()->self()->first());
});
View::composer('usuario.documentos', function($view)
{
    $view->with('current', Pasantia::current()->self()->first());
});
View::composer('usuario.layouts.sidebar', function($view)
{
    $view->with('current', Pasantia::current()->self()->first());
});