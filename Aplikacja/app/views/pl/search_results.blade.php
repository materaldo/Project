@extends('layouts.default')

@section('header')

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	<link rel="Stylesheet" type="text/css" href="styles/style.css" />
	<title>Strona główna orgranizatora</title>
	
	{{HTML::style('css/style.css');}}

@stop

@section('content')

<h2>WYNIKI WYSZUKIWANIA</h2>

		<table id="baza">	
			<tr>
				<td>Nazwa</td>
				<td>Kontakt</td>
				<td>Narodowość</td>
			</tr>		
			<tr>
				<td>Jan Kowalski</td>
				<td align="middle">35414413</td>
				<td>pl</td>
			</tr>
			<tr>
				<td>Josephine</td>
				<td align="middle">203597321</td>
				<td>fr</td>
			</tr>
		</table>
	<br>
<a href="index.php">Powrót do strony głównej</a>

@stop