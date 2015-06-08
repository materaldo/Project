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

        echo " Imię: " . $us->first_name . "<br><br> Nazwisko: " . $us->last_name . " <br><br> Data urodzenia: " . $us->date_of_birth . " <br><br> Numer telefonu: " .
                $us->phone_number . "<br><br> Numer dokumentu: " . $us->document_number . "<br><br> Numer ubezpieczenia: " . $us->insurance_number;
        if ($us->id_acco != NULL) {
            $accus = Accommodation::where('id', '=', $us->id_acco)->first();
            echo "<br><br><center> Zakwaterowanie: </center><br><br> <center><img src = \"" . $accus->image . " \" . height=\"250\" width=\"250\"></center><br><br>  " . $accus->name . ", " . $accus->street . " <br><br> " . $accus->post_code .
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

    ?>

@stop