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
			<td style="min-width:60px">Nr grupy</td>
			<td style="min-width:60px">Liczba członków</td>
			<td style="min-width:60px">Kraj</td>
			<td style="min-width:60px">Opiekun</td>
			<td style="min-width:60px">Opcje</td>
		</tr>	
<?php

	$groups=Group::where('confirmed', '=', $conf)->get();
	
	foreach ($groups as $gr)
		{
			$country=Country::find($gr->id_coun);
			$prot=Protector::find($gr->id_prot);
			
			echo "<tr>
				<td style=\"min-width:60px\" align=\"center\">
					<a href=" . URL::to('/group/details') . "/" . $gr->id . ">" . $gr->id ."</a>
				</td>
				<td style=\"min-width:60px\" align=\"center\">" . 
					$gr->number_of_people . 
				"</td>
				<td style=\"min-width:60px\">" . 
					$country->country . 
				"</td>
				<td style=\"min-width:60px\">" .
					$prot->first_name . " " . $prot->last_name .
				"</td>
				<td style=\"min-width:60px\">";
				if ($conf)
				{
					echo "<a href=" . URL::to('/group/chooseplace') . "/" . $gr->id . ">Przydziel </a>";
				}
				else
				{
					echo "<a href=" . URL::to('/group/confirm') . "/" . $gr->id . ">Zatwierdź </a>";
				}
				echo "<a href=" . URL::to('/group/details') . "/" . $gr->id . "> Szczegóły</a>
				</td>
			</tr>";
		}	
?>
</table>

<a href="{{URL::to('/management')}}">Powrót</a>


@stop