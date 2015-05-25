<?php

class GroupController extends BaseController {

	public function getIndex()
	{
		return View::make('groups.groups')->with('conf', '1');
	}
	public function getNew()
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
		return View::make('groups.add')->with('countries', $countriesArr)->with('languages', $languagesArr);
	}
	public function getUnconfirmed()
	{
		return View::make('groups.groups')->with('conf', '0');
	}
	public function getEdit($id)
	{
		return View::make('groups.edit')-> with('idG',$id);
	}
	public function getChooseplace($id)
	{
		return View::make('groups.assign')->with('idG', $id);
	}
	public function getAssign($idAcc, $idGr)
	{
		$users=Participant::where('id_gr', '=', $idGr)->get();
		$group=Group::where('id','=',$idGr)->first();
		$protector=Protector::where('id', '=', $group->id_prot)->first();
		$acc=Accommodation::where('id', '=', $idAcc)->first();
		$zmienna=var_export($users, true);
		
		if ((sizeof($users)+1)>($acc->free_places))
		{
			echo "<script>alert(\"Brak wystarczającej ilości miejsc w tym miejscu noclegowym. Wybierz inne miejsce lub podziel grupę.\");</script>";
			return View::make('groups.groups')->with('conf', '1');
		}
		
		$protector->id_acco=$idAcc;
		$protector->save();
		
		foreach ($users as $us)
		{
		$us->id_acco=$idAcc;
		$us->save();
		}
		
		$usersCount = DB::table('participants')->where('id_acco', '=', $idAcc)->count();
		$usersCount = $usersCount + DB::table('protectors')->where('id_acco', '=', $idAcc)->count();
		
		$acc->free_places=$acc->all_places-$usersCount;
		$acc->save();
		
		echo "<script>alert(\"Pomyślnie przydzielono do noclegu\");</script>";
		
		return View::make('groups.groups')->with('conf', '1')->with('zmienna', $zmienna);
	}
	public function getDetails($id)
	{
		return View::make('groups.details')->with('idG', $id);
	}
    public function getParticipantdetails($id)
    {
        return View::make('groups.participantgroupdetails')->with('idG', $id);
    }
    public function getMessage($id)
    {
        return View::make('groups.message')->with('idG',$id);
    }
	public function getConfirm($id)
	{
		$group=Group::find($id);
		$group->confirmed='1';
		$group->save();
		return View::make('groups.groups')->with('conf', '0');
	}
    public function postMessagesender($id)
    {
		$gr=Group::find($id);
		$parts=Participant::where('id_gr', '=', $gr->id)->get();
		
		foreach ($parts as $p)
		{
			
        Mail::send('emails.groupMessage', array('key' => 'value'), function($message) use ($p)
        {
			$us=User::where('id','=',$p->id)->first();
            $message->to($us->email, 'Jacek')->subject('!');
        });
		}
        return View::make('index');
    }
    public function postConfirm($id)
    {
        $number_of_peopleEdited = Input::get('num_of_people');
        $number_of_added_participants = DB::table('participants')->where('id_gr', '=', $id)->count();
        if ($number_of_added_participants <= $number_of_peopleEdited) {

            $mean_of_transportEdited = Input::get('mean_of_trans');
            $countryEdited = Input::get('country');
            $language1Edited = Input::get('lang1');
            $language2Edited = Input::get('lang2');
            $language3Edited = Input::get('lang3');
            Group::where('id', $id)->update(array(
                'number_of_people' => $number_of_peopleEdited,
                'mean_of_transport' => $mean_of_transportEdited,
                'id_coun' => $countryEdited,
                'id_first_lang' => $language1Edited,
                'id_second_lang' => $language2Edited,
                'id_third_lang' => $language3Edited,
            ));

            return View::make('groups.management');
        }
        else{
            $info = "Liczba uczestników nie może być mniejsza, od liczby już wprowadzonych. Spróbuj jeszcze raz";
        return View::make('groups.info')-> with('idG',$id)->with('info', $info);
    }

    }
	public function getManagement()
	{
		return View::make('groups.management');
	}
    public function getAboutgroup($idG)
    {
        return View::make('groups.details')->with('idG', $idG);
    }
	public function postAdd()
	{
		$num_of_people = Input::get('num_of_people');
		$mean_of_trans = Input::get('mean_of_trans');
		$country=DB::table('countries')->where('id', Input::get('country_select'))->first();
		$first_lang = DB::table('languages')->where('id', Input::get('language1_select'))->first();
		$second_lang = DB::table('languages')->where('id', Input::get('language2_select'))->first();
		$third_lang = DB::table('languages')->where('id', Input::get('language3_select'))->first();
		$group = new Group();
		$group -> number_of_people = $num_of_people;
		$group -> mean_of_transport = $mean_of_trans;
		$group -> id_prot = Auth::id();
        $group->id_coun = $country->id;
        $group -> id_first_lang = $first_lang->id;
		$group -> id_second_lang = $second_lang->id;
		$group -> id_third_lang = $third_lang->id;
		$group->save();
        $info = "Dodano grupę, możesz teraz w panelu zarządzania dodać informacje o uczestnikach!";
		return View::make('groups.info')->with('info', $info);
	}
}
