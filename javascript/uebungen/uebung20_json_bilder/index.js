"use strict";

//create img tag
function createImg(bildName, titleWert) {
    let img = document.createElement('img');
    img.setAttribute('src', bildName);
    img.setAttribute('alt', titleWert);
    img.setAttribute('title', titleWert);
    img.classList = 'slides img-fluid left';
    return img;
}

//JSON einbinden
let request = new XMLHttpRequest();
request.addEventListener('load', () => {
    if(request.status === 200) {
        console.log("Datei wurde gefunden");
        let json = request.response;
        let images = json.bilder;
        for(let element of images) {
            let img = createImg(element.bild, element.titel);
            document.getElementById('slider').appendChild(img);
        }
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
        console.log(element);
    }

    if(counter === bilder.length) {
        counter = 0;
    }
    bilder[counter].setAttribute('style', 'display: block;');
    counter++;
    setTimeout(slider, 2000);
}
