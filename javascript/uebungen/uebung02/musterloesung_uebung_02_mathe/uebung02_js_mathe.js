"use strict";

//Geld-Ausgabe

//der ursprüngliche Betrag ist
let betragStr  = "16,37";

console.log("Datentyp von \"" +betragStr+ "\"" + " ist: " + typeof betragStr);
//Wandle den Betrag in eine Zahl um.
//parseFloat() ?
let betrag1 = parseFloat(betragStr,10);

console.log("Datentyp von \"" +betrag1+ "\"" + " ist: " + typeof betrag1);

//Wandle den Betrag in die englische Schreibweise "16.37" um.
//replace() ?
let betrag2 = parseFloat(betragStr.replace(",","."));

console.log("Format in Englisch ist \"" +betrag2+ "\"");


//Rechne den Betrag in cent aus
let betragCent = parseFloat(betragStr.replace(",",".")) * 100;
console.log("Betrag in cent: " + betragCent);

//mit wie vielen 2€ Münzen kann dieser Betrag bezahlt werden?
let betragZweiEuro = betragCent / 200;
console.log("Anzahl: " + Math.floor(betragZweiEuro) + " x 2€ Münzen");

//mit wie vielen 1€ Münzen kann dieser Betrag bezahlt werden?
let betragEinEuro = betragCent / 100;
console.log("Anzahl: " + Math.floor(betragEinEuro) + " x 1€ Münzen");

//mit wie vielen 50cent Münzen kann dieser Betrag bezahlt werden?
let betrag50Cent = betragCent / 50;
console.log("Anzahl: " + Math.floor(betrag50Cent) + " x 50cent Münzen");

//mit wie vielen 20cent Münzen kann dieser Betrag bezahlt werden?
let betrag20Cent = betragCent / 20;
console.log("Anzahl: " + Math.floor(betrag20Cent) + " x 20cent Münzen");

//mit wie vielen 10cent Münzen kann dieser Betrag bezahlt werden?
let betrag10Cent = betragCent / 10;
console.log("Anzahl: " + Math.floor(betrag10Cent) + " x 10cent Münzen");

//mit wie vielen 5cent Münzen kann dieser Betrag bezahlt werden?
let betrag5Cent = betragCent / 5;
console.log("Anzahl: " + Math.floor(betrag5Cent) + " x 5cent Münzen");

//mit wie vielen 2cent Münzen kann dieser Betrag bezahlt werden?
let betrag2Cent = betragCent / 2;
console.log("Anzahl: " + Math.floor(betrag2Cent) + " x 2cent Münzen");

//mit wie vielen 10cent Münzen kann dieser Betrag bezahlt werden?
let betrag1Cent = betragCent / 1;
console.log("Anzahl: " + Math.floor(betrag1Cent) + " x 1cent Münzen");
//++++++++++++++++++++++++++++++++++++++++++++
//Trinkgeld immer 10% oder 20%
//Rechnung 17:00 -> Der Gesamtbetrag ist: 20.00
//Rechnung 16:50 -> Der Gesamtbetrag ist: 20.00
//Rechnung 10:00 -> Der Gesamtbetrag ist: 12.50

let bill1 = 17.00;

//die Formel ist unwichtig:-)
console.log("Rechnung: ", bill1, "€\n10% Trinkgeld: " ,Math.ceil (bill1 * 10 / 100) , "€");
console.log("Rechnung: ", bill1 , "€\n20% Trinkgeld: " , Math.ceil (bill1 * 20 / 100) , "€");

let bill2 = 16.80;

console.log("Rechnung: ", bill2 , "€\n10% Trinkgeld: " ,Math.ceil (bill2 * 10 / 100) , "€");
console.log("Rechnung: ", bill2 , "€\n20% Trinkgeld: " , Math.ceil (bill2 * 20 / 100) , "€");

let bill3 = 10.00;

console.log("Rechnung: ", bill3 , "€\n10% Trinkgeld: " ,Math.ceil (bill3 * 10 / 100) , "€");
console.log("Rechnung: ", bill3 , "€\n20% Trinkgeld: " , Math.ceil (bill3 * 20 / 100) , "€");
