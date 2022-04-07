"use strict";

function printInfo(firstName, lastName, alter) {
    console.log(`Vorname: ${firstName}`);
    console.log(`Nachname: ${lastName}`);
    console.log(`Alter: ${alter}`);
}

printInfo("Eve", "McDermott", 35);
console.log("*".repeat(20));
printInfo("Charlie", "McDermott", 4);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

printInfo();                                                //undefined
printInfo("Max", "Mustermann");                             //alter undefined

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function printInfo2(firstName, lastName, alter) {
    if(firstName !== undefined) {                           //nichts ausgeben wenn undefined
        console.log(`Vorname: ${firstName}`);
    }
    if(lastName !== undefined) {
        console.log(`Nachname: ${firstName}`);
    }
    if(alter !== undefined) {
        console.log(`Alter: ${firstName}`);
    }
}

printInfo2();
console.log("*".repeat(20));
printInfo2("Max");
console.log("*".repeat(20));
printInfo2("Max", "Mustermann");
console.log("*".repeat(20));
printInfo2("Max", "Mustermann", 35);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
printInfo2("Max", "Mustermann", 35, 1.90);                  //zusätzliche Ausgabe meldet sich nicht

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function printInfo3(firstName, lastName, alter) {
    if(firstName !== undefined) {
        console.log(`Vorname: ${firstName}`);
    }
    if(lastName !== undefined) {
        console.log(`Nachname: ${firstName}`);
    }
    if(alter !== undefined) {
        console.log(`Alter: ${firstName}`);
    }
    if(arguments.length > 3) {                              //arguments = (firstName, lastName, alter)
        console.log(`Größe: ${arguments[3]}cm`);
    }
    if(arguments.length > 4) {
        console.log(`Gewicht: ${arguments[4]}kg`);
    }
}

printInfo3("Max", "Mustermann", 35);
console.log("*".repeat(20));
printInfo3("Max", "Mustermann", 35, 1.85); 
console.log("*".repeat(20));
printInfo3("Max", "Mustermann", 35, 1.85, 88); 

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function rechner1(numbers) {
    let result = 0;
    for(let i = 0; i < numbers.length; i++) {
        result += numbers[i];
    }
    console.log(result);
}

rechner1([2,4]);
rechner1([2,4,5]);
rechner1([2,4,5,6,8,9,10,22]);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Funktion mit Restparametern
function rechner2(...numbers) {
    let result = 0;
    for(let i = 0; i < numbers.length; i++) {
        result += numbers[i];
    }
    console.log(result);
}

rechner2(2,4);
rechner2(2,4,5);
rechner2(2,4,5,6,8,9,10,22);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Funktion mit Rückgabewert

function benutzerInfo(username, email, passwort) {
    const benutzer = {
        user: username,                                 //schluessel: wert
        mail: email,
        pwd: passwort
    }
    return benutzer;
}
console.log(benutzerInfo("Max", "max@mustermann.de", "geheim"));
console.log("*".repeat(20));
const user1 = benutzerInfo("Helene", "helene@fischer.de", "geheim");
console.log(user1.user);
console.log(user1.mail);
console.log(user1.pwd);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Standardwerte definieren

function benutzerInfo2(username, email, passwort = 'standardPasswort') {
    const benutzer = {
        user: username,
        mail: email,
        pwd: passwort
    }
    return benutzer;
}
const user2 = benutzerInfo2("Thomas", "tom@mann.de");
console.log(user2.user);
console.log(user2.mail);
console.log(user2.pwd);

console.log("*".repeat(20));

const user3 = benutzerInfo2("Thomas2", "thomas@mann.de", "geheim");
console.log(user3.user);
console.log(user3.mail);
console.log(user3.pwd);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function benutzerInfo3(username, email, passwort) {
    /*
    if(passwort === undefined) {
        passwort = "standardPasswortFürAlle"
    }
    */

    /*
   passwort = passwort !== undefined ? passwort : "standardPasswortFürAlle"                 //? steht für {} im if statement, : steht für else = ternary
   */

   passwort = passwort ?? "standardPasswortFürAlle";                                        //null coalescing operator wenn entweder ein Wert da ist oder nicht (undefined)
    const benutzer = {
        user: username,
        mail: email,
        pwd: passwort
    }
    return benutzer;
}

const user4 = benutzerInfo3("David", "david@hoff.de");
console.log(user4.user);
console.log(user4.mail);
console.log(user4.pwd);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Rechnen mit for of (Restparameter)
function rechner3(...numbers) {
    let result = 0;
    for(let i of numbers) {
        result += i
    }
    console.log(result);
}

rechner3(2,4);
rechner3(2,4,5);
rechner3(2,4,5,6,8,9,10,22);

console.log("*".repeat(20));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//for in
let info = {
    name: "Merkel",
    wohnort: "Berlin",
    alter: 62,
}

function benutzerInfo4() {
    for(let i in info) {
        console.log(i);
    }
}

benutzerInfo4();