

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
<form action = "http://zpi.dev/index.php/grupa/addparticipant">			 
    <table>
		<tr><td>Imię</td><td>Nazwisko</td><td>Email</td><td>Nr telefonu</td></tr>
		<tr><td>
            <input name = "liczbaOsob" id = "liczbaOsob" type = "text" size = "15" maxlength = "20" required>
		</td><td>
            <input name = "srodekTransportu" id="srodekTransportu" type = "text" size = "15" maxlength = "50" required>
		</td><td>
            <input name = "srodekTransportu" id="srodekTransportu" type = "text" size = "15" maxlength = "50" required>
		</td><td>
            <input name = "srodekTransportu" id="srodekTransportu" type = "text" size = "15" maxlength = "50" required>
		</td></tr>
		<tr><td>
		<input type = "submit" id="submit" value = "Dodaj">
		<input type = "reset" value = "Wyczyść">
		</td></tr>
	</table>
</form>
			  
@stop