<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="js/paginas.js"></script>
    <script type="text/javascript" src="js/validaciones.js"></script>
    <script type="text/javascript" src="js/Recuperar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>.:: Registro ::.</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="img/fondo3.jpg" class="img-fluid">
            </div>      
        </div>
    </div>
    <div class="container">
        <form name="Registro" method="post" action="Form/Respuestas.php" onchange="mostrarOcultarCampoA()" onsubmit="return validarCamposVacios();">

        <div class="card back" id="opc1">
	        <div class="card-body text-white">

            <fieldset>
                <legend>Identidad</legend>

                <label for="boleta" class="form-label">Número de Boleta</label>
                <input type="text" class="form-control" name="boleta" id="boleta" maxlength="10" required onchange="validarBoleta(this)" value="<?php echo isset($_SESSION['boleta']) ? htmlspecialchars($_SESSION['boleta']) : ''; ?>"><br>

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" required onchange="validarNombre(this)" value="<?php echo isset($_SESSION['nombre']) ? htmlspecialchars($_SESSION['nombre']) : ''; ?>"><br>

                <label for="apellidoP" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellidoP" id="apellidoP" maxlength="50" required onchange="validarApellido(this)" value="<?php echo isset($_SESSION['apellidoP']) ? htmlspecialchars($_SESSION['apellidoP']) : ''; ?>"><br>

                <label for="apellidoM" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="apellidoM" id="apellidoM" maxlength="50" required onchange="validarApellido(this)" value="<?php echo isset($_SESSION['apellidoM']) ? htmlspecialchars($_SESSION['apellidoM']) : ''; ?>"><br>

                <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha" id="fecha" min="1950-01-01" max="2005-12-31" value="<?php echo isset($_SESSION['fecha']) ? htmlspecialchars($_SESSION['fecha']) : ''; ?>"><br>

                <label for="genero" class="form-label">Género:</label><br>

                <div class="form-check">
                    <input type="radio" class="form-check-input" name="genero" id="genero1" value="Femenino"
                    <?php echo (isset($_SESSION['genero']) && $_SESSION['genero'] == 'Femenino') ? 'checked' : ''; ?>>Femenino<br>

                    <input type="radio" class="form-check-input" name="genero" id="genero2" value="Masculino"
                    <?php echo (isset($_SESSION['genero']) && $_SESSION['genero'] == 'Masculino') ? 'checked' : ''; ?>>Masculino<br>

                    <input type="radio" class="form-check-input" name="genero" id="genero3" value="Otro"
                    <?php echo (isset($_SESSION['genero']) && $_SESSION['genero'] == 'Otro') ? 'checked' : ''; ?>>Otro<br><br>
                </div>

                <label for="curp" class="form-label">CURP</label>
                <input type="text" class="form-control" name="curp" id="curp" maxlength="18" required onchange="validarCURP(this)" value="<?php echo isset($_SESSION['curp']) ? htmlspecialchars($_SESSION['curp']) : ''; ?>"><br>

                <label for="tipoDiscapacidad" class="form-label">Seleccione el Tipo de Discapacidad:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="discapacidad[]" id="OP1" value="Con Discapacidad Auditiva"
                    <?php echo (isset($_SESSION['discapacidad']) && in_array("Con Discapacidad Auditiva", $_SESSION['discapacidad'])) ? 'checked' : ''; ?>>Con Discapacidad Auditiva<br>

                    <input type="checkbox" class="form-check-input" name="discapacidad[]" id="OP2" value="Con Discapacidad Motriz Usuaria de Silla de Ruedas"
                    <?php echo (isset($_SESSION['discapacidad']) && in_array("Con Discapacidad Motriz Usuaria de Silla de Ruedas", $_SESSION['discapacidad'])) ? 'checked' : ''; ?>>Con Discapacidad Motriz Usuaria de Silla de Ruedas<br>

                    <input type="checkbox" class="form-check-input" name="discapacidad[]" id="OP3" value="Con Discapacidad Motriz Usuaria de Muletas"
                    <?php echo (isset($_SESSION['discapacidad']) && in_array("Con Discapacidad Motriz Usuaria de Muletas", $_SESSION['discapacidad'])) ? 'checked' : ''; ?>>Con Discapacidad Motriz Usuaria de Muletas<br>

                    <input type="checkbox" class="form-check-input" name="discapacidad[]" id="OP4" value="Con Discapacidad Motriz Usuaria de Bastón"
                    <?php echo (isset($_SESSION['discapacidad']) && in_array("Con Discapacidad Motriz Usuaria de Bastón", $_SESSION['discapacidad'])) ? 'checked' : ''; ?>>Con Discapacidad Motriz Usuaria de Bastón<br>

                    <input type="checkbox" class="form-check-input" name="discapacidad[]" id="OP5" value="Con Discapacidad Visual"
                    <?php echo (isset($_SESSION['discapacidad']) && in_array("Con Discapacidad Visual", $_SESSION['discapacidad'])) ? 'checked' : ''; ?>>Con Discapacidad Visual<br>

                    <input type="checkbox" class="form-check-input" name="discapacidad[]" id="otra" value="otra"
                    <?php echo (isset($_SESSION['discapacidad']) && in_array("otra", $_SESSION['discapacidad'])) ? 'checked' : ''; ?>>Otra<br>
                </div>

                <br>
                <input type="text" class="form-control" id="otraDiscapacidad" name="otraDiscapacidad" placeholder="Especifique otra discapacidad"
                value="<?php echo isset($_SESSION['otraDiscapacidad']) ? htmlspecialchars($_SESSION['otraDiscapacidad']) : ''; ?>">
                <label class="form-label">En Caso de no Tener Alguna Discapacidad no Seleccione Ninguna</label>
                <br>
            </fieldset>
            <br>
            <div class="row">
                <div class="col-12 d-grid">
                    <button class="btn btn-primary text-white" type = "button" onclick="next1();">Siguiente</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card back" id="opc2">
	   <div class="card-body text-white">
        <fieldset>
            <legend>Contacto</legend>
                <label for="calle" class = "form-label">Calle y Número</label>
                <input type="text" class = "form-control" id="calle" name="calle" required value="<?php echo isset($_SESSION['calle']) ? htmlspecialchars($_SESSION['calle']) : ''; ?>"><br>

                <label for="col" class = "form-label">Colonia</label>
                <input type="text" class = "form-control" id="col" name="col" required value="<?php echo isset($_SESSION['col']) ? htmlspecialchars($_SESSION['col']) : ''; ?>"><br>

                <label for="alc">Alcaldía / Municipio</label><br>
                <select name="delegacion" id="delegacion" class="form-select" aria-label="Default select example" onchange="mostrarOcultarCampoC()">
                    <option value="inicio" disabled selected hidden>--Selección--</option>
                    <option value="Álvaro Obregón" <?php echo ($_SESSION['delegacion'] == "Álvaro Obregón") ? "selected" : ""; ?>>Álvaro Obregón</option>
                    <option value="Azcapotzalco" <?php echo ($_SESSION['delegacion'] == "Azcapotzalco") ? "selected" : ""; ?>>Azcapotzalco</option>
                    <option value="Benito Juárez" <?php echo ($_SESSION['delegacion'] == "Benito Juárez") ? "selected" : ""; ?>>Benito Juárez</option>
                    <option value="Coyoacán" <?php echo ($_SESSION['delegacion'] == "Coyoacán") ? "selected" : ""; ?>>Coyoacán</option>
                    <option value="Cuajimalpa" <?php echo ($_SESSION['delegacion'] == "Cuajimalpa") ? "selected" : ""; ?>>Cuajimalpa</option>
                    <option value="Cuauhtémoc" <?php echo ($_SESSION['delegacion'] == "Cuauhtémoc") ? "selected" : ""; ?>>Cuauhtémoc</option>
                    <option value="Gustavo A. Madero" <?php echo ($_SESSION['delegacion'] == "Gustavo A. Madero") ? "selected" : ""; ?>>Gustavo A. Madero</option>
                    <option value="Iztacalco" <?php echo ($_SESSION['delegacion'] == "Iztacalco") ? "selected" : ""; ?>>Iztacalco</option>
                    <option value="Iztapalapa" <?php echo ($_SESSION['delegacion'] == "Iztapalapa") ? "selected" : ""; ?>>Iztapalapa</option>
                    <option value="Magdalena Contreras" <?php echo ($_SESSION['delegacion'] == "Magdalena Contreras") ? "selected" : ""; ?>>Magdalena Contreras</option>
                    <option value="Miguel Hidalgo" <?php echo ($_SESSION['delegacion'] == "Miguel Hidalgo") ? "selected" : ""; ?>>Miguel Hidalgo</option>
                    <option value="Milpa Alta" <?php echo ($_SESSION['delegacion'] == "Milpa Alta") ? "selected" : ""; ?>>Milpa Alta</option>
                    <option value="Tláhuac" <?php echo ($_SESSION['delegacion'] == "Tláhuac") ? "selected" : ""; ?>>Tláhuac</option>
                    <option value="Tlalpan" <?php echo ($_SESSION['delegacion'] == "Tlalpan") ? "selected" : ""; ?>>Tlalpan</option>
                    <option value="Venustiano Carranza" <?php echo ($_SESSION['delegacion'] == "Venustiano Carranza") ? "selected" : ""; ?>>Venustiano Carranza</option>
                    <option value="Xochimilco" <?php echo ($_SESSION['delegacion'] == "Xochimilco") ? "selected" : ""; ?>>Xochimilco</option>
                    <option value="Otro" <?php echo ($_SESSION['delegacion'] == "Otro") ? "selected" : ""; ?>>Otro Municipio</option>
                </select><br>


                <input type="text" class = "form-control" id="otroMunicipio" name="otroMunicipio" placeholder="Especifique el municipio de procedencia"
                value="<?php echo isset($_SESSION['otraDiscapacidad']) ? htmlspecialchars($_SESSION['otraDiscapacidad']) : ''; ?>">
                <br>
                <br>

                <label for="cp" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="cp" name="cp" onchange="validarCodigoPostal(this)" maxlength="5" value="<?php echo isset($_SESSION['cp']) ? htmlspecialchars($_SESSION['cp']) : ''; ?>"><br>

                <label for="tel" class="form-label">Teléfono o Celular</label>
                <input type="number" class="form-control" id="tel" name="tel"  required onchange="validarTelefono(this)" value="<?php echo isset($_SESSION['tel']) ? htmlspecialchars($_SESSION['tel']) : ''; ?>"><br>

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name = "email" required onchange="validarCorreo(this)" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>">
            </fieldset>
        </div>
        <br>
        <div class="row">
                <div class="col-6 d-grid">
                   <button class="btn btn-primary text-white" type = "button" onclick="prev1();">Atras</button> 
                </div>
                <div class="col-6 d-grid">
                    <button class="btn btn-primary text-white" type = "button" onclick="next2();">Siguiente</button>  
                </div>
            </div>
        </div>
    
    <div class="card back" id="opc3">
	    <div class="card-body text-white">
            <fieldset>
                <legend>Procedencia: </legend>
                <label for="escuela_de_procedencias" class="form-label">Escuela de Procedencia:</label>
                <select name="escuela_de_procedencias" id="escuela_de_procedencias" class="form-select" onchange="mostrarOcultarCampoB()">
                    <option value="inicio" disabled selected hidden>--Selección--</option>
                    <option value="CET 1 Walter Cross Buchanan" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CET 1 Walter Cross Buchanan") ? "selected" : ""; ?>>CET 1 "Walter Cross Buchanan"</option>
                    <option value="CECyT 1 Gonzalo Vázquez Vela" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 1 Gonzalo Vázquez Vela") ? "selected" : ""; ?>>CECyT 1 "Gonzalo Vázquez Vela"</option>
                    <option value="CECyT 2 Miguel Bernard" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 2 Miguel Bernard") ? "selected" : ""; ?>>CECyT 2 "Miguel Bernard"</option>
                    <option value="CECyT 3 Estanislao Ramírez Ruiz" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 3 Estanislao Ramírez Ruiz") ? "selected" : ""; ?>>CECyT 3 "Estanislao Ramírez Ruiz"</option>
                    <option value="CECyT 4 Lázaro Cárdenas" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 4 Lázaro Cárdenas") ? "selected" : ""; ?>>CECyT 4 "Lázaro Cárdenas"</option>
                    <option value="CECyT 5 Benito Juárez" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 5 Benito Juárez") ? "selected" : ""; ?>>CECyT 5 "Benito Juárez"</option>
                    <option value="CECyT 6 Miguel Othón de Mendizábal" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 6 Miguel Othón de Mendizábal") ? "selected" : ""; ?>>CECyT 6 "Miguel Othón de Mendizábal"</option>
                    <option value="CECyT 7 Cuauhtémoc" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 7 Cuauhtémoc") ? "selected" : ""; ?>>CECyT 7 "Cuauhtémoc"</option>
                    <option value="CECyT 8 Narciso Bassols" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 8 Narciso Bassols") ? "selected" : ""; ?>>CECyT 8 "Narciso Bassols"</option>
                    <option value="CECyT 9 Juan de Dios Bátiz" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 9 Juan de Dios Bátiz") ? "selected" : ""; ?>>CECyT 9 "Juan de Dios Bátiz"</option>
                    <option value="CECyT 10 Carlos Vallejo Márquez" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 10 Carlos Vallejo Márquez") ? "selected" : ""; ?>>CECyT 10 "Carlos Vallejo Márquez"</option>
                    <option value="CECyT 11 Wilfrido Massieu" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 11 Wilfrido Massieu") ? "selected" : ""; ?>>CECyT 11 "Wilfrido Massieu"</option>
                    <option value="CECyT 12 José María Morelos" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 12 José María Morelos") ? "selected" : ""; ?>>CECyT 12 "José María Morelos"</option>
                    <option value="CECyT 13 Ricardo Flores Magón" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 13 Ricardo Flores Magón") ? "selected" : ""; ?>>CECyT 13 "Ricardo Flores Magón"</option>
                    <option value="CECyT 14 Luis Enrique Erro Soler" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 14 Luis Enrique Erro Soler") ? "selected" : ""; ?>>CECyT 14 "Luis Enrique Erro Soler"</option>
                    <option value="CECyT 15 Diodoro Antúnez Echegaray" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 15 Diodoro Antúnez Echegaray") ? "selected" : ""; ?>>CECyT 15 "Diodoro Antúnez Echegaray"</option>
                    <option value="CECyT 16 Hidalgo" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 16 Hidalgo") ? "selected" : ""; ?>>CECyT 16 "Hidalgo"</option>
                    <option value="CECyT 17 León Guanajuato" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 17 León Guanajuato") ? "selected" : ""; ?>>CECyT 17 "León Guanajuato"</option>
                    <option value="CECyT 18 Zacatecas" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 18 Zacatecas") ? "selected" : ""; ?>>CECyT 18 "Zacatecas"</option>
                    <option value="CECyT 19 Leona Vicario" <?php echo ($_SESSION['escuelaDeProcedencia'] == "CECyT 19 Leona Vicario") ? "selected" : ""; ?>>CECyT 19 "Leona Vicario"</option>
                    <option value="otro" <?php echo ($_SESSION['escuelaDeProcedencia'] == "otro") ? "selected" : ""; ?>>Otro</option>
                </select><br>

                <input type="text" class = "form-control" id="otraEscuela" name="otraEscuela" placeholder="Especifique otra escuela de procedencia"
                value="<?php echo isset($_SESSION['otraEscuela']) ? htmlspecialchars($_SESSION['otraEscuela']) : ''; ?>">

                <br>
                <br>
                <label for="Estado" class="form-label">Entidad Federativa de Procedencia:</label>
                <select name="Estado" id="Estado" class="form-select" required>
                    <option value="inicio" disabled selected hidden>--Selección--</option>
                    <option value="Aguascalientes" <?php echo ($_SESSION['estado'] == "Aguascalientes") ? "selected" : ""; ?>>Aguascalientes</option>
                    <option value="Baja California" <?php echo ($_SESSION['estado'] == "Baja California") ? "selected" : ""; ?>>Baja California</option>
                    <option value="Baja California Sur" <?php echo ($_SESSION['estado'] == "Baja California Sur") ? "selected" : ""; ?>>Baja California Sur</option>
                    <option value="Campeche" <?php echo ($_SESSION['estado'] == "Campeche") ? "selected" : ""; ?>>Campeche</option>
                    <option value="Chiapas" <?php echo ($_SESSION['estado'] == "Chiapas") ? "selected" : ""; ?>>Chiapas</option>
                    <option value="Chihuahua" <?php echo ($_SESSION['estado'] == "Chihuahua") ? "selected" : ""; ?>>Chihuahua</option>
                    <option value="CDMX" <?php echo ($_SESSION['estado'] == "CDMX") ? "selected" : ""; ?>>CDMX</option>
                    <option value="Coahuila" <?php echo ($_SESSION['estado'] == "Coahuila") ? "selected" : ""; ?>>Coahuila</option>
                    <option value="Colima" <?php echo ($_SESSION['estado'] == "Colima") ? "selected" : ""; ?>>Colima</option>
                    <option value="Durango" <?php echo ($_SESSION['estado'] == "Durango") ? "selected" : ""; ?>>Durango</option>
                    <option value="Estado de Mexico" <?php echo ($_SESSION['estado'] == "Estado de Mexico") ? "selected" : ""; ?>>Estado de México</option>
                    <option value="Guanajuato" <?php echo ($_SESSION['estado'] == "Guanajuato") ? "selected" : ""; ?>>Guanajuato</option>
                    <option value="Guerrero" <?php echo ($_SESSION['estado'] == "Guerrero") ? "selected" : ""; ?>>Guerrero</option>
                    <option value="Hidalgo" <?php echo ($_SESSION['estado'] == "Hidalgo") ? "selected" : ""; ?>>Hidalgo</option>
                    <option value="Jalisco" <?php echo ($_SESSION['estado'] == "Jalisco") ? "selected" : ""; ?>>Jalisco</option>
                    <option value="Michoacan" <?php echo ($_SESSION['estado'] == "Michoacan") ? "selected" : ""; ?>>Michoacán</option>
                    <option value="Morelos" <?php echo ($_SESSION['estado'] == "Morelos") ? "selected" : ""; ?>>Morelos</option>
                    <option value="Nayarit" <?php echo ($_SESSION['estado'] == "Nayarit") ? "selected" : ""; ?>>Nayarit</option>
                    <option value="Nuevo Leon" <?php echo ($_SESSION['estado'] == "Nuevo Leon") ? "selected" : ""; ?>>Nuevo León</option>
                    <option value="Oaxaca" <?php echo ($_SESSION['estado'] == "Oaxaca") ? "selected" : ""; ?>>Oaxaca</option>
                    <option value="Puebla" <?php echo ($_SESSION['estado'] == "Puebla") ? "selected" : ""; ?>>Puebla</option>
                    <option value="Queretaro" <?php echo ($_SESSION['estado'] == "Queretaro") ? "selected" : ""; ?>>Querétaro</option>
                    <option value="Quintana Roo" <?php echo ($_SESSION['estado'] == "Quintana Roo") ? "selected" : ""; ?>>Quintana Roo</option>
                    <option value="San Luis Potosi" <?php echo ($_SESSION['estado'] == "San Luis Potosi") ? "selected" : ""; ?>>San Luis Potosí</option>
                    <option value="Sinaloa" <?php echo ($_SESSION['estado'] == "Sinaloa") ? "selected" : ""; ?>>Sinaloa</option>
                    <option value="Sonora" <?php echo ($_SESSION['estado'] == "Sonora") ? "selected" : ""; ?>>Sonora</option>
                    <option value="Tabasco" <?php echo ($_SESSION['estado'] == "Tabasco") ? "selected" : ""; ?>>Tabasco</option>
                    <option value="Tamaulipas" <?php echo ($_SESSION['estado'] == "Tamaulipas") ? "selected" : ""; ?>>Tamaulipas</option>
                    <option value="Tlaxcala" <?php echo ($_SESSION['estado'] == "Tlaxcala") ? "selected" : ""; ?>>Tlaxcala</option>
                    <option value="Veracruz" <?php echo ($_SESSION['estado'] == "Veracruz") ? "selected" : ""; ?>>Veracruz</option>
                    <option value="Yucatan" <?php echo ($_SESSION['estado'] == "Yucatan") ? "selected" : ""; ?>>Yucatán</option>
                    <option value="Zacatecas" <?php echo ($_SESSION['estado'] == "Zacatecas") ? "selected" : ""; ?>>Zacatecas</option>
                </select><br>

                <label for="Promedio" class="form-label">Promedio:</label>
                    <input type="text" class="form-control" name="Promedio" id="Promedio" min="6.0" max="10" step="0.01" onchange="validarPromedio(this)" maxlength="5" value="<?php echo isset($_SESSION['Promedio']) ? htmlspecialchars($_SESSION['Promedio']) : ''; ?>"><br>
                
                <label for="Opcion" class="form-label">ESCOM fue tu:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="Opcion" id="Opcion1" value="Opción 1"
                    <?php echo (isset($_SESSION['Opcion']) && $_SESSION['Opcion'] == 'Opción 1') ? 'checked' : ''; ?>>Opción 1<br>

                    <input type="radio" class="form-check-input" name="Opcion" id="Opcion2" value="Opción 2"
                    <?php echo (isset($_SESSION['Opcion']) && $_SESSION['Opcion'] == 'Opción 2') ? 'checked' : ''; ?>>Opción 2<br>

                    <input type="radio" class="form-check-input" name="Opcion" id="Opcion3" value="Opción 3"
                    <?php echo (isset($_SESSION['Opcion']) && $_SESSION['Opcion'] == 'Opción 3') ? 'checked' : ''; ?>>Opción 3<br>

                    <input type="radio" class="form-check-input" name="Opcion" id="Opcion4" value="Opción 4"
                    <?php echo (isset($_SESSION['Opcion']) && $_SESSION['Opcion'] == 'Opción 4') ? 'checked' : ''; ?>>Opción 4
                </div>
                <br>
            </fieldset>
        </div>
        <div class="row">
                <div class="col-4 d-grid">
                   <button class="btn btn-primary text-white" type = "button" onclick="prev2();">Atras</button>
                </div>
                <div class="col-4 d-grid">
                    <button class = "btn bg-primary text-white" type="submit" onclick="blancos();">Registrar</button>  
                </div>
                <div class="col-4 d-grid">
                    <button class = "btn bg-primary text-white limpiar" type="reset">Limpiar</button>  
                </div>
            </div>
        </div>

	</div>
    <br>
    </form>
    </div>
    <script>
$(document).ready(function(){
    $(".limpiar").click(function(){
        $.ajax({
            url: 'Form/limpiarSesion.php',
            type: 'post',
            success: function(response){
                alert(response);
                window.location.href = "Registro.php"; // Forzar recarga de la página
            }
        });
    });
});
    </script>
</body>
</html>
