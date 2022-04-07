document.getElementById("form1").addEventListener("submit", () => 
{
	let fehler="";
	let nn = document.getElementById("nn");
	let vn = document.getElementById("vn");
	let str = document.getElementById("str");
	let plz = document.getElementById("plz");
	let ort = document.getElementById("ort");
	let tel = document.getElementById("tel");
	let mail = document.getElementById("mail");
	let pwd1 = document.getElementById("pwd1");
	let pwd2 = document.getElementById("pwd2");
	let beruf = document.getElementById("beruf");
	//----------------------------------------------------------------
	//Muster Name: Hans-Werner, Vorname, Ort
	let nameCheck=/^[A-Z]{1}[a-z]{1,24}$/;
	//Muster Str: Marktstrsse, 22a
	let strCheck=/^[A-Z]{1}[a-z]{1,30}\,\s[0-9a-z]{1,4}$/;
	//Muster plz: nur zahlen 7-stellig
	let plzCheck=/^[0-9]{7}$/;
	//Muster Tel 00(+)49 40 444444
	let telCheck=/^([0]{2}|\+?)[1-9]{2}\s[0-9]{2,4}\s[0-9]{4,15}$/;
	//Muster E-Mail: test@test.de nur de erlaubt
	let mailCheck=/^[a-zA-Z0-9]{2,20}\@[a-z-0-9]{2,5}\.[a-z]{2,5}$/;
	//Muster Passwort
	let pwdCheck=/^[a-zA-Z0-9]{2,12}$/;
		
	//----------------------------------------------------------------
	if(nn.value=="")
	{
		fehler +="\nNachname!!!";
	}
	//Name richtig?
	if(!nameCheck.test(nn.value))
	{
		fehler +="\nMuster fuer Name:\n\tSchneider\n";
	}
	
	//Vorname eingegeben?
	if(vn.value=="")
	{
		fehler +="\nVorname!!!";
	}
	//Vorname richtig?
	if(!nameCheck.test(vn.value))
	{
		fehler +="\nMuster fuer Vorname:\n\tThomas\n";
	}
	//---------------
	//str eingegeben?
	if(str.value=="")
	{
		fehler +="\nStrasse!!!";
	}
	//str richtig nach muster?
	if(!strCheck.test(str.value))
	{
		fehler +="\nMuster fuer Strasse:\n\tmarktstrasse, 22a\n";
	}
	//---------------
	//plz eingegeben
	if(plz.value=="")
	{
		fehler +="\nPLZ!!!";
	}
	//PLZ richtig nach muster?
	if(!plzCheck.test(plz.value))
	{
		fehler +="\nMuster fuer PLZ: nur zahlen 7-stellig\n";
	}
	//---------------
	//Ort eingegeben
	if(ort.value=="")
	{
		fehler +="\nWohnort!!!";
	}
	//ort richtig?
	if(!nameCheck.test(ort.value))
	{
		//fehler +="\nMuster fuer Wohnort:\n\tHamburg oder HH oder hamburg\n";
		fehler +="\nMuster fuer Wohnort:\n\t 1.Buchstabe soll Groß sein\n";
	}
	//---------------
	//Telefon eingegeben
	if(tel.value=="")
	{
		fehler +="\nTelefon!!!";
	}
	//telefon richtig?
	if(!telCheck.test(tel.value))
	{
		fehler +="\nMuster fuer Telefon:\n\t00(+)49 30 33333\n";
	}
	//---------------
	//E-Mail eingegeben
	if(mail.value=="")
	{
		fehler +="\nE-Mail!!!";
	}
	//E-Mail richtig?
	if(!mailCheck.test(mail.value))
	{
		fehler +="\nMuster fuer E-Mail:\n\ttest@test.de\n";
	}
	//---------------
	//Passwort1 eingegeben
	if(pwd1.value=="")
	{
		fehler +="\nPasswort!!!";
	}
	//Passwort richtig?
	if(!pwdCheck.test(pwd1.value))
	{
		fehler +="\nMuster fuer passwort:\n\tmind. 2 hoechstens 12 Zeichen\n";
	}
	//Passwort2 eingegeben
	if(pwd2.value=="")
	{
		fehler +="\nPasswort wiederholen!!!\n";
	}
	//sind beide pwd identisch?
	if(pwd1.value!=pwd2.value)
	{
		fehler +="\nBeide Passwoerter müssen identisch sein2!!!\n";
	}
	//---------------
	//selectauswahl auswerten
	if(beruf.options[0].selected)
	{
		fehler +="\nWas ist Ihr Beruf?";
	}
	
	//wert vom select ausgeben
	for(var i=0; i<beruf.options.length;i++)
	{
		if(beruf.options[i].selected)
		{
			var job=beruf.options[i].value;
		}
	}
	
	//checkBox auswerten
	let cb = document.querySelectorAll("input[name='cb']");
	let cbWert="";
	let zaehler=0;
	
	if(!(cb[0].checked || cb[1].checked || cb[2].checked || cb[3].checked)) {
		fehler +="\nHobby/Sport?";
	}
	
	for(let wert of cb) {
		if(wert.checked === true) {
			cbWert += wert.value+" ";
			zaehler = zaehler+1;
		}
	}
	//mehr als 2 hobbys sind nicht erlaubt
	if(zaehler>2)
	{
		fehler +="\nBitte nur 2 Hobbys anklicken!!!\n";
	}
	//---------------
	//beruf-soldat-Golf
	if(cb[0].checked && beruf.options[1].selected)
	{
		fehler +="\nSie koennen sich als Soldat Golf nicht leisten\n";
	}
	//beruf-manager-kein sport
	if(cb[2].checked && beruf.options[3].selected)
	{
		fehler +="\nEin bisschen Sport schadet nie\n";
	}
	
	//ausgabe der Daten im PopUp-Fenster
	if(fehler!="")
	{
		alert("Folgende Felder sind nicht ausgefuellt\n"+fehler);
		
	} 
	else
	{
		alert("Vielen Dank für Ihre Angaben"+
		"\nName: "+nn.value+"\n"+
		"Vorname: "+vn.value+"\n"+
		"Strasse: "+str.value+"\n"+
		"PLZ: "+plz.value+"\n"+
		"Wohnort: "+ort.value+"\n"+
		"Telefon: "+tel.value+"\n"+
		"E-Mail: "+mail.value+"\n"+
		"Beruf: "+beruf.value+"\n"+
		"Hobbys: "+cbWert);
		
	}
	event.preventDefault();
});
//----------------------------------------------------------------
//****************************************************************
let btnReset = document.querySelector("input[type='reset']");
btnReset.addEventListener("click", (event) => {
	if(!window.confirm("Wollen Sie wirklich alle Eingaben löschen?")) {
			event.preventDefault();
		}
});




