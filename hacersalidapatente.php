<?php
    
    include_once ('titulo.php');
    include_once ('funciones.php');

    
    $patente = $_POST['patente'];
    $precioMinuto = 20;
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fechaDeHoy = date("Y-d-m H-i-s");
    $listadoDePatentes = array();

    $archivo = fopen("patente1.txt", "r");

    while(!feof($archivo))
    {
        $renglon = fgets($archivo);
        $datosDeUnaPatente = explode("=>", $renglon);

        if(isset($datosDeUnaPatente[1]))
        {
            $listadoDePatentes[] = $datosDeUnaPatente;
        }

    }

    fclose($archivo);

    $existe = "No";

    foreach($listadoDePatentes as $una)
    {
        if($una[0] == $patente)
        {
            echo "Patente: " . $una[0] ;
            $existe = "Si";
            $precio = calcularPrecio($una[1], $fechaDeHoy, $precioMinuto);
            
        }
    }

    if($existe == "No")
    {
        echo "La patente NO existe!";
    }

?>