<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoclegiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noclegi', function($table)
		{
			$table->increments('id');
			$table->string('nazwa');
			$table->string('ulica');
			$table->string('nr_budynku');
			$table->string('kod_pocztowy');
			$table->string('miejscowosc');
			$table->string('telefon');
			$table->string('zdjecie');
			$table->string('mapa');
			$table->integer('miejsca_wolne');
			$table->integer('miejsca_ogolem');
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
		Schema::drop('noclegi');
	}

}
