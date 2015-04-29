

@extends('layouts.default')

@section('header')

	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	<?php
	
	$lang = Language::find($idL);
	
		if (isset($idL)){
			echo "
	 <script type=\"text/javascript\">
        function loadData() 
		{
			document.getElementById(\"language\").value = \"" . $lang->language . "\";
        }
        window.onload = loadData;
        </script>";}
	?>
@stop

@section('content')
              
<form action = "http://zpi.dev/index.php/language/confirm/{{$idL}}">			 
        <h4><label>Edytuj język:<br>
            <input name = "language" id = "language" type = "text" size = "28"
                maxlength = "255" autofocus>
        </label></h4>
        
		<input type = "submit" id="submit" value = "Zatwierdź">
</form>

@stop