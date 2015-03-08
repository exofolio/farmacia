<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compras extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_cliente')->unsigned();
			$table->foreign('id_cliente')->references('id')->on('clientes');
			$table->integer('id_medicamento')->unsigned();
			$table->foreign('id_medicamento')->references('id')->on('catalogo');
			$table->integer('cantidad')->unsigned();
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
		Schema::drop('compras');
	}

}
