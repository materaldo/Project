<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('groups', function($table)
		{
			$table->increments('id');
			$table->integer('number_of_people');
			$table->string('means_of_transport');
			$table->integer('id_prot')->unsigned();
			$table->foreign('id_prot')->references('id')->on('protectors');
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
		Schema::drop('groups');
	}

}
