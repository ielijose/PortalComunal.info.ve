<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre');
			$table->string('apellido');
			$table->string('cedula');
			$table->string('usuario');
			$table->string('email');
            $table->string('password');
            
            
            $table->enum('tipo', ['usuario', 'encargado', 'coordinador'])->default('encargado');
            $table->string('remember_token')->nullable();

            $table->integer('portal_id')->unsigned()->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
