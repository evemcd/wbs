"use strict";

jQuery(document).ready(function() {
    let info = "";
    $.get({
        url: "books.json",
        dataType: "json"
    })
     .done(function(data) {
        //  console.log(data);
        let buecher = data.books;
        // console.log(buecher);
        $.each(buecher, function(i, item) {
            info += "<div class='boxes'>";
            info += "<p>" + item.name + "</p>";
            info += "<p>Autor: " + item.autor + "</p>";
            info += "<p>Seitenanzahl: " + item.seiten + "</p>";
            info += "<p>Erscheinungsjahr: " + item.jahr + "</p>";
            info += "<p>Verlag: " + item.verlag + "</p>";
            info += "<p><span>Info:</span> " + item.info + "</p>";
            info += "</div>";
        });
        $("#infoBox").html(info);
        $(".boxes p:first-of-type").css({"background-color":"rgba(255, 102, 102, 0.63)","color":"rgb(133, 0, 0)","border":"1px solid rgb(133, 0, 0)","text-align":"center"});
        $(".boxes p").not(":first-of-type").css({"background-color":"white","border":"1px solid lightgrey"});
        $(".boxes p").css({"margin":"0","padding":"5px"});
        $(".boxes span").css("color","rgb(95, 134, 250)");
     });



});