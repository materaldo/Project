

@extends('layouts.default')

@section('header')
	
	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
<form method="post" action = "{{ URL::to('/accommodation/add')}}">			 
        <h4><label>{{Lang::get('add.nameP')}}<br>
            <input name = "name" id = "name" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>{{Lang::get('add.street')}}<br>
            <input name = "street" id="street" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>{{Lang::get('add.building')}}<br>
            <input name = "building" id="building" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
		<h4><label>{{Lang::get('add.postcode')}}<br>
            <input name = "post_code" id="post_code" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>{{Lang::get('add.city')}}<br>
            <input name = "city" id="city" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>{{Lang::get('add.telephone')}}<br>
            <input name = "phone_number" id="phone_number" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>{{Lang::get('add.map')}}<br>
            <input name = "map" id="map" type = "text" size = "28"
                maxlength = "255">
        </label></h4>
        <h4><label>{{Lang::get('add.allP')}}<br>
            <input name = "all_places" id="all_places" type = "text" size = "28"
                maxlength = "30">
        </label></h4>
        <h4><label>{{Lang::get('add.img')}}<br>
            <input name = "image" id="image" type = "text" size = "28"
                maxlength = "255">
        </label></h4>   
	<p>		
		<input type = "submit" id="submit" value = {{Lang::get('add.add')}}>
        <input type = "reset" value = {{Lang::get('add.cln')}}>
    </p>
</form>

@stop