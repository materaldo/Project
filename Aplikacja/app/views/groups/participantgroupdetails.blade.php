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

    echo "<h4><b>Grupa nr " . $gr->id . "</b></h4>
	<br>Liczba członków:" . $gr->number_of_people .
            "<br>Środek transportu: " . $gr->mean_of_transport .
            "<br>Kraj pochodzenia: " . Country::find($gr->id_coun)->country .
            "<br>Język ojczysty: " . Language::find($gr->id_first_lang)->language .
            "<br><br><a href=" . URL::to('/group/edit') . "/" . $gr->id . ">Kliknij by edytować</a></br>".
            "<br><a href=" . URL::to('/participant/add') . "/" . $gr->id . ">Kliknij by dodać członków</a></br>".
            "<br><br><h4>Członkowie: </h4>";

    $participants=Participant::where('id_gr', '=', $gr->id)->get();
    echo "<form action=\"" . URL::to('/participant/chooseplace') . "\" method=\"post\"><table>";

    foreach ($participants as $part)
    {
        echo "<tr>
					<td>
						<input type=\"checkbox\" name=\"participants[]\" value=\"". $part->id ."\">
					</td>
					<td>"
                . $part->first_name . " " . $part->last_name ."
					</td>
					<td>
					</td>
				</tr>";
    }
    echo "</table>
		<p>
            <input type=\"submit\" id=\"submit\" value=\"Przydziel\">
            <input type=\"reset\" value=\"Odznacz\">
        </p>
	</form>";

    ?>


@stop