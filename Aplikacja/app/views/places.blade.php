
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
<a class="clickMe" href="http://zpi.dev/index.php/accommod/add">Dodaj nowe miejsce</a>

	<table id="baza">	
		<tr>
			<td></td>
			<td>Nazwa, adres noclegu</td>
			<td>Liczba wolnych miejsc</td>
			<td>Liczba miejsc ogółem</td>
		</tr>	
<?php
	$accommod = Accommodation::all();
	
	foreach ($accommod as $acc)
		{
			echo "<tr>
				<td>
					<a href=http://zpi.dev/index.php/accommod/details/" . $acc->id . "><img src=\"" . $acc->image ."\" alt=\"" . $acc->name ."\" height=\"150\" width=\"100\"/></a>
				</td>
				<td>" . 
					$acc->name . "<br>" . $acc->street . " " . $acc->building . ", " . $acc->post_code . " " . $acc->city . 
				"</td>
				<td align=\"middle\">" . 
					$acc->free_places . 
				"</td>
				<td align=\"middle\">" . $acc->all_places . 
			"</tr>";
		}	
?>
</table>

@stop
