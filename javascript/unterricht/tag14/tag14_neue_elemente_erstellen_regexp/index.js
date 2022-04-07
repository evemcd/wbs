"use strict";

//++++++++++++++++++++++++++++++++++++++++++++++++++++
let newStudent = document.getElementById("newStudent");
let liste = document.getElementById("liste");
let form1 = document.getElementById("form1");

form1.addEventListener("submit", (event) => {
  event.preventDefault();

  //wenn kein Inhalt im Feld dann abbruch
  if(newStudent.value === "") {
    //return verursacht ein abbruch...geht dann nicht weiter
    //kann man nur in einer Funktion so verwenden
    return;
  }

  //++++++++++++
  let farben = [
          "list-group-item-info",
          "list-group-item-danger",
          "list-group-item-light",
          "list-group-item-success",
        ];
  let zufall = Math.floor(Math.random() * farben.length);
  console.log(zufall);
  //++++++++++++
  let liElement = document.createElement("li")
  liElement.innerText = newStudent.value;
  //liElement.classList.add("list-group-item", "list-group-item-primary");
  liElement.classList.add("list-group-item", farben[zufall]);
  //liste.appendChild(liElement);
  liste.prepend(liElement);

  //das Feld leeren
  newStudent.value = "";
});

//#################################################################
//das 2. Formular
let strongElement = document.createElement("strong");
let divElement = document.createElement("div");
let anmelden = document.getElementById("anmelden");
let ausgabe = document.getElementById("ausgabe");
//++++++++++++++++++++++++++
//Funktion für neues Element erstellen
//newElement("Name ist ein Pflichtfeld", name)
let newElement = (msg, element) => {
  strongElement.innerText = msg;
  strongElement.classList.add("text-danger");
  divElement.appendChild(strongElement);
  element.after(divElement);
}

//++++++++++++++++++++++++++
anmelden.addEventListener("click", (event) => {
  event.preventDefault();

  let name = document.getElementById("nachname");
  let vorname = document.getElementById("vorname");
  let geb = document.getElementById("geb");
	let tel = document.getElementById("tel");
	let heirat = document.getElementById("heirat");
  let beruf = document.getElementById("beruf");
  //+++++++++++++++++++++++++
  let nameMuster = /^[a-z\.\-\_äöüß]{2,}$/i;
  /*
    TT.MM.JJJJ (01.11.1995)
    01 oder 12 oder 22 oder 31 (Tag)
  */
  let gebMuster = /^(0[1-9]{1}|[1-2]{1}[0-9]{1}|3[0-1]{1})\.(0[1-9]{1}|1[0-2]{1})\.((19|20)[0-9]{2})$/;
	
	/*
	seit ES2018 ist zusätzlich die Angabe benannter Gruppen möglich, wobei der Name über ein vorangestelltes Fragezeichen innerhalb zweier spitzer Klammern definiert wird.
	Dann über die Namen der jeweiligen Gruppe zugreifen
	*/
	let heiratMuster = /^(?<tag>\d{2})-(?<monat>\d{2})-(?<jahr>\d{4})$/;
	
	let telMuster = /^(\+|0{2})\d{2}\s\d{2}\s\d{5,10}$/;
  //+++++++++++++++++++++++++
  //checkBox auswerten
  let cb = document.querySelectorAll("input[name='cb']");
  let cbWert = "";
  for(let wert of cb) {
      if(wert.checked === true) {
        cbWert += wert.value + " ";
      }
  }
  //+++++++++++++++++++++++++
  //davor
  //<input type="text" id="nachname" class="form-control" placeholder="Name eingeben" />
  //danach
  if(!nameMuster.test(name.value)) {
    //alert("Name");
    //strongElement.innerText = "Name ist ein Pflichtfeld!";
    //strongElement.classList.add("text-danger");
    //name.after(strongElement);
    //name.before(strongElement);
    newElement("Name ist ein Pflichtfeld!", name);
		name.focus();
		ausgabe.innerHTML = "";
  }
  else if(!nameMuster.test(vorname.value)) {
    newElement("Vorname ist ein Pflichtfeld!", vorname);
		vorname.focus();
		ausgabe.innerHTML = "";
  }
  else if(!gebMuster.test(geb.value)) {
    newElement("Muster für Geburtstag: TT.MM.JJJJ", geb);
		geb.focus();
		ausgabe.innerHTML = "";
  }
	else if(!telMuster.test(tel.value)) {
    newElement("Muster für Telefon: 49 40 123456", tel);
		tel.focus();
		ausgabe.innerHTML = "";
  }
	else if(!heiratMuster.test(heirat.value)) {
    newElement("Muster für Heirat: TT-MM-JJJJ", heirat);
		heirat.focus();
		ausgabe.innerHTML = "";
  }
  else if(beruf.value === "Bitte auswählen") {
    newElement("Haben Sie einen Beruf?", beruf);
		beruf.focus();
  } 
  else if(beruf.options[1].selected && cb[1].checked) {
    newElement("Ein Soldat sollte nicht tanzen :-) ", beruf);
		ausgabe.innerHTML = "";
  }
  else {
    //wenn alles ok dann die Daten anzeigen
    divElement.remove();

		/*
		die Methode exec() vom RegExp sucht nach Vorkommen für ein entsprechendes Zeichenmuster und gibt diese als Array zurück 
		*/
		const gebDaten = gebMuster.exec(geb.value);
		const marriage = heiratMuster.exec(heirat.value);
		
    ausgabe.innerHTML = "<p>Vielen Dank</p>"+
          name.value + ", " + vorname.value+
          "<p>Geboren am: " + geb.value+"</p>"+
          "<p>Beruf: " + beruf.value+"</p>"+
          "<p>Hobbies: " + cbWert+"</p>"+
					"<p>Dein GeburtsTag: " + gebDaten[1] + "</p>"+
					"<p>Dein GeburtsMonat: " + gebDaten[2] + "</p>"+
					"<p>Dein GeburtsJahr: " + gebDaten[3] + "</p>"+
					"<p>Deine TelefonNr: " + tel.value + "</p>"+
					"<p>Deine TelefonNr: " + textHide(tel.value) + "</p>"+
					"<p>Heiratsdatum: " + heirat.value + "</p>"+
					"<p>Dein Heiratsjahr: " + marriage.groups.jahr + "</p>"+
					"<p>Dein HeiratsMonat: " + marriage.groups.monat + "</p>"+
					"<p>Dein HeiratsTag: " + marriage.groups.tag + "</p>";
  }


});

let textHide = (wert) => {
	return wert.substring(0,9) + 'XXXXXX';
}

/*
.appendChild() => fügt einen Kind-Knoten am Ende der Liste aller Kinder des angegebenen Eltern-Knotens an (to append = anhängen).

.prepend() => fügt einen Kind-Knoten am Anfang der Liste aller Kinder des angegebenen Eltern-Knotens an.
<ul>
  <li>prepend()</li> das erste Element
  <li>Wert</li>
  <li>Wert</li>
  <li>appendChild()</li> das letzte Element
</ul>
---------------------------------
.add() => neues Element mit dem eingegebenen Wert einfügen
.remove() => Element entfernen
---------------------------------
before() => fügt Elemente oder Texte vor einem Element ein
after() => fügt Elemente oder Texte nach einem Element. 

<strong>before</strong>
<input />
<strong>after</strong>
*/