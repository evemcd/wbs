"use strict";

console.log(document);                                                          //gibt die document.location aus
console.log(document.title);
// console.log(document.title = "Javascript");
// console.log(document.location.href);
// console.log(document.getElementById("datum"));
// console.log("Inhalt des Elements: \n" + document.getElementById("datum").innerText);
// document.getElementById("datum").innerText = "24.12.2021";                    //ändert die HTML Eingabe
let datum = document.getElementById("datum");

//onclick                                                                       //veraltet
// datum.addEventListener("click", function(){
//     alert("Datum wurde angeklickt");
// });

// datum.addEventListener("mouseover", () => {                                     //Text kommt auf wenn man mit der Maus drüber geht
//     datum.innerText = "Irgendein Text";
// });

// datum.addEventListener("mouseleave", () => {                                 //Text kommt auf wenn man nicht mit der Maus drauf ist
//     datum.innerText = "Irgendein Text";
// });

let klicken = function() {
    alert("Datum wurde angeklickt");
    datum.innerText = "Irgendein Text";
}

// klicken();

datum.addEventListener("click", klicken);                                       //wenn jemand Datum anklickt, dann functioon klicken durchführen

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let mailBtn = document.getElementById("mail");
/*mailBtn.addEventListener("click", (blabla) => {
    console.log(blabla);
    alert("Ich bin eine Mail");
});
*/

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

mailBtn.addEventListener("click", (event) => {
    event.preventDefault();
    alert("Ich bin eine Mail");
});

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let btnIncrement = document.getElementById("btnHoch");
let btnWeg = document.getElementById("btnReset");
let erg = document.getElementById("wert");
let current = parseInt(erg.innerText);

btnIncrement.addEventListener("click", () => {
    current++;
    // document.getElementById("wert").innerText = current;
    erg.innerText = current
});

btnWeg.addEventListener("click", () => {
    current = 0;
    erg.innerText = current;
});

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

let formular = document.getElementById('form');

// formular.onsubmit = function() {}
formular.addEventListener("submit", (event) => {
    let name = document.getElementById("nachname").value;
    let vorname = document.getElementById("vorname").value;
    let email = document.getElementById("email").value;
    let msg = document.getElementById("msg");

    if(name.length < 3 || vorname.length < 3) {
        msg.innerHTML = "Name und Vorname müssen mindestens <strong>3</strong> Zeichen haben";
    } else if(email.length < 10) {
        msg.innerHTML = "E-Mail muss mindestens <strong>10</strong> Zeichen haben";
    } else {
        msg.innerHTML = "Vielen Dank <br />" + name + ", " + vorname + "<br />" + "E-Mail: " + email;
    }
    event.preventDefault();
});

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

formular.addEventListener("reset", (event) => {
    if(!window.confirm("Wollen Sie wirklich alle Eingaben löschen?")) {
        event.preventDefault();
    } else {
        msg.innerText = "";
    }
})