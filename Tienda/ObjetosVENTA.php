<?php 
	$conexion=mysqli_connect('localhost','root','','tienda');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Objetos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="resources/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <center>
        	<form method="post" action="pagar.html">
        	 <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td>Existentes</td>
                    <td></td>               
                </tr>
                <?php
               	$consulta= "SELECT*FROM compras";
               	$result=mysqli_query($conexion,$consulta);
               	while($mostrar=mysqli_fetch_array($result)){
               	?>
               
                <tr>
                    <td><?php echo $mostrar['idCompra']?></td>
                    <td><?php echo $mostrar['Nombre']?></td>
                    <td><?php echo $mostrar['Descripcion']?></td>
                    <td><?php echo $mostrar['Precio']?></td>
                    <td><?php echo $mostrar['Existentes']?></td>
                    <td><input type="submit" value="Pagar" /></td>                      
                <?php 
                }  
                ?>

                </tr>
            </table>
        </form>
        </center>
    </body>
</html>
