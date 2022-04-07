"use strict";

//Funktionen mit mehreren Parametern definieren
function printInfo(firstName, lastName, alter) {
  console.log(`Vorname: ${firstName}`);
  console.log(`Nachname: ${lastName}`);
  console.log(`Alter: ${alter}`);
}

/*
Datentypen von Parametern
bei streng typisierten Programmiersprachen muss man bei der Funktionsdeklaration auch die Datentypen der einzelnen Parameter definieren.
In JS hingegen ist das nicht der Fall.

*/

//Funktion mit mehreren Parametern aufrufen
console.log("*".repeat(20));
printInfo('Max','Mustermann',22);
console.log("*".repeat(20));
printInfo('Jerry','Mustermann',55);

//++++++++++++++++++++++++++++++++++++++++++
//Funktionen mit weniger Argumenten als angegebenen Parametern aufrufen
/*
Eine besonderheit bei der Verwendung von Funktionen, die JS von anderen Sprachen unterscheidet, ist, dass eine Funktion auch mit weniger Argumenten aufgerufen werden kann.
Mit 1, 2, 3 oder keinem Argument
*/
console.log("*".repeat(50));
printInfo();
console.log("*".repeat(20));
printInfo('Max','Mustermann');
/*
Aber Achtung: Die Parameter, zu denen keine Argumente übergeben sind, verhalten sich wie Variablen, die nicht initialisiert sind.
undefined
*/
//++++++++++++++++++++++++++++++++++++++++++
//Man kann innerhalb der Funktion prüfen ob undefined
function printInfo2(firstName, lastName, alter) {
  if(firstName !== undefined) {
    console.log(`Vorname: ${firstName}`);
  }

  if(lastName !== undefined) {
    console.log(`Nachname: ${lastName}`);
  }

  if(alter !== undefined) {
    console.log(`Alter: ${alter}`);
  }
}

console.log("*".repeat(50));

printInfo2();
printInfo2('Max');
console.log("*".repeat(20));
printInfo2('Max','Mustermann');
console.log("*".repeat(20));
printInfo2('Max','mustermann',102);
console.log("*".repeat(50));
//++++++++++++++++++++++++++++++++++++++++++
//Funktionen mit mehr Argumenten als angegebenen Parametern aufrufen.
printInfo2('Max','Mustermann',45,1.90);
//für das 4 Argument ist kein Parameter definiert(zugewiesen).
/*es gibt einen Weg, innerhalb einer Funktion auf alle übergebenen Argumente zuzugreifen -> mit der Variablen "arguments", die implizit innerhalb einer Funktion zur Vergügung steht.
wie bei einem Array über arguments[0] gelangt man zudem 1. Argument
über aruments[1] zum 2. Argument usw.
über .length kann man ermitteln, wie viele Argumente übergeben wurden.

Bei dem arguments-Objekt handelt es sich nicht um ein Arry, sondern um ein sogenanntes Array-ähnliches Objekt.

Hat keine Methoden wie ein Array
*/
function printInfo3(firstName, lastName, alter) {
  if(firstName !== undefined) {
    console.log(`Vorname: ${firstName}`);
  }

  if(lastName !== undefined) {
    console.log(`Nachname: ${lastName}`);
  }

  if(alter !== undefined) {
    console.log(`Alter: ${alter}`);
  }

  if(arguments.length > 3) {
    console.log(`Größe: ${arguments[3]}cm`);
  }

  if(arguments.length > 4) {
    console.log(`Gewicht: ${arguments[4]}kg`);
  }
}

console.log("x".repeat(50));
printInfo3('Angela','Merkel',62);
console.log("x".repeat(50));
printInfo3('Angela','Merkel',62,1.67);
console.log("x".repeat(50));
printInfo3('Angela','Merkel',62, 1.67, 64);
//++++++++++++++++++++++++++++++++++++++++++
//Funktion mit einer Variablen Anzahl an Argumenten
//variadische Funktionen

//function rechner1(numbers = [2,4,5,6,8,9,10,22]) {

function rechner1(numbers) {
  let result = 0;
  for(let i = 0; i < numbers.length; i++) {
    /*
       result = result + numbers[0] + numbers[1] + numbers[2]...;
    */
    //result = result + numbers[i];
    result += numbers[i];
  }
  console.log(result)
}

console.log("x".repeat(50));
rechner1([2,4]);
rechner1([2,4,5]);
rechner1([2,4,5,6,8,9,10,22]);
rechner1([2,2,2,2,2]);
//++++++++++++++++++++++++++++++++++++++++++
//Funktion mit Rest-Parametern
//genau 3 Punkte (...Parameter)
function rechner2(...numbers) {
  let result = 0;
  for(let i = 0; i < numbers.length; i++) {
    result += numbers[i];
  }

  console.log(result);
}

console.log("x".repeat(50));

//beim Aufruf, kein Array übergeben sondern einzelne Argumente
rechner2(2,4);
rechner2(2,4,5);
rechner2(2,4,5,6,8,9,10,22);
rechner2(2,2,2,2,2);
//++++++++++++++++++++++++++++++++++++++++++
//Funktion mit Rückgabewert
function benutzerInfo(username, email, passwort) {
  const benutzer = {
    user: username,
    mail: email,
    pwd: passwort
  }

  return benutzer;
}

console.log("x".repeat(50));

console.log( benutzerInfo('Angela Merkel','angela@angela.de','geheim') );

console.log("x".repeat(50));

const user1 = benutzerInfo('Helene Fischer','helene@helene.de','geheim');

console.log(user1.user);
console.log(user1.mail);
console.log(user1.pwd);
//++++++++++++++++++++++++++++++++++++++++++
//Standardwerte definieren
function benutzerInfo2(username, email, passwort = 'standardPasswort') {
  const benutzer = {
    user: username,
    mail: email,
    pwd: passwort
  }

  return benutzer;
}

