"use strict";

let uhr = () => {
    const heute = new Date();
    let tag = heute.getDate();
    let monat = heute.getMonth();
    let jahr = heute.getFullYear();
    let stunde = heute.getHours();
    let minute = heute.getMinutes();
    let sekunde = heute.getSeconds();

    if (tag <= 9) {
        tag = "0" + tag;
    }
    if (monat <= 9) {
        monat = "0" + monat;
    }
    if (jahr <= 9) {
        jahr = "0" + jahr;
    }
    if (stunde <= 9) {
        stunde = "0" + stunde;
    }
    if (minute <= 9) {
        minute = "0" + minute;
    }
    if (sekunde <= 9) {
        sekunde = "0" + sekunde;
    }
    const datum = `${tag}-${monat}-${jahr}`;
    const zeit = `${stunde}:${minute}:${sekunde}`;
    document.getElementById('datum').innerHTML = datum;
    document.getElementById('zeit').innerHTML = zeit;
}
uhr();
setInterval(uhr, 1000);

//**************************************************************************************************************
let redElement = document.createElement('span');
let divElement = document.createElement("div");
let submit = document.getElementById("submit");
let ausgabe = document.getElementById("ausgabe");


let newElement = (msg, element) => {
    redElement.innerText = msg;
    redElement.classList.add("text-danger");
    divElement.appendChild(redElement);
    element.after(divElement);
  }

submit.addEventListener("click", (event) => {
    event.preventDefault();
    let name = document.getElementById("name");
    let vorname = document.getElementById("vorname");
    let ort = document.getElementById("ort");
    let mail = document.getElementById("mail");
    let nameMuster = /^[a-zA-ZäöüßÄÖÜ\-]{2,20}$/;
    let ortMuster = /^(Sylt|Paris|Hamburg)$/;
    let mailMuster = /^[a-zA-Z0-9]{2,20}@(paris\.de|hamburg\.de|sylt\.de)$/;

    if(!nameMuster.test(name.value)) {
        newElement("Nachname ist ein Pflichtfeld! Muster: Mustermann", name);
            name.focus();
            ausgabe.innerHTML = "";
      } else if(!nameMuster.test(vorname.value)) {
        newElement("Vorname ist ein Pflichtfeld! Muster: Max", vorname);
            vorname.focus();
            ausgabe.innerHTML = "";
      } else if(!ortMuster.test(ort.value)) {
        newElement("Wohnort ist ein Pflichtfeld!", ort);
            ort.focus();
            ausgabe.innerHTML = "";
      } else if(!mailMuster.test(mail.value)) {
        newElement("E-Mail ist ein Pflichtfeld!", mail);
            mail.focus();
            ausgabe.innerHTML = "";
      } else {
        divElement.remove();
      }

      ausgabe.innerHTML = "<p style='background-color:lightblue;color:white;'>Vielen Dank für Ihre Angaben</p>" +
                            "<p>" + name.value.toUpperCase() + " " + vorname.value.toUpperCase() + "</p>" +
                            "<p>Wohnort: " + ort.value.toUpperCase() + "</p>" +
                            "<p>E-Mail: " + mail.value + "</p>";

});