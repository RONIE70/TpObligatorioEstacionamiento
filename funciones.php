<?php

    include_once ('titulo.php');

   /* function guardarAuto($patente)
    {
        $horaEntro=date("Y-d-m H-i-s");
        $renglon= "\n".$patente ." => ". $horaEntro;
        $archivo=fopen("patente1.txt", "a");

        fwrite($archivo, $renglon);
        fclose($archivo);
    }*/

function obtenerHora($fecha)
{
    $datos = explode(" ", $fecha);

    if (isset($datos[1])) {
        $datos[1] = str_replace("-", ":", $datos[1]);
    }
    return $datos[1];
}

function minutosTranscurridos($fecha_i, $fecha_f)
{
    $minutos = (strtotime($fecha_i) - strtotime($fecha_f)) / 60;
    $minutos = abs($minutos);
    $minutos = floor($minutos);
    return $minutos;
}

function calcularPrecio($fechaCuandoEntro, $fechaCuandoSalio, $precioMinuto)
{
    $horaCuandoEntro = obtenerHora($fechaCuandoEntro);
    $horaCuandoSalio = obtenerHora($fechaCuandoSalio);

    $minutos = minutosTranscurridos($horaCuandoEntro, $horaCuandoSalio);
    $totalPagar = $minutos * $precioMinuto;

    mostrarInfo($fechaCuandoEntro, $fechaCuandoSalio, $totalPagar, $minutos);

}

function mostrarInfo($entro, $salio, $precio, $minutos)
{
    echo "<br>Fecha que ingresó: ".$entro."<br>Fecha que salió: ".$salio;
    echo "<br>Minutos estacionado: " . $minutos . "<br><h3>Total a pagar: <b>$" . $precio."</b><h3>";

}


?>