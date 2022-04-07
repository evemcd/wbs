"use strict";


//let tableCaptions = document.getElementsByClassName('t-header')
let tableCaptions = document.getElementsByTagName('caption')

for(let wert of tableCaptions) {
  //vor dem Klick definieren
  let cardHeader = wert.nextElementSibling;
  let cardIcon = wert.querySelector(".fas");
  cardHeader.classList.add("d-none");
  wert.style.cursor = "pointer";

  wert.addEventListener("click", () => {
    cardHeader.classList.toggle("d-none");

    if(cardHeader.classList.contains('d-none')) {
      cardIcon.classList.remove('fa-angle-double-down')
      cardIcon.classList.add('fa-angle-double-right')
      }else {
      cardIcon.classList.remove('fa-angle-double-right')
      cardIcon.classList.add('fa-angle-double-down')
      }

  })
}
//#################################################################
let tableHeader = document.getElementsByTagName('thead')

for(let wert of tableHeader) {
  //vor dem Klick definieren
  let tableBody = wert.nextElementSibling;
  let cardIcon = wert.querySelector(".fas");
  tableBody.classList.add("d-none");
  wert.style.cursor = "pointer";

  wert.addEventListener("click", () => {
    tableBody.classList.toggle("d-none");

    if(tableBody.classList.contains('d-none')) {
      cardIcon.classList.remove('fa-angle-double-down')
      cardIcon.classList.add('fa-angle-double-right')
      }else {
      cardIcon.classList.remove('fa-angle-double-right')
      cardIcon.classList.add('fa-angle-double-down')
      }

  })
	
	tableBody.addEventListener("click", () => {
    tableBody.classList.toggle("d-none");
	
		if(tableBody.classList.contains('d-none')) {
      cardIcon.classList.remove('fa-angle-double-down')
      cardIcon.classList.add('fa-angle-double-right')
      }else {
      cardIcon.classList.remove('fa-angle-double-right')
      cardIcon.classList.add('fa-angle-double-down')
      }
	
  })
}    












