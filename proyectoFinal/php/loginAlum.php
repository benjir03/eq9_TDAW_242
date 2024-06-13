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
        $_SESSION["username"] = $row['nombre'];

        // Redirigir al usuario a la página restringida
        header("location: ../restringido/log_home_alum.php");
        exit();
    } else {
        echo "Correo o contraseña incorrectos.";
    }

    // Opcional: cerrar la conexión
    mysqli_close($conn);
?>