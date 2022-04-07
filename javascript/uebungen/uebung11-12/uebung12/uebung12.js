"use strict";

let kurs1 = ["\x45\x76\x65", "\x41\x6E\x64\x72\x65\x61\x73", "\x53\x74\x65\x66\x66\x65\x6E"];
let kurs2 = ["\x50\x61\x75\x6C", "\x47\x72\x61\x63\x65", "\x42\x65\x6E\x6A\x61\x6D\x69\x6E", "\x48\x61\x6C\x69\x6C"];

console.log(kurs1);
console.log(kurs2);

if (kurs1.indexOf("Halil") !== -1) {
    document.getElementById('kursHalil').innerHTML = 'Halil ist in Kurs 1 angemeldet.';
    kurs1.push("Klaus");
} else if (kurs2.indexOf("Halil") !== -1) {
    document.getElementById('kursHalil').innerHTML = 'Halil ist in Kurs 2 angemeldet.';
    kurs2.push("Klaus");
} else {
    document.getElementById('kursHalil').innerHTML = 'Halil ist nicht angemeldet.';
}

const kursTn = kurs1 + kurs2;
document.getElementById('teilnehmer').innerHTML = kursTn;
let kurstn1 = '';
let kurstn2 = '';

for (let i = 0; i < kurs1.length; i++) {
    kurstn1 += `<div style='background-color:blue; padding:10px; margin:10px;'>${kurs1[i]}<br>(${kurs1[i].length}) Zeichen lang.</div>`;
}

document.getElementById('alleTeilnehmer1').innerHTML = kurstn1;

for (let j = 0; j < kurs2.length; j++) {
    kurstn2 += `<div style='background-color:green; padding:10px; margin:10px;'>${kurs2[j]}<br>(${kurs2[j].length}) Zeichen lang.</div>`;
}

document.getElementById('alleTeilnehmer2').innerHTML = kurstn2;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Rechner
let rechnerElement = document.getElementById('rechnerElement');
// let rechnerElement2 = document.getElementById('rechnerElement2');
let klicken = function () {
    let input = prompt("Bitte eine Zahl eingeben");

    while (isNaN(input) || input == null) {
        input = prompt("Bitte eine Zahl eingeben");
    }

    if (!isNaN(input)) {
        input = parseInt(input);
        for (let k = 1; k <= input; k++) {
            document.getElementById("rechner").innerHTML += "<li style='background-color:lightblue; padding:10px; margin:10px;'>" + k + " x " + k + " = " + (k * k) + "</li>";
        }
    }
}

rechnerElement.addEventListener("click", klicken);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Datum

let timestamp = () => {
    const today = new Date();
    let currentDate = today.getDate();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    let currentHour = today.getHours();
    let currentMinute = today.getMinutes();
    let currentSecond = today.getSeconds();


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
    const currentTime = `${currentDate}/${currentMonth}/${currentYear}   ${currentHour}:${currentMinute}:${currentSecond}`;
    document.getElementById('uhr').innerHTML = currentTime;
}
timestamp();
setInterval(timestamp, 1000);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Anmeldung

// let submitBtn = document.getElementById('submit');
let submitClick = function (event) {
    event.preventDefault();
    let nnInput = prompt("Bitte Ihren Nachnamen eingeben!");
    document.getElementById('nn').value = nnInput;
    let vnInput = prompt("Bitte Ihren Vornamen angeben!");
    document.getElementById('vn').value = vnInput;
}
document.getElementById('submit').addEventListener("click", submitClick);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Erdkunde


let formSubmit = (event) => {
    let quizAnswer = document.getElementById('answer').value.toLowerCase();
    let docErdkunde = document.getElementById('erdkunde');
    event.preventDefault();
    switch (quizAnswer) {
        case "moskau":
            docErdkunde.innerHTML = "Moskau liegt nicht Weißrussland!";
            break;
        case "kiev":
            docErdkunde.innerHTML = "Kiev ist in der Ukraine!";
            break;
        case "minsk":
            docErdkunde.innerHTML = "Ihre Antwort Minsk ist richtig!";
            break;
        default:
            docErdkunde.innerHTML = "Leider nicht richtig!"
            break;
    }
}

document.getElementById('submitQuiz').addEventListener("click", formSubmit);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Impressionen

const images = {
    1: {
        src: "images/hamburg-1.jpg",
        caption: "Hamburg"
    },
    2: {
        src: "images/landungsbruecken.jpg",
        caption: "Landungsbrücken"
    },
    3: {
        src: "images/speicherstadt.jpg",
        caption: "Speicherstadt"
    },
    4: {
        src: "images/st-peter-ording.jpg",
        caption: "St. peter Ording"
    }
}

const random = Math.floor(Math.random() * 4) + 1;
const randomSelected = images[random];
console.log(randomSelected);
document.getElementById('impressionen').innerHTML = `<figure><img src="${randomSelected.src}"><figcaption>${randomSelected.caption}</figcaption></figure>`