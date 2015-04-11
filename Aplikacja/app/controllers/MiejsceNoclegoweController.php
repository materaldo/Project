<?php

class NoclegController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	
	public function getDodaj()
	{
		return View::make('nocleg_dodaj');
	}
}
