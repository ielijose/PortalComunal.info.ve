<?php

class AppTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
			'nombre' => "Eli js",		
			'apellido' => "Carrasnode",		
			'cedula' => 21382657,
			'usuario' => "ielijose",
			'password' => "2512",
			'email' => "ielijose@gmail.com"
			));
	}

}