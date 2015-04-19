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
		return View::make('pl.index');
	}
	public function getAbout()
	{
		return View::make('pl.about');
	}
	public function getContact()
	{
		return View::make('pl.contact');
	}
	public function getLogin()
	{
		return View::make('pl.login');
	}
	public function getRegistration()
	{
		return View::make('pl.registration');
	}
	public function getSearch()
	{
		return View::make('pl.search');
	}
	public function getResults()
	{
		return View::make('pl.search_results');
	}
	public function getManagement()
	{
		return View::make('pl.management');
	}
}
