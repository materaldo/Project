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
    public function select($lang)
    {
        Session::put('lang', $lang);

        return Redirect::route('home');
    }
	public function getIndex()
    {	
		return View::make('index');
	}
	public function getAbout()
	{
		return View::make('about');
	}
	public function getContact()
	{
		return View::make('contact');
	}
	public function getLogin()
	{
		return View::make('login');
	}
	public function getRegistration()
	{
		return View::make('registration');
	}
	public function getSearch()
	{
		return View::make('search');
	}
	public function getResults()
	{
		return View::make('search_results');
	}
	public function getManagement()
	{
		return View::make('management');
	}
	public function getAssignment()
	{
		return View::make('assignment');
	}
	public function getDataexport()
	{
		return View::make('dataexport');
	}
	public function export()
	{
    Excel::create('Users', function($excel) {

      $excel->sheet('Users', function($sheet) {
        $users = User::orderBy('created_at','desc')->get();
        $sheet->loadView('dataexport', ['users' => $users->toArray()]);
      });
    })->download('xls');
  }
}
