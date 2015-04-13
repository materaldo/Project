<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoclegiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accommodations', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('street');
			$table->string('buildings');
			$table->string('post_code');
			$table->string('city');
			$table->string('phone_number');
			$table->string('image');
			$table->string('map');
			$table->integer('free_places');
			$table->integer('all_places');
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
		Schema::drop('accommodations');
	}

}
