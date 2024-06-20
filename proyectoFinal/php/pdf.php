<?php
    require 'fpdf186/fpdf.php';

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
    $consulta = "SELECT boleta, nombre, apPat, apMat, telefono, semestre, carrera, tipoTutoria, genTutor, nombreTutor, correo from alum WHERE boleta = '$boleta'"; // Correo del usuario que quiere descargar PDF
    $datos = mysqli_query($bdRegistro,$consulta);
    $mostrar = mysqli_fetch_array($datos);

    // Presentacion de los datos
    $pdf->Cell(0,10,utf8_decode('Boleta: '),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['boleta']),0,1);
    $pdf->Cell(0,10,utf8_decode('Nombre: '),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['nombre']),0,1);
    $pdf->Cell(0,10,utf8_decode('Apellido Paterno: '),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['apPat']),0,1);
    $pdf->Cell(0,10,utf8_decode('Apellido Materno: '),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['apMat']),0,1);
    $pdf->Cell(0,10,utf8_decode('Numero de teléfono: '),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['telefono']),0,1);
    $pdf->Cell(0,10,utf8_decode('Correo electrónico institucional:'),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['correo']),0,1);
    $pdf->Cell(0,10,utf8_decode('Semestre actual:'),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['semestre']),0,1);
    $pdf->Cell(0,10,utf8_decode('Carrera:'),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['carrera']),0,1);
    $pdf->Cell(0,10,utf8_decode('Tutoría en la que se registró:'),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['tipoTutoria']),0,1);
    $pdf->Cell(0,10,utf8_decode('Nombre del tutor:'),0,0);
    $pdf->Cell(0,10,utf8_decode($mostrar['nombreTutor']),0,1);

    $pdf->Output();
?>