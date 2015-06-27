<?php
/**
* Migration for accommodations
*
* Representation of accommodations table schema in database
*/
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* Class CreateNoclegiTable
*
* Includes methods used to create and drop accommodations table
*/
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
			$table->string('building');
			$table->string('post_code');
			$table->string('city');
			$table->string('phone_number');
			$table->string('image');
			$table->string('map');
			$table->integer('free_places');
			$table->integer('all_places');
			$table->integer('price');
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
