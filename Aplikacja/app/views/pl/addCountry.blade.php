

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
<form action = "http://zpi.dev/index.php/language/add">			 
        <h4><label>Dodaj język:<br>
            <input name = "language" id = "language" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        
		<input type = "submit" id="submit" value = "Dodaj">
</form>

@stop