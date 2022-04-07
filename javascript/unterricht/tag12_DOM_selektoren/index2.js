"use strict";

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let helpElements = document.querySelectorAll("[data-help]");

for(let wert of helpElements) {
  wert.addEventListener("click", (event) => {                                     // event when it's a link or a button (that has a default action), I also use prevent default

    //sonst sprint immer nach oben bei href="#" (wenn sowas vorhaben)
    alert(wert.attributes["data-help"].value);
    event.preventDefault();

    //verhindern, dass er im DokumentBaum weiter hoch steigt
    event.stopPropagation();
  });
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
let cardHeaders = document.getElementsByClassName("card-header");

for(let wert of cardHeaders) {
  //vor dem Klick definieren
  let cardBody = wert.nextElementSibling;
  let cardIcon = wert.querySelector(".fas");
  cardBody.classList.add("d-none");
  wert.style.cursor = "pointer";

  wert.addEventListener("click", () => {
    cardBody.classList.toggle("d-none");

    if(cardBody.classList.contains('d-none')) {
      cardIcon.classList.remove('fa-angle-double-down')
      cardIcon.classList.add('fa-angle-double-right')
      }else {
      cardIcon.classList.remove('fa-angle-double-right')
      cardIcon.classList.add('fa-angle-double-down')
      }

  })
}
