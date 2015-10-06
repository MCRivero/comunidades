<?php
	session_start();
	
	$_SESSION['consejocomunal']="Macarisagua";

	class MyDB extends SQLite3
	{
      function __construct()
      {
         $this->open('fusil.db');
      }
	}
	$db = new MyDB();
	if(!$db){
      echo $db->lastErrorMsg();
	} else {
      echo "Opened database successfully\n <br/>";
	}
    $sql =<<<EOF
	  select imagen, encabezado, texto, enlace, area from documentos where municipio = '{$_SESSION['municipio']}' and consejocomunal = '{$_SESSION['consejocomunal']}' and area = '{$_GET['area']}';
EOF;
	$display_block = "";
	echo ($sql);
	$ret = $db->query($sql);
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
		$imagen = $row['imagen'];
		//echo "IMAGEN:  ".$imagen;
		$encabezado = $row['encabezado'];
		//echo "ENCABEZADO:  ".$encabezado;
		$texto = $row['texto'];
		//echo "TEXTO:  ".$texto;
		$enlace = $row['enlace'];
		//echo "ENLACE:  ".$enlace;
		$area = $row['area'];
		//echo "AREA:  ".$area;
	
	$display_block .= <<<EOF
		<article class="proyecto">
			<img src="$imagen"/>
			<h4>$encabezado</h4> 
			<p>$texto</p>
			<a href="$enlace">Ver documento completo</a>
			<p></p>
		</article>
EOF;
	echo "Display:  ".$display_block;
   }
   echo "Operation done successfully\n";
   $db->close();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div id="cm">
		<header>
			<h2>Macarisagua</h2>
			<h4>HISTORIA</h4>
			<h4 class="hacienda">HACIENDA MAITANA MACARISAGUA</h4>
		</header>
		<p>El nombre del consejo comunal Macarisagua viene de la zona de nuestro &aacute;mbito geogr&aacute;fico; 
			regi&oacute;n que abarcaba una gran parte de la gran finca llamada: hacienda Maitana Macarisagua, 
			conformada por una superficie de 6.100 m2, en la cual se efectu&oacute; un parcelamiento, dividido por 
			zonas o secciones como el pueblo de San Jos&eacute; de los Altos o cooperativa n&uacute;mero 1, 
			secci&oacute;n pena admirable pueblo de San Jos&eacute; zona I, zona II, zona III o Maitana, zona IV 
			tambi&eacute;n llamada Macarisagua o cortada del guayabo propiamente dicha.</p>
	
		<ul>CENSO DEMOGR&Aacute;FICO &ndash; POR ACTUALIZAR            
			<li>FAMILIA:   140</li>
			<li>MUJERES:   117</li>
			<li>HOMBRES:   118</li>
			<li>ANCIANOS:    30</li>
			<li>NI&Ntilde;OS:  25</li>
			<li>PARCELAS: 126</li>
			<li>VIVIENDAS:   126</li>
			<li>QUINTAS: NO HAY</li>
			<li>RANCHOS:  60</li>
			<li>APARTAMENTOS: NO HAY</li>
			<li>VIVIENDAS CONVENCIONALES:  NO HAY</li>
			<li>VIVIENDAS TRADICIONALES:  20</li>
			<li>VIVIENDAS DE INTER&Eacute;S SOCIAL:   5  (POR EJECUTAR POR EL SEXTO CUERPO DE INGENIERO FERROVIARIO &ndash; COMANDANTE LENIN HERRERA)</li>
		</ul>

		<h4>ESTATUTOS INTERNOS</h4>
		<p>Los voceros y voceras del consejo comunal MACARISAGUA nos reuniremos cada quince dias a partir de la 
			confirmaci&oacute;n de nuestro registro, los fines de semana en horario de la tarde, con el fin de 
			plantear y buscar soluciones a los problemas de nuestra comunidad y acordar las asambleas de ciudadanos y 
			ciudadanas, con el objeto de que estan de acuerdo y contesten con los proyectos prsentados en
			dicha asamblea, cabe destacar que cualquier planteamiento de los valores de nuestro consejo comunal 
			ser&aacute; debatido los d&iacute;as de reuni&oacute;n anteriormente expuesto.
			Es importante se&ntilde;alar que los acuerdos de nuestro consejo comunal ser&aacute;n sometidos a 
			votaci&oacute;n para llegar a un consenso y que todo sea claro y limpio ante los ojos de toda 
			la comunidad.</p>
	</div>
	
	<div id="cis">
		<header>
			<h2>Macarisagua</h2>
		</header>
		Comunas Industriales Socialistas
		<?php echo $display_block;?>
	</div>
	
	<div id="pr">
		<header>
			<h2>Macarisagua</h2>
		</header>
		<?php echo $display_block;?>
	</div>
	
	<div id="ti">
		<header>
			<h2>Macarisagua</h2>
		</header>
		Tejido Industrial
		<?php echo $display_block;?>
	</div>
	<div id="ce">
		<header>
			<h2>Macarisagua</h2>
		</header>
		Consejos Estudiantiles
		<?php echo $display_block;?>
	</div>
	<div id="cs">
		<header>
			<h2>Macarisagua</h2>
		</header>
		<?php echo $display_block;?>
	</div>
	<div style="clear:both;"></div>
</body>
</html>