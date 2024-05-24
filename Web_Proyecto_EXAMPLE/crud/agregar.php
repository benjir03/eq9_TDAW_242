<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/validaciones.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
    <script type="text/javascript" src="../js/paginas.js"></script>
    <script type="text/javascript" src="../js/validaciones.js"></script>
    <script type="text/javascript" src="../js/Recuperar.js"></script>
	<title>Agregar Nuevo Alumno</title>
</head>
<body>
	<div class="container">
        <br><h1 class="form-label">Agregar Nuevo Alumno</h1><br><br>
        <form name="agregar" method="post" action="add.php" onchange="mostrarOcultarCampoA()">
            <div class="">
                <div class="card-body">

                <fieldset>
                    <legend>Identidad</legend>

                    <label for="boleta" class="form-label">Número de Boleta</label>
                    <input type="text" class="form-control" name="boleta" id="boleta" maxlength="10"><br>

                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50"><br>

                    <label for="apellidoP" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoP" id="apellidoP" maxlength="50"><br>

                    <label for="apellidoM" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoM" id="apellidoM" maxlength="50"><br>

                    <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" min="1950-01-01" max="2005-12-31"><br>

                    <label for="genero" class="form-label">Género:</label><br>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="genero" id="genero1" value="Femenino">Femenino<br>
                        <input type="radio" class="form-check-input" name="genero" id="genero2" value="Masculino">Masculino<br>
                        <input type="radio" class="form-check-input" name="genero" id="genero3" value="Otro">Otro<br><br>
                    </div>
                    <label for="curp" class="form-label">CURP</label>
                    <input type="text" class="form-control" name="curp" id="curp" maxlength="18"><br>

                    <label for="tipoDiscapacidad" class="form-label">Seleccione el Tipo de Discapacidad:</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="discapacidad" id="OP1" value="Con Discapacidad Auditiva"/>Con Discapacidad Auditiva<br>
                        <input type="checkbox" class="form-check-input" name="discapacidad" id="OP2" value="Con Discapacidad Motriz Usuaria de Silla de Ruedas"/>Con Discapacidad Motriz Usuaria de Silla de Ruedas<br>
                        <input type="checkbox" class="form-check-input" name="discapacidad" id="OP3" value="Con Discapacidad Motriz Usuaria de Muletas"/>Con Discapacidad Motriz Usuaria de Muletas<br>
                        <input type="checkbox" class="form-check-input" name="discapacidad" id="OP4" value="Con Discapacidad Motriz Usuaria de Bastón"/>Con Discapacidad Motriz Usuaria de Bastón<br>
                        <input type="checkbox" class="form-check-input" name="discapacidad" id="OP5" value="Con Discapacidad Visual"/>Con Discapacidad Visual<br>
                        <input type="checkbox" class="form-check-input" name="discapacidad" id="otra" value="otra"/>Otra<br>
                    </div>
                    <br>
                    <input type="text" class="form-control" id="otraDiscapacidad" name="otraDiscapacidad" placeholder="Especifique otra discapacidad">
                    <label class="form-label">En Caso de no Tener Alguna Discapacidad no Seleccione Ninguna</label>
                    <br>
                </fieldset>
                <br>
            </div>
        </div> 
        <div class="">
           <div class="card-body">
            <fieldset>
                <legend>Contacto</legend>
                    <label for="calle" class = "form-label">Calle y Número</label>
                    <input type="text" class = "form-control" id="calle" name="calle"><br>

                    <label for="col" class = "form-label">Colonia</label>
                    <input type="text" class = "form-control" id="col" name="col"><br>

                    <label for="alc">Alcaldía / Municipio</label><br>
                    <select name="delegacion" id="delegacion" class="form-select" aria-label="Default select example" onchange="mostrarOcultarCampoC()">
                        <option value="inicio" disabled selected hidden>--Selección--</option>
                        <option value="Álvaro Obregón">Álvaro Obregón</option>
                        <option value="Azcapotzalco">Azcapotzalco</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Coyoacán">Coyoacán</option>
                        <option value="Cuajimalpa">Cuajimalpa</option>
                        <option value="Cuauhtémoc">Cuauhtémoc</option>
                        <option value="Gustavo A. Madero">Gustavo A. Madero</option>
                        <option value="Iztacalco">Iztacalco</option>
                        <option value="Iztapalapa">Iztapalapa</option>
                        <option value="Magdalena Contreras">Magdalena Contreras</option>
                        <option value="Miguel Hidalgo">Miguel Hidalgo</option>
                        <option value="Milpa Alta">Milpa Alta</option>
                        <option value="Tláhuac">Tláhuac</option>
                        <option value="Tlalpa">Tlalpan</option>
                        <option value="Venustiano Carranza">Venustiano Carranza</option>
                        <option value="Xochimilco">Xochimilco</option>
                        <option value="Otro">Otro Municipio</option>
                    </select><br>

                    <input type="text" class = "form-control" id="otroMunicipio" name="otroMunicipio" placeholder="Especifique el municipio de procedencia">
                    <br>
                    <br>

                    <label for="cp" class="form-label">Código Postal</label>
                    <input type="text" class="form-control" id="cp" name="cp" maxlength="5"><br>

                    <label for="tel" class="form-label">Teléfono o Celular</label>
                    <input type="tel" class="form-control" id="tel" name="tel"><br>

                    <label for="inputEmail3" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail3" name = "inputEmail3">
                </fieldset>
            </div>   
        </div>
        <div class="">
            <div class="card-body">
                <fieldset>
                    <legend>Procedencia: </legend>
                    <label for="escuela_de_procedencias" class="form-label">Escuela de Procedencia:</label>
                    <select name="escuela_de_procedencias" id="escuela_de_procedencias" class="form-select" onchange="mostrarOcultarCampoB()">
                        <option value="inicio" disabled selected hidden>--Selección--</option>
                        <option value="CET 1 Walter Cross Buchanan">CET 1 "Walter Cross Buchanan"</option>
                        <option value="CECyT 1 Gonzalo Vázquez Vela">CECyT 1 "Gonzalo Vázquez Vela"</option>
                        <option value="CECyT 2 Miguel Bernard">CECyT 2 "Miguel Bernard"</option>
                        <option value="CECyT 3 Estanislao Ramírez Ruiz">CECyT 3 "Estanislao Ramírez Ruiz"</option>
                        <option value="CECyT 4 Lázaro Cárdenas">CECyT 4 "Lázaro Cárdenas"</option>
                        <option value="CECyT 5 Benito Juárez">CECyT 5 "Benito Juárez"</option>
                        <option value="CECyT 6 Miguel Othón de Mendizábal">CECyT 6 "Miguel Othón de Mendizábal"</option>
                        <option value="CECyT 7 Cuauhtémoc">CECyT 7 "Cuauhtémoc"</option>
                        <option value="CECyT 8 Narciso Bassols">CECyT 8 "Narciso Bassols"</option>
                        <option value="CECyT 9 Juan de Dios Bátiz">CECyT 9 "Juan de Dios Bátiz"</option>
                        <option value="CECyT 10 Carlos Vallejo Márquez">CECyT 10 "Carlos Vallejo Márquez"</option>
                        <option value="CECyT 11 Wilfrido Massieu">CECyT 11 "Wilfrido Massieu"</option>
                        <option value="CECyT 12 José María Morelos">CECyT 12 "José María Morelos"</option>
                        <option value="CECyT 13 Ricardo Flores Magón">CECyT 13 "Ricardo Flores Magón"</option>
                        <option value="CECyT 14 Luis Enrique Erro Soler">CECyT 14 "Luis Enrique Erro Soler"</option>
                        <option value="CECyT 15 Diodoro Antúnez Echegaray">CECyT 15 "Diodoro Antúnez Echegaray"</option>
                        <option value="CECyT 16 Hidalgo">CECyT 16 "Hidalgo"</option>
                        <option value="CECyT 17 León Guanajuato">CECyT 17 "León Guanajuato"</option>
                        <option value="CECyT 18 Zacatecas">CECyT 18 "Zacatecas"</option>
                        <option value="CECyT 19 Leona Vicario">CECyT 19 "Leona Vicario"</option>
                        <option value="otro">Otro</option>
                    </select>
                    <br>

                    <input type="text" class = "form-control" id="otraEscuela" name="otraEscuela" placeholder="Especifique otra escuela de procedencia">

                    <br>
                    <br>
                    <label for="Estado" class="form-label">Entidad Federativa de Procedencia:</label>
                    <select name="Estado" id="Estado" class="form-select">
                        <option value="inicio" disabled selected hidden>--Selección--</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">CDMX</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de Mexico">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacan">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo Leon">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Queretaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosi">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatan">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select><br>

                    <label for="Promedio" class="form-label">Promedio:</label>
                        <input type="text" class="form-control" name="Promedio" id="Promedio" min="6.0" max="10" step="0.01" maxlength="5"><br>
                    <label for="Opcion" class="form-label">ESCOM fue tu:</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="Opcion" id="OP1" value = "Opción 1" onclick="Seleccion(this)" />Opción 1<br>
                        <input type="checkbox" class="form-check-input" name="Opcion" id="OP2" value = "Opción 2" onclick="Seleccion(this)" />Opción 2<br>
                        <input type="checkbox" class="form-check-input" name="Opcion" id="OP3" value = "Opción 3" onclick="Seleccion(this)" />Opción 3<br>
                        <input type="checkbox" class="form-check-input" name="Opcion" id="OP4" value = "Opción 4" onclick="Seleccion(this)" />Opción 4
                    </div>
                    <br>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-6 d-grid">
                <button class = "btn bg-primary text-white" type="submit" name = "enviar">Registrar</button>  
            </div>
            <div class="col-6 d-grid">
                <button class = "btn bg-primary text-white" type="reset">Limpiar</button>  
            </div>
        </div>
        <br><br>     
    </form>
</body>
</html>