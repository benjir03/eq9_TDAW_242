<?php
    session_start();

    $boleta = $_GET['boleta'];
    $_SESSION['boleta'] = $boleta;
    $encontrado = [];
    $estudiantes = $_SESSION['estudiantes'];
    $num_filas = $_SESSION['num_filas'];
    
    for($i=0;$i<$num_filas;$i++){
        if($estudiantes[$i]['boleta'] == $boleta){
            $encontrado = [
                'boleta' => $estudiantes[$i]['boleta'],
                'nombre' => $estudiantes[$i]['nombre'],
                'apPat' => $estudiantes[$i]['apPat'],
                'apMat' => $estudiantes[$i]['apMat'],
                'telefono' => $estudiantes[$i]['telefono'],
                'semestre' => $estudiantes[$i]['semestre'],
                'carrera' => $estudiantes[$i]['carrera'],
                'tipoTutoria' => $estudiantes[$i]['tipoTutoria'],
                'genTutor' => $estudiantes[$i]['genTutor'],
                'nombreTutor' => $estudiantes[$i]['nombreTutor'],
                'correo' => $estudiantes[$i]['correo'],
                'contra' => $estudiantes[$i]['contra']
            ];            
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Modificar | Programa de tutorías ESCOM</title>
        <meta name="author" content="Equipo 9">
        
        <!-- S T Y L E S -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../estilos/styles-inicioSesion.css">
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
                    <li><a href="../views/formularioRegistro.php" class="nav-link px-2 text-secondary">Registro</a></li>
                    <li><a href="" class="nav-link px-2 text-white">Inicio de sesión</a></li>
                </ul>
            </div>
        </header>

        <!-- MAIN -->
        <main>
            <div class="fondoSesion container-fluid d-flex justify-content-center align-items-center row-full-height">
                <div class="contenedorFormSesion">
                    <form action="editarUser.php" method="POST" id="formUpd">
                        <fieldset>
                            <legend>Modificar datos de estudiantes</legend>

                            <label for="boleta">Boleta:</label>
                            <br>
                            <input class="campo-texto" type="text" name="boleta" id="boleta" maxlength="10" value="<?= $encontrado['boleta']?>" required>
                            <span class="error-message" id="error-boleta"></span>
                            <br>
                            <label for="nombre">Nombre(s):</label>
                            <br>
                            <input class="campo-texto" type="text" name="nombre" id="nombre" value="<?= $encontrado['nombre']?>" required>
                            <span class="error-message" id="error-nombre"></span>
                            <br>
                            <label for="apPat">Apellido paterno:</label>
                            <br>
                            <input class="campo-texto" type="text" name="apellidoPaterno" id="apPat" value="<?= $encontrado['apPat']?>" required>
                            <span class="error-message" id="error-apPat"></span>
                            <br>
                            <label for="apMat">Apellido materno:</label>
                            <br>
                            <input class="campo-texto" type="text" name="apellidoMaterno" id="apMat" value="<?= $encontrado['apMat']?>" required>
                            <span class="error-message" id="error-apMat"></span>
                            <br>
                            <label for="tel">No. de teléfono:</label>
                            <br>
                            <input class="campo-texto" type="tel" name="telefono" id="tel" maxlength="10" value="<?= $encontrado['telefono']?>" required>
                            <span class="error-message" id="error-tel"></span>
                            <br>
                            <label for="carrera">Carrera en la que estas inscrito:</label>
                            <br>
                            <select id="carrera" name="carrera">
                                <option value="0" disabled selected>Elige tu carrera:</option>
                                <option value="ISC">Ingeniería en Sistemas Computacionales</option>
                                <option value="IIA">Ingeniería en Inteligencia Artificial</option>
                                <option value="LCD">Licenciatura en Ciencia de Datos</option>
                            </select><br>
                            <span class="error-message" id="error-carrera"></span>
                            <br>
                            <label for="semestre">Semestre que cursas actualmente:</label>
                            <br>
                            <select name="semestre" id="semestre">
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
                            </select><br>
                            <span class="error-message" id="error-semestre"></span>
                            <br>
                            <label for="correo">Correo institucional:</label>
                            <br>
                            <input class="campo-texto" type="email" name="correo" id="correo" value="<?= $encontrado['correo']?>" required>
                            <span class="error-message" id="error-correo"></span>
                            <br>
                            <label for="contra">Contraseña:</label>
                            <br>
                            <input class="campo-texto" type="password" name="contra" id="contra" value="<?= $encontrado['contra']?>" required>
                            <span class="error-message" id="error-contra"></span>
                            <br>
                            <label for="borrarTut">¿Quieres borrar los datos de la tutoría (tutor y tipo de tutoría)? </label>
                            <input type="radio" name="borrarTut" id="no" value="0"> No
                            <input type="radio" name="borrarTut" id="si" value="1"> Sí                            
                            <br>
                            <span class="error-message" id="error-borrarTut"></span>
                            <br>
                        </fieldset>
                        <p class="alertas" id="alertas"></p>
                        <div class="d-grid gap-2 col-6 mx-auto pt-3">
                            <input class="btn btn-primary" type="submit" value="Realizar cambios">
                            <a class="btn btn-primary mb-2" href="log_home.php">Cancelar</a>
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
        <script src="../validaciones/val-upd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>