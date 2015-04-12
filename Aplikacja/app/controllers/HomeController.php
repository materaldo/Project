<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public function getIndex()
	{
		return View::make('index');
	}
	
	public function getAbout()
	{
		return View::make('about');
	}
	public function getAdd()
	{
		return View::make('add');
	}
	public function getPlaces()
	{
		return View::make('places');
	}
	public function getInformations()
	{
		return View::make('informations');
	}
	public function getContact()
	{
		return View::make('contact');
	}
	public function getDodaj()
	{
		return View::make('nocleg_dodaj');
	}

	public function getLogin()
	{
		return View::make('login');
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
		
		$nocleg = new MiejsceNoclegowe();
		$nocleg->nazwa = $nazwa;
		$nocleg->ulica = $ulica;
		$nocleg->nr_mieszkania = $numer;
		$nocleg->miejscowosc = $miasto;
		$nocleg->kod_pocztowy = $kod;
		$nocleg->telefon = $telefon;
		$nocleg->mapa = $mapa;
		$nocleg->miejsca_ogolem = $miejsca;
		$nocleg->image = $zdjecie;
		
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
		
		//$nocleg = MiejsceNoclegowe::find($id);
		
		//$nocleg->update(array('nazwa' => $nazwa));

		MiejsceNoclegowe::where('id', $id)->update(array(
			'nazwa'=>$nazwa,
			'ulica'=>$ulica,
			'nr_mieszkania'=>$numer,
			'miejscowosc'=>$miasto,
			'kod_pocztowy'=>$kod,
			'telefon'=>$telefon,
			'mapa'=>$mapa,
			'miejsca_ogolem'=>$miejsca,
			'image'=>$zdjecie
			));
		
		return View::make('places');	
	}
	
	public function getWyswietl()
	{
		$noclegi = MiejsceNoclegowe::all();
		
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
			$nocleg = MiejsceNoclegowe::find($id);
			$nocleg->delete();
		}
		return View::make('places');
	}
}
