<?php
session_start();

if (isset($_SESSION['noTrab'])) {
    $noTrab = $_SESSION['noTrab'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escuela Superior de Computo</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/buscar.js"></script>
</head>
<body>
    <?php
    include('../conexion/conexion.php');

    $sql2 = "SELECT * FROM administadores WHERE noTrab = '$noTrab'";
    $resultado2 = mysqli_query($conexion, $sql2);
    $fila2 = mysqli_fetch_assoc($resultado2);
    ?>
    <div class="container mt-4">
        <h1>Lista de Alumnos</h1>
        <h2>Bienvenid@ <?php echo $fila2['Nombre'];?> <?php echo $fila2['apellidoP'];?> <?php echo $fila2['apellidoM'];?></h2><br>
        <a href="agregar.php" class="btn btn-primary">Nuevo Alumno</a>
        <a href='cerraSesion.php?noTrab=<?php echo $noTrab; ?>' class="btn btn-primary">Cerrar Sesion</a><br><br>

        <form action="" method="GET" class="mb-3" onsubmit="return buscar()">
            <div class="form-group">
                <label for="busqueda">Buscar:</label>
                <input type="text" name="busqueda" id="busqueda" class="form-control" placeholder="Ingrese término de búsqueda">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <div id="tabla-container" class="table-responsive">
            <?php include 'buscar.php'; ?>
        </div>
    </div>

</body>
</html>

<?php 
} else {
    header("location:../login.php");
}
?>
