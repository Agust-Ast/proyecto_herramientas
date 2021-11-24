<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login&#128293</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link href="boot/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="boot/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
     
    </style>
<div class="container">
  <div class="row">
    
   
    <div class="col">
       <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center  bg-transparent"  >
    
<main class="form-signin ">
  <form action="validar.php" method="get" >
  <img class="mb-4" src="img/login.jpg" alt="" width="70" height="70">
    <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
      <label for="floatingPassword">Contraseña</label>
    </div>

    
    <input class="w-100 btn btn-lg btn-outline-warning" type="submit" value="Entrar">
    <a class="w-100 btn btn-lg btn-outline-warning" href="registro-login.php">Crear cuenta</a>
    <br> <br>
    <a class=" btn btn-warning" href="recuperar.php">Recuperar contraseña</a>

  </form>
</main>
    </div>
      


  </div>
  
</div>
    
   


    
  </body>
</html>
