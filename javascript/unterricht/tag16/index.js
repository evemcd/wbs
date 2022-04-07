"use strict";

//Tabelle erstellen
function tableCreate() {
  let table = document.createElement('table');
  let tableHead = document.createElement('thead');
  let headerRow = document.createElement('tr');
  let headerName = document.createElement('th');
  let headerJahr = document.createElement('th');
  let tableBody = document.createElement('tbody');

  headerName.appendChild(document.createTextNode("Name des Albums"));
  headerJahr.appendChild(document.createTextNode("Erscheinungsjahr"));

table.appendChild(tableHead);
tableHead.appendChild(headerRow);
headerRow.appendChild(headerName);
headerRow.appendChild(headerJahr);
table.appendChild(tableBody);
table.classList = "table table-striped my-3 bg-light"
return table;
}


function createRow(name, jahr) {
  let row = document.createElement('tr');
  let tdName = document.createElement('td');
  let tdJahr = document.createElement('td');

  tdName.appendChild(document.createTextNode(name));
  tdJahr.appendChild(document.createTextNode(jahr));
  row.appendChild(tdName);
  row.appendChild(tdJahr);

  return row;
}


let request = new XMLHttpRequest();
request.addEventListener('load', () => {
  if(request.status === 200) {
    let xml = request.responseXML;
    let table = tableCreate();
    let artists = xml.querySelectorAll("artist");
    for(let artist of artists) {
      let albums = artist.querySelectorAll("album");
      for(let element of albums) {
        let row = createRow(element.querySelector("titel").textContent, element.querySelector("jahr").textContent);
        table.tBodies[0].appendChild(row);
      }
    }
    document.getElementById('xmlDaten').appendChild(table);
  }
});

request.open("GET", "album.xml", true);
request.responseType = "document";
request.setRequestHeader("Accept", "text/xml");
request.send();


//JSON
//=========================================================================
let daten = [
  {"vorname": "Angela", "alter" : 21},
  {"vorname": "Tom", "alter" : 2},
];

console.log(daten);
console.log(daten[0]);
console.log(daten[0]["vorname"]);
console.log(daten[0].alter);
//=========================================================================

//JSON-Daten per AJAX laden
let request2 = new XMLHttpRequest();
let table = tableCreate();
request2.addEventListener('load', () => {
  if(request2.status === 200) {
    let json = request2.response;
    let artist = json.artist;
    for(let wertArtist of artist) {
      let albums = wertArtist.albums;
      for(let wertAlbum of albums) {
        let row = createRow(wertAlbum.titel, wertAlbum.jahr);
        table.tBodies[0].appendChild(row);
      }
    }
  }
  document.getElementById('jsonDaten').appendChild(table);
});

request2.open("GET", "album.json", true);
request2.responseType = "json";
request2.setRequestHeader("Accept", "application/json");
request2.send();
