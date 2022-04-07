"use strict";

let sprachKurs1 = ["Thomas","Inna"];
let sprachKurs2 = ["Hans","Jo","Angela"];

//Aufgabe1
if(sprachKurs1.indexOf("Angela") || sprachKurs2.indexOf("Angela")) {
    console.log("Angela ist angemeldet");
}else {
    console.log("Angela ist nicht angemeldet");
}

//Aufgabe2
if(sprachKurs1.length < sprachKurs2.length) {
    sprachKurs1.push("Moritz");
    console.log("Moritz ist jetzt in Sprachkurs 1.");
} else if(sprachKurs2.length < sprachKurs1.length) {
    sprachKurs2.push("Moritz");
    console.log("Moritz ist jetzt in Sprachkurs 2.");
} else {
    sprachKurs1.push("Moritz");
    console.log("Die Sprachkurse sind gleichmäßig belegt. Moritz ist jetzt in Sprachkurs 1.");
}

//Aufgabe3
let schueler = "Jo";

if(sprachKurs1.indexOf(schueler) !== -1) {
    sprachKurs1.splice(sprachKurs1.indexOf(schueler),1);
    console.log(`${schueler} wurde aus Sprachkurs 1 entfernt.`);
} else if(sprachKurs2.indexOf(schueler) !== -1) {
    sprachKurs2.splice(sprachKurs2.indexOf(schueler),1);
    console.log(`${schueler} wurde aus Sprachkurs 2 entfernt.`);
}else {
    console.log(`${schueler} befindet sich in keinem Sprachkurs.`);
}

console.log(sprachKurs1);
console.log(sprachKurs2);

//Aufgabe4
if(sprachKurs1.length > 0 && sprachKurs1.length <=3){
    console.log("Sprachkurs 1 kostet 30€");
}else if(sprachKurs1.length >= 4) {
    console.log("Sprachkurs 1 kostet 10€");
}else {
    console.log("Es ist niemand angemeldet.");
}

if(sprachKurs2.length > 0 && sprachKurs2.length <=3){
    console.log("Sprachkurs 2 kostet 30€");
}else if(sprachKurs2.length >= 4) {
    console.log("Sprachkurs 2 kostet 10€");
}else {
    console.log("Es ist niemand angemeldet.");
}