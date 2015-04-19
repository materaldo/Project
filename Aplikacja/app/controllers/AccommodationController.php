<?php

class AccommodationController extends BaseController {

	public function getIndex()
	{
		return View::make('pl.places.places');
	}
	public function getNew()
	{
		return View::make('pl.places.add');
	}
	public function getAdd()
	{
		$name = Input::get('name');
		$street = Input::get('street');
		$building = Input::get('building');
		$city = Input::get('city');
		$post_code = Input::get('post_code');
		$phone_number = Input::get('phone_number');
		$map = Input::get('map');
		$all_places = Input::get('all_places');
		$image = Input::get('image');
		
		$acc = new Accommodation();
		$acc->name = $name;
		$acc->street = $street;
		$acc->buildings = $building;
		$acc->city = $city;
		$acc->post_code = $post_code;
		$acc->phone_number = $phone_number;
		$acc->map = $map;
		$acc->free_places = $all_places;
		$acc->all_places = $all_places;
		$acc->image = $image;
		
		$acc->save();

		return View::make('pl.places.places');	
	}
	public function getConfirm($id)
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
		
		return View::make('pl.places.places');	
	}	
	public function getDetails($id)
	{
		return View::make('pl.places.details')->with('idA', $id);
	}
	public function getEdit($id)
	{
		return View::make('pl.places.edit')->with('idA', $id);
	}
	public function getDelete($id)
	{
		if($id>0)
		{
			$nocleg = Accommodation::find($id);
			$nocleg->delete();
		}
		return View::make('pl.places.places');
	}
	
}
