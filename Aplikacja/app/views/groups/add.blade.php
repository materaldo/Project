@extends('layouts.default')

@section('header')
	
	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>

@stop

@section('content')

    <form action="http://zpi.dev/group/add" method="post">
        <h4><label>Liczba osób:<br>
                <input name="num_of_people" id="num_of_people" type="text" size="28" maxlength="20" required>
            </label></h4>
        <h4><label>Środek transportu:<br>
                <input name="mean_of_trans" id="mean_of_trans" type="text" size="28" maxlength="50" required>
            </label></h4>
        <div class="form-list">
            <h4><label for="country_select">{{{ Lang::get('confide::confide.signup.country_select') }}}</label></h4>
            {{Form::select('country_select', $countries)}}
        </div><br>
        <div class="form-list">
            <h4><label for="language1_select">{{{ Lang::get('confide::confide.signup.language_select') }}}</label></h4>
            {{ Form::select('language1_select', $languages)}}
        </div><br>
        <div class="form-list">
            <h4><label for="language2_select">{{{ Lang::get('confide::confide.signup.language_select') }}}</label></h4>
            {{ Form::select('language2_select', $languages)}}
        </div><br>
        <div class="form-list">
            <h4><label for="language3_select">{{{ Lang::get('confide::confide.signup.language_select') }}}</label></h4>
            {{ Form::select('language3_select', $languages)}}
        </div><br>
        <p>
            <input type="submit" id="submit" value="Dodaj">
            <input type="reset" value="Wyczyść">
        </p>
    </form>

@stop