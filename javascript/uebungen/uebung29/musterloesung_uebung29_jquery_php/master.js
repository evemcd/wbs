$(document).ready(function(){
//++++++++++++++++++++++++++++++++++++++++++++++ 
function animation() {
	
	$(".card").each(function(){
		let zufall = Math.floor(Math.random() * 200 +1);
		$(this).fadeTo(2000,0.04).fadeTo(1000,1)
			.animate({marginLeft: zufall+"px"},500,"easeOutBounce")
				.animate({marginLeft: "0"},200);
	});
	setTimeout(animation,5000);
	
}
//----------------------------------------------
animation();
//----------------------------------------------
function uhrZeit() {
	let daten="";
	let jetzt = new Date();
  //+++++++++++++++
  let std = jetzt.getHours();
  let minute = jetzt.getMinutes();
  let sek = jetzt.getSeconds();
  //+++++++++++++++
  if(std < 10) {
    std = "0" + std;
  }
  if(minute < 10) {
    minute = "0" + minute;
  }
  if(sek < 10) {
    sek = "0" + sek;
  }
	daten += "<strong class='std'>"+std+"</strong>";
	daten += "<span>:</span>";
	daten += "<strong class='min'>"+minute+"</strong>";
	daten += "<span>:</span>";
	daten += "<strong class='sek'>"+sek+"</strong>";
	$("#uhr").html(daten);
	//-------------------------
	$("#uhr span").fadeTo(500, 0.1).fadeTo(500, 1);
	//-------------------------
	setTimeout(uhrZeit, 1000);
}
uhrZeit();
//----------------------------------------------

//----------------------------------------------

$.get({
	url: "users.php",
	dataType: "text"
}).done(function(data){
	console.log(data);

	$("#userDaten").html(data);
	
	$("#userDaten .card").click(function(value){
		value = $(this).find("#id").text();
		//alert("Du hast mich angeklickt");
		//$("#profil").html("hallo");
			$.get({
				url: "profil.php?id="+value,
				dataType: "text"
			}).done(function(data){
				let profil = $.parseHTML("<div id='profil'></div>");
				$("body").append(profil);
				$(profil).html(data);
				
				//wenn man auf den grauen Bereich klickt dann soll alles schliessen
				$("#profil").click(function(){
					$(this).remove();
				});
			});

	});
	
	
	//--------------------
}); //ende done
//##############################################
$.validator.addMethod("nameFormat", function(value){
  return value.match(/^[a-z\s\-\.]+$/i);
});
//------------------
$.validator.addMethod("landFormat", function(value){
  return value.match(/^(deutschland|niederlande|frankreich)$/i);
});
//------------------
$.validator.addMethod("ortFormat", function(value){
  return value.match(/^(paris|layon|amsterdam|rotterdam|hamburg|berlin|münchen)$/i);
});
//------------------
$.validator.addMethod("plzFormat", function(value){
  return value.match(/^[0-9]{5}$/i);
});
//------------------
$.validator.addMethod("mailFormat", function(value){
  return value.match(/^[a-z0-9]+@[a-z0-9]+\.[a-z]+$/i);
});
//------------------
$.validator.addMethod("pwdFormat", function(value){
  return value.match(/^[a-z0-9\.\-]{6,12}$/i);
});
//------------------
//Muster für Tag(sehr einfach)
//TT
$.validator.addMethod("tagFormat", function(value){
  return value.match(/^(0[1-9]{1}|[1-2]{1}[0-9]{1}|3[0-1]{1})$/);
});
//------------------
//Muster für Monat
//MM
$.validator.addMethod("monatFormat", function(value){
  return value.match(/^(0[1-9]{1}|1[0-2]{1})$/);
});
//------------------
//Muster für Jahr(sehr einfach)
//JJJJ
$.validator.addMethod("jahrFormat", function(value){
  return value.match(/^((19|20)[0-9]{2})$/);
});
//--------------------------------
$("#form1").validate({

  rules: {
		nachname: {
      required: true,
			nameFormat: true
    },
    vorname: {
      required: true,
			nameFormat: true
    },
		land: {
      required: true,
      landFormat: true
    },
    plz: {
      required: true,
      digits: true, //NUR Zahlen sind erlaubt
      plzFormat: true
    },
		city: {
      required: true,
      ortFormat: true
    },
    mail: {
      required: true,
      mailFormat: true
    },
    pwd1: {
      required: true,
      rangelength: [6,12],
			pwdFormat: true
    },
    pwd2: {
      required: true,
      equalTo: pwd1
    },
    geb: {
      required: true,
      gebFormat: true
    },
		tag: {
      required: true,
			tagFormat: true
    },
		monat: {
      required: true,
			monatFormat: true
    },
		jahr: {
      required: true,
			jahrFormat: true
    }

  },//ende rules
  messages: {
    nachname: {
      required: "Nachname ist ein Pflichtfeld",
			nameFormat: "Nur Buchstaben Leerzeichen . und - sind erlaubt"
    },
    vorname: {
      required: "Vorname ist ein Pflichtfeld",
			nameFormat: "Nur Buchstaben Leerzeichen . und - sind erlaubt"
    },
		land: {
      required: "Land ist ein Pflichtfeld",
			landFormat: "Nur (Deutschland | Niederlande | Frankreich) erlaubt"
    },
    plz: {
      required: "PLZ ist ein Pflichtfeld",
      digits: "Nur Zahlen Bitte",
      plzFormat: "NUR Zahlen sind erlaubt (5-stellig)"
    },
		city: {
      required: "Wohnort ist ein Pflichtfeld",
			ortFormat: "Nur (Paris|Lyon|Amsterdam|Rotterdam|Hamburg|Berlin|München) erlaubt"
    },
    mail: {
      required: "E-Mail ist ein Pflichtfeld",
      mailFormat: "E-Mail-Muster: test@test.de"
    },
    pwd1: {
      required: "Passwort ist ein Pflichtfeld",
      rangelength: "NUR 6 bis 12 Zeichen",
			pwdFormat: "Muster: zwischen 6 und 12 Zeichen sind erlaubt"
    },
    pwd2: {
      required: "Bitte Passwort wiederholen",
      equalTo: "Passwörter stimmen nicht überein"
    },
    tag: {
      required: "Tag ist ein Pflichtfeld",
			tagFormat: "Muster: TT (2stellige Zahl)"
    },
		monat: {
      required: "Monat ist ein Pflichtfeld",
			monatFormat: "Muster: MM (2stellige Zahl)"
    },
		jahr: {
      required: "Jahr ist ein Pflichtfeld",
			jahrFormat: "Muster: JJJJ (4stellige Zahl)"
    }
  }//ende messages

});//ende validate form2

$("#form1").submit(function(e){
  e.preventDefault();
});


	
});//ende ready