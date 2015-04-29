<?php

class ParticipantController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.index');
	}
	
	public function getAccommodation()
	{
		return View::make('pl.myaccommodation');
	}
	
	public function getChange()
	{
		return View::make('pl.participant_change');
	}
	
	
	public function getAdd($id)
	{
		/*$first_name = Input::get('first_name');
		$last_name = Input::get('last_name');
		$email = Input::get('email');
		
		$user=new Users();
		//za trudne :(
		
		$participant = new Participant();
		$participant -> first_name = $first_name;
		$participant -> last_name = $last_name;
		//$participant -> email = $email;
		$participant -> date_of_birth = "1990-05-12";
		$participant -> id_coun = "1";
		$participant -> id_lang = "1";
		$participant -> id_gr = "1";
		$participant -> document_number = "7485268";
		$participant -> insurance_number = "89562489562";

		//$participant->save();*/
        return View::make('pl.participants.add')->with('idG',$id);
	}
}
