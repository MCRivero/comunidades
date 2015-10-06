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
      CREATE TABLE usuarios
      (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
      nombre           CHAR(7)    NOT NULL,
      password         CHAR(7)    NOT NULL,
      municipio        VARCHAR(40),
      consejocomunal   VARCHAR(40));
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
   
?>