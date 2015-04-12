@extends('layouts.default')

@section('header')

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="Description" content=""/>
	<meta name="Keywords" content=""/>
	<link rel="Stylesheet" type="text/css" href="styles/style.css"/>
	<script type="text/javascript" src="scripts/wyszukiwanie.js"></script>
	<title>Strona główna orgranizatora</title>
	
	{{HTML::style('css/style.css');}}
	{{HTML::script('js/wyszukiwanie.js');}}

@stop

@section('content')
       
<h2>WYSZUKIWANIE</h2>
		<p>Wybierz czego szukasz: </p>
				<select id="wyborSzukanych" onchange="wyswietlFormularz()">
					<option value=""></option>
					<option value="uczestnik">Uczestnik</option>
					<option value="opiekun">Opiekun</option>
					<option value="grupa">Grupa</option>
					<option value="nocleg">Nocleg</option>
				</select>
			
<table id="szukajUczestnik">
    <form action = "http://zpi.dev/index.php/results">
		<tr>
			<td>						 
                <h4><label>Imię:<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>Nazwisko:<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
        <tr>
			<td>						 
                <h4><label>Narodowość:<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>Wiek:<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                        <input type = "submit" value = "Wyszukaj">
                        <input type = "reset" value = "Wyczyść">
			</td>
        </tr>       
    </form>
</table>
<table id="szukajOpiekun">
    <form action = "http://zpi.dev/index.php/results">
		<tr>
			<td>						 
                <h4><label>Imię:<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>Nazwisko:<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
        <tr>
			<td>						 
                <h4><label>Email:<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>Narodowość:<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                        <input type = "submit" value = "Wyszukaj">
                        <input type = "reset" value = "Wyczyść">
			</td>
        </tr>       
    </form>
</table>
<table id="szukajGrupa">
    <form action = "http://zpi.dev/index.php/results">
		<tr>
			<td>						 
                <h4><label>Nazwa:<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>Opiekun:<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
        <tr>
			<td>						 
                <h4><label>Narodowość:<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>Liczba członków:<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                        <input type = "submit" value = "Wyszukaj">
                        <input type = "reset" value = "Wyczyść">
			</td>
        </tr>       
    </form>
</table>

<table id="szukajNocleg">
    <form action = "http://zpi.dev/index.php/results">
		<tr>
			<td>						 
                <h4><label>Nazwa:<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>Adres:<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
        <tr>
			<td>						 
                <h4><label>Typ:<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                        <input type = "submit" value = "Wyszukaj">
                        <input type = "reset" value = "Wyczyść">
			</td>
        </tr>       
    </form>
</table>
<br><br>

@stop