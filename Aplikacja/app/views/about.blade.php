@extends('layouts.default')

@section('header')
	
	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')


<p> {{Lang::get('about.text1')}}<br><br>
{{Lang::get('about.text2')}}
<br><br>
{{Lang::get('about.text3')}}  
</p>



@stop