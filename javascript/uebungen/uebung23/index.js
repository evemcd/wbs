"use strict";

jQuery(document).ready(function() {
    $("thead").mouseenter(function() {
        $(this).css({"border-bottom":"3px solid blue","cursor":"pointer"});
    });
    $("thead").mouseout(function() {
        $(this).css({"border-bottom":"none","cursor":"default"});
    });

    $("thead").click(function() {
        // $("tbody").show(300);
        $("tbody").toggleClass("display");
    });

    $("tbody tr:first").css({"background-color":"darkgrey","color":"pink"});
    $("tbody tr:last").css({"background-color":"darkgrey","color":"lightcyan"});
    $("tbody tr:eq(3)").css({"background-color":"darkgrey","color":"orange"});

    $("tbody tr").mouseenter(function() {
        $(this).addClass("hover");
    });
    $("tbody tr").mouseout(function() {
        $(this).removeClass("hover");
    });
});