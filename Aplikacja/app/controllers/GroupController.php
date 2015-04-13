<?php

class GroupController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	public function getAddgroup()
	{
		return View::make('add_group');
	}
	public function getConfirm()
	{
		$number_of_people = Input::get('number_of_people');
		$means_of_transport = Input::get('menas_of_transport');
		$group = new Grupa();
		$group -> ilosc_osob = $number_of_people;
		$group -> opiekun_id = "2";
		$group -> srodek_transportu = $means_of_transport;
		
		$group->save();
		return View::make('add_participant');
	}
	
	
}
