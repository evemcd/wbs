"use strict";

let request = new XMLHttpRequest();
let ausgabe = "";
request.addEventListener("load", () => {
    if(request.status === 200) {
      let daten = request.responseXML;

      let glossar = daten.getElementsByTagName("art");
     
      for(let i = 0; i < glossar.length; i++) {
          let eintrag = glossar[i].getElementsByTagName("eintrag");
          ausgabe +="<ul>";
          ausgabe +="<li>"+glossar[i].getAttribute("title")+"</li>";
          for(let j=0; j < eintrag.length; j++) {
              console.log(object);
          }
          ausgabe +="</ul>";
      }
      //ende for
    }
    //ende if
    document.getElementById("wirtschaft").innerHTML = ausgabe;
});

request.open("GET","glossar.xml",true);
request.responseType = "document";
request.setRequestHeader("Accept", "text/xml");
request.send();