<?php
echo "holi";
$nombre = $_POST['usuario'];
$clave = $_POST['clave'];
mysqli_connect("localhost","root","");// primero el host, segundo el user, tercero la contraseña
mysqli_select_db("Tienda");// hay ke seleccionar la base de datos o si no nunca te va a guardar
mysqli_query("INSERT INTO sesion(Nombre,Clave) VALUES ('$nombre','$clave')");

?php>
