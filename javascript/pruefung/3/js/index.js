"use strict";

jQuery(document).ready(function () {
    let info = "";
    $.get({
        url: "teilnehmer.json",
        dataType: "json"
    })
    .done(function (data) {
        // console.log(data);
        let teilnehmer = data.teilnehmer;
        // console.log(info);
        $.each(teilnehmer, function (i, element) {
            let herrFrau = "";
            if (element.maennlich === true) {
                herrFrau = "Herr";
                info += `<h2>${herrFrau} ${element.name} ${element.vorname}</h2>
                        <div class="mann">
                        <img src="${element.pic}" class="float">
                        <p><strong>Wohnort: </strong>${element.stadt}</p>
                        <p><strong>E-Mail: </strong>${element.email}</p>
                        <p><strong>Info: </strong>${element.kurze_info}</p>
                        </div>`;
            } else {
                herrFrau = "Frau";
                info += `<h2>${herrFrau} ${element.name} ${element.vorname}</h2>
                        <div class="frau">
                        <img src="${element.pic}" class="float">
                        <p><strong>Wohnort: </strong>${element.stadt}</p>
                        <p><strong>E-Mail: </strong>${element.email}</p>
                        <p><strong>Info: </strong>${element.kurze_info}</p>
                        </div>`;
            }
        });
        $("#jsonDaten").html(info);
        $("#jsonDaten").accordion({
            heightStyle: "content",
            collapsible: true,
            active: false
        });
    })
    .fail(function () {
        console.log("Datei nicht gefunden");
    });

    //Formular
    function createElement(element) {
        let value = $(element).attr("title");
        console.log(value);
        $(element).before("<strong class='error'>" + value + " ist ein Pflichtfelt</strong>");
        $(element).focus();
        }

    //Uhr

    function timestamp() {
        let now = new Date();
        let currentHour = now.getHours();
        let currentMinute = now.getMinutes();
        let currentSecond = now.getSeconds();

        if (currentHour < 10) {
            currentHour = '0' + currentHour;
        }
        if (currentMinute < 10) {
            currentMinute = '0' + currentMinute;
        }
        if (currentSecond < 10) {
            currentSecond = '0' + currentSecond;
        }
        $("#uhr").val(`${currentHour}:${currentMinute}:${currentSecond}`);
        setTimeout(timestamp, 1000);
    }
    timestamp();


    function formAuswertung() {
        $(".error").hide();
        $(".error").remove();
        $("div").removeClass("border");
        let anrede = $("#anrede").val();
        let name = $("#name").val();
        let vorname = $("#vorname").val();
        let mail = $("#mail").val();
        let kurs = $("#kurs").val();
        let uhr = $("#uhr").val();

        let musterAnrede = /^(herr|frau|divers)$/i;
        let musterName = /^[a-z\s\.\-]+$/i;
        let musterMail = /^[a-z\.\-\_]+@[a-z\.\-]+$/i;
        let musterKurs = /^(javascript|php|html|jquery)$/i;

        let output = `Vielen Dank für Ihre Angaben!<br>${anrede} ${name}, ${vorname}<br>E-Mail: ${mail}<br>Kurs: ${kurs}<br>Angemeldet am: ${uhr}`;

        if (anrede === "") {
            createElement("#anrede",);
        } else if (!musterAnrede.test(anrede)) {
            $("#anrede").before("<strong class='error'>Anrede darf nur die Werte \"Herr, Frau oder Divers\" haben!</strong>");
            $("#anrede").focus();
        } else if (name === "") {
            createElement("#name");
        } else if (!musterName.test(name)) {
            $("#name").before("<strong class='error'>Name darf nur Buchstaben, Leerzeichen, . oder - haben!</strong>");
            $("#name").focus();
        } else if (vorname === "") {
            createElement("#vorname");
        } else if (!musterName.test(vorname)) {
            $("#vorname").before("<strong class='error'>Name darf nur Buchstaben, Leerzeichen, . oder - haben!</strong>");
            $("#vorname").focus();
        } else if (mail === "") {
            createElement("#mail");
        } else if (!musterMail.test(mail)) {
            $("#mail").before("<strong class='error'>Mail muss ein @ haben!</strong>");
            $("#mail").focus();
        } else if (kurs === "") {
            createElement("#kurs");
        } else if (!musterKurs.test(kurs)) {
            $("#kurs").before("<strong class='error'>Kurse: javascript, php, html oder jquery</strong>");
            $("#kurs").focus();
        } else {
            $("#output").html(output);
            
        
        }
        };

        $("#submit").click(function(e) {
            e.preventDefault();
            formAuswertung();
        });

        $("#reset").click(function() {
            $("#output").remove();
        });

    

}); //Ende ready