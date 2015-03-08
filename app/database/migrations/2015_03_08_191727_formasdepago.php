<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Formasdepago extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('formasdepago', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_cliente')->unsigned();
			$table->foreign('id_cliente')->references('id')->on('clientes');
			$table->string('num_tarjeta');
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
		Schema::drop('formasdepago');
	}

}
