
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
<a class="clickMe" href="http://zpi.dev/index.php/nocleg/add">Dodaj nowe miejsce</a>

	<table id="baza">	
		<tr>
			<td></td>
			<td>Nazwa, adres noclegu</td>
			<td>Liczba wolnych miejsc</td>
			<td>Liczba miejsc ogółem</td>
		</tr>	
<?php
	$noclegi = Accommodation::all();
	
	foreach ($noclegi as $noc)
		{
			echo "<tr>
				<td>
					<a href=http://zpi.dev/index.php/nocleg/details/" . $noc->id . "><img src=\"" . $noc->image ."\" alt=\"" . $noc->name ."\" height=\"150\" width=\"100\"/></a>
				</td>
				<td>" . 
					$noc->name . "<br>" . $noc->street . " " . $noc->building . ", " . $noc->post_code . " " . $noc->city . 
				"</td>
				<td align=\"middle\">" . 
					$noc->free_places . 
				"</td>
				<td align=\"middle\">" . $noc->all_places . 
			"</tr>";
		}	
?>
</table>

@stop
