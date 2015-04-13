
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
<a href="http://zpi.dev/index.php/nocleg/edit/{{$idN}}">Edytuj</a>
<a href="http://zpi.dev/index.php/nocleg/delete/{{$idN}}" onclick="return confirm('Czy na pewno chcesz usunąć to miejsce z bazy noclegów?')">Usuń</a><br><br>
<?php

	$noc = Accommodation::find($idN);
	
	echo "<img style=\"max-width:60%;\" src=\"" . $noc->image ."\" alt=\"" . $noc->name ."\"/><h2> " . $noc->name . "</h2><strong>Adres</strong>: " . $noc->street . " " . $noc->buildings . "<br>" . $noc->post_code . " " . $noc->city . "<br><br><strong>Kontakt: </strong>" . $noc->phone_number . "<br><br><strong>Miejsca (wolne/ogółem): </strong>" . $noc->free_places . "/" . $noc->all_places . "<br><br><strong>Mapa: </strong><a href=\"" . $noc->map . "\">". $noc->map . "</a>";
			
?>	

<br><br><br>
<a href="http://zpi.dev/index.php/nocleg/places">Powrót do bazy</a>

@stop
