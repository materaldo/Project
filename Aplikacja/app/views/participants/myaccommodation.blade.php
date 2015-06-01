@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content=""/>
	<meta name="Keywords" content=""/>

@stop

@section('content')

<h2>{{Lang::get('participant.accommodation')}}</h2>
<p>
<?php

	$user = Auth::id();
	
	$participant = Participant::where('id', '=', $user)->first();
	$accus = $participant->id_acco;
	
	if($accus != null){
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->name;}
	else{ echo  'Wkrótce...' ;
		}
?>
</p>

<p> 
<?php
	$user = Auth::id();
	
	$participant = Participant::where('id', '=', $user)->first();
	$accus = $participant->id_acco;
	
	if($accus != null){
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo "ul. ";
	echo $ac->street;}
?>
 
<?php
	$user = Auth::id();
	
	$participant = Participant::where('id', '=', $user)->first();
	$accus = $participant->id_acco;
	
	if($accus != null){
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->building;}
?>
</p>
<p>
<?php
	$user = Auth::id();
	
	$participant = Participant::where('id', '=', $user)->first();
	$accus = $participant->id_acco;
	
	if($accus != null){
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->post_code;}
?> 
<?php
	$user = Auth::id();
	
	$participant = Participant::where('id', '=', $user)->first();
	$accus = $participant->id_acco;

	if($accus != null){
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->city;}
?>
</p><p>
<?php
	$$user = Auth::id();
	
	$participant = Participant::where('id', '=', $user)->first();
	$accus = $participant->id_acco;
	
	if($accus != null){
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo 'tel: '; 
	echo $ac->phone_number;}
	
	if($accus != null)
	{
		$acc = Accommodation::where('id', '=', $accus)->first();
		
		echo "<img style=\"max-width:60%;\" src=\"" . $acc->image ."\" alt=\"" . $acc->name ."\"/><h2> " . $acc->name . "</h2><strong>Adres</strong>: " . $acc->street . " " . $acc->buildings . "<br>" . $acc->post_code . " " . $acc->city . "<br><br><strong>Kontakt: </strong>" . $acc->phone_number . "<br><br><strong>Miejsca (wolne/ogółem): </strong>" . $acc->free_places . "/" . $acc->all_places . "<br><br><strong>Mapa: </strong><a href=\"" . $acc->map . "\">". $acc->map . "</a>";
			
	}
	
	else
	{ 
		echo  'Wkrótce...' ;
	}
?>
</p>

<p><a href="{{URL::to('/participant/change')}}">{{Lang::get('participant.change')}}</a><br>
<a href="{{URL::to('/index')}}">Powrót do strony głównej</a></p>

		
<br><br>

@stop