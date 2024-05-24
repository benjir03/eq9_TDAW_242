<?php
	session_start();
	$noTrab = $_REQUEST['noTrab'];
	unset($_SESSION[$noTrab]);
	unset($noTrab);
	session_destroy();
	header("location:../login.php");
?>
