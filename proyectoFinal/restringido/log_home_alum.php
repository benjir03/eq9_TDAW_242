<?php
    session_start();

    if(isset($_SESSION["nombre"])) {
        $boleta_sesion =  $_SESSION["boleta"];
        $nombre_sesion = $_SESSION["nombre"];
        $apPat_sesion = $_SESSION["apPat"];
        $apMat_sesion = $_SESSION["apMat"];
        $telefono_sesion = $_SESSION["telefono"];
        $semestre_sesion = $_SESSION["semestre"];
        $carrera_sesion = $_SESSION["carrera"];
        $tipoTutoria_sesion = $_SESSION["tipoTutoria"];
        $genTutor_sesion = $_SESSION["genTutor"];
        $nombreTutor_sesion = $_SESSION["nombreTutor"];

    }
    else {
        header("location: ../views/inicioSesionAlum.php");
    }
?>

<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Alumno | Programa de tutorías ESCOM</title>
        <meta name="author" content="Equipo 9">
        
        <!-- S T Y L E S -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../estilos/styles-log_home_alum.css">

        <!-- S C R I P T S -->
    </head>

    <body>
        <!-- HEADER -->
        <header class="p-3 text-bg-dark text-bg-light">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="../index.php" class="nav-brand"><img src="../imgs/escudoIPN.png" alt="Logo IPN" title="Logo IPN" class="headerImg"></a>
                <a href="../index.php" class="nav-brand"><img src="../imgs/escudoESCOM.png" alt="Logo ESCOM" title="Logo ESCOM" class="headerImg"></a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="log_home_alum.php" class="nav-link px-2 text-white">Alumno</a></li>
                </ul>
                <button type="button" class="btn btn-outline-light me-2" onclick="cerrarSesion()">Cerrar sesión</button>
            </div>
        </header>

        <!-- MAIN -->
        <main>
            <div class="fondoSesion container-fluid d-flex justify-content-center align-items-center">
                <div class="contenedorFormSesion">
                    <h1>Hola <?php echo "$nombre_sesion"?></h1>

                    <hr class=" border-secondary border-3 opacity-75">
                    
                    <div class="contenedorSelectorTutor">
                        <p class="fw-bold m-0">Completa tu registro</p>
                        <form action="">
                            <label for="tipoTutoria">Elige el tipo de tutoría:</label>
                            <br>
                            <select id="tipoTutoria" name="tipoTutoria" required>
                                <option value="zzz" disabled selected>Elige el tipo de tutoría:</option>
                                <option value="IND">Tutoría individual</option>
                                <option value="GRU">Tutoría grupal</option>
                                <option value="REC">Tutoría de recuperación</option>
                                <option value="REG">Tutoría de regularización</option>
                                <option value="PAR">Tutoría entre pares</option>
                            </select>
                            <br>
                            <label for="genTutor">Elige el género de tu tutor:</label>
                            <br>
                            <input type="radio" name="genTutor" id="hombre" value="H"> Hombre
                            <input type="radio" name="genTutor" id="mujer" value="M"> Mujer
                            <br>
                            <label for="">Elige a tu tutor:</label>
                            <br>
                            <select name="tutor" id="tutor">
                                <option value="---" disabled selected>Elige un tutor
                            </select>
                            <br>
                            <button class="mt-3 btn btn-primary">Completar registro</button>
                        </form>
                    </div>
                    

                    <div class="contenedorDatos">
                        <h3>Tus datos:</h3>

                        <p class="fw-bold p-0 m-0 ps-1">Boleta:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$boleta_sesion"?></p>
                        </div>

                        <p class="fw-bold p-0 m-0 ps-1">Nombre:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$nombre_sesion"?></p>
                        </div>

                        <p class="fw-bold p-0 m-0 ps-1">Apellido paterno:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$apPat_sesion"?></p>
                        </div>

                        <p class="fw-bold p-0 m-0 ps-1">Apellido materno:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$apMat_sesion"?></p>
                        </div>

                        <p class="fw-bold p-0 m-0 ps-1">Teléfono:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$telefono_sesion"?></p>
                        </div>

                        <p class="fw-bold p-0 m-0 ps-1">Semestre:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$semestre_sesion"?></p>
                        </div>

                        <p class="fw-bold p-0 m-0 ps-1">Carrera:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$carrera_sesion"?></p>
                        </div>

                        <p class="fw-bold p-0 m-0 ps-1">Tipo de tutoría:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$tipoTutoria_sesion"?></p>
                        </div>

                        <p class="fw-bold p-0 m-0 ps-1">Tutor:</p>
                        <div class="contDatos w-100 bg-light border border-gray">
                            <p class="text-secondary p-0 m-0 ps-1"><?php echo "$nombreTutor_sesion"?></p>
                        </div>

                    </div>

                    <div class="botonPDF row">
                        <button class="mt-3 btn btn-primary">Imprimir acuse</button>
                    </div>

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