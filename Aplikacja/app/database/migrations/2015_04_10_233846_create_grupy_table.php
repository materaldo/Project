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
		
		Schema::create('grupy', function($table)
		{
			$table->increments('id_gr');
			$table->integer('ilosc_osob');
			$table->string('srodek_transportu');
			$table->integer('opiekun_id')->unsigned();
			$table->foreign('opiekun_id')->references('id_op')->on('opiekunowie');
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupy');
	}

}
