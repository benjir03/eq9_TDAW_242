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
                <td>Contraseña</td>
                
            </tr>

            <?php
            $sql="SELECT * from alumnos";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['Boleta']?> ></td>
                <td><?php echo $mostrar['Nombre']?> ></td>
                <td><?php echo $mostrar['Apellido_Paterno']?> ></td>
                <td><?php echo $mostrar['Apellido_Materno']?> ></td>
                <td><?php echo $mostrar['Telefono']?> ></td>
                <td><?php echo $mostrar['Semestre']?> ></td>
                <td><?php echo $mostrar['Carrera']?> ></td>
                <td><?php echo $mostrar['Genero']?> ></td>
                <td><?php echo $mostrar['Correo']?> ></td>
                <td><?php echo $mostrar['Contraseña']?> ></td>
                
            </tr>
        <?php
        }
        ?>
        </table>
    </body>
</html>
    