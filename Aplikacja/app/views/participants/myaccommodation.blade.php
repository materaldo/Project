@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content=""/>
	<meta name="Keywords" content=""/>

@stop

@section('content')

<h2>{{Lang::get('participant.accommodation')}}</h2>

<p>tutaj nazwa</p>
<p>tutaj adres</p>


<p><a href="http://zpi.dev/participant/change">{{Lang::get('participant.change')}}</a></p>

		
<br><br>

@stop