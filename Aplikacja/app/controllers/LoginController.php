<?php

class LoginController extends BaseController {

	public function getIndex()
	{
		return View::make('login');
	}
	public function getRegistration()
	{
		return View::make('registration');
	}
}
