<?php
     include_once ("AccesoDatos.php");
     include_once ("titulo.php");
     include_once ("Usuario.php");
     
     session_start();

     
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link rel="stylesheet" href="./css/main.css">
     <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
<!-- Bootstrap -->
        <link href="css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="css/nprogress/nprogress.css" rel="stylesheet">
          <!-- iCheck -->
       <link href="css/iCheck/skins/flat/green.css" rel="stylesheet">
       <!-- Datatables -->
        <link href="css/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="css/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="css/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="css/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="css/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        <!-- jQuery custom content scroller -->
        <link href="css/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

        <!-- bootstrap-daterangepicker -->
        <link href="css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="css/custom.min.css" rel="stylesheet">

        <!-- MICSS button[type="file"] -->
        <link rel="stylesheet" href="css/micss.css">

    
        <h5>Operario de planta</h5>
        
    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
        background-color:  rgb(212, 230, 241);
      }
      button{
      color: white;
      font-size:15pt ;
      border-radius: 5px;
      margin: 8px 8px;
      cursor: pointer;
      padding:5px;
      box-shadow: 0px 3px 3px  #fff;
      }
      #dos {
        position: relative;
        top:5px;
        background-color:  rgb(63, 210, 236);
       }      
      #img{
        position: relative;
        top:120px;
        left:-400px;
      }
      #ticket{
        position: relative;
        top:-190px;
      }
    </style>
  </head>
<body>
  
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3  border-bottom shadow-sm" id="dos" >
    <h3 class="my-0 mr-md-auto font-weight-normal"> Bienvenida/o: <?php 
      if(isset($_COOKIE["USUARIOBLOG"]))
      {
        echo $_COOKIE["USUARIOBLOG"];
      }
      else 
      {
        echo "DISCULPE, NO ENCONTRAMOS SU USUARIO";
      }
      ?>
    </h3>
      
  </div>
     <div class="top_nav"><!-- top navigation -->
        <div class="nav_menu">

            <nav><img class= "img" src="./icon/portada.png" height="70">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                 <?php
                        //include("new_ticket.php");
                        //include("upd_ticket.php");
                    ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        
                        <div class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="colab.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                             <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                             <li> <a class="btn btn-outline-primary " href="colab1.php" id="botonVolver">Volver</a></li>
                             <li> <a class="btn btn-outline-primary " href="colab2.php" id="botonVolver">Imprimir Ticket</a></li>
                                <div class="right_col" role="main"><!-- page content -->
        
                    </li>
                </ul>

            </nav>
        </div>

    </div>

  <?php
    include "MensajeDeError.php";
  ?>

  <div class="pricing-header mx-auto text-center"> 
   <h3>Por favor, escriba su Ticket a la Administración</h3>    
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
         
<div id="img">
  <img src="./imagenes/pngegg.png" width="350px">
  </div>
  <div id="ticket">
           <form enctype="multipart/form-data" class="form-signin" action="UsuarioMensajeHacerModificar.php" method="POST">
              <!--h3>Entrada de Vehiculos</h3-->
              Fecha del mensaje <input name="fecha" type="text" class="form-control" value ='<?php date_default_timezone_set("America/Argentina/Buenos_Aires");echo date("Y-m-d H:i"); ?>' readonly>
              <br>
              Usuario <input name="mail" type="text" class="form-control" value='<?php echo $_COOKIE["USUARIOBLOG"]; ?>' readonly>
              <br>
              Mensaje <input name="mensaje" type="text" class="form-control" placeholder="Mensaje"  required autofocus>
              Estado 
              <select name="estado" class="form-control">
              <option value="pendiente">Pendiente</option>
              <option value="en desarrollo">En Desarrollo</option>
              <option value="terminado">Terminado</option>
              <option value="cancelado">Cancelado</option>
            </select>
              <br>
              <?php
                include "MensajeDeError.php";
              ?>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar Mensaje</button>
    
          </form>
</div>
      </div>

    </div>
    </div>
    <div class="pricing-header mx-auto text-center">
    <section>
        <h5>Gracias <?php echo $_COOKIE["USUARIOBLOG"];  ?>, por su contacto. Responderemos a la brevedad. La empresa</h5>
    </section>
</div>
</body>
</html>