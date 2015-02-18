<?php

Route::get('/', ['uses' => 'CoordinadorController@dashboard']);

/* WEB */
Route::get('/portales', ['uses' => 'CoordinadorController@portales']);
Route::get('/usuarios', ['uses' => 'CoordinadorController@usuarios']);
Route::get('/eliminar-portal/{id}', ['uses' => 'CoordinadorController@eliminarPortal']);