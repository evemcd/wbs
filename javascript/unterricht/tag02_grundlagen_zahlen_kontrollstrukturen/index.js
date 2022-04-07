"use strict";

var str = "Hallo JS";
str = "Hallo PHP";                      //überschreibit die Variable
console.log(str);

console.log("-".repeat(40));

let str2 = "Hallo Welt";
str2 = "Hallo HTML";
console.log(str2);

var a = 2;
a = 55;
//sehr viele Zeilen 
var a = 6;
console.log(a);

/*
let b = 2;
b = 55;
//sehr viele Zeilen 
let b = 6;
console.log(b);                         //gibt Fehler aus weil mit let kann eine Variable nur einmal definiert werden
*/

/**
 * Das ist eine wichtige Begrüßung      // nur für vsc, bindet sich an die nächste Variable und wird beim hover über den Variablen-Namen (egal wo im Dokument) angezeigt
 */
const message = "Guten Morgen";
// message = "Guten Tag";               // der Wert in const kann nicht überschrieben werden

console.log(message);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//mathematische Operationen

//Addition
console.log(5 + 6);
console.log("5 + 6: " + 5 + 6);
console.log("5 + 6: " , 5 + 6);
console.log("5 + 6: " + (5 + 6));

//Subtraktion
console.log("6 - 5: ", 6 - 5);

//Multiplikation
console.log("6 x 5: ", 6 * 5);

//Division
console.log("6 / 3: ", 6 / 3);

//Modulo (Restwert)
console.log("11 % 6 :", 11 % 6);

//Potenz
console.log("2 hoch 10: ", 2 ** 10);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Runden
console.log("Runden, Math.round()", Math.round(5.4));                    //rundet
console.log("Abrunden, Math.floor()", Math.round(5.5));                  //rundet ab
console.log("Aufrunden, Math.ceil()", Math.ceil(5.4));                   //rundet auf

//Maximum
console.log("Math.max(1, 2, 5): ", Math.max(1, 2, 5));                  //zeigt die größte Zahl der Liste

//Minimum
console.log("Math.min(1, 2, 5): ", Math.min(1, 2, 5));                  //zeigt die kleinste Zahl der Liste

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let zahl = "3.141";
console.log(zahl * zahl);                                               // funktioniert nur mit Zahlen, ist ein String aber macht eine Datentypumwandlung
console.log(zahl + zahl);                                               // macht keine Datentypumwandlung, verkettet nur

//String in eine Ganzzahl umwandeln
//parseInt()
console.log(parseInt(zahl) + parseInt(zahl));                           //gibt 6 aus (3+3=6). Wenn zahl am Anfang Buchstaben hat, kommt NaN (not a number) raus
console.log(typeof zahl);                                               //number
console.log(typeof parseFloat(zahl));

//let erg = 20.35 % 6
let erg = 20.35 % 6 - 2.35;
console.log(erg);

//Lösung: Kommazahlen vermeiden
//let erg2 = 2035 % 600
let erg2 = 2035 % 600 - 235;
console.log(erg2);

//Zahl zu String
let zahl3 = 3.141
console.log("" + zahl3);
console.log(typeof zahl3);
console.log(typeof ("" + zahl3));
console.log(zahl3.toFixed(4));                                          //4 Dezimalstellen

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let zeichen1 = "3" == 3;                                                //automatische Datentymumwandlung
console.log(zeichen1);                                                  //true

let zeichen2 = "3" === 3;
console.log(zeichen2);                                                  //false

//Vergleiche
let number1 = 6;
let number2 = 8;
console.log("6 === 8", number1 === number2);                            //false
console.log("6 !== 8", number1 !== number2);                            //true
console.log("6 < 8", number1 < number2);                                //true
console.log("6 <= 8", number1 <= number2);                              //true
console.log("6 > 8", number1 > number2);                                //false
console.log("6 >= 8", number1 >= number2);                              //false

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let zahl1 = 28;
let zahl2 = 22;
if(zahl1 <= zahl2) {
    console.log("Zahl1 ist kleiner als Zahl2");
}else{
    console.log("Zahl1 ist größer als Zahl2");
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//lange Version if-Schleife
let tnZahl = 9;
if(tnZahl < 5){
    console.log("Es sind noch sehr viele Plätze frei");
}else{
    if(tnZahl < 8){
    console.log("Es sind noch wenige Plätze frei");
    }else{
        if(tnZahl < 10){
            console.log("Es sind kaum Plätze frei");
        }else{
            console.log("Wir sind ausgebucht");
        }
    }
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//kürzere Version if-Schleife
if(tnZahl < 5){
    console.log("Es sind noch sehr viele Plätze frei");
}else if(tnZahl < 8){
    console.log("Es sind noch wenige Plätze frei");
}else if(tnZahl < 10){
    console.log("Es sind kaum Plätze frei");
}else{
    console.log("Wir sind ausgebucht");
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//for-Schleife wenn die Anzahl der Durchläufe bekannt ist
/*
for(Initialisierung;Bedingung;Aktualisierung){
    Anweisungen;
}
*/

for(let counter = 1; counter <= 5; counter++) {
    console.log(counter);
    console.log("Zeile ", counter);
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//arrays
let liste = ["Andi","Paul","Hugo","Angela","Helene","Boss","Mann"];
console.log(liste);

for(let tn = 0; tn < liste.length; tn++) {
    console.log("Zeile ", tn+1, ": ", liste[tn]);
}

//oder

for(let tn = 0; tn <= liste.length-1; tn++) {
    console.log("Zeile ", tn+1, ": ", liste[tn]);
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//while-Schleife wenn die Anzahl der Durchläufe nicht bekannt ist
/*
while(bedingung) {
    Anweisung;
}
*/

let counter1 = 0;

while(counter1 < 5) {                                           //Bedingung sonst endlos, zählt bis 5 weil der erste Schritt ist 0
    counter1++;
    console.log("Counter mit while: ", counter1);
}