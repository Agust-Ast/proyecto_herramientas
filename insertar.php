<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$rut=$_POST['rut'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$nacimiento=$_POST['nacimiento'];
$edad=$_POST['edad'];
$email=$_POST['email'];


$sql="INSERT INTO formulario VALUES('$nombre','$apellidos','$rut','$usuario','$contraseña','$direccion','$sexo','$nacimiento','$edad','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
    
}else {
}
?>