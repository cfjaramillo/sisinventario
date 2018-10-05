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
                        <label id="txtRespuesta">
                    </div>
                </div>


                <div style='margin-top:20pt; text-align:center'>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="number" id="codigo_producto">
                            <label class="mdl-textfield__label" for="codigo_producto">Código del Producto</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield" style='width:5pt'>
                    <button onclick="consultarDetalle()" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                        <i class="material-icons">search</i>
                    </button>
                    </div>                    
                    <div>
                        <label id="txtRespuesta2"></label>
                    </div> 
                </div>
            </div>
        </main>
        </div>
    </body>
</html>