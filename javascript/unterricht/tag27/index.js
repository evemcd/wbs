"use strict";

//####################################################
jQuery(document).ready(function(){
    function animation() {
        $("#navi1 ul li a").fadeTo(3000, 0.04).fadeTo(2000, 1);
        setTimeout(animation, 5000);
    }

    animation();

    //ajax und php
    $.get({
        url: "daten.php",
        dataType: "text"
    })
     .done(function(data) {
         console.log(data);
         $("#phpDaten").html(data);

         let value = "";
         $("#user").change(function() {
            //  alert("change funktioniert");
            // $("#userDaten").html($(this).val());
            value = $(this).val();
            // $("#userDaten").html(value);
            if(value === "") {
                $("#userDaten").text("");
            } else {
                $.get({
                    url: "profil.php?id="+value,
                    dataType: "text"
                }).done(function(data) {
                    $("#userDaten").html(data);
                });
            }
         });
     });



});
//ende ready()

