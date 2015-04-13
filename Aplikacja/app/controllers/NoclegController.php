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
		
		$nocleg = new Nocleg();
		$nocleg->nazwa = $nazwa;
		$nocleg->ulica = $ulica;
		$nocleg->nr_budynku = $numer;
		$nocleg->miejscowosc = $miasto;
		$nocleg->kod_pocztowy = $kod;
		$nocleg->telefon = $telefon;
		$nocleg->mapa = $mapa;
		$nocleg->miejsca_wolne = $miejsca;
		$nocleg->miejsca_ogolem = $miejsca;
		$nocleg->zdjecie = $zdjecie;
		
		$nocleg->save();

		return View::make('places');	
	}
	
	public function getZatwierdzedycje($id)
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
		
		Nocleg::where('id', $id)->update(array(
			'nazwa'=>$nazwa,
			'ulica'=>$ulica,
			'nr_budynku'=>$numer,
			'miejscowosc'=>$miasto,
			'kod_pocztowy'=>$kod,
			'telefon'=>$telefon,
			'mapa'=>$mapa,
			'miejsca_ogolem'=>$miejsca,
			'zdjecie'=>$zdjecie
			));
		
		return View::make('places');	
	}
	
	public function getWyswietl()
	{
		$noclegi = Nocleg::all();
		
		echo "<table>";
		foreach ($noclegi as $noc)
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
			$nocleg = Nocleg::find($id);
			$nocleg->delete();
		}
		return View::make('places');
	}
	
}
