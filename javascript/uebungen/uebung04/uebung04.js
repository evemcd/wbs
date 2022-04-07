"use strict";

let liste = "Tom, Jerry, Max, Moritz, Anna, Angela";

//Aufgabe1
liste = liste.split(", ");
let indexMax = (liste.indexOf("Max"));
liste.splice(indexMax, 1);
liste = liste.join(", ")
console.log(liste);

//Aufgabe2
liste = liste.split(", ");
console.log(liste);
for(let element of liste) {
    console.log("-> " + element);
}

//Aufgabe3
for(let element of liste) {
    console.log("-> " + element.toUpperCase());
}