<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portales', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('usuarios');

			$table->string('consejo_comunal');
			$table->string('subdominio');
			$table->string('codigo');
      
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
		Schema::drop('portales');
	}

}
