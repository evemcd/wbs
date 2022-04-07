$(document).ready(function(){

	//+++++++++++++++++++++++++++++++++++++++++++++++++
	//box2
	$("#box div p").css({
		"background-color":"#fff",
		"margin-bottom":"2px"
	});
	//------------
	$("#box div").hide();
	//------------
	$("#box h2").click(function(){
		//$(this).next().fadeToggle();
		$(this).next().animate({"opacity":"toggle","height":"toggle"},1000);
	});
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	//infoBereich
	$("#info li:first").css("margin-left","0");
	$("#info div").hide();
	$("#info li h3").click(function(){
		$(this).next().fadeToggle(800);
	});
	
});//ende ready