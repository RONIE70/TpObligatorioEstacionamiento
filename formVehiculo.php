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
    
  <link rel="stylesheet" type="text/css" href="./css/formVehiculo.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 

  <!--<title>Estacionar - Estacionamiento Scorpions</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">-->
  <?php
    include_once ('titulo.php');
    include_once ("estacionamiento.php");
    ?>
</div>
      <div class="container">
        <div class="row">
          <div class="col">
            <form enctype="multipart/form-data" action="hacerInsertVehiculo.php" method="post">
              <div class="form-group1">
                <h1>ENTRADA</h1>
                <input name="patente" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar Patente" required autofocus>
                <!--<select name="cboColor" class="form-control form-control-lg form-pat">
                  <option value="rojo">blanco</option>
                  <option value="azul">azul</option>
                  <option value="negro">negro</option>
              </select>-->
              <!--<form action="hacerentradapatente.php" method="post" name="formulario">
              <p>Seleccione la opcion si es correcta<br>
             <input type="checkbox"  name="GNC" id="GNC" value="GNC">
                            <label for="vehicle1"> GNC</label><br>
             </p>
              </form>-->
              </div>
              
              <div class="text-center">
          <form enctype="multipart/form-data" action="hacerInsertVehiculo.php" method="POST" >

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
              <div id="tablestop">
              <?php include ('tablaestacionados.php'); ?>
            </div>
            </form>
             <p> Seleccion de usuarios </p>
            <form enctype="multipart/form-data" action="hacerListado.php" method="post">
            <select class="combo" name="cboUsuario" class="form-control form-control-lg form-pat">
                  <option value="TODOS">TODOS</option>
                  <option value="<?php echo $_COOKIE["USUARIO"]; ?>"><?php echo $_COOKIE["USUARIO"]; ?></option>
                  
              </select>
              <div class = "list">
              <button id="btnregistrar1" type="submit" class="btn_send">LISTADO</button>
              </div>
            </form>