"use strict";

let kurs = ['Uhland','BUSCH','Geibel','rilke','KÄSTNER'];

document.getElementById('ausgabe1').innerHTML = 'Anzahl: ' + kurs.length + 
                                                '<br /> ' + kurs.join(' <<++>> '); 

//-----------------------------------------------------------
let info;
for(let element of kurs) {

//BUSCH = eigener Name in Prüfung. Wenn BUSCH vorkommt, dann wird die CSS Klassen daten & myInfo aktiviert, sonst nur daten
  if(element === 'BUSCH') {
    info = 'daten myInfo'
  }else {
    info = 'daten';
  }
  let kleinZeichen = element.toLowerCase();
  let grossZeichen = kleinZeichen.charAt(0).toUpperCase();

  /*
  0 1 2 3 4 5
  U h l a n d
  U + hland = Uhland
  grossZeichen  + kleinZeichen.substr(1)
  U             +   hland = Uhland
  */
  document.getElementById('ausgabe2').innerHTML += 
                      `<p class="${info}">${grossZeichen + kleinZeichen.substr(1)}</p>`;
}

//----------------------------------------------------------
let teilnehmer = [
  {anrede: 'm', name: 'Carsten', ort: 'Dubai',  geb: '1992.01.01'},
  {anrede: 'w', name: 'Anna', ort: 'Paris',  geb: '1992.01.01'},
  {anrede: 'm', name: 'Tom', ort: 'Bangkok',  geb: '1992.01.01'},
  {anrede: 'w', name: 'Angela', ort: 'Sylt',  geb: '1992.01.01'}
];

for(let element of teilnehmer) {

  if(element['anrede'] === 'w') {
    element['geb'] = '*****';
    element['anrede'] = 'Frau';
  }else {
    element['anrede'] = 'Herr';
  }

  document.getElementById('ausgabe3').innerHTML += 
                        "<ul>"+
                          "<li class="+element['anrede']+">" + element['anrede'] + " "+ element['name'] + "</li>"+
                          "<li>" + element['ort'] + "</li>"+
                          "<li>" + element['geb'] + "</li>"+
                        "</ul>";
}
//----------------------------------------------------------
//##########################################################
//DOM
//Elemente finden
//Elemente über Klassen ansprechen
let cardHeaders = document.getElementsByClassName("card-header");
//console.log(cardHeaders);
//ausgegeben wird ein HTMLCollection

for(let wert of cardHeaders) {
  //console.log(wert);

  //die Listen müssen einzeln bearbeitet werden
  wert.addEventListener("click", () => {
    //alert("carsHeader wurde angeklickt");
  });
}

//Elemente über den Namen ansprechen
//let absatz = document.getElementsByTagName("p");
//console.log("Absatz: " + absatz);

//Elemente finden++++++++++++++++++++++++++++++++++++++++++++++ 
/*
	Die Methode querySelector() von Document gibt das erste Element innerhalb eines Dokuments zurück, welches dem angegebenen Selektor bzw. Selektoren entspricht. 
  Wurden keine Übereinstimmungen gefunden wird null zurückgegeben.
  document.querySelector("#idName");  anstatt document.getElementById('idName')
  document.querySelector(".className");  anstatt document.getElementByClassName('className')
  document.querySelector("htmlTag");  anstatt document.getElementByTagName('htmlTag')

*/

//das erste Elemente vom Typ h1
//let heading = document.querySelector("h1");
//console.log(heading);

//nur h1 innerhalb von einem Bereich
//hier holt er nur ein Element
//let heading = document.querySelector(".card-header h1");
//console.log(heading);

/*
Die Methode querySelectorAll() von Document gibt eine statische (nicht live) NodeList (en-US) zurück, die eine Liste der Elemente des Dokuments darstellt, 
die mit der angegebenen Selektorgruppe übereinstimmen. (querySelectorAll() spricht nur die Elemente an, die über der Methode stehen, nichts nachträglich eingefügtes darunter)
*/

//hol mal alle Elemente
//let alle = document.querySelectorAll(".card-header");
//console.log(alle);


