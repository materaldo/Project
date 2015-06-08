@extends('layouts.default')

@section('header')

    {{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <?php
    $editedGroup = Group::find($idG);
    ?>
@stop

@section('content')


    <script type="text/javascript">
        $(document).ready(function () {
            $('#submit').click(function() {
                checked = $("input[type=checkbox]:checked").length;

                if(!checked) {
                    alert("Musisz wybrać co najmniej jednego uzytkownika.") ;
                    return false;
                }

            });
        });

    </script>
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
    $group = Group::where('id', '=', $idG)->first();
    $protector=Protector::where('id', '=', $group->id_prot)->first();
    echo "<form action=\"" . URL::to('/participant/chooseplaceprotector/'. $idG ).   "\" method=\"post\"
    {{-- onsubmit=\"return validate()\"--}}><table>";


        echo "<tr>
					<td>
						<input type=\"checkbox\"  id = \"checked\" name=\"participants[]\" value=\"". $protector->id ."\">
					</td>
					<td><b>"
                . $protector->first_name . " " . $protector->last_name ."
					</b></td>
					<td>
						<a href=" . URL::to('/participant/details') . "/" . $protector->id . "> Szczegóły</a>
					</td>
				</tr>";

    foreach ($participants as $part)
    {

        echo "<tr>
					<td>
						<input type=\"checkbox\"  id = \"checked\" name=\"participants[]\" value=\"". $part->id ."\">
					</td>
					<td>"
                . $part->first_name . " " . $part->last_name ."
					</td>
					<td>
						<a href=" . URL::to('/participant/details') . "/" . $part->id . "> Szczegóły</a>
					</td>
				</tr>";
    }
    echo "</table>
		<p>
            <input type=\"submit\" id=\"submit\" value=\"Przydziel\" >
            <input type=\"reset\" value=\"Odznacz\">

        </p>
	</form>";


    ?>


@stop