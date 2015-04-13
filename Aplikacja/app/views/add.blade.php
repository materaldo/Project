

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
<form action = "http://zpi.dev/index.php/nocleg/zatwierdz">			 
        <h4><label>Nazwa:<br>
            <input name = "nazwa" id = "nazwa" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Ulica:<br>
            <input name = "ulica" id="ulica" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Numer budynku:<br>
            <input name = "numer" id="numer" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
		<h4><label>Kod pocztowy:<br>
            <input name = "kod" id="kod" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Miejscowość:<br>
            <input name = "miasto" id="miasto" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Numer kontaktowy:<br>
            <input name = "telefon" id="telefon" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Mapa Google:<br>
            <input name = "mapa" id="mapa" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Udostępniane miejsca:<br>
            <input name = "miejsca" id="miejsca" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Zdjęcie:<br>
            <input name = "zdjecie" id="zdjecie" type = "text" size = "28"
                maxlength = "255">
        </label></h4>   
	<p>		
		<input type = "submit" id="submit" value = "Dodaj">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>

@stop