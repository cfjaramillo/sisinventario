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

/* Código del Producto */
$id = $_GET['id']; 


/* Sentencia SQL */
$sql="SELECT * FROM productos WHERE codigo_producto=".$id;

/* Resultado de la consulta SQL */
$result = mysqli_query($con,$sql);
$cant = mysqli_num_rows($result); 
/* Tabla de Inventario */
if ($cant > 0){
echo "<div style='padding:0pt'>
<div align='center' style='width:100%; padding:25pt; background-color:#FAFAFA; height:40pt; text-align:center'>
    <span><h6>Detalle del Producto<span><i class='material-icons'>subject</i></span></h6></span>
  </div>
</div>";






echo "<form action='#' style='margin:0; background-color:#FAFAFA'>";
echo "<div class='mdl-grid'>";
while($row = mysqli_fetch_array($result)) {
    echo 
    "
    <div class='mdl-cell mdl-cell--6-col'>
    <label for='codigo_producto'><h6><span><i class='material-icons'>fingerprint</i></span>Código del Producto</h6>&emsp;</label>
    <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
    <input class='mdl-textfield__input' type='text' disabled id='codigo_producto' value=".$row['codigo_producto'].">
    </div>
    </div>

    <div class='mdl-cell mdl-cell--5-col'>
    <label for='nombre_producto'><h6><span><i class='material-icons'>lock</i></span>Nombre del Producto:</h6>&emsp;</label>
    <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
    <input class='mdl-textfield__input' type='text' disabled id='nombre_producto' value=".$row['nombre_producto'].">
    </div>
    </div>

    <div class='mdl-cell mdl-cell--12-col'>
    <label for='fecha_creacion'><h6><span><i class='material-icons'>calendar_today</i></span>Fecha de Registro:</h6>&emsp;</label>
    <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
    <input class='mdl-textfield__input' type='text' disabled id='fecha_creacion' value=".$row['fecha_creacion'].">    
    </div>
    </div>

    <div class='mdl-cell mdl-cell--5-col'>
    <label for='cantidad'><h6><span><i class='material-icons'>assessment</i></span>Cantidad:</h6>&emsp;</label>
    <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
    <input class='mdl-textfield__input' type='text' id='cantidad' disabled value=".$row['cantidad'].">
    </div>
    </div>
    
    <div class='mdl-cell mdl-cell--3-col'>
    <label for='descripcion'><h6><span><i class='material-icons'>lock</i></span>Descripción:</h6>&emsp;</label>
    <div class='mdl-textfield mdl-js-textfield'>
    <textarea class='mdl-textfield__input' type='text' disabled rows= '1' id='descripcion'>".$row['descripcion']."</textarea>
    </div>
    </div>

    <div class='mdl-cell mdl-cell--3-col'>
    <label for='precio'><h6><span><i class='material-icons'>attach_money</i></span>Precio:</h6>&emsp;</label>
    <div class='mdl-textfield mdl-js-textfield'>
    <textarea class='mdl-textfield__input' type='text' disabled rows= '1' id='precio'>$". number_format((float)$row['precio'],2)."</textarea>
    </div>
    </div>

    ";
}
echo "</div>";
echo "</form>";
echo "<div style='padding:0pt'>
<div style='width:100%; height:40pt;'>
    <span><h6>Modificar Cantidad<span><i class='material-icons'>build</i></span></h6></span>
  </div>
</div>";
echo 
"
<div style='margin-top:20pt; text-align:center'>
<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'>
<label for='descripcion'><h6><span><i class='material-icons'>lock_open</i></span>Nueva Cantidad:</h6>&emsp;</label>
    <input class='mdl-textfield__input' type='number' id='cantidad_retirar'>
        <label class='mdl-textfield__label' for='cantidad_retirar'></label>
</div>
<div class='mdl-textfield mdl-js-textfield' style='width:5pt'>

</div>                
<div>
    <label id='txtRespuesta3'></label>
</div> 
</div>
<div style='margin-top:20pt; text-align:center'>

<button onclick='agregarCantidad()' class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored'>
    Agregar
</button>


<button onclick='retirarCantidad()' class='mdl-button mdl-js-button mdl-button--raised mdl-button--accent'>
    Retirar
</button>

</div>
";
}
else {
    echo "<h3>Producto no encontrado</h3>";
}
mysqli_close($con);
?>

</body>
</html>