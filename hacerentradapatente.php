<?php
    
    include_once ('titulo.php');

    
    $patente = $_POST['patente'];

    if($patente != "")
    {
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $ahora = date("Y-d-m H-i-s");
        $renglon = "\n".$patente. "=>" . $ahora;
        $archivo = fopen("patentes.txt", "a");
        fwrite($archivo, $renglon);
        fclose($archivo);
    } else
    {
        echo "ERROR, se debe ingresar una patente";
    }


?>