"use strict";

let quiz = [
    ["Ecuador", "Quito"],
    ["Griechenland", "Athen"],
    ["China", "Peking"],
    ["Indien", "Neu Delhi"],
    ["Monaco", "Monte Carlo"],
    ["Burkina Faso", "Ouagadougou"]
];

let prompt1;
let score = 0;

for(let i = 0; i < quiz.length; i++) {
    prompt1 = prompt(`Wie heißt die Hauptstadt von ${quiz[i][0]}?`);
    if(prompt1.toLowerCase() === quiz[i][1].toLowerCase()) {
        alert("Richtig");
        score++;
    } else {
        alert(`Falsch :D Die richtige Anwort ist ${quiz[i][1]}`);
    }
}

document.getElementById('score').innerHTML = `${score} Punkt(e) <br> Sie haben ${score} von ${quiz.length} Fragen richtig`