"use strict";

//++++++++++++++++++++++++++++++++++++++++++++++++++++
//####################################################
//img erstellen
function imgCreate(src, title) {
	let figure = document.createElement("figure");
	let figCap = document.createElement("figcaption");
  let img = document.createElement("img");
	img.setAttribute('src', src);
	img.setAttribute('alt', title);
	img.setAttribute('title', title);

	figCap.appendChild(document.createTextNode(title));
	
  figure.classList = "slides left";
	figCap.style="color: #fff; text-align: center; padding: 5px;";
	img.classList = "img-fluid";
	figure.appendChild(img);
	figure.appendChild(figCap);
  return figure;
}


let request = new XMLHttpRequest();
request.addEventListener("load", () => {
  if(request.status === 200) {
   console.log("Datei  gefunden");
	 let  json = request.response;
	 let  bilder = json.bilder;
	 for(let element of bilder) {
		 let img = imgCreate(element.bild,element.titel);
		 //console.log(element.bild);
		document.getElementById("slider").appendChild(img);
	 }
	 slider();
  }
	else if(request.status === 404) {
		console.log("Datei nicht gefunden");
  }
 
});

request.open("GET","bilder.json",true);
request.responseType = "json";
request.setRequestHeader("Accept", "application/json");
request.send();	
//-----------------------------
let counter = 0;
let slider = function(){
	let bilder = document.querySelectorAll(".slides");
	for(let element of bilder) {
		element.setAttribute("style","display: none;");
		//console.log(element);
	}
	
	if(counter === bilder.length) counter=0;
	bilder[counter].setAttribute("style","display: block;");
	counter++;
	setTimeout(slider, 5000);
}
//####################################################

let daten = "";
let request1 = new XMLHttpRequest();
request1.addEventListener("load", (event) => {
	if(request1.status === 200) {
		let  xml = request1.responseXML;
		
			let kurs = xml.querySelectorAll("kurs");

			for(let element of kurs) {
				daten += "<div class='card my-2'>";
				daten += "<div class='card-header'>";
				daten += "<i class='fas fa-angle-double-right fs-5 me-2'></i>";
				daten +="<strong>"+element.getAttribute('titel') +"</strong>";
				daten +="</div>";
				daten += "<div class='card-body'>";
				daten +="<p><strong>Inhalt: </strong><br />"+element.querySelector("inhalt").textContent +"</p>";
				daten +="<p><strong>Voraussetzung: </strong><br />"+element.querySelector("voraussetzung").textContent +"</p>";
				daten +="<p><strong>Beschreibung: </strong><br />"+element.querySelector("beschreibung").textContent +"</p>";
				daten += "</div>";
				daten += "</div>";
			}
			
		}
		
		document.getElementById("xmlDaten").innerHTML = daten;
		karten();
	});
	
request1.open("GET","kurse.xml",true);
request1.responseType = "document";
request1.setRequestHeader("Accept", "text/xml");
request1.send();	
//----------------------------------------------------------
//card-header
let karten = function () {
let cardHeaders = document.getElementsByClassName('card-header');
for(let wert of cardHeaders) {
  //vor dem Klick definieren
  let cardBody = wert.nextElementSibling;
	
  let cardIcon = wert.querySelector(".fas");
  cardBody.classList.add("d-none");
  wert.style.cursor = "pointer";

  wert.addEventListener("click", () => {
    cardBody.classList.toggle("d-none");
    if(cardBody.classList.contains('d-none')) {
      cardIcon.classList.remove('fa-angle-double-down');
      cardIcon.classList.add('fa-angle-double-right');
			wert.classList.remove("bg-danger","text-light");
			cardBody.classList.remove("list-group-item-info","text-secondary");
      }else {
      cardIcon.classList.remove('fa-angle-double-right')
      cardIcon.classList.add('fa-angle-double-down')
			wert.classList.add("bg-danger","text-light");
			cardBody.classList.add("list-group-item-info","text-secondary");
      }

  });
}


}
//####################################################################
//#################################################################
//das Formular
let strongElement = document.createElement("strong");
let divElement = document.createElement("div");
let anmelden = document.getElementById("anmelden");

//++++++++++++++++++++++++++
//Funktion für neues Element erstellen
//newElement("Name ist ein Pflichtfeld", name)
let newElement = (msg, element) => {
  strongElement.innerText = msg;
  strongElement.classList.add("text-danger");
  divElement.appendChild(strongElement);
  element.after(divElement);
}
//++++++++++++++++++++++++++
let buchstaben = (wert) => {
	let zeichen = wert.toLowerCase();
	let gross = zeichen.charAt(0).toUpperCase();
	return gross + zeichen.substr(1,);
}
//++++++++++++++++++++++++++
anmelden.addEventListener("click", (event) => {
  event.preventDefault();

  let anrede = document.getElementById("anrede");
	let name = document.getElementById("nachname");
  let vorname = document.getElementById("vorname");
  let mail = document.getElementById("mail");
  let ort = document.getElementById("ort");
  //+++++++++++++++++++++++++
  let anredeMuster = /^(frau|herr|divers)$/i;
	let nameMuster = /^[a-z\.\-\_äöüß]{2,15}$/i;
  let mailMuster = /^[a-z0-9]{2,10}@[a-z]{2,10}\.[a-z]{2,4}$/;
	
  //+++++++++++++++++++++++++
  //davor
  //<input type="text" id="nachname" class="form-control" placeholder="Name eingeben" />
  //danach
  if(!anredeMuster.test(anrede.value)) {
    newElement("Anrede ist ein Pflichtfeld!\n Herr|Frau|Divers", anrede);
  }
	else if(!nameMuster.test(name.value)) {
    newElement("Name ist ein Pflichtfeld!", name);
  }
  else if(!nameMuster.test(vorname.value)) {
    newElement("Vorname ist ein Pflichtfeld!", vorname);
  }
  else if(!mailMuster.test(mail.value)) {
    newElement("Muster für E-Mail: test@test.de", mail);
  }
  else if(ort.value === "Wohnort") {
    newElement("Wo wohnen Sie?", ort);
  } 
  else {
    //wenn alles ok dann die Daten anzeigen
    divElement.remove();
		/*
    alert("Vielen Dank\n"+
          anrede.value + " "+name.value + ", " + vorname.value+
          "\nE-Mail: " + mail.value+
          "\nWohnort: " + ort.value);
		*/
		document.getElementById("ausgabe").innerText = "Vielen Dank!\n"+
          buchstaben(anrede.value) + " "+buchstaben(name.value) + ", " + buchstaben(vorname.value)+
          "\nE-Mail: " + mail.value+
          "\nWohnort: " + ort.value;
  }


});









