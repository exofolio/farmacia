<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catalogo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catalogo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('medicamento');
			$table->string('descripcion');
			$table->string('imagen');
			$table->integer('eninventario');
			$table->float('precio');
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
		Schema::drop('catalogo');
	}

}
