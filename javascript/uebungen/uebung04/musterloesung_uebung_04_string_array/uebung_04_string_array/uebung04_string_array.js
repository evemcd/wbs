"use strict";

//String erstellen
let liste = "Tom, Jerry, Max, Moritz, Anna, Angela";

//Max musste seine Teilnahme absagen
//Entferne Max aus der Liste

//Zerlege dazu den String in ein Array
//Finde heraus, an welcher Stelle Max steht
//Entferne diesen Teilnehmer aus der Liste
//Und setze die Teilnehmer wieder zurück in ein String zusammen

let tnListe = liste.split(", ");
let tnPos = tnListe.indexOf("Max");

console.log(tnPos);

tnListe.splice(tnPos,1);

console.log(tnListe);

let listeNeu = tnListe.join(", ");
console.log(listeNeu);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Die neue Liste soll ausgedruckt werden

//Zerlege dazu die Liste in Array
//Setze wieder zu einem String zusammen
//Folgender Ausdruck soll ausgegeben werden
/*
	-> Tom
	-> Jerry
	-> Moritz
	-> Anna
	-> Angela
*/

console.log("\n ->"+tnListe.join("\n ->"));

console.log("\n -> "+tnListe.join("\n -> ").toUpperCase());






