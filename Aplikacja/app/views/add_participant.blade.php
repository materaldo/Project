

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
			  <form action = "http://zpi.dev/index.php/group/confirm">
        <h4><label>Liczba osób:<br>
            <input name = "means_of_transport" id = "number_of_people" type = "text" size = "28"
                maxlength = "20" required>
        </label></h4>
        <h4><label>Środek transportu:<br>
            <input name = "means_of_transport" id="means_of_transport" type = "text" size = "28"
                maxlength = "50" required>
        </label></h4>
		<p>		
		<input type = "submit" id="submit" value = "Dodaj">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>
			  
@stop