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


    
      <style>
    #tableUser{
    text-align: center;
}

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
      	top:100px;
      	left:60px;
      }
      #mensaje{
        display: flex;
        justify-content: space-around;

      }
      table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 5px;     width: 600px; text-align: center;    border-collapse: collapse; }

th {     font-size: 10px;     font-weight: normal;  text-align: center;   padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }

    </style>
  </head>
<body class="nav-md">
  <div class="top_nav"><!-- top navigation -->
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/profiles/default.png" alt="">             </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="admin.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                             <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                             <li> <a class="btn btn-outline-primary " href="admin3.php" id="botonVolver">Volver</a></li>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- /top navigation -->    
  
  
     <a class="btn btn-outline-primary " ></a>  
  </div>
  <div id="mensaje">
  <div class="table-responsive">
  <?php
    include "MensajeDeError.php";
    Usuario::CrearTablaMensajes();
    include "UsuarioMensajeriaListado.php";
  
  ?>
 </div>
  
<div>
  <div class="container">
    <div class="card-deck mb-3 text-center">
         
<!--<div id="img">
  <img src="./imagenes/pngegg.png" width="350px">
  </div>-->
           <form enctype="multipart/form-data" class="form-signin" action="AdminMensajeHacer.php" method="POST">
              <!--h3>Entrada de Vehiculos</h3-->
              Fecha del cambio de estado <input name="fecha" type="text" class="form-control" value ='<?php date_default_timezone_set("America/Argentina/Buenos_Aires");echo date("Y-m-d H:i"); ?>' readonly>
              <br>
              Usuario <input name="mail" type="text" class="form-control" value='<?php echo $_COOKIE["USUARIOBLOG"]."(".$_COOKIE["IDUSUARIOBLOG"].")"; ?>' readonly>
              <br>
              Numero de Mensaje 
              <select name="mensaje" class="form-control">
              <?php 
              $listado=Usuario::TraerSoloId();
              foreach ($listado as $dato) 
              { ?>
                <option value = "<?php echo $dato[0]; ?>"><?php echo $dato[0]; ?></option>
              
              <?php } ?>
            
              
              </select>



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
              <button class="btn btn-lg btn-primary btn-block" type="submit">Actualizar Mensaje</button>
    
          </form>

      </div>

    </div>
  </div>
</div>
    <div class="pricing-header mx-auto text-center">
    <section>
        <h5>Administrador: <?php echo $_COOKIE["USUARIOBLOG"];  ?>, ha atendido su pedido.</h5>
    </section>
</div>
   
  </div>

</body>
</html>