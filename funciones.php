<?php

function horaObtenida($fecha)
{
    $datos = explode(" ", $fecha);

    if (isset($datos[1])) {
        $datos[1] = str_replace("-", ":", $datos[1]);
    }
    return $datos[1];
}

function tiempoEnMinutos($fechainicio, $fechafinal)
{
    $minutos = (strtotime($fechainicio) - strtotime($fechafinal)) / 60;
    $minutos = abs($minutos);
    $minutos = floor($minutos);
    return $minutos;
}

function calcularPrecio($fechaEntro, $fechaSalio, $precioMinuto)
{
    $horaEntrada = horaObtenida($fechaEntro);
    $horaSalida = horaObtenida($fechaSalio);

    $minutos = tiempoEnMinutos($horaEntrada, $horaSalida);
    $totalPagar = $minutos * $precioMinuto;

    pantallaInfo($fechaEntro, $fechaSalio, $totalPagar, $minutos);

}

function pantallaInfo($entro, $salio, $precio, $minutos)
{
    echo "<br>Fecha de Ingreso: ".$entro."<br>Fecha de Egreso : ".$salio;
    echo "<br>Tiempo estacionado en minutos: " . $minutos . "<br><h3>Total a abonar: <b>$" . $precio."</b><h3>";

}