

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')
<form action = "http://zpi.dev/index.php/language/add">			 
        <label>Dodaj język:</label>
		<input name="language" type="text">
		<input type = "submit" id="submit" value = "Dodaj">
</form>
			  
@stop