<?php
     include_once ("AccesoDatos.php");
     include_once ("titulo.php");
     include_once ("Usuario.php");
     
     session_start();


 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard -<?php echo $_COOKIE["USUARIOBLOG"]; ?> </title>

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
button{
        color: white;
        font-size:15pt ;
        border-radius: 5px;
        margin: 8px 8px;
        cursor: pointer;
        padding:5px;
        box-shadow: 0px 3px 3px  #fff;
        }
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px;     width: 700px; text-align: center;    border-collapse: collapse; }

th {     font-size: 13px;     font-weight: normal;  text-align: center;   padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }


</style>

    </head>

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
                        <a href="colab.php"><i class="fa fa-dashboard"></i>Mi información</a>
                    </li>

                    <li class="">
                        <a href="ticketsColab.php"><i class="fa fa-ticket"></i> Tickets</a>
                    </li>

                    <li class="">
                        <a href="projects.php"><i class="fa fa-list-alt"></i> Proyectos</a>
                    </li>

                    <li class="">
                        <a href="categories.php"><i class="fa fa-align-left"></i> Categorias</a>
                    </li>

                    <li class="">
                        <a href="colab3.php"><i class="fa fa-area-chart"></i> Reportes</a>
                    </li>

                    <li class="">
                        <a href="users.php"><i class="fa fa-users"></i> Usuarios</a>
                    </li>

                    <li class="">
                        <a href="colab.php"><i class="fa fa-child"></i> Sobre Mi</a>
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
                 <?php
                        //include("new_ticket.php");
                        //include("upd_ticket.php");
                    ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/profiles/default.png" alt="">             </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="colab.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                             <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                             <li> <a class="btn btn-outline-primary " href="colab.php" id="botonVolver">Volver</a></li>
                             <li> <a class="btn btn-outline-primary " href="colab1.php" id="botonVolver">Agregar Ticket</a></li>
                                <div class="right_col" role="main"><!-- page content -->
        <div class="">

            <div class="page-title">

                <div class="clearfix"></div>
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                </div>
                    </div>
                        </div>
                    </li>
                </ul>

            </nav>
        </div>

    </div><!-- /top navigation -->    



    <link rel="icon" href="https://i.pinimg.com/originals/2b/b7/ee/2bb7ee6df0647c27083a889a0360dcca.png">
    <div class="right_col" role="main"> <!-- page content -->
        <div class="">
            <div class="page-title">
                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-ticket"></i></div>
                          <div class="count">28</div>
                          <h3>Tickets Pendientes</h3>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-list-alt"></i></div>
                          <div class="count">4</div>
                          <h3>Proyectos</h3>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-th-list"></i></div>
                          <div class="count">2</div>
                          <h3>Categorias</h3>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-users"></i></div>
                          <div class="count">2</div>
                          <h3>Usuarios</h3>
                        </div>
                    </div>
                </div>
                </div>

                <!-- content -->
                <br><br>
                
                <div class="x_panel">
                    <div class="x_title">
                        
                 <form enctype="multipart/form-data" class="form-signin" action="UsuarioMensajeHacer.php" method="POST">
              <div id="tableUser">
            <?php
            Usuario::CrearTablaMensajesColab();
            include "UsuarioMensajeriaListado.php";
            ?>
            </div>
          </form>
   </div>
</div>

 
                <footer><!-- footer content -->
                    <div class="pull-right">
                        <a target="_blank" style="color: #0000ff" >Estacionamientos </a>Scorpions<a style="color: #0000ff; text-decoration: underline;" target="_blank">App</a>
                    </div>
                    <div class="clearfix"></div>
                </footer><!-- /footer content -->
            </div>
        </div>

        

    </body>
</html><script>
    $(function(){
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "action/upload-profile.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
        });
    });
</script>


    
<script type="text/javascript" src="js/ticket.js"></script>
<script type="text/javascript" src="js/VentanaCentrada.js"></script>
<script>
$("#add").submit(function(event) {
  $('#save_data').attr("disabled", true);
  
 var parametros = $(this).serialize();
     $.ajax({
            type: "POST",
            url: "action/addticket.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#result").html("Mensaje: Cargando...");
              },
            success: function(datos){
            $("#result").html(datos);
            $('#save_data').attr("disabled", false);
            load(1);
          }
    });
  event.preventDefault();
})


$( "#upd" ).submit(function( event ) {
  $('#upd_data').attr("disabled", true);
  
 var parametros = $(this).serialize();
     $.ajax({
            type: "POST",
            url: "action/updticket.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#result2").html("Mensaje: Cargando...");
              },
            success: function(datos){
            $("#result2").html(datos);
            $('#upd_data').attr("disabled", false);
            load(1);
          }
    });
  event.preventDefault();
})

    function obtener_datos(id){
        var description = $("#description"+id).val();
        var title = $("#title"+id).val();
        var kind_id = $("#kind_id"+id).val();
        var project_id = $("#project_id"+id).val();
        var category_id = $("#category_id"+id).val();
        var priority_id = $("#priority_id"+id).val();
        var status_id = $("#status_id"+id).val();
            $("#mod_id").val(id);
            $("#mod_title").val(title);
            $("#mod_description").val(description);
            $("#mod_kind_id").val(kind_id);
            $("#mod_project_id").val(project_id);
            $("#mod_category_id").val(category_id);
            $("#mod_priority_id").val(priority_id);
            $("#mod_status_id").val(status_id);
        }

</script>