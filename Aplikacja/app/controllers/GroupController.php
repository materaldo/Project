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
    public function getMessage($id)
    {
        return View::make('pl.groups.message')->with('idG',$id);
    }
    public function postMessagesender($id)
    {

        Mail::send('emails.groupMessage', array('key' => 'value'), function($message)
        {
            $message->to('mlteusz_711@wp.pl', 'Jacek taki chuj')->subject('elo ty kurwo!');


        });
        return View::make('pl.index');
    }
    public function postConfirm($id)
    {
        $number_of_peopleEdited = Input::get('num_of_people');
        $mean_of_transportEdited = Input::get('mean_of_trans');
        $countryEdited = Input::get('country');
        $language1Edited = Input::get('lang1');
        $language2Edited = Input::get('lang2');
        $language3Edited = Input::get('lang3');
        Group::where('id', $id)->update(array(
            'number_of_people'=>$number_of_peopleEdited,
            'mean_of_transport'=>$mean_of_transportEdited,
            'id_coun'=>$countryEdited,
            'id_first_lang'=>$language1Edited,
            'id_second_lang'=>$language2Edited,
            'id_third_lang'=>$language3Edited,
        ));
        return View::make('pl.groups.management');
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
