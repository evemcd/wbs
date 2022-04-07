"use strict";

jQuery(document).ready(function(){

//-----------------------------------------------------
function createElement(element) {
  let msg1 = $(element).attr("title");
  $(element).after("<strong class='error'>"+msg1+"</strong>");
  $(element).focus();
  if( $("strong").hasClass("error") ) {
    $(element).parent().addClass("border");
  }
}
//-----------------------------------------------------
  function formAuswertung() {
    $(".error").hide();
    $(".error").remove();
    $("div").removeClass("border");

    let nn = $("#nachname").val();
    let vn = $("#vorname").val();
    let ort = $("#ort").val();
    let msg = "";

    let nameReg = /^[a-zäöüß]+$/i;
    //-----------------------------
    //<div class="mb-1 p-2 border"> <input id="nachname" /> <strong class='error'></strong> </div>
    //-----------------------------
    if(nn === "") {
      //msg = "Bitte Nachname eingeben";
      //msg = $("#nachname").attr("title");
      //$("#nachname").after("<strong class='error'>"+msg+"</strong>");
      //$("#nachname").focus();
      //$("#nachname").parent().css("border","solid 1px #dc3545");
      createElement("#nachname");
    }
    else if(!nameReg.test(nn)) {
      createElement("#nachname");
    }
    else if(vn === "") {
      createElement("#vorname");
    }
    else if(ort === "") {
      createElement("#ort");
    }

  } //ende formAuswertung
//###################################################################
$("#form1").validate({
  /*
  rules: { feldName: "ValidierungsTyp" },
  messages: { feldName: "Meldungen" }
  */
  rules: {
    nachname: "required",
    vorname: "required",
    ort: "required"
  },
  messages: {
    nachname: "Nachname ist ein Pflichtfeld",
    vorname: "Vorname ist ein Pflichtfeld",
    ort: "Wohnort ist ein Pflichtfeld"
  }

});//ende validate form1
//###################################################################
//https://jqueryvalidation.org/jQuery.validator.addMethod/?__cf_chl_jschl_tk__=pmd_YR..rRMt7RqTnCpBAptZppeEJIRbu2crAimHPzcEMvo-1631874709-0-gqNtZGzNAfujcnBszQh9
//$.validator.addMethod("nameDerEigenenMethode", function(value,element){});
//element ist optional
$.validator.addMethod("ortFormat", function(value) {
  return value.match(/^(chemnitz|gera|hannover|hildesheim)$/i);
});

//-------------------
//Muster für Geburtstag(sehr einfach)
//TT-MM-YYYY
$.validator.addMethod("gebFormat", function(value) {
  return value.match(/^\d{2}-\d{2}-\d{4}$/);
})
//###################################################################
$("#form2").validate({
  rules: {
    nname: {
      required: true,
      minlength: 2, //mindestens die angegebene Anzahl der Zeichen
      maxlength: 10 //maximal die angegebene Anzahl der Zeichen
    },
    vname: {
      required: true,
      rangelength: [2,10] //Kombination aus minlength und maxlength
    },
    plz: {
      required: true,
      digits: true, //NUR Zahlen sind erlaubt
      minlength: 5,
      maxlength: 5
      //rangelength: [5,5]
    },
    mail: {
      required: true,
      email: true
    },
    url: {
      //required: false, //optional entweder gar nicht schreiben oder false
      url: true
    },
    pwd1: {
      required: true,
      rangelength: [6,12]
    },
    pwd2: {
      required: true,
      equalTo: pwd1
      /*
				Inhalt vom Feld pwd2 soll mit Feld pwd1 übereinstimmen
				hier sucht er im formular nach id="pwd1"
					
				hier wird nach id in form gesucht
				equalTo: "#pwd1"
				bedeutet der Wert von pwd2 muss = dem Wert von Feld id="pwd1" sein
			*/
    },
    city: {
      required: true, 
      ortFormat: true
    },
    geb: {
      required: true,
      gebFormat: true
    }
  }, //ende rules
  messages: {
    nname: {
      required: "Nachname ist ein Pflichtfeld",
      minlength: "Mindestens 2 Zeichen sind erforderlich",
      maxlength: "Maximal 10 Zeichen sind erlaubt"
    },
    vname: {
      required: "Vorname ist ein Pflichtfeld",
      rangelength: "Zwischen 2 und 10 Zeichen sind erlaubt"
    },
    plz: {
      required: "PLZ ist ein Pflichtfeld",
      minlength: "Zu wenig Zahlen : 5-stellig",
      maxlength: "Nicht mehr als 5 stellige Zahl",
      digits: "Nur Zahlen sind erlaubt"
    },
    mail: {
      required: "E-Mail ist ein Pflichtfeld",
      email: "E-Mail-Muster: test@test.de"
    },
    url: {
      url: "URL-Muster: http://www.spiegel.de"
    },
    pwd1: {
      required: "Passwort ist ein Pflichtfeld",
      rangelength: "NUR 6 bis 12 Zeichen sind erlaubt"
    },
    pwd2: {
      rquired: "Bitte Passwort wiederholen",
      equalTo: "Passwörter stimmen nicht überein"
    },
    city: {
      required: "Wohnort ist ein Pflichtfeld",
      ortFormat: "Folgende Städte erlaubt: Gera, Chemnitz, Hannover, Hildesheim"
    },
    geb: {
      required: "Geburtstag nicht vergessen (Pflichtfeld)",
      gebFormat: "Format für den Geburtstag: TT-MM-YYYY"
    }
  }//ende messages
});//ende validate form2
  
//-----------------------------------------------------
$("#anmelden").click(function(e){
  e.preventDefault();
  formAuswertung();
});
//-----------------------------------------------------
//damit die Daten stehen bleiben
$("#form2").submit(function(e){
  e.preventDefault();
});

});//ende ready