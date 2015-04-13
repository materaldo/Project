<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpiekunowieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opiekunowie', function($table)
		{
			$table->increments('id');
			$table->integer('uzytkownik_id')->unsigned();
			$table->foreign('uzytkownik_id')->references('id')->on('uzytkownicy');
			$table->string('imie');
			$table->string('nazwisko');
			$table->date('data_urodzenia');
			$table->string('telefon');
			$table->string('nr_zapasowy')->nullable();
			$table->integer('kraj_id')->unsigned();
			$table->foreign('kraj_id')->references('id')->on('narodowosci');
			$table->integer('jezyk_id')->unsigned();
			$table->foreign('jezyk_id')->references('id')->on('jezyki');
			$table->string('numer_dokumentu');
			$table->string('numer_ubezpieczenia');
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
		Schema::drop('opiekunowie');
	}

}
