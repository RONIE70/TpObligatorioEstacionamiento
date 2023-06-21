<?php
    require 'codigo_qr/phpqrcode/qrlib.php';
    include_once ("Cliente.php");
    include_once ("AccesoDatos.php");

?>

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
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style type="text/css">
    #qrMove{
      position: relative;
      left: 710px;
      top: -360px;
    }
    .titulo{
      position: relative;
      left: 697px;
      top: -380px;
      color: green;
      font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
    }
    .btn-volver-cliente{
      position: relative;
      left:-90px;
    }
    .img{
      height:60px;
      position: relative;
      left:615px;
      top:-88px;
      z-index: 1;
    }
    .lead2{
      color: green;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="jumbotron mt-3">
      <h2 class="lead2">Sugerencia Registrada!</h2>
      <p class="lead"><li>Su Comentario ha sido ingresado con éxito!!</li>
        <li>A la brevedad sera tratado por la Administración,<p> de ser necesario nos contactaremos para solicitarle información adicional.</p> MUCHAS GRACIAS</li></p>
      <img class= "img" src="./icon/portada.png">
    </div>
  </div>
  <div class="titulo">
    <?php
  echo "Scanee Qr para corroborar los datos";
  ?>
  </div>
  <div id="qrMove">
  <?php
  $dir = 'temp/';
  
  if(!file_exists($dir))
    mkdir($dir);
  
  $filename = $dir.'test.png';
  
  echo '<img src="'.$filename.'" />';
  ?>
  </div>
  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Nosotros</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fotos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Preferenciales</a>
        </li>
        <li class="nav-item dropup">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tarifas</a>
          <div class="dropdown-menu" aria-labelledby="dropdown10">
            <a class="dropdown-item" href="#">Moto</a>
            <a class="dropdown-item" href="#">Automovil</a>
            <a class="dropdown-item" href="#">Camionetas</a>
          </div>

        </li>
        </ul>
        <div class="btn-volver-cliente">
      <a class="btn btn-outline-success my-2 my-sm-0" href="index.php" role="button">Volver</a>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>