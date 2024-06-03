<?php
    // Incluir el archivo de conexión
    require "conect.php";

    // Obtener los datos del formulario
    $correo = $_POST["correoSesion"];
    $contrasena = $_POST["contraSesion"];

    // Realizar la consulta
    $validar_login = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$correo' AND pass = '$contrasena'");

    // Contar el número de filas
    $num_rows = mysqli_num_rows($validar_login);

    if ($num_rows > 0) {
        //echo "Inicio de sesión exitoso. Usuario: $correo";
        header("location: ../restringido/log_home.php");
    } else {
        echo "Correo o contraseña incorrectos.";
    }

    // Opcional: cerrar la conexión
    mysqli_close($conn);
?>
