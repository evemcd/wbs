"use strict";

//Es gibt 2 Sprachkurse mit paar Teilnehmern

let sprachKurs1 = ["Thomas", "Inna"];

let sprachKurs2 = ["Hans", "Jo", "Angela"];

//Prüfe ob Angela in irgendeinem Kurs eingeschrieben ist
//Benutze die if-Abfrage, die ein && oder ein || hat.
//Meldung: Angela ist eingeschrieben oder Angela ist nicht eingeschrieben

let student = "Angela";
if(sprachKurs1.indexOf(student) !== -1 || sprachKurs2.indexOf(student) !== -1) {
	console.log(student, " ist eingeschrieben");
}else
{
	console.log(student + " ist nicht eingeschrieben");
}

//eine andere Lösung wäre
if(sprachKurs1.indexOf(student) === -1 && sprachKurs2.indexOf(student) === -1) {
	console.log(student, " ist nicht eingeschrieben");
}else
{
	console.log(student + " ist eingeschrieben");
}

console.log("*".repeat(50));

//Ein neuer Teilnehemr Moritz möchte einen Kurs besuchen.

//Platziere den Teilnehmer in den Sprachkurs, der weniger Teilnehmer hat.
//Verwende eine if-Abfrage, um ihn in den Kurs zu platzieren
//der weniger Teilnehmer hat

let newStudent = "Moritz";

if(sprachKurs1.length < sprachKurs2.length) {
	sprachKurs1.push(newStudent);
}else
{
	sprachKurs2.push(newStudent);
}

console.log(sprachKurs1);

console.log(sprachKurs2);

console.log("*".repeat(50));

//Jo sagt seine Teilnahme ab

//Entferne ihn aus dem Kurs
//Benutze die if-Abfrage
//Abfrage gilt universal
/*
let absage = "Jo";

if(sprachKurs1.indexOf(absage) !== -1) {
	let pos = sprachKurs1.indexOf(absage);
	sprachKurs1.splice(pos, 1);
}

if(sprachKurs2.indexOf(absage) !== -1) {
	let pos = sprachKurs2.indexOf(absage);
	sprachKurs2.splice(pos, 1);
}
*/

let absage = "Jo";
let posAbsage = sprachKurs1.indexOf(absage);

if(posAbsage !== -1) {
	sprachKurs1.splice(posAbsage, 1);
}

if(posAbsage !== -1) {
	sprachKurs2.splice(posAbsage, 1);
}
console.log(sprachKurs1);

console.log(sprachKurs2);
console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++
//wenn Anzahl der Teilnehmer 1-3 dann kostet der Kurs 30€
//wenn Anzahl der Teilnehmer >= 4 dann kostet der Kurs 10€

let tnKurs1 = sprachKurs1.length;
let tnKurs2 = sprachKurs2.length;

if(tnKurs1 <= 3 ) {
	console.log("kurs1 kostet z.Zeit 30€ pro Teilnehmer");
}
else if(tnKurs1 >= 4 ) {
	console.log("kurs1 kostet z.Zeit 10€ pro Teilnehmer");
}
if(tnKurs2 <= 3 ) {
	console.log("kurs2 kostet z.Zeit 30€ pro Teilnehmer");
}
else if(tnKurs2 >= 4 ) {
	console.log("kurs2 kostet z.Zeit 10€ pro Teilnehmer");
}




