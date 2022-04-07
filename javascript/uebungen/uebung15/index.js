"use strict";

document.getElementById('form1').addEventListener('submit', (event) => {
    event.preventDefault();
    let nameOrtMuster = /^([A-Z][a-zA-ZäöüÄÖÜß\-]{2,25})$/;
    let strMuster = /^([a-zA-ZäöüÄÖÜß\-]+\,+\s+[0-9a-z]+)$/;
    let plzMuster = /^[0-9]{7}$/;
    let fonMuster = /^[0-9]{4}\s[0-9]{2,6}\s[0-9]{2,10}$/;
    let mailMuster = /^[a-zA-Z0-9\-\.\_]{2,20}@[a-z\-]{3,15}\.[a-z]{2,5}$/;
    let name = document.getElementById('name');
    let vorname = document.getElementById('vorname');
    let str = document.getElementById('str');
    let plz = document.getElementById('plz');
    let ort = document.getElementById('ort');
    let fon = document.getElementById('fon');
    let mail = document.getElementById('mail');
    let pw1 = document.getElementById('pw1');
    let pw2 = document.getElementById('pw2');
    let beruf = document.getElementById('beruf');
    let golf = document.getElementById('golf');
    let keinSport = document.getElementById('kein');



    if (name.value === "") {
        alert("Name darf nicht leer sein");
        name.focus();
    } else if (!nameOrtMuster.test(name.value)) {
        alert("Muster für Name: \nSchmidt, Meier-Schmidt - Nur Buchstaben und -");
        name.focus();
    } else if (vorname.value === "") {
        alert("Vorname darf nicht leer sein");
        vorname.focus();
    } else if (!nameOrtMuster.test(vorname.value)) {
        alert("Muster für Vorame: \nHans, Anna-Maria - Nur Buchstaben und -");
        vorname.focus();
    } else if (str.value === "") {
        alert("Straße darf nicht leer sein");
        str.focus();
    } else if (!strMuster.test(str.value)) {
        alert("Muster für Straße: \nMarktstraße, 22a");
        str.focus();
    } else if (plz.value === "") {
        alert("PLZ darf nicht leer sein");
        plz.focus();
    } else if (!plzMuster.test(plz.value)) {
        alert("Muster für PLZ: \n1234567 - 7 Zahlen");
        plz.focus();
    } else if (ort.value === "") {
        alert("Wohnort darf nicht leer sein");
        ort.focus();
    } else if (!nameOrtMuster.test(ort.value)) {
        alert("Muster für Ort: \nBerlin - Nur Buchstaben");
        ort.focus();
    } else if (fon.value === "") {
        alert("Telefon darf nicht leer sein");
        fon.focus();
    } else if (!fonMuster.test(fon.value)) {
        alert("Muster für Telefon: \n0049 40 123456");
        fon.focus();
    } else if (mail.value === "") {
        alert("E-Mail darf nicht leer sein");
        mail.focus();
    } else if (!mailMuster.test(mail.value)) {
        alert("Muster für E-Mail: \ntest@test.de");
        mail.focus();
    } else if (pw1.value === "") {
        alert("Passwort darf nicht leer sein");
        pw1.focus();
    } else if (pw2.value === "") {
        alert("Passwort darf nicht leer sein");
        pw2.focus();
    } else if (pw1.value !== pw2.value) {
        alert("Passwörter stimmen nicht überein.")
    }

    if((beruf.value === "Soldat") && (golf.checked)) {
        alert("Kannst du dir nicht leisten");
    } else if((beruf.value === "Manager") && (keinSport.checked)) {
        alert("Ein bisschen Sport schadet nie");
    } else {                                                                        //NOT WORKING!!!!!!!!!!!
		alert("Vielen Dank für Ihre Angaben"+
		"\nName: "+name.value+"\n"+
		"Vorname: "+vorname.value+"\n"+
		"Strasse: "+str.value+"\n"+
		"PLZ: "+plz.value+"\n"+
		"Wohnort: "+ort.value+"\n"+
		"Telefon: "+fon.value+"\n"+
		"E-Mail: "+mail.value+"\n"+
		"Beruf: "+beruf.value+"\n"+
		"Hobbys: ");
		
	}


});