"use strict";

//Tabelle erstellen
function createTable() {
    let table = document.createElement('table');
    let tableHead = document.createElement('thead');
    let tableRow = document.createElement('tr');
    let headerName = document.createElement('th');
    let headerFirstname = document.createElement('th');
    let headerBirthday = document.createElement('th');
    let headerTown = document.createElement('th');
    let tableBody = document.createElement('tbody');


    headerName.appendChild(document.createTextNode("Name"));
    headerFirstname.appendChild(document.createTextNode("Vorname"));
    headerBirthday.appendChild(document.createTextNode("Geburtstag"));
    headerTown.appendChild(document.createTextNode("Wohnort"));

    table.appendChild(tableHead);
    tableHead.appendChild(tableRow);
    tableRow.appendChild(headerName);
    tableRow.appendChild(headerFirstname);
    tableRow.appendChild(headerBirthday);
    tableRow.appendChild(headerTown);
    table.appendChild(tableBody);


    table.classList = "table table-striped my-3 bg-light";
    return table;
};

//Zeile erstellen
function createRow(name, firstname, birthday, town) {
    let row = document.createElement('tr');
    let tdName = document.createElement('td');
    let tdFirstname = document.createElement('td');
    let tdBirthday = document.createElement('td');
    let tdTown = document.createElement('td');

    tdName.appendChild(document.createTextNode(name));
    tdFirstname.appendChild(document.createTextNode(firstname));
    tdBirthday.appendChild(document.createTextNode(birthday));
    tdTown.appendChild(document.createTextNode(town));

    row.appendChild(tdName);
    row.appendChild(tdFirstname);
    row.appendChild(tdBirthday);
    row.appendChild(tdTown);

    return row;
};

let request = new XMLHttpRequest();
let table = createTable();
request.addEventListener('load', () => {
    if (request.status === 200) {
        let json = request.response;
        let kunden = json.kunden;
        console.log(kunden);
        for (let kunde of kunden) {
            let row = createRow(kunde.name, kunde.vorname, kunde.geburtstag, kunde.wohnort);
            table.tBodies[0].appendChild(row);
        }
    }
    document.getElementById('jsonDaten').appendChild(table);
});

request.open("GET", "kunden.json", true);
request.responseType = "json";
request.setRequestHeader("Accept", "application/json");
request.send();