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
  ?>
  
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
  <script type="text/javascript" src="js/funcionAutoCompletar.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/administradorFrmUsuarios.css">
  
  </head>

  <body id="body">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h4 class="my-0 mr-md-auto font-weight-normal"><img class= "img" src="./icon/portada.png" height="100">Estacionamiento ScorpionsApp</h4>
    <nav class="my-2 my-md-0 mr-md-3">
        
        <a class="btn btn-outline-primary" href="blogHome.php">Administracion</a>
        <a class="btn btn-outline-primary" href="hacerContable.php">Reportes</a>
        <a class="btn btn-outline-primary" href="estacionar.php">Gestion Vehiculos</a>
    </nav>
    
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
     <li>En esta pantalla el usuario debera ingresar la patente del cliente</li><li> Se verificara la existencia de la misma en la base de datos</li>
    
          <nav class="navigator">
    <ul class="menu">
            <li> <a class="menu_celda" href="#">GESTION USUARIOS</a>
        <ul class="submenu">
              <li><a href="usuariosHacerTabla.php">CONSULTA REGISTRADOS</a></li>
              <li><a href="estacionadoHacerTablaConsulta.php">CONSULTA COBRADOS</a></li>
              <li><a href="registro.php">ALTA USUARIO</a></li>   
              <li><a href="formBorrarUsuario.php">BAJA USUARIO</a></li>
        </ul>
            </li>
          <li> <a class="menu_celda" href="#">USUARIOS</a>
                <ul class="submenu">
                    <li><a href="#">CONSULTA</a></li>
                    <li><a href="#">DATOS PERSONALES</a></li>   
                    <li><a href="#">HORARIOS</a></li>
                </ul>
         </li>
       </ul>
    </nav>
  
    </div>
    
   </body> 

   <div id="pie">
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; ScorpionsApp 2021</small>
        </div> 
    </footer>
  </div>

</html>