
<?php
     include_once ("AccesoDatos.php");
     include_once ("titulo.php");
     include_once ("Usuario.php");
     include_once ("Cliente.php");
     
     session_start();

     if(!isset($_SESSION['rol']))
     {
        header("location: loginBlog.php");
     }  
     else
     {
       	if($_SESSION['rol'] !=1)
     	{
       		header("location: loginBlog.php");
     	}  
     }    

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reportes</title>


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
        <!-- Animate.css -->
        <link href="css/animate.css/animate.min.css" rel="stylesheet">

        <!-- bootstrap-daterangepicker -->
        <link href="css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="css/custom.min.css" rel="stylesheet">

        <!-- MICSS button[type="file"] -->
        <link rel="stylesheet" href="css/micss.css">


    </head>

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i>Mi información</a>
                    </li>

                    <li class="<?php if(isset($active2)){echo $active2;}?>">
                        <a href="tickets.php"><i class="fa fa-ticket"></i> Tickets</a>
                    </li>

                    <li class="<?php if(isset($active3)){echo $active3;}?>">
                        <a href="projects.php"><i class="fa fa-list-alt"></i> Proyectos</a>
                    </li>

                    <li class="<?php if(isset($active4)){echo $active4;}?>">
                        <a href="categories.php"><i class="fa fa-align-left"></i> Categorias</a>
                    </li>

                    <li class="<?php if(isset($active5)){echo $active5;}?>">
                        <a href="reports.php"><i class="fa fa-area-chart"></i> Reportes</a>
                    </li>

                    <li class="<?php if(isset($active6)){echo $active6;}?>">
                        <a href="users.php"><i class="fa fa-users"></i> Usuarios</a>
                    </li>

                    <li class="<?php if(isset($active8)){echo $active8;}?>">
                        <a href="about.php"><i class="fa fa-child"></i> Sobre Mi</a>
                    </li>

                </ul>
            </div>
        </div><!-- /sidebar menu -->
 
     
<form action="logout.php" method="POST">
  <p class="center"><input id="button" type="submit" value="Cerrar Sesión"></p>
</form>

    <div class="top_nav"><!-- top navigation -->
        <div class="nav_menu">
            <nav><img class= "img" src="./icon/portada.png" height="70">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/profiles/<?php echo $foto_user;?>" alt=""><?php 
      if(isset($_COOKIE["USUARIOBLOG"])){
        echo $_COOKIE["USUARIOBLOG"];
      } else {
        echo "DISCULPE, NO ENCONTRAMOS SU USUARIO";
      }
      ?>
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
                             <li> <a class="btn btn-outline-primary " href="admin1.php" id="botonVolver">Volver</a></li>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- /top navigation -->  


<!--<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/estacionar.css">
  <link href="./css/pricing.css" rel="stylesheet">
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
         font-family: 'Lato', sans-serif;
    font-size: 1rem ;
    text-align: center;
      }
      #botonVolver {
        color:white;
        width: 225px;
        background-color: #1612e9;
        align-content: center;
        font-family: 'Lato', sans-serif;
    font-size: 1rem ;
    text-align: center;
    color: white;
    border-radius: 10px;
    border-width: 20px;
    line-height: 35px;
    text-shadow:5px 5px 5px rgb(134, 201, 240) ;
    letter-spacing: 1px;
    background-color: rgb(41, 145, 243);
    padding: 10px;
    position: relative;
    left:1100px;
    top:-5px;
      }

      #dos {
        background-color:  rgb(93, 173, 226);
        align-content: center;
        font-family: 'Lato', sans-serif;
       font-size: 1rem ;
       text-align: center;
       color: white;
       height: 40px;
      }    
      tbody tr:nth-child(odd) {
  background-color: #ff33cc;
}

tbody tr:nth-child(even) {
  background-color: #e495e4;
}

tbody tr {
  background-image: url(noise.png);
}

table {
  background-color: #ff33cc;
  width: 600px;
}  
a{
    color: white;
    font-size:15pt ;
    border-radius: 5px;
    margin: 8px 8px;
    cursor: pointer;
    padding:5px;
    box-shadow: 0px 3px 3px  #fff;
    }

   #text{
   	 font-family: 'Lato', sans-serif;
       font-size: 1rem ;
       text-align: center;
   }
   #button{
    color: white;
    font-size:15pt ;
    border-radius: 5px;
    margin: 8px 8px;
    cursor: pointer;
    padding:5px;
    box-shadow: 0px 3px 3px  #fff;
    }

    </style>
</head>
<body>
    
        <h5>PERSONAL DEL AREA ADMINISTRACION</h5>

  </head>-->


     <a class="btn btn-outline-primary " href="blogHome.php" id="botonVolver">Volver</a>  
  </div>
  <!-- Fin           ---->

  <?php
    include "MensajeDeError.php";
  ?>

  <!--<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <nav class="my-2 my-md-0 mr-md-3">
        <a class="btn btn-outline-primary" href="ListadoParcial.php">CONSULTAS</a>
        <a class="btn btn-outline-primary" href="administradorFrmUsuarios.php">Usuarios</a>
        <a class="btn btn-outline-primary" href="login.php">Login</a>
    </nav>
  </div>-->
       <body > 	
           <form enctype="multipart/form-data" class="form-signin" action="UsuarioMensajeHacer.php" method="POST">
              
            <?php
            Usuario::CrearTablaMensajes();
            include "UsuarioMensajeriaListado.php";
            ?>

          </form>
   
  
</body>
  
<footer><!-- footer content -->
                    <div class="pull-right">
                        <a target="_blank" style="color: #0000ff" >Estacionamientos </a>Scorpions<a style="color: #0000ff; text-decoration: underline;" target="_blank">App</a>
                    </div>
                    <div class="clearfix"></div>
                </footer><!-- /footer content -->
</html>