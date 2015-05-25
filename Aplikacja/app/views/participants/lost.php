
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
?>
</p>

<p>[mapa]</p>

		
<br><br>

@stop