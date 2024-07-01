<?php
    require '../fpdf186/fpdf.php';
    session_start();
    $correo = $_SESSION["correo"];

    class PDF extends FPDF{
        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','B',8);
            $this->Cell(0,10,utf8_decode('Periodo 20242'),0,0,);
            $this->Cell(0,10,utf8_decode('Equipo 9 TDAW'),0,0,'R');
        }
    }

    $pdf = new PDF('P','mm',array(216,279));
    $pdf->AddPage();
    $pdf->SetY(25);
    $pdf->Image('../imgs/escudoESCOM.png',15,20,33);
    $pdf->Image('../imgs/escudoIPN.png',170,18,33);
    $pdf->SetFont('Times','B','18');
    $pdf->Cell(0,10,utf8_decode('INSTITUTO POLITÉCNICO NACIONAL'),0,1,'C');
    $pdf->SetFont('Times','B','15');
    $pdf->Cell(0,10,utf8_decode('ESCUELA SUPERIOR DE CÓMPUTO'),0,1,'C');
    $pdf->Ln();
    $pdf->SetFont('Times','','18');
    $pdf->Cell(0,10,utf8_decode('Comprobante de registro a tutorías'),0,1,'C');
    $pdf->Ln();
    $pdf->SetFont('Times','','16');
    $pdf->SetLeftMargin(25);
    
    
    require 'conect.php';
    $consulta = "SELECT boleta, nombre, apPat, apMat, telefono, semestre, carrera, tipoTutoria, genTutor, nombreTutor, correo from alum WHERE correo = '$correo'"; // Correo del usuario que quiere descargar PDF
    $datos = mysqli_query($conn,$consulta);
    $mostrar = mysqli_fetch_array($datos);

    // Presentacion de los datos
    $labels = [
        'Boleta' => $mostrar['boleta'],
        'Nombre' => $mostrar['nombre'],
        'Apellido Paterno' => $mostrar['apPat'],
        'Apellido Materno' => $mostrar['apMat'],
        'Numero de teléfono' => $mostrar['telefono'],
        'Correo  institucional' => $mostrar['correo'],
        'Semestre actual' => $mostrar['semestre'],
        'Carrera' => $mostrar['carrera'],
        'Tutoría en la que se registró' => $mostrar['tipoTutoria'],
        'Nombre del tutor' => $mostrar['nombreTutor']
    ];
    
    foreach ($labels as $label => $value) {
        $pdf->Cell(70, 10, utf8_decode($label . ': '), 0, 0);
        $pdf->Cell(0, 10, utf8_decode($value), 0, 1);
    }

    $pdf->Output();
?>