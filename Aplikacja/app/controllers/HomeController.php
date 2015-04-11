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
	
	public function getAbout()
	{
		return View::make('about');
	}
	public function getAdd()
	{
		return View::make('add');
	}
	public function getPlaces()
	{
		return View::make('places');
	}
	public function getInformations()
	{
		return View::make('informations');
	}
	public function getContact()
	{
		return View::make('contact');
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
