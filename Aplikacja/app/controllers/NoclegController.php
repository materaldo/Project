<?php

class NoclegController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	
	public function getDodaj()
	{
		return View::make('nocleg_dodaj');
	}
	
	public function getAddplace()
	{
		$nazwa = Input::get('nazwa');

		$nocleg = new Nocleg();
		$nocleg->nazwa = $nazwa;
		$nocleg->save();

		//return View::make('places');	
	}
}
