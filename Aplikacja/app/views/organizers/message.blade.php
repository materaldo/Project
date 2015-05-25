@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>

@stop

@section('content')
<form method="post" action="{{URL::to('/organizer/mail')}}" id="mailForm">
    <label>Tytuł: </label><input name = "title" id="title" type = "text" size = "53" maxlength = "255">
	<input type="submit" id="submit" value="Wyślij">
</form>
	<textarea rows="4" cols="50" form="mailForm" name="emailText" id="emailText">
            Treść maila
    </textarea>
@stop