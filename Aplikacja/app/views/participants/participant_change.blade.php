
@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />


@stop


@section('content')


            <h1>Zmiana Zakwaterowania</h1>
			<p>Prszę wypałnić formularz dotyczący preferencji miejsca zakwaterownia. Pomoże nam on znaleźć odpowiedznie dla Ciebie miejsce.</p>
            
            <form name="FormularzZmiana" action="{{URL::to('/participant/sendmail')}}" method="post">
		

             <h3><label>Podaj przyczynę zmiany miejsca:</label></h3>
			  
              <p><input name="przyczyna1" type="checkbox" id = 'r1'>
              Chcę być zakwaterowany razem z:
                 <input name="Imie" type="text" size="50" maxlength="50" placeholder="Tutaj wpisz imię i nazwisko osoby z którą chcesz mieszkać"></p>
             
			 <p><input name="przyczyna2" type="checkbox" id = 'r2'>
              Nie jestem zadowolony ze standardu</p>
			 
			 <p><input name="przyczyna3" type="checkbox" id = 'r3'>
              Miejsce, do którego mnie przydzielono jest za drogie</p>
			 
			 <p><input name="przyczyna4" type="checkbox" id = 'r4'>
              Chcę mieszkać bliżej <input name="Place" type="text" size="50" maxlength="50" placeholder="Podaj lokalizację, która Cię interesuje"></p>
			  
			  <p><input name="przyczyna5" type="checkbox" id = 'r5'>
              Inne <input name="Other" type="text" size="50" maxlength="50" placeholder="Podaj przyczynę"></p>
			  
			  <p>W miarę możliwości postaramy się dobrać odpowiedznie dla Ciebie miejsce. <b>Twoje aktualne miejsce zakwaterowania może nie ulec zmianie z powodu braku miejsc spełniających Twoje kryteria!</b></p>
			  <p>W razie pytań prosimy dzwonić pod numer: 666 453 242 lub kontakt <a href="mailto:nasz.admin@charytatywna.org.pl">mailowy</a></p>
				<p>
               <input type="submit" value="Wyślij">
               <input type="reset" value="Wyczyść">
              </p>
            </form>
			
			
             <p><a href="{{URL::to('/participant/accommodation')}}">Powrót</a></p>

@stop