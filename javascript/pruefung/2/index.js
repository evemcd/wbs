"use strict";

//ALTER
function convertBirthday(birthday) {
    const heute = new Date();
    const userBirthday = new Date(birthday.split('.').join('/'));
    let age = Math.floor((heute - userBirthday) / 1000 / 60 / 60 / 24 / 365);
    return age;
}

//JSON
let request = new XMLHttpRequest();
request.addEventListener('load', () => {
    if(request.status === 200) {
        let data = request.response;
        let users = data.user;
        for(let element of users) {
            let box = document.createElement('div');
            let motto = document.createElement('h2');
            let name = document.createElement('p');
            let geburtstag = document.createElement('p');
            let info = document.createElement('p');
            box.appendChild(motto);
            box.appendChild(name);
            box.appendChild(geburtstag);
            box.appendChild(info);
            motto.innerText = element.motto;
            name.innerText = element.anrede + ' ' + element.name + ' aus ' + element.ort;
            geburtstag.innerText = 'Geburtstag am: ' + element.geburtstag + ' (' + convertBirthday(element.geburtstag) + 'J. alt)';
            info.innerText = 'Kurze Info:\n' + element.info;
            box.classList = 'box';
            motto.classList = 'motto';
            name.classList = 'name';
            geburtstag.classList = 'geburtstag';
            info.classList = 'info';
        	document.getElementById("jsonDaten").appendChild(box);
        }
    }
})

request.open("GET", "user.json", true);
request.responseType = "json";
request.setRequestHeader("Accept", "application/json");
request.send();

//FORMULAR
document.getElementById('form').addEventListener('submit', (event) => {
    event.preventDefault();
    let name = document.getElementById('name');
    let vorname = document.getElementById('vorname');
    let mail = document.getElementById('mail');
    let tel = document.getElementById('tel');
	let anrede = document.querySelectorAll("input[name='anrede']");
    let checkedValue = '';

    let musterName = /^(Jensch)$/;
    let musterVorname = /^(Eve)$/;
    let musterMail = /^[a-zA-Z\-\_\.]{2,25}@[a-zA-Z\-\_\.]{2,25}$/;
    let musterTelefon = /^(\B)|([0-9]{5,})$/;

    if(!(anrede[0].checked || anrede[1].checked || anrede[2].checked)) {
        document.getElementById('alert').innerHTML = "Anrede wählen";
    } else if(name.value === '') {
        document.getElementById('alert').innerHTML = "Name darf nicht leer sein";
    } else if (!musterName.test(name.value)) {
        document.getElementById('alert').innerHTML = "Name ist falsch geschrieben";
    } else if(vorname.value === '') {
        document.getElementById('alert').innerHTML = "Vorname darf nicht leer sein";
    } else if (!musterVorname.test(vorname.value)) {
        document.getElementById('alert').innerHTML = "Vorname ist falsch geschrieben";
    } else if(mail.value === '') {
        document.getElementById('alert').innerHTML = "E-Mail darf nicht leer sein";
    } else if (!musterMail.test(mail.value)) {
        document.getElementById('alert').innerHTML = "E-Mail ist falsch geschrieben";
    } else if (!musterTelefon.test(tel.value)) {
        document.getElementById('alert').innerHTML = "Telefonnummer muss mindestens 5 Zahlen enthalten, keine Buchstaben oder Sonderzeichen";
    }

    for(let i = 0; i < anrede.length; i++) {
        if(anrede[i].checked) {
            checkedValue += anrede[i].value;
        }
    }
    let output = "Vielen Dank! <br>" + checkedValue + ' ' + name.value + ", " + vorname.value + "<br>E-Mail: " + mail.value + "<br> Telefon: " + tel.value;
    document.getElementById('output').innerHTML = output;
});