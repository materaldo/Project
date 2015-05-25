@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <?php
    $editedGroup = Group::find($idG);
    $number_of_added_participants = DB::table('participants')->where('id_gr', '=', $idG)->count();
            $country = DB::table('countries')->where('id', '=', $editedGroup->id_coun)->first();
            $lang1 = DB::table('languages')->where('id', '=', $editedGroup->id_first_lang)->first();
            $lang2 = DB::table('languages')->where('id', '=', $editedGroup->id_second_lang)->first();
            $lang3 = DB::table('languages')->where('id', '=', $editedGroup->id_third_lang)->first();
    ?>
@stop

@section('content')
    <form action="{{URL::to('/group/confirm')}}/{{$idG}}" method="post">
        <h4><label>Liczba osób:<br>
                <input name="num_of_people" id="num_of_people" type="text" size="28" maxlength="20" value="{{$editedGroup->number_of_people}}"required>
            </label></h4>

        <h4><label>Środek transportu:<br>
                <input name="mean_of_trans" id="mean_of_trans" type="text" size="28" maxlength="50" value="{{$editedGroup->mean_of_transport}}"required>
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
            <input type="submit" id="submit" value="OK">
            <input type="reset" value="Wyczyść">
            </p>


    </form>

@stop