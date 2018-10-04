<?php 


$usuario = $_POST["usr"];
$clave = $_POST["pwd"];


$sql="SELECT * FROM usuarios WHERE cedula='".$usuario. "'";



session_start();


$_SESSION['user'] = "lo que sea";
header('Location: /inventario/index.php');
exit;

?>