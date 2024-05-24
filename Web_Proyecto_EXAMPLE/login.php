<?php
include('conexion/conexion.php');

if (isset($_POST['enviar'])) {
    if (empty($_POST['noTrab']) || empty($_POST['contra'])) {
        echo "<script language='JavaScript'>alert('El número de trabajador o contraseña no han sido ingresados'); location.assign('login.php');</script>";
    } else {

        session_start();

        $noTrab = $_POST['noTrab'];
        $contra = $_POST['contra'];

        $sql = "SELECT * FROM administadores WHERE noTrab = ? AND contra = ?";
        $stmt = mysqli_prepare($conexion, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $noTrab, $contra);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($fila = mysqli_fetch_assoc($resultado)) {
            $_SESSION['noTrab'] = $noTrab;
            echo "<script language='JavaScript'>alert('Bienvenido'); location.assign('crud/CRUD.php');</script>";
        } else {
            echo "<script language='JavaScript'>alert('El número de trabajador o contraseña son incorrectos'); location.assign('login.php');</script>";
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>.:: Iniciar Sesion ::.</title>
</head>

<body>
    <div class="container-fluid d-flex vh-100 align-items-center justify-content-center">
        <div class="container w-75 back mt-5 rounded">
            <div class="row text-white align-items-stretch">
                <div class="col imgLogin d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                </div>
                <div class="col p-5 rounded-end">
                    <div class="text-end">
                        <img src="img/logo.webp" width="48">
                    </div>
                    <h2 class="fw-bold text-center py-5">Bienvenido<br>Administrador</h2>
                    <form name="login" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="mb-4">
                            <label for="numeroTrabajador" class="form-label">Número de Trabajador</label>
                            <input type="text" name="noTrab" id="noTrab" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="Contrasena" class="form-label">Contraseña</label>
                            <input type="password" name="contra" id="contra" class="form-control">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" name="conectar" id="conectar" class="form-check-input">
                            <label class="form-check-label" for="conectar">Mantenerme conectado</label>
                        </div>
                        <div class="d-grid">
                            <input type="submit" class="btn btn-primary" name="enviar" value="Ingresar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}
?>
