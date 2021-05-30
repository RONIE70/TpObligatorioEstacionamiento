
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <!--<title>Signin Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://i.pinimg.com/originals/2b/b7/ee/2bb7ee6df0647c27083a889a0360dcca.png">-->
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
    
<form class="form-signin">
  <img class="mb-4" src="data:image/png;base64,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" alt="" width="72" height="72">

  <h1 class="h3 mb-3 font-weight-normal">ENTRADA/SALIDA</h1>
  <label for="inputPatente" class="sr-only">PATENTE</label>
  <input type="text" id="patente" class="form-control" placeholder="Patente" required autofocus pattern="[A-Za-z]{3}[0-9]{3}">
  
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="text2" id="inputPatente" class="form-control" placeholder="Reingrese Patente" requiredpattern="[A-Za-z]{3}[0-9]{3}">
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
