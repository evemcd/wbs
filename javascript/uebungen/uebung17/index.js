"use strict";

document.getElementById('submit').addEventListener('click', (event) => {
    event.preventDefault();
    let nameMuster = /^([A-Z][a-zA-ZäöüÄÖÜß\-]{2,25})$/;
    let strMuster = /^([A-Z][a-zA-ZäöüÄÖÜß\-]+\,+\s+[0-9a-z]+)$/;
    let plzMuster = /^[0-9]{5}$/;
    let ortMuster = /^(Hamburg|Schwerin|Hannover)$/;
    let mailMuster = /^[a-zA-Z0-9\-\.\_]{2,25}@[a-z\-\_\.]{3,15}\.(hh|sn|h)$/;

    let airport = document.getElementById('airport');
    let dauer = document.getElementById('dauer');
    let pers = document.getElementById('pers');
    let room = "";
    let room1 = document.getElementById('room1');
    let room2 = document.getElementById('room2');
    let room3 = document.getElementById('room3');
    let vn = document.getElementById('vn');
    let nn = document.getElementById('nn');
    let str = document.getElementById('str');
    let plz = document.getElementById('plz');
    let ort = document.getElementById('ort');
    let mail = document.getElementById('mail');

    let cb = document.querySelectorAll("input[name='request']");
    let cbRequest = "";
    for (let request of cb) {
        if (request.checked) {
            cbRequest += request.value + ", ";
        }
    }
    let cbR = cbRequest.slice(0, -2);


    if (airport.value === "auswahl") {
        alert("Bitte Abflughafen auswählen");
        airport.focus();
    } else if (dauer.value === "auswahl") {
        alert("Bitte Reisedauer auswählen");
        dauer.focus();
    } else if (pers.value === "auswahl") {
        alert("Bitte Reisende auswählen");
        pers.focus();
    } else if (!room1.checked && !room2.checked && !room3.checked) {
        alert("Bitte wählen Sie ein Zimmer aus");
    } else if ((pers.value === "3p") && (room1.checked)) {
        alert("3 Personen passen nicht in ein Einzelzimmer");
    } else if ((pers.value === "1p") && (room3.checked)) {
        alert("Das Familienzimmer ist zu groß für eine Person");
    } else if (vn.value === "") {
        alert("Vorname fehlt");
    } else if (!nameMuster.test(vn.value)) {
        alert("Muster für Name: \nHans");
        vn.focus();
    } else if (nn.value === "") {
        alert("Nachname fehlt");
    } else if (!nameMuster.test(nn.value)) {
        alert("Muster für Name: \nSchmidt");
        nn.focus();
    } else if (str.value === "") {
        alert("Straße fehlt");
    } else if (!strMuster.test(str.value)) {
        alert("Muster für Straße: \nMarktstraße, 22a");
        str.focus();
    } else if (plz.value === "") {
        alert("Postleitzahl fehlt");
    } else if (!plzMuster.test(plz.value)) {
        alert("Muster für PLZ: \n12345");
        plz.focus();
    } else if (ort.value === "") {
        alert("Wohnort fehlt");
    } else if (!ortMuster.test(ort.value)) {
        alert("Muster für Name: \nHamburg, Schwerin oder Hannover");
        ort.focus();
    } else if (mail.value === "") {
        alert("E-Mail fehlt");
    } else if (!mailMuster.test(mail.value)) {
        alert("Muster für E-Mail: \ntest@test.(hh|sn|h)");
        mail.focus();
    } else if (room1) {
        room = room1.value;
    } else if (room2) {
        room = room2.value;
    } else if (room3) {
        room = room3.value;
    }


    document.getElementById('ausgabe').innerHTML = `Vielen Dank für Ihre Buchung. <br> Ihr Abflughafen ist ${airport.value}. <br> Die Reisedauer beträgt ${dauer.value}. <br>
        Sie reisen mit ${pers.value}.   <br> Sie haben ein ${room} gebucht. <br> Ihre Daten: <br> ${vn.value} ${nn.value}<br>${str.value}<br>
        ${plz.value} ${ort.value}<br>${mail.value}<br>Ihre Wünsche: ${cbR}`;




});