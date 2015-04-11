function start()
{	
	document.getElementById("szukajUczestnik").style.visibility = "hidden";
	document.getElementById("szukajOpiekun").style.visibility = "hidden";
	document.getElementById("szukajGrupa").style.visibility = "hidden";
	document.getElementById("szukajNocleg").style.visibility = "hidden";
	document.getElementById("szukajUczestnik").style.display = "none";		document.getElementById("szukajOpiekun").style.display = "none";
	document.getElementById("szukajGrupa").style.display = "none";
	document.getElementById("szukajNocleg").style.display = "none";
}

function wyswietlFormularz()
{	
	var wybor=document.getElementById("wyborSzukanych");
	var str=wybor.options[wybor.selectedIndex].innerHTML;

	switch(str)
	{
	case '':
		document.getElementById("szukajUczestnik").style.visibility = "hidden";
		document.getElementById("szukajUczestnik").style.display = "none";
		document.getElementById("szukajOpiekun").style.visibility = "hidden";
		document.getElementById("szukajOpiekun").style.display = "none";
		document.getElementById("szukajGrupa").style.visibility = "hidden";
		document.getElementById("szukajGrupa").style.display = "none";
		document.getElementById("szukajNocleg").style.visibility = "hidden";
		document.getElementById("szukajNocleg").style.display = "none";
	break;
	case 'Uczestnik': 
		document.getElementById("szukajUczestnik").style.visibility = "visible";
		document.getElementById("szukajUczestnik").style.display = "block";
		document.getElementById("szukajOpiekun").style.visibility = "hidden";
		document.getElementById("szukajOpiekun").style.display = "none";
		document.getElementById("szukajGrupa").style.visibility = "hidden";
		document.getElementById("szukajGrupa").style.display = "none";
		document.getElementById("szukajNocleg").style.visibility = "hidden";
		document.getElementById("szukajNocleg").style.display = "none";
	break;
	case 'Opiekun': 
		document.getElementById("szukajUczestnik").style.visibility = "hidden";
		document.getElementById("szukajUczestnik").style.display = "none";
		document.getElementById("szukajOpiekun").style.visibility = "visible";
		document.getElementById("szukajOpiekun").style.display = "block";
		document.getElementById("szukajGrupa").style.visibility = "hidden";
		document.getElementById("szukajGrupa").style.display = "none";
		document.getElementById("szukajNocleg").style.visibility = "hidden";
		document.getElementById("szukajNocleg").style.display = "none";
	break;
	case 'Grupa': 
		document.getElementById("szukajUczestnik").style.visibility = "hidden";
		document.getElementById("szukajUczestnik").style.display = "none";
		document.getElementById("szukajOpiekun").style.visibility = "hidden";
		document.getElementById("szukajOpiekun").style.display = "none";
		document.getElementById("szukajGrupa").style.visibility = "visible";
		document.getElementById("szukajGrupa").style.display = "block";
		document.getElementById("szukajNocleg").style.visibility = "hidden";
		document.getElementById("szukajNocleg").style.display = "none";
	break;
	case 'Nocleg': 
		document.getElementById("szukajUczestnik").style.visibility = "hidden";
		document.getElementById("szukajUczestnik").style.display = "none";
		document.getElementById("szukajOpiekun").style.visibility = "hidden";
		document.getElementById("szukajOpiekun").style.display = "none";
		document.getElementById("szukajGrupa").style.visibility = "hidden";
		document.getElementById("szukajGrupa").style.display = "none";
		document.getElementById("szukajNocleg").style.visibility = "visible";
		document.getElementById("szukajNocleg").style.display = "block";
	break;
	}
}

window.addEventListener( "load", start, false ); 