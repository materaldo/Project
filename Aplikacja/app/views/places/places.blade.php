
@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>{{Lang::get('places.title')}}</h2>
<a href="{{ URL::to('/accommodation/new')}}">{{Lang::get('add.add')}}</a>

	<table>	
		<tr>
			<td></td>
			<td>{{Lang::get('places.nameaddress')}}</td>
			<td>{{Lang::get('places.free')}}</td>
			<td>{{Lang::get('places.all')}}</td>
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
