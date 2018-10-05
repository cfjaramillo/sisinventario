<?php

/* Referenciamos a la libreria PDF */
require('./fpdf/fpdf.php');


/* Parámetros de Conexión */
$host = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "inventario";

/* Instanciamos la libreria PDF */
$pdf=new FPDF();

/* Agrega una página al archivo PDF */
$pdf->AddPage('P','Letter');

/* Asignamos el tamaño y la fuente del archivo PDF */
$pdf->SetFont('Arial','B',25); 

/* Se crea la cabecera del PDF */
$pdf->Image('./img/inventario.png',5,1,50,45);
$pdf->Cell(50,40,'');
$pdf->Cell(0,40,'SISTEMA DE INVENTARIO',0,1);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,30,'Detalle del Producto',0,1);


/* Conexión a la Base de Datos */
$con = mysqli_connect($host,$usuario,$clave,$basedatos);

/* Código del Producto */
$id = $_GET['id']; 


/* Sentencia SQL */
$sql="SELECT * FROM usuarios WHERE codigo_usuario=".$id;

/* Resultado de la consulta SQL */
$result = mysqli_query($con,$sql);
$cant = mysqli_num_rows($result); 
/* Tabla de Inventario */
if ($cant > 0){

/* Asignamos los datos al archivo PDF */
while($row = mysqli_fetch_array($result)) {
    $pdf->SetFont('Arial','I',15);
    $pdf->Cell(0,20,'CEDULA:   '.$row['cedula'],0,1);
    $pdf->Cell(0,20,'NOMBRE:    '.$row['nombre'],0,1);
    $pdf->Cell(0,20,'CORREO:    '.$row['correo'],0,1);
    $pdf->Cell(0,20,'USUARIO:    '.$row['alias'],0,1);
    $pdf->Cell(0,20,'FECHA CREACION:    '.$row['fecha_creacion'],0,1);

    /* Mostrarmos el archivo PDF */
    $pdf->output("I","usuario.pdf",True);
}
}
else {
    echo "<h3>Usuario no encontrado</h3>";
}
mysqli_close($con);
?>