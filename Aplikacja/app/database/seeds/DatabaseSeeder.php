<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
//require_once 'CountriesTableSeeder.php';
		$this->call('CountriesTableSeeder');
		$this->call('LanguagesTableSeeder');
		$this->call('TestTableSeeder');
	}

}
