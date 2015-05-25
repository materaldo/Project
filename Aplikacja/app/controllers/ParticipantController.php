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
	
	public function getLost()
	{
		return View::make('participants.lost');
	}
	
	
	public function postChooseplace()
	{
		$sel = Input::get('participants');
		$string = "";
		
		foreach ($sel as $selected){
					$string=$string . ":" . $selected;
				}
		//echo $string;
		
		return View::make('participants.assign')->with('sel', $string);
	}
	public function getChange()
	{
		return View::make('participants.participant_change');
	}
	public function getAssign($idAcc,$sel)
	{
		$arr = explode(':', $sel);
	
		$acc=Accommodation::where('id', '=', $idAcc)->first();
	
		if ((sizeof($arr)-1)>($acc->free_places))
		{
			echo "<script>alert(\"Brak wystarczającej ilości miejsc w tym miejscu noclegowym. Wybierz inne miejsce lub podziel grupę.\");</script>";
			return View::make('groups.groups')->with('conf', '1');
		}
	
		for ($i=1; $i<sizeof($arr); $i++)
		{
		$us=Participant::where('id', '=', $arr[$i])->first();
		$us->id_acco=$idAcc;
		$us->save();
		}
		
		$usersCount = DB::table('participants')->where('id_acco', '=', $idAcc)->count();
		$usersCount = $usersCount + DB::table('protectors')->where('id_acco', '=', $idAcc)->count();
		
		$acc->free_places=$acc->all_places-$usersCount;
		$acc->save();
		
		echo "<script>alert(\"Pomyślnie przydzielono do noclegu\");</script>";
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
        $country=Input::get('country_select');
        $lang1=Input::get('language1_select');
        $lang2=Input::get('language2_select');
        $lang3=Input::get('language3_select');
        $document_number = Input::get('document_number');
        $insurance_number = Input::get('insurance_number');
        $user=new User;
        $user -> username = $email;
        $user -> email = $email;
        $user -> password = $password;
        $user -> password_confirmation = $password;
        $user->confirmation_code= md5(uniqid(mt_rand(), true));
        $user -> confirmed=0;
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
           $part = Role::where('name','=','Participant')->first();
           $user->attachRole( $part);
           if ($user->id) {
               if (Config::get('confide::signup_email')) {
                   Mail::queueOn(
                       Config::get('confide::email_queue'),
                       Config::get('confide::user_account_confirmation'),
                       compact('user', 'password'),
                       function ($message) use ($user) {
                           $message
                               ->to($user->email, $user->username)
                               ->subject(Lang::get('confide::confide.email.account_confirmation.subject'));
                       }
                   );
               }
           }
       }
		else{
           DB::table('users')->where('id', '=', $user->id)->delete();
            $info = "Nie dodano użytkownika, podany adres e-mail już istnieje w bazie, lubi był niepoprawny!";
            return View::make('participants.info') ->with('info', $info);
        }
        return View::make('groups.management');
    }
		public function postSendmail(){
		
		$id = Auth::id();
		
		$title = Input::get('title');
		
		
		Mail::send('emails.change', array('key' => 'value'), function($message)
{
		$message->to('joanna.drabik.93@gmail.com')->subject('Zmiana zakwaterowania');
		
		
		});

		echo 'wiadomość wysłana';
		return View::make('index');
	}

	public function accName(){
		echo Auth::id();
		
	}
	
	
}