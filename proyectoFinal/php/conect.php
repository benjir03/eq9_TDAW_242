<?php
    $servername = "localhost";
    $username = "root";  // Ajusta si es necesario
    $password = "";      // Ajusta si es necesario
    $dbname = "tut_db";
    
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>
