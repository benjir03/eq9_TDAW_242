<?php
    require "../php/conect.php";

    $boleta = $_GET['boleta'];
    $sql = "DELETE from alum WHERE boleta='$boleta'";
    $query = mysqli_query($conn,$sql);

    if($query){
        header("location: log_home.php");
    };
?>