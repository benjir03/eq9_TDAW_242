<?php
include('../conexion/conexion.php');

$busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : '';

$sql = "SELECT * FROM estudiantes WHERE boleta LIKE '%$busqueda%' OR apellidoP LIKE '%$busqueda%' OR apellidoM LIKE '%$busqueda%' OR nombre LIKE '%$busqueda%'";
$resultado = mysqli_query($conexion, $sql);
$i = 1;
?>

<table class="table">
    <thead>
        <tr>
            <th>Num.</th>
            <th>No. Boleta</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre(s)</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($fila = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo "$i"; $i++;?></td>
            <td><?php echo $fila['boleta'] ?></td>
            <td><?php echo $fila['apellidoP'] ?></td>
            <td><?php echo $fila['apellidoM'] ?></td>
            <td><?php echo $fila['nombre'] ?></td>
            <td>
                <?php echo "<a class='btn btn-primary' href = 'update.php?boleta=".$fila['boleta']."'>Editar</a>"?>
                <?php echo "<a class='btn btn-danger' href='delete.php?boleta=".$fila['boleta']."'>Eliminar</a>"; ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
mysqli_close($conexion);
?>