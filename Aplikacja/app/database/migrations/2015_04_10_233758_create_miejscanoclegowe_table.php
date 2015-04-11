<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiejscanoclegoweTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('miejscanoclegowe', function($table)
		{
			$table->increments('id_noc');
			//$table->primary('id_org');
			$table->string('ulica');
			$table->string('nr_mieszkania');
			$table->string('kod_pocztowy');
			$table->string('miejscowosc');
			$table->string('telefon');
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
		Schema::drop('miejscanoclegowe');
	}

}
