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
<!--barra navegación-->
<div class="fixed-top"><nav class="navbar navbar-expand-lg navbar-light bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">&#128293</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="btn btn-outline-warning" aria-current="page" href="index.html">Home</a>
        <a class="btn btn-outline-warning" href="nosotros.html">Nosotros</a>
        <a class="btn btn-outline-warning" href="#">Contacto</a>
        <a class="btn btn-outline-warning" href="login.html">Login</a>
      </div>
    </div>
  </div>
</nav>
</div>
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
        <input class="btn btn-warning" type="submit" name="enviar" value="Leer/Buscar">
        <br>
        <br>
    </form> 
        <table class="table">
  <thead class="table-warning">
  <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">RUT</th>
      <th scope="col">Usuario</th>
      <th scope="col">Dirección</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha nacimiento</th>
      <th scope="col">Edad</th>
      <th scope="col">E-mail</th>
      <th></th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['nombre'];
    }
}
?></th>
      <td>    <?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['apellidos'];
    }
}
?></td>
      <td>    <?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['rut'];
    }
}
?></td>
      <td><?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['usuario'];
    }
}
?></td>
 <td><?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['direccion'];
    }
}
?></td>
 <td><?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['sexo'];
    }
}
?></td>
 <td><?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['nacimiento'];
    }
}
?></td>
 <td><?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['edad'];
    }
}
?></td>
 <td><?php

if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];
    $consulta=$con->query("SELECT * FROM formulario WHERE rut LIKE '$busqueda'");

    while($row=$consulta->fetch_array()){
        echo $row['email'];
    }
}
?></td>
    </tr>
 
 
  </tbody>
</table>
        </div>
    </div>
</div>
    
    

</body>
</html>