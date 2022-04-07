"use strict";

//Funktionen
console.log("+++++ Funktionen +++++");

function sagHallo() {
    console.log("JavaScript ist einfach");
    console.log("PHP ist noch einfacher");
}

//Funktion aufrufen
sagHallo();                                                             //kann so oft aufgerufen werden, wie ich möchte

console.log("+".repeat(10));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function gruss1() {
    console.log("Hallo Grace");
}

function gruss2() {
    console.log("Hallo Eve");
}

function gruss3() {
    console.log("Hallo Meryem");
}

gruss1();
gruss2();
gruss3();

console.log("+".repeat(10));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Funktion mit Parameter
function gruss(name) {
    console.log("Moin " + name);
}

gruss("Angela");
gruss("Anna");
gruss("Lena");

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
console.log("+++++ Funktionen mit Parametern +++++");

//Funktionen mit mehreren Parametern
function hallo(name,sprache) {
    if(sprache === "en") {
        console.log("Hi " + name);
    }else if(sprache === "es") {
        console.log("Hola " + name);
    }else if(sprache === "de") {
        console.log("Hallo " + name);
    }else if(sprache === "ar") {
        console.log("Sabah al Khair " + name);
    }
}

hallo("Angela","de");
hallo("Grace","es");
hallo("Eve","en");
hallo("Meryem","ar");

console.log("+".repeat(10));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
console.log("+++++ Funktionen mit Parametern (defaultWert) +++++");

function hallo2(name, sprache = "de") {
    if(sprache === "en") {
        console.log("Hi " + name);
    }else if(sprache === "es") {
        console.log("Hola " + name);
    }else if(sprache === "ar") {
        console.log("Sabah al Khair " + name);
    }else {
        console.log("Hallo " + name);
    }
}

hallo2("Hans");
hallo2("Carmen","es");
hallo2("Paul","en");
hallo2("Meryem","ar");

console.log("+".repeat(10));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let message = "Test";

function hallo3() {
    let message3 = "Test3";
    console.log(message3);
}

hallo3();                                                                           //hier wird die Funktion aufgerufen, in der lokal die Variable geschrieben wurde
console.log(message);                                                               //hier wird die globale Variable aufgerufen
// console.log(message3);                                                           //kann außerhalb der Funktion nicht aufgerufen werden

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
let teilnehmer = ["Anna"];

function addTeilnehmer(name) {
    teilnehmer.push(name);
}

console.log(teilnehmer);
addTeilnehmer("Angela");
console.log(teilnehmer);
addTeilnehmer("Jerry");
console.log(teilnehmer);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let werte = [12, 20, 35];

function summe() {
    // console.log(eval(werte.join("+")));
    let erg = 0;
    for(let element of werte) {                                                         //Schleife liest alle Werte aus dem array
        erg += element;                                                                 //erg = erg + element
    }
    console.log(erg);
}

summe();

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
let zahl1 = 2;
let zahl2 = 5;
let erg1 = zahl1 + zahl2;
console.log(erg1);
console.log("Gesamtsumme von " + zahl1 + " + " + zahl2 + " ist: " + erg1);

//-> kurz geschrieben
console.log(`Gesamtsumme von ${zahl1} + ${zahl2} ist: ${erg1}`);                        //template string, `statischer Inhalt`, ${dynamischer Inhalt}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
let studentList = ["Anna","Tom","Angela","Helene","Jerry"];
console.log(studentList);

for(let element of studentList) {
    console.log("-> " + element);                                                       //zeigt alle Elemente einzeln an
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function ausgabe() {
    console.log("Hallo Welt");
}

ausgabe();

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function ausgabe2() {
    return "Guten Tag";                                                                     //wenn die Funktion aufgerufen wird, schreibe:
}

console.log(ausgabe2());                                                                    //gibt den Inhalt aus

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function suche(wo, wert) {
    for(let i in wo) {
        if(wo[i] === wert) {
            return i;
        }
    }
    return -1;
}

let daten = ["Max","Moritz","Tom","Klaus","Angela","Anna","Helene"];
console.log(suche(daten, "Tom"));                                                           //zeigt die Position an (2)

/*
function gruss() {
    console.log("Hallo");
    return;
    console.log("Wie gehts?");                                                              //unreachable after return
}

gruss();
*/

function suche2(wo, wert) {
    for(let i of wo) {
        if(i === wert) {
            return i + ", wurde gefunden";
        }
    }
    return wert + ", leider nicht gefunden";
}
console.log(suche2(daten, "Tom"));
console.log(suche2(daten, "Helene"));
console.log(suche2(daten, "Marx"));

const sayHello1 = function() {                                                              //anonyme function
    console.log("Guten Tag sagt sayHello1");
}
sayHello1();

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//andere Art eine Funktion zu schreiben
const sayHello2 = () => {
    console.log("Guten Tag sagt sayHello2");
}

sayHello2();

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
Objekte
{Schlüssel : Wert}
*/

const schueler = {
    "name" : "Max Merkel",
    "alter" : 20,
    "sprache" : "Spanisch",
}

console.log(schueler);
console.log(schueler.name);                                                                     //auf die Eigenschaften zugreifen
console.log(schueler.alter);
console.log(schueler.sprache);
console.log(schueler.name + " spricht nur " + schueler.sprache);
console.log(schueler["name"] + " spricht nur " + schueler["sprache"]);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//JS im Browser
//Meldungsfenster
// alert("Wir sind im Auftrag des Herrn unterwegs");

//Eingabefenster
// prompt("Bitte Namen eingeben", "Nur Buchstaben");                                               //Parameter 1 ist Text über dem Eingabefeld, optionaler Parameter 2 ist Platzhalter
const eingabe = prompt("Bitte Namen eingeben");
if(eingabe === null) {
    console.log("Hallo Namenloser");
}else {
    console.log("Hallo " + eingabe);
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.getElementById("ausgabe1").innerHTML = "Hallo <strong>" + eingabe + "</strong>";           //sucht ausgabe1 in HTML, innerHTML schreibt etwas und formatiert wie html
document.getElementById("ausgabe2").innerText = "Hallo <strong>" + eingabe + "</strong>";           //wie oben aber schreiibt klartext, wird also nicht formatiert


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Zufallszahlen erzeugen
let wert1 = Math.random();                                                                          //erzeugt eine beliebige Zahl zwischen 0 und 1
console.log(wert1);

// 0.234468486 * 10
// 0.984684684 * 10 etc
console.log(Math.random() * 10);                                                                    //eine beliebige Zahl zwischen 0 und 10

console.log(Math.ceil(Math.random() * 10));                                                         //eine aufgerundete beliebige Zahl zwischen 1 und 10
console.log(Math.floor(Math.random() * 10));                                                        //eine abgerundete beliebige Zahl zwischen 0 und 9
console.log(Math.round(Math.random() * 10));                                                        //eine mathematisch korrekt gerundete Zahl zwischen 0 und 10

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let liste2 = ["Max","Moritz","Anna","Tom","Jerry"];
let zufall = Math.floor(Math.random() * liste2.length);
document.getElementById("ausgabe3").innerHTML = liste2[zufall];