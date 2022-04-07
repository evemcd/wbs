"use strict";

//<img src="" alt="" title="">
function imgCreate(bildName, titleWert) {
  let img = document.createElement('img');                      //erzeugt das img tag
  img.setAttribute('src', bildName);                            //erzeugt die Attribute src, alt und title
  img.setAttribute('alt', titleWert);
  img.setAttribute('title', titleWert);
  img.classList = 'slides img-fluid left';                      //erzeugt css Klassen im img tag
  return img;
}

//============================================================================================================

let request = new XMLHttpRequest();
request.addEventListener('load', () => {                        //wenn request geladen wurde
  if(request.status === 200) {                                  //wenn die Datei gefunden wurde
    console.log("Datei wurde gefunden");
    let json = request.response;
    let bilder = json.bilder;
    for(let element of bilder) {
      let img = imgCreate(element.bild, element.titel);
      document.getElementById('slider').appendChild(img);       //in der div slider füge ein Kind-Element mit den Bildern aus JSON aus
    }
    slider();
  } else if(request.status === 404) {                           //wenn die Datei nicht gefunden wurde
    console.log("Datei wurde nicht gefunden");
  }
})

request.open("GET","bilder.json",true);                         //true = Anweisung soll asynchron ausgeführt werden
request.responseType = "json";                                  //Ausgabe ist eine  JSON Datei
request.setRequestHeader("Accept", "application/json");
request.send();

//============================================================================================================

let counter = 0;
let slider = function() {
  let bilder = document.querySelectorAll(".slides");
  for(let element of bilder) {
    element.setAttribute('style', 'display: none;');            //das Element bekommt ein Attribut style display none, die Bilder sollen erst einmal nicht angezeigt werden
    console.log(element);
  }

  if(counter === bilder.length) {                               //wenn alle Bilder durchgezählt sind
    counter = 0;                                                //auf 0 zurück setzen und neu zählen
  }
  bilder[counter].setAttribute('style', 'display: block;');     //zeigt das erste Bild an
  counter++;                                                    //zählt die Bilder eins nach dem anderen durch
  setTimeout(slider, 3000);
}

//============================================================================================================

let x = 20;
let r = 10;

function bewegen() {
  x += r;
  if(x > 500) r = -10;                                          //bei nur einer Anweisung kann {} weggelassen werden
  if(x < 20) r = 10;
  document.getElementById('box1').style.marginLeft = x + 'px';
}

setInterval(bewegen, 20);

document.getElementById('links').addEventListener('click', () => {
  r = -10;
});

document.getElementById('rechts').addEventListener('click', () => {
  r = 10;
});

document.getElementById('stop').addEventListener('click', () => {
  r = 0;
});

//============================================================================================================

let links = document.querySelectorAll('#box2 img');
let einblenden = () => {
  for(let element of links) {
    element.addEventListener('click', (event) => {
      event.preventDefault();
      let pfad = element.attributes['src'].value;
      // alert(pfad);
      document.querySelector('#box img').src = pfad;
      document.getElementById('box').style.display = 'block';
    });
  }
}

einblenden();

document.getElementById('close').addEventListener('click', () => {
  document.getElementById('box').style.display = 'none';

})