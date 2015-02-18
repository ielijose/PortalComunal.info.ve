
<?php

Route::get('/', ['uses' => 'EncargadoController@dashboard']);

if(!Auth::user()->hasPortal()){

	Route::get('/crear-portal', ['uses' => 'EncargadoController@crearPortal']);
	Route::post('/crear-portal', ['uses' => 'EncargadoController@crearPortal_post']);

}else{

	Route::get('/editar-portal', ['uses' => 'EncargadoController@editarPortal']);
	Route::post('/editar-portal', ['uses' => 'EncargadoController@editarPortal_post']);

	Route::get('/eliminar-portal', ['uses' => 'EncargadoController@eliminarPortal']);

	Route::get('/cartelera-informativa', ['uses' => 'EncargadoController@carteleraInformativa']);
	Route::post('/meta', ['uses' => 'EncargadoController@meta_post']);

	Route::get('/mision-vision', ['uses' => 'EncargadoController@misionVision']);
	Route::get('/directiva', ['uses' => 'EncargadoController@directiva']);
	Route::get('/proyectos', ['uses' => 'EncargadoController@proyectos']);
	Route::get('/faq', ['uses' => 'EncargadoController@faq']);

	Route::get('/miembros', ['uses' => 'EncargadoController@miembros']);
	
}