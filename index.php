<!doctype html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=auto" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <!--<title>Estacionamiento Scorpions</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">-->
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
    .display-3,.display-4{
    font-family:'Oxygen', sans-serif;
    font-size:3.2rem ;
    padding: 30px 20px 30px 20px; 
    margin:0 auto;
    color: white;
    border-radius: 10px;
    border-width: 50px;
    line-height: 80px;
    text-shadow:5px 5px 5px rgb(134, 201, 240) ;
    letter-spacing: 1px;
    }

    .display-3{
    position: relative;
    margin-left: 110px;
    margin-top: -60px; 
  
    }
    
    .display-4{
    position: relative;
    margin-left: 140px;
    margin-top: -58px;
    }

    body {
      background-color:  rgb(41, 145, 243);
    }

  .container2{
    font-size:1.2rem;
    position: relative;
    margin-left: 50px;
    margin-top: -20px;
  }

  .col-md-4{
    color:white;
  }

.btn-btn-secondary
    
  </style>
  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">
</head>
<body id="body">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">•Estacionamiento Scorpions•</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="estacionar.php">Estacionar<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="error.php">Testing error</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>-->
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <!--<img scr="./icon/fachada.jpg" width="132" height="110">-->
        <h1 class="display-3">Bienvenidos! Scorpions</h1>
        <h4 class="display-4">App Estacionamiento<h4>
        <div class="container2">
          <p><li> Está desarrollada para gestionar el control y cobro en los Estacionamientos</li>
           <li>Es un sistema versátil y práctico tanto para los usuarios como para los operadores, permitiendo un escalonamiento modular y altamente flexible</li><li> Y por supuesto, nos permite cobrar por el servicio e imprimir el ticket en forma automatica.
        <li>¡Accede a una demo ahora!</li></p>
      </div>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Comenza a Usarla &raquo;</a></p>
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div id="row" class="row">
        <div class="col-md-4">
          <img src="./icon/laptop.png" width="125" height="105">
          <h2>Tecnología para brindar mejores servicios</h2>
            <li>Para alcanzar el desarrollo esperado es clave incorporar un software para nuclear toda la información contable y financiera.</li>
            <li> Puedes automatizar los procesos para trabajar de forma ordenada y obtener mejores resultados. </li>
            
          <p><a class="btn btn-secondary" href="#" role="button">Ver demo &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./icon/casa.png" width="132" height="110">
          <h2>Acceso desde cualquier lugar</h2>
          <p><li>Más tranquilidad y mayor eficiencia</li><li>Gestiona toda tu empresa de forma online</li><li>Cómo, cuándo y desde dónde quieras</li>
            <li>Mejor información para la toma de decisiones</li></p>
          <p><a class="btn btn-secondary" href="#" role="button">Ver demo &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./icon/candado.png" width="125" height="105">
          <h2>Máxima seguridad de la información</h2>
          <p><li>Puedes administrar todas las facturas y tener bajo control los servicios asociados que tus clientes consumen.</li><li>Control y confianza que necesitas para dirigir de manera segura tu negocio con máxima flexibilidad y seguridad</li>
            </p>
          <p><a class="btn btn-secondary" href="#" role="button">Ver demo &raquo;</a></p>
        </div>
      </div>
      <hr>
    </div> <!-- /container -->
  </main>
  <footer class="container">
    <p>&copy; ScorpionsApp 2021</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>