<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersaccommodationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_accommodations', function($table)
		{
			$table->increments('id');
			$table->integer('id_us')->unsigned();
			$table->foreign('id_us')->references('id')->on('participants');
			$table->integer('id_acc')->unsigned();
			$table->foreign('id_acc')->references('id')->on('accommodations');
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
		Schema::drop('users_accommodations');
	}

}
