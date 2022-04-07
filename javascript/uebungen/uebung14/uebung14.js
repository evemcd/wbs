"use strict";

let cardHeaders = document.getElementsByClassName("card-header");

for(let cardHeader of cardHeaders) {
  cardHeader.addEventListener("click", () => {
      cardHeader.style.cursor = "pointer";

    let cardBody = cardHeader.nextElementSibling;
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


let tableHeaders = document.getElementsByClassName("thead");

for(let tableHeader of tableHeaders) {
    tableHeader.addEventListener("click", () => {
        tableHeader.style.cursor = "pointer";
  
      let tableRow = tableHeader.nextElementSibling;
      tableRow.classList.toggle("d-none");
    });
  }
