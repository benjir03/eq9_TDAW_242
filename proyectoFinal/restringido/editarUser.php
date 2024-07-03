<?php
    session_start();
    require "../php/conect.php";

    $boletaActual = $_SESSION['boleta'];
    $boleta = $_POST['boleta'];
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apellidoPaterno'];
    $apMaterno = $_POST['apellidoMaterno'];
    $telefono = $_POST['telefono'];
    $semestre = $_POST['semestre'];
    $carrera = $_POST['carrera'];
    $tipoTut = $_POST['tipoTutoria'];
    $genTut = $_POST['genTutor'];
    $nombreTut = $_POST['tutor'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $opcion = $_POST['borrarTut'];

    if($opcion == '1'){
        $sql = "UPDATE alum SET boleta='$boleta', nombre='$nombre', apPat='$apPaterno', apMat='$apMaterno', telefono='$telefono', semestre='$semestre', carrera='$carrera', tipoTutoria=null, genTutor=null, nombreTutor=null, correo='$correo', contra='$contra' WHERE boleta='$boletaActual'";
    }else{
        $sql = "UPDATE alum SET boleta='$boleta', nombre='$nombre', apPat='$apPaterno', apMat='$apMaterno', telefono='$telefono', semestre='$semestre', carrera='$carrera', correo='$correo', contra='$contra' WHERE boleta='$boletaActual'";
    }
    //$sql = "UPDATE alum SET boleta='$boleta', nombre='$nombre', apPat='$apPaterno', apMat='$apMaterno', telefono='$telefono', semestre='$semestre', carrera='$carrera', tipoTutoria=null, genTutor=null, nombreTutor=null, correo='$correo', contra='$contra' WHERE boleta='$boletaActual'";
    $query = mysqli_query($conn,$sql);

    if($query){
        header("location: log_home.php");
    };
?>