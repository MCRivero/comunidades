var region = "";
var option = "";
var tema = "";
var medio = "";
var temp = "";
var pos = "";
var loc = "";
var dir = "";
var consejo = "";

$(document).ready(function() {
    	
	//Para fozar a que reconozca los acentos y otros caracteres
	$.ajaxSetup({
		'beforeSend' : function(xhr) {
		xhr.overrideMimeType('text/html; charset=iso-8859-1');
		}
	});
	
	document.getElementById("mySelect").selectedIndex = -1;
	
	// Para el control de la barra de menu de Inicio
	$("#menu li a").click(function(e) {	
		var url=$(this).attr("href");
		$("#contenido").load(url);
		e.preventDefault();
	});
	// Cuando se hace click en una region esta seccion de codigo
	// desmarca la region previamente seleccionada antes del click,
	// marca la pestaña de la region clickeada como seleccionada y
	// almacena en variable region el valor del href de la region 
    // seleccionada para posterior uso.
	
	$("#regiones li a").click(function(e){
		//$("#regiones").find(".selected").removeClass("selected");
		document.getElementById("mySelect").selectedIndex = -1;
		dir = "";
		consejo = "";
		$(this).addClass("selected");
		region = $(this).attr("href");
		option = "#cm";
		$("#contenido").load(region + " " + option);
		e.preventDefault();
	});
	
	// Cuando este cargada la pagina de los consejos comunales y seleccionen uno en particular
	// se cargará el html correspondiente a dicho consejo comunal
	// LA PRIMERA ENTRADA ES AQUI
	
	$("#contenido").on('click', ".cc", function(e) {	
		dir = $(this).attr("href");
		$("#contenido").load(dir + " " + option);
		consejo = "cc";
		e.preventDefault();
	});
	
	// Detecta click de un tema en select list, obtiene el tema que se desea cargar 
	// de la region dada y se carga la seccion de la region y tema. Finalmente se 
	// obtiene el nombre de  la region para identificar seccion acargar si posterirmente
	// se selecciona un medio
	 
	$("select").click(function(){
		if (consejo != "cc"){
			window.alert("Debe seleccionar un consejo comunal");
			//desmarco el area seleccionada si el usuario no ha seleccionado un Municipio
			document.getElementById("mySelect").selectedIndex = -1;
			exit();
		}
		
	    tema = $(this).val();
		option = "#" + tema;	
		$("#contenido").load(dir + "?area=" + tema  + " " + option);		
		temp = region;
		pos = temp.indexOf(".");
		loc = temp.substring(0, pos);
	});
	
	// Detecta click en medios y determina la pagina a cagar cuyo nombre
	// es una combinación de region, tema y medio
	
	$("#media li a").click(function(e){
		medio=$(this).attr("href");
		temp = region;
		pos = temp.indexOf(".");
		loc = temp.substring(0, pos);
		switch(medio) {
			case "video.html":
				$("#contenido").load(medio);
				e.preventDefault();
				break;
			case "tvweb.html":
				$("#contenido").load(medio);
				e.preventDefault();
				break;
			case "ustream.html":
				$("#contenido").load(medio);
				e.preventDefault();
				break;				
			case "audio.html":
				$("#contenido").load(medio);
				e.preventDefault();
				break;
			case "periodico.html":
				$("#contenido").load(medio);
				e.preventDefault();
				break;
			case "#":
				if (loc == ""){
					window.alert("Seleccione primero un Municipio");
					exit();
				}
				medio = "historia_local.html";
				$("#contenido").load(loc + medio);
				e.preventDefault();
				break;
			default:
				window.alert("Seleccion invalida");
		}
	});	

	//$('#galeria').cycle({speed: 2000, timeout: 1500});
	$('#galeria').cycle('fade');
});

