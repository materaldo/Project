<?php

class AccommodationController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.index');
	}
	public function getAdd()
	{
		return View::make('pl.add');
	}
	public function getPlaces()
	{
		return View::make('pl.places');
	}
	public function getDodaj()
	{
		return View::make('pl.nocleg_dodaj');
	}
	public function getZatwierdz()
	{
		$nazwa = Input::get('nazwa');
		$ulica = Input::get('ulica');
		$numer = Input::get('numer');
		$miasto = Input::get('miasto');
		$kod = Input::get('kod');
		$telefon = Input::get('telefon');
		$mapa = Input::get('mapa');
		$miejsca = Input::get('miejsca');
		$zdjecie = Input::get('zdjecie');
		
		$nocleg = new Accommodation();
		$nocleg->name = $nazwa;
		$nocleg->street = $ulica;
		$nocleg->buildings = $numer;
		$nocleg->city = $miasto;
		$nocleg->post_code = $kod;
		$nocleg->phone_number = $telefon;
		$nocleg->map = $mapa;
		$nocleg->free_places = $miejsca;
		$nocleg->all_places = $miejsca;
		$nocleg->image = $zdjecie;
		
		$nocleg->save();

		return View::make('pl.places');	
	}
	
	public function getZatwierdzedycje($id)
	{
		$nazwa = Input::get('name');
		$ulica = Input::get('street');
		$numer = Input::get('building');
		$miasto = Input::get('city');
		$kod = Input::get('post_code');
		$telefon = Input::get('phone_number');
		$mapa = Input::get('map');
		$miejsca = Input::get('all_places');
		$zdjecie = Input::get('image');
		
		Accommodation::where('id', $id)->update(array(
			'name'=>$nazwa,
			'street'=>$ulica,
			'buildings'=>$numer,
			'city'=>$miasto,
			'post_code'=>$kod,
			'phone_number'=>$telefon,
			'map'=>$mapa,
			'all_places'=>$miejsca,
			'image'=>$zdjecie
			));
		
		return View::make('pl.places');	
	}
	
	public function getAddgroup()
	{
		echo "TODO";
	}
	
	public function getDetails($id)
	{
		return View::make('pl.details')->with('idN', $id);
	}
	
	public function getEdit($id)
	{
		return View::make('pl.edit')->with('idN', $id);
	}
	
	public function getDelete($id)
	{
		if($id>0)
		{
			$nocleg = Accommodation::find($id);
			$nocleg->delete();
		}
		return View::make('pl.places');
	}
	
}
