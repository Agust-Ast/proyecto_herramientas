<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$nacimiento=$_POST['nacimiento'];
$edad=$_POST['edad'];


$sql="INSERT INTO formulario VALUES('$nombre','$apellidos','$usuario','$contraseña','$direccion','$sexo','$nacimiento','$edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
    
}else {
}
?>