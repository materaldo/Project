

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
<?php
$grouped_people = DB::table('participants')->where('id_gr', '=', $idG)->count();
$picked_group = DB::table('groups')->where('id', '=', $idG)->first();
if($grouped_people == $picked_group->number_of_people)
    {
        echo "Dodałeś już wszystkich uczestników do tej grupy";

    }
else{
    echo "
    <form action='http://zpi.dev/participant/adduser/$idG' . method='post'>";
    echo'    <h4><label>Imię:<br>
                <input name="first_name" id="first_name" type="text" size="28" maxlength="20" required>
            </label></h4>
        <h4><label>Nazwisko:<br>
                <input name="last_name" id="last_name" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Email:<br>
                <input name="email" id="email" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Data:<br>
                <input name="date" id="date" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Numer telefonu:<br>
                <input name="phone_number" id="phone_number" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Kraj:<br>
                <input name="country" id="country" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Język 1:<br>
                <input name="lang1" id="lang1" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Język 2:<br>
                <input name="lang2" id="lang2" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Język 3:<br>
                <input name="lang3" id="lang3" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Numer dokumentu:<br>
                <input name="document_number" id="document_number" type="text" size="28" maxlength="50" required>
            </label></h4>
        <h4><label>Numer ubezpieczenia:<br>
                <input name="insurance_number" id="insurance_number" type="text" size="28" maxlength="50" required>
            </label></h4>


        <p>
            <input type="submit" id="submit" value="Dodaj">
            <input type="reset" value="Wyczyść">
        </p>
    </form>';
    }
?>
@stop