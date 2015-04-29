<?php

class CountryController extends BaseController {

	public function getIndex()
	{
		return View::make('countries.countries');
	}
	public function getNew()
	{
		return View::make('countries.add');
	}
	public function getAdd()
	{
		$co = Input::get('country');
		
		$country = new Country();
		$country->country = $co;
		
		$country->save();
		return View::make('countries.countries');
	}
	public function getDelete($id)
	{
		if($id>0)
		{
			$country = Country::find($id);
			$country->delete();
		}
		return View::make('countries.countries');
	}
	public function getEdit($id)
	{
		return View::make('coutries.edit')->with('idC', $id);
	}
	public function getConfirm($id)
	{
		$co = Input::get('country');
		
		Country::where('id', $id)->update(array(
			'country'=>$co,
			));
		
		return View::make('countries.countries');	
	}
}
