<?php
	session_start();

	if (!isset($_POST['encabezado']) or $_POST['encabezado'] == "" or 
		!isset($_POST['texto']) or $_POST['texto'] == "" or 
		!isset($_FILES['imagen']) or $_FILES['imagen']['error'] == "4" or
		!isset($_FILES['enlace']) or $_FILES['enlace']['error'] == "4")
	
	{
		header("Location: documentos.php");
		exit();
	}
	
	$file_dir ="public_html";

	foreach($_FILES as $file_name => $file_array) {
		if (is_uploaded_file($file_array['tmp_name'])) {
			move_uploaded_file($file_array['tmp_name'],"$file_dir"."/".$file_array['name'])
			or die ("Couldn't move file");
			//echo "File was moved!";
			
			if ($file_name === 'imagen') {
				$imagen = "imagenes/".$file_array['name'];
				//echo "Variable imagen ". $imagen;
			} 
			if ($file_name === 'enlace') {
				$enlace = "documentos/".$file_array['name'];
				//echo "Variable enlace ". $enlace;
			}
		} else {
				echo "Archivo no cargado";
			}
		}
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
      echo "Base de datos abierta satisfactoriamente\n";
   }

   $sql = "INSERT INTO documentos (imagen, encabezado, texto, enlace, area, municipio, consejocomunal) VALUES ('" 
	. $imagen . "', '" . $_POST['encabezado'] . "', '" . $_POST['texto'] . "', '" . $enlace . "', '"
	. $_POST['area'][0] . "', '" . $_SESSION['municipio'] . "', '" . $_SESSION['consejocomunal'] . "')";

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      //window.alert("Documento guardado");
	  header("Location: documentos.php");
   }
   $db->close();
?>