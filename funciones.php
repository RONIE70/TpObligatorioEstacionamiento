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


function ingresarPatente($patente, $fechactual)
    {
        $archivoEstacionados="estacionados.txt";
        $renglon = "\n".$patente. "=>" .$fechactual;
        guardarArchivoEstacionados($renglon, $archivoEstacionados); /*llama a l f que guarda en estacionados.txt*/
    } 
    
    
function guardarArchivoEstacionados($renglon, $archivoEstacionados)
{
    $archivo = fopen($archivoEstacionados, "a"); /* agrega al archivo los estacionados*/
    fwrite($archivo, $renglon);
    fclose($archivo);
}


function guardarArchivoCobrados($renglon, $archivoCobrados)
{
    $archivo = fopen($archivoCobrados, "a");
    fwrite($archivo, $renglon);
    fclose($archivo);
}

function guardarEgreso($patente, $fechaSalio, $precio)
    {
        $archivoCobrados = "cobrados.txt";
        $renglon = "\n".$patente."=>".$fechaSalio."=>".$precio;
        guardarArchivoCobrados($renglon, $archivoCobrados);
        
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


function calcularPrecio($fechaEntro, $fechaSalio,$patente)
{
    
    $horaEntrada = horaObtenida($fechaEntro);
    $horaSalida = horaObtenida($fechaSalio);

    $minutos = tiempoEnMinutos($horaEntrada, $horaSalida);
    $precioMinuto=3; //hora=180
    $precioHora=2; //hora=120
    $precioEstadia=1; // hora

    if ($minutos <= 60)
    {
        $precio = $minutos * $precioMinuto;
    }
    else
    {
        if($minutos > 60 && $minutos < 720)
        {
        $precio = $minutos * $precioHora;
        }
       else
        {
         $precio = $minutos * $precioEstadia;
        }
        
    }           
    return $precio;

   // actualizaEstacionados($patente, $fechaEntro);
    //pantallaInfo($fechaEntro, $fechaSalio, $precio, $minutos,$patente);
    

}

function pantallaInfo($entro, $salio, $precio, $minutos,$patente)
{
    
    $archivoTicket = fopen ("ultimoTicket.php","w");
   if($entro=="")
   {
    $textoTicket="<h4> LA PATENTE $patente no existe</h4>";
   }
   else
   {
   $textoTicket = "<br><h3>Patente: $patente </h3> Fecha de Ingreso: $entro <br>Fecha de Egreso : $salio<br>Tiempo estacionado en minutos: $minutos <br><h3>Total a abonar: <b>\$ $precio</b><h3>";
    
   }
    fwrite($archivoTicket, $textoTicket);
    fclose($archivoTicket);

}


    function leerEntrada($archivoEntrada)
    {
        $listadoDePatentes = array();

        $archivo = fopen($archivoEntrada, "r");
        
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
        return $listadoDePatentes;
    }

     function actualizaEstacionados($patente, $fechaAnterior)
    {
        $renglon = "\n".$patente. "=>".$fechaAnterior;
        $listadoDePatentes = file_get_contents("estacionados.txt");
        $listadoDePatentes = str_replace($renglon, '', $listadoDePatentes);
        file_put_contents("estacionados.txt", $listadoDePatentes);
    }
    
    ?>
