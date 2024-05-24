<?php
include('conexion/conexion.php');

if (isset($_POST['enviar'])) {
    if (empty($_POST['curp']) || empty($_POST['boleta'])) {
        echo "<script language='JavaScript'>alert('El número de boleta o CURP no han sido ingresados'); location.assign('recHorario.php');</script>";
    } else {
        $curp = $_POST['curp'];
        $boleta = $_POST['boleta'];

        $sql = "SELECT * FROM estudiantes WHERE curp = ? AND boleta = ?";
        $stmt = mysqli_prepare($conexion, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $curp, $boleta);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($fila = mysqli_fetch_assoc($resultado)) {
            
            require('fpdf186/fpdf.php');
            $nombre = $fila['nombre'];
            $apellidoP = $fila['apellidoP'];
            $apellidoM = $fila['apellidoM'];
            $hora_asignado = $fila['hora_asignado'];
            $dia_asignado = $fila['dia_asignado'];
            $salon_asignado = $fila['salon_asignado'];

            class PDF extends FPDF {
                function header(){
                    $this->Image('img/banner.png', 0, 0, 210);
                    $this->Ln(20);
                }

                function footer(){
                    $this->Image('img/ESCOM.png', 0, 235, 210);
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

        } else {
            echo "<script language='JavaScript'>alert('El CURP o Número de boleta son incorrectos'); location.assign('recHorario.php');</script>";
        }
    }
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>.:: Recuperar Horario ::.</title>
</head>
<body>
    <div class="container-fluid d-flex vh-100 align-items-center justify-content-center">
        <div class="container w-75 back mt-5 rounded">
            <div class="row text-white align-items-stretch">
                <div class="col p-5 rounded-end">
                    <div class="text-end">
                        <img src="img/logo.webp" width="48">
                    </div>
                    <h2 class="fw-bold text-center py-5">¡Hola compañer@ ESCOMI@!</h2>
                    <p>Para volver a descargar tu horario es necesario que ingreses tu CURP y número de boleta que registraste.</p><br>
                    <form name="login" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="mb-4">
                            <label for="curp" class="form-label">CURP</label>
                            <input type="text" name="curp" id="curp" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="boleta" class="form-label">Número de Boleta</label>
                            <input type="text" name="boleta" id="boleta" class="form-control"><br>
                        </div>
                        <div class="d-grid">
                            <input type="submit" name = "enviar" class="btn btn-primary" value="Enviar">
                        </div>
                    </form>
                </div>
                <div class="col imgHorario d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>
