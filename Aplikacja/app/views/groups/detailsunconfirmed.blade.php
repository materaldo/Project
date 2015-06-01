@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <?php
    $editedGroup = Group::find($idG);
    ?>
@stop

@section('content')

<?php

	$gr = Group::find($idG);

	echo "<h4><b>Grupa nr " . $gr->id . "</b></h4>";

	//	echo "<a href=\"" . URL::to('/group/edit') . "/{$idG}\">Edytuj</a>	<a href=\"" . URL::to('/group/delete') . "/{$idG}\" onclick=\"return confirm('Czy na pewno chcesz usunąć to miejsce z bazy noclegów?')\">Usuń</a><br><br>";

	echo "<br>Liczba członków:" . $gr->number_of_people . 
	"<br>Środek transportu: " . $gr->mean_of_transport . 
	"<br>Kraj pochodzenia: " . Country::find($gr->id_coun)->country . 
	"<br>Język ojczysty: " . Language::find($gr->id_first_lang)->language .
	"<br>Język alternatywny 1: " . ((isset($gr->id_second_lang))? Language::find($gr->id_second_lang)->language : "nie podano") .
	"<br>Język alternatywny 2: " . ((isset($gr->third))? Language::find($gr->id_third_lang)->language : "nie podano") .
	"<br><br><h4>Członkowie: </h4>";
		
		$participants=Participant::where('id_gr', '=', $gr->id)->get();
		echo "<form action=\"" . URL::to('/participant/chooseplace') . "\" method=\"post\"><table>
		<tr>
			<td style=\"min-width:400px; background-color: #BBBBBB\">Dane członków grupy</td>
		</tr>";

		$protector=Protector::where('id', '=', $gr->id_prot)->first();
		
		echo "<tr>
					<td style=\"background-color: #CCCCCC\"><b>"
						. $protector->first_name . " " . $protector->last_name ."
					</b></td>
				</tr><tr>
					<td>
					Data urodzenia: " . $protector->date_of_birth .
					"<br>Numer telefonu: " . $protector->phone_number .
					"<br>Alternatywny numer telefonu: " . $protector->alt_phone_number .
					"<br>Kraj: " . Country::where('id','=',$protector->id_coun)->first()->country .
					"<br>Języki: " . Language::where('id','=',$protector->id_first_lang)->first()->language . ", " .
					(isset($protector->id_second_lang)? (Language::where('id','=',$protector->id_second_lang)->first()->language . ", ") : "") .
					(isset($protector->id_third_lang)? (Language::where('id','=',$protector->id_third_lang)->first()->language) : "") .
					"</td>
				</tr>";
		
		foreach ($participants as $part)
		{			
			echo "<tr>
					<td style=\"background-color: #CCCCCC\">"
						. $part->first_name . " " . $part->last_name ."
					</td>
				</tr><tr>
					<td>
					Data urodzenia: " . $part->date_of_birth .
					"<br>Numer telefonu: " . $part->phone_number .
					"<br>Alternatywny numer telefonu: " . $part->alt_phone_number .
					"<br>Kraj: " . Country::where('id','=',$part->id_coun)->first()->country .
					"<br>Języki: " . Language::where('id','=',$part->id_first_lang)->first()->language .
					(isset($part->id_second_lang)? (", " . Language::where('id','=',$part->id_second_lang)->first()->language) : "") .
					(isset($part->id_third_lang)? (", " . Language::where('id','=',$part->id_third_lang)->first()->language) : "") .
					"</td>
				</tr>";
		}		
?>	
</table>
<br>
<a href="{{URL::to('/group')}}">Powrót do grup</a>
@stop