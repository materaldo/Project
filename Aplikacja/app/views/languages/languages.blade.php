
@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>JĘZYKI: </h2>
<a class="clickMe" href="{{URL::to('/language/new')}}">Dodaj język</a><br>

<table>
<?php
	$languages = Language::all();
	
	foreach ($languages as $lang)
		{
			echo "<tr><td width=\"120\">". $lang->language ."</td><td><a href= " . URL::to('/language/edit') . "/" . $lang->id . ">Edytuj </a></td><td><a href=" . URL::to('/language/delete') . "/" . $lang->id . "> Usuń</a></td></tr>";
		}	
?>
</table>

@stop
