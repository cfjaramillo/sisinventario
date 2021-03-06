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
$sql="SELECT * FROM productos";

/* Resultado de la consulta SQL */
$result = mysqli_query($con,$sql);



/* Tabla de Inventario */
setlocale(LC_MONETARY,"en_US");
echo "<table align='center' class='mdl-data-table mdl-js-data-table'>";
echo "<thead><tr><th>Código</th><th>Nombre del Producto</th><th>Descripción</th><th>Fecha</th><th>Cantidad</th><th>Precio</th><th>Reporte</th></tr></thead>";
echo "<tbody>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['codigo_producto'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['nombre_producto'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['descripcion'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['fecha_creacion'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['cantidad'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>$" . number_format((float)$row['precio'], 2) . "</td>";
	echo "<td class='mdl-data-table__cell--non-numeric'><a target='_blank' href='./reporte.php?id=".$row['codigo_producto']."' style='color:black'><i class='material-icons'>assessment</i></td>";
	echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
?>
</body>
</html>