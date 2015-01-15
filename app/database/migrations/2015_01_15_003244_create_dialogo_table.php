<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDialogoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dialogos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('usuarios');

			$table->integer('portal_id')->unsigned();
			$table->foreign('portal_id')->references('id')->on('portales');

			$table->string('consejo_comunal');
			$table->enum('tipo', ['pregunta', 'respuesta']);
			$table->string('texto');
     
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
		Schema::drop('dialogos');
	}

}
