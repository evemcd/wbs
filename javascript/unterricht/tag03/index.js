let students = ["Angela Merkel", "Helene Fischer", "Thomas Merkel", "David Sedaris","Thomas Mann"];
console.log(students);
console.log(typeof students);                                                           //object
console.log(["0 "] + students[0]);                                                      //Angela Merkel, Position 0
console.log("[letztes element]" + students[students.length - 1]);                       //Thomas Mann, letzte Position
console.log(students[230]);                                                             //undefined, gibt keine Position 230

students.push("Student1");                                                              //fügt Student1 am Ende hinzu
console.log(students);
students.push("Student2", "Student3");                                                  //fügt beide hinten zu
console.log(students);

students.pop(students);                                                                 //entfernt die letzte Position
console.log(students);

let last = students.pop();                                                              //pop ist in einer Variablen und entfernt im console.log die letzte Position
console.log("das letzte Element \"" + last + "\" wurde gelöscht");
console.log(students);

students[0] = "Dieter Bohlen";                                                          //Position 0 wird überschrieben
console.log(students);

//===========================================================

let greeting = "Hallo Welt";
greeting = "Moin";
console.log(greeting);                                                                  //gibt aus "Moin"
greeting[0] = "h";                                                                      //strings sind unveränderlich, man kann mit Positionen den Inhalt nicht verändern, besitzt keine Elemente
console.log(greeting[0]);                                                               //gibt Position 0 aus dem String aus: M

console.log("-".repeat(30));                                                            //----------------------------------------------------
//===========================================================

const std2 = ["Max", "Hans"];                                                           //der Inhalt einer constanten soll nicht verändert werden.
std2.push("Tom");                                                                       //Es geht und fügt Tom hinten an aber man soll es nicht machen
console.log(std2);

console.log("-".repeat(30));
//===========================================================

let studentList = ["Max Müller", "Paul Mustermann", "Anna Wagner", "Max Müller", "Tom Moritz"];
console.log(studentList);

//die position des indexes
console.log(studentList.indexOf("Max Müller"));                                         //Index/Position von Max finden: 0, der erste Max wird angezeigt
console.log(studentList.indexOf("Max Müller",1));                                       //Sucht ab Index 1, Index 3
console.log(studentList.indexOf("Max Fischer", 1));                                     //Element existiert nicht, gibt -1 aus

console.log("-".repeat(30));
//===========================================================
/*
studentList.sort();                                                                     //sortiert alphabetisch nach erstem Buchstaben
console.log(studentList);

studentList.reverse();                                                                  //sortiert rückwärts
console.log(studentList);
*/

//Elemente entfernen mit splice((wo?, wieviele?)
studentList.splice(0,3);                                                                //entfernt 3 Elemente ab Position 0 aus dem Array
console.log(studentList);

//Elemente hinzufügen mit splice()
studentList.splice(0, 0, "Joker")                                                       //Position 0, 0 löschen, Name der hinzuzufügen ist
console.log(studentList);

console.log("-".repeat(30));
//===========================================================

let liste2 = ["apfel", 4];
console.log(liste2[0].toUpperCase());                                                   //geht nicht weil Zahlen dabei aber man kann Index 0 ansprechen
console.log(liste2[1].toFixed(2));                                                      //toFixed(2) zwei Dezimalstellen

let liste = ["apfel", 4, ["wert1", "wert2"]];                                           //verschachtelter array
console.log(liste);
console.log(liste[2]);                                                                  //gibt den verschachtelten array aus da der an Index Position 2 steht
console.log(liste[2][0]);                                                               //gibt Index 0 des verschachtelten arrays aus
console.log(liste[2][1][2]);                                                            //verschachteltes array (Index 2), "Wert2" (Index 1), r (Index 2 von WERT)
console.log("-".repeat(30));
//===========================================================

let korb1 = "Apfel, Banane, Mango, Birne";
console.log(korb1.split());                                                             //legt den String in einen array als ein Element
console.log(korb1.split(", "));                                                         //jedes Wort wird ein Element in einem array
console.log(korb1.split(""));                                                           //jedes einzelne Zeichen wird ein String (Element) in einem array

let korb2 = ["Apfel, Banane, Mango, Birne"];
console.log(korb2.join());                                                              //ändert den array in einen String um

console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
let abfrage = "";

