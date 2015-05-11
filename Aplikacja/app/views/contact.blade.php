@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<p>
{{Lang::get('contact.contact1')}}<br>
+48 555 555 555
</p>

@stop