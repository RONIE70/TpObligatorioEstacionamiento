<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <!--<title>Registro · Estacionamiento Scorpions</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">-->
    <?php
    include_once ('titulo.php');

    ?>
    
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <div>
    <div id="nav" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento Scorpions</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="vehiculosHacerTabla.php">Vehiculos</a>
      <a class="btn btn-outline-primary" href="administradorFrmUsuarios.php">Usuarios</a>
      <a class="btn btn-outline-primary" href="administradorFrmUsuarios.php">Volver</a>
</nav>
    <!--<a class="btn btn-outline-primary" href="login.php">Login</a>-->
  </div>
</div>
    <link href="./css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form id="form" class="form-signin" action="hacerInsertUsuario.php" method="post">
  <a href="/"><img class="mb-4" src="https://image.flaticon.com/icons/png/512/753/753210.png" alt="" width="90" height="90"></a>
  <h1 class="h3 mb-3 font-weight-normal">MODIFICACION DE USUARIO</h1>
  <label for="inputName" class="sr-only">Nombre Usuario</label>
  <input name="nombre" type="text" id="inputName" class="form-control" placeholder="Ingrese su nombre" required value="<?php echo $_GET ['nombre']; ?>">
  <label for="inputEmail" class="sr-only">Email</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus value="<?php echo $_GET ['email']; ?>">
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input name="password" type="password" id="inputEmail" class="form-control" placeholder="Password" required autofocus>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ALTA</button>
  <p class="mt-5 mb-3 text-muted">&copy; ScorpionsApp 2021</p>
</form>
    
  </body>
</html>