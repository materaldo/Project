<?php

class GroupController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.groups.groups');
	}
	public function getNew()
	{
		return View::make('pl.groups.add');
	}
	public function getAdd()
	{
		$num_of_people = Input::get('num_of_people');
		$mean_of_trans = Input::get('mean_of_trans');
		$group = new Group();
		$group -> number_of_people = $num_of_people;
		$group -> id_prot = "1";
		$group -> mean_of_transport = $mean_of_trans;
		
		$group->save();
		return View::make('pl.participants.add');
	}
	
	
}
