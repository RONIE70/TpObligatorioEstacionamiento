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
  
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
  <script type="text/javascript" src="js/funcionAutoCompletar.js"></script>
  
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/frmVehiculoModificar.css">
  <link href="./css/pricing.css" rel="stylesheet">
</head>
<body id="body">
  
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento ScorpionsApp</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="estacionar.php">Consulta Vehiculo</a>
      <a class="btn btn-outline-primary" href="registro.php">Registro</a>

    </nav>
    <a class="btn btn-outline-primary" href="login.php">Login</a>
  </div>
  <div id="pres">
  <p>REGISTRO DE ENTRADAS Y SALIDAS DE VEHICULOS </p>
  <p>
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="display-4">Estacionamiento ScorpionsApp</h2>
    <div id="lead">
    <p><li>En esta pantalla el usuario podra dar de alta una nueva patente</li></p>
  </div>
  </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <form enctype="multipart/form-data" action="frmVehiculoModificarHacer.php" method="post">
              <div id="titular" class="form-group1">
                <h1>COMPLETAR DATOS VEHICULO</h1>
                <?php
                if (isset($_GET['pPatente']))
                {
                  $valor=$_GET['pPatente'];
                }
                else
                {
                  $valor="";
                }
                ?>
                <input id="ppte" name="patente" class="form-control form-control-lg form-pat" type="text" value="<?php echo $valor; ?>" placeholder="Ingresar Patente" required autofocus>
              </div>
              <div class="text-center">
              <p><br><br><li class="display-5">COLOR DE VEHICULO</p></li>
              <div class="color">
                <div>
                  <input type="radio" name="color" value="BLANCO" required>
                  <label for="gnc">BLANCO</label>
                </div>
                <div>
                  <input type="radio" name="color" value="NEGRO">
                  <label for="nafta">NEGRO</label>
                </div>
                <div>
                  <input type="radio" name="color" value="ROJO">
                  <label for="diesel">ROJO</label>
                </div>
                
                <div id="checkboxGnc">
                <p><br>Seleccione la opcion si es correcta<br></p>
                <input type="checkbox"  name="gnc"  value="GNC">
                                <label for="combustible"> GNC</label><br>
                  </div>              
              </div>
              <div class="main">
                <h5>FOTO DEL VEHICULO</h5>
                
                <p> Enviar mi archivo: <input name="subir_archivo" type="file" /></p>
                </div>
              <button id="btnregistrar1" type="submit" class="btn_send">Estacionar</button>
                  
                </div>
            </form>
