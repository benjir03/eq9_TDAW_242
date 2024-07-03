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
    $carrera = mysqli_real_escape_string($conn, $_POST['carrera']);
    $semestre = mysqli_real_escape_string($conn, $_POST['semestre']);
    $correo = mysqli_real_escape_string($conn, $_POST['correo']);
    $contra = mysqli_real_escape_string($conn, $_POST['contra']);

    $query_verificacion = "SELECT boleta FROM alum WHERE boleta = '$boleta'";
    $result_verificacion = mysqli_query($conn, $query_verificacion);
    if (mysqli_num_rows($result_verificacion) > 0) {
        // Si la boleta ya existe, enviar una alerta
        echo "<script>alert('La boleta $boleta ya está registrada. Introduce una boleta diferente.');</script>";
        echo "<script>window.location.href = '../views/formularioRegistro.php';</script>";
        exit();
    }

    // $check_query = "SELECT * FROM alum WHERE boleta = '$boleta'";
    // $check_result = mysqli_query($conn, $check_query);
    // if (mysqli_num_rows($check_result) > 0) {
    //     // Si la boleta ya existe, mostrar alerta
    //     echo "La boleta $boleta ya está registrada. Por favor, verifica tus datos.";
    //     exit(); // Terminar el script
    // }

    $query = "INSERT INTO alum (boleta, nombre, apPat, apMat, telefono, semestre, carrera, correo, contra) VALUES ('$boleta', '$nombre', '$apPat', '$apMat', '$tel', '$semestre', '$carrera', '$correo', '$contra')";

    echo "Query: $query"; // Mensaje de depuración

    if (mysqli_query($conn, $query)) {
        echo "Inserción exitosa.";
        $Registrado = 1;
        header("Location: ../views/inicioSesionAlum.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>