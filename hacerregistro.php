<?php
include "funciones.php";
    // var_dump($_GET);


    // echo "<br>";

    // var_dump($_POST);
if (isset($_POST ["correo"]))
{
    $mail = $_POST['correo'];
    $clave = $_POST['pass'];
    $copiaclave = $_POST['copiapass'];
}
else
{
    die();
}

    // echo "<br> Su mail es " . $mail . " su clave es " . $clave . " y su copia clave es " . $copiaclave;

    if($clave == $copiaclave)
    {
        //date_default_timezone_set("America/Argentina/Buenos_Aires");
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