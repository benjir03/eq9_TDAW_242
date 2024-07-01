<?php
session_start();

if (!isset($_SESSION["nombre"])) {
    header("location: ../views/inicioSesionAlum.php");
    exit();
}

$boleta_sesion = $_SESSION["boleta"];
$tipoTutoria = isset($_POST['tipoTutoria']) ? $_POST['tipoTutoria'] : null;
$tutorID = isset($_POST['tutor']) ? $_POST['tutor'] : null;

if ($tipoTutoria && $tutorID) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require "conect.php";

    // Obtener el nombre del tutor
    $queryTutor = "SELECT nombre, apPat, apMat FROM tutor WHERE id_profesor = ?";
    if ($stmt = $conn->prepare($queryTutor)) {
        $stmt->bind_param("i", $tutorID);
        $stmt->execute();
        $stmt->bind_result($nombreTutor, $apPatTutor, $apMatTutor);
        $stmt->fetch();
        $stmt->close();

        $nombreCompletoTutor = $nombreTutor . ' ' . $apPatTutor . ' ' . $apMatTutor;

        // Actualizar la tabla alum
        $query = "UPDATE alum SET tipoTutoria = ?, nombreTutor = ? WHERE boleta = ?";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("ssi", $tipoTutoria, $nombreCompletoTutor, $boleta_sesion);
            if ($stmt->execute()) {
                header("Location: ../restringido/log_home_alum_Datos.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
    } else {
        echo "Error: " . $conn->error;
    }
    
    $conn->close();
} else {
    echo "Error: Faltan datos requeridos.";
}
?>
