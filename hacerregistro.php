<?php
include "funciones.php";
  
if (isset($_POST ["correo"]))
{
    $mail = $_POST['correo'];
    
}
else
{
    die();
}

    $clave = $_POST['pass'];
    $copiaclave = $_POST['copiapass'];

    if($clave == $copiaclave)
    {
       
        $hora = date("Y-m-d H:i:s");
        $renglon = "\n".$mail."=>".$clave."=>".$hora;
        GuardarArchivo("usuarios.txt",$renglon);
        
        header('Location:registroaceptado.php');
    } 
    else
    {
        header('Location:error.php');
    }


?>