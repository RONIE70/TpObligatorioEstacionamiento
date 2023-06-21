<?php

include_once ("AccesoDatos.php");
include_once ("Vehiculo.php");
include_once ("Usuario.php");
include_once("Estacionado.php");

$consulta =Estacionado::RetornaTodosCobrados();

?>

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
  <link rel="stylesheet" href="./css/estacionadoHacerTablaConsulta.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link href="./css/pricing.css" rel="stylesheet">

  <style type="text/css">
    #tablestop{
      left: 90px;
    }
    #tablestop{
      padding:3px;
      color:rgb(2, 8, 100);
      
      position: relative;
      top:-45px;
      box-shadow: black 1px 1px 4px 2px;
      width: 850px;
      border-collapse: collapse;
      font-size: 0.9rem;
      text-align: center;

    }
      tbody tr:nth-child(odd) {
      background-color: #82E0AA ;
    }

      tbody tr:nth-child(even) {
      background-color: #EAFAF1;
    }


th {     font-size: 13px;     font-weight: normal;  text-align: center;   padding: 8px;    
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;          border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }

  </style>
</head>
<body id="body">
  
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento ScorpionsApp</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="vehiculoHacerSalida.php">Salida Vehiculos</a>
      <a class="btn btn-outline-primary" href="hacerContable.php">Reportes</a>

    </nav>
    <a class="btn btn-outline-primary" href="administradorFrmUsuarios.php">Gestion Usuario</a>
  </div>
  <div id="pres">
  
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <div id="lead">
    <p><li> Se visualiza un listado de los vehiculos con fecha de ingreso - egreso y el importe cobrado
  </div>
  </div>
  
   
   <div class="tabletitle">
      <h3>Lista de Vehiculos Cobrados</h3>
   </div>
   <div>
   <table id="tablestop" border=3 cellspacing=2 cellpadding=2>
      <thead>
        <tr>
          <td>ID USUARIO</td>
          <td>ID VEHICULO</td>
          <td>FECHA INGRESO</td>
          <td>FECHA SALIDA</td>
          <td>IMPORTE</td>
          <td>ID USUARIO SALIDA</td>
        </tr>
      </thead>
  <tbody>

      <?php 
        
        foreach ($consulta as $dato) {
          
      ?>
          
        <tr>
            <td><?php echo $dato->id_usuario; ?></td>
            <td><?php echo $dato->id_vehiculo; ?></td>
            <td><?php echo $dato->fechaIngreso; ?></td>
            <td><?php echo $dato->fechaSalida; ?></td>
            <td><?php echo $dato->importe; ?></td>
            <td><?php echo $dato->id_usuarioSalida; ?></td>
            <td><a href="formUsuario.php?id=<?php echo $dato->id; ?>">Editar</a></td>
            <td><a href="frmVehiculoModificar.php?id=<?php echo $dato->id_vehiculo; ?>">Modificar</a></td>
        </tr>
          
      <?php
        }
      ?>
       </tbody>
</table>
</div>