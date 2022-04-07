"use strict";

let kurs1 = [
    'Max',
    'Anna',
    'Bernd',
    'Hans',
]

let kurs2 = [
    'Angela',
    'Helene',
    'Thomas',
    'Anke',
    'Birgit',
]

//Tom möchte einen Kurs belegen aber nur dort, wo sein Freund Hans auch teilnimmt.

//Finde heraus, welchen Kurs Hans belegt hat
//Löse die Aufgabe mit if() und indexOf()
//Beide Kurse sollen angesprochen werden
//if() else if() else
if(kurs1.indexOf("Hans") !== -1) {
	console.log("Hans ist im Kurs1");
}
else if(kurs2.indexOf("Hans") !== -1)
{
	console.log("Hans ist im Kurs2");
}else
{
	console.log("Hans nicht angemeldet");
}

//wenn Hans gefunden wurde, füge Tom ans Ende der Liste hinzu.
//Teilnehmer des Kurses ausgeben
kurs1.push("Tom");
console.log(kurs1);

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Helene hat gerade angerufen und muss ihren Kurs absagen.

//Finde heraus im welchem Kurs Helene eingeschrieben war.
//Ermittle ihre Position in der Liste und entferne sie aus der Liste
//Gebe eine Meldung aus, "Helene wurde aus dem Kurs entfernt"
//Liste der Kursteilnehmer ausgeben

if(kurs1.indexOf("Helene") !== -1) {
	console.log("Helene ist im Kurs1 eingeschrieben");
}
else if(kurs2.indexOf("Helene") !== -1)
{
	console.log("Helene ist im Kurs2 eingeschrieben");
}else
{
	console.log("Helene nicht angemeldet");
}

let hIndex = kurs2.indexOf("Helene");
console.log(kurs2[hIndex]," wurde aus dem Kurs entfernt");
kurs2.splice(hIndex,1);
console.log(kurs2);

//Beide Kurse sollen sortiert werden
kurs1.sort();
kurs2.sort();

console.log("*".repeat(50));
console.log("Kurs1: \n",kurs1);
console.log("Kurs2: \n",kurs2);

//Ganz spontan möchten David und Andre am Kurs teilnehmen.
//Benutze .splice()-Funktion
console.log("*".repeat(50));
kurs2.splice(0,0,"David", "Andre");

//Wie viele Teilnehmer haben die Kurse "kurs1" bzw. "kurs2"
//Alle Kurse ausgeben
console.log("Kurs1 hat ", kurs1.length, " Teilnehmer");
console.log(kurs1);
console.log("Kurs2 hat ", kurs2.length, " Teilnehmer");
console.log(kurs2);





