<?php

include_once ("AccesoDatos.php"); 
include_once ("Usuario.php");
include_once ("titulo.php");
//require_once ("phpqrcode/qrlib.php");

    if(isset($_POST['correo']))
    {
      $mail=$_POST['correo'];
      $clave = $_POST['pass'];
      $nombre=$_POST['nombre'];
    }
    else
    {
        die();
    }
    
    $existeUsuario = Usuario::ExisteusuarioLogin($mail,$clave,$nombre);
    if ($existeUsuario==1)
    {
        setcookie("USUARIO",$mail);
        header('Location:estacionar.php');
    }

    else
    {
        header('Location:error.php');
    }

 
?>