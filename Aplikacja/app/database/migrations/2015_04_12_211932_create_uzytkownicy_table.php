<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUzytkownicyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uzytkownicy', function($table)
		{
			$table->increments('id');
			$table->string('login')->unique();
			$table->string('haslo');
			$table->integer('rola');
			$table->string('email')->unique();
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
		Schema::drop('uzytkownicy');
	}

}
