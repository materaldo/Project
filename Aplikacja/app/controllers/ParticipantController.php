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
		if($sel!=NULL) {
            foreach ($sel as $selected) {
                $string = $string . ":" . $selected;
            }
            return View::make('participants.assign')->with('sel', $string);
        }
        else {
            echo "<script>alert(\"Musisz wybrać uczestników do przydziału\");</script>";
            return Redirect::back();
    }
	}
    public function postChooseplaceprotector($idG)
    {
        $sel = Input::get('participants');
        $string = "";
        if($sel!=NULL) {
            foreach ($sel as $selected) {
                $string = $string . ":" . $selected;
            }
            return View::make('participants.participantgroupassign')->with('sel', $string);
            }
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

		if (!isset($us)) 
		{
			$us=Protector::where('id', '=', $arr[$i])->first();
		}
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
    public function getProtectorassign($idAcc,$sel)
    {
        $arr = explode(':', $sel);

        $acc=Accommodation::where('id', '=', $idAcc)->first();

        if ((sizeof($arr)-1)>($acc->free_places))
        {
            echo "<script>alert(\"Brak wystarczającej ilości miejsc w tym miejscu noclegowym. Wybierz inne miejsce lub podziel grupę.\");</script>";
            return View::make('groups.management')->with('conf', '1');
        }

        for ($i=1; $i<sizeof($arr); $i++) {
            $us = Participant::where('id', '=', $arr[$i])->first();
            if ($us != null) {
                if ($us->id_acco != null) {
                    $acc = Accommodation::where('id', '=', $us->id_acco)->first();
                    $temp = $acc->free_places;
                    $acc->free_places = $temp + 1;
                    $acc->save();
                }
            }
                if (!isset($us)) {
                    $us = Protector::where('id', '=', $arr[$i])->first();
                    if ($us->id_acco != null) {
                        $acc = Accommodation::where('id', '=', $us->id_acco)->first();
                        $temp = $acc->free_places;
                        $acc->free_places = $temp + 1;
                        $acc->save();
                    }
                }
                $us->id_acco = $idAcc;
                $acc = Accommodation::where('id', '=', $idAcc)->first();
                $temp = $acc->free_places;
                $acc->free_places = $temp -1;
                $acc->save();
                $us->save();


            
        }

        $usersCount = DB::table('participants')->where('id_acco', '=', $idAcc)->count();
        $usersCount = $usersCount + DB::table('protectors')->where('id_acco', '=', $idAcc)->count();

        $acc->free_places=$acc->all_places-$usersCount;
        $acc->save();

        echo "<script>alert(\"Pomyślnie przydzielono do noclegu\");</script>";
        return View::make('index');
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
		public function postSendmail()
        {

            $id = Auth::id();
            $user = User::where('id', '=', $id)->first();
            if (isset($user)) {
            $string="";
            $select = Input::get('przyczyna');
            if ($select != NULL) {
                foreach ($select as $sel) {
                    $string = $string . ":" . $sel;
                }
              //  echo $string;
                $arr = explode(':', $string);
                $tresc="";
                foreach($arr as $i) {
                    if ($i==1)
                    {
                        $tresc=$tresc . "Chcę mieszkać z: " . Input::get("Imie") . ". ";
                    }
                    if ($i==2)
                    {
                        $tresc=$tresc . "Nie jestem zadowolony/a ze standardu. ";
                    }
                    if ($i==3)
                    {
                        $tresc=$tresc . "Miejsce, do którego mnie przydzielono, jest za drogie. ";
                    }
                    if ($i==4)
                    {
                        $tresc=$tresc . "Chcę mieszkać bliżej miejsca: " . Input::get("Place") . ". ";
                    }
                    if ($i==5)
                    {
                        $tresc=$tresc . "Inny powód: " . Input::get("Other") . ". ";
                    }
                }
                Mail::queue('emails.acco_change', array('title' => 'Zmiana zakwaterowania' , 'tresc' => $tresc), function($message) use($user)
                {
                    $message->to('mlteusz_711@wp.pl')->subject('Zmiana zakwaterowania '. $user->email);
                });

            } else {
                echo "<script>alert(\"Musisz wybrać powód\");</script>";
                return View::make('participants.participant_change');
            }
            }
		
	/*	Mail::send('emails.change', array('key' => 'value'), function($message)
{
		$message->to('mlteusz_711@wp.pl')->subject('Zmiana zakwaterowania');
		
		
		});*/

		
		
	}

	public function accName(){
		echo Auth::id();
		return View::make('index');
		
	}
	
	public function getDetails($id)
	{
		return View::make('participants.userdetails')->with('idU', $id);
	}
}