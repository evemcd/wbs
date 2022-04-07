"use strict";

//HTML-Daten per Ajax laden
let request = new XMLHttpRequest();
request.addEventListener('load', () => {
  if (request.status === 200) {
    let daten = request.responseText;
    document.getElementById('main').innerHTML = daten;
  }
});

request.open('GET', 'info.html', true);
request.send();

//========================================================================================================================

let login = document.getElementById('login');
let register = document.getElementById('register');

function seiteLaden(seitenName) {
  let request = new XMLHttpRequest();
  request.addEventListener('load', () => {
    if (request.status === 200) {
      let daten = request.responseText;
      document.getElementById('form').innerHTML = daten
    }
  });
  request.open('GET', seitenName + '.html', true);
  request.responseType = '';
  request.setRequestHeader('Accept', 'text/html');
  request.send();
};

//========================================================================================================================

login.addEventListener('click', (event) => {
  event.preventDefault();
  seiteLaden('login');
});

register.addEventListener('click', (event) => {
  event.preventDefault();
  seiteLaden('register');
});

//========================================================================================================================

let request2 = new XMLHttpRequest();
let ausgabe = '';
request2.addEventListener('load', () => {
  if (request2.status === 200) {
    let daten = request2.responseXML;
    let artists = daten.getElementsByTagName('artist');
    for (let i = 0; i < artists.length; i++) {
      let albums = artists[i].getElementsByTagName('album');
      ausgabe += "<ul class='list-group d-table my-2'>";
      ausgabe += "<li class='list-group-item fw-bold'>"+artists[i].getAttribute("name")+"</li>";
      for(let j = 0; j < albums.length; j++) {
        ausgabe += "<li class='list-group-item'>"+
                    albums[j].getElementsByTagName("titel")[0].childNodes[0].nodeValue+
                    " ( " + albums[j].getElementsByTagName("jahr")[0].childNodes[0].nodeValue+ " ) " +
                  "</li>"
      }
      ausgabe += "</ul>";
    }
  }
  //ende if
  document.getElementById('xmlDaten').innerHTML = ausgabe;
});

request2.open('GET', 'album.xml', true);
request2.responseType = 'document';
request2.setRequestHeader('Accept', 'text/xml');
request2.send();