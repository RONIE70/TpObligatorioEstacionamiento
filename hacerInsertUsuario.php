<?php

include_once ("AccesoDatos.php");
include_once ("Vehiculo.php");
include_once ("Usuario.php");
include_once("Estacionado.php");
                            
if((isset($_POST['nombre']))&&(isset($_POST['email']))&&(isset($_POST['password'])))
     {
          $usuario =Usuario::dameUnUsuario($_POST['nombre'],$_POST['email'],$_POST['password']);
          $usuario->InsertarUsuarioParametros($_POST['nombre'],$_POST['email'],$_POST['password']); 
    }
else
    {
    die();
    }
   //utilización del método de instancia<br>
  print_r($usuario->mostrarDatos());
  print("<br>");
         
 ?>