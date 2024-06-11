<?php
?>

<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Ingresa | Programa de tutorías ESCOM</title>
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
                    <!--
                    <li><a href="" class="nav-link px-2 text-secondary">Acuse PDF</a></li>
                    -->
                </ul>
                <!--
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                -->
            </div>
        </header>

        <!-- MAIN -->
        <main>
            <div class="fondoSesion container-fluid d-flex justify-content-center align-items-center row-full-height">
                <div class="contenedorFormSesion">
                    <form action="../php/login.php" method="POST" name="inicioSesion" id="iSesion">
                        <fieldset>
                            <legend>Inicio de sesión</legend>
                            <input class="campo-texto" type="email" name="correoSesion" id="correo" placeholder="Ingresa tu correo">
                            <br>
                            <input class="campo-texto" type="password" name="contraSesion" id="contra" placeholder="Ingresa tu contraseña">
                        </fieldset>

                        <div class="d-grid gap-2 col-6 mx-auto pt-3">
                            <input class="btn btn-primary" type="submit" value="Iniciar sesión">
                        </div>

                        <p class="alertas"></p>
                    </form>

                    <p>
                        ¿No eres administrdor? <a href="inicioSesionAlum.php">Inicia sesión como alumno</a>.
                    </p>
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <span class="text-body-secondary ps-3">&copy; 2024, TDAW - Equipo 9</span>
            <a class="text-body-secondary pe-3" href="https://www.escom.ipn.mx/">escom.ipn.mx</a>
          </footer>
          
        <!-- S C R I P T S -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>