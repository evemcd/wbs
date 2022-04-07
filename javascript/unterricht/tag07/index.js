"use strict";

function vergleich1(a, b) {
    if(a > b) {
        return 1;
    }else if(a < b) {
        return -1;
    } else {
        return 0
    }
}

let liste1 = [5,1,-1,-3,0,2,12,10];
liste1.sort(vergleich1);                                                //liste1.sort(); sortiert nur nach erster Stelle, mit der function sortiert er richtig
document.getElementById('box1').innerHTML = liste1;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function vergleich2(a, b) {
    return a-b;
}

let liste2 = [5,0,12,23,1,10,-3,-10];
liste2.sort(vergleich2);
document.getElementById('box2').innerHTML = liste2;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function vergleich3(a, b) {
    return a.toLowerCase().localeCompare(b.toLowerCase());
}

let liste3 = ['gelbe Farbe', 'gelb', 'Dunkel grau', 'grau', 'blau', 'Black'];                   // sortiert nach ascii-Tabelle
liste3.sort(vergleich3);
document.getElementById('box3').innerHTML = liste3;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function vergleich4(a, b) {
    if(a.length > b.length) {
        return 1;
    } else if(a.length < b.length) {
        return -1;
    } else {
        return 0;
    }
}

// let erg = (a.length > b.length) ? 1 : (a.length < b.length) ? -1 : 0;
// return erg;

let liste4 = ['Schenkendorf', 'Kästner', 'Ringelnatz', 'Rilke', 'Grillpanzer', 'Schiller'];
document.getElementById('box4').innerHTML = liste4;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Mehrdimensionale Array

let liste5 = [
    ['Deutschland', 'Berlin', 82],
    ['Irland', 'Dublin', 6],
    ['Niederlande', 'Amsterdam', 17],
    ['Burkina Faso', 'Ouagadougou', 21],
    ['Oman', 'Maskat', 5]
]

console.log(liste5);
console.log(liste5.length);
console.log(liste5[0]);                                                                 //gibt nur den Inhalt vom Index 0 aus
console.log(liste5[0].length);
console.log(liste5[0][0]);
console.log(liste5[4][1]);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Alle Daten in einer Liste ausgeben

let ausgabe1 = '';
for(let wert of liste5) {
    ausgabe1 += '<ul>';
    ausgabe1 += '<li>'+wert+'</li>';
    ausgabe1 += '</ul>';
}

document.getElementById('box5').innerHTML = ausgabe1;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let ausgabe2 = '';
for(let wert of liste5) {
    ausgabe2 += '<ul class="list-group my-2">';
    ausgabe2 += '<li class="list-group-item list-group-item-info">'+wert[0]+'</li>';
    ausgabe2 += '<li class="list-group-item list-group-item-light">'+wert[1]+'</li>';
    ausgabe2 += '<li class="list-group-item list-group-item-secondary">'+wert[2]+'</li>';
    ausgabe2 += '</ul>';
}

document.getElementById('box6').innerHTML = ausgabe2

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function vergleich5(a, b) {
    return a[0].localeCompare(b[0], 'de-DE');
}

liste5.sort(vergleich5);
let ausgabe3 = '';
for(let wert of liste5) {
    ausgabe3 += '<ul class="list-group my-2">';
    ausgabe3 += '<li class="list-group-item list-group-item-warning">'+wert[0]+'</li>';
    ausgabe3 += '<li class="list-group-item list-group-item-success">'+wert[1]+'</li>';
    ausgabe3 += '<li class="list-group-item list-group-item-primary">'+wert[2]+'</li>';
    ausgabe3 += '</ul>';
}

document.getElementById('box7').innerHTML = ausgabe3;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*
Objekte
{schlüssel : wert}
*/
const schueler = {
    name: 'Max Müller',
    alter: 22,
    sprache: 'Englisch'
}

console.log(schueler);

//auf die Eigenschaften zugreifen
console.log(schueler.name);
console.log("Er spricht nur " + schueler["sprache"]);                                   // wie in php assoziatives array, andere schreibweise für .sprache
console.log(schueler.alter + "j. alt");

schueler["alter"] = 24;
console.log(schueler.name + " ist " + schueler.alter + "j. alt");

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//neue Eigenschaft hinzufügen
schueler.wohnort = "München";
schueler["interesse"] = "Angeln";
console.log(schueler);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Eine Eigenschaft löschen

// schueler.alter = null;
//delete schueler.alter;
delete schueler['alter'];
console.log(schueler);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

const daten = {
    "name": "Angela Merkel",
    alter: 23,
    "2019-2020": "jQuery, JS",
    "gewünschter Kurs": "JSON"
}

console.log(daten);
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Unterschhied - bei Schreibweise
console.log(daten.name);
console.log(daten["name"]);
console.log(daten["na" + "me"]);                                                //geht nur wenn der schlüssel als string geschrieben ist


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
