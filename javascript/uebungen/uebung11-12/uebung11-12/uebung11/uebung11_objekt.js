'use strict'
//Array erstellen
const LANGUAGE_DE = [
    'heute',
    'sprachkurs',
    'willkommen',
    'mikrofon',
    'und',
]
//Array erstellen
const LANGUAGE_EN = [
    'hello',
    'today',
    'language course',
    'welcome',
    'microphone',
    'and',
]

for(let i in LANGUAGE_DE) {
    //console.log(LANGUAGE_DE[i])
		document.getElementById("deutsch").innerHTML += LANGUAGE_DE[i]+"<br />";
}
console.log('+'.repeat(40))
//+++++++++++++++++++++++++++++++++++++++++++
for(let i in LANGUAGE_EN) {
    //console.log(LANGUAGE_EN[i])
		document.getElementById("englisch").innerHTML += LANGUAGE_EN[i]+"<br />";
}
console.log('+'.repeat(40))
//+++++++++++++++++++++++++++++++++++++++++++
console.log('*'.repeat(40))
for(let i in LANGUAGE_DE) {
   //console.log(LANGUAGE_DE[i],':', LANGUAGE_EN[i])
		
	document.getElementById("de").innerHTML += LANGUAGE_DE[i]+' : <span class="sprache">'+ LANGUAGE_EN[i] + "</span><br />";
}
console.log('+'.repeat(40))
//+++++++++++++++++++++++++++++++++++++++++++
console.log('*'.repeat(40))
for(let i in LANGUAGE_EN) {
   //console.log(LANGUAGE_EN[i],':', LANGUAGE_DE[i])
		
	document.getElementById("en").innerHTML += LANGUAGE_EN[i]+' : <span class="sprache">'+ LANGUAGE_DE[i] + "</span><br />";
}

//+++++++++++++++++++++++++++++++++++++++++++
const students = [
    {vorname: 'Angela', name: 'Merkel', alter: 24},
    {vorname: 'Hans', name: 'Ernst', alter: 34},
    {vorname: 'Anna', name: 'Lustig', alter: 18},
    {vorname: 'John', name: 'Witzig', alter: 44},
    {vorname: 'Klein', name: 'Big', alter: 1},
]
let alterSumme = 0

for(let jahr of students) {
    alterSumme += jahr.alter;
		document.getElementById("student").innerHTML += "<p class='info'>Name: " +jahr["name"]+"<br />"+
																											"Vorname: "+jahr["vorname"]+"<br />"+
																											"Alter: " +jahr["alter"]+"j. alt</p>";
}


document.getElementById("info").innerHTML += "Anzahl der Studenten: "+students.length+
													"<br />Studenten sind insgesamt: "+alterSumme+"j. alt" +
													"<br />Durchschnittsalter der Studenten: "+alterSumme / students.length+"jahre";





