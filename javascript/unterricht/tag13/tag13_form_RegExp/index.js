"use strict";

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
document.getElementById("form1").addEventListener("submit", (event) => {
  event.preventDefault();

  //------------------------
   /*
		RegExp => Reguläre Ausdrücke
		
		\ => Alt Gr + ?
		
		\s 	= Leerzeichen (space)
		\S 	= kein Leerzeichen (no space)
		.		= jedes beliebiges Zeichen
		\d	= eine Ziffer (0-9)
		\D	= ein Zeichen, das keine Ziffer ist
		\w	= ein alphanummerisches Zeichen [a-zA-Z_0-9]
		\W	= ein nicht alphanummerisches Zeichen [^a-zA-Z_0-9]
		
		+++++++++++++++++++Multiplikatoren++++++++++++++++++++++
		exakte Anzahl an Vorkommen
		x{m,n}	= x soll mind. m-mal, aber nicht mehr als n-mal vorkommen
		x{n,}		= x soll mind. n-mal vorkommen
		x{n}		= x soll genau n-mal vorkommen
		
		Quantifizierer 
		x*			= x soll 0-mal oder öfter vorkommen ( alternative x{0,} )
		x+			= x soll 1-mal oder öfter vorkommen ( alternative x{1,} )
		x?			= x soll 0 oder 1 mal vorkommen ( alternative x{0,1} )
		
		/				= Begrenzer
		^				= Zirkumflex (Anfang einer Zeichenkette)
		$ 			= Ende eines Musters
		
		[^0-9] => innerhalb von [] => Negation (hier...keine Ziffer)
  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
  let muster1 = /@/;
	
	muster1 passt zu---------
	a@d
	aaaaa@wer
	abc123@gfdgfdg
	
	muster1 passt nicht zu---
	dsfsd@
	@gdfgfd
	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	let muster2 = /.+@.+/;
	
	. = beliebiges Zeichen
	+ = 1 oder mehrmals
	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	let muster3 = /a.b/;
	
	acb
	anb
	axb
	dbb = geht nicht
	axyb = geht nicht
	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	ste f  an     STE F  AN
	ste ph an			STE PH AN
	
	let muster = /ste(f|ph)an/i;
	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	\b = eine Wortgrenze
	
	
	let muster = /\bste(f|ph)an\b/;
	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	let muster = /h[eou]y/;
	
	hey
	hoy
	huy
	
	Muster passt nicht zu----
	heouy
	[eou] = NUR ein Zeichen aus []
	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	let muster = /(ab*c)xy/;
	
	* = 0 oder mehrmals
	abcxy
	abbcxy
	acxy
	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	
	die Methode test() vom RegExp prüft, ob ein bestimmtes Zeichenmuster in einer Zeichenkette vorkommt und gibt einen booleschen Wert zurück (true oder false)
	
	die Methode exec() vom RegExp sucht nach Vorkommen für ein entsprechendes Zeichenmuster und gibt diese als Array zurück 
	
	die Methode match() von Zeichenketten sucht innerhalb einer Zeichenkette die Vorkommen, die auf Zeichenmuster zutreffen, und gibt diese als Array zurück
	
	die Methode search() von Zeichenketten sucht nach Vorkommen für ein entsprechendes Zeichenmuster und gibt den Index des ersten Vorkommens zurück
	
	die Methode replace() von Zeichenketten ersetzt Vorkommen innerhalb einer Zeichenkette, die auf ein entsprechendes Zeichenmuster zutreffen
  */
  //-------------------------
	//let nameMuster = /a/;  //Zeichen a, egal wie oft und wo, hauptsache a
	//let nameMuster = /abcde/; //Zeichen abcde, die Reihenfolge ist wichtig
	
	//let nameMuster = /./;  //beliebiges Zeichen (auch leerZeichen) mit Ausnahme des Zeilenumbruchs
	
	//Zeichenklassen verwenden
	//nicht verwechseln mit /abcde/
	//eine Zeichenkette bezieht sich auf ein einzelnes Zeichen
	//let nameMuster = /[abcde]/; //eines der Zeichen a, b, c, d oder e
	
	//Negieren
	//keines der Zeichen a, b oder c, aber ein beliebig anderes Zeichen
	//nicht streng genug :-)
	//let nameMuster = /[^abc]/;
	
	//kein Leerzeichen allein
	//let nameMuster = /[^\s]/;
	//let nameMuster = /[\S]/;
	
	
	//oben liefert auch für solche Zeichenketten ein true zurück, in denen an irgendeiner Stelle ein passender Teil gefunden wird.
	
	//Wert soll komplett auf den regulären Ausfruck passen (d.h. keine weiteren Zeichen)
	//Anfang und Ende begrenzen mit ^und $
	//let nameMuster = /^P/; //beginnt mit P (Groß)
	
	//let nameMuster = /s$/; //endet mit s (klein)
	
	//let nameMuster = /^Kuchen$/; //muss genauso vorkommen
	
	//passt zu sport ist mord oder ich mache gerne sport
	//passt nicht zu: ich bin sportler -> weil ein einzelnes Wort (sport)
	//let nameMuster = /\bsport\b/;
	
	//Quantifizierer verwenden
	//abcdf  oder  abcd  aber nicht abcdff
	//let nameMuster = /^abcdf?$/;
	
	//abcdf  oder  abcd  oder abcdffffff
	//let nameMuster = /^abcdf*$/;
	
	//abcdf oder abcdffffff aber nicht abcd
	//let nameMuster = /^abcdf+$/;
	
	//passt zu abcdff (genau 2 mal f)
	//let nameMuster = /^abcdf{2}$/;
	
	//mindestens 2 mal f, beliebig oft
	//let nameMuster = /^abcdf{2,}$/;
	
	//mindestens 2 mal f, maximal 4
	//let nameMuster = /^abcdf{2,4}$/;
	
	 //Rolf Peter Hans-Hermann Li Lee
  //let nameMuster = /^[a-zA-ZäöüÄÖÜß\-\s\.]{2,10}$/;

  /*
		Modifikatoren
		i = kein Unterschied zwischen Groß- und Kleinschreibung
		g = globale Suche
		
	*/


  let nameMuster = /^[a-zA-ZäöüÄÖÜß\-\s\.]{2,10}$/;

  let ortMuster = /^(Dortmund|senftenberg|HILDESHEIM|berlin|geRA)$/i;

  //let plzMuster = /^[\d]{5}$/;
  let plzMuster = /^[0-9]{5}$/;

  //StraßenName HausNr (Kingstr. 123b)
  let strMuster = /^[a-zA-Z\-\.äöüÄÖÜß]{2,10}\s[0-9a-z]{1,5}$/;

  //chris@chris.de  wolf@web.de  melda@vodafone.de
  let mailMuster = /^[a-zA-Z0-9\-\.\_]{2,10}@[a-z\-]{3,10}\.[a-z]{2,5}$/;
  //------------------------
  let nachname = document.getElementById("nachname");
  let vorname = document.getElementById("vorname");
  let ort = document.getElementById("ort");
  let plz = document.getElementById("plz");
  let str = document.getElementById("str");
  let mail = document.getElementById("mail");
  //------------------------
  //ist Nachname leer?
  if(nachname.value === "") {
    alert("Nachname darf nicht leer sein");
    nachname.focus();
  }
  //ist Nachname richtig?
  else if( !nameMuster.test(nachname.value) ){
    alert("Muster für Nachname: \nMerkel, Hans Peter - Nur Buchstaben");
    nachname.focus();
  }
  //ist Vorname leer?
  else if(vorname.value === "") {
    alert("Vorname darf nicht leer sein");
    vorname.focus();
  }
  //ist Vorname richtig?
  else if( !nameMuster.test(vorname.value) ){
    alert("Muster für Vorname: \nAngela, Hans Peter - Nur Buchstaben");
    vorname.focus();
  }
  //ist Wohnort leer?
  else if(ort.value === "") {
    alert("Wohnort darf nur ......");
    ort.focus();
  }
  //ist Wohnort richtig?
  else if( !ortMuster.test(ort.value) ) {
    alert("Muster für Wohnort: \nDortmund, Hildesheim...");
    ort.focus();
  }
  //ist Str leer?
  else if(str.value === "") {
    alert("Straße darf nicht leer sein");
    str.focus();
  }
  //ist Straße richtig?
  else if( !strMuster.test(str.value) ) {
    alert("Muster für Straße: \nKingstr. 123b");
    str.focus();
  }
  //ist PLZ leer?
  else if(plz.value === "") {
    alert("PLZ darf nicht leer sein");
    plz.focus();
  }
  //ist PLZ richtig?
  else if( !plzMuster.test(plz.value) ) {
    alert("Muster für PLZ: \n12345");
    plz.focus();
  }
  //ist Mail leer?
  else if(mail.value === "") {
    alert("E-Mail darf nicht leer sein");
    mail.focus();
  }
   //ist E-Mail richtig?
  else if( !mailMuster.test(mail.value) ) {
    alert("Muster für E-Mail: \npaul@web.de");
    mail.focus();
  }
  else if(document.getElementById("beruf").options[0].selected) {
    alert("Haben Sie einen Beruf?");
    document.getElementById("beruf").focus();
  } else {
    alert(
      nachname.value + ", " + vorname.value +
      "\n" + str.value +
      "\n" + plz.value + " " + ort.value +
      "\n" + mail.value + 
      "\nBeruf: " + document.getElementById("beruf").value
    );
  }
  
});

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*
let button = document.getElementById("bmi_rechner");
button.addEventListener("click", (event) => {
  //alert("hallo");
  let hoch = document.getElementById("hoch");
  let gewicht = document.getElementById("gewicht");
  let height = parseFloat(hoch.value.replace(",","."));
  let weight = parseFloat(gewicht.value.replace(",","."));

  let bmi =( weight / (height * height)).toFixed(2);

  document.getElementById("result").innerText = "" + bmi.replace(".",",");

  event.preventDefault(); 
});
*/
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function istNumber(wert) {
	let muster = /^[\d.]+$/;
	return muster.test(wert);
}
let hoch = document.getElementById("hoch");
let gewicht = document.getElementById("gewicht");

let rechner = function(event) {
  let height = parseFloat(hoch.value.replace(",","."));
  let weight = parseFloat(gewicht.value.replace(",","."));

  let bmi =( weight / (height * height)).toFixed(2);
	/*
	if( hoch.value && gewicht.value)
	{
		document.getElementById("result").innerText = "" + bmi.replace(".",",");
	}
	*/
	if( istNumber(hoch.value) && istNumber(gewicht.value))
	{
		document.getElementById("result").innerText = "" + bmi.replace(".",",");
	}else {
		document.getElementById("result").innerText = " XXX ";
	}
  event.preventDefault(); 
}

document.getElementById("bmi_rechner").addEventListener("click", rechner);

hoch.addEventListener("change", rechner);
gewicht.addEventListener("change", rechner);

hoch.addEventListener("keyup", rechner);
gewicht.addEventListener("keyup", rechner);
/*
keyup ruft einen Event Handler auf, wenn der Benutzer eine Taste auf der Tastatur losgelassen hat. 
*/