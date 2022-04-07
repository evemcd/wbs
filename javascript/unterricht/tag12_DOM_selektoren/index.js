"use strict";

//++++++++++++++++++++++++++++++++++++++++++++++++++++
let cardElements = document.getElementsByClassName("card");
for(let cardElement of cardElements) {
  //console.log(cardElement.attributes["style"]);

  //kriegt man bei anderen ne Fehlermeldungen, weil es dort style nicht gibt
  //console.log(cardElement.attributes["style"].value);

  //lieber so schreiben
  //console.log(cardElement.style);
  //bei der Konsole sieht man, welche Befehle man mit style anwenden kann

  //console.log(cardElement.style["background-color"]);

  /*
  if(cardElement.style["background-color"] === "") {
    cardElement.style["background-color"] = "#e0eee0";
  }
  

  if(cardElement.style.backgroundColor === "") {                            (same as background-color, works with every single property, fontFamily etc)
    cardElement.style.backgroundColor = "#e0eee0";
  }

  cardElement.addEventListener("click", () => {                             (on click, display none gets added)
    cardElement.style.display = "none";
  });
*/
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++
//den Objektbaum (DOM) entlang navigieren                                   (access to html from JS)

//das erste Element wird gefunden
//let baumElement = document.querySelector(".card")
//console.log(baumElement)

//alle Elemente, die ein class='card' haben
//let baumElement = document.querySelectorAll(".card")
//console.log(baumElement)

//Eltern ausgeben
//let baumElement = document.querySelector(".card")                           
//console.log(baumElement.parentElement)                                      console logs the parent element (immediate element outside)

//KinderElemente ausgeben
//let baumElement = document.querySelector(".card")
//console.log(baumElement.children)                                         children: all elements inside the element (array)

//das 1.KindElement
//let baumElement = document.querySelector(".card")
//console.log(baumElement.children[0])                            

//KinderElemente vom KindElement
//console.log(baumElement.children[0].children)

//das nächste Element, das folgt
//console.log(baumElement.nextElementSibling)                               sibling on the same level (when I collapse the divs)

//nextElementSibling funktioniert stabil, falls zwischen den Elementen
//noch ein Text steht
/*
<div class="card"> </div>
ffdfsdf                                                                     doesn't have class card, is on the same level, so skips it
<div class="card"> </div>
*/

//das vorherige Element
//console.log(baumElement.previousElementSibling)                           on the same level but before

//beides das gleiche (in 99,9% der Fälle)
//parentNode IE hat eingeführt 
//console.log(baumElement.parentElement)
//console.log(baumElement.parentNode)
//++++++++++++++++++++++++++++++++++++++++++++++++++++
let cardHeaders = document.getElementsByClassName("card-header");

for(let cardHeader of cardHeaders) {
  cardHeader.addEventListener("click", () => {
      cardHeader.style.cursor = "pointer";                                  //hand when you hover over a link
      //console.log(cardHeader);

    let cardBody = cardHeader.nextElementSibling;                           //let cardBody = querySelector(".card-body");

    //console.log(cardBody);

    //sollen cardBodys ausgeblendet werden, wenn man drauf klickt
    //cardBody.style.display = "none";

    //es gibt eine elegantere Version (css-Klasse ansprechen)
    //cardBody.classList.add("d-none");                                     //d-none is a bootstrap class

    //oder
    cardBody.classList.toggle("d-none");

    let cardIcon = cardHeader.querySelector(".card-header .fas");

    if( cardBody.classList.contains("d-none") ) {
      cardIcon.classList.remove("fa-angle-double-right");
      cardIcon.classList.add("fa-angle-double-up");
    }else {
      cardIcon.classList.remove("fa-angle-double-up");
      cardIcon.classList.add("fa-angle-double-right");
    }




  });
}