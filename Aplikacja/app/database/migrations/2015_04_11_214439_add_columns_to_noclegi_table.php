<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToNoclegiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::table('miejscanoclegowe', function($table)
			{
				$table->string('nazwa');
				$table->string('image');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('miejscanoclegowe', function($table)
		{
			$table->dropColumn(array('nazwa', 'image'));
		});
	}

}
