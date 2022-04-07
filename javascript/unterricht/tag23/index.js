"use strict";

jQuery(document).ready(function () {
  $("#box1 .info").hide();
  $("#box1 h2").click(function () {
    $(this).toggleClass("close");
    if ($(this).hasClass("close")) {
      //$(this).next().fadeIn();                                  //oder .next(".info")
      $(this).next(".info").animate({
        "height": "show"
      }, 1000);
    } else {
      //$(this).next(".info").fadeOut();
      $(this).next(".info").animate({
        "height": "hide"
      }, 300);

    }
  });

  $("#box2 .content").hide();
  // $("#box2 h2").mouseover(function() {
  //   $(this).next(".content").fadeIn(1000);
  // });
  // $("#box2 h2").mouseout(function() {
  //   $(this).next(".content").fadeOut(600);
  // });

  //hover(mouseover,mouseout)
  // hover(function(){},function(){})

  $("#box2 h2").hover(
    function () {
      $(this).next(".content").fadeIn(1000);
    },
    function () {
      $(this).next(".content").fadeOut(600);
    });

  $("#box3 .inhalt").hide();
  $("#box3 h2").click(function() {
    // $(this).next(".inhalt").fadeToggle();
    $(this).next(".inhalt").animate({"height":"toggle"}, 1000);
  });

  $("#box4 ul li:nth-of-type(1)").css("background-color","#ffb03b");
  $("#box4 ul li:nth-of-type(2)").css("background-color","#ff7d3e");
  $("#box4 ul li:nth-of-type(3)").css("background-color","#c2a25c");
  $("#box4 ul li:nth-of-type(4)").css("background-color","#4c443c");
  $("#box4 div").hide();
  $("#box4 h2").click(function() {
    // $(this).next("div").animate({"height":"toggle"}, 700);
    $(this).next("div").animate({"height":"toggle"}, 700, "easeOutBounce");       //jquery ui
    // $(this).next("div").animate({"height":"toggle"}, 700, "easeinBounce");
    $(this).toggleClass("back");
  });
});