
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>PAŃSTWA: </h2>
<a class="clickMe" href="http://zpi.dev/index.php/country/new">Dodaj kraj</a><br>

<table>
<?php
	$countries = Country::all();
	
	foreach ($countries as $co)
		{
			echo "<tr><td width=\"120\">". $co->country ."</td><td><a href=http://zpi.dev/index.php/country/edit/" . $co->id . ">Edytuj </a></td><td><a href=http://zpi.dev/index.php/country/delete/" . $co->id . "> Usuń</a></td></tr>";
		}	
?>
</table>

@stop
