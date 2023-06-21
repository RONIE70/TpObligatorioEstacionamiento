<?php

include_once ("AccesoDatos.php");
include_once ("Vehiculo.php");
include_once ("Usuario.php");
include_once("Estacionado.php");


$consulta =Usuario::TraerTodoLosUsuarios();

?>
<!doctype html>
<html lang="en">
<?php
include_once("Titulo.php");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">


  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
  <script type="text/javascript" src="js/funcionAutoCompletar.js"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/usuariosHacerTabla.css">

  <link href="./css/pricing.css" rel="stylesheet">
  <style type="text/css">
    #tablestop{
      left: 220px;
    }
    #tablestop{
      padding:1px;
      color:rgb(2, 8, 100);
      border color:white;
      position: relative;
      top:-45px;
      
      width: 630px;
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
    <h4 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento ScorpionsApp</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="administradorFrmUsuarios.php">Gestion Usuarios</a>
      <a class="btn btn-outline-primary" href="estacionar.php">Entrada Vehiculo</a>

    </nav>
    <a class="btn btn-outline-primary" href="vehiculoHacerSalida.php">Salida Vehiculo</a>
  </div>
  <div id="pres">
  
  <p>
    <?php
    echo "USUARIO LOGUEADO ACTUALMENTE: ".$_COOKIE["USUARIO"];
    ?>
  </p>
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
    <div id="lead">
    <p><li>En esta pantalla se visualiza un listado de los vehiculos registrados en la Base de Datos</li> </p>
  </div>
  </div>
   <div class="tabletitle">
   <h3>Lista de Usuarios Registrados</h3>
   </div>
   <div id="tablestop">
    <table  cellspacing=8 cellpadding=18>
      <thead>
        <tr>
          <td>ID</td>
          <td>NOMBRE</td>
          <td>EMAIL</td>
          <td>CATEGORIA</td>
          <td>FECHA INSCRIPCION</td>
        </tr>
      </thead>
     <tbody>
      <?php 

        foreach ($consulta as $dato) {
          ?>
          
          <tr>
            <td><?php echo $dato->id; ?></td>
            <td><?php echo $dato->nombre; ?></td>
            <td><?php echo $dato->email; ?></td>
            <td><?php if($dato->rol_id==1){
             echo "administrador"; }
              else {echo "operario";}?></td>
            <!--<td><img width="100" src="<?php echo $dato->Foto; ?>"></td>-->
            <td><?php echo $dato->fechaInscrip; ?></td>
            
            <!--<td><a href="formUsuario.php?id=<?php echo $dato->id; ?>">Editar</a></td>-->
            <td><a href="formUsuarioModificar.php?nombre=<?php echo $dato->nombre; ?>&email=<?php echo $dato->email; ?>">Modificar</a></td>
          </tr>
          
          <?php
        }
      ?>
     </tbody>
  </table>
  </div>