if(abfrage) {
    console.log("Hallo Welt");
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Vergleich
console.log("true == 1" + (true == 1));
console.log("true != 1" + (true != 1));
//Streng
console.log("true === 1" + (true === 1));
console.log("true !== 1" + (true !== 1));

console.log("0" == false);
console.log("0" === false);
console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//while-Schleife
let counter1 = 1;
while(counter1 < 5) {
    console.log("Hallo while" + counter1);
    counter1++;
}

console.log("*".repeat(50));

let counter2 = 1;
do {                                                            // wird miindestens einmal ausgeführt bevor die Bedingung gecheckt wird
    console.log("Hallo while" + counter2);
    counter2++;
}while(counter2 < 5);
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

for(let counter = 0; counter < 5; counter++) {
    console.log(counter);
}

console.log("*".repeat(50));

//alternative Schreibweise
for(let counter = 0; counter < 5; counter = counter + 1) {
    console.log(counter);
}

console.log("*".repeat(50));

for(let counter = 0; counter < 5; counter = counter + 2) {
    console.log(counter);
}

console.log("*".repeat(50));

for(let counter = 0; counter <= 10; counter++) {
    counter = counter + 2
    console.log(counter);
}

/*
(10:25) zwei zitate: <i> ++ierhöht den Wert von iund gibt dann den inkrementierten Wert zurück.</i>
(10:25) <i>i++erhöht den Wert von i, gibt jedoch den ursprünglichen Wert zurück, ider vor dem Inkrementieren gehalten wurde.</i>
*/

console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

for(let i = 0; i <= 10; i++) {
    if(i === 7) {
        continue;                                                           //überspringt 7
    }
    if(i === 9){
        break;                                                              //hört vor 9 auf
    }
    console.log("Wir sind im Auftrag des Herrn unterwegs " + i);
}

console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let note = 1;

if(note === 1) {
    console.log("Der Teilnehmer ist sehr gut!");
}else if(note === 2) {
    console.log("Der Teilnehmer ist gut!");
}else if(note === 3) {
    console.log("Der Teilnehmer ist zufriedenstellend!");
}else if(note === 4) {
    console.log("Der Teilnehmer ist ok!");
}else if(note === 5) {
    console.log("Der Teilnehmer ist schlecht!");
}else if(note === 6) {
    console.log("Der Teilnehmer muss viel tun!");
}else{
    console.log("Der Teilnehmer war stehts bemüht.");
}

console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*
switch(Ausdruck){
    case Wert: Anweisung; break;
    case Wert: Anweisung; break;
    case Wert: Anweisung; break;
}
*/

let note2 = 10;
switch(note2) {
    case 1: console.log("Der Teilnehmer ist sehr gut!"); break;
    case 2: console.log("Der Teilnehmer ist gut!"); break;
    case 3: console.log("Der Teilnehmer ist zufriedenstellend!"); break;
    case 4: console.log("Der Teilnehmer ist ok!"); break;
    case 5: console.log("Der Teilnehmer ist schlecht!"); break;
    case 6: console.log("Der Teilnehmer muss viel tun!"); break;
    default: console.log("Der Teilnehmer war stehts bemüht."); break;
}

let note3 = 1;
switch(note3) {
    case 1: 
    case 2: 
    case 3: console.log("Der Teilnehmer ist nett!"); break;                         //gilt für 1, 2 und 3
    case 4: console.log("Der Teilnehmer ist ok!"); break;
    case 5: console.log("Der Teilnehmer ist schlecht!"); break;
    case 6: console.log("Der Teilnehmer muss viel tun!"); break;
    default: console.log("Der Teilnehmer war stehts bemüht."); break;
}

console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Operatoren: && und ||

let gesamtPreis = 20;
let menge = 4;

if(gesamtPreis >= 22 || menge >= 3) {
    console.log("Du bekommst einen Gutschein für den nächsten Einkauf");
}else {
    console.log("Vielen Dank für ihren Einkauf");
}

console.log("*".repeat(50));

if(gesamtPreis >= 22 && menge >= 3) {
    console.log("Du bekommst 20% Rabatt");
}else {
    console.log("Vielen Dank");
}

console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let liste1 = ["Max","Moritz","Hans","Angela","Helene"];

console.log("+++++ Ausgabe mit for +++++");
for(let i = 0; i <liste.length; i++) {
    console.log("- " + liste1[i]);
}

console.log("+++++ Ausgabe mit while +++++");
let zaehler = 0;
while(zaehler < liste.length) {
    console.log("- " + liste1[zaehler]);
    zaehler++;
}

console.log("*".repeat(50));
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*for(Variable of wo?) {
    Anweisung;
}
*/

console.log("+++++ Ausgabe mit for of +++++");
for(let element of liste1) {
    console.log("- " + element);
}

console.log("+++++ Ausgabe mit for in +++++");
for(let element in liste1) {
    console.log(element);
}