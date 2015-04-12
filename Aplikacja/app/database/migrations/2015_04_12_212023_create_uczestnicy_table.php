<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUczestnicyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uczestnicy', function($table)
		{
			$table->increments('id');
			$table->integer('uzytkownik_id')->unsigned();
			$table->foreign('uzytkownik_id')->references('id')->on('uzytkownicy');
			$table->string('imie');
			$table->string('nazwisko');	
			$table->date('data_urodzenia');
			$table->integer('kraj_id')->unsigned();
			$table->foreign('kraj_id')->references('id')->on('narodowosci');
			$table->integer('jezyk_id')->unsigned();
			$table->foreign('jezyk_id')->references('id')->on('jezyki');
			$table->integer('grupa_id')->unsigned();
			$table->foreign('grupa_id')->references('id')->on('grupy');
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
		Schema::drop('uczestnicy');
	}

}
