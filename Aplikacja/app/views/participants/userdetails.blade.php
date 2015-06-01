

@extends('layouts.default')

@section('header')
	
	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')

<?php
    $us=Participant::where('id', '=', $idU)->first();

       echo " Imię: ". $us->first_name . "<br><br> Nazwisko: " . $us->last_name . " <br><br> Data urodzenia: ". $us->date_of_birth. " <br><br> Numer telefonu: " .
               $us->phone_number . "<br><br> Numer dokumentu: ". $us->document_number . "<br><br> Numer ubezpieczenia: " . $us->insurance_number ;
        if($us->id_acc != NULL)
            {
                $accus = Accomodation::where('id', '=', $us->id_acc);
                echo"<br><br> Nazwa zakwaterowania: " . $accus->name . " <br> Ulica: " . $accus-> street . " <br><br> Kod pocztowy: " . $accus-> post_code .
                " <br><br> Miasto: " . $accus -> city . " <br><br> Numer telefonu: " . $accus-> phone_numer . " <br><br> Miejsce: " . $accus->image . " <br><br> Google Maps" . $accus->maps;
            }
        else
            {
                echo "<br><br>Zakwaterowanie: brak";
            }

?>

@stop