"use strict";

jQuery(document).ready(function() {
    $("form").hide();
    $("h2").mouseenter(function() {
        $(this).css("cursor","pointer");
    });
    $("h2").click(function() {
        $("form").toggle();
    });

    function createElement(element) {
        let message = $(element).attr("title");
        $(element).after("<strong class='error'>" + message + "</strong>");
        $(element).focus();
        if($("strong").hasClass("error")) {
            $(element).parent().addClass("border");
          }
    }

    function formAuswertung() {
        $(".error").hide();
        $(".error").remove();
        $("input").removeClass("border");

        let msg = "";
        let anrede = $("#anrede").val();
        let nn = $("#nn").val();
        let vn = $("#vn").val();
        let ort = $("#ort").val();
        let plz = $("#plz").val();
        let str = $("#str").val();
        let mail = $("#mail").val();
        let pw1 = $("#pw1").val();
        let pw2 = $("#pw2").val();

        let myOrt = [
            "Aachen",
            "Aschaffenburg",
            "Augsburg",
            "Berlin",
            "Bocholt",
            "Bochum",
            "Bonn",
            "Bremen",
            "Celle",
            "Chemnitz",
            "Delmenhorst",
            "Dortmund",
            "Düsseldorf",
            "Gera",
            "Göttingen",
            "Hamburg",
            "Hannover",
            "Hildesheim",
            "Karlsruhe",
            "Köln",
            "Leipzig",
            "München",
            "Stuttgart"
          ];

        let anredeReg = /^[a-zäöüß]+$/i;
        let nameReg = /^[a-zäöüß]+$/i;
        let strReg = /^[a-zäöüß\-\.\s]{2,30}\s[0-9a-z]{1,5}$/i;
        let plzReg = /^[0-9]{5}$/;
        let mailReg = /^[a-zA-Z0-9\-\.\_]{2,10}@[a-z\-]{3,10}\.[a-z]{2,5}$/;
        let pwReg = /^[a-zA-Z0-9\-\_\!\?\.]{8,}$/;
        
        $("#ort").autocomplete({source: myOrt});
        console.log(anrede);
        if(anrede === "") {
            createElement("#anrede");
        } else if(!anredeReg.test(anrede)) {
            createElement("#anrede");
        } else if(nn === "") {
            createElement("#nn");
        } else if(!nameReg.test(nn)) {
            createElement("#nn");
        } else if(vn === "") {
            createElement("#vn");
        } else if(!nameReg.test(vn)) {
            createElement("#vn");
        } else if(ort === "") {
            createElement("#ort");
        } else if(plz === "") {
            createElement("#plz");
        } else if(!plzReg.test(plz)) {
            createElement("#plz");
        } else if(str === "") {
            createElement("#str");
        } else if(!strReg.test(str)) {
            createElement("#str");
        } else if(mail === "") {
            createElement("#mail");
        } else if(!mailReg.test(mail)) {
            createElement("#mail");
        } else if(pw1 === "") {
            createElement("#pw1");
        } else if(!pwReg.test(pw1)) {
            createElement("#pw1");
        } else if(pw2 === "") {
            createElement("#pw2");
        } else if(pw1 !== pw2) {
            msg = "Passwörter stimmen nicht überein";
            $("#pw2").after("<strong class='error'>" + msg + "</strong>");
        }
    };//ende formauswertung

    $("#submit").click(function(e) {
        e.preventDefault();
        formAuswertung();
      });
});