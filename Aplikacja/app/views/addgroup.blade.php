

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
			  <form action = "http://zpi.dev/index.php/grupa/zatwierdz">			 
        <h4><label>Liczba osób:<br>
            <input name = "liczbaOsob" id = "liczbaOsob" type = "text" size = "28"
                maxlength = "20" required>
        </label></h4>
        <h4><label>Środek transportu:<br>
            <input name = "srodekTransportu" id="srodekTransportu" type = "text" size = "28"
                maxlength = "50" required>
        </label></h4>
		<p>		
		<input type = "submit" id="submit" value = "Dodaj">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>
			  
@stop