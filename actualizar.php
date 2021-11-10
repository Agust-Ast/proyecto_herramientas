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
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="rut" value="<?php echo $row['rut']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="rut" placeholder="RUT" value="<?php echo $row['rut']  ?>">
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuaio" value="<?php echo $row['usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" value="<?php echo $row['direccion']  ?>">
                                <input type="number" class="form-control mb-3" min="1" max="100" name="edad" placeholder="Edad" value="<?php echo $row['edad']   ?>">
                                <input type="email" class="form-control mb-3" aria-describedby="emailHelp" name="email" placeholder="E-mail" value="<?php echo $row['email']   ?>">
                                
                                
                                
                            <input type="submit" class="btn btn-warning btn-block" value="Actualizar/Modificar">
                    </form>
                    
                </div>
    </body>
</html>