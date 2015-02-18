<?php

class AppTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
			'nombre' => "Isaias",		
			'apellido' => "Taborda",		
			'cedula' => 2,
			'usuario' => "isaias",
			'password' => "1234",
			'email' => "isaias@gmail.com",
			'tipo' => 'encargado'
			));

		User::create(array(
			'nombre' => "Coordinador",		
			'apellido' => "C.",		
			'cedula' => 1,
			'usuario' => "coordinador",
			'password' => "1234",
			'email' => "coordinador@gmail.com",
			'tipo' => 'coordinador'
			));
	}

}