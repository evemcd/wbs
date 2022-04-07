"use strict";

$(document).ready(function(){ 
	$("ul").css( {
		"background-color": "#817171",
		"list-style-type": "none",
		"margin": "5px 0"
	});
	//ungerade ul
	$("ul:odd").css({
		'background-color':'#104E8B',
		'width':'30%',
		"padding":"15px 10px"
	});
	//gerade ul
	$("ul:even").css({
		'background-color':'#FF4500',
		'padding':'5px',
		'width':'60%'
	});
	//gerade li a
	$("ul li a:even").css({
		'color':'#efefef',
		'font-weight':'bold',
		'background-color':'#3b3b3b',
		'display':'block',
		'padding':'5px',
		'text-decoration': 'none'
		});
	//ungerade li a
	$("ul li a:odd").css({
		'color':'#3b3b3b',
		'font-weight':'bold',
		'background-color':'#efefef',
		'display':'block',
		'padding':'2px',
		'text-decoration': 'none',
		'text-align':'right'
	});



	//[Attribut^Wert] matcht Elemente mit einem Attribut, das mit einem bestimmten Wert beginnt
	$("a[href^=http]").css({
		'color':'#efefef',
		'background-color':'#cd0000',
		'padding':'2px 5px',
		'text-decoration': 'underline'
	});
	//contains() Elemente, die einen bestimmten Text enthalten
	$('a:contains(Hier klicken)').css({
		'color':'#ffffff',
		'background-color':'#000',
		'padding':'2px 5px',
		'text-decoration': 'underline'
	});
	
	//Absatz nach h1
	$("h1").next("p").css({
		"width":"95%",
		"background-color":"#CDBA96",
		"padding":"10px"
	});
	//Absatz nach h2
	$("h2").next("p").css({
		"width":"85%",
		"background-color":"#FFF68F",
		"padding":"10px"
	});

	

});