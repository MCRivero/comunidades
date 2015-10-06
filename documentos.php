<?php 
session_start();
?>
<!doctype html>
<html charset="UTF-8">
<head>
  <title>Comunas</title>
  <meta charset="UTE-8" />
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>

<div class="contenedor">
<header>
	<div id="logotipo">
		<img src="imagenes/banner-siempre-comandante2.jpg" alt=""/>
		<p id="titulo">Organo de los Consejos Comunales</p>
		<p id="fecha"><script src="javascripts/fecha.js"></script></p>
	</div>
	<h2>Comunas Industriales Socialistas</h2>
</header>
	<h3><?php echo $_SESSION['municipio'] . " - " . $_SESSION['consejocomunal'];?></h3>
	
	<input type="hidden" name="MAX_FILE_SIZE" value="51200000" />
	<form id="documento" action="insert_documentos.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
	
	<ul>
		<li>
			<label for="imagen">Imagen</label></br>
			<input type="file" name="imagen" />
		</li>
		<li>
			<label for="encabezado">Titulo del documento</label>
			<input class="ancho" type="text" name="encabezado" required />
		</li>
		<li>
			<label for="texto">Resumen</label>
			<textarea class="areatexto" name="texto" placeholder="Resumen del documento anexo" required></textarea>
		</li>
		<li>
			<label for="enlace">Documento</label></br>
			<input type="file" name="enlace" />
		</li>
		<li>	
			<label for="area">Seleccione el area del documento</label></br>
			<input type="radio" name="area[]" value="cis" /> Comunas industriales socialistas<br/>
			<input type="radio" name="area[]" value="pr" checked="checked"/> Proyectos <br/>
			<input type="radio" name="area[]" value="ti" /> Tejido industrial <br/>
			<input type="radio" name="area[]" value="ce" /> Consejos estudiantiles <br/>
			<input type="radio" name="area[]" value="cs" /> Contraloria social <br/>
		</li>
	</ul>
	<input class="documento-submit" type="submit" value="Guardar" />
	<input type="reset" value="Borrar" />
	<button type="button" onclick="history.back();">Salir</button>
  </div>
</body>
</html>
