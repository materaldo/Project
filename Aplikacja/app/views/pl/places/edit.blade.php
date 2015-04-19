

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	<?php
	
	$acc = Accommodation::find($idA);
	
		if (isset($idA)){
			echo "
	 <script type=\"text/javascript\">
        function loadData() 
		{
			document.getElementById(\"name\").value = \"" . $acc->name . "\";
			document.getElementById(\"street\").value = \"" . $acc->street . "\";
			document.getElementById(\"building\").value = \"" . $acc->buildings . "\";
			document.getElementById(\"post_code\").value = \"" . $acc->post_code . "\";
			document.getElementById(\"city\").value = \"" . $acc->city . "\";
			document.getElementById(\"phone_number\").value = \"" . $acc->phone_number . "\";
			document.getElementById(\"map\").value = \"" . $acc->map . "\";
			document.getElementById(\"all_places\").value = \"" . $acc->all_places . "\";
			document.getElementById(\"image\").value = \"" . $acc->image . "\";
        }
        window.onload = loadData;
        </script>";}
	?>
@stop

@section('content')
              
<form action = "http://zpi.dev/index.php/accommodation/confirm/{{$idA}}">			 
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
		<input type = "submit" value = "Zatwierdź">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>

@stop