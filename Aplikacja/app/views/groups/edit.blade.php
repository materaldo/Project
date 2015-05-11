@extends('layouts.default')

@section('header')

    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <?php
    $editedGroup = Group::find($idG);
    $number_of_added_participants = DB::table('participants')->where('id_gr', '=', $idG)->count();
    ?>
@stop

@section('content')
    EDYCJA DANYCH
    <form action="http://zpi.dev/group/confirm/{{$idG}}" method="post">
        <h4><label>Liczba osób:<br>
                <input name="num_of_people" id="num_of_people" type="text" size="28" maxlength="20" value="{{$editedGroup->number_of_people}}"required>
            </label></h4>

        <h4><label>Środek transportu:<br>
                <input name="mean_of_trans" id="mean_of_trans" type="text" size="28" maxlength="50" value="{{$editedGroup->mean_of_transport}}"required>
            </label></h4>
        <h4><label>Kraj:<br>
                <input name="country" id="country" type="text" size="28" maxlength="50" value="{{$editedGroup->id_coun}}"required>
            </label></h4>
        <h4><label>Język 1:<br>
                <input name="lang1" id="lang1" type="text" size="28" maxlength="50" value="{{$editedGroup->id_first_lang}}"required>
            </label></h4>
        <h4><label>Język 2:<br>
                <input name="lang2" id="lang2" type="text" size="28" maxlength="50"value="{{$editedGroup->id_second_lang}}" required>
            </label></h4>
        <h4><label>Język 3:<br>
                <input name="lang3" id="lang3" type="text" size="28" maxlength="50"value="{{$editedGroup->id_third_lang}}" required>
            </label></h4>



         <p>
            <input type="submit" id="submit" value="OK">
            <input type="reset" value="Wyczyść">
            </p>


    </form>

@stop