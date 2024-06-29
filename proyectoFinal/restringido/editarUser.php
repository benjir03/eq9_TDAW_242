<?php
    require "../php/conect.php";
    
    //$bolActual = $_POST['boleta'];
    $boleta = $_POST['boleta'];
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apPat'];
    $apMaterno = $_POST['apMat'];
    $telefono = $_POST['telefono'];
    $semestre = $_POST['semestre'];
    $carrera = $_POST['carrera'];
    $tipoTut = $_POST['tipoTutoria'];
    $genTut = $_POST['genTutor'];
    $nombreTut = $_POST['nombreTutor'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    $sql = "UPDATE users SET boleta='$boleta', nombre='$nombre', apPat='$apPaterno', apMat='$apMaterno', telefono='$telefono', semestre='$semestre', carrera='$carrera', tipoTutoria='$tipoTut', genTutor='$genTut', nombreTutor='$nombreTut', correo='$correo', contra='$contra' WHERE boleta='$boleta'";
    $query = mysqli_query($conn,$sql);

    if($query){
        header("location: log_home.php");
    };
?>