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
			//$table->increments('id');
			$table->string('login');
			$table->string('imie');
			$table->string('nazwisko');
			//$table->integer('rokZal');
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
