"ust strict";

$(document).ready(function() {
    $("ul:nth-child(even)").css({"width":"40%","border":"1px solid red"});
    $("ul:nth-child(odd)").css({"width":"30%","border":"3px solid blue"});
    $("li:even").css({"color":"white","background-color":"black","text-align":"left"});
    $("li:odd").css({"color":"black","background-color":"white","text-align":"right"});
    $("p a").css({"color":"white","background-color":"red"});
    $("p a:contains(klicken)").css({"color":"white","background-color":"black"});
    $("h1 + p").css("background-color","cyan");
    $("h2 + p").css("background-color","pink");

});