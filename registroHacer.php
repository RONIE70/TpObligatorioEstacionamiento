<?php
include_once ("AccesoDatos.php"); 
include_once ("Usuario.php");

  
if (isset($_POST ["correo"]))
{
    $mail = $_POST['correo'];
    $nombre = $_POST['nombre'];
    
}
else
{
    die();
}

    $clave = $_POST['pass'];
    $copiaclave = $_POST['copiapass'];
    $rol_id=$_POST['rol_id'];
    
    if($clave == $copiaclave)
    {
        $unUsuario=Usuario::DameUnUsuario($nombre, $mail, $clave,$rol_id);
        $UltimoId=$unUsuario->InsertarUnoParametros();
        print("Ultimo ID: $UltimoId");
        
        header('Location:registroaceptado.php');
    } 
    else
    {
        header('Location:error.php');
    }

?>