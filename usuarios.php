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
                Sistema de Inventario
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
                <div style='margin-top:20pt'>
                    <div>
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
echo "<thead><tr><th>Cédula</th><th>Nombre</th><th>>Correo</th><th>Usuario</th><th>Fecha Creación</th><th>Reporte</th></tr></thead>";
echo "<tbody>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['cedula'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['nombre'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['correo'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['alias'] . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['fecha_creacion'] . "</td>";
	echo "<td class='mdl-data-table__cell--non-numeric'><a target='_blank' href='./reporteusr.php?id=".$row['codigo_usuario']."' style='color:black'><i class='material-icons'>assessment</i></td>";
	echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
?>
                    </div>
                </div>
            </div>
        </main>
        </div>
    </body>
</html>