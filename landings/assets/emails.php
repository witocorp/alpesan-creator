<?php 

	$servername = "localhost";
	$username = "root";
	$password = "#Valvarez@2019?.";
	$dbname = "dbs1175525";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$opciones = "";
	if($_POST['opciones']){
		$opciones = $_POST['opciones'];	
	}
	$sql = "INSERT INTO emails (nombre, apellido, telefono, email, direccion, idLanding,fecha,ciudad,opciones,codp)
	VALUES ('".htmlspecialchars($_POST['nombre'])."', '".htmlspecialchars($_POST['apellido'])."', '".
	htmlspecialchars($_POST['telefono'])."', '".htmlspecialchars($_POST['email'])."'
	, '".htmlspecialchars($_POST['direccion'])."', ".$_POST['idLanding'].", '".date("Y-m-d")."','".htmlspecialchars($_POST['ciudad'])."', '".$opciones."', '".htmlspecialchars($_POST['codP'])."')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>