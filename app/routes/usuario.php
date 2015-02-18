<?php

Route::get('/', ['uses' => 'UsuarioController@dashboard']);

/* WEB */
Route::get('/mi-consejo-comunal', ['uses' => 'UsuarioController@portal']);
Route::get('/usuarios', ['uses' => 'UsuarioController@usuarios']);
Route::get('/eliminar-portal/{id}', ['uses' => 'UsuarioController@eliminarPortal']);