
@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />

@stop

@section('content')

<h2>BAZA NOCLEGOWA</h2>
<p>Dodawanie miejsc do bazy noclegowej (administrator)<br>
1. Użytkownik uruchamia łącze "baza noclegowa".<br>
2. System wyświetla aktualną bazę noclegową wraz z liczbami dostępnych miejsc.<br>
3. Użytkownik naciska przycisk "Dodaj nowe miejsce".<br>
4. System wyświetla formularz dodawania nowego miejsca.<br>
5. Użytkownik wprowadza następujące dane: adres, lokalizację?, status, miejsca ogółem i zatwierdza wprowadzanie.<br>
6. System tworzy nowy obiekt bazy danych ustawiając identyfikator na kolejną liczbę naturalną i miejsca zajęte na 0, oraz pozostałe dane wprowadzone przez użytkownika.<br></p>

		<table id="baza">	
			<tr>
				<td></td>
				<td>Nazwa, adres noclegu</td>
				<td>Liczba miejsc zajętych</td>
				<td>Liczba miejsc ogółem</td>
			</tr>		
			<tr>
				<td><img src="{{asset('images/hotel1.jpg')}}" alt="hotel1"/></td>
				<td>Hotel Miejski<br>ul. Zielona 30a, 50-335 Wrocław</td>
				<td align="middle">43</td>
				<td align="middle">200</td>
			</tr>
			<tr>
				<td><img src="{{asset('images/hotel2.jpg')}}" alt="hotel2"/></td>
				<td>Szkoła Podstawowa im. Kazimierza Wielkiego<br>ul. Akademicka 21, 50-342 Wrocław</td>
				<td align="middle">12</td>
				<td align="middle">60</td>
			</tr>
		</table>

<p>Tutaj lista miejsc noclegowych pobrana z bazy danych</p>

<a class="clickMe" href="nowynocleg.php">Dodaj nowe miejsce</a>

@stop
