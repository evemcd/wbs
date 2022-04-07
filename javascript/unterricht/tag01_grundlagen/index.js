// Quellcode streng auswerten nach den neuen Regeln
"use strict";
console.log("Hallo Welt");
console.log("Hallo JavaScript");

//Variablen: kann nur einmal genutzt werden
let gruss = "Hallo Welt, wie geht es dir?";
//Schreibt den Inhalt der Variablen
console.log(gruss);

//var ist alte Schreibweise
// var a = "Moin";
// console.log(a);

//Datentypen in JS
let a = 'Hallo Welt';
console.log(a);
console.log(typeof a);

//Zahlen
let b = 42;
console.log(b);
console.log(typeof b);

//Boolean (true/false)
let c = true;
console.log(c);
console.log(typeof c);

//-----------------------------
//Das Plus-Zeichen
console.log(5 + 6);                             //addiert
console.log("Hallo " + "WebDev");               //verkettet
console.log("10" + "1.9");                      //verkettet
console.log(10 + "1.9");                        //verkettet
//------------------------------

let greeting = '   +++Hallo Welt!+++   ';
// 0 1 2 3 4 PC-Zählung
// H A L L O 
// 1 2 3 4 5 Menschen-Zählung
console.log(greeting);                          //Inhalt wird ausgegeben
console.log(greeting.length);                   //Anzahl der Zeichen wird ausgegeben, inkl Leerzeichen
console.log(greeting.charAt(6));                //zeigt Zeichen an der genannten Stelle an, zählt ab 0
console.log(greeting[6]);
console.log(greeting.indexOf("H"));             //Position 6
console.log(greeting.indexOf("+++"));           //Position 3
console.log(greeting.indexOf("+++", 5));
console.log(greeting.toLowerCase());            //alle Buchstaben klein
console.log(greeting.toUpperCase());            //alle Buchstaben groß
console.log(greeting.replace("!","!!"));        // ! mit !! ersetzen

console.log(greeting.length);                   //zeigt Anzahl der Zeichen mit Leerzeichen an
console.log(greeting);                          //gibt Inhalt mit Leerzeichen aus
console.log(greeting.trim());                   //gibt Inhalt ohne Leerzeichen aus
console.log(greeting.trim().length);            //zeigt Anzahl der Zeichen ohne Leerzeichen an

console.log("Hallo \nWelt");                    //html:<br> JS:\n
console.log("Hallo \\ Welt");                   // \ ist ein escape Zeichen, also wenn \ angezeigt werden soll, muss erst das escape geschrieben werden und dann das Sonderzeichen
console.log("-".repeat(20));                    //wiederholt die Zeichenkette 20 mal

//substr(start, length)
console.log("Hallo JavaScript".substr(6,2));    //zeigt Zeichenkette ab Zeichen 6 an, zeigt 2 Zeichen an
console.log("Hallo JavaScript".substr(6));      //zeigt gesamte Zeichenkette ab Zeichen 6 an

//slice(start, ende)
console.log("Hallo JavaScript".slice(0,4));     //zeigt Zeichen 0 - 4 (nicht inkl 4) der Zeichenkette an

