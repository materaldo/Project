<?php

class GrupaController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	public function getAddgroup()
	{
		return View::make('addgroup');
	}
	
	
}
