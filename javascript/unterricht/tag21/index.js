"use strict";

jQuery(document).ready(function() {                                           //ähnlich wie async
  jQuery("p").css("color","#cd0000");                                         //html p angesprochen. css: eigenschaft und wert
  let absatz = $("p.absatz");                                                 //$ ersetzt jQuery, .absatz class in p angesprochen
  //$(absatz).css("background-color","#999");                                 //spricht die variable an
  $("p.absatz").css("background-color","#000").css("color","#fff");           //kann verkettet werden
  $("#absatz").css("font-size","2rem");
  //$("li:eq(3)").css("background-color","#dc3545");                          //li index 3 wird angesprochen (wie nth child)
  //$("ul li:not(li:eq(2)").css("background-color","#dc3545");                //formatiert nicht li index 2 im ul
  //$(":not(.absatz, #absatz)").css("background-color","#dc3545");

  //===============================================================================================================
  $("th, td").css("color","#999");                                            //spricht td in th an
  /*$("#absatz").click(function() {                                           //wenn man klickt
    $("#absatz").css("color","#0f0");                                         //bekommt #absatz css
  });*/

  /*$("p").click(function() {
    $(this).css("color","#0f0");                                              //this: der angeklickte Absatz
  });*/

  $("p").mouseenter(function() {                                              //wenn man mit der Maus drüber geht
    $(this).css("color","#0f0");
  });

  $("p").mouseout(function() {                                                //wenn man mit der Maus weg geht
    $(this).css("color","#cd0000");
  });

  //===============================================================================================================
  $("#btn1").click(function() {
    $("#auftrag").addClass("anders");
  });

  $("#btn2").click(function() {
    $("#auftrag").removeClass("anders");
  });

  $("#btn3").click(function() {
    $("#auftrag").fadeOut(2000);                                              //2000ms Geschwindigkeit, optional
  });

  $("#btn4").click(function() {
    $("#auftrag").fadeIn(1000);
  });

  $("#btn5").click(function() {
    $("#auftrag").hide(3000);
  });

  $("#btn6").click(function() {
    $("#auftrag").show(300);
  });

  $("#btn7").click(function() {
    $("#auftrag").fadeToggle(300);
  });

  $("#btn8").click(function() {
    $("#auftrag").toggleClass("anders");
  });

  //===============================================================================================================

  $("ul li:has(ul)").find("a:first").css({"color":"#f00","font-size":"1.3rem"});      //das "ul li" was ein ul in sich hat, finde das erst a, gib dem css
});                                                                           //Ende ready