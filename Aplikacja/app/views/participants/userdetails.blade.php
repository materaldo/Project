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
        if ($prot != null) {

        echo " Imię: " . $prot->first_name . "<br><br> Nazwisko: " . $prot->last_name . " <br><br> Data urodzenia: " . $prot->date_of_birth . " <br><br> Numer telefonu: " .
                $prot->phone_number . "<br><br> Numer dokumentu: " . $prot->document_number . "<br><br> Numer ubezpieczenia: " . $prot->insurance_number;
        if ($prot->id_acco != NULL) {
            $accus = Accommodation::where('id', '=', $prot->id_acco)->first();
            echo "<br><br>Zakwaterowanie:<br><br><img style=\"max-width:40%;\" src = \"" . $accus->image . " \"><br><br>  " . $accus->name . ", " . $accus->street . " <br><br> " . $accus->post_code .
                    "  " . $accus->city . " <br><br> Numer telefonu: " . $accus->phone_number . " <br><br> Mapa:  <a href =\"" . $accus->map . "\">Sprawdź mapę</a>";
        } else {
            echo "<br><br>Zakwaterowanie: brak";
        }
    } else {
        $prot = Protector::where('id', '=', $idU)->first();
        if ($prot != null) {

            echo " Imię: " . $prot->first_name . "<br><br> Nazwisko: " . $prot->last_name . " <br><br> Data urodzenia: " . $prot->date_of_birth . " <br><br> Numer telefonu: " .
                    $prot->phone_number . "<br><br> Numer dokumentu: " . $prot->document_number . "<br><br> Numer ubezpieczenia: " . $prot->insurance_number;
            if ($prot->id_acco != NULL) {
                $accus = Accommodation::where('id', '=', $prot->id_acco)->first();
                echo "<br><br><center> Zakwaterowanie: </center><br><br> <center><img src = \"" . $accus->image . " \" .  height=\"250\" width=\"250\"></center><br><br>  " . $accus->name . ", " . $accus->street . " <br><br> " . $accus->post_code .
                        "  " . $accus->city . " <br><br> Numer telefonu: " . $accus->phone_number . " <br><br> Mapa:  <a href =\"" . $accus->map . "\">Sprawdź mapę</a>";
            } else {
                echo "<br><br>Zakwaterowanie: brak";
            }
        }
    }

}
    ?>

@stop