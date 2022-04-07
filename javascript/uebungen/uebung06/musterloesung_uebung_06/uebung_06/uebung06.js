"use strict";

	//let anzeige=prompt("Wie heisst die Hauptstadt von Vietnam").toLowerCase();
	let anzeige=prompt("Wie heisst die Hauptstadt von Vietnam");

	if(anzeige !== null) {
		//switch
		//			HANOI = hanoi
		switch(anzeige.toLowerCase())
		{
			case "hanoi": document.getElementById("antwort").innerHTML = "Hanoi";
										document.getElementById("janein").innerHTML = " (RICHTIG) ";
										break;
			case "saigon": document.getElementById("antwort").innerHTML = "Saigon";
										document.getElementById("janein").innerHTML = " (Sie sind im Schlafmodus) ";
										break;
			default: document.getElementById("antwort").innerHTML = "Unbrauchbar";break;
		}
	}else
	{
		document.getElementById("antwort").innerHTML = "FALSCH";

	}

