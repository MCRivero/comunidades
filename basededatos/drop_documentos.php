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
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
      Drop TABLE documentos;
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table dropped successfully\n";
   }
   $db->close();
   
?>