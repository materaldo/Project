@extends('layouts.default')

@section('header')

    {{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>

@stop

@section('content')
    <?php
    $grouped_people = DB::table('participants')->where('id_gr', '=', $idG)->count();
    $picked_group = DB::table('groups')->where('id', '=', $idG)->first();
    if ($grouped_people == $picked_group->number_of_people) {
        echo "Dodałeś już wszystkich uczestników do tej grupy";

    } else {

        echo "
    <form action=\"http://zpi.dev/participant/adduser/" . "$idG\" method=\"post\">
        <h4><label>" . Lang::get('add.name') . "<br>
                <input name='first_name' id='first_name' type=\"text\" size=\"28\" maxlength=\"20\" required>
            </label></h4>
        <h4><label>" . Lang::get('add.surname') . "<br>
                <input name=\"last_name\" id=\"last_name\" type=\"text\" size=\"28\" maxlength=\"50\" required>
            </label></h4>
        <h4><label>" . Lang::get('add.email') . "<br>
                <input name=\"email\" id=\"email\" type=\"text\" size=\"28\" maxlength=\"50\" required>
            </label></h4>
        <h4><label>" . Lang::get('add.date') . "<br>
                <input name=\"date\" id=\"date\" type=\"text\" size=\"28\" maxlength=\"50\" required>
            </label></h4>
        <h4><label>" . Lang::get('add.telephone') . "<br>
                <input name=\"phone_number\" id=\"phone_number\" type=\"text\" size=\"28\" maxlength=\"50\" required>
            </label></h4>
        <div class=\"form-list\">
            <h4><label for=\"country_select\"> " . Lang::get('confide::confide.signup.country_select') . "</label></h4>" .
                Form::select('country_select', $countries) . "
        </div><br>
        <div class=\"form-list\">
            <h4><label for=\"language1_select\">" . Lang::get('confide::confide.signup.language_select') . "</label></h4>
            " . Form::select('language1_select', $languages) . "
        </div><br>
        <div class=\"form-list\">
            <h4><label for=\"language2_select\">" . Lang::get('confide::confide.signup.language_select') . "</label></h4>
            " . Form::select('language2_select', $languages) . "
        </div><br>
        <div class=\"form-list\">
            <h4><label for=\"language3_select\">" . Lang::get('confide::confide.signup.language_select') . " </label></h4>
            " . Form::select('language3_select', $languages) . "
        </div><br>
        <h4><label>" . Lang::get('add.doc') . "<br>
                <input name=\"document_number\" id=\"document_number\" type=\"text\" size=\"28\" maxlength=\"50\" required>
            </label></h4>
        <h4><label>" . Lang::get('add.ins') . "<br>
                <input name=\"insurance_number\" id=\"insurance_number\" type=\"text\" size=\"28\" maxlength=\"50\" required>
            </label></h4>
        <p>
            <input type=\"submit\" id=\"submit\" value=" . Lang::get('add.add') . ">
            <input type=\"reset\" value=" . Lang::get('add.cln') . ">
        </p>
    </form>";
    }
    ?>
@stop