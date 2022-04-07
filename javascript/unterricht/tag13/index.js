"use strict";

document.getElementById('form1').addEventListener('submit', (event) => {
  event.preventDefault();
  //-------- //sind Begrenzer
  // let nameMuster = /a/;                                                          a muss vorkommen
  // let nameMuster = /abcde/;                                                      abcde muss genau in der Reihenfolge vorkommen, egal was davor oder danach kommt
  // let nameMuster = /./;                                                          ein beliebiges Zeichen
  //let nameMuster = /[abcde]/;                                                     darf beliebige Zeichen enthalten aber mindestens einen aus der Liste
  // let nameMuster = /^P/;                                                         muss mit P beginnen (Zirkumflex^)
  // let nameMuster = /s$/;                                                         muss mit s enden
  // let nameMuster = /Kuchen$/;                                                    muss mit Kuchen enden
  // let nameMuster = /\bsport\/;                                                   Wortgrenze (border), muss das Wort sport alleine stehend enthalten
  // let nameMuster = /^abcdf?$/;                                                   ? bezieht sich auf das f, es kann vorkommen aber maximal einmal, abcd muss vorkommen. Mögliche Eingabe: abcd oder abcdf
  // let nameMuster = /^abcdf*$/;                                                   * bezieht sich auf f, muss f nicht schreiben aber kann beliebig oft, abcd muss vorkommen
  // let nameMuster = /^abcdf+$/;                                                   f muss mindestens einmal vorkommen
  // let nameMuster = /^abcdf{2}$/;                                                 f muss und darf nur zweimal vorkommen
  // let nameMuster = /^abcdf{2,}$/;                                                f muss mindestens 2 mal vorkommen
  // let nameMuster = /^abcdf{2,4}$/;                                               f muss mindestes 2 mal und maximal 4 mal vorkommen
  // let nameMuster = /^[a-z]$/;                                                    alle Kleinbuchstaben von a-z
  // let nameMuster = /^[a-zA-Z]$/;                                                 alle Groß- und Kleinbuchstaben
  // let nameMuster = /^[a-zA-ZäöüÄÖÜß\-]$/;                                        alle diese Zeichen und -
  // let nameMuster = /^[a-zA-ZäöüÄÖÜß\-\s\.]{2,10}$/;                              \s erlaubt ein einzelnes Leerzeichen
  let nameMuster = /^[a-zA-ZäöüÄÖÜß\-\s\.]{2,10}$/;                                 //
  let ortMuster = /^(Dortmund|senftenberg|HILDESHEIM|berlin|geRA)$/i;               //ignore case (egal ob groß oder klein)
  // let plzMuster = /^[\d]{5}/;                                                    //digits anstatt 0-9
  let plzMuster = /^[0-9]{5}$/;
  //Straßenname Hausnummer (Kingstr. 123b)
  let strMuster = /^[a-zA-Z\-\.äöüÄÖÜß]{2,10}\s[0-9a-z]{1,5}$/;                      //^$ Beginn und Ende vom Muster, \s nach max 10 Zeichen soll ein Leerzeiche kommen (??)
  //chris@chris.de  wolf@web.de   melda@vodafone.de
  let mailMuster = /^[a-zA-Z0-9\-\.\_]{2,10}@[a-z\-]{3,10}\.[a-z]{2,5}$/;



  //--------
  let nachname = document.getElementById('nachname');
  let vorname = document.getElementById('vorname');
  let ort = document.getElementById('ort');
  let plz = document.getElementById('plz');
  let str = document.getElementById('str');
  let mail = document.getElementById('mail');
  //--------
  //ist Nachname leer?
  if(nachname.value === "") {                                                 //.value hätte auch in der Variablen genannt werden können, aber wir wollen die Variable noch anders nutzen
    alert("Nachname darf nicht leer sein");
    nachname.focus();                                                         //hebt das Feld hervor
  }
  //ist Nachname richtig? test liefert true oder false
  else if(!nameMuster.test(nachname.value)) {                                 //wenn nachname.value nicht mit dem Muster übereinstimmt
    alert("Muster für Nachname: \nMerkel - Nur Buchstaben");
    nachname.focus();
  } else if(vorname.value === "") {
    alert("Vorname darf nicht leer sein");
    vorname.focus();
  } else if(!nameMuster.test(vorname.value)) {
    alert("Muster für Vorname: \nAngela, Hans Peter - Nur Buchstaben");
    vorname.focus();
  } else if(ort.value === "") {
    alert("Wohnort darf nicht leer sein");
    ort.focus();
  } else if(!ortMuster.test(ort.value)) {
    alert("Muster für Wohnort: \nDortmund - Nur Buchstaben");
    ort.focus();
  } else if(str.value === "") {
    alert("Straße darf nicht leer sein");
    str.focus();
  } else if(!strMuster.test(str.value)) {
    alert("Muster für Straße: \nKingstr. 123b");
    str.focus();
  } else if(plz.value === "") {
    alert("PLZ darf nicht leer sein");
    plz.focus();
  } else if(!plzMuster.test(plz.value)) {
    alert("Muster für PLZ: \n12345");
    plz.focus();
  } else if(mail.value === "") {
    alert("E-Mail darf nicht leer sein");
    mail.focus();
  } else if(!mailMuster.test(mail.value)) {
    alert("Muster für E-Mail: \ntest@test.de");
    mail.focus();
  } else if(document.getElementById('beruf').options[0].selected) {             //erste Option aus dem Dropdown automatisch selected
    alert('Haben Sie einen Beruf?')
  } else {
    alert(
      nachname.value + ', ' + vorname.value +
      '\n' + str.value +
      '\n' + plz.value + ' ' + ort.value +
      '\n' + mail.value +
      '\nBeruf: ' + document.getElementById('beruf').value
    );
  }
})


//==================================================================================================================================
function isNumber(wert) {
  let muster = /^[\d\.]+$/;
  return muster.test(wert);
}
//--------------------------
let hoch = document.getElementById('hoch');
let gewicht = document.getElementById('gewicht');

let rechner = function(event) {
  let height = parseFloat(hoch.value.replace(",","."));                                          //Eingabe ist ein String, parseFloat wandelt in eine Kommazahl um
  let weight = parseFloat(gewicht.value.replace(",","."));
  let bmi = (weight / (height * height)).toFixed(2);

  if(isNumber(hoch.value) && isNumber(gewicht.value)) {
  document.getElementById('result').innerText = bmi;
  } else {
    document.getElementById('result').innerText = " XXX ";
  }
  event.preventDefault(); 
}
document.getElementById('bmi_rechner').addEventListener('click', rechner);

hoch.addEventListener('change', rechner);                                                         //rechnet schon bevor berechnen geklickt wird
gewicht.addEventListener('change', rechner);

hoch.addEventListener('keyup', rechner);                                                          //rechnet schon wenn getippt wird
gewicht.addEventListener('keyup', rechner);


