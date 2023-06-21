
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <!--<title>Estacionar - Estacionamiento Scorpions</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">-->
  <?php
    include_once ('titulo.php');
    include_once ("Estacionado.php");
    include_once ("AccesoDatos.php");
    Estacionado::CrearTablaEstacionados("estacionados","TODOS");
    Estacionado::CrearTablaEstacionados("cobrados","TODOS");
   
    ?>
  <link rel="stylesheet"  href="./css/hacerContable.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="./css/pricing.css" rel="stylesheet">
  <style type="text/css">
    .txtusu{
    position: relative;
    left:430px;
    top:200px;
    font-family:"Segoe", "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
  }
  #listado{
      position: relative;
      left:500px;
      top:170px;
    }
    .combo{
    position: relative;
    left:-200px;
    top: 60px;
    width:20%;
    margin:auto; 
    border:1px 
    solid #7C7A7A; 
    height:30%; 
    text-align:center; 
    padding:5px; 
    background-color: rgb(41, 145, 243);
    font-family:"Segoe", "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
    box-shadow: black 5px 5px 4px 2px;
    border-radius: 10px;
    color:white;
    }
  </style>
</head>
<body id="body">
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="estacionadoHacerTablaConsulta.php">Consultar Cobrados</a>
      <a class="btn btn-outline-primary" href="vehiculoHacerSalida.php">Salida Vehiculo</a>
      <a class="btn btn-outline-primary" href="estacionar.php">Entrada</a>
    </nav>
    <!--<a class="btn btn-outline-primary" href="login.php">Login</a>-->
  </div>
  <div id="pres">
  <p>SISTEMA DE ADMINISTRACION CONTABLE - FACTURACION </p>
  <p>
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <div id="lead">
    <p><li>DESCARGAS DE ARCHIVOS DE CONSULTA </li></p>
  </div>
  </div>
   <div id="btn-vehiculo"> 
<nav class="navigator">
    <ul class="menu">
            <li> <a class="menu_celda" href="#">DESCARGAS</a>
        <ul class="submenu">
              <li><a href="generarEstacionados.php">ESTACIONADOS.SCV</a></li>
              <li><a href="EstacionadogenerarPdf.php">COBRADOS.PDF</a></li>
              <li><a href="hacerTotales.php">RECAUDACION $</a></li>   
              <li><a href="formBorrarUsuario.php">FACTURA AFIP</a></li>
        </ul>
            </li>
    </ul>
</nav>
  </div>
<div>
  <h1><h1>
</div>
  <div >
              <?php //include ('tablaestacionados.php'); ?>
             </div>
 
              
      
              <div >
              <?php //include ('tablacobrados.php'); ?>
              </div>
 
    
             <div class="txtusu">
             <h3> Seleccion de usuarios </h3>
             </div>
             <div id="listado">
            <form enctype="multipart/form-data" action="estacionadosHacerTabla.php" method="GET">
            <select class="combo" name="cboUsuario" class="form-control form-control-lg form-pat">
                  <option value="TODOS">TODOS</option>
                  <option value="<?php echo $_COOKIE["USUARIO"]; ?>"><?php echo $_COOKIE["USUARIO"]; ?></option>
              </select>
              <div class ="list">
              <button id="btnregistrar1" type="submit" class="btn_send">LISTADO</button>
              </div>
            </form>
            </div>
         <!-- </div>
        </div>
      </div>-->
   
</body>
    
 
</html>