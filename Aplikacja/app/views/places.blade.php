
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
<a class="clickMe" href="http://zpi.dev/index.php/add">Dodaj nowe miejsce</a>

	<table id="baza">	
		<tr>
			<td></td>
			<td>Nazwa, adres noclegu</td>
			<td>Liczba wolnych miejsc</td>
			<td>Liczba miejsc ogółem</td>
		</tr>	
<?php
	$noclegi = MiejsceNoclegowe::all();
	
	foreach ($noclegi as $noc)
		{
			echo "<tr>
				<td>
					<img src=\"" . $noc->image ."\" alt=\"" . $noc->nazwa ."\" height=\"150\" width=\"100\"/>
				</td>
				<td>" . 
					$noc->nazwa . "<br>" . $noc->ulica . " " . $noc->nr_mieszkania . ", " . $noc->kod_pocztowy . " " . $noc->miejscowosc . 
				"</td>
				<td align=\"middle\">" . 
					$noc->miejsca_wolne . 
				"</td>
				<td align=\"middle\">" . $noc->miejsca_ogolem . 
			"</tr>";
		}	
?>
</table>

@stop
