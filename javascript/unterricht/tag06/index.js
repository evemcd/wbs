"use strict";

function modulo(wert) {
    let ausgabe = '';
    ausgabe = wert + ' % 2 = ' + wert % 2 + '<br />';
    document.getElementById('box1').innerHTML += ausgabe;
}

// modulo(20);
// modulo(21);
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let liste1 = [2,3, 4, 5, 6, 7, 22, 35, 56];
liste1.forEach(modulo)                                      //nutzt die modulo function von oben und wendet sie für jedes Element aus dem Array an

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let liste2 = ["Max", "Tom", "Jerry", "Angela", "Helene", "Boss"];

/*function print(name, i) {
    let ausgabe = ``;
    ausgabe = `In Position ${i+1} steht der Teilnehmer <strong>${name}</strong> <br />`;
    document.getElementById('box2').innerHTML += ausgabe;
}
liste2.forEach(print);*/

liste2.forEach((name, i) => {
    let ausgabe = ``;
    ausgabe = `In Position ${i+1} steht der Teilnehmer <strong>${name}</strong> <br />`;
    document.getElementById('box2').innerHTML += ausgabe;
})

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//const summe = function (wert1, wert2) {return wert1 + wert2}
//const summe = (wert1, wert2) => {return wert1 + wert2}
const summe = (wert1, wert2) => wert1 + wert2;
console.log(summe(2,4));
console.log(summe(5,33));

//bei Funktionen mit einem Parameter kann () weggelassen werden
const showInfo = message => console.log(message);
showInfo("Hallo");
showInfo("JS ist sehr einfach");

const druck = () => console.log("Hello World");
druck();

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Werte aus einem Array extrahieren
let liste3 = ["Grass", "Kästner", "Ringelnatz", "Rilke", "Grillparzer", "Heine"];
let eins = liste3[0];
let zwei = liste3[1];
let drei = liste3[2];
let vier = liste3[3];
let fuenf = liste3[4];
let sechs = liste3[5];

console.log(eins);
console.log(fuenf);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Werte aus einem Array extrahieren (mit Destructuring)

// let [one, two, three, four, five, six] = liste3;
// console.log(one);

let [one,,three, ...rest] = liste3;
console.log(one);
console.log(three);
console.log(rest);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

console.log(typeof "Hallo");
console.log(typeof 123);
console.log(typeof true);
console.log(typeof []);
console.log(typeof {});

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let a = 5;
let b = a;
b = 4;
console.log(a + ' ' + b);

console.log("*".repeat(20));

let x = {
    firstName: "Max",
    lastName: "Mustermann"
}

let y = x;
console.log('x : ' + x.firstName);
console.log('y : ' + y.firstName);

console.log("*".repeat(20));

y.firstName = "Moritz";
console.log('x : ' + x.firstName);
console.log('y : ' + y.firstName);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Alter berechnen
let geboren = new Date(1996, 10, 19);
let geboren_sekunden = geboren.getTime();
let jetzt = new Date();
let jetzt_sekunden = jetzt.getTime();
// console.log(geboren_sekunden);
// console.log(jetzt_sekunden);
let alter = jetzt_sekunden - geboren_sekunden;
let jahr_in_sek = 365 * 24 * 60 * 60 * 1000;
document.getElementById('box3').innerHTML = 'Klaus ist jetzt um die ' + Math.ceil(alter/jahr_in_sek) + ' Jahre alt.';

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*
setInterval(function(){alert('Hallo')}, 1000);                                  //soll alle 1000 Millisekunden (1 Sekunde) ausgeführt werden
setTimeout(function(){alert('Hallo')}, 1000);                                   //soll nach einer Sekunde einmal ausgeführt werden

function zeigeInfo() {
    alert('Something geeky');
    console.log('Hallo Welt');
}
setTimeout(zeigeInfo, 3000);

let uhr = () => {
    let jetzt = new Date();
    document.getElementById('box4').innerHTML = jetzt.getHours() + ':' + jetzt.getMinutes() + ':' + jetzt.getSeconds();
}
uhr();
setInterval(uhr, 1000);
*/

let uhr = () => {
    let jetzt = new Date();
    let std = jetzt.getHours();
    let miin = jetzt.getMinutes();
    let sek = jetzt.getSeconds();
    if(std < 10) {
        std = '0' + std;
    }
    if(miin < 10) {
        miin = '0' + miin;
    }
    if(sek < 10) {
        sek = '0' + sek;
    }
    document.getElementById('box4').innerHTML = std + ':' + miin + ':' + sek;
}
uhr();
setInterval(uhr, 1000);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let liste4 = ["Max", "Tom", "Jerry", "Angela", "Helene", "Boss"];
console.log(liste4);
console.log(liste4.reverse());
console.log(liste4.sort());

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let liste5 = [5,1, -1, -3, 0, 2, 12, 10];
console.log(liste5);
console.log(liste5.sort());
document.getElementById('box5').innerHTML = liste5;

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function vergleich(a, b) {
    if(a > b) {
        return 1;
    }else if(b > a) {
        return -1;
    }else {
        return 0;
    }
}
document.getElementById('box6').innerHTML = liste5.sort(vergleich);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//kürzer
let zahlen = [1, 2, -1, -3, 0, 12, 10];

function sortierung(a, b) {
    //aufsteigend sortieren
    // return a - b;
    //absteigend sortieren
    return b - a;
}

document.getElementById('box7').innerHTML = zahlen.sort(sortierung);