//Attribute finden++++++++++++++++++++++++++++++++++++++++++++++ (attributes of input can be name, value, id, placeholder etc)
let firstCardHeader = document.getElementsByClassName("card-header")[0];

//console.log(firstCardHeader);
//console.log(firstCardHeader.attributes);            (class and data-extra)

//auf die Eigenschaften zuzugreifen (mit index 0, 1 usw.)
//console.log(firstCardHeader.attributes[0]);             (class)
//console.log(firstCardHeader.attributes[1]);             (data-extra)

//console.log(firstCardHeader.attributes["class"]);       
//console.log(firstCardHeader.attributes.class);

//console.log(firstCardHeader.attributes["data-extra"]);
//console.log(firstCardHeader.attributes.data-extra);

//console.log(firstCardHeader.attributes["data-extra"].value);        (string value of data-extra)

//Hilfe-Hinweis entwickeln
let helpElements = document.querySelectorAll("[data-help]");
console.log(helpElements);

for(let wert of helpElements) {
  /* wenn ein Attribut data-help dann überspringe
  if(!wert.attributes['data-help']) {
            continue
    } 
  */
  wert.addEventListener("click", (event) => {
    alert(wert.attributes["data-help"].value);

    //sonst sprint immer nach oben weil href="#"
    event.preventDefault();
  });
}


//Klassen hinzufügen und entfernen

let cardElements = document.getElementsByClassName("card");
/*
for(let wert of cardElements) {
  console.log(wert.attributes["class"].value);                (this logged the string "card" to the console 3 times)
}

//dem card ein class hinzufügen
//wenn man die Klasse wieder entfernen möchte, nicht so angenehm so zu arbeiten
for(let wert of cardElements) {
  wert.attributes["class"].value = "card bg-success";
  console.log(wert.attributes["class"].value);                (this logged the string "card bg-success" to the console 3 times)
}

//classList hat sehr viele Methoden
for(let wert of cardElements) {
  //console.log(wert.classList);                              (an array containing an array of the classes in the element)

  //console.log(wert.classList.contains("card"));             (returns a boolean value)

  //add() Klasse hinzufügen (beim 2. Aufruf fügt er nicht mehr hinzu)
  //wenn die Klasse schon da ist                              (adds once and then it's done)
  //console.log(wert.classList.add("bg-success"));            (the common way of doing it)

  //Klasse entfernen (alles andere wie oben)
  //console.log(wert.classList.remove('bg-success'))
  //console.log(wert.classList.remove('bg-success'))
}
*/
for(let wert of cardElements) {
    wert.addEventListener("click", () => {
      //wert.classList.add("bg-success");
      //wert.classList.remove("bg-success");
      //Klasse an und abschalten (toggle)
      wert.classList.toggle("bg-success");
    })
}

/*
getElementsByClassName und getElementsByTagName geben eine Sammlung (HTMLCollection) aller Elemente einer CSS-Klasse bzw. aller Elemente mit dem aufgeführten Namen zurück.

getElementsByTagName gehört genauso wie getElementsByName zu den ältesten Methoden des Document Object Modells. getElementsByClassName kam erst spät dazu.


HTMLCollection

Diese Methoden geben eine HTMLCollection zurück, eine Liste oder Sammlung von Elementen. Die einzelnen Elemente können über einen Index angesprochen werden, length gibt die Zahl der Elemente zurück und der Index beginnt mit 0.

Eine HTMLCollection sieht aus wie ein Array, hat einen Index wie ein Array, ist aber kein Array, so dass nicht alle Array-Methoden benutzt werden können.

classList fügt einem Element CSS-Klassen mit add, remove, toggle so einfach zu wie mit jQuery hinzu und entfernt sie ebenso einfach wieder. classList.contains testet, ob ein Element eine Klasse enthält.

Die defaultPrevented  
gibt einen booleschen Wert zurück, der angibt, ob der Aufruf Event.preventDefault()das Ereignis abgebrochen hat oder nicht.

preventDefault 
übernimmt im DOM die Aufgabe des Aufrufs return false;, um die ursprüngliche Aktion des Browsers bei einem HTML-Element außer Kraft zu setzen.

gute Erklärung:
https://www.mediaevent.de/javascript/getelements.html
*/