"use strict";

let div1open = false;
let div2open = false;
let div3open = false;


document.getElementById('icon1').addEventListener('mouseover', () => {alert('Was erwartet mich zu Weihnachten in Hamburg?')});
document.getElementById('icon2').addEventListener('mouseover', () => {alert('Besuch der Elbphilharmonie')});
document.getElementById('icon3').addEventListener('mouseover', () => {alert('Besuch der Speicherstadt')});

//not learned in class
document.getElementById('h1').addEventListener('click', () => {
    const togglediv = document.getElementById('toggle1');
    if(div1open) {
        //html has the div set to open by default, div1open = false means the default state is closed, therefore display none. then we open it by setting it to true and block
        div1open = false;
        togglediv.style.display = "none";
    } else {
        div1open = true;
        togglediv.style.display = "block";
    }
});

document.getElementById('h2').addEventListener('click', () => {
    const togglediv = document.getElementById('toggle2');
    togglediv.classList.toggle('hidden');
});

document.getElementById('h3').addEventListener('click', () => {
    const togglediv = document.getElementById('toggle3');
    togglediv.classList.toggle('hidden');
});