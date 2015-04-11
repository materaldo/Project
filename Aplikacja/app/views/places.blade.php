
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
	<table id="baza">	
		<tr>
			<td></td>
			<td>Nazwa, adres noclegu</td>
			<td>Liczba miejsc zajętych</td>
			<td>Liczba miejsc ogółem</td>
		</tr>	
<?php
	$noclegi = MiejsceNoclegowe::all();
	
	foreach ($noclegi as $noc)
	{
		echo "<tr><td>" . $noc->nazwa . "</td><td>" . $noc->ulica . "</td><td>". $noc->ulica . "</td><td>". $noc->ulica . "</td></tr>";
	}	
?>

		
				
			<tr>
				<td><img src="{{asset('images/hotel1.jpg')}}" alt="hotel1"/></td>
				<td>Hotel Miejski<br>ul. Zielona 30a, 50-335 Wrocław</td>
				<td align="middle">43</td>
				<td align="middle">200</td>
			</tr>
			<tr>
				<td><img src="{{asset('images/hotel2.jpg')}}" alt="hotel2"/></td>
				<td>Szkoła Podstawowa im. Kazimierza Wielkiego<br>ul. Akademicka 21, 50-342 Wrocław</td>
				<td align="middle">12</td>
				<td align="middle">60</td>
			</tr>
</table>

<p>Tutaj lista miejsc noclegowych pobrana z bazy danych</p>

<a class="clickMe" href="http://zpi.dev/index.php/add">Dodaj nowe miejsce</a>

@stop
