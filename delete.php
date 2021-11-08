<?php

include("conexion.php");
$con=conectar();

$rut=$_GET['id'];


$sql="DELETE FROM formulario  WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro.php");
    }
?>
