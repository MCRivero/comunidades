<?php
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
    select * from documentos;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    echo "imagen = " . $row['imagen'] . "\n";
	echo "encabezado = " . $row['encabezado'] . "\n";
	echo "texto = " . $row['texto'] . "\n";
	echo "enlace = " . $row['enlace'] . "\n";
	echo "AREA = " . $row['area'] . "\n";
	echo "municipio = " . $row['municipio'] . "\n";
	echo "consejocomunal = " . $row['consejocomunal'] . "\n<br/>";
   }
   echo "Operation done successfully\n";
   $db->close();
?>