<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public function getIndex()
	{
		return View::make('index');
	}
	
	public function getOrganizator()
	{
		return View::make('organizator');
	}
	
	public function getOpiekun()
	{
		return View::make('opiekun');
	}
	
	public function getUczestnik()
	{
		return View::make('uczestnik');
	}
	
	public function getBaza()
	{
		return View::make('bazanoclegowa');
	}

	public function getSzukaj()
	{
		return View::make('wyszukaj');
	}
	
	public function getDodaj()
	{
		return View::make('nocleg_dodaj');
	}
	
	public function getLogin()
	{
		return View::make('login');
	}

}
