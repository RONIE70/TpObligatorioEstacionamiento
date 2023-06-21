<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
  <script type="text/javascript" src="js/funcionAutoCompletar.js"></script>
  <link rel="stylesheet" href="./css/vehiculoHacerSalida.css">
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style >
  </style>
 <link href="./css/pricing.css" rel="stylesheet">
</head>
<body id="body">
  
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento ScorpionsApp</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="hacerContable.php">Reportes</a>
      <a class="btn btn-outline-primary" href="estacionar.php">Entrada Vehiculos</a>
      <a class="btn btn-outline-primary" href="index.php">Salir</a>
    </nav>
    
  </div>
  <div id="pres">
  <p>
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  <div id="pres">
<nav class="navigator">
    <ul class="menu">
            <li> <a class="menu_celda" href="#">VEHICULOS</a>
        <ul class="submenu">
              <li><a href="estacionadoHacerTablaConsulta.php">CONSULTA COBRADOS</a></li>
              <li><a href="frmVehiculo.php">ALTA VEHICULO</a></li>   
              <li><a href="hacerContable.php">DESCARGAS</a></li>
        </ul>
            </li>
          <li> <a class="menu_celda" href="#">USUARIOS</a>
                <ul class="submenu">
                    <li><a href="usuariosHacerTabla.php">CONSULTA USUARIOS</a></li>
                    <li><a href="formUsuario.php">ALTA</a></li>   
                    <li><a href="formBorrarUsuario.php">BAJA</a></li>
                </ul>
         </li>
    </ul>
  </nav>
 </div>   

  <div class="col">
          <form enctype="multipart/form-data" action="hacersalidapatente.php" method="post">
            
              <div id="autocompletado" class="form-group2">
               <div id="txtsal"><h1>SALIDA</h1></div>
                <div class="error">
                <?php
                include "MensajeDeError.php";
                ?>
                </div>
                <div id="txtppte">
                <input id="autocomplete" name="patente" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar Patente" pattern="[A-Z]{3}[0-9]{3}" title="Solo ingresar 3 Mayusculas y 3 digitos "required autofocus>
                </div>
              </div>
              <div id= "btnCobrar">
              <button id="btnregistrar2" type="submit" class="btn_send">Cobrar</button>
             <!-- <div id="tablestop">
              <!?php include ('tablacobrados.php'); ?>
            </div>-->
          </div>
   
 </form>
 </div>  <div id="imgw">
          <div id="ticketver">
            <?php include ('ultimoTicket.php'); ?>
          </div>
            <div class="barra">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/EAN13.svg/330px-EAN13.svg.png" width="130" height="46">
            </div>
          <div id= "btnContable">
            <form enctype="multipart/form-data" action="EstacionadogenerarPdfTicket.php" method="post">
                  <div class="form-group2">
                  <button id="btnregistrar" type="submit" class="btn_send">IMPRIMIR</button>
                  </div>
            </form>
          </div>
          </div>
   </body> 
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; ScorpionsApp 2021</small>
        </div>
        <div class="col-6 col-md">
    </footer>
  </div>

</html>