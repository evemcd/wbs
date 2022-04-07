$(document).ready(function(){
//++++++++++++++++++++++++++++++++++++++++++++++ 
let info="";

$.get({
	url: "books.json",
	dataType: "json"
}).done(function(data){
	console.log(data);
	let books = data.books;
	
	$.each(books,function(i,item){
		info +="<ul class='list-group col-md-5 m-2'>";
		//info += "<li class='list-group-item fw-bold list-group-item-danger text-center'>"+item.name+"</li>";
		info += "<li class='list-group-item fw-bold list-group-item-danger text-center'>"+item.name+"</li>";
		info += "<li class='list-group-item'>Autor: "+item.autor+"</li>";
		info += "<li class='list-group-item'>Seitenanzahl: "+item.seiten+"</li>";
		info += "<li class='list-group-item'>Erscheinungsjahr: "+item.jahr+"</li>";
		info += "<li class='list-group-item'>Verlag: "+item.verlag+"</li>";
		info += "<li class='list-group-item'><span class='mehr'>Info: </span><span class='info'>"+item.info+"</span></li>";
		info +="</ul>";
		//console.log(info);
		
	});
		$("#jsonDaten").html(info);
		//##########################
		$("#jsonDaten .mehr").css({
			"color" : "#568cc6",
			"padding": "5px 20px 5px 0",
			"margin-top": "5px",
			"margin-right": "5px",
			"display": "inline-block",
			"cursor": "pointer",
		});

		
})
.fail((wert1, wert2, wert3)=>{
	console.log(wert1 + "\n"+wert2 + "\n"+wert3);
});


	
});//ende ready