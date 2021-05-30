<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    
    <?php
    include_once ('titulo.php');

    ?>
    
    <!-- Bootstrap core CSS -->
<!--<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">-->
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
    
<form class="form-signin" action="hacerentradasalida.php" method="post">
  <img class="mb-4" src="https://i.pinimg.com/originals/2b/b7/ee/2bb7ee6df0647c27083a889a0360dcca.png" alt="" width="125" height="125">
  <h1 class="h3 mb-3 font-weight-normal">ENTRADA/SALIDA</h1>
  <label for="inputPatente" class="sr-only">PATENTE</label>
  <input name="patente" type="text" id="patente" class="form-control" placeholder="Patente" required autofocus pattern="[A-Za-z]{3}[0-9]{3}">
  
  <label for="inputPassword" class="sr-only">Password</label>
  <input name="copiapatente" type="text" id="patente" class="form-control" placeholder="Reingrese Patente" required pattern="[A-Za-z]{3}[0-9]{3}">
  <div class="checkbox mb-3">
    <label>
      <br>
      <input type="checkbox" value="remember-me"> recordar cliente
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">INGRESO/EGRESO</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
</form>


    
  </body>
</html>