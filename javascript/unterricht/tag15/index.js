"use strict";

document.getElementById('farbe1').addEventListener('click', () => {
  // document.querySelector('h1').style.background = '#fff';
  // document.querySelector('h1').style.color = '#999';
  // document.querySelector('h1').style.fontFamily = 'Arial';
  // document.querySelector('h1').style.fontSize = '5rem';
  document.querySelector('h1').style = "background:#fff;color:#999;font-family:Arial;font-size:5rem;";

});

document.getElementById('farbe2').addEventListener('click', () => {
  document.querySelector('h1').style = "color:#fff;font-size:6rem;";
})

//===========================================================================================================================

let farben = ["blue", "red", "#cd0000", "#efefef", "green", "purple", "#ccc"];

let faerben = () => {
  let zufall = Math.floor(Math.random() * farben.length);
  document.body.style.backgroundColor = farben[zufall];
};

faerben();
setInterval(faerben, 5000);