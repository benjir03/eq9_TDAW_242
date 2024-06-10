<?php
?>

<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>REGISTRO</title>
        <meta name="author" content="Equipo 9">
        
        <!-- S T Y L E S -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../estilos/styles-registro.css">
        
    </head>

    <body>
        <!-- HEADER -->
        <header class="p-3 text-bg-dark text-bg-light">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="../index.php" class="nav-brand"><img src="../imgs/escudoIPN.png" alt="Logo IPN" title="Logo IPN" class="headerImg"></a>
                <a href="../index.php" class="nav-brand"><img src="../imgs/escudoESCOM.png" alt="Logo ESCOM" title="Logo ESCOM" class="headerImg"></a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../index.php" class="nav-link px-2 text-secondary">Inicio</a></li>
                    <li><a href="formularioRegistro.php" class="nav-link px-2 text-white">Registro</a></li>
                    <li><a href="inicioSesion.php" class="nav-link px-2 text-secondary">Admin</a></li>
                    <li><a href="" class="nav-link px-2 text-secondary">Acuse PDF</a></li>
                </ul>
                <!--
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                -->
            </div>
        </header>

        <!-- MAIN -->
        <main>
            <div class="fondoRegistro container-fluid d-flex justify-content-center align-items-center row-full-height">
                <div class="contenedorFormRegistro">
                    <form action="../php/registro.php" method="POST" name="registro" id="reg">
                        <fieldset>
                            <legend>Datos personales y académicos</legend>
                            <p>Registre sus datos para el programa de tutorías.</p>

                            <label for="boleta">Boleta:</label>
                            <br>
                            <input class="campo-texto" type="text" name="boleta" id="boleta" required>
                            <br>
                            <label for="nombre">Nombre(s):</label>
                            <br>
                            <input class="campo-texto" type="text" name="nombre" id="nombre">
                            <br>
                            <label for="apPat">Apellido paterno:</label>
                            <br>
                            <input class="campo-texto" type="text" name="apellidoPaterno" id="apPat">
                            <br>
                            <label for="apMat">Apellido materno:</label>
                            <br>
                            <input class="campo-texto" type="text" name="apellidoMaterno" id="apMat">
                            <br>
                            <label for="tel">No. de teléfono:</label>
                            <br>
                            <input class="campo-texto" type="tel" name="telefono" id="tel">
                            <br>
                            <label for="semestre">Semestre que cursas actualmente:</label>
                            <br>
                            <select name="semestre" id="sem">
                                <option value="0" disabled selected>Elige tu semestre actual:</option>
                                <option value="1">Primero</option>
                                <option value="2">Segundo</option>
                                <option value="3">Tercero</option>
                                <option value="4">Cuarto</option>
                                <option value="5">Quinto</option>
                                <option value="6">Sexto</option>
                                <option value="7">Séptimo</option>
                                <option value="8">Octavo</option>
                                <option value="9">Noveno</option>
                                <option value="10">Décimo</option>
                            </select>
                            <br>
                            <label for="carrera">Carrera en la que estas inscrito:</label>
                            <br>
                            <select id="carrera" name="carrera" required>
                                <option value="zzz" disabled selected>Elige tu carrera:</option>
                                <option value="ISC">Ingeniería en Sistemas Computacionales</option>
                                <option value="IIA">Ingeniería en Inteligencia Artificial</option>
                                <option value="LCD">Licenciatura en Ciencia de Datos</option>
                            </select>
                            <br>
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
                        </fieldset>
                        <br>

                        <fieldset>
                            <legend>Cuenta</legend>
                            <p>Ingresa tus datos para crear una cuenta.</p>

                            <label for="correo">Correo institucional:</label>
                            <br>
                            <input class="campo-texto" type="email" name="correo" id="correo">
                            <br>
                            <label for="contra">Contraseña:</label>
                            <br>
                            <input class="campo-texto" type="password" name="contra" id="contra">
                        </fieldset>
                        <br>
                        <p class="alertas" id="alertas"></p>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input class="btn btn-primary" type="submit" value="Registrar">
                            <button class="btn btn-primary" onclick="cleanForm()">Limpiar</button>
                        </div>
                    </form>
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
            function cleanForm() {
              document.getElementById("reg").reset();
            }
          </script>
        <script src="../validaciones/val-registro.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>