<?php

class OrganizerController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	
	public function getAdd()
	{
		$first_name = Input::get('first_name');
		$last_name = Input::get('last_name');
		$email = Input::get('email');
	}
	
	public function getMail()
	{
		$protectors=Protector::all();
		
		foreach ($protectors as $p)
		{
			
        Mail::send('emails.protMessage', array('key' => 'value'), function($message) use ($p)
        {
			$us=User::where('id','=',$p->id)->first();
            $message->to($us->email, 'Jacek')->subject('!');
        });
		}
        return View::make('index');
	}
}
