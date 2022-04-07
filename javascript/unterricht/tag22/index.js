"use strict";

jQuery(document).ready(function() {
  $("#bild1").mouseover(function() {
    $(this).attr("src", "../images/big/bild-01.jpg")
  });

  $("#bild1").mouseout(function() {
    $(this).attr("src", "../images/small/bild-01.jpg")
  });

  $("h2").next("p").css({
    "background-color":"#efefef",
    "color":"#333",
    "padding":"10px"
  });

  $("a[href^=http]").css({
    "background-color":"#cd0000",
    "color":"#fff",
    "padding":"5px 10px",
    "display":"inline-block",
    "text-decoration":"none"
  });

  $("a:contains(Mehr Info hier)").css({
    "background-color":"#333",
    "color":"#fff",
    "padding":"5px 10px",
    "display":"inline-block",
    "text-decoration":"none"
  });

  $("#liste").click(function() {
    //document.createElement
    let li = jQuery.parseHTML("<li>Mango</li>");
    // $(this).append(li);                                                    //hängt an die Liste an
    // $(this).prepend(li);                                                   //stellt an den Anfang der Liste
    // $(this).before(li);                                                    //stellt das li vor das ul
    // $(this).after(li);                                                     //stellt das li nach das /ul
    $(this).remove();                                                         //entfernt
  });

  $(".gallery-item").click(function(event) {
    event.preventDefault();
    // let overlay = jQuery.parseHTML("<div id='overlay'></div>");
    let overlay = $.parseHTML("<div id='overlay'></div>");
    $("body").append(overlay);

    let image = $.parseHTML("<img id='overlay-image'></img>");
    let href = $(this).attr("href");
    $(image).attr("src",href);
    $(overlay).append(image);                                                 //oder overlay.append(image)

    $("#overlay").click(function() {
      $(this).remove();
    });
  });


});