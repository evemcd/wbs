"use strict";

jQuery(document).ready(function () {
  function createElement(element) {
    let msg1 = $(element).attr("title");
    $(element).after("<strong class='error'>"+msg1+"</strong>");
    $(element).focus();
    if($("strong").hasClass("error")) {
      $(element).parent().addClass("border");
    }
  }

  function formAuswertung() {
    $(".error").hide();
    $(".error").remove();
    $("div").removeClass("border");
    let nn = $("#nachname").val();
    let vn = $("#vorname").val();
    let ort = $("#ort").val();
    // let msg = "";

    let nameReg = /^[a-zäöüß]+$/i;              //+ mindestens einmal, i ignore case
    //<div> <input id="nachname"> <strong class="error"></strong> </div>
    if(nn === "") {
      // msg = "Bitte Nachname eingeben";
      // msg = $("#nachname").attr("title")
      // $("#nachname").after("<strong class='error'>"+msg+"</strong>");
      // $("#nachname").focus();
      // $("#nachname").parent().css("border","1px solid #dc3545");
      createElement("#nachname");
    } else if(!nameReg.test(nn)) {
      createElement("#nachname");
    } else if(vn === "") {
      createElement("#vorname");
    } else if(ort === "") {
      createElement("#ort");
    }

  }; //Ende formAuswertung

  //============================================
  $("#form1").validate({
    rules: {
      nachname: "required",
      vorname: "required",
      ort: "required"
    },
    messages: {
      nachname: "Bitte Nachname eingeben",
      vorname: "Bitte Vorname eingeben",
      ort: "Bitte Wohnort eingeben"
    }
  }); //ende validate form1

  //======================================================================
  $.validator.addMethod("ortFormat", function(value) {
    return value.match(/^(chemnitz|gera|hannover|hildesheim)$/i);
  });

  $.validator.addMethod("gebFormat", function(value) {
    return value.match(/^\d{2}-\d{2}-\d{4}$/i);
  });
  //======================================================================


  $("#form2").validate({
    rules: {
      nname: {
        required: true,
        minlength: 2,
        maxlength: 10
      },
      vname: {
        required: true,
        rangelength: [2,10]
      },
      plz: {
        required: true,
        digits: true,
        minlength: 5,
        maxlength: 5
      },
      mail: {
        required: true,
        email: true
      },
      url: {
        required: false,
        url: true
      },
      pwd1: {
        required: true,
        rangelength: [6,12]
      },
      pwd2: {
        required: true,
        equalTo: pwd1
      },
      city: {
        required: true,
        ortFormat: true
      },
      geb: {
        required: true,
        gebFormat: true
      }
    },
    messages: {
      nname: {
        required: "Nachname ist ein Pflichtfeld",
        minlength: "Mindestens 2 Zeichen sind erforderlich",
        maxlength: "Maxial 10 Zeichen sind erlaubt"
      },
      vname: {
        required: "Vorname ist ein Pflichtfeld",
        rangelength: "2 bis 10 Zeichen"
      },
      plz: {
        required: "PLZ ist ein Pflichtfeld",
        digits: "Nur Zahlen erlaubt",
        minlength: "PLZ muss 5 Stellen haben",
        maxlength: "PLZ muss 5 Stellen haben"
      },
      mail: {
        required: "E-Mail ist ein Pflichtfeld",
        email: "E-Mail-Muster: test@test.de"
      },
      url: {
        url: "URL-Muster: http://spiegel.de"
      },
      pwd1: {
        required: "Passwort ist ein Pflichtfeld",
        rangelength: "6 bis 12 Zeichen"
      },
      pwd2: {
        required: "Passwort wiederholen",
        equalTo: "Passwörter stimmen nicht überein"
      },
      city: {
        required: "Wohnort ist ein Pflichtfeld",
        ortFormat: "falsche Stadt: Chemnitz, Gera, Hannover, Hildesheim"
      },
      geb: {
        required: "Geburtstag ist ein Pflichtfeld",
        gebFormat: "Muster: TT-MM-JJJJ"
      }
    }
  }); //ende validate form1
  


  $("#anmelden").click(function(e) {
    e.preventDefault();
    formAuswertung();
  });
}); //Ende ready