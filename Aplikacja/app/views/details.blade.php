
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
<a href="http://zpi.dev/index.php/edit/{{$idN}}">Edytuj</a>
<a href="http://zpi.dev/index.php/delete/{{$idN}}" onclick="return confirm('Czy na pewno chcesz usunąć to miejsce z bazy noclegów?')">Usuń</a><br><br>
<?php

	$noc = MiejsceNoclegowe::find($idN);
	
	echo "<img style=\"max-width:60%;\" src=\"" . $noc->image ."\" alt=\"" . $noc->nazwa ."\"/><h2> " . $noc->		nazwa . "</h2><strong>Adres</strong>: " . $noc->ulica . " " . $noc->nr_mieszkania . "<br>" . $noc->kod_pocztowy . " " . $noc->miejscowosc . "<br><br><strong>Kontakt: </strong>" . $noc->telefon . "<br><br><strong>Miejsca (wolne/ogółem): </strong>" . $noc->miejsca_wolne . "/" . $noc->miejsca_ogolem . "<br><br><strong>Mapa: </strong><a href=\"" . $noc->mapa . "\">". $noc->mapa . "</a>";
			
?>	

<br><br><br>
<a href="http://zpi.dev/index.php/places">Powrót do bazy</a>

@stop
