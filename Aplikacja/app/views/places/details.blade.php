
@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
<a href="{{ URL::to('/accommodation/edit')}}/{{$idA}}">Edytuj</a>
<a href="{{ URL::to('/accommodation/delete')}}/{{$idA}}" onclick="return confirm('Czy na pewno chcesz usunąć to miejsce z bazy noclegów?')">Usuń</a><br><br>
<?php

	$acc = Accommodation::find($idA);
	
	echo "<img style=\"max-width:60%;\" src=\"" . $acc->image ."\" alt=\"" . $acc->name ."\"/><h2> " . $acc->name . "</h2><strong>Adres</strong>: " . $acc->street . " " . $acc->buildings . "<br>" . $acc->post_code . " " . $acc->city . "<br><br><strong>Kontakt: </strong>" . $acc->phone_number . "<br><br><strong>Miejsca (wolne/ogółem): </strong>" . $acc->free_places . "/" . $acc->all_places . "<br><br><strong>Mapa: </strong><a href=\"" . $acc->map . "\">". $acc->map . "</a>";
			
?>	

<br><br><br>
<a href="{{ URL::to('/accommodation')}}">Powrót do bazy</a>

@stop
