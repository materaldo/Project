<?php

class OrganizerController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	
	public function getAdd()
	{
		$first_name = Input::get('first_name');
		$last_name = Input::get('last_name');
		$email = Input::get('email');

	}
}
