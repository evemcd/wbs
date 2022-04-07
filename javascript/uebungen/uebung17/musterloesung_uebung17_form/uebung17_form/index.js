//###########################################################################
//Formular auswerten
let form1 = document.getElementById("form1");
form1.addEventListener("submit", (event) => {
	event.preventDefault();
	//-----------------------------
	let flug = document.getElementById("flug");
	let dauer = document.getElementById("dauer");
	let person = document.getElementById("person");
	let vn = document.getElementById("vn");
	let str = document.getElementById("str");
	let plz = document.getElementById("plz");
	let ort = document.getElementById("ort");
	let mail = document.getElementById("mail");
	let output = document.getElementById("ausgabe");
	let zimmer = document.querySelectorAll("input[name='zimmer']");
	let wunsch = document.querySelectorAll("input[name='wunsch']");
	//-----------------------------
	var zeichenCheck = /^[A-Z]{1}[a-z]{1,24}$/;
	var strCheck = /^[A-Z]{1}[a-z]{1,24}\,\s[0-9a-z]{1,4}$/;
	var plzCheck = /^[0-9]{5}$/;
	var ortCheck = /^(Hamburg|Schwerin|Hannover)$/i;
	var mailCheck = /^[A-Za-z\.\-]{1,24}\@[a-z0-9]{1,4}\.(hh|sn|h)$/;
	
	//#######################################################################
	//ist Flughafen eingegeben?
	if(flug.options[0].selected)
	{
		alert("Flughafen auswaehlen");
		flug.focus();
		return;
	}
	/*
	
	*/
	//#######################################################################
	//ist Reisedauer eingegeben?
	else if(dauer.options[0].selected)
	{
		alert("Reisedauer auswaehlen");
		dauer.focus();
		return;
	}
	/*
	for(var i=0; i<f.dauer.options.length; i++)
	{
		if(f.dauer.options[i].selected)
		{
			var dauerWert = f.dauer.options[i].value;
		}
	}
	*/
	//#######################################################################
	//ist Reisende eingegeben?
	else if(person.options[0].selected)
	{
		alert("Anzahl der Personen");
		person.focus();
		return;
	}
	/*
	for(var i=0; i<f.person.options.length; i++)
	{
		if(f.person.options[i].selected)
		{
			var personWert = f.person.options[i].value;
		}
	}
	*/
	//#######################################################################
	//ist ZimmerTyp eingegeben?
	else if(!(zimmer[0].checked || zimmer[1].checked || zimmer[2].checked))
	{
		alert("Zimmertyp waehlen");
		zimmer[0].focus();
		return;
	}
	/*
	for(var i=0; i<f.zimmer.length; i++)
	{
		if(f.zimmer[i].checked)
		{
			var zimmerWert = f.zimmer[i].value;
		}
	}
	*/
	//######################################################################
	//Warnmeldung
	//3 Personen in Einzelzimmer
	else if(person.options[3].selected && zimmer[0].checked)
	{
		alert("Drei Personen im Einzelzimmer geht leider nicht");
		person.focus();
		return;
	}
	//1 Person in Familienzimmer
	else if(person.options[1].selected && zimmer[2].checked)
	{
		alert("Eine Person im Familienzimmer geht leider nicht");
		return;
	}
//########################################################################
	//ist Vorname eingegeben?
	else if(!zeichenCheck.test(vn.value))
	{
		alert("Vorname\n\tMuster\t\"Hans\"");
		vn.focus();
		return;
	}
	//ist Nachname eingegeben?
	else if(!zeichenCheck.test(nn.value))
	{
		alert("Nachname\n\tMuster\t\"Hermann\"");
		nn.focus();
		return;
	}
	//ist Strasse eingegeben?
	else if(!strCheck.test(str.value))
	{
		alert("Strasse\n\tMuster\t\"Marktstr, 22\"");
		str.focus();
		return;
	}
	//ist PLZ eingegeben?
	else if(!plzCheck.test(plz.value))
	{
		alert("Postleitzahl\n\tMuster\t\"22222\"");
		plz.focus();
		return;
	}
	//ist Wohnort eingegeben?
	else if(!ortCheck.test(ort.value))
	{
		alert("Wohnort\n\tMuster\t\"Hamburg oder Hannover oder Schwerin\"");
		ort.focus();
		return;
	}
	//ist E-Mail eingegeben?
	else if(!mailCheck.test(mail.value))
	{
		alert("E-Mail\n\tMuster\t\"test@test.hh\"");
		mail.focus();
		return;
	}
	//######################################################################
		//ist ZimmerTyp eingegeben?
	else if(!(wunsch[0].checked || wunsch[1].checked || wunsch[2].checked || wunsch[3].checked || wunsch[4].checked))
	{
		alert("Wunsch?");
		wunsch[0].focus();
		return;
	}
	//anzahl der Werte ermitteln
	/*var wunschWert="";
	for(var i=0; i<f.wunsch.length; i++)
	{
		if(f.wunsch[i].checked)
		{
			wunschWert += f.wunsch[i].value +" ";
		}
			
	}
	*/
	//#####################################################################
	//DatenAusgabe
	let zimmerWert = "";
	for(let wert of zimmer) {
		if(wert.checked === true) {
			zimmerWert += wert.value+" ";
		}
	}
	//----------------
	let wunschWert = "";
	for(let wert of wunsch) {
		if(wert.checked === true) {
			wunschWert += "<span>" +wert.value+"</span>";
		}
	}
	output.innerHTML = 
		"<ul>"+
			"<li class='daten'>Vielen Danke für Ihre Angaben</li>"+
			"<li>"+nn.value +" " +vn.value+"</li>"+
			"<li>"+str.value+"</li>"+
			"<li>"+plz.value +" " +ort.value+"</li>"+
			"<li>E-Mail: "+mail.value+"</li>"+
			"<li class='daten'>Reisedaten:</li>"+
			"<li>Flughafen: "+flug.value+"</li>"+
			"<li>Reisedauer: "+dauer.value+"</li>"+
			"<li>Personen: "+person.value+"</li>"+
			"<li class='daten'>Zimmer und Wunsch: </li>"+
			"<li>Zimmertyp: "+zimmerWert+"</li>"+
			"<li class='wunsch'>Wunsch an das Hotel: "+wunschWert+"</li>"+
		"</ul>";

});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++
