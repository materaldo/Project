
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')
<br>
<h4>{{Lang::get('management.groupManagement')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/index.php/language">{{Lang::get('management.browse')}}</a>
		</li>
		<li>
			<a class="clickMe" href="http://zpi.dev/index.php/country">{{Lang::get('management.show')}}</a>
		</li>
	</ul>
	
<h4>{{Lang::get('management.baseManagement')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/index.php/language">{{Lang::get('management.languages')}}</a>
		</li>
		<li>
			<a class="clickMe" href="http://zpi.dev/index.php/country">{{Lang::get('management.countries')}}</a>
		</li>
	</ul>
	
<h4>{{Lang::get('management.allocationManagement')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/index.php/accommodation/add">{{Lang::get('management.automatic')}}</a>
		</li>
		<li>
			<a class="clickMe" href="http://zpi.dev/index.php/accommodation/add">{{Lang::get('management.manual')}}</a>
		</li>
	</ul>
	
<h4>{{Lang::get('management.contact')}}</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/index.php/accommodation/add">{{Lang::get('management.messages')}}</a>
		</li>
	</ul>
	
@stop
