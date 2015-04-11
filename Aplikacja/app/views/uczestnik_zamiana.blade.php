@section('header')
            <title>Światowe Dni Młodzieży - Wrocław</title>

@stop

@section('content')
            <h1>Zmiana Zakwaterowania</h1>
			<p>Prszę wypałnić formularz dotyczący preferencji miejsca zakwaterownia. Pomoże nam on znaleźć odpowiedznie dla Ciebie miejsce.
            
            <form name="FormularzZmiana" action="zamiana.php" method="post">
			
			
             
              <h3><label>Podaj przyczynę zmiany miejsca:</label></h3>
			  
              <p><input name="przyczyna1" type="checkbox">
              Chcę być zakwaterowany razem z:
                 <input name="Imie" type="text" size="50" maxlength="50" placeholder="Tutaj wpisz imię i nazwisko osoby z którą chcesz mieszkać"></p>
             
			 <p><input name="przyczyna1" type="checkbox">
              Nie jestem zadowolony ze standardu</p>
			 
			 <p><input name="przyczyna1" type="checkbox">
              Miejsce, do którego mnie przydzielono jest za drogie</p>
			 
			 <p><input name="przyczyna1" type="checkbox">
              Chcę mieszkać bliżej <input name="Imie" type="text" size="50" maxlength="50" placeholder="Podaj lokalizację, która Cię interesuje"></p>
			  
			  <p>W miarę możliwości postaramy się dobrać odpowiedznie dla Ciebie miejsce. <b>Twoje aktualne miejsce zakwaterowania może nie ulec zmianie z powodu braku miejsc spełniających Twoje kryteria!</b></p>
			  <p>W razie pytań prosimy dzwonić pod numer: 666 453 242 lub kontakt <a href="mailto:nasz.admin@charytatywna.org.pl">mailowy</a></p>
    
               <input type="submit" value="Wyślij">
               <input type="reset" value="Wyczyść">
              </p>
            </form>
            <a href="index.php">Powrót</a>

    @stop
