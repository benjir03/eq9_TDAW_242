<?php
require('../fpdf186/fpdf.php');
session_start();
include('../conexion/conexion.php');

$boleta = $_SESSION['boleta'];
$nombre = $_SESSION['nombre'];
$apellidoP = $_SESSION['apellidoP'];
$apellidoM = $_SESSION['apellidoM'];
$fecha = $_SESSION['fecha'];
$genero = $_SESSION['genero'];
$curp = $_SESSION['curp'];
$discapacidad = $_SESSION['discapacidad'];
$otraDiscapacidad = $_SESSION['otraDiscapacidad'];
$calle = $_SESSION['calle'];
$col = $_SESSION['col'];
$delegacion = $_SESSION['delegacion'];
$otroMunicipio = $_SESSION['otroMunicipio'];
$cp = $_SESSION['cp'];
$tel = $_SESSION['tel'];
$email = $_SESSION['email'];
$escuelaDeProcedencia = $_SESSION['escuelaDeProcedencia'];
$otraEscuela = $_SESSION['otraEscuela'];
$estado = $_SESSION['estado'];
$promedio = $_SESSION['Promedio'];
$opcion = $_SESSION['Opcion'];
$dia_asignado = "Lunes 15 de Enero";
$salon_asignado;
$hora_asignado;
$discapacidad_str = is_array($discapacidad) ? implode(", ", $discapacidad) : $discapacidad;

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
    } else if ($numeroAlumnos >= 121 && $numeroAlumnos <= 150) {
        $salon_asignado = "Sistemas V";
    } else if ($numeroAlumnos >= 151 && $numeroAlumnos <= 180) {
        $salon_asignado = "Sistemas VI";
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
          VALUES ('$curp', '$boleta', '$nombre', '$apellidoP', '$apellidoM', '$fecha', '$genero', '$discapacidad_str', '$otraDiscapacidad', '$calle', '$col', '$delegacion', '$otroMunicipio', '$cp', '$tel', '$email', '$escuelaDeProcedencia', '$otraEscuela', '$estado', '$promedio', '$opcion', '$dia_asignado', '$salon_asignado', '$hora_asignado')";

$resultado = mysqli_query($conexion, $query);

class PDF extends FPDF {
    function header(){
        $this->Image('../img/banner.png', 0, 0, 210);
        $this->Ln(20);
    }

    function footer(){
        $this->Image('../img/ESCOM.png', 0, 235, 210);
        $this->Ln(20);
    }
}

$pdf = new PDF();  // Utiliza la clase personalizada PDF
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Datos del Estudiante', 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, "Nombre: $nombre", 0, 1);
$pdf->Cell(0, 10, "Apellido Paterno: $apellidoP", 0, 1);
$pdf->Cell(0, 10, "Apellido Materno: $apellidoM", 0, 1);
$pdf->Cell(0, 10, "Boleta: $boleta", 0, 1);

$pdf->Cell(0, 10, '', 0, 1);

$pdf->Cell(0, 10, 'Horario Asignado', 0, 1, 'C');
$pdf->Cell(0, 10, "Dia Asignado: $dia_asignado", 0, 1);
$pdf->Cell(0, 10, "Laboratorio Asignado: $salon_asignado", 0, 1);
$pdf->Cell(0, 10, "Hora Asignada: $hora_asignado am", 0, 1);

// Guardar o mostrar el PDF
$pdf->Output("$boleta.pdf", 'D');


echo "<script>";

echo "window.location.href = '../index.html';";
if ($resultado) {
    echo "alert('Datos insertados correctamente en la base de datos.');";
} else {
    echo "alert('Error al insertar datos en la base de datos: " . mysqli_error($conexion) . "');";
}

echo "</script>";

mysqli_close($conexion);
session_destroy();
?>
