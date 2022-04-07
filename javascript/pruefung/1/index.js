"use strict";

//Aufgabe2
let teilnehmer = ["Moritz", "Eve", "MAX", "Angela", "jerry"];

document.getElementById('ausgabe1').innerHTML = `Anzahl der Teilnehmer: ${teilnehmer.length}`;
document.getElementById('ausgabe2').innerHTML = teilnehmer.join(' <<=>> ');

//Aufgabe3

let liste = '';
let eve = teilnehmer.indexOf("Eve");


for (let i = 0; i < teilnehmer.length; i++) {
    let wort = teilnehmer[i].toLowerCase();
    let wort2 = wort.charAt(0).toUpperCase() + wort.slice(1);
    if (i === eve) {
        liste += `<li style='background-color:lightblue;color:red;padding:10px;margin:5px 0;'><strong>${wort2}</strong> </li>`;
    } else {
        liste += `<li style='background-color:lightblue;padding:10px;margin:5px 0;'>${wort2} </li>`;
    }
}

document.getElementById('ausgabe3').innerHTML = liste;


//Datum, Uhrzeit

let timestamp = () => {
    const today = new Date();
    let currentDate = today.getDate();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    let currentHour = today.getHours();
    let currentMinute = today.getMinutes();
    let currentSecond = today.getSeconds();


    if (currentMonth < 10) {
        currentMonth = '0' + currentMonth;
    }
    if (currentDate < 10) {
        currentDate = '0' + currentDate;
    }
    if (currentHour < 10) {
        currentHour = '0' + currentHour;
    }
    if (currentMinute < 10) {
        currentMinute = '0' + currentMinute;
    }
    if (currentSecond < 10) {
        currentSecond = '0' + currentSecond;
    }
    const currentTime = `${currentDate}\\${currentMonth}\\${currentYear}   ${currentHour}::${currentMinute}::${currentSecond}`;
    document.getElementById('uhr').innerHTML = currentTime;
}
timestamp();
setInterval(timestamp, 1000);


// Form
function klicken(event) {
    event.preventDefault();
    let htmlString = '';
    const nn = document.getElementById('nn').value;
    const vn = document.getElementById('vn').value;
    const email = document.getElementById('email').value;
    const ort = document.getElementById('ort').value;
    if(nn === '') {
        htmlString += "Name fehlt<br>";
    }
    if(vn === '') {
        htmlString += "Vorname fehlt<br>";
    }
    if(email === '') {
        htmlString += "E-Mail fehlt<br>";
    }
    if(ort === '') {
        htmlString += "Ort fehlt<br>";
    }
    if(nn && vn && email && ort) {
        htmlString = `<p>Vielen Dank<br>${nn}, ${vn} aus ${ort}<br>E-Mail: ${email}</p>`;
    }
    document.getElementById('ausgabe4').innerHTML = htmlString;
}
document.getElementById('submit').addEventListener("click", klicken);



//Array-Objekt

let teilnehmerInfo = [
    {anrede: 'm', name: 'Carsten', ort: 'Paris', geburtstag: '1990.01.01'},
    {anrede: 'w', name: 'Meryem', ort: 'Hamburg', geburtstag: '2000.01.01'},
    {anrede: 'm', name: 'Dennis', ort: 'Dubai', geburtstag: '1995.01.01'},
    {anrede: 'w', name: 'Grace', ort: 'Sylt', geburtstag: '2000.01.01'},
    {anrede: 'm', name: 'Hans-Josef', ort: 'Bankok', geburtstag: '1993.01.01'},
];

let htmlString = '';

for(let j = 0; j < teilnehmerInfo.length; j++) {
    if(teilnehmerInfo[j].anrede === "m") {
        htmlString += `<div class='divStyle'><p style='background-color:#efefef;'>Herr ${teilnehmerInfo[j].name}</p><p>Wohnort: ${teilnehmerInfo[j].ort}</p><p>Geburtstag: ${teilnehmerInfo[j].geburtstag}</p></div>`
    }
    if(teilnehmerInfo[j].anrede === "w") {
        htmlString += `<div class='divStyle'><p style='background-color:#62cef1;'>Frau ${teilnehmerInfo[j].name}</p><p>Wohnort: ${teilnehmerInfo[j].ort}</p><p>Geburtstag: ****</p></div>`
    }
}

document.getElementById('ausgabe5').innerHTML = htmlString;