console.log("x".repeat(50));

const user2 = benutzerInfo2('Thomas Mann','man@man.de');
console.log(user2.user);
console.log(user2.mail);
console.log(user2.pwd);

console.log("x".repeat(50));

const user3 = benutzerInfo2('Thomas2 Mann2','man2@man2.de','geheim');
console.log(user3.user);
console.log(user3.mail);
console.log(user3.pwd);
//++++++++++++++++++++++++++++++++++++++++++
function benutzerInfo3(username, email, passwort) {
  /*
  if(passwort === undefined) {
    passwort = 'standardPasswortFürAlle';
  }
  */

  //passwort = passwort !== undefined ? passwort : 'stadardPasswortFürAlle';

  //null coalescing operator
  passwort = passwort ?? 'stadardPasswortFürAlleUser';

  const benutzer = {
    user: username,
    mail: email,
    pwd: passwort
  }

  return benutzer;
}

console.log("x".repeat(50));

const user4 = benutzerInfo3('David Sedaris', 'david@david.de');
console.log(user4.user);
console.log(user4.mail);
console.log(user4.pwd);
//++++++++++++++++++++++++++++++++++++++++++
//Rechnen mit for of (Rest-Parameter)
function rechner3(...numbers) { 
  let result = 0;
  for(let i of numbers) {
    result += i;
  }
  console.log(result);
}

console.log("x".repeat(50));

rechner3(2,4);
rechner3(2,4,5);
rechner3(2,4,5,6,8,9,10,22);
rechner3(2,2,2,2,2);
//++++++++++++++++++++++++++++++++++++++++++
//for in 
let info = {
  name: 'Merkel',
  vorname: 'Angela',
  wohnort: 'Berlin',
  alter: 62
}

function benutzerInfo4() {
  for(let i in info) {
    console.log( i + ' : ' +info[i])
  }
}

console.log("x".repeat(50));
benutzerInfo4();
//++++++++++++++++++++++++++++++++++++++++++
//.fill() befüllt ein Array mit einem statisches Wert
let liste1 = new Array(10).fill('XXX');

console.log(liste1);
liste1[0] = 'Max';
liste1[4] = 'Moritz';
liste1[8] = 'Angela';
console.log(liste1);
//++++++++++++++++++++++++++++++++++++++++++
/*
Date-Objekt -> Zeit innerhalb von 100mio Tagen vor und nach 1.1.1970

Daten-Object reicht noch bis Jahr 275755
*/
const heute = new Date();

console.log(heute);

const datumAusgabe = () => {
  //document.getElementById("box1").innerHTML = heute;

  //Jahr -> YYYY
  //document.getElementById("box1").innerHTML = heute.getFullYear();

  //Monat -> liefert 0 - 11 (Jan = 0, ....., December = 11)
  //document.getElementById("box1").innerHTML = heute.getMonth();

  //Tag des Monats -> liefert 1 - 31
  //document.getElementById("box1").innerHTML = heute.getDate();

  //Tag der Woche -> liefert 0 - 6 (0 = Sonntag, 6 = Samstag)
  //document.getElementById("box1").innerHTML = heute.getDay();

  //Stunde -> liefert 0 - 23
  //document.getElementById("box1").innerHTML = heute.getHours();

  //Minute -> liefert 0 - 59
  //document.getElementById("box1").innerHTML = heute.getMinutes();

  //Sekunde -> liefert 0 - 59
  //document.getElementById("box1").innerHTML = heute.getSeconds();

  //Millisekunden seit 1.1.1970
  //document.getElementById("box1").innerHTML = heute.getTime();

  //document.getElementById("box1").innerHTML = heute.toLocaleString();

  //Monat ermitteln
  let monat = ['Jan','Feb','Mrz','Apr','Mai','Juni','Juli','Aug','Sep','Oktober','Nov','Dez'];

  //Wochentag ermitteln
  let tag = ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'];

  //Heute ist: Montag, 18 // Oktober // 2021
  document.getElementById('box1').innerHTML = 'Heute ist: ' + 
                                              tag[heute.getDay()] + 
                                              ', ' + 
                                              heute.getDate() + 
                                              ' // ' + 
                                              monat[heute.getMonth()] +
                                              ' // ' +
                                              heute.getFullYear();
                                           
}

datumAusgabe();

//++++++++++++++++++++++++++++++++++++++++++
//Std:Min:Sek
let uhr = () => {
  let jetzt = new Date();
  //+++++++++++++++
  let std = jetzt.getHours();
  let minute = jetzt.getMinutes();
  let sek = jetzt.getSeconds();
  //+++++++++++++++
  //1,.......,9, 10, 11, 12 (standard)
  //01,.......,09, 10, 11, 12 (Ziel)

  if(std < 10) {
    std = '0' + std;
  }

  if(minute < 10) {
    minute = '0' + minute;
  }

  if(sek < 10) {
    sek = '0' + sek;
  }

  document.getElementById('box2').innerHTML = std + ':' + minute + ':' + sek;
  setTimeout(uhr, 1000);
}

uhr();
//++++++++++++++++++++++++++++++++++++++++++
let liste2 = ['Michael','Anna','Xavier','Jan']

console.log(liste2);

//Element vom Array sortieren
liste2.sort();

console.log(liste2);
//++++++++++++++++++++++++++++++++++++++++++
let liste3 = [2,4,1,22,34];

console.log( liste3 );
console.log( liste3.sort() );
//++++++++++++++++++++++++++++++++++++++++++
let liste4 = [2,4,1,-1, -3, 0, 12, 22,34];

console.log( liste4 );
console.log( liste4.sort() );