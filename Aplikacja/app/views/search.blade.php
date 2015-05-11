@extends('layouts.default')

@section('header')

	<meta name="Description" content=""/>
	<meta name="Keywords" content=""/>
	{{App::setLocale(Session::get('lang', 'pl'));}}
	<link rel="Stylesheet" type="text/css" href="styles/style.css"/>
	<script type="text/javascript" src="scripts/wyszukiwanie.js"></script>
	<style>
		table {
			display:none;
		}
	</style>
	{{HTML::style('css/style.css');}}
	{{HTML::script('js/wyszukiwanie.js');}}

@stop

@section('content')

<h2>{{Lang::get('search.search')}}</h2>
		<p>{{Lang::get('search.description')}}</p>
				<select id="wyborSzukanych" onchange="wyswietlFormularz()">
					<option value=""></option>
					<option value="Uczestnik">{{Lang::get('search.participant')}}</option>
					<option value="Opiekun">{{Lang::get('search.protector')}}</option>
					<option value="Grupa">{{Lang::get('search.group')}}</option>
					<option value="Nocleg">{{Lang::get('search.accommodation')}}</option>
				</select>
			
<table id="szukajUczestnik">
    <form action = "http://zpi.dev/results">
		<tr>
			<td>						 
                <h4><label>{{Lang::get('search.name')}}<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                <h4><label>{{Lang::get('search.surname')}}<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
        <tr>
			<td>						 
                <h4><label>{{Lang::get('search.nationality')}}<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                <h4><label>{{Lang::get('search.age')}}<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                        <input type = "submit" value = {{Lang::get('search.searchBTN')}}>
                        <input type = "reset" value = {{Lang::get('search.clearBTN')}}>
			</td>
        </tr>       
    </form>
</table>
<table id="szukajOpiekun">
    <form action = "http://zpi.dev/results">
		<tr>
			<td>						 
                <h4><label>{{Lang::get('search.name')}}<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>{{Lang::get('search.surname')}}<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
        <tr>
			<td>						 
                <h4><label>{{Lang::get('search.email')}}<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>{{Lang::get('search.nationality')}}<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                        <input type = "submit" value = {{Lang::get('search.searchBTN')}}>
                        <input type = "reset" value = {{Lang::get('search.clearBTN')}}>
			</td>
        </tr>       
    </form>
</table>
<table id="szukajGrupa">
    <form action = "http://zpi.dev/results">
		<tr>
			<td>						 
                <h4><label>{{Lang::get('search.nameGR')}}<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>{{Lang::get('search.protector')}}<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
        <tr>
			<td>						 
                <h4><label>{{Lang::get('search.nationality')}}<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
			<td>
                <h4><label>{{Lang::get('search.members')}}<br><input name = "nazwisko" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                        <input type = "submit" value = {{Lang::get('search.searchBTN')}}>
                        <input type = "reset" value = {{Lang::get('search.clearBTN')}}>
			</td>
        </tr>       
    </form>
</table>

<table id="szukajNocleg">
    <form action = "http://zpi.dev/results">
		<tr>
			<td>					 
                <h4><label>{{trans('search.hotel')}}<br><input name = "name" type = "text" size = "28" maxlength = "255"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                <h4><label>{{Lang::get('search.street')}}<br><input name = "street" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
        <tr>
			<td>						 
                <h4><label>{{Lang::get('search.type')}}<br><input name = "imie" type = "text" size = "28" maxlength = "30"></label></h4>
			</td>
		</tr>
		<tr>
			<td>
                        <input type = "submit" value = {{Lang::get('search.searchBTN')}}>
                        <input type = "reset" value = {{Lang::get('search.clearBTN')}}>
			</td>
        </tr>       
    </form>
</table>
<br><br>

@stop