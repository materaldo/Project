<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupynoclegoweTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groups_accommodations', function($table)
		{
			$table->increments('id');
			$table->integer('id_gr')->unsigned();
			$table->foreign('id_gr')->references('id')->on('groups');
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
		Schema::drop('groups_accommodations');
	}

}
