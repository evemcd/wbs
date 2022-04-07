"use strict";
let shoppingList  = "  Saft, Banane, Mango, Tomaten, ****Nudeln, Birne, Eis     ";

//Anzahl der Zeichen innerhalb der Einkaufsliste anzeigen.
console.log(shoppingList.length);

//Entferne die Leereichen links und rechts.
//Schreibe das Ergebnis zurück in die Variable „shoppingList„ 
//Anzahl der Zeichen innerhalb der Einkaufsliste anzeigen.
shoppingList = shoppingList.trim();
console.log(shoppingList);
console.log(shoppingList.length);

//Finde die Position der vier Stern-Zeichen und speichere diese in einer Variable.
//Schneide die 4 Stern-Zeichen aus und gebe das Ergebnis mit console.log aus.
//Es soll ausgegeben werden: „ Saft, Banane, Mango, Tomaten, Nudeln, Birne, Eis“ 
let pos = shoppingList.indexOf("***");
console.log(pos);

//Verwende dazu einmal die .substr()-Funktion, und einmal die .slide()-Funktion.
console.log(shoppingList.substr(0,pos) + shoppingList.substr(pos+4));
console.log(shoppingList.slice(0,pos) + shoppingList.slice(pos+4));

//Schneide die 4 Stern-Zeichen aus und gebe das Ergebnis mit console.log aus.
//Verwende dazu die .replace()-Funktion.
console.log(shoppingList.replace("****",""));

//Gebe den Inhalt als Großbuchstaben aus.
console.log(shoppingList.replace("****","").toUpperCase());

//Gebe den Inhalt als Kleinbuchstaben aus.
console.log(shoppingList.replace("****","").toLowerCase());

//Verwende die .replace()-Funktion.
//Bindestrich soll 50 mal ausgegeben werden.
//Inhalt ausgaben
console.log("-".repeat(50));
console.log(shoppingList.replace("****",""));
console.log("-".repeat(50));



