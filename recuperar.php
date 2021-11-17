<?php 
    include("conexion.php");
    $con=conectar();

$rut=$_GET['id'];

$sql="SELECT * FROM formulario WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<br>
<br>
<body>
    <br>


   

<div class="container border-primary shadow p-3 mb-5 bg-body rounded">
    <div class="row">
        <div class="col">
            
    <form action="" method="get">
    <div class="mb-3">
                    <input type="text" class="form-control" id="nombre" name="busqueda" placeholder="INGRESE RUT PARA BUSCAR">
                  </div>
        <br>
        <input class="btn btn-warning" type="submit" name="enviar" value="Recuperar">

        <br>
        <br>
    </form> 
      
        </div>
    </div>
        <?php


if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo "Su contraseña es: ";
        echo $row['contraseña'];
    }
}
?>
</div>
    



</body>
</html>