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
	public function postAdd()
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
		$acc->building = $building;
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
		$name = Input::get('name');
		$street = Input::get('street');
		$building = Input::get('building');
		$city = Input::get('city');
		$post_code = Input::get('post_code');
		$phone_number = Input::get('phone_number');
		$map = Input::get('map');
		$all_places = Input::get('all_places');
		$image = Input::get('image');
		
		Accommodation::where('id', $id)->update(array(
			'name'=>$name,
			'street'=>$street,
			'building'=>$building,
			'city'=>$city,
			'post_code'=>$post_code,
			'phone_number'=>$phone_number,
			'map'=>$map,
			'all_places'=>$all_places,
			'image'=>$image
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
			$accommod = Accommodation::find($id);
			$accommod->delete();
		}
		return View::make('pl.places.places');
	}
	
}
