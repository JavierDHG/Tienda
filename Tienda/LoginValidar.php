<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tienda";
try{
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
} catch (Exception $ex) {
    exit("Error: " . $e->getMessage());
}

if (!$conn) 
{
	die("No hay conexion: ".mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$pass = $_POST["clave"];

$query = mysqli_query($conn,"SELECT * FROM sesion WHERE Nombre = '".$nombre."' and Clave = '".$pass."'");	
$nr = mysqli_num_rows($query);


if($nr == 1)
{
	header("Location: ObjetosVENTA.php");
	//echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	header("Location: LoginU.html");
	//echo "No ingreso"; 
}
?>