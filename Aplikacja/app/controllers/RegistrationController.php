<?php

class LoginController extends BaseController {

	public function getIndex()
	{
		return View::make('registration');
	}
	public function getRegistred()
	{
		return View::make('registred');
	}
}
