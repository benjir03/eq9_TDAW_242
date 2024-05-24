<?php 
	include('../conexion/conexion.php');
	$boleta = $_POST["boleta"];
    $nombre = $_POST["nombre"];
    $apellidoP = $_POST["apellidoP"];
    $apellidoM = $_POST["apellidoM"];
    $fecha = $_POST["fecha"];
    $genero = $_POST["genero"];
    $curp = $_POST["curp"];
    $discapacidad = isset($_POST["discapacidad"]) ? $_POST["discapacidad"] : "Ninguna";
    $otraDiscapacidad = empty($_POST["otraDiscapacidad"]) ? "Ninguna" : $_POST["otraDiscapacidad"];
    $calle = $_POST["calle"];
    $col = $_POST["col"];
    $delegacion = $_POST["delegacion"];
    $otroMunicipio = empty($_POST["otroMunicipio"]) ? "Ninguna" : $_POST["otroMunicipio"];
    $cp = $_POST["cp"];
    $tel = $_POST["tel"];
    $email = $_POST["inputEmail3"];
    $escuelaDeProcedencia = $_POST["escuela_de_procedencias"];
    $otraEscuela = empty($_POST["otraEscuela"]) ? "Ninguna" : $_POST["otraEscuela"];
    $estado = $_POST["Estado"];
    $promedio = $_POST["Promedio"];
    $opcion = isset($_POST["Opcion"]) ? $_POST["Opcion"] : "";
    $dia_asignado = "Lunes 15 de Enero";
    $salon_asignado;
    $hora_asignado;

    function obtenerNumeroAlumnosRegistrados($conexion) {
        $query = "SELECT COUNT(*) as total_alumnos FROM estudiantes";
        $result = $conexion->query($query);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['total_alumnos'];
        } else {
            return 0;
        }
    }

    $numeroAlumnos = obtenerNumeroAlumnosRegistrados($conexion);

    if ($numeroAlumnos <= 180) {
        if ($numeroAlumnos <= 30) {
            $salon_asignado = "Sistemas I";
        } else if ($numeroAlumnos >= 31 && $numeroAlumnos <= 60) {
            $salon_asignado = "Sistemas II";
        } else if ($numeroAlumnos >= 61 && $numeroAlumnos <= 90) {
            $salon_asignado = "Sistemas III";
        } else if ($numeroAlumnos >= 91 && $numeroAlumnos <= 120) {
            $salon_asignado = "Sistemas IV";
        } else if ($numeroAlumnos >= 121 && $numeroAlumnos <= 180) {
            $salon_asignado = "Sistemas V";
        }
        $hora_asignado = "7:00 - 8:30";
    } else if ($numeroAlumnos >= 181 && $numeroAlumnos <= 300) {
        if ($numeroAlumnos >= 181 && $numeroAlumnos <= 210) {
            $salon_asignado = "Sistemas I";
        } else if ($numeroAlumnos >= 211 && $numeroAlumnos <= 240) {
            $salon_asignado = "Sistemas II";
        } else if ($numeroAlumnos >= 241 && $numeroAlumnos <= 270) {
            $salon_asignado = "Sistemas III";
        } else if ($numeroAlumnos >= 271 && $numeroAlumnos <= 300) {
            $salon_asignado = "Sistemas IV";
        }
        $hora_asignado = "8:45 - 10:15";
    }

    $query = "INSERT INTO estudiantes (curp, boleta, nombre, apellidoP, apellidoM, fecha, genero, discapacidad, otraDiscapacidad, calle, col, delegacion, otroMunicipio, cp, tel, email, escuelaDeProcedencia, otraEscuela, estado, promedio, opcion, dia_asignado, salon_asignado, hora_asignado)
          VALUES ('$curp', '$boleta', '$nombre', '$apellidoP', '$apellidoM', '$fecha', '$genero', '$discapacidad', '$otraDiscapacidad', '$calle', '$col', '$delegacion', '$otroMunicipio', '$cp', '$tel', '$email', '$escuelaDeProcedencia', '$otraEscuela', '$estado', $promedio, '$opcion', '$dia_asignado', '$salon_asignado', '$hora_asignado')";

    $resultado = mysqli_query($conexion, $query);

    echo "<script>";
    if ($resultado) {
        echo "alert('Datos insertados correctamente en la base de datos.');";
    } else {
        echo "alert(\"Error al insertar datos en la base de datos: " . mysqli_error($conexion) . "\");";
    }
    echo "window.location.href = 'CRUD.php';";
    echo "</script>";

    mysqli_close($conexion);
?>