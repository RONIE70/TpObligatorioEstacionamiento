<?php

    include_once("funciones.php");

    $patente = $_POST['patente'];
    $precioMinuto = 6;
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fechaActual = date("Y-d-m H-i-s");
    $listadoDePatentes = array();

    $archivo = fopen("patentes.txt", "r");

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

    foreach($listadoDePatentes as $unDato)
    {
        if($unDato[0] == $patente)
        {
            echo "Patente: " . $unDato[0] ;
            $existe = "Si";
            $precio = calcularPrecio($unDato[1], $fechaActual, $precioMinuto);
            guardarEgreso($patente,$unDato[1],$precio);
        }
    }

    if($existe == "No")
    {
        echo "La patente NO ha ingresado!";
    }
    else
    {
        
        borrarRegistro("patentes.txt");
        
    }
     ?>

<!DOCTYPE html>
<html lang="en">
<input type="button" value="ENVIAR TICKET" id="guardar" onclick="validarForm()"><br><br>
<table>
<thead>
    <th>Ingreso</th>   
    <th>Salida</th>
    <th>Tiempo</th>
    <th>Precio</th>
</thead>
    <tbody id="tbody">
    </tbody>
    </table>
<p id="parraMayores">Su numero de comprobante es: 

</html>