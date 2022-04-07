"use strict";

let betrag = "16,37";

//Aufgabe1
console.log(betrag);
console.log(typeof betrag);

//Aufgabe2
let betrag1 = parseInt(betrag);
console.log(betrag1);

//Aufgabe3
betrag = betrag.replace(",", ".");
console.log(betrag);

//Aufgabe4
let betragCent = betrag * 100;
console.log(betragCent);

//Aufgabe5
let betragTwoEuro = Math.floor(betragCent / 200);
console.log("Anzahl: ", betragTwoEuro, " x 2€ Münzen");

let betragOneEuro = Math.floor(betragCent / 100);
console.log("Anzahl: ", betragOneEuro, " x 1€ Münzen");

let betragFiftyCent = Math.floor(betragCent / 50);
console.log("Anzahl: ", betragFiftyCent, " x 0,50€ Münzen");

let betragTwentyCent = Math.floor(betragCent / 20);
console.log("Anzahl: ", betragTwentyCent, " x 0,20€ Münzen");

let betragTenCent = Math.floor(betragCent / 10);
console.log("Anzahl: ", betragTenCent, " x 0,10€ Münzen");

let betragFiveCent = Math.floor(betragCent / 5);
console.log("Anzahl: ", betragFiveCent, " x 0,05€ Münzen");

let betragTwoCent = Math.floor(betragCent / 2);
console.log("Anzahl: ", betragTwoCent, " x 0,02€ Münzen");

let betragOneCent = Math.floor(betragCent / 1);
console.log("Anzahl: ", betragOneCent, " x 0,01€ Münzen");

//Aufgabe6
let amountA = 17;
let amountB = 16.8;
let amountC = 10;
console.log("Betrag: ", Math.round((amountA * 0.1) + amountA), "€");
console.log("Betrag: ", Math.round((amountA * 0.2) + amountA), "€");
console.log("Betrag: ", Math.ceil((amountB * 0.1) + amountB), "€");
console.log("Betrag: ", Math.round((amountB * 0.2) + amountB), "€");
console.log("Betrag: ", Math.round((amountC * 0.1) + amountC), "€");
console.log("Betrag: ", Math.round((amountC * 0.2) + amountC), "€");

