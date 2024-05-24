<?php 
	$boleta = $_GET['boleta'];
	include('../conexion/conexion.php');
	$sql = "DELETE FROM estudiantes where boleta = '".$boleta."'";
	$resultado = mysqli_query($conexion, $sql);

	if($resultado){
	    mysqli_commit($conexion);
	    echo "<script language = 'JavaScript'>
	        alert('Los datos se eliminaron correctamente de la BD');
	        location.assign('CRUD.php');
	    </script>";
	} else {
	    echo "<script language = 'JavaScript'>
	        alert('Error al eliminar los datos: " . mysqli_error($conexion) . "');
	        location.assign('CRUD.php');
	    </script>";
	}


?>
