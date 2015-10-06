
	var fecha = new Date();
	dia_value = fecha.getDate();
	month_value = fecha.getMonth();
	if ( month_value == 0 )            
		month = "Enero";
	else if ( month_value == 1 )
		month = "Febrero";
	else if ( month_value == 2 )
		month = "Marzo";
	else if ( month_value == 3 )
		month = "Abril";
	else if ( month_value == 4 )
		month = "Mayo";
	else if ( month_value == 5 )
		month = "Junio";
	else if ( month_value == 6 )
		month = "Julio";
	else if ( month_value == 7 )
		month = "Agosto";
	else if ( month_value == 8 )
		month = "Septiembre";
	else if ( month_value == 9 )
		month = "Octubre";
	else if ( month_value == 10 )
		month = "Noviembre";
	else if ( month_value == 11 )
		month = "Diciembre";
	year_value = fecha.getFullYear();
	document.getElementById("fecha").innerHTML = (dia_value + " de " + month + " " + year_value);