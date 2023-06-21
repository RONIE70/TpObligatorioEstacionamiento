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
        <title> <?php echo $_COOKIE["USUARIOBLOG"]; ?> </title>

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
         <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                          
                        </div>
                        <div class="clearfix"></div>

                            <!-- menu profile quick info -->
                                <div class="profile clearfix">
                                    <div class="profile_pic">
                                        <img src="images/profiles/default.png" alt="Lujan" class="img-circle profile_img">
                                    </div>
                                    <div class="profile_info">
                                        <span>Bienvenido,</span>
                                        <h2><?php 
      if(isset($_COOKIE["USUARIOBLOG"])){
        echo $_COOKIE["USUARIOBLOG"];
      } 
      ?>                          <span class=" fa fa-angle-down"></span>
           </h2>
                                    </div>
                                </div>
                            <!-- /menu profile quick info -->

                        <br />



        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i>Mi información</a>
                    </li>

                    <li class="">
                        <a href="admin1.php"><i class="fa fa-ticket"></i> Tickets</a>
                    </li>

                    <li class="">
                        <a href="projects.php"><i class="fa fa-list-alt"></i> Proyectos</a>
                    </li>

                    <li class="">
                        <a href="ClienteComen1.php"><i class="fa fa-align-left"></i> Comentarios</a>
                    </li>

                    <li class="">
                        <a href="admin3.php"><i class="fa fa-area-chart"></i> Reportes</a>
                    </li>

                    <li class="">
                        <a href="users.php"><i class="fa fa-users"></i> Usuarios</a>
                    </li>

                    <li class="">
                        <a href="admin.php"><i class="fa fa-child"></i> Sobre Mi</a>
                    </li>

                </ul>
            </div>
        </div><!-- /sidebar menu -->
    </div>
</div> 

<div class="top_nav"><!-- top navigation -->
        <div class="nav_menu">
            <nav><img class= "img" src="./icon/portada.png" height="70">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/profiles/default.png" alt="">             </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right">

                            <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                             <li> <a class="btn btn-outline-primary " href="admin1.php" id="botonVolver">Volver</a></li>
                              <li><a href="admin.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                             <li><a href="adminReport.php"><i class="fa fa-user"></i> Estado Ticket</a></li>
                            
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- /top navigation -->    
    <style type="text/css">
        #boton{
            width:150px;
        }
    #estadus{
      display: flex;
      justify-content: space-around;
        }
    #inpuText{
        width: 150px;
    }
    </style>     
</head>
<div class="right_col" role="main"><!-- page content -->
<div class="">
<div class="page-title">
<div class="clearfix"></div>
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Criterios de Busqueda</h2>
<ul class="nav navbar-right panel_toolbox">
    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
    </li>
    <li><a class="close-link"><i class="fa fa-close"></i></a>
    </li>
</ul>
<div class="clearfix"></div>
</div>

<!-- form search -->
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reports">
<div class="form-group">
<div class="col-lg-3">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-male"></i></span>
        <select name="project_id" class="form-control">
        <option value="">PROJECTO</option>
          <?php foreach($projects as $p):?>
            <option value="<?php echo $p['id']; ?>" <?php if(isset($_GET["project_id"]) && $_GET["project_id"]==$p['id']){ echo "selected"; } ?>><?php echo $p['name']; ?></option>
          <?php endforeach; ?>
        </select>
    </div>
</div>
</form>
<form>

<div>    
<div class="col-lg-3">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-support"></i></span>
        <select name="priority_id" class="form-control">
        <option value="">PRIORIDAD</option>
          <?php foreach($priorities as $p):?>
            <option value="<?php echo $p['id']; ?>" <?php if(isset($_GET["priority_id"]) && $_GET["priority_id"]==$p['id']){ echo "selected"; } ?>><?php echo $p['name']; ?></option>
          <?php endforeach; ?>
        </select>
    </div>
</div>
</form>
</div>

<div>
<form action="fechaMensaje.php" method="_GET">
<div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">INICIO</span>
      <input type="date" name="start_at" value="<?php if(isset($_GET["start_at"]) && $_GET["start_at"]!=""){ echo $_GET["start_at"]; } ?>" class="form-control" placeholder="Palabra clave">
    </div>
</div>
<div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">FIN</span>
      <input type="date" name="finish_at" value="<?php if(isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){ echo $_GET["finish_at"]; } ?>" class="form-control" placeholder="Palabra clave">
    </div>
</div>
<div class="col-lg-6">
        <button id="boton" class="btn btn-primary btn-block">Procesar</button>
    </div>
</form>
</div>


<div>
    <form action="estadoMensaje.php" method="_GET">
    <div class="form-group">
        <div class="col-lg-3">
            <div class="input-group">
                <span class="input-group-addon">ESTADO</span>
                <select name="estado" class="form-control">
                    <option value="pendiente">Pendiente</option>
                    <option value="en desarrollo">En Desarrollo</option>
                    <option value="terminado">Terminado</option>
                    <option value="cancelado">Cancelado</option>
                </select>
            
            </div>
        </div>
            <div class="col-lg-3">
            <button id="boton"class="btn btn-primary btn-block">Procesar</button>
           </div>
    </div>
    </form>
</div>

<div id="estadus">
<div>
    <form action="usuarioMensaje.php" method="_GET">
        <div class="form-group">
    <div class="col-lg-3">
        <div class="input-group">
            <span class="input-group-addon">USUARIO</span>
            
              <input id="inpuText"name="usuario" class="form-control form-control-lg form-pat" type="text" placeholder="Ingresar usuario">
            
        </div>
        <div class="col-lg-6">
            <button id="boton"class="btn btn-primary btn-block">Procesar</button>
           </div>
       </div>
    </div>
    </form>
</div>


<div>
    <form action="horaMensaje.php" method="_GET">
        <div class="form-group">
    <div class="col-lg-3">
        <div class="input-group">
            <span class="input-group-addon">HORARIO</span>
        
              <input id="inpuText" name="hora" class="form-control form-control-lg form-pat" type="time" min="00" max="24" value="20:00" >
            
        </div>
        <div class="col-lg-6">
            <button id="boton"class="btn btn-primary btn-block">Procesar</button>
           </div>
       </div>
    </div>
    </form>
</div>
</div>

    <form action="adminReport.php" method="_GET">
        <div class="form-group">
    <div class="col-lg-3">
        <div class="input-group">
            <span class="input-group-addon">CAMBIO DE ESTADO</span>
            <div class="form-control form-control-lg form-pat"></div>
        </div>
        <div class="col-lg-6">
            <button class="btn btn-primary btn-block">Procesar</button>
           </div>
       </div>
    </div>
    </form>
</div>
    <!--<div class="col-lg-6">
        <button class="btn btn-primary btn-block">Procesar</button>
    </div>-->

<!-- end form search -->



 <?php
                $users= array();
                if((isset($_GET["status_id"]) && isset($_GET["kind_id"]) && isset($_GET["project_id"]) && isset($_GET["priority_id"]) && isset($_GET["start_at"]) && isset($_GET["finish_at"]) ) && ($_GET["status_id"]!="" ||$_GET["kind_id"]!="" || $_GET["project_id"]!="" || $_GET["priority_id"]!="" || ($_GET["start_at"]!="" && $_GET["finish_at"]!="") ) ) {
                $sql = "select * from ticket where ";
                if($_GET["status_id"]!=""){
                    $sql .= " status_id = ".$_GET["status_id"];
                }

                if($_GET["kind_id"]!=""){
                if($_GET["status_id"]!=""){
                    $sql .= " and ";
                }
                    $sql .= " kind_id = ".$_GET["kind_id"];
                }


                if($_GET["project_id"]!=""){
                if($_GET["status_id"]!=""||$_GET["kind_id"]!=""){
                    $sql .= " and ";
                }
                    $sql .= " project_id = ".$_GET["project_id"];
                }

                if($_GET["priority_id"]!=""){
                if($_GET["status_id"]!=""||$_GET["project_id"]!=""||$_GET["kind_id"]!=""){
                    $sql .= " and ";
                }

                    $sql .= " priority_id = ".$_GET["priority_id"];
                }



                if($_GET["start_at"]!="" && $_GET["finish_at"]){
                if($_GET["status_id"]!=""||$_GET["project_id"]!="" ||$_GET["priority_id"]!="" ||$_GET["kind_id"]!="" ){
                    $sql .= " and ";
                }

                    $sql .= " ( date_at >= \"".$_GET["start_at"]."\" and date_at <= \"".$_GET["finish_at"]."\" ) ";
                }

                       // $users = mysqli_query($con, $sql);

                }else{
                       // $users = mysqli_query($con, "select * from ticket order by created_at desc");

             }

   // if(@mysqli_num_rows($users)>0){
        // si hay reportes
        $_SESSION["report_data"] = $users;
    ?>
        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>Usuario</th>
                        <th>Asunto</th>
                        <th>Proyecto</th>
                        <th>Tipo</th>
                        <th>Categoria</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Ultima Actualizacion</th>
                      <!--  <th>Observaciones</th>-->
                    </thead>
                    <div class="input-group">
                                        <span class="input-group-addon">Pedido al Usuario</span>
                                        <input type="text" class="form-control" id="q" placeholder="Accion a realizar" onkeyup='load(1);'>
                            </div>
            <?php
            $total = 0;
            foreach($users as $user){
                $project_id=$user['project_id'];
                $priority_id=$user['priority_id'];
                $kind_id=$user['kind_id'];
                $category_id=$user['category_id'];
                $status_id=$user['status_id'];

                $status=mysqli_query($con, "select * from status where id=$status_id");
                $category=mysqli_query($con, "select * from category where id=$category_id");
                $kinds = mysqli_query($con,"select * from kind where id=$kind_id");
                $project  = mysqli_query($con, "select * from project where id=$project_id");
                $medic = mysqli_query($con,"select * from priority where id=$priority_id");

                
                ?>
                <tr>
                <td><?php echo $user['title'] ?></td>
                <?php foreach($project as $pro){?>
                <td><?php echo $pro['name'] ?></td>
                <?php } ?>
                <?php foreach($kinds as $kind){?>
                <td><?php echo $kind['name'] ?></td>
                <?php } ?>
                <?php foreach($category as $cat){?>
                <td><?php echo $cat['name']; ?></td>
                <?php } ?>
                 <?php foreach($medic as $medics){?>
                <td><?php echo $medics['name']; ?></td>
                <?php } ?>
                <?php foreach($status as $stat){?>
                <td><?php echo $stat['name']; ?></td>
                 <?php } ?>
                <td><?php echo $user['created_at']; ?></td>
                <td><?php echo $user['updated_at']; ?></td>
                <td><div class="input-group">
                                    
                                        <input type="text" class="form-control" id="q" placeholder="Mensaje" onkeyup='load(1);'>
                            </div></td>
                </tr>
             <?php  
                
                }

              ?>   
       <?php

       /* }else{
            echo "<p class='alert alert-danger'>No hay tickets</p>";
        }*/


        ?>
     </table>
     
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /page content -->
    
<?php //include "footer.php" ?>
