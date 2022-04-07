"use strict";

jQuery(document).ready(function() {
    $("#box1 p").hide();
    $("#box2 li").hide();
    $("h3").click(function() {
        $(this).next("p").animate({"height":"toggle"}, 1000);
        $(this).next("li").animate({"height":"toggle"}, 1000);
    });

    $("#box2 h3").css({"background-color":"#ceab10","color":"white","font-weight":"bold","text-align":"center"});
    $("#box2 li").css({"background-color":"white","color":"black"});

});