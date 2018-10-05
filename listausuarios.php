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


/* Sentencia SQL */
$sql="SELECT * FROM usuarios";

/* Resultado de la consulta SQL */
$result = mysqli_query($con,$sql);



/* Tabla de Inventario */

echo "<table align='center' class='mdl-data-table mdl-js-data-table'>";
echo "<thead><tr><th>Código</th><th>Nombre del Producto</th><th>Descripción</th><th>Fecha</th><th>Cantidad</th><th>Reporte</th></tr></thead>";
echo "<tbody>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['codigo_usuario'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['cedula'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['nombre'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['correo'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['fecha_creacion'] . "</td>";
	echo "<td class='mdl-data-table__cell--non-numeric'><a target='_blank' href='./reporte.php?id=".$row['codigo_usuario']."' style='color:black'><i class='material-icons'>assessment</i></td>";
	echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
?>
</body>
</html>