<?php

session_start();

session_unset();
header('Location: /inventario/login.php');
exit;


?>