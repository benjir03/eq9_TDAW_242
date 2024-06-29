<?php
require 'conect.php';

// Asegurarse de que POST contiene los datos esperados
if (isset($_POST['tipoTutoria']) && isset($_POST['genTutor'])) {
    // Procede con el manejo de los datos POST
    $tipoTutoria = mysqli_real_escape_string($conn, $_POST['tipoTutoria']);
    $genTutor = mysqli_real_escape_string($conn, $_POST['genTutor']);

    // Actualizar la consulta para que coincida con la estructura de la tabla tutor
    $query = "SELECT id_profesor, nombre, apPat, apMat FROM tutor WHERE imparteTutoria = '$tipoTutoria' AND genTutor = '$genTutor'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nombreCompleto = $row['nombre'] . ' ' . $row['apPat'] . ' ' . $row['apMat'];
            echo "<option value='" . $row['id_profesor'] . "'>" . $nombreCompleto . "</option>";
        }
    } else {
        echo "<option value='' disabled>No se encontraron tutores</option>";
    }

    mysqli_close($conn);
} else {
    echo "<option value='' disabled>Error en la solicitud</option>";
}
?>
