	@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')
<br>
<h4>{{Lang::get('management.groupManagement')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="{{URL::to('/group')}}">{{Lang::get('management.browse')}}</a>
		</li>
		<li>
			<a class="clickMe" href="{{URL::to('/group/unconfirmed')}}">{{Lang::get('management.show')}}</a>
		</li>
	</ul>
	
<h4>{{Lang::get('management.baseManagement')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="{{URL::to('/languages')}}">{{Lang::get('management.languages')}}</a>
		</li>
		<li>
			<a class="clickMe" href="{{URL::to('/country')}}">{{Lang::get('management.countries')}}</a>
		</li>
	</ul>
	
<h4>{{Lang::get('management.allocationManagement')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="{{URL::to('/group')}}">{{Lang::get('management.manual')}}</a>
		</li>		
		<li>
			<a class="clickMe" href="{{URL::to('/assignment')}}">{{Lang::get('management.assignment')}}</a>
		</li>
	</ul>

<h4>{{Lang::get('management.exportManagement')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="{{ URL::to('/dataexport')}}">{{Lang::get('management.export')}}</a>
		</li>
	</ul>
	
<h4>{{Lang::get('management.contact')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="{{URL::to('/organizer/message')}}">{{Lang::get('management.message')}}</a>
		</li>
	</ul>
	
@stop
