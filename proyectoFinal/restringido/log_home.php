<?php
    session_start();

    if(isset($_SESSION["username"])) {
        $username_session = $_SESSION["username"];
    }
    else {
        header("location: ../views/inicioSesion.php");
    }
?>

<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Admin | Programa de tutorías ESCOM</title>
        <meta name="author" content="Equipo 9">
        
        <!-- S T Y L E S -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../estilos/styles-inicioSesion.css">
        
    </head>

    <body>
        <!-- HEADER -->
        <header class="p-3 text-bg-dark text-bg-light">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="../index.php" class="nav-brand"><img src="../imgs/escudoIPN.png" alt="Logo IPN" title="Logo IPN" class="headerImg"></a>
                <a href="../index.php" class="nav-brand"><img src="../imgs/escudoESCOM.png" alt="Logo ESCOM" title="Logo ESCOM" class="headerImg"></a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../index.php" class="nav-link px-2 text-secondary">Inicio</a></li>
                    <li><a href="formularioRegistro.php" class="nav-link px-2 text-secondary">Registro</a></li>
                    <li><a href="" class="nav-link px-2 text-white">Inicio de sesión</a></li>
                </ul>
                <button type="button" class="btn btn-outline-light me-2" onclick="cerrarSesion()">Cerrar sesión</button>
            </div>
        </header>

        <!-- MAIN -->
        <main>
            <div class="fondoSesion container-fluid d-flex flex-column align-items-center row-full-height">
                <div class="contenedorFormSesion mb-3">
                    <h1>Hola <?php echo "$username_session"?></h1>
                </div>
                <div class="table-responsive w-100">
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Boleta</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Teléfono</th>
                                <th>Semestre</th>
                                <th>Carrera</th>
                                <th>Tutoría</th>
                                <th>Género tutor</th>
                                <th>Tutor</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require "../php/conect.php";
                                $datos = "SELECT * from alum";
                                $consulta = mysqli_query($conn,$datos);
                                while($mostrar = mysqli_fetch_array($consulta)){
                            ?>
                            <tr>
                                <td><?php echo $mostrar['boleta'] ?></td>
                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td><?php echo $mostrar['apPat'] ?></td>
                                <td><?php echo $mostrar['apMat'] ?></td>
                                <td><?php echo $mostrar['telefono'] ?></td>
                                <td><?php echo $mostrar['semestre'] ?></td>
                                <td><?php echo $mostrar['carrera'] ?></td>
                                <td><?php echo $mostrar['tipoTutoria'] ?></td>
                                <td><?php echo $mostrar['nombreTutor'] ?></td>
                                <td><?php echo $mostrar['genTutor'] ?></td>
                                <td><?php echo $mostrar['correo'] ?></td>
                                <td><?php echo $mostrar['contra'] ?></td>
                                <td>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-danger mb-2" href="delete.php?boleta=<?= $mostrar['boleta'] ?>">Eliminar</a>
                                        <a class="btn btn-warning mb-2" href="update.php?boleta=<?= $mostrar['boleta'] ?>">Modificar</a>                                    </div>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <span class="text-body-secondary ps-3">&copy; 2024, TDAW - Equipo 9</span>
            <a class="text-body-secondary pe-3" href="https://www.escom.ipn.mx/">escom.ipn.mx</a>
          </footer>
          
        <!-- S C R I P T S -->
        <script>
            function cerrarSesion() {
                window.location.href = "../php/unlogin.php?sesion=<?php echo "$username"?>";
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
