<?php

class CountryController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.countries');
	}
	public function getNew()
	{
		return View::make('pl.addCountry');
	}
	public function getAdd()
	{
		$co = Input::get('pl.country');
		
		$country = new Country();
		$country->country = $co;
		
		$country->save();
		return View::make('pl.countries');
	}
}
