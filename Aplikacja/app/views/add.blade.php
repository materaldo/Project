
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	<link rel="Stylesheet" type="text/css" href="styles/style.css" />
	<title>Strona główna orgranizatora</title>

	{{HTML::style('css/style.css');}}
	</head>
<body>              
                <form action = "http://zpi.dev/index.php/zatwierdz">
                 
								 
                <h4><label>Nazwa:<br>
                        <input name = "nazwa" type = "text" size = "28"
                        maxlength = "30">
                </label></h4>
                <h4><label>Adres:<br>
                        <input name = "adres" type = "text" size = "28"
                        maxlength = "30">
                </label></h4>
				<h4><label>Współrzędne?:<br>
                        <input name = "poludnik" type = "text" size = "12"
                        maxlength = "30"><input name = "rownoleznik" type = "text" size = "12"
                        maxlength = "30">
                </label></h4>
                
                <p>
                        <input type = "submit" value = "Dodaj">
                        <input type = "reset" value = "Wyczyść">
                </p>
                </form>

</body>
</html>