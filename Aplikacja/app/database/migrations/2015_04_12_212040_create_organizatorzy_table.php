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
			$table->integer('id')->unsigned();
			$table->foreign('id')->references('id')->on('uzytkownicy');
			$table->primary('id');
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
