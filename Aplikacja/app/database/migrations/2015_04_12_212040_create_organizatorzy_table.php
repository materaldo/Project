<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizatorzyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizatorzy', function($table)
		{
			$table->increments('id');
			$table->integer('uzytkownik_id')->unsigned();
			$table->foreign('uzytkownik_id')->references('id')->on('uzytkownicy');
			$table->string('telefon')->nullable();
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
		Schema::drop('organizatorzy');
	}

}
