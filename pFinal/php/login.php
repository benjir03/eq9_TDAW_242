<?php

$bdhost = "localhost";
$bduser = "root";
$dbpass = "";
$dbname = "base";

$conect = mysqli_connect($bdhost, $bduser, $dbpass, $dbname);

if (!$conect) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$correo = $_POST["correo"];
$contra= $_POST["contra"];

// Escapar las variables para prevenir inyección SQL
$correo = mysqli_real_escape_string($conect, $correo);
$contra = mysqli_real_escape_string($conect, $contra);

$query = "SELECT * FROM admin WHERE Email = '$correo' AND contraseña = '$contra'";
$result = mysqli_query($conect, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conect));
}

$nr = mysqli_num_rows($result);

if ($nr == 1) {
    // Obtener el nombre de usuario
    $row = mysqli_fetch_assoc($result);
    $nombreUsuario = $row['Nombre'];
    //header("Location: bienvenido.php?usuario=$nombreUsuario");
    echo "Bienvenido " . $nombreUsuario;
} else {
    echo "No se encontraron registros.";
}

mysqli_close($conect);

?>
