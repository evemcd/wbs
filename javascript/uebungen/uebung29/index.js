"use strict";

jQuery(document).ready(function () {
    $.get({
            url: "users.php",
            dataType: "text"
        })
        .done(function (data) {
            // console.log(data);
            $("#phpDaten").html(data);

            let value = "";
            $("#user").change(function () {
                value = $(this).val();
                if (value === "") {
                    $("#userDaten").text("");
                }
            });
            $(".info").hide();
            // document.querySelectorAll(".box").forEach(function (element) {
            // $(".box").animate({"right":"250px"}, 1000);
            // });
            document.querySelectorAll("#user").forEach(function (element, i) {
                $(element).animate({
                    "height": "300px"
                }, 1000);

                $(element).click(function (e) {

                    e.preventDefault();
                    $(".mehrInfo").hide();
                    let overlay = $.parseHTML("<div id='overlay'></div>");
                    $("body").append(overlay);
                    document.getElementById("overlay").innerHTML = document.querySelectorAll(".info")[i].innerHTML;

                    $("#overlay").click(function () {
                        $(this).remove();
                    });

                });

            })
        });

//Uhrzeit
    let timestamp = () => {
        function colorChange() {
            const farbe = ["#63b8ff", "#32cd32", "#9b30ff", "#ffa500"];
            const zufall = Math.floor(Math.random() * farbe.length);
            return farbe[zufall];
          }

        const today = new Date();
        let currentHour = today.getHours();
        let currentMinute = today.getMinutes();
        let currentSecond = today.getSeconds();

        if (currentHour < 10) {
            currentHour = '0' + currentHour;
        }
        if (currentMinute < 10) {
            currentMinute = '0' + currentMinute;
        }
        if (currentSecond < 10) {
            currentSecond = '0' + currentSecond;
        }
        const currentTime = `<div>${currentHour}<span>:</span>${currentMinute}<span>:</span>${currentSecond}</div>`;
        document.getElementById('date').innerHTML = currentTime;

        $("span").animate({color: colorChange()});
    }
    timestamp();
    setInterval(timestamp, 1000);

//Formular
    $("form").validate({
        rules: {
            nname: {
                j
            }
        },
        messages: {
            nname: {
                j
            }
        }
    })

});