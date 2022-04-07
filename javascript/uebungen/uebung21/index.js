"use strict";

function createFigure(bildName, titleWert) {
    let figure = document.createElement('figure');
    let img = document.createElement('img');
    let figcaption = document.createElement('figcaption');
    img.setAttribute('src', bildName);
    img.setAttribute('alt', titleWert);
    img.setAttribute('title', titleWert);

    figcaption.appendChild(document.createTextNode(titleWert));

    figure.classList = 'top slides';
    img.classList = ' img-fluid';
    figcaption.style="color: #fff; text-align: center; padding: 5px;";
    figure.appendChild(img);
    figure.appendChild(figcaption);
    return figure;
}

//JSON einbinden
let request = new XMLHttpRequest();
request.addEventListener('load', () => {
    if(request.status === 200) {
        console.log("Datei wurde gefunden");
        let json = request.response;
        let bilder = json.bilder;
        for(let element of bilder) {
            let img = createFigure(element.bild, element.titel);
            document.getElementById('slider').appendChild(img);
        }
        slider();
    } else if(request.status === 404) {
        console.log("Datei wurde nicht gefunden");
    }
})

request.open("GET","images.json",true);
request.responseType = "json";
request.setRequestHeader("Accept", "application/json");
request.send();

//animation
let counter = 0;
function slider() {
    let bilder = document.querySelectorAll('.slides');
    for(let element of bilder) {
        element.setAttribute('style', 'display: none;');
        // console.log(element);
    }

    if(counter === bilder.length) {
        counter = 0;
    }
    bilder[counter].setAttribute('style', 'display: block;');
    counter++;
    setTimeout(slider, 2000);
}

//====================================================================================

// function createDiv(kurs) {
//     let parentDiv = document.createElement('div');
//     let headerDiv = document.createElement('div');
//     let infoDiv = document.createElement('div');
//     // let 

//     headerDiv.appendChild(document.createTextNode(kurs.attributes['titel'].value));
//     parentDiv.appendChild(headerDiv);
//     parentDiv.appendChild(infoDiv);
//     console.log(parentDiv);
//     document.getElementById('card').appendChild(parentDiv);
// }

let request2 = new XMLHttpRequest();
request2.addEventListener('load', () => {
    if(request2.status === 200) {
        console.log("Request2 gefunden");
        let xml = request2.responseXML;
        let kurse = xml.getElementsByTagName('kurs');
        console.log(kurse);
        for(let i = 0; i < kurse.length; i++){
            let div = document.createElement('div');
            let headline = document.createElement('h2');
            let text = document.createElement('p');
            div.appendChild(headline);
            div.appendChild(text);
            head.style = "cursor: pointer;"
            head.innerText = kurse[i].getAttribute("titel");
            let ausgabe = '';
            ausgabe += div;
            ausgabe += 
            document.getElementById("card").appendChild(div);
        }
    }
})

request2.open('GET', 'kurse.xml', true);
request2.responseType = 'document';
request2.setRequestHeader('Accept', 'text/xml');
request2.send();