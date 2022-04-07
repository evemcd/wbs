"use strict";

const eingabe = prompt("Bitte eine Zahl eingeben");

function checkZahl(eingabe) {
    if(!isNaN(parseInt(eingabe))) {
        alert(eingabe + ' ist eine Zahl');
    }else {
        alert(eingabe + ' ist keine Zahl!');
    }
}

// checkZahl();
console.log(typeof eingabe);