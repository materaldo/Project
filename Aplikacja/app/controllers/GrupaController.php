<?php

class GrupaController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	public function getAddgroup()
	{
		return View::make('addgroup');
	}
	public function getZatwierdz()
	{
		$liczbaOsob = Input::get('liczbaOsob');
		$srodekTransportu = Input::get('srodekTransportu');
		$grupa = new Grupa();
		$grupa -> ilosc_osob = $liczbaOsob;
		$grupa -> opiekun_id = "2";
		$grupa -> srodek_transportu = $srodekTransportu;
		
		$grupa->save();
		return View::make('dodajUczestnikow');
	}
	
	
}
