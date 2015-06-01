@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>

@stop

@section('content')
<form method="post" id="mailForm" action="{{URL::to('/group/messagesender')}}/{{$idG}}">
        <input name = "title" id="title" type = "text" size = "53" maxlength = "255"value="tytuł"><br>
<br>
    <textarea rows="4" cols="50" form="mailForm" name="emailText" id="emailText">
            Treść maila
    </textarea>
    <br><br><input type="submit" id="submit" value="Wyślij">
    </form>
<br>


@stop