<?php
include('autenticacion.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script defer src="/inventario/js/ajax.js"></script>
    </head>
    <body>

        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">
                INVESOFT
            </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            </div>
        </header>
        <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">
            Sistema de Inventario
            <span>
                <i class="material-icons">assessment</i>
                </span>
            </span>
            <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="index.php">
            Gestionar Inventario
            <span>
            <i class="material-icons">assignment_turned_in</i>
            </span>
            </a>
            <a class="mdl-navigation__link" href="usuarios.php">Gestionar Usuarios<span>
            <i class="material-icons">how_to_reg</i>
            </span></a>
            <a class="mdl-navigation__link" href="crear.php">
            Crear Producto
            <span>
            <i class="material-icons">eject</i>
            </span>
            </a>
            <a class="mdl-navigation__link" href="registrar.php">Crear Usuario<span>
            <i class="material-icons">perm_identity</i>
            </span></a>
            <a class="mdl-navigation__link" href="cerrar.php">Cerrar Sesión<span>
            <i class="material-icons">power_settings_new</i>
            </span></a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <?php

                /* Se obtienen los datos del formulario */
                $nombre = $_POST['nombre_producto'];

                $cantidad = intval($_POST['cantidad']);

                $descripcion = $_POST['descripcion'];

                $precio = intval($_POST['precio']);


                /* Parámetros de Conexión MySQL */
                $host = "localhost";
                $usuario = "root";
                $clave = "";
                $basedatos = "inventario";

                /* Conexión a la Base de Datos */
                $con = mysqli_connect($host,$usuario,$clave,$basedatos);

                /* Sentencia SQL */
                $sql="INSERT INTO productos (nombre_producto, descripcion, fecha_creacion, cantidad,precio) VALUES ('".$nombre."', '".$descripcion."', NOW(), ".$cantidad.", ". $precio . ")";

                /* Resultado de la consulta SQL */
                $result = mysqli_query($con,$sql);

                /* Mensje de guardado exitoso y un botón regresar */
                echo "<div align='center' style='text-align:center'>
                <h3>Guardado Exitoso </h3>
                <a href='./index.php' class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored'>
                Regresar
                </a>
                </div>
                ";
                ?>
            </div>
        </main>
        </div>
    </body>
</html>