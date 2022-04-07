"use strict";

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
    const currentTime = `${currentDate}/${currentMonth}/${currentYear} <br> ${currentHour}:${currentMinute}:${currentSecond}`;
    document.getElementById('date').innerHTML = currentTime;
}
timestamp();
setInterval(timestamp, 1000);



let prompt1 = prompt("Bitte eine Zahl eingeben");
const dollar = 1.33;
const pound = 1.28;
const francs = 1.2;
const yen = 136;

if (isNaN(prompt1)) {
    document.getElementById('errorField').innerHTML = "Bitte eine Zahl eingeben";
} else {
    prompt1 = parseInt(prompt1);
    let rows = '';
    rows += "<tr>";
    rows += `<th> Währungs-Rechner </th>`;
    rows += "</tr>";
    rows += "<tr>";
    rows += `<td>Wert</td>`;
    rows += `<td>Dollar</td>`;
    rows += `<td>Pfund</td>`;
    rows += `<td>Schweizer Franken</td>`;
    rows += `<td>Yen</td>`;
    rows += "</tr>";
    for (let i = 1; i < prompt1; i++) {
        rows += "<tr>";
        rows += `<td>${i} Euro</td>`;
        rows += `<td>${(i * dollar).toFixed(2)} $</td>`;
        rows += `<td>${(i * pound).toFixed(2)} GBP</td>`;
        rows += `<td>${(i * francs).toFixed(2)} SF</td>`;
        rows += `<td>${(i * yen).toFixed(2)} YEN</td>`;
        rows += "</tr>";
    }
    document.getElementById('money').innerHTML = rows;
}