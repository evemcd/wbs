"use strict";

let deutsch = ['hallo', 'heute', 'sprachkurs', 'willkommen', 'mikrofon', 'und'];
let englisch = ['hello', 'today', 'language course', 'welcome', 'microphone', 'and'];
let deu = '';
let eng = '';
let deuEng = '';
let engDeu = '';

for(let i = 0; i < deutsch.length; i++) {
    deu += `${deutsch[i]}<br>`;
    eng += `${englisch[i]}<br>`;
    deuEng += `${deutsch[i]} : <span style='color:red;'>${englisch[i]}</span><br>`;
    engDeu += `${englisch[i]} : <span style='color:red;'>${deutsch[i]}</span><br>`;
}

document.getElementById('de').innerHTML = deu;
document.getElementById('en').innerHTML = eng;
document.getElementById('de-en').innerHTML = deuEng;
document.getElementById('en-de').innerHTML = engDeu;


// =======================================

let students = [
    ["Merkel", "Angela", 24],
    ["Ernst", "Hans", 34],
    ["Lustig", "Anna", 18],
    ["Witzig", "John", 44],
    ["Big", "Klein", 1]
];

let studentInfo = '';

for(let j = 0; j < students.length; j++) {
    studentInfo += `<div style='background-color:red; color:white; margin: 10px; padding: 10px;'>Name: ${students[j][0]}<br>Vorname: ${students[j][1]}<br>Alter: ${students[j][2]}j. alt<br></div>`;
}

document.getElementById('students').innerHTML = studentInfo;

// =======================================

let studentAge = 0;
for(let k = 0; k < students.length; k++) {
    studentAge += students[k][2];
}

let averageAge = studentAge / students.length;

let infotafel = `Anzahl der Studenten: ${students.length} <br> Studenten sind insgesamt ${studentAge}j. alt <br> Durchschnittsalter der Studenten: ${averageAge} Jahre`;

document.getElementById('info').innerHTML = infotafel;