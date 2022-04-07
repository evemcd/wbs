"use strict";

jQuery(document).ready(function () {
  function colorChange() {
    const farbe = ["#63b8ff", "#32cd32", "#9b30ff", "#ffa500"];
    const zufall = Math.floor(Math.random() * farbe.length);
    return farbe[zufall];
  }
  //animate({},1000, function() {})
  // $("#kreis").click(function() {
  //   $(this).animate({},1000,function() {
  //     $(this).animate({
  //       width: "500px",
  //       height: "500px",
  //       marginLeft: "100px",
  //       marginTop: "100px"
  //     },
  //     1000,
  //     function() {
  //       // $(this).css("background-color", "#198754");
  //       $(this).css("background-color", colorChange());
  //     });
  //   });
  // });

  let gross = true;
  $("#kreis").click(function() {
    if(gross) {
      $(this).animate({
        // backgroundColor: "#198754",
        backgroundColor: colorChange(),
        width: "500px",
        height: "500px",
      },1000,function() {
        $(this).css("background-color", colorChange());
      });
    } else {
      $(this).animate({
        backgroundColor: "#dc3545",
        width: "150px",
        height: "150px"
      },1000)
    }
    gross = !gross;
  });

  $("#accordion").accordion({
    heightStyle: "content",
    collapsible: true, 
    active: false
    // active: 1
  });

  let myOrt = [
    "Aachen",
    "Aschaffenburg",
    "Augsburg",
    "Berlin",
    "Bocholt",
    "Bochum",
    "Bonn",
    "Bremen",
    "Celle",
    "Chemnitz",
    "Delmenhorst",
    "Dortmund",
    "Düsseldorf",
    "Gera",
    "Göttingen",
    "Hamburg",
    "Hannover",
    "Hildesheim",
    "Karlsruhe",
    "Köln",
    "Leipzig",
    "München",
    "Stuttgart"
  ];

  $("#ort").autocomplete({                        //kommt von der UI Datei
    source: myOrt
  });

  // $(document).tooltip();                          //document spricht die ganze Seite an, tooltip spricht title an und formatiert es
  $(document).tooltip({
    track: true                                       //title ist da, wo die Maus ist, tracks the mouse
  });

  $("#nachname").tooltip({
    show: {
      effect: "slideDown",
      delay: 250
    }
  });

  $("#geburtstag").tooltip({
    hide: {
      effect: "explode",
      delay: 250
    }
  });

  $("#geburtstag").tooltip({position: {my: "left+10", at: "right center"}});
  $("input").tooltip({position: {my: "left+20", at: "right center"}});

  $("#nachname").tooltip({tooltipClass: "bunt"});

  $("#geburtstag").datepicker();

  $("#hauptmenue").menu();


  $("#tabs").tabs();

  $("form").draggable();

  $(".gallery").beforeAfter();

  $("#anmelden").click(function() {
    let nn = $("#nn").val();
    let vn = $("#vn").val();
    if(nn === "") {
      // alert("Bitte Nachname eingeben");
      alert($("#nn").attr("title"));
    } else if(vn === "") {
      alert($("#vn").attr("title"));
    } else {
      alert(nn + ", " + vn);
    }
  });
});