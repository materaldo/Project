<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorzyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administratorzy', function($table)
		{
			$table->increments('id');
			$table->integer('uzytkownik_id')->unsigned();
			$table->foreign('uzytkownik_id')->references('id')->on('uzytkownicy');
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
		Schema::drop('administratorzy');
	}

}
