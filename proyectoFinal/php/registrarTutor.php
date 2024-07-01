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
                // Inserción en la tabla alum_tutor
                $queryAlumTutor = "INSERT INTO alum_tutor (boleta, id_profesor) VALUES (?, ?)";
                if ($stmt = $conn->prepare($queryAlumTutor)) {
                    $stmt->bind_param("ii", $boleta_sesion, $tutorID);
                    if ($stmt->execute()) {
                        // Asignar a las variables de sesión
                        $_SESSION["tipoTutoria"] = $tipoTutoria;
                        $_SESSION["genTutor"] = $genTutor; // Esta variable no se obtiene directamente en el código proporcionado
                        $_SESSION["nombreTutor"] = $nombreCompletoTutor;
                        
                        header("Location: ../restringido/log_home_alum_Datos.php");
                        exit();
                    } else {
                        echo "Error al insertar en alum_tutor: " . $stmt->error;
                    }
                } else {
                    echo "Error preparando la consulta para alum_tutor: " . $conn->error;
                }
            } else {
                echo "Error actualizando alum: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparando la consulta para alum: " . $conn->error;
        }
    } else {
        echo "Error preparando la consulta para tutor: " . $conn->error;
    }
    
    $conn->close();
} else {
    echo "Error: Faltan datos requeridos.";
}
?>
