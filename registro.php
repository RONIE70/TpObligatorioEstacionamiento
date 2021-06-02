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
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" action="hacerregistro.php" method="post">
  <a href="/"><img class="mb-4" src="https://uxwing.com/wp-content/themes/uxwing/download/07-design-and-development/bootstrap-4.png" alt="" width="72" height="72"></a>
  <h1 class="h3 mb-3 font-weight-normal">REGISTRO DE USUARIO</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input name="correo" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input name="pass" type="password" id="inputEmail" class="form-control" placeholder="Password" required autofocus>
  <label for="inputPassword" class="sr-only">Copia de Contraseña</label>
  <input name="copiapass"type="password" id="inputPassword" class="form-control" placeholder="Repetir Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ALTA</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
</form>
    
  </body>
</html>