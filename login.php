<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script defer src="/inventario/js/ajax.js"></script>
        <style>
            .login {
                height: 250pt;
                position:relative;
                margin-left:25%;
                margin-right:25%;
                margin-top:5%;
                margin-bottom:5%;
                background-color:#ededed;
                text-align:center;
                padding:2%;
            }

            .formulario {
                margin-top:5%;
            }
            </style>
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
        <main class="mdl-layout__content">
            <div class="page-content" style="background-color:#ededed">
                <div class="login">
                <h3>Iniciar Sesión</h3>
                <div class="formulario">
                <form method="POST" action="/inventario/autenticar.php">

                    <p>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" required name="usr" type="text" id="usr">
                        <label class="mdl-textfield__label"  for="usr">Usuario</label>
                    </div>
                    </p>
                    <p>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" required name="pwd" type="password" id="pwd">
                        <label class="mdl-textfield__label" for="pwd">Clave</label>
                    </div>
                    </p>
                    <p>
                    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="Submit" value="Iniciar">

                    </p>

                </form>
                </div>



                </div>





            </div>
        </main>
        </div>
    </body>
</html>