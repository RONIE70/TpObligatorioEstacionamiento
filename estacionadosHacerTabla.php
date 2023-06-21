<?php 
        include_once ("AccesoDatos.php");
        include_once ("Vehiculo.php");
        include_once ("Usuario.php");
        include_once("Estacionado.php");
        include_once("titulo.php");
        
        $valor=$_GET["cboUsuario"];

        Estacionado::CrearTablaEstacionados("estacionados",$valor);
      
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
  <link rel="stylesheet" href="./css/estacionadosHacerTabla.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link href="pricing.css" rel="stylesheet">
  <style type="text/css">
    #tablestop{
      left: 170px;
    }
    #tablestop{
      padding:1px;
      color:rgb(2, 8, 100);
      border color:white;
      position: relative;
      top:-45px;
      box-shadow: black 1px 1px 1px 1px;
      width: 740px;
      border-collapse: separate;
      font-size: 0.9rem;
      text-align: center;

    }
      tbody tr:nth-child(odd) {
      background-color: #82E0AA ;
      border: white 3px solid;
    }

      tbody tr:nth-child(even) {
      background-color: #EAFAF1;
      border: white 3px solid;
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
    <h3 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento ScorpionsApp</h3>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="vehiculoHacerSalida.php">Salida Vehiculos</a>
      <a class="btn btn-outline-primary" href="administradorFrmUsuarios.php">Gestion Usuario</a>
      <a class="btn btn-outline-primary" href="hacerContable.php">Volver</a>

    </nav>
    
  </div>
  <div id="pres">
  
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <div id="lead">
    <p><li> Se visualiza un listado de los vehiculos estacionados con su hora de ingreso</li><li>Si el campo IMPORTE esta vacio, el vehiculo aun NO HA SALIDO del estacionamiento</li> </p>
  </div>
  </div>
  
   <div id="tablestop">
   
      <h3>Lista de Vehiculos Estacionados</h3>
   
      <?php 
        
        include "tablaestacionados.php";
    
      ?>
  </div>    

<!--<table id="tablestop" border=3 cellspacing=2 cellpadding=2>
      <thead>
        <tr>
          <td>ID USUARIOS</td>
          <td>ID VEHICULOS</td>
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
            <td><a href="frmVehiculoModificar.php?id=<?php echo $dato->Patente; ?>">Modificar</a></td>
        </tr>
          
      <?php
        }
      ?>
    </table>-->
</tbody>
</html>