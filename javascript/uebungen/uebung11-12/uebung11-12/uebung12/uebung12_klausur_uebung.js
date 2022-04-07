'use strict'
//Array erstellen
/**/
let kurs1 = ["\x45\x76\x65","\x41\x6E\x64\x72\x65\x61\x73" ,"\x53\x74\x65\x66\x66\x65\x6E"];
let kurs2 = ["\x50\x61\x75\x6C","\x47\x72\x61\x63\x65","\x42\x65\x6E\x6A\x61\x6D\x69\x6E","\x48\x61\x6C\x69\x6C"];


console.log(kurs1);

console.log(kurs2);

//Klaus möchte einen Kurs belegen aber nur dort, wo sein Freund Halil auch teilnimmt.

//Finde heraus, welchen Kurs Halil belegt hat
//Löse die Aufgabe mit if() und indexOf()
//Beide Kurse sollen angesprochen werden

if(kurs1.indexOf("Halil") !== -1) {
	//document.getElementById("box1").innerText = "Halil ist im *** angemeldet";
	document.getElementById("box1").innerText = "Halil ist im Kurs1 angemeldet";
}
else if(kurs2.indexOf("Halil") !== -1)
{
	//document.getElementById("box1").innerText = "Halil ist im *** angemeldet";
	document.getElementById("box1").innerText = "Halil ist im Kurs2 angemeldet";
}else
{
	document.getElementById("box1").innerText = "Halil nicht angemeldet";
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//wenn Halil gefunden wurde, füge Klaus ans Ende der Liste hinzu.
//Teilnehmer der Kurse ausgeben
kurs2.push("Klaus");
document.getElementById("box2").innerText = kurs1 +"," + kurs2;

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Da die Daten nicht gut zu sehen sind
//stelle die Teilnehmer Kurse übersichtlich dar.
//Teilnehmer des einzelnen Kurses sollen zusammenstehen
//Namen Groß anzeigen
//Länge der Zeichen sollen nicht fehlen
for (let element of kurs1) {
	document.getElementById("box3-1").innerHTML += 
					"<p class='info-1'>"+ element.toUpperCase() + "<br />("+element.length +") Zeichen lang.</p>";
}
for (let element of kurs2) {
	document.getElementById("box3-2").innerHTML += 
	"<p class='info-2'>"+ element.toUpperCase() + "<br />("+element.length +") Zeichen lang.</p>";
}

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
document.getElementById("rechner1").addEventListener("click", () => {
	document.getElementById("result1").innerHTML = "";
	let eingabezahl= "";
	/*
	do {
		eingabezahl = prompt("Bitte eine Zahl eingeben","");
	}while(isNaN(eingabezahl)||eingabezahl===""||eingabezahl===null);
	*/
	
	while(eingabezahl === "" || eingabezahl === null || !Number(eingabezahl)) {
		eingabezahl = prompt("Bitte eine Zahl eingeben","");
	}

	for(let i = 1; i <= eingabezahl; i++) {
		document.getElementById("result1").innerHTML += "<p class='info-1'>" +i + " x " + i + " = " + (i * i) +"</p>";
	}
	
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
document.getElementById("form1").addEventListener("submit", (event) => {
	let nachname = document.getElementById("nachname").value;
	let vorname = document.getElementById("vorname").value;
	
	if(nachname === "") {
		let eingabe1 = prompt("Bitte Ihren Namen eingeben!");
		document.getElementById("nachname").value = eingabe1;
	}else if(vorname === "") {
		let eingabe2 = prompt("Bitte Ihren Vornamen eingeben!");
		document.getElementById("vorname").value = eingabe2;
	}
	event.preventDefault();
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*
mit if und switch auswerten
•	im Fall Moskau: Moskau liegt nicht in Weißrussland!
•	im Fall Kiev: Kiev ist in der Ukraine!
•	im Fall Minsk: Ihre Antwort Minsk ist richtig!
•	sonst: leider nicht richtig!
*/
document.getElementById("form2").addEventListener("submit", (event) => {
	let stadt = document.getElementById("stadt").value;
	let result = document.getElementById("result2");
	if(stadt === "")
	{
		result.innerText = "Bitte eine Antwort eingeben";
	}
	else
	{
	  stadt = stadt.toUpperCase();
		//alert(wert);
		switch(stadt)
		{
			case "MINSK": result.innerText = "Ihre Antwort \"Minsk\" ist richtig!";break;
			case "MOSKAU": result.innerText = "Moskau liegt nicht in Weißrussland!";break;
			case "KIEV": result.innerText = "Kiev ist in der Ukraine!";break;
			default: result.innerText = "Leider falsch";break;
		}
	}
	event.preventDefault();
});

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
let uhr = () => {
  let jetzt = new Date();
  //+++++++++++++++
  let std = jetzt.getHours();
  let minute = jetzt.getMinutes();
  let sek = jetzt.getSeconds();
  //+++++++++++++++
  if(std < 10) {
    std = "0" + std;
  }
  if(minute < 10) {
    minute = "0" + minute;
  }
  //01 ..... 09 , 10
  if(sek < 10) {
    sek = "0" + sek;
  }
  document.getElementById("datum").innerHTML = jetzt.getDate() + "/" +
																(jetzt.getMonth()+1) + "/" +
																jetzt.getFullYear()+ " "+
																std + ":" + minute + ":" + sek;
  setTimeout(uhr, 1000);
};

uhr();

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
const bilder = [
    {name: 'hamburg-1.jpg', titel: 'Hamburg Rathaus'},
    {name: 'landungsbruecken.jpg', titel: 'Hamburg Landungsbrücken'},
    {name: 'speicherstadt.jpg', titel: 'Hamburg Speicherstadt'},
		{name: 'st-peter-ording.jpg', titel: 'St Peter Ording - Strand'},
];

//console.log(bilder.length);
let zufall = Math.floor(Math.random() * bilder.length);

document.getElementById("result3").innerHTML = 
																"<figure>"+
																	"<img src='images/" +bilder[zufall]["name"]+"' alt="+bilder[zufall]["titel"]+"  />"+
																	"<figcaption>"+bilder[zufall]["titel"]+"</figcaption>"
																"</figure>";








