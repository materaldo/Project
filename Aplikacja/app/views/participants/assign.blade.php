@extends('layouts.default')

@section('header')
	
	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>

@stop

@section('content')

    
<h2>{{Lang::get('participant.choose')}}</h2>

	<table>	
		<tr>
			<td></td>
			<td>{{Lang::get('place.nameaddress')}}</td>
			<td>{{Lang::get('place.free')}}</td>
			<td>{{Lang::get('place.all')}}</td>
		</tr>	
<?php
	$accommod = Accommodation::all();
	
	foreach ($accommod as $acc)
		{
			echo "<tr>
				<td>
					<a href=\"" . URL::to('/participant/assign') . "/" . $acc->id . "/". $sel ."\"><img src=\"" . $acc->image ."\" alt=\"" . $acc->name ."\" height=\"150\" width=\"100\"/></a>					
				</td>
				<td>" . 
					$acc->name . "<br>" . $acc->street . " " . $acc->buildings . ", " . $acc->post_code . " " . $acc->city . 
				"</td>
				<td align=\"middle\">" . 
					$acc->free_places . 
				"</td>
				<td align=\"middle\">" . $acc->all_places . 
			"</tr>";
		}	
?>
</table>

<form action="{{URL::to('/participant/assign')}}" method="post">
	<input type="hidden" name="parts" value="{{$sel}}">
<input type="submit" id="submit" value={{Lang::get('add.add')}}>
            <input type="reset" value={{Lang::get('add.cln')}}>
</form>

@stop