<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Respuestas del Formulario</title>
</head>
<body>
<?php
        session_start();
        $boleta = $_POST["boleta"];
        $nombre = $_POST["nombre"];
        $apellidoP = $_POST["apellidoP"];
        $apellidoM = $_POST["apellidoM"];
        $fecha = $_POST["fecha"];
        $genero = $_POST["genero"];
        $curp = $_POST["curp"];
        if(isset($_POST["discapacidad"])) {
            $discapacidad = $_POST["discapacidad"];
        } else {
            $discapacidad = ["Ninguna"];
        }
        $otraDiscapacidad = empty($_POST["otraDiscapacidad"]) ? "Ninguna" : $_POST["otraDiscapacidad"];
        $calle = $_POST["calle"];
        $col = $_POST["col"];
        $delegacion = isset($_POST["delegacion"]) ? $_POST["delegacion"] : "";
        $otroMunicipio = empty($_POST["otroMunicipio"]) ? "Ninguna" : $_POST["otroMunicipio"];
        $cp = $_POST["cp"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $escuelaDeProcedencia = $_POST["escuela_de_procedencias"];
        $otraEscuela = empty($_POST["otraEscuela"]) ? "Ninguna" : $_POST["otraEscuela"];
        $estado = $_POST["Estado"];
        $Promedio = $_POST["Promedio"];
        $Opcion = $_POST["Opcion"];

        $_SESSION['boleta'] = $boleta;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellidoP'] = $apellidoP;
        $_SESSION['apellidoM'] = $apellidoM;
        $_SESSION['fecha'] = $fecha;
        $_SESSION['genero'] = $genero;
        $_SESSION['curp'] = $curp;
        $_SESSION['discapacidad'] = $discapacidad;
        $_SESSION['otraDiscapacidad'] = $otraDiscapacidad;
        $_SESSION['calle'] = $calle;
        $_SESSION['col'] = $col;
        $_SESSION['delegacion'] = $delegacion;
        $_SESSION['otroMunicipio'] = $otroMunicipio;
        $_SESSION['cp'] = $cp;
        $_SESSION['tel'] = $tel;
        $_SESSION['email'] = $email;
        $_SESSION['escuelaDeProcedencia'] = $escuelaDeProcedencia;
        $_SESSION['otraEscuela'] = $otraEscuela;
        $_SESSION['estado'] = $estado;
        $_SESSION['Promedio'] = $Promedio;
        $_SESSION['Opcion'] = $Opcion;
    ?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title">Hola <?php echo $nombre; ?>, Estas son tus Respuestas del Formulario</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>Información Personal:</h6>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Boleta:</strong> <?php echo $boleta; ?></li>
                        <li class="list-group-item"><strong>Nombre:</strong> <?php echo $nombre; ?></li>
                        <li class="list-group-item"><strong>Apellido Paterno:</strong> <?php echo $apellidoP; ?></li>
                        <li class="list-group-item"><strong>Apellido Materno:</strong> <?php echo $apellidoM; ?></li>
                        <li class="list-group-item"><strong>Fecha de Nacimiento:</strong> <?php echo $fecha; ?></li>
                        <li class="list-group-item"><strong>Género:</strong> <?php echo $genero; ?></li>
                        <li class="list-group-item"><strong>CURP:</strong> <?php echo $curp; ?></li>
                        <li class="list-group-item"><strong>Discapacidad:</strong> 
                            <?php 
                            if(is_array($discapacidad)) {
                                echo implode(", ", $discapacidad); 
                            } else {
                                echo $discapacidad;
                            }
                            ?>
                        </li>
                        <li class="list-group-item"><strong>Otra Discapacidad:</strong> <?php echo $otraDiscapacidad; ?></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h6>Contacto:</h6>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Calle y Número:</strong> <?php echo $calle; ?></li>
                        <li class="list-group-item"><strong>Colonia:</strong> <?php echo $col; ?></li>
                        <li class="list-group-item"><strong>Delegación/Municipio:</strong> 
                            <?php 
                            if(is_array($delegacion)) {
                                echo implode(", ", $delegacion); 
                            } else {
                                echo $delegacion;
                            }
                            ?>
                        </li>
                        <li class="list-group-item"><strong>Otro Municipio:</strong> <?php echo $otroMunicipio; ?></li>
                        <li class="list-group-item"><strong>Código Postal:</strong> <?php echo $cp; ?></li>
                        <li class="list-group-item"><strong>Teléfono/Celular:</strong> <?php echo $tel; ?></li>
                        <li class="list-group-item"><strong>Email:</strong> <?php echo $email; ?></li>
                    </ul>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <h6>Procedencia:</h6>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Escuela de Procedencia:</strong> <?php echo $escuelaDeProcedencia; ?></li>
                        <li class="list-group-item"><strong>Otra Escuela:</strong> <?php echo $otraEscuela; ?></li>
                        <li class="list-group-item"><strong>Entidad Federativa de Procedencia:</strong> <?php echo $estado; ?></li>
                        <li class="list-group-item"><strong>Promedio:</strong> <?php echo $Promedio; ?></li>
                        <li class="list-group-item"><strong>ESCOM fue tu:</strong> <?php echo $Opcion; ?></li>
                    </ul>
                </div>
            </div>
            <div class="mt-4">
                <a href="insertar.php" class="btn btn-primary" id="enviar">Enviar</a>
                <a href="../Registro.php" class="btn btn-primary">Modificar</a>

            </div>
            <script>
                document.getElementById('enviar').onclick = function() {
                    // Esperar un breve momento antes de redirigir
                    setTimeout(function() {
                        window.location.href = '../index.html'; // Sube un nivel en la estructura de directorios
                    }, 1000); // Retraso de 1000 milisegundos (1 segundo)
                };
            </script>

        </div>
    </div>
</div>
</body>
</html>
