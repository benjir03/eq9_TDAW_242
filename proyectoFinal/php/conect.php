<?php
    $servername = "localhost";
    $username = "root";  // Ajusta si es necesario
    $password = "";      // Ajusta si es necesario
    $dbname = "tut_db";
    $port = 3306; // cambiar segun el puerto que utilices
    
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>
