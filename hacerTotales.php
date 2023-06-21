<?php
include_once ('titulo.php');
include_once ("Estacionado.php");
include_once ("AccesoDatos.php");

$consulta =Estacionado::RetornaTodosCobrados();
?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="./css/vehiculosHacerTabla.css">
 <style type="text/css">
    #tablestop{
      left: 190px;
      
    }
    #tablestop{
      padding:1px;
      color:rgb(2, 8, 100);
      
      position: relative;
      top:-45px;
      
      width:740px;
      border-collapse: separate;
      font-size: 0.9rem;
      text-align: center;
      
    }
      tbody tr:nth-child(odd) {
      background-color: #82E0AA ;
      border: white 3px solid;
      text-align: center;
    }

      tbody tr:nth-child(even) {
      background-color: #EAFAF1;
      border: white 3px solid;
      text-align: center;
    }


th {     font-size: 13px;     font-weight: normal;  text-align: center;   padding: 8px;    
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px; text-align: center;   border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }

  </style>
</head>

<body id="body">
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento ScorpionsApp</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="index.php">Pagina Principal</a>
      <a class="btn btn-outline-primary" href="hacerContable.php">Reportes</a>
    </nav>
    <!--<a class="btn btn-outline-primary" href="login.php">Login</a>-->
  </div>
  <div id="pres">
  <p>TOTAL RECAUDADO HASTA EL MOMENTO</p>
  <p>
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  
    
    <div id="lead">
    <p><li> </li></p>
  </div>
  
<div id="tablestop">
   
      <h4>Lista de Vehiculos Cobrados</h4>
   
   
   <table cellspacing=2 cellpadding=2>
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
      
        </tr>
          
      <?php
        }
      ?>
       </tbody>
</table>
</div>


  <div class="container">
    <div id="precio" class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0-font-weight-normal">TOTAL DE TICKETS EMITIDOS</h4><?php
              $tickets=Estacionado::CalcularTickets();
              echo "CANTIDAD DE TICKETS COBRADOS:  ".$tickets;
              ?>
        </div>
        <div class="card-body">
          <h1 class="card-title-pricing-card-title">Verificación<small class="text-muted">/CAJA</small></h1>
          <button id="btnregistrar" type="submit" class="btn_send" href="estacionadoHacerTablaConsulta.php">Total Recaudado</button> -->
              <?php
              $total=Estacionado::CalcularTotales();
              echo "Caja $ ".$total;
              ?>
        </div>
      </div>
       </div>
     </div>

    
    
   </body> 

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; EscorpionsApp 2021</small>
        </div>
        <div class="col-6 col-md">
          
    </footer>
  

</html>