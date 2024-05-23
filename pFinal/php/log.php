<?php

require "conexion.php";

session_start();

$mail = $_POST["correo"];
$pass = $_POST["contra"];

$query = "SELECT COUNT(*) as contar FROM admin WHERE Email == '$mail' AND contraseña = '$pass' ";
$consulta = mysqli_query($conexion , $query);

$arr = mysqli_fetch_array($consulta);

if ($arr['contar'] > 0) {
    $_SESSION['mail'] = $mail;
    header("location: bienvenido.php");
} else {
    header("location:");
}