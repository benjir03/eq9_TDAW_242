<?php
    session_start();
    $temporal = $_REQUEST["sesion"];
    unset($_SESSION["temporal"]); //Destruimos la sesión
    if($_SESSION["status"] == 1) {
        session_destroy();
        header("location: ../views/inicioSesion.php"); //Redireccionamos a nuestra pantalla de inicio de sesión
    } else if($_SESSION["status"] == 2) {
        session_destroy();
        header("location: ../views/inicioSesionAlum.php"); //Redireccionamos a nuestra pantalla de inicio de sesión
    } else {
        session_destroy();
        header("location: ../index.php"); //Redireccionamos a nuestra pantalla de inicio de sesión
    }
?>