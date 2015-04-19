<?php

class GroupController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.index');
	}
	public function getAddgroup()
	{
		return View::make('pl.addgroup');
	}
	public function getZatwierdz()
	{
		$liczbaOsob = Input::get('liczbaOsob');
		$srodekTransportu = Input::get('srodekTransportu');
		$grupa = new Group();
		$grupa -> number_of_people = $liczbaOsob;
		$grupa -> id_prot = "1";
		$grupa -> means_of_transport = $srodekTransportu;
		
		$grupa->save();
		return View::make('pl.addParticipants');
	}
	
	
}
