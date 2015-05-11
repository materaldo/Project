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
	$accus = UserAccommodation::where('id_us', '=', $user)->first();
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->name;
?>
</p>

<p>ul. 
<?php
	$user = Auth::id();
	$accus = UserAccommodation::where('id_us', '=', $user)->first();
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->street;
?>
 
<?php
	$user = Auth::id();
	$accus = UserAccommodation::where('id_us', '=', $user)->first();
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->building;
?>
</p>
<p>
<?php
	$user = Auth::id();
	$accus = UserAccommodation::where('id_us', '=', $user)->first();
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->post_code;
?> 
<?php
	$user = Auth::id();
	$accus = UserAccommodation::where('id_us', '=', $user)->first();
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->city;
?>
</p><p>tel: 
<?php
	$user = Auth::id();
	$accus = UserAccommodation::where('id_us', '=', $user)->first();
	$idac = $accus->id;
	$ac = Accommodation::where('id', '=', $idac)->first();
	echo $ac->phone_number;
?>
</p>

<p><a href="http://zpi.dev/participant/change">{{Lang::get('participant.change')}}</a></p>

		
<br><br>

@stop