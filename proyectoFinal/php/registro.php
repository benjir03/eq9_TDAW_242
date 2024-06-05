<?php
    require "conect.php";

    $boleta = $_POST['boleta'];
    $nombre = $_POST['nombre'];
    $apPat = $_POST['apellidoPaterno'];
    $apMat = $_POST['apellidoMaterno'];
    $tel = $_POST['telefono'];
    $semestre = $_POST['semestre'];
    $carrera = $_POST['carrera'];
    $tipoTutoria = $_POST['tipoTutoria'];
    $genTutor = $_POST['genTutor'];
    //$nombreTutor = $_POST['nombreTutor'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    $sql = mysqli_query($conn, "INSERT INTO alum (boleta, nombre, apPat, apMat, telefono, semestre, carrera, tipoTutoria, genTutor, nombreTutor, correo, contra) VALUES ('$boleta', '$nombre', '$apPat', '$apMat', '$tel', '$semestre', '$carrera', '$tipoTutoria', '$genTutor', '', '$correo', '$contra')");

    header("location: ../views/registroCorrecto.php");
?>