<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('C:/wamp/www/Fusil/basededatos/fusil.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
	  
	  INSERT INTO usuarios (id,nombre,password,municipio,consejocomunal)
      VALUES (7, 'Carmen', 'Carmen', 'Guaicaipuro', 'Peñita Bolivariana' );
	  
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
   
?>