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
	public function getEdit($id)
	{
		return View::make('pl.groups.edit')-> with('idG',$id);
	}
    public function postConfirmEditGroup($id)
    {

    }
	public function getManagement()
	{
		return View::make('pl.groups.management');
	}
	public function postAdd()
	{
		$num_of_people = Input::get('num_of_people');
		$mean_of_trans = Input::get('mean_of_trans');
		$country = Input::get('country');
		$first_lang = Input::get('lang1');
		$second_lang = Input::get('lang2');
		$third_lang = Input::get('lang3');
		$group = new Group();
		$group -> number_of_people = $num_of_people;
		$group -> mean_of_transport = $mean_of_trans;
		$group -> id_prot = Auth::id();
		$group -> id_coun = $country;
		$group -> id_first_lang = $first_lang;
		$group -> id_second_lang = $second_lang;
		$group -> id_third_lang = $third_lang;
		
		
		
		$group->save();
		return View::make('pl.groups.info');
	}
	
	
}
