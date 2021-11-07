<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="12345678";

    $bd="proyecto";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>