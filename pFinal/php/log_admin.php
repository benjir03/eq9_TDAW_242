<?php
require "conect.php";

session_start();

$mail = $_POST['correo'];
$pass = $_POST['contra'];

$q = "SELECT COUNT(*) as contar FROM admin WHERE email = '$mail' AND pass = '$pass'";
$consulta = mysqli_query($conexion , $q);

$arr = mysqli_fetch_array($consulta);

if($arr['contar'] > 0) {
    $_SESSION['mail'] = $mail;
    $q2 = "SELECT username FROM admin WHERE email = '$mail' AND pass = '$pass'";
    $consulta2 = mysqli_query($conexion , $q2);
    $arr2 = mysqli_fetch_array($consulta2);
    $_SESSION['username'] = $arr2['username'];
    header("location: bienvenido.php");
} else {
    header("INCORRECTOS");
}
?>