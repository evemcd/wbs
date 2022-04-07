"use strict";

let prompt1 = prompt("Wie viele Zeilen brauchen Sie?");
let prompt2 = prompt("Wie viele Spalten brauchen Sie?");

document.getElementById('output1').innerHTML = `Ihre Angaben sind: <br> Zeilen = ${prompt1} <br> Spalten = ${prompt2}`

if(isNaN(prompt1) || isNaN(prompt2)) {
    document.getElementById('errorField').innerHTML = "NUR Zahlen sind erlaubt";
} else {
    prompt1 = parseInt(prompt1);
    prompt2 = parseInt(prompt2);
    let rows = '';
        rows += "<tr>";
        rows += `<th> Tabelle mit ${prompt1} Zeilen und ${prompt2} Spalten </th>`;
        rows += "</tr>";
    for(let i = 1; i < prompt1; i++) {
        rows += "<tr>";
        for(let j = 1; j < prompt2; j++){
            rows += `<td>${i}x${j}</td>`;
        }
        rows += "</tr>";
    }
    document.getElementById('table').innerHTML = rows;
}