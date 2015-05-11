<?php

class ParticipantController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	
	public function getAccommodation()
	{
		return View::make('participants.myaccommodation');
	}
	public function postChooseplace()
	{
		$sel = Input::get('participants');
		$string = "";
		
		foreach ($sel as $selected){
					$string=$string . " " . $selected;
				}
		echo $string;
		
		return View::make('participants.assign')->with('sel', $string);
	}
	public function getChange()
	{
		return View::make('participants.participant_change');
	}
	public function getAssign()
	{
		$sel=Input::get('parts');
		echo $sel;
	
		return View::make('groups.groups')->with('conf', '1');
	}
	
	public function getAdd($id)
	{
        $countries = Country::all();
        $countriesArr = array();
        foreach($countries as $count)
        {
            $countriesArr[$count->id] =$count->country;
        }
        $languages = Language::all();
        $languagesArr = array();
        foreach($languages as $lang)
        {
            $languagesArr[$lang->id] =$lang->language;
        }
        return View::make('participants.add')->with('idG', $id)->with('countries', $countriesArr)->with('languages', $languagesArr);
	}
    public function postAdduser($id)
    {
        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $email = Input::get('email');
        $date = Input::get('date');
        $password = Str::random(10);
        $phone_number = Input::get('phone_number');
        $country = Input::get('country');
        $lang1 = Input::get('lang1');
        $lang2 = Input::get('lang2');
        $lang3 = Input::get('lang3');
        $document_number = Input::get('document_number');
        $insurance_number = Input::get('insurance_number');
        $user=new User;
        $user -> username = $email;
        $user -> email = $email;
        $user -> password = $password;
        $user -> password_confirmation = $password;
        $user->confirmation_code= md5(uniqid(mt_rand(), true));
        $user -> confirmed =0;
        $user ->save();

        if($user->id !=NULL) {
            $participant = new Participant;
            $participant->id = $user->id;
            $participant->first_name = $last_name;
            $participant->last_name = $first_name;
            $participant->phone_number = $phone_number;
            $participant->date_of_birth = $date;
            $participant->id_coun = $country;
            $participant->id_first_lang = $lang1;
            $participant->id_second_lang = $lang2;
            $participant->id_third_lang = $lang3;
            $participant->id_gr = $id;
            $participant->document_number = $document_number;
            $participant->insurance_number = $insurance_number;

            $participant->save();
        }
        else{
            DB::table('users')->where('id', '=', $user->id)->delete();
            $info = "Nie dodano użytkownika, podany adres e-mail już istnieje w bazie, lubi był niepoprawny!";
            return View::make('participants.info') ->with('info', $info);
        }
        return View::make('participants.add')->with('idG',$id);
    }
	
	public function accName(){
		echo Auth::id();
		
	}
	
}
