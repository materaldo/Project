
@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />


@stop


@section('content')


            <h1>{{Lang::get('participantChange.replacement')}}</h1>
			<p>{{Lang::get('participantChange.replacementInfo')}}</p>
            
            <form name="FormularzZmiana" action="{{URL::to('/participant/sendmail')}}" method="post">
		

             <h3><label>{{Lang::get('participantChange.reason')}}</label></h3>
			  
              <p><input name="przyczyna[]" type="checkbox" id = 'r1' value="1">
              {{Lang::get('participantChange.accomodationWith')}}
                 <input name="Imie" type="text" size="50" maxlength="50" placeholder="{{Lang::get('participantChange.nameInput')}}"></p>
             
			 <p><input name="przyczyna[]" type="checkbox" id = 'r2' value="2">
             {{Lang::get('participantChange.standard')}}</p>
			 
			 <p><input name="przyczyna[]" type="checkbox" id = 'r3' value="3">
             {{Lang::get('participantChange.expensive')}}</p>
			 
			 <p><input name="przyczyna[]" type="checkbox" id = 'r4' value="4">
              {{Lang::get('participantChange.closer')}}<input name="Place" type="text" size="50" maxlength="50" placeholder="{{Lang::get('participantChange.localization')}}"></p>
			  
			  <p><input name="przyczyna[]" type="checkbox" id = 'r5' value="5">
              {{Lang::get('participantChange.other')}}<input name="Other" type="text" size="50" maxlength="50" placeholder="{{Lang::get('participantChange.res')}}"></p>
			  
			  <p>{{Lang::get('participantChange.info1')}}<b>{{Lang::get('participantChange.info2')}}</b></p>
			  <p>{{Lang::get('participantChange.info3')}}<a href="mailto:organizator@sdmwroc2016.pl">{{Lang::get('participantChange.info4')}}</a></p>
				<p>
               <input type="submit" value={{Lang::get('participantChange.send')}}>
               <input type="reset" value={{Lang::get('participantChange.reset')}}>
              </p>
            </form>
			
			
             <p><a href="{{URL::to('/participant/accommodation')}}">{{Lang::get('participantChange.back')}}</a></p>

@stop