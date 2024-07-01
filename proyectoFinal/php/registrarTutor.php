<?php
session_start();

if(!isset($_SESSION["nombre"])) {
    header("location: ../views/inicioSesionAlum.php");
    exit();
}

$boleta_sesion = $_SESSION["boleta"];
$tipoTutoria = isset($_POST['tipoTutoria']) ? $_POST['tipoTutoria'] : null;
$tutor = isset($_POST['tutor']) ? $_POST['tutor'] : null;

if($tipoTutoria && $tutor) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require "conect.php";

    $tipoTutoria = mysqli_real_escape_string($conn, $tipoTutoria);
    $tutor = mysqli_real_escape_string($conn, $tutor);

    $query = "UPDATE alum SET tipoTutoria = '$tipoTutoria', nombreTutor = '$tutor' WHERE boleta = '$boleta_sesion'";

    if (mysqli_query($conn, $query)) {
        header("Location: ../restringido/log_home_alum_Datos.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
} else {
    echo "Error: Faltan datos requeridos.";
}
?>