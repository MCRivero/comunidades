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
      SELECT * from usuarios;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['id'] . "\n";
      echo "NAME = ". $row['nombre'] ."\n";
      echo "PASSWORD = ". $row['password'] ."\n";
	  echo "MUNICIPIO = ". $row['municipio'] ."\n";
      echo "CONSEJO COMUNAL =  ".$row['consejocomunal'] ."\n\n <br/>";
   }
   echo "Operation done successfully\n";
   $db->close();
?>