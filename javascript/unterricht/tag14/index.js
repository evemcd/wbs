"use strict";

let newStudent = document.getElementById('newStudent');
let liste = document.getElementById('liste');
let form1 = document.getElementById('form1');

form1.addEventListener('submit', (event) => {
  event.preventDefault();

  if(newStudent.value === '') {
    return;
  }

  let farben = [
    'list-group-item-info',
    'list-group-item-danger',
    'list-group-item-light',
    'list-group-item-success',
    'list-group-item-warning',
    'list-group-item-primary',
    'list-group-item-secondary'
  ];

  let zufall = Math.floor(Math.random() * farben.length);
  // console.log(zufall);
  // console.log(farben[zufall]);

  let liElement = document.createElement('li');                                   //nicht nur der Name soll eingefügt werden sondern auch ein listen-element
  liElement.innerText = newStudent.value;
  //liElement.classList.add('list-group-item', 'list-group-item-info');           //statisches styling
  liElement.classList.add('list-group-item', farben[zufall]);
  liste.appendChild(liElement);                                                   //appendChild fügt liste ein Kind-Element am Ende hinzu
  // liste.prependChild(liElement);                                                  //prependChild fügt liste ein Kind-Element am Anfang hinzu

})

//=============================================================================================

let strongElement = document.createElement('strong');
let divElement = document.createElement('div');
let anmelden = document.getElementById('anmelden');
let ausgabe = document.getElementById('ausgabe');

let newElement = (msg, element) => {                                              //erstellt ein neues Element
  strongElement.innerText = msg;
  strongElement.classList.add('text-danger');                                     //spricht die Klassen an und fügt eine hinzu
  divElement.appendChild(strongElement);                                          //fügt das strong Element nach dem div zu
  element.after(divElement);                                                      //was soll nach dem Element dargestellt werden
}

anmelden.addEventListener('click', (event) => {
  event.preventDefault;
  let name = document.getElementById('nachname');
  let vorname = document.getElementById('vorname');
  let geb = document.getElementById('geb');
  let tel = document.getElementById('tel');
  let heirat = document.getElementById('heirat');
  let beruf = document.getElementById('beruf');
  let nameMuster = /^[a-z\.\-\_äöüß]{2,}$/i;
  let gebMuster = /^(0[1-9]{1}|[1-2]{1}[0-9]{1}|3[0-1]{1})\.(0[1-9]{1}|1[0-2]{1})\.((19|20)[0-9]{2})$/;
  let telMuster = /^(\+|0{2})\d{2}\s\d{2}\s\d{5,10}$/;
  let heiratMuster = /^(?<tag>\d{2})-(?<monat>\d{2})-(?<jahr>\d{4})$/;
  //checkboxen auswerten
  let cb = document.querySelectorAll("input[name='cb']");
  let cbWert = "";
  for(let wert of cb) {
    if(wert.checked) {
      cbWert += wert.value + " ";
    }
  }

  if(!nameMuster.test(name.value)) {
    strongElement.innerText = "Name ist ein Pflichtfeld!";
    strongElement.classList.add('text-danger');
    // name.before(strongElement);
    // name.after(strongElement);
    newElement('Name ist ein Pflichtfeld!', name);
    nameMuster.focus();
  } else if(!nameMuster.test(vorname.value)) {
    newElement('Vorname ist ein Pflichtfeld!', vorname);
    vorname.focus();
  } else if(!gebMuster.test(geb.value)) {
    newElement('Geburtstag ist ein Pflichtfeld! Muster für Geburtstag: TT.MM.JJJJ', geb);
    geb.focus();
  } else if(!telMuster.test(tel.value)) {
    newElement('Telefon ist ein Pflichtfeld! Muster für Telefon: +49 40 123456', tel);
    tel.focus();
  } else if(!heiratMuster.test(heirat.value)) {
    newElement('Heirat ist ein Pflichtfeld! Muster für Heirat: TT-MM-JJJJ', heirat);
    heirat.focus();
  } else if(beruf.value === 'Bitte auswählen') {
    newElement('Haben Sie einen Beruf?', beruf);
    beruf.focus();
  } else if(beruf.options[1].selected && cb[1].checked) {
    newElement('Ein Soldat sollte nicht tanzen', beruf);
  } else {
    divElement.remove();
    const marriage = heiratMuster.exec(heirat.value);
    ausgabe.innerHTML = "<p>Vielen Dank!</p>" + 
                        "<p>" + name.value + ", " + vorname.value + "</p>" + 
                        "<p>Geboren am: " + geb.value + "</p>" + 
                        "<p>Beruf: " + beruf.value + "</p>" + 
                        "<p>Hobbies: " + cbWert + "</p>" + 
                        "<p>Dein Heiratsjahr: " + marriage.groups.jahr + "</p>"; +
                        "<p>Dein Heiratsmonat: " + marriage.groups.monat + "</p>"; +
                        "<p>Dein Heiratstag: " + marriage.groups.tag + "</p>";

  }

})
