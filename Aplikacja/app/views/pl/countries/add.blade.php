

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
<form action = "http://zpi.dev/index.php/country/add">			 
        <h4><label>Dodaj kraj:<br>
            <input name = "country" id = "country" type = "text" size = "28"
                maxlength = "255" autofocus>
        </label></h4>
        
		<input type = "submit" id="submit" value = "Dodaj">
</form>

@stop