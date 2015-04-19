<?php

class LoginController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.registration');
	}
	public function getRegistred()
	{
		return View::make('pl.registred');
	}
}
