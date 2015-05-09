

@extends('layouts.default')

@section('header')
	
	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
      
<h4>
Dodano grupę, możesz teraz w panelu zarządzania dodać informacje o uczestnikach!
		</h4>	  
	
@stop