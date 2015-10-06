<?php
	session_start();
	if (!isset($_POST['usuario']) or $_POST['usuario'] == "" or 
		!isset($_POST['password']) or $_POST['password'] == "")
	
	{

			header("Location: index.php");
			exit();
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
		echo "Opened database successfully\n <br/>";
	}
	$sql = "SELECT municipio, consejocomunal from usuarios where nombre = '" . $_POST['usuario'] . 
			"' and password = '" . $_POST['password'] . "' ;" ;

	$ret = $db->query($sql);

	if(!$ret){
			echo $db->lastErrorMsg();
	} elseif ($row = $ret->fetchArray(SQLITE3_ASSOC)){	
				$_SESSION['municipio'] = $row['municipio'];
				$_SESSION['consejocomunal'] = $row['consejocomunal'];
				echo $_SESSION['municipio'];
				echo $_SESSION['consejocomunal'];
				header("Location: documentos.php");
	} else { 
		echo "Invalid userid or password\n";
	}
   
	$db->close();
?>