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
    include_once ("Estacionado.php");
    include_once ("AccesoDatos.php");

    if(isset($_GET["usuario"]))
    {
        Estacionado::CrearTablaEstacionados("estacionados",$_GET["usuario"]);
    } 
    else
    {
        Estacionado::CrearTablaEstacionados("estacionados","TODOS");
    }
  
       Estacionado::CrearTablaEstacionados("cobrados","TODOS");
    ?>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
  <script type="text/javascript" src="js/funcionAutoCompletar.js"></script>
  
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/estacionar.css">
  <link href="./css/pricing.css" rel="stylesheet">
  <style type="text/css">
    #btn-vehiculo{
      position: relative;
      top: 360px;
      left: -270px;
    }
    #entrada{
      position: relative;
      width: 300px;
      left: 220px;
    }
    #btnregistrar1{
      position: relative;
      left:550px;
      top: -63px;
    }
    #body{
      position: relative;
      top: 200px;
      z-index: -1; 
    }
    .btn-1{
      position: relative;
      left:740px;
    }
    .btn-2{
      position: relative;
      left:770px;
    }
  </style>
</head>
<div id="body">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img class= "img" src="./icon/portada.png" height="100">
    <a class="text" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="boton">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <div class="botonsep">
      <li class="nav-item">
        
        
        </li>
        </div>
        <li class="nav-item">
          <div class="botonsep">
            <div class="btn-1">
           <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Inicio</a></div></div>
        </li>
        <li class="nav-item">
          <div class="botonsep">
            <div class="btn-2">
           <a class="btn btn-outline-success my-2 my-sm-0" href="administradorFrmUsuarios.php">Usuarios</a></div></div>
        </li>
      </ul>
    </div>
  </div>
  </nav>
</div>
  <body id="body">
  
  <div id="pres">
    
      <?php
      echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
      ?>
    </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
    <div id="lead">
      <p><li>En esta pantalla el usuario debera ingresar la patente del cliente</li><li> Se verificara la existencia de la misma en la base de datos</li></p>
      <h1 class="form-group1">ENTRADA VEHICULO</h1>
    </div>
  </div>
   
     
      <div class="container">
        <div class="row">
          <div class="col">
           <form enctype="multipart/form-data" action="estacionarHacerEntradaPatente.php" method="post">
              <div id="txtEnter"class="form-group1">
                
                <div id="entrada">
                <input id="" name="patente" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar Patente" required pattern="[A-Z]{3}[0-9]{3}" title="Solo ingresar 3 Mayusculas y 3 digitos "required autofocus>
                </div>
                <div class="error">
                <?php
                include "MensajeDeError.php";
                ?>
                </div>
              </div>
              <button id="btnregistrar1" type="submit" class="btn_send">Estacionar</button>
        </form>
            </div>
        </div> 
      </div> 
    </body>
          <div id="btn-vehiculo"> 
          <nav class="navigator">
    <ul class="menu">
            <li> <a class="menu_celda" href="#">GESTION VEHICULOS</a>
        <ul class="submenu">
              <li><a href="vehiculosHacerTabla.php">CONSULTA REGISTRADOS</a></li>
              <li><a href="estacionadosHacerTabla.php?cboUsuario=TODOS">CONSULTA ESTACIONADOS</a></li>
              <li><a href="frmVehiculo.php">ALTA VEHICULO</a></li>   
              <li><a href="vehiculoHacerSalida.php">SALIDA VEHICULO</a></li>
        </ul>
            </li>
          <!--<li> <a class="menu_celda" href="#">USUARIOS</a>
                <ul class="submenu">
                    <li><a href="#">CONSULTA USUARIOS</a></li>
                    <li><a href="#">ALTA</a></li>   
                    <li><a href="#">BAJA</a></li>
                </ul>
         </li>-->
    </ul>
  </nav>
  </div>
        
   

  

</html>