"use strict";


//####################################################
jQuery(document).ready(function(){
    $("#inhalt").click(function() {
        $(this).append("hallo");
    });
    $(".box").click(function() {
        $(this).appendTo("#inhalt");
    });
    $("#box1 ul li").first()
                    .css({"font-size":"2rem","color":"#00bfff"})
                    .end()                                                          //beendet die ursprüngliche formatierung, fängt bei 0 an und gibt neue formatierung
                    .css({"font-size":"1rem","color":"#ff3030"});
    
    $("#box1 p").first()
                    .css({"border": "3px solid red"})                               //1. p rote border
                        .end()
                .last()
                    .css({"border": "3px dotted green"})                            //letzte p grüne border
                        .end()
                    .css("font-weight","bold");                                     //alles bold

    //JSON einbinden
    let info = "";
    $.get({
        url: "bilder.json",
        dataType: "json"
    })
     .done(function(data) {
        //  console.log(data);
        let bilder = data.bilder;
        console.log(bilder);
        $.each(bilder, function(i,item){
            info += "<div><img src='"+item.bild+"' alt='"+item.titel+"'><p>"+item.titel+"</p></div>";
        });
        $("#jsonDaten").html(info);

        $("#jsonDaten div").first().fadeIn(3000);

        setInterval(function(){
            $("#jsonDaten div").first().fadeOut(2500).next("div").fadeIn(3000).end().appendTo("#jsonDaten");
        },5500);
     })
     .fail(function() {
         console.log("Datei nicht gefunden");
     });

     $("#navi1 li").prepend("<span><span>");
     $("#navi1 li").each(function() {
         let linkText = $(this).find("a").text();
         $(this).find("span").text(linkText);
     });

     $("#navi1 li").hover(
                        function(){
                            $(this).find("span").stop().animate({"margin-top":"-40px"},700,"easeOutBounce");                //stop, die animation hört auf wenn man rausgeht
                        },
                        function(){
                            $(this).find("span").stop().animate({"margin-top":"0"},300);
                        });
});
//ende ready()
