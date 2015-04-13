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
		Schema::create('protectors', function($table)
		{
			$table->integer('id')->unsigned();
			$table->foreign('id')->references('id')->on('users');
			$table->primary('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->date('date_of_birth');
			$table->string('phone_number');
			$table->string('alt_phone_number')->nullable();
			$table->integer('id_coun')->unsigned();
			$table->foreign('id_coun')->references('id')->on('countries');
			$table->integer('id_lang')->unsigned();
			$table->foreign('id_lang')->references('id')->on('languages');
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
		Schema::drop('protectors');
	}

}
