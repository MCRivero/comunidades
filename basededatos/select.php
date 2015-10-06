<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('C:/wamp1/www/Fusil/fusil.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n <br/>";
   }
    $sql =<<<EOF
      SELECT imagen, encabezado, texto, enlace, area from documentos;
EOF;
	$display_block = "";
	echo ($sql);
	$ret = $db->query($sql);
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
		echo "    ENTRE AL WHILE   ";
		$imagen = $row['imagen'];
		echo ("  IMAGEN:   " . $imagen);
		$encabezado = $row['encabezado'];
		echo ("  ENCABEZADO:   " . $encabezado);
		$texto = $row['texto'];
		echo ("  TEXTO:   " . $texto);
		$enlace = $row['enlace'];
		echo ("  ENLACE:   " . $enlace);
		$area = $row['area'];
		echo ("  AREA:   " . $area);
	
	$display_block .= <<<EOF
		<article class="proyecto">
			<img src="$imagen"/>
			<h4>$encabezado</h4> 
			<p>$texto</p>
			<a href="$enlace">Ver documento completo</a>
		</article>
EOF;
   }
   echo $display_block;
   echo " Operation done successfully\n";
   $db->close();
?>