<?php
$server="localhost";
$user="root";
$pass="";
$db="base";


$conexion= new mysqli($server, $user, $pass, $db);
if($conexion->connect_errno){
    die("Conexion fallida" . $conexion->connect_errno );
}else{
    echo "conectado";
}


/*$consultaSQL="SELECT*FROM alumnos";
$resultado=mysqli_query($conexion,$consultaSQL);
$validaResultado=mysqli_num_rows($resultado);

echo "Tenemos $validaResultado registro(s) en tu base de datos ejemplodb";*/

$boleta = $_POST['boleta'];
$nombre = $_POST['nombre'];
$apPat = $_POST['primerAp'];
$apMat = $_POST['segundoAp'];
$tel = $_POST['tel'];
$semestre = $_POST['semestre'];
$carrera = $_POST['carrera'];
$genero = $_POST['genero'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];

$sql = "INSERT INTO alumnos (Boleta, Nombre, Apellido_Materno, Apellido_Paterno, Telefono, Semestre, Carrera, Genero, Correo, Contraseña)
VALUES ('$boleta', '$nombre', '$primerAp', '$segundoAp', '$tel', '$semestre', '$carrera', '$genero', '$correo', '$contra')";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mostrar datos</title>
    </head>
    <body>
        <br>
        <table border="1">
            <tr>
                <td>Boleta</td>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Telefono</td>
                <td>Semestre</td>
                <td>Carrera</td>
                <td>Genero</td>
                <td>Correo</td>
            </tr>
            
            <?php
            //$sql="SELECT * from alumnos";
            //$result=mysqli_query($conexion,$sql);

            //while($mostrar=mysqli_fetch_array($result)){
            //?>

            <tr>
                <td><?php echo $boleta?></td>
                <td><?php echo $nombre?></td>
                <td><?php echo $apPat?></td>
                <td><?php echo $apMat?></td>
                <td><?php echo $tel?></td>
                <td><?php echo $semestre?></td>
                <td><?php echo $carrera?></td>
                <td><?php echo $genero?></td>
                <td><?php echo $correo?></td>
                
            </tr>
        <?php

        ?>
        </table>
    </body>
</html>
    