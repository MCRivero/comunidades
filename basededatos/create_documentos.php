<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('C:/wamp/www/Fusil/fusil.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
      CREATE TABLE documentos
      (imagen          CHAR(15) NOT NULL,
      encabezado       CHAR(50) NOT NULL,
      texto            CHAR(175) NOT NULL,
	  enlace           CHAR(40) NOT NULL,
      area             CHAR(3) NOT NULL,
	  municipio        VARCHAR(50) NOT NULL,
      consejocomunal   VARCHAR(50));
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
   
?>