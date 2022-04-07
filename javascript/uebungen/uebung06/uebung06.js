let eingabe = prompt("Wie heißt die Hauptstadt von Vietnam?");

if (eingabe === null) {
    eingabe = "null";
}

switch (eingabe.toLowerCase()) {
    case "null":
        document.getElementById("ausgabe1").innerHTML = "Ihre Antwort ist : <strong>FALSCH</strong>";
        break;
    case "hanoi":
        document.getElementById("ausgabe1").innerHTML = "Ihre Antwort ist : <strong>Hanoi</strong> (RICHTIG)";
        break;
    case "saigon":
        document.getElementById("ausgabe1").innerHTML = "Ihre Antwort ist : <strong>Saigon</strong> (Sie sind im Schlafmodus) ";
        break;
    default:
        document.getElementById("ausgabe1").innerHTML = "Ihre Antwort ist : <strong>Unbrauchbar</strong>";

}