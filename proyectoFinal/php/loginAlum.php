<?php
    // Incluir el archivo de conexión
    require "conect.php";

    session_start();

    // Obtener los datos del formulario
    $correo = $_POST["correoSesion"];
    $contrasena = $_POST["contraSesion"];

    // Realizar la consulta
    $validar_login = mysqli_query($conn, "SELECT * FROM alum WHERE correo = '$correo' AND contra = '$contrasena'");

    // Contar el número de filas
    $num_rows = mysqli_num_rows($validar_login);

    if ($num_rows > 0) {
        // Iniciar sesión
        $_SESSION["correo"] = $correo;
        $_SESSION["status"] = 2;

        // Obtener el nombre de usuario
        $row = mysqli_fetch_assoc($validar_login);
        $_SESSION["boleta"] = $row['boleta'];
        $_SESSION["nombre"] = $row['nombre'];
        $_SESSION["apPat"] = $row['apPat'];
        $_SESSION["apMat"] = $row['apMat'];
        $_SESSION["telefono"] = $row['telefono'];
        $_SESSION["semestre"] = $row['semestre'];
        $_SESSION["carrera"] = $row['carrera'];
        $_SESSION["tipoTutoria"] = $row['tipoTutoria'];
        $_SESSION["genTutor"] = $row['genTutor'];
        $_SESSION["nombreTutor"] = $row['nombreTutor'];

        // Redirigir al usuario a la página restringida
        if($_SESSION["nombreTutor"] == "") {
            header("location: ../restringido/log_home_alum_Registro.php");
            exit();
        } else {
            header("location: ../restringido/log_home_alum_Datos.php");
            exit();
        }

    } else {
        header("location: ../views/inicioSesionAlum_mal.php");
    }

    // Opcional: cerrar la conexión
    mysqli_close($conn);
?>