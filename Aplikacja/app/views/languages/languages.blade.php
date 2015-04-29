
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>JĘZYKI: </h2>
<a class="clickMe" href="http://zpi.dev/language/new">Dodaj język</a><br>

<table>
<?php
	$languages = Language::all();
	
	foreach ($languages as $lang)
		{
			echo "<tr><td width=\"120\">". $lang->language ."</td><td><a href=http://zpi.dev/language/edit/" . $lang->id . ">Edytuj </a></td><td><a href=http://zpi.dev/language/delete/" . $lang->id . "> Usuń</a></td></tr>";
		}	
?>
</table>

@stop
