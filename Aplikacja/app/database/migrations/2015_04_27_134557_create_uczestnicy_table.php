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
		Schema::create('participants', function($table)
		{
			$table->integer('id')->unsigned();
			$table->foreign('id')->references('id')->on('users');
			$table->primary('id');
			$table->string('first_name');
			$table->string('last_name');	
			$table->date('date_of_birth');
			$table->string('phone_number');
			$table->integer('id_coun')->unsigned();
			$table->foreign('id_coun')->references('id')->on('countries');
			$table->integer('id_first_lang')->unsigned();
			$table->foreign('id_first_lang')->references('id')->on('languages');
			$table->integer('id_second_lang')->unsigned()->nullable();
			$table->foreign('id_second_lang')->references('id')->on('languages');
			$table->integer('id_third_lang')->unsigned()->nullable();
			$table->foreign('id_third_lang')->references('id')->on('languages');
			$table->integer('id_gr')->unsigned();
			$table->foreign('id_gr')->references('id')->on('groups');
			$table->string('document_number');
			$table->string('insurance_number');
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
		Schema::drop('participants');
	}

}
