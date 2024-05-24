<?php
include("../conexion/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
    <script type="text/javascript" src="../js/validaciones.js"></script>
    <title>Editar Alumnos</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar'])){
        $boleta = $_POST['boleta'];
        $nombre = $_POST['nombre'];
        $apellidoP = $_POST['apellidoP'];
        $apellidoM = $_POST['apellidoM'];
        $fecha = $_POST['fecha'];
        $genero = $_POST['genero'];
        $curp = $_POST['curp'];
        $discapacidad = $_POST['discapacidad'];
        $otraDiscapacidad = $_POST['otraDiscapacidad'];
        $calle = $_POST['calle'];
        $col = $_POST['col'];
        $delegacion = $_POST['delegacion'];
        $otroMunicipio = $_POST['otroMunicipio'];
        $cp = $_POST['cp'];
        $tel = $_POST['tel'];
        $email = $_POST['inputEmail3'];
        $escuelaDeProcedencia = $_POST['escuela_de_procedencias'];
        $otraEscuela = $_POST['otraEscuela'];
        $estado = $_POST['Estado'];
        $promedio = $_POST['Promedio'];

        $sql = "update estudiantes set 
        curp = '".$curp."',
        boleta = '".$boleta."',
        nombre = '".$nombre."',
        apellidoP = '".$apellidoP."',
        apellidoM = '".$apellidoM."',
        fecha = '".$fecha."',
        genero = '".$genero."',
        discapacidad = '".$discapacidad."',
        otraDiscapacidad = '".$otraDiscapacidad."',
        calle = '".$calle."',
        col = '".$col."',
        otroMunicipio = '".$otroMunicipio."',
        delegacion = '".$delegacion."',
        cp = '".$cp."',
        tel = '".$tel."',
        email = '".$email."',
        escuelaDeProcedencia = '".$escuelaDeProcedencia."',
        otraEscuela = '".$otraEscuela."',
        estado = '".$estado."',
        promedio = '".$promedio."' where curp = '".$curp."' ";

        $resultado = mysqli_query($conexion, $sql);

		if ($resultado) {
		    echo "<script language='JavaScript'>
		            alert('Los datos se actualizaron correctamente');
		            location.assign('CRUD.php');
		          </script>";
		} else {
		    echo "<script language='JavaScript'>
		            alert('Los datos NO se actualizaron correctamente');
		            location.assign('CRUD.php');
		          </script>";
		}

        mysqli_close($conexion);

    } else {
        $boleta = $_GET['boleta'];
        $sql = "SELECT * FROM estudiantes WHERE boleta = '".$boleta."'";
        $resultado = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila['nombre'];
        $apellidoP = $fila['apellidoP'];
        $apellidoM = $fila['apellidoM'];
        $fecha = $fila['fecha'];
        $genero = $fila['genero'];
        $curp = $fila['curp'];
        $discapacidad = $fila['discapacidad'];
        $otraDiscapacidad = $fila['otraDiscapacidad'];
        $calle = $fila['calle'];
        $col = $fila['col'];
        $delegacion = $fila['delegacion'];
        $otroMunicipio = $fila['otroMunicipio'];
        $cp = $fila['cp'];
        $tel = $fila['tel'];
        $email = $fila['email'];
        $escuelaDeProcedencia = $fila['escuelaDeProcedencia'];
        $otraEscuela = $fila['otraEscuela'];
        $estado = $fila['estado'];
        $promedio = $fila['promedio'];

        mysqli_close($conexion);
    ?>
    <div class="container">
    	<img class="img-fluid" src="../img/update.jpg">
    </div>
    <div class="container">
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" onchange="mostrarOcultarCampoA()">
            <fieldset>
            	<legend>Identidad</legend>
	            <label for="boleta" class="form-label">Número de Boleta</label>
	            <input type="text" class="form-control" name="boleta" id="boleta" maxlength="10" value="<?php echo $boleta; ?>"><br>

	            <label for="nombre" class="form-label">Nombre</label>
	            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" value="<?php echo $nombre; ?>"><br>

	            <label for="apellidoP" class="form-label">Apellido Paterno</label>
	            <input type="text" class="form-control" name="apellidoP" id="apellidoP" maxlength="50" value="<?php echo $apellidoP; ?>"><br>

	            <label for="apellidoM" class="form-label">Apellido Materno</label>
	            <input type="text" class="form-control" name="apellidoM" id="apellidoM" maxlength="50" value="<?php echo $apellidoM; ?>"><br>

	            <label for="fecha" class="form-label">Fecha de Nacimiento</label>
	            <input type="date" class="form-control" name="fecha" id="fecha" min="1950-01-01" max="2005-12-31" value="<?php echo $fecha; ?>"><br>

	            <label for="genero" class="form-label">Género:</label><br>
				<div class="form-check">
				    <input type="radio" class="form-check-input" name="genero" id="genero1" value="Femenino" <?php echo ($genero === 'Femenino') ? 'checked' : ''; ?>>Femenino<br>
				    <input type="radio" class="form-check-input" name="genero" id="genero2" value="Masculino" <?php echo ($genero === 'Masculino') ? 'checked' : ''; ?>>Masculino<br>
				    <input type="radio" class="form-check-input" name="genero" id="genero3" value="Otro" <?php echo ($genero === 'Otro') ? 'checked' : ''; ?>>Otro<br><br>
				</div>


	            <label for="curp" class="form-label">CURP</label>
	            <input type="text" class="form-control" name="curp" id="curp" maxlength="18" value="<?php echo $curp; ?>"><br>

	            <label for="tipoDiscapacidad" class="form-label">Seleccione el Tipo de Discapacidad:</label>
				<input type="text" class="form-control" name="discapacidad" value="<?php echo $discapacidad;?>">
				<br>

				<input type="text" class="form-control" id="otraDiscapacidad" name="otraDiscapacidad" placeholder="Especifique otra discapacidad" value="<?php echo $otraDiscapacidad;?>"><br><br>
				<label class="form-label">En Caso de no Tener Alguna Discapacidad no Seleccione Ninguna</label><br>

            </fieldset><br>
            <fieldset>
            	<legend>Contacto</legend>
                <label for="calle" class = "form-label">Calle y Número</label>
                <input type="text" class = "form-control" id="calle" name="calle" value="<?php echo $calle;?>"><br>

                <label for="col" class = "form-label">Colonia</label>
                <input type="text" class = "form-control" id="col" name="col" value="<?php echo $col;?>"><br>

                <label for="alc">Alcaldía / Municipio</label><br>
				<select name="delegacion" id="delegacion" class="form-select" aria-label="Default select example" onchange="mostrarOcultarCampoC()">
				    <option value="inicio" disabled <?php echo ($delegacion == 'inicio') ? 'selected' : ''; ?> hidden>--Selección--</option>
				    <option value="Álvaro Obregón" <?php echo ($delegacion == 'Álvaro Obregón') ? 'selected' : ''; ?>>Álvaro Obregón</option>
				    <option value="Azcapotzalco" <?php echo ($delegacion == 'Azcapotzalco') ? 'selected' : ''; ?>>Azcapotzalco</option>
				    <option value="Benito Juárez" <?php echo ($delegacion == 'Benito Juárez') ? 'selected' : ''; ?>>Benito Juárez</option>
				    <option value="Coyoacán" <?php echo ($delegacion == 'Coyoacán') ? 'selected' : ''; ?>>Coyoacán</option>
				    <option value="Cuajimalpa" <?php echo ($delegacion == 'Cuajimalpa') ? 'selected' : ''; ?>>Cuajimalpa</option>
				    <option value="Cuauhtémoc" <?php echo ($delegacion == 'Cuauhtémoc') ? 'selected' : ''; ?>>Cuauhtémoc</option>
				    <option value="Gustavo A. Madero" <?php echo ($delegacion == 'Gustavo A. Madero') ? 'selected' : ''; ?>>Gustavo A. Madero</option>
				    <option value="Iztacalco" <?php echo ($delegacion == 'Iztacalco') ? 'selected' : ''; ?>>Iztacalco</option>
				    <option value="Iztapalapa" <?php echo ($delegacion == 'Iztapalapa') ? 'selected' : ''; ?>>Iztapalapa</option>
				    <option value="Magdalena Contreras" <?php echo ($delegacion == 'Magdalena Contreras') ? 'selected' : ''; ?>>Magdalena Contreras</option>
				    <option value="Miguel Hidalgo" <?php echo ($delegacion == 'Miguel Hidalgo') ? 'selected' : ''; ?>>Miguel Hidalgo</option>
				    <option value="Milpa Alta" <?php echo ($delegacion == 'Milpa Alta') ? 'selected' : ''; ?>>Milpa Alta</option>
				    <option value="Tláhuac" <?php echo ($delegacion == 'Tláhuac') ? 'selected' : ''; ?>>Tláhuac</option>
				    <option value="Tlalpan" <?php echo ($delegacion == 'Tlalpan') ? 'selected' : ''; ?>>Tlalpan</option>
				    <option value="Venustiano Carranza" <?php echo ($delegacion == 'Venustiano Carranza') ? 'selected' : ''; ?>>Venustiano Carranza</option>
				    <option value="Xochimilco" <?php echo ($delegacion == 'Xochimilco') ? 'selected' : ''; ?>>Xochimilco</option>
				    <option value="Otro" <?php echo ($delegacion == 'Otro') ? 'selected' : ''; ?>>Otro Municipio</option>
				</select><br>
				<input type="text" class = "form-control" id="otroMunicipio" name="otroMunicipio" placeholder="Especifique el municipio de procedencia" value="<?php echo $otroMunicipio;?>"><br>

				<label for="cp" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="cp" name="cp" maxlength="5" value="<?php echo $cp; ?>"><br>

                <label for="tel" class="form-label">Teléfono o Celular</label>
                <input type="tel" class="form-control" id="tel" name="tel" value="<?php echo $tel; ?>"><br>

                <label for="inputEmail3" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail3" name = "inputEmail3" value="<?php echo $email;?>"><br>
            </fieldset><br>
            <fieldset>
            	<legend>Procedencia: </legend>
                    <label for="escuela_de_procedencias" class="form-label">Escuela de Procedencia:</label>
					<select name="escuela_de_procedencias" id="escuela_de_procedencias" class="form-select" onchange="mostrarOcultarCampoB()">
					    <option value="inicio" disabled <?php echo ($escuelaDeProcedencia == 'inicio') ? 'selected' : ''; ?> hidden>--Selección--</option>
					    <option value="CET 1 Walter Cross Buchanan" <?php echo ($escuelaDeProcedencia == 'CET 1 Walter Cross Buchanan') ? 'selected' : ''; ?>>CET 1 "Walter Cross Buchanan"</option>
					    <option value="CECyT 1 Gonzalo Vázquez Vela" <?php echo ($escuelaDeProcedencia == 'CECyT 1 Gonzalo Vázquez Vela') ? 'selected' : ''; ?>>CECyT 1 "Gonzalo Vázquez Vela"</option>
					    <option value="CECyT 2 Miguel Bernard" <?php echo ($escuelaDeProcedencia == 'CECyT 2 Miguel Bernard') ? 'selected' : ''; ?>>CECyT 2 "Miguel Bernard"</option>
					    <option value="CECyT 3 Estanislao Ramírez Ruiz" <?php echo ($escuelaDeProcedencia == 'CECyT 3 Estanislao Ramírez Ruiz') ? 'selected' : ''; ?>>CECyT 3 "Estanislao Ramírez Ruiz"</option>
					    <option value="CECyT 4 Lázaro Cárdenas" <?php echo ($escuelaDeProcedencia == 'CECyT 4 Lázaro Cárdenas') ? 'selected' : ''; ?>>CECyT 4 "Lázaro Cárdenas"</option>
					    <option value="CECyT 5 Benito Juárez" <?php echo ($escuelaDeProcedencia == 'CECyT 5 Benito Juárez') ? 'selected' : ''; ?>>CECyT 5 "Benito Juárez"</option>
					    <option value="CECyT 6 Miguel Othón de Mendizábal" <?php echo ($escuelaDeProcedencia == 'CECyT 6 Miguel Othón de Mendizábal') ? 'selected' : ''; ?>>CECyT 6 "Miguel Othón de Mendizábal"</option>
					    <option value="CECyT 7 Cuauhtémoc" <?php echo ($escuelaDeProcedencia == 'CECyT 7 Cuauhtémoc') ? 'selected' : ''; ?>>CECyT 7 "Cuauhtémoc"</option>
					    <option value="CECyT 8 Narciso Bassols" <?php echo ($escuelaDeProcedencia == 'CECyT 8 Narciso Bassols') ? 'selected' : ''; ?>>CECyT 8 "Narciso Bassols"</option>
					    <option value="CECyT 9 Juan de Dios Bátiz" <?php echo ($escuelaDeProcedencia == 'CECyT 9 Juan de Dios Bátiz') ? 'selected' : ''; ?>>CECyT 9 "Juan de Dios Bátiz"</option>
					    <option value="CECyT 10 Carlos Vallejo Márquez" <?php echo ($escuelaDeProcedencia == 'CECyT 10 Carlos Vallejo Márquez') ? 'selected' : ''; ?>>CECyT 10 "Carlos Vallejo Márquez"</option>
					    <option value="CECyT 11 Wilfrido Massieu" <?php echo ($escuelaDeProcedencia == 'CECyT 11 Wilfrido Massieu') ? 'selected' : ''; ?>>CECyT 11 "Wilfrido Massieu"</option>
					    <option value="CECyT 12 José María Morelos" <?php echo ($escuelaDeProcedencia == 'CECyT 12 José María Morelos') ? 'selected' : ''; ?>>CECyT 12 "José María Morelos"</option>
					    <option value="CECyT 13 Ricardo Flores Magón" <?php echo ($escuelaDeProcedencia == 'CECyT 13 Ricardo Flores Magón') ? 'selected' : ''; ?>>CECyT 13 "Ricardo Flores Magón"</option>
					    <option value="CECyT 14 Luis Enrique Erro Soler" <?php echo ($escuelaDeProcedencia == 'CECyT 14 Luis Enrique Erro Soler') ? 'selected' : ''; ?>>CECyT 14 "Luis Enrique Erro Soler"</option>
					    <option value="CECyT 15 Diodoro Antúnez Echegaray" <?php echo ($escuelaDeProcedencia == 'CECyT 15 Diodoro Antúnez Echegaray') ? 'selected' : ''; ?>>CECyT 15 "Diodoro Antúnez Echegaray"</option>
					    <option value="CECyT 16 Hidalgo" <?php echo ($escuelaDeProcedencia == 'CECyT 16 Hidalgo') ? 'selected' : ''; ?>>CECyT 16 "Hidalgo"</option>
					    <option value="CECyT 17 León Guanajuato" <?php echo ($escuelaDeProcedencia == 'CECyT 17 León Guanajuato') ? 'selected' : ''; ?>>CECyT 17 "León Guanajuato"</option>
					    <option value="CECyT 18 Zacatecas" <?php echo ($escuelaDeProcedencia == 'CECyT 18 Zacatecas') ? 'selected' : ''; ?>>CECyT 18 "Zacatecas"</option>
					    <option value="CECyT 19 Leona Vicario" <?php echo ($escuelaDeProcedencia == 'CECyT 19 Leona Vicario') ? 'selected' : ''; ?>>CECyT 19 "Leona Vicario"</option>
					    <option value="otro" <?php echo ($escuelaDeProcedencia == 'otro') ? 'selected' : ''; ?>>Otro</option>
					</select>

                    <br>

                    <input type="text" class = "form-control" id="otraEscuela" name="otraEscuela" placeholder="Especifique otra escuela de procedencia" value="<?php echo $otraEscuela; ?>">

                    <br>
                    <br>
                <label for="Estado" class="form-label">Entidad Federativa de Procedencia:</label>
				<select name="Estado" id="Estado" class="form-select">
				    <option value="inicio" disabled <?php echo ($estado == 'inicio') ? 'selected' : ''; ?> hidden>--Selección--</option>
				    <option value="Aguascalientes" <?php echo ($estado == 'Aguascalientes') ? 'selected' : ''; ?>>Aguascalientes</option>
				    <option value="Baja California" <?php echo ($estado == 'Baja California') ? 'selected' : ''; ?>>Baja California</option>
				    <option value="Baja California Sur" <?php echo ($estado == 'Baja California Sur') ? 'selected' : ''; ?>>Baja California Sur</option>
				    <option value="Campeche" <?php echo ($estado == 'Campeche') ? 'selected' : ''; ?>>Campeche</option>
				    <option value="Chiapas" <?php echo ($estado == 'Chiapas') ? 'selected' : ''; ?>>Chiapas</option>
				    <option value="Chihuahua" <?php echo ($estado == 'Chihuahua') ? 'selected' : ''; ?>>Chihuahua</option>
				    <option value="CDMX" <?php echo ($estado == 'CDMX') ? 'selected' : ''; ?>>CDMX</option>
				    <option value="Coahuila" <?php echo ($estado == 'Coahuila') ? 'selected' : ''; ?>>Coahuila</option>
				    <option value="Colima" <?php echo ($estado == 'Colima') ? 'selected' : ''; ?>>Colima</option>
				    <option value="Durango" <?php echo ($estado == 'Durango') ? 'selected' : ''; ?>>Durango</option>
				    <option value="Estado de Mexico" <?php echo ($estado == 'Estado de Mexico') ? 'selected' : ''; ?>>Estado de México</option>
				    <option value="Guanajuato" <?php echo ($estado == 'Guanajuato') ? 'selected' : ''; ?>>Guanajuato</option>
				    <option value="Guerrero" <?php echo ($estado == 'Guerrero') ? 'selected' : ''; ?>>Guerrero</option>
				    <option value="Hidalgo" <?php echo ($estado == 'Hidalgo') ? 'selected' : ''; ?>>Hidalgo</option>
				    <option value="Jalisco" <?php echo ($estado == 'Jalisco') ? 'selected' : ''; ?>>Jalisco</option>
				    <option value="Michoacan" <?php echo ($estado == 'Michoacan') ? 'selected' : ''; ?>>Michoacán</option>
				    <option value="Morelos" <?php echo ($estado == 'Morelos') ? 'selected' : ''; ?>>Morelos</option>
				    <option value="Nayarit" <?php echo ($estado == 'Nayarit') ? 'selected' : ''; ?>>Nayarit</option>
				    <option value="Nuevo Leon" <?php echo ($estado == 'Nuevo Leon') ? 'selected' : ''; ?>>Nuevo León</option>
				    <option value="Oaxaca" <?php echo ($estado == 'Oaxaca') ? 'selected' : ''; ?>>Oaxaca</option>
				    <option value="Puebla" <?php echo ($estado == 'Puebla') ? 'selected' : ''; ?>>Puebla</option>
				    <option value="Queretaro" <?php echo ($estado == 'Queretaro') ? 'selected' : ''; ?>>Querétaro</option>
				    <option value="Quintana Roo" <?php echo ($estado == 'Quintana Roo') ? 'selected' : ''; ?>>Quintana Roo</option>
				    <option value="San Luis Potosi" <?php echo ($estado == 'San Luis Potosi') ? 'selected' : ''; ?>>San Luis Potosí</option>
				    <option value="Sinaloa" <?php echo ($estado == 'Sinaloa') ? 'selected' : ''; ?>>Sinaloa</option>
				    <option value="Sonora" <?php echo ($estado == 'Sonora') ? 'selected' : ''; ?>>Sonora</option>
				    <option value="Tabasco" <?php echo ($estado == 'Tabasco') ? 'selected' : ''; ?>>Tabasco</option>
				    <option value="Tamaulipas" <?php echo ($estado == 'Tamaulipas') ? 'selected' : ''; ?>>Tamaulipas</option>
				    <option value="Tlaxcala" <?php echo ($estado == 'Tlaxcala') ? 'selected' : ''; ?>>Tlaxcala</option>
				    <option value="Veracruz" <?php echo ($estado == 'Veracruz') ? 'selected' : ''; ?>>Veracruz</option>
				    <option value="Yucatan" <?php echo ($estado == 'Yucatan') ? 'selected' : ''; ?>>Yucatán</option>
				    <option value="Zacatecas" <?php echo ($estado == 'Zacatecas') ? 'selected' : ''; ?>>Zacatecas</option>
				</select><br>

                <label for="Promedio" class="form-label">Promedio:</label>
                <input type="text" class="form-control" name="Promedio" id="Promedio" min="6.0" max="10" step="0.01" maxlength="5" value="<?php echo $promedio; ?>"><br>
 
                <br>
            </fieldset>
            <input type="submit" name="enviar" class="btn btn-success" value="Actualizar">
	        <a href="CRUD.php" class="btn btn-danger">Regresar</a>
        </form>
    </div>
    <?php
    }
    ?>
</body>
</html>
