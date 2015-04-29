

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
<form method="post" action = "http://zpi.dev/accommodation/add">			 
        <h4><label>Nazwa:<br>
            <input name = "name" id = "name" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Ulica:<br>
            <input name = "street" id="street" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Numer budynku:<br>
            <input name = "building" id="building" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
		<h4><label>Kod pocztowy:<br>
            <input name = "post_code" id="post_code" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Miejscowość:<br>
            <input name = "city" id="city" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Numer kontaktowy:<br>
            <input name = "phone_number" id="phone_number" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Mapa Google:<br>
            <input name = "map" id="map" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Udostępniane miejsca:<br>
            <input name = "all_places" id="all_places" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Zdjęcie:<br>
            <input name = "image" id="image" type = "text" size = "28"
                maxlength = "255">
        </label></h4>   
	<p>		
		<input type = "submit" id="submit" value = "Dodaj">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>

@stop