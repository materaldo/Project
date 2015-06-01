
@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
<a href="{{ URL::to('/accommodation/new')}}">Dodaj nowe miejsce</a>

	<table>	
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
			$usersCount = DB::table('participants')->where('id_acco', '=', $acc->id)->count();
			$usersCount = $usersCount + DB::table('protectors')->where('id_acco', '=', $acc->id)->count();
		
			$acc->free_places=$acc->all_places-$usersCount;
			$acc->save();
			echo "<tr>
				<td>
					<a href=" . URL::to('/accommodation/details') . "/" . $acc->id . "><img src=\"" . $acc->image ."\" alt=\"" . $acc->name ."\" height=\"150\" width=\"100\"/></a>
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
