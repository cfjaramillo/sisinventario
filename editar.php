<?php
include('autenticacion.php');
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php

/* Parámetros de Conexión */
$host = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "inventario";


/* Conexión a la Base de Datos */
$con = mysqli_connect($host,$usuario,$clave,$basedatos);

/* Código del Producto */
$id = $_GET['id'];
$cant = $_GET['cant'];

/* Sentencia SQL */
$sql="UPDATE productos SET cantidad = ".$cant." WHERE codigo_producto=".$id;

/* Resultado de la consulta SQL */
$result = mysqli_query($con,$sql);
/* Cierra conexión SQL */
mysqli_close($con);
?>
</body>
</html>