<?php

function horaObtenida($fecha)
{
    $datos = explode(" ", $fecha);/*explode — Divide un string en varios string*/

    /*isset — Determina si una variable está definida y no es null*/
    if (isset($datos[1])) {
        $datos[1] = str_replace('-', ':', $datos[1]); /*str_replace — Reemplaza todas las apariciones del string buscado con el string de reemplazo*/
    }
    return $datos[1];
}

function tiempoEnMinutos($fechainicio, $fechafinal)
{
    $minutos = (strtotime($fechainicio) - strtotime($fechafinal)) / 60;/*Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix*/
    $minutos = abs($minutos); /*Devuelve el valor absoluto de minutos*/
    $minutos = floor($minutos);/*Devuelve el siguiente valor de tipo integer (como float), redondeando value si fuera necesario.*/
    return $minutos;
    /*
However, if you just replace "/" with "-" it will work fine.
<?php
$timestamp = strtotime(str_replace('/', '-', '27/05/1990'));
?>
*/
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

function guardarEgreso($patente, $fechaSalio, $totalPagar)
    {
        $renglon = $patente."=>".$fechaSalio."=>".$totalPagar."\n";
        $archivo = fopen("cobrados.txt", "a");
        fwrite($archivo, $renglon);
        fclose($archivo);
    }

    //crea nuevamente el archivo en blancos.
    /*function borrarRegistro($patente){
        $renglon = "\n".$patente. "=>" .date("Y-d-m H-i-s");
        $archivo=fopen("patentes.txt", "w");
        fwrite($archivo, "");
        fclose($archivo);
    }*/

    function leerEntrada($archivoEntrada)
    {
        $listadoDePatentes = array();

        $archivo = fopen($archivoEntrada, "r");
        
        while(!feof($archivo))
        {
            $renglon = fgets($archivo);
            $datosDeUnaPatente = explode("=>", $renglon);

            if(isset($datosDeUnaPatente[0]))
            {
                $listadoDePatentes[] = $datosDeUnaPatente;
            }
        }
        fclose($archivo);
        return $listadoDePatentes;
    }
    ?>
