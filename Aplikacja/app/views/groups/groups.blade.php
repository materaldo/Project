@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@stop

@section('content')

<h2>GRUPY</h2>

	<table>	
		<tr>
			<td>Nr grupy</td>
			<td>Liczba członków</td>
			<td>Kraj</td>
			<td>Opiekun</td>
			<td></td>
		</tr>	
<?php

	$groups=Group::where('confirmed', '=', $conf)->get();
	
	foreach ($groups as $gr)
		{
			$country=Country::find($gr->id_coun);
			$prot=Protector::find($gr->id_prot);
			
			echo "<tr>
				<td>
					<a href=http://zpi.dev/group/details/" . $gr->id . ">" . $gr->id ."</a>
				</td>
				<td>" . 
					$gr->number_of_people . 
				"</td>
				<td>" . 
					$country->country . 
				"</td>
				<td>" .
					$prot->first_name . " " . $prot->last_name .
				"</td>
				<td>";
				if ($conf)
				{
					echo "<a href=http://zpi.dev/group/chooseplace/" . $gr->id . ">Przydziel </a>";
				}
				else
				{
					echo "<a href=http://zpi.dev/group/confirm/" . $gr->id . ">Zatwierdź </a>";
				}
				
				echo "<a href=http://zpi.dev/group/details/" . $gr->id . "> Szczegóły</a>
				</td>
			</tr>";
		}	
?>
</table>

<a href="http://zpi.dev/management">Powrót</a>


@stop