<?php

if (empty($_POST["NombreT"]))
{
	$error_nombre = "Este campo no puede estar vacío";
}
else
{
	$nombre = $_POST["NombreT"]; 
}

if(empty($_POST["NumT"]))
{
	$error_pass = "Este campo no puede estar vacío";
}else
{
	$pass = $_POST["NumT"]; 
}

if(empty($_POST["contra"]))
{
	$error_cont = "Este campo no puede estar vacío";
}
else
{
	$contras = $_POST["contra"];
}

if($error_nombre=="" && $error_pass=="" && $error_cont=="")
{
	header("Location: Result.html");
	//echo "Bienvenido:" .$nombre;
}
else 
{
	header("Location: pagar.html");
	//echo "No ingreso"; 
}
?>