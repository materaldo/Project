@extends('layouts.default')

@section('header')

    {{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>

@stop

@section('content')

    <?php
    $us = Participant::where('id', '=', $idU)->first();
    if ($us != null) {

	$gr = Group::where('id', '=', $us->id_gr)->first();

    echo "<h2>" . $us->first_name . " " . $us->last_name . " </h2><b>Data urodzenia: </b>" . $us->date_of_birth . " <br><b>Numer telefonu:</b> " .
            $us->phone_number . "<br><b>Numer dokumentu:</b> " . $us->document_number . "<br><b>Numer ubezpieczenia:</b> " . $us->insurance_number . "<br>";
    if ($us->id_acco != NULL) {
        $acc = Accommodation::where('id', '=', $us->id_acco)->first();
        echo "<br><strong>Zakwaterowanie</strong><br><img style=\"max-width:40%;\" src=\"" . $acc->image ."\" alt=\"" . $acc->name ."\"/><h2> " . $acc->name . 
	"</h2><strong>" . Lang::get('places.address') . "</strong>: " . $acc->street . " " . $acc->building . "<br>" . $acc->post_code . " " . $acc->city . 
	"<br><br><strong>" . Lang::get('places.contact') . "</strong>" . $acc->phone_number . 
	"<br><br><strong>" . Lang::get('places.places') . "</strong>" . $acc->free_places . "/" . $acc->all_places . 
	"<br><br><strong>" . Lang::get('places.map') . "</strong><a href=\"" . $acc->map . "\">". $acc->map . "</a>";
    } else {
        echo "<br><br><b>Zakwaterowanie:</b> brak";
    }
    }
    else{
        $prot = Protector::where('id', '=', $idU)->first();
		$gr = Group::where('id_prot', '=', $idU)->first();
        if ($prot != null) {

        echo "<h2>" . $prot->first_name . " " . $prot->last_name . " </h2><b>Data urodzenia: </b>" . $prot->date_of_birth . " <br><b>Numer telefonu:</b> " .
            $prot->phone_number . "<br><b>Numer dokumentu:</b> " . $prot->document_number . "<br><b>Numer ubezpieczenia:</b> " . $prot->insurance_number . "<br>";
        if (isset($prot->id_acco)) {
             $acc = Accommodation::where('id', '=', $prot->id_acco)->first();
        echo "<br><strong>Zakwaterowanie</strong><br><img style=\"max-width:40%;\" src=\"" . $acc->image ."\" alt=\"" . $acc->name ."\"/><h2> " . $acc->name . 
	"</h2><strong>" . Lang::get('places.address') . "</strong>: " . $acc->street . " " . $acc->building . "<br>" . $acc->post_code . " " . $acc->city . 
	"<br><br><strong>" . Lang::get('places.contact') . "</strong>" . $acc->phone_number . 
	"<br><br><strong>" . Lang::get('places.places') . "</strong>" . $acc->free_places . "/" . $acc->all_places . 
	"<br><br><strong>" . Lang::get('places.map') . "</strong><a href=\"" . $acc->map . "\">". $acc->map . "</a>";
    } else {
            echo "<br><br>Zakwaterowanie: brak";
		}
        }
    }

    if (isset($gr ->id))//!=null) 
	{
        if(Auth::user()->hasRole("Admin") || Auth::user()->hasRole("Organizer"))
		{
		echo "<br><br><form action=" . URL::to('/group/details') . "/" . $gr->id . ">
        <input type=\"submit\" value=\"Wróć\"></form>";
        }
		else if(Auth::user()->hasRole("Protector"))
		{
		echo "<br><br><form action=" . URL::to('/group/participantdetails') . "/" . $gr->id . ">
        <input type=\"submit\" value=\"Wróć\"></form>";
        }
    }
    else {
		$part = Participant::where('id', '=', $idU)->first();

		if(Auth::user()->hasRole("Admin") || Auth::user()->hasRole("Organizer"))
		{
		echo "<br><br><form action=" . URL::to('/group/details') . "/" . $gr->id . ">
        <input type=\"submit\" value=\"Wróć\"></form>";
        }
		else if(Auth::user()->hasRole("Protector"))
		{
		echo "<br><br><form action=" . URL::to('/group/participantdetails') . "/" . $gr->id . ">
        <input type=\"submit\" value=\"Wróć\"></form>";
        }
    }
    ?>

@stop