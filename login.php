<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <!--<title>Login · Estacionamiento Scorpions</title>
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
      .form-pat {
      text-align: center;
      margin: 0 auto;
      width: 80%;
    }
    .my-0-font-weight-normal{
    background-color: #1612e9;
    color: white;
    font-size:15pt ;
    border-radius: 5px;
    margin: 8px 8px;
    cursor: pointer;
    padding:5px;
    box-shadow: 0px 3px 3px  #fff;
    }

     button
     {
    color: white;
    font-size:15pt ;
    border-radius: 5px;
    margin: 8px 8px;
    cursor: pointer;
    padding:5px;
    box-shadow: 0px 3px 3px  #fff;
    }

    #nav{
      position: relative;
      top: -200px;
      width: 199%;
      left:2px;
    }

    #form{
      position: relative;
      top: 60px;
      left: -300px;
    }
    </style>
    
    <!-- Custom styles for this template -->
    ><link href="signin.css" rel="stylesheet">
    <div>
    <div id="nav" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Estacionamiento Scorpions</h5>
   <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="index.php">Pagina Principal</a>
      <a class="btn btn-outline-primary" href="registro.php">Registro</a>
</nav>
    <!--<a class="btn btn-outline-primary" href="login.php">Login</a>-->
  </div>
</div>
  </head>
  
<body class="text-center">
    
<form id="form"class="form-signin" action="hacerlogin.php" method="post">
<a href="/"><img class="mb-4" src="https://cdn4.vectorstock.com/i/1000x1000/06/78/login-icon-in-trendy-flat-style-vector-19920678.jpg" alt="" width="150" height="110"></a>
  <h1 class="h3 mb-3 font-weight-normal">USUARIO REGISTRADO</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input name="correo" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input name="pass" type="password" id="inputEmail" class="form-control" placeholder="Password" required autofocus>
  <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
  <p>Por favor, tome una foto en tiempo real al loguearse</p>
  <a class="btn btn-primary btn-lg" href="webcam-master/webcam.php" role="button">Usar Webcam </a>
  <br><br><p class="mt-5 mb-3 text-muted">&copy; ScorpionsApp S.A. 2021</p>
</form>
<footer>
  
  </footer> 
  </body>
</html>