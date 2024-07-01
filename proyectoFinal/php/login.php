<?php
    // Incluir el archivo de conexión
    require "conect.php";

    session_start();

    // Obtener los datos del formulario
    $correo = $_POST["correoSesion"];
    $contrasena = $_POST["contraSesion"];

    // Realizar la consulta
    $validar_login = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$correo' AND pass = '$contrasena'");

    // Contar el número de filas
    $num_rows = mysqli_num_rows($validar_login);

    if ($num_rows > 0) {
        // Iniciar sesión
        $_SESSION["correo"] = $correo;
        $_SESSION["status"] = 1;

        // Obtener el nombre de usuario
        $row = mysqli_fetch_assoc($validar_login);
        $_SESSION["username"] = $row['username'];

        // Redirigir al usuario a la página restringida
        header("location: ../restringido/log_home.php");
        exit();
    } else {
        header("location: ../views/inicioSesion_mal.php");
        //echo "Correo o contraseña incorrectos.";
    }

    // Opcional: cerrar la conexión
    mysqli_close($conn);
?>