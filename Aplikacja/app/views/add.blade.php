

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')
              
<form action = "http://zpi.dev/index.php/zatwierdz">			 
        <h4><label>Nazwa:<br>
            <input name = "nazwa" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Ulica:<br>
            <input name = "ulica" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Numer budynku:<br>
            <input name = "numer" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
		<h4><label>Kod pocztowy:<br>
            <input name = "kod" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Miejscowość:<br>
            <input name = "miasto" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Numer kontaktowy:<br>
            <input name = "telefon" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Mapa Google:<br>
            <input name = "mapa" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>Udostępniane miejsca:<br>
            <input name = "miejsca" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>Zdjęcie:<br>
            <input name = "zdjecie" type = "text" size = "28"
                maxlength = "255">
        </label></h4>   
	<p>		
		<input type = "submit" value = "Dodaj">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>

@stop