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
			$table->increments('id_org');
			//$table->primary('id_org');
			$table->string('login')->unique();
			$table->string('haslo');
			$table->string('email')->unique();
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
