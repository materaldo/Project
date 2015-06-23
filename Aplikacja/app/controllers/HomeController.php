<?php

/**
 * Class HomeController
 *
 * Class representing home site of application
 */
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
	/**
	* Allow to change website language
	*
	* @return View Home page with selected language
	*/
    public function select($lang)
    {
        Session::put('lang', $lang);

        return Redirect::route('home');
    }
	/**
	* Display Home page
	*
	* @return View Home page
	*/
	public function getIndex()
    {	
		return View::make('index');
	}
	/**
	* Display page contains informations about WYD
	*
	* @return View about page
	*/
	public function getAbout()
	{
		return View::make('about');
	}
	/**
	* Display page contains contact to organizers of WYD
	*
	* @return View contact page
	*/
	public function getContact()
	{
		return View::make('contact');
	}
	/**
	* Display page which allows logging to website
	*
	* @return View login page
	*/
	public function getLogin()
	{
		return View::make('login');
	}
	/**
	* Display page which allows registration to website
	*
	* @return View login page
	*/
	public function getRegistration()
	{
		return View::make('registration');
	}
	/**
	* Display page which allows management of groups, accommodations, only visible for organizers and admin
	*
	* @return View management page
	*/
	public function getManagement()
	{
		return View::make('management');
	}
	/**
	* Display page with current allocation of accommodation
	*
	* @return View assignment page
	*/
	public function getAssignment()
	{
		return View::make('assignment');
	}
	/**
	* Display view with data that can be downloaded to xls file
	*
	* @return View data export page
	*/
	public function getDataexport()
	{
		return View::make('dataexport');
	}
	/**
	* Allows to download data to xls file
	*
	* @return file xls file
	*/
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
