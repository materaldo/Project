<?php

/**
     * Group Controller
     *
     */
class GroupController extends BaseController {

	/**
     * Displays list of confirmed groups
     *
     * @return View returns view containing list of groups
     */
	public function getIndex()
	{
		return View::make('groups.groups')->with('conf', '1');
	}
	
	/**
     * Displays the form for group creation
     *
	 * @return View returns view containing the form for group creation
     */
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
	
	/**
     * Displays list of unconfirmed groups
     *
	 * @return View returns view containing list of unconfirmed groups
     */
	public function getUnconfirmed()
	{
		return View::make('groups.groups')->with('conf', '0');
	}
	
	/**
     * Displays the edit form for selected group
     *
	 * @param integer $id ID of the selected group
	 *
     * @return View returns view containing edit form for selected group
     */
	public function getEdit($id)
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
        return View::make('groups.edit')->with('countries', $countriesArr)->with('languages', $languagesArr)->with('idG',$id);	}
		
	/**
     * Displays list of available accommodations
     *
	 * @param integer $id ID of selected group
	 *
     * @return View returns view containing list of accommodations
     */
	public function getChooseplace($id)
	{
		return View::make('groups.assign')->with('idG', $id);
	}
	
	/**
     * Assigns the members of the group to the selected accommodation
     *
	 * @param integer $idAcc ID of the selected accommodation
	 * @param integer $idGr ID of the selected group
	 *
     * @return View returns view containing confirmed groups
     */
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
	
	/**
     * Displays group details
     *
	 * @param integer $id group ID
	 *
     * @return View returns view containing group details
     */
	public function getDetails($id)
	{
		return View::make('groups.details')->with('idG', $id);
	}
	
	/**
     * Displays split group view
     *
	 * @param integer $id group ID
	 *
     * @return View returns view containing form for group split
     */
	public function getSplit($id)
	{
		return View::make('groups.split')->with('idG', $id);
	}
	
	/**
     * Displays details of the unconfirmed group
     *
	 * @param integer $id group ID
	 *
     * @return View returns view containing group details
     */
	public function getDetailsunconfirmed($id)
	{
		return View::make('groups.detailsunconfirmed')->with('idG', $id);
	}
	
	/**
     * Displays participant details
     *
	 * @param integer $id participant ID
	 *
     * @return View returns view containing participant details
     */
    public function getParticipantdetails($id)
    {
        return View::make('groups.participantgroupdetails')->with('idG', $id);
    }
	
	/**
     * Displays form for group message sending
     *
	 * @param integer $id group ID
	 *
     * @return View returns view containing form for message sending
     */
    public function getMessage($id)
    {
        return View::make('groups.message')->with('idG',$id);
    }
	
	/**
     * Confirmes selected group
     *
	 * @param integer $id group ID
	 *
     * @return View returns view containing unconfirmed groups
     */
	public function getConfirm($id)
	{
		$group=Group::find($id);
		$group->confirmed='1';
		$group->save();
		return View::make('groups.groups')->with('conf', '0');
	}
	
	/**
     * Sends an email to all of the group members
     *
	 * @param integer $id group ID
	 *
     * @return View redirects to the main page
     */
    public function postMessagesender($id)
    {
        $title = Input::get('title');
        $text = Input::get('emailText');
		$gr=Group::find($id);
		$parts=Participant::where('id_gr', '=', $gr->id)->get();

        foreach ($parts as $p)
        {
            Mail::queue('emails.protMessage', array('title' => $title, 'text' => $text), function($message) use ($p, $title)
            {
                $us=User::where('id','=',$p->id)->first();
                $message->to($us->email, '?')->subject($title);
            });
        }
        return View::make('index');
    }
	
	/**
     * Updates group details
     *
	 * @param integer $id group ID
	 *
     * @return View returns view containing group information
     */
    public function postConfirm($id)
    {
        $number_of_peopleEdited = Input::get('num_of_people');
        $number_of_added_participants = DB::table('participants')->where('id_gr', '=', $id)->count();
        if ($number_of_added_participants <= $number_of_peopleEdited) {

            $mean_of_transportEdited = Input::get('mean_of_trans');
            $countryEdited=DB::table('countries')->where('id', Input::get('country_select'))->first();
            $language1Edited = DB::table('languages')->where('id', Input::get('language1_select'))->first();
            $language2Edited = DB::table('languages')->where('id', Input::get('language2_select'))->first();
            $language3Edited = DB::table('languages')->where('id', Input::get('language3_select'))->first();
             Group::where('id', $id)->update(array(
                 'number_of_people' => $number_of_peopleEdited,
                 'mean_of_transport' => $mean_of_transportEdited,
                 'id_coun' => $countryEdited->id,
                 'id_first_lang' => $language1Edited->id,
                 'id_second_lang' => $language2Edited->id,
                 'id_third_lang' => $language3Edited->id,
             ));
            return View::make('groups.management');
        }
        else{
            $info = "Liczba uczestników nie może być mniejsza, od liczby już wprowadzonych. Spróbuj jeszcze raz";
        return View::make('groups.info')-> with('idG',$id)->with('info', $info);
    }
    }
	
	/**
     * Displays group management
     *
     * @return View returns view for group management
     */
	public function getManagement()
	{
		return View::make('groups.management');
	}
	
	/**
     * Displays group details
     *
	 * @param integer $id group ID
	 *
     * @return View returns view containing group details
     */
    public function getAboutgroup($idG)
    {
        return View::make('groups.details')->with('idG', $idG);
    }
	
	/**
     * Saves new group and redirects to the list of groups
     *
     * @return View returns view containing list of groups
     */
	public function postAdd()
	{
		$num_of_people = Input::get('num_of_people');

        if($num_of_people<=0)
        {
            $info = "Nie dodano grupy, liczba członków jest mniejsza od 0!";
            return View::make('groups.info')->with('info', $info);
        }
		$mean_of_trans = Input::get('mean_of_trans');
		$country=DB::table('countries')->where('id', Input::get('country_select'))->first();
		$first_lang = DB::table('languages')->where('id', Input::get('language1_select'))->first();
		$second_lang = DB::table('languages')->where('id', Input::get('language2_select'))->first();
		$third_lang = DB::table('languages')->where('id', Input::get('language3_select'))->first();
        $prot = Auth::id();
        $protector = Protector::where('id', '=', $prot)->first();
		$group = new Group();
		$group -> number_of_people = $num_of_people;
		$group -> mean_of_transport = $mean_of_trans;
		$group -> id_prot = $protector->id;
        $group->id_coun = $country->id;
        $group -> id_first_lang = $first_lang->id;
		$group -> id_second_lang = $second_lang->id;
		$group -> id_third_lang = $third_lang->id;
		$group->save();





        $info = "Dodano grupę, możesz teraz w panelu zarządzania dodać informacje o uczestnikach!";
		return View::make('groups.info')->with('info', $info);
	}
}
