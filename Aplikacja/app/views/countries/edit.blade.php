

@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	<?php
	
	$co = Country::find($idC);
	
		if (isset($idC)){
			echo "
	 <script type=\"text/javascript\">
        function loadData() 
		{
			document.getElementById(\"country\").value = \"" . $co->country . "\";
        }
        window.onload = loadData;
        </script>";}
	?>
@stop

@section('content')
              	
<form action = "{{URL::to('/country/confirm')}}/{{$idC}}">		 
        <h4><label>Edytuj kraj:<br>
            <input name = "country" id = "country" type = "text" size = "28"
                maxlength = "255" autofocus>
        </label></h4>
        
		<input type = "submit" id="submit" value = "Zatwierdź">
</form>

@stop