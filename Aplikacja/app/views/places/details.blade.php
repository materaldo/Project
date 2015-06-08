
@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>{{Lang::get('places.details')}}</h2>
<a href="{{ URL::to('/accommodation/edit')}}/{{$idA}}">{{Lang::get('places.edit')}}</a>
<a href="{{ URL::to('/accommodation/delete')}}/{{$idA}}" onclick="return confirm('Czy na pewno chcesz usunąć to miejsce z bazy noclegów?')">{{Lang::get('places.delete')}}</a><br><br>
<?php	
$acc = Accommodation::find($idA);
	echo "<img style=\"max-width:40%;\" src=\"" . $acc->image ."\" alt=\"" . $acc->name ."\"/><h2> " . $acc->name . 
	"</h2><strong>" . Lang::get('places.address') . "</strong>: " . $acc->street . " " . $acc->building . "<br>" . $acc->post_code . " " . $acc->city . 
	"<br><br><strong>" . Lang::get('places.contact') . "</strong>" . $acc->phone_number . 
	"<br><br><strong>" . Lang::get('places.places') . "</strong>" . $acc->free_places . "/" . $acc->all_places . 
	"<br><br><strong>" . Lang::get('places.map') . "</strong><a href=\"" . $acc->map . "\">". $acc->map . "</a>";
			
?>	

<br><br><br>
<a href="{{ URL::to('/accommodation')}}">{{Lang::get('places.back')}}</a>

@stop
