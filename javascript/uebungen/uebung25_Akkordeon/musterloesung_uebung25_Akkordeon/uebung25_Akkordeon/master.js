"user strict";
$(document).ready(function(){
	//Formular verstecken####################################### 
	$("#form form").hide();
	$("#form h3").click(function(){
		$(this).toggleClass("unten");
		var a = $("#form h3");
		if(a.hasClass("unten")){
			a.next("form").slideDown(1000);
			//animate({"height":"show"},1000);
		}
		else{
			a.next("form").slideUp(1000);
			//animate({"height":"hide"},1000);
		}
		});
	//#########################################################
	//akkordeon
	$("#akkordeon").accordion({
		header: "h2",
		event: "click",
		active: false,
		collapsible: true,
		heightStyle: "content"
	});

	//###########################################################
	//Gallerien auf der rechten Seite

	//###########################################################
	$(".gallery").beforeAfter();
});//ende ready