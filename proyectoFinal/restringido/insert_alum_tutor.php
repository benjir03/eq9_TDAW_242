<?php
require 'conect.php';

// Asegurarse de que POST contiene los datos esperados
if (isset($_POST['boleta']) && isset($_POST['id_profesor'])) {
    $boleta = mysqli_real_escape_string($conn, $_POST['boleta']);
    $id_profesor = mysqli_real_escape_string($conn, $_POST['id_profesor']);

    // Insertar datos en la tabla de relación alum_tutor
    $query = "INSERT INTO alum_tutor (boleta, id_profesor) VALUES ('$boleta', '$id_profesor')";
    if (mysqli_query($conn, $query)) {
        // Actualizar el conteo de alumnos del tutor
        $updateQuery = "UPDATE tutor SET numAlumnos = numAlumnos + 1 WHERE id_profesor = '$id_profesor'";
        mysqli_query($conn, $updateQuery);
        echo "Registro exitoso";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Error en la solicitud";
}
?>
