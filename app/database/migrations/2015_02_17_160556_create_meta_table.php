<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meta', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('portal_id')->unsigned();
			$table->foreign('portal_id')->references('id')->on('portales');

			$table->string('key');
			$table->text('value');
     
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
		Schema::drop('meta');
	}

}
