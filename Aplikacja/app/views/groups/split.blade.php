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
	
	echo "<h4><b>Grupa nr " . $gr->id . "</b></h4><br><br><h4>Członkowie: </h4>";
		
		$participants=Participant::where('id_gr', '=', $gr->id)->get();
		echo "<form action=\"" . URL::to('/participant/chooseplace') . "\" method=\"post\"><table>
		<tr>
			<td></td>
			<td>Imię i nazwisko</td>
			<td>Zakwaterowanie</td>
			<td>Opcje</td>
		</tr>";

		$protector=Protector::where('id', '=', $gr->id_prot)->first();
		
		echo "<tr>
					<td>
						<input type=\"checkbox\" name=\"participants[]\" value=\"". $protector->id ."\">
					</td>
					<td><b>"
						. $protector->first_name . " " . $protector->last_name ."
					</b></td>
					<td>"
						.  (isset($protector->id_acco)? Accommodation::where('id', '=', $protector->id_acco)->
						first()->name : "brak") .
					"</td>
					<td>
						<a href=\"" . URL::to('/participant/details') . "/" . $protector->id . "\"> Szczegóły</a>
					</td>
				</tr>";
		
		foreach ($participants as $part)
		{			
			echo "<tr>
					<td>
						<input type=\"checkbox\" name=\"participants[]\" value=\"". $part->id ."\">
					</td>
					<td>"
						. $part->first_name . " " . $part->last_name ."
					</td>
					<td>"
						.  (isset($part->id_acco)? Accommodation::where('id', '=', $part->id_acco)->
						first()->name : "brak") .
					"</td>
					<td>
						<a href=" . URL::to('/participant/details') . "/" . $part->id . "> Szczegóły</a>
					</td>
				</tr>";
		}	
	echo "</table>
		<p>
            <input type=\"submit\" id=\"submit\" value=\"Przydziel zaznaczonych\">
            <input type=\"reset\" value=\"Odznacz\">
        </p>
	</form>";
			
?>	

<br>
<a href="{{URL::to('/group')}}">Powrót do grup</a>
@stop