<?php

class LoginController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.login');
	}
	public function getRegistration()
	{
		return View::make('pl.registration');
	}
}
