<?php
include('autenticacion.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script defer src="/inventario/js/ajax.js"></script>
    </head>
    <body>

        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">
                Sistema de Inventario
                <span>
                <i class="material-icons">assessment</i>
                </span>
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
            <div style='width:100%; padding:35pt; background-color:#FAFAFA; height:10pt; text-align:center'>
            <div>
                <span><h6>Datos del Usuario<span><i class='material-icons'>assignment_ind</i></span></h6></span>
            </div>
            </div>
            <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                <!-- Formulario de registro del producto-->
                <!-- Se invoca la página guardar.php -->
                <form action="guardarpersona.php" method="POST">

                    <!-- Nombre del producto -->
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="nombre_usuario" name="nombre_usuario" required>
                        <label class="mdl-textfield__label" for="nombre_usuario">Nombre Completo</label>
                    </div>
        </div>
            <div class="mdl-cell mdl-cell--4-col">
                    <!-- Cantidad del producto -->
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula" name="cedula" required>
                        <label class="mdl-textfield__label" for="cedula">Cédula</label>
                        <span class="mdl-textfield__error">Ingrese una cédula válida</span>
                    </div>
        </div>
            <div class="mdl-cell mdl-cell--4-col">
                    <!-- Descripcion -->
                    <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="correo_usuario" name="correo_usuario" required>
                        <label class="mdl-textfield__label" for="correo_usuario">Correo Electrónico</label>
                    </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col">
                    <!-- Descripcion -->
                    <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="alias_usuario" name="alias_usuario" required>
                        <label class="mdl-textfield__label" for="alias_usuario">Usuario</label>
                    </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col">
                    <!-- Descripcion -->
                    <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="password" id="pwd_usuario" name="pwd_usuario" required>
                        <label class="mdl-textfield__label" for="pwd_usuario">Contraseña</label>
                    </div>
            </div>
                    <!-- Botón Enviar -->
                    <div style="width:100%; text-align:center">
                    <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Registrar">
                    </div>
                </form>
            </div>
            </div>
        </main>
        </div>
    </body>
</html>