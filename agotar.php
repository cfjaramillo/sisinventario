<?php
include('autenticacion.php');
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<div >
<?php

/* Parámetros de Conexión */
$host = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "inventario";


/* Conexión a la Base de Datos */
$con = mysqli_connect($host,$usuario,$clave,$basedatos);


/* Sentencia SQL */
$sql="SELECT * FROM productos WHERE cantidad<=5";

/* Resultado de la consulta SQL */
$result = mysqli_query($con,$sql);
$cant = mysqli_num_rows($result);
/* Tabla de Inventario */
if ($cant > 0){
echo "<div id='modal' style='background-color: red; margin-top:-40pt'>";
echo "<i class='material-icons'>notification_important</i><button onclick='esconder()'><i class='material-icons>clear</i></button>'>";
while($row = mysqli_fetch_array($result)) {
    echo "<h6>Quedan " . $row['cantidad'] . " productos de ".$row['nombre_producto']."</h6>";
}
}
mysqli_close($con);
echo "</div>";
?>

</body>
</html>