"use strict";


//####################################################
//img erstellen ( <img src="" alt="" title="" > )
function imgCreate(bildName, titleWert) {
  let img = document.createElement("img");

  //das img-Element soll Attribute bekommen
  //setAttribute("nameDesAttributs", wasSollDortGespeichertWerden)
  img.setAttribute("src", bildName);
  img.setAttribute("alt", titleWert);
  img.setAttribute("title", titleWert)

  img.classList = "slides img-fluid  left";
  return img;
}
//------------------------------------
let request = new XMLHttpRequest();
request.addEventListener("load", () => {
    if(request.status === 200) {
      console.log("Datei gefunden");

      let json = request.response;
      let bilder = json.bilder;

      for(let element of bilder) {
        let img = imgCreate(element.bild, element.titel);
        document.getElementById("slider").appendChild(img);
      }
      slider();
    }
    else if(request.status === 404) {
      console.log("Datei leider nicht gefunden");
    }
});

request.open("GET","bilder.json",true);
request.responseType = "json";
request.setRequestHeader("Accept","application/json");
request.send();
//------------------------------------
let counter = 0;
let slider = function() {
  let bilder = document.querySelectorAll(".slides");
  for(let element of bilder) {
    //Alle Bilder erstmal ausblenden
    element.setAttribute("style","display: none;")
    console.log(element);
  }

  if(counter === bilder.length) {counter = 0;}
  //von einem Bild geht es zum anderen Bild
  //das Bild einblenden
  bilder[counter].setAttribute("style","display: block");
  counter++;
  setTimeout(slider, 3000)
}
//####################################################
let x = 20;
let r = 10;

function bewegen() {
  x += r;
  if(x > 800) r = -10;
  if(x < 20) r = 10;
  document.getElementById("box1").style.marginLeft = x+"px";
}

setInterval(bewegen, 20);

document.getElementById("links").addEventListener("click", () => {
  r = -10;
});

document.getElementById("rechts").addEventListener("click", () => {
  r = 10;
});

document.getElementById("stop").addEventListener("click", () => {
  r = 0;
});
/*
Da die Variable zur Steuerung r ja global angelegt wurde, kann sie im kompletten Dokument aufgegriffen werden.
So kann man ihr auch mit einem Click auf einen Button einen neuen Wert zuweisen.
Dadurch kann man die Richtung der Bewegung interaktiv verändern.
Und weist man der Variablen den Wett 0 zu, kann man sie sogar anhalten. 
*/
//####################################################
let links = document.querySelectorAll("#box2 img");

let einblenden = () => {
  for(let element of links) {
      element.addEventListener("click", (event) => {
				//document.getElementById("box").classList.add("box");
          let pfad = element.attributes["src"].value;
          //alert(pfad);
          document.querySelector("#box img").src = pfad;
          document.getElementById("box").style.display = "block";

          event.preventDefault();
          event.stopPropagation();
      });
  }
}

einblenden();

let ausblenden = () => {
  document.getElementById("box").style.display = "none";
}
//wenn aus das x klickt (steht in <div id="close">X</div>)
//dann soll die ganze Box verschwinden
document.getElementById("close").addEventListener("click", () => {
  ausblenden();
});





