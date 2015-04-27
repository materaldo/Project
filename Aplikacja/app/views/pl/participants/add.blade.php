

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
<form action = "http://zpi.dev/index.php/participant/add" method="post">			 
    <table>
		<tr><td>Imię</td><td>Nazwisko</td><td>Email</td><td>Narodowość</td></tr>
		<tr><td>
            <input name = "first_name" id = "first_name" type = "text" size = "15" maxlength = "20" required>
		</td><td>
            <input name = "last_name" id="last_name" type = "text" size = "15" maxlength = "50" required>
		</td><td>
            <input name = "email" id="email" type = "text" size = "15" maxlength = "50" required>
		</td></tr>
		<tr><td>
		<input type = "submit" id="submit" value = "Dodaj">
		<input type = "reset" value = "Wyczyść">
		</td></tr>
	</table>
</form>
			  
			  
	
@stop