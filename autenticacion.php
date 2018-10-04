<?php

session_start();

if( !isset($_SESSION['user']) )
{
    header('Location: /inventario/login.php');
    exit;
}


?>
