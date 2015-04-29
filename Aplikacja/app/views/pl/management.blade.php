
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')
<br>
<h4>Zarządzaj grupami</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/language">Przeglądaj zatwierdzone istniejące grupy</a>
		</li>
		<li>
			<a class="clickMe" href="http://zpi.dev/country">Pokaż grupy czekające na zatwierdzenie</a>
		</li>
	</ul>
	
<h4>Zarządzaj bazą danych</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/language">Języki</a>
		</li>
		<li>
			<a class="clickMe" href="http://zpi.dev/country">Państwa</a>
		</li>
	</ul>
	
<h4>Przydział miejsc</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/accommodation/add">Automatycznie przydziel miejsca</a>
		</li>
		<li>
			<a class="clickMe" href="http://zpi.dev/accommodation/add">Przydziel ręcznie</a>
		</li>
	</ul>
	
<h4>Konta</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/organizer/add">Dodaj konto organizatora</a>
		</li>
	</ul>	
	
<h4>Kontakt</h4>
	<ul>
		<li>
			<a class="clickMe" href="http://zpi.dev/index.php/accommodation/add">Wyślij wiadomość do opiekunów</a>
		</li>
	</ul>
	
@stop
