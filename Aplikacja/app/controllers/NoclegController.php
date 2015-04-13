<?php

class NoclegController extends BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	public function getAdd()
	{
		return View::make('add');
	}
	public function getPlaces()
	{
		return View::make('places');
	}
	public function getDodaj()
	{
		return View::make('nocleg_dodaj');
	}
	public function getConfirm()
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
		
		$acc = new Accommodation();
		$acc->name = $nazwa;
		$acc->street = $ulica;
		$acc->building = $numer;
		$acc->city = $miasto;
		$acc->post_code = $kod;
		$acc->phone_number = $telefon;
		$acc->map = $mapa;
		$acc->free_places = $miejsca;
		$acc->all_places = $miejsca;
		$acc->image = $zdjecie;
		
		$acc->save();

		return View::make('places');	
	}
	
	public function getConfirmedit($id)
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
		
		Accommodation::where('id', $id)->update(array(
			'name'=>$nazwa,
			'street'=>$ulica,
			'building'=>$numer,
			'city'=>$miasto,
			'post_code'=>$kod,
			'phone_number'=>$telefon,
			'map'=>$mapa,
			'all_places'=>$miejsca,
			'image'=>$zdjecie
			));
		
		return View::make('places');	
	}
	
	public function getDisplay()
	{
		$accommod = Accommodations::all();
		
		echo "<table>";
		foreach ($accommod as $noc)
		{
			echo "<tr><td>" . $noc->zdjecie . "</td><td>" . $noc->nazwa . "<br>" . $noc->ulica . " " . $noc->numer . ", " . $noc->kod . " " . $noc->miasto;
		}	
		echo "</table>"; 	
	}
	
	public function getAddgroup()
	{
		echo "TODO";
	}
	
	public function getDetails($id)
	{
		return View::make('details')->with('idN', $id);
	}
	
	public function getEdit($id)
	{
		return View::make('edit')->with('idN', $id);
	}
	
	public function getDelete($id)
	{
		if($id>0)
		{
			$acc = Accommodation::find($id);
			$acc->delete();
		}
		return View::make('places');
	}
	
}
