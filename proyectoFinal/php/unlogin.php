<?php
    session_start();
    $temporal = $_REQUEST["sesion"];
    unset($_SESSION["temporal"]); //Destruimos la sesión
    session_destroy();
    header("location: ../views/inicioSesion.php"); //Redireccionamos a nuestra pantalla de inicio de sesión
?>