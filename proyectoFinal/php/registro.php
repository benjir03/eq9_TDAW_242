<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require "conect.php";

    $boleta = mysqli_real_escape_string($conn, $_POST['boleta']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $apPat = mysqli_real_escape_string($conn, $_POST['apellidoPaterno']);
    $apMat = mysqli_real_escape_string($conn, $_POST['apellidoMaterno']);
    $tel = mysqli_real_escape_string($conn, $_POST['telefono']);
    $semestre = mysqli_real_escape_string($conn, $_POST['semestre']);
    $carrera = mysqli_real_escape_string($conn, $_POST['carrera']);
    $tipoTutoria = mysqli_real_escape_string($conn, $_POST['tipoTutoria']);
    $genTutor = mysqli_real_escape_string($conn, $_POST['genTutor']);
    $correo = mysqli_real_escape_string($conn, $_POST['correo']);
    $contra = mysqli_real_escape_string($conn, $_POST['contra']);

    $nombreTutor = '';

    $query = "INSERT INTO alum (boleta, nombre, apPat, apMat, telefono, semestre, carrera, tipoTutoria, genTutor, nombreTutor, correo, contra) VALUES ('$boleta', '$nombre', '$apPat', '$apMat', '$tel', '$semestre', '$carrera', '$tipoTutoria', '$genTutor', '$nombreTutor', '$correo', '$contra')";

    echo "Query: $query"; // Mensaje de depuración

    if (mysqli_query($conn, $query)) {
        echo "Inserción exitosa.";
        header("Location: ../views/registroCorrecto.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>
