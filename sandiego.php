<?php
	session_start();
	$_SESSION['consejocomunal']="San Diego";
	class MyDB extends SQLite3 {
		function __construct() {
			$this->open('fusil.db');
		}
	}
	$db = new MyDB();
	if(!$db){
      echo $db->lastErrorMsg();
	} else {
      echo "Database abierta\n <br/>";
	}
    $sql =<<<EOF
	  select imagen, encabezado, texto, enlace, area from documentos where municipio = '{$_SESSION['municipio']}' and consejocomunal = '{$_SESSION['consejocomunal']}' and area = '{$_GET['area']}';
EOF;
	$display_block = "";
	echo ($sql);
	$ret = $db->query($sql);
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
		$imagen = $row['imagen'];
		$encabezado = $row['encabezado'];
		$texto = $row['texto'];
		$enlace = $row['enlace'];
		$area = $row['area'];
	
	$display_block .= <<<EOF
		<article class="proyecto">
			<img src="$imagen"/>
			<h4>$encabezado</h4> 
			<p>$texto</p>
			<a href="$enlace">Ver documento completo</a>
			<p></p>
		</article>
EOF;
   }
   echo "Operacion hecha satisfactoriamente\n";
   $db->close();
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
</head>
<body>
	<div id="cm">
		<header>
			<h2>Parroquia Cecilio Acosta</h2>
			<h3>Comuneros</h3>
		</header>
	
		<article>
			<img src="imagenes/sandiego.jpg" alt="sandiego.jpg"/>
		</article>
	</div>
	
	<div id="cis">
		<header>
			<h2>Parroquia Cecilio Acosta</h2>
		</header>

		<?php echo $display_block;?>
	</div>
	<div id="pr">
		<header>
			<h2>Parroquia Cecilio Acosta</h2>
		</header>
		<?php echo $display_block;?>
		
	</div>
	<div id="ti">
		<header>
			<h2>Parroquia Cecilio Acosta</h2>
		</header>
		Tejido Industrial
		<?php echo $display_block;?>
	</div>
	<div id="ce">
		<header>
			<h2>Parroquia Cecilio Acosta</h2>
		</header>
		<?php echo $display_block;?>
	</div>
	<div id="cs">
		<header>
			<h2>Parroquia Cecilio Acosta</h2>
		</header>
		<?php echo $display_block;?>
	</div>
	<div style="clear:both;"></div>
	
</body>
</html>