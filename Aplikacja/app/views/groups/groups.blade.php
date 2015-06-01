@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@stop

@section('content')

<?php if ($conf==1) 
{
	echo "<h2>ZATWIERDZONE GRUPY</h2>";
}
else {
	echo "<h2>GRUPY CZEKAJĄCE NA ZATWIERDZENIE</h2>";
}?>
	<table>	
		<tr>
			<td  style="background-color:#CCCCCC; min-width:60px">Nr grupy</td>
			<td style="background-color:#CCCCCC; min-width:100px">Kraj</td>
			<td style="background-color:#CCCCCC; min-width:100px">Opiekun</td>
			<td style="background-color:#CCCCCC; min-width:100px">Liczba członków</td>
			<td style="background-color:#CCCCCC; min-width:100px">Opcje</td>
		</tr>	
<?php

	$groups=Group::where('confirmed', '=', $conf)->get();
	
	foreach ($groups as $gr)
		{
			$country=Country::find($gr->id_coun);
			$prot=Protector::find($gr->id_prot);
			
			echo "<tr>
				<td align=\"center\">
					<a href=" . URL::to('/group/details') . "/" . $gr->id . ">" . $gr->id ."</a>
				</td>
				<td>" . 
					$country->country . 
				"</td>
				<td>" .
					$prot->first_name . " " . $prot->last_name .
				"</td>
				<td align=\"center\">" . 
					$gr->number_of_people . 
				"</td>
				<td>";
				if ($conf)
				{
					echo "<a href=" . URL::to('/group/chooseplace') . "/" . $gr->id . ">Przydziel </a> | 
					<a href=" . URL::to('/group/split') . "/" . $gr->id . ">Podziel </a> |
					<a href=" . URL::to('/group/details') . "/" . $gr->id . ">Szczegóły</a>
					</td>";
				}
				else
				{
					echo "<a href=" . URL::to('/group/confirm') . "/" . $gr->id . " onclick=\"return confirm('Czy na pewno chcesz zatwierdzić tę grupę?')\">Zatwierdź </a>";
					echo "<a href=" . URL::to('/group/detailsunconfirmed') . "/" . $gr->id . "> Szczegóły</a></td>";
				}
			echo "</tr>";
		}	
?>
</table>

<a href="{{URL::to('/management')}}">Powrót</a>


@stop