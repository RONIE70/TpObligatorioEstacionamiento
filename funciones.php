<?php

function GuardarArchivo ($nombreArchivo,$renglon){
	$archivo=fopen($nombreArchivo, "a");
	fwrite($archivo,$renglon);
	fclose($archivo);
}

function leerEntrada ($nombreArchivo,$separador){
	$archivo = fopen ($nombreArchivo, "r");
	$arrayDeRetorno = array();
	while (!feof($archivo)) {
		$renglon = fgets($archivo);

		$registro = explode($separador,$renglon);
		
		if (isset($registro[1])){
			$arrayDeRetorno[] = $registro;
		}

	}
	fclose($archivo);
	
	return $arrayDeRetorno;
}

function CrearArchivo($nombreArchivo)
{
    $archivo=fopen($nombreArchivo,"w");
    fwrite($archivo, "");
    fclose($archivo);
  }

function CalcularTotales($nombreArchivo)
{
	$listadoDeCobrados =  leerEntrada ($nombreArchivo,"=>");
	$totales = 0;

	foreach ($listadoDeCobrados as $dato) {
		$totales +=$dato[3];
	}
	return $totales;
}

 /**************************/
 
function tiempoEnMinutos($fechainicio, $fechafinal)
{
    $minutos = (strtotime($fechainicio) - strtotime($fechafinal)) / 60;/*Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix*/
    $minutos = abs($minutos); /*Devuelve el valor absoluto de minutos*/
    $minutos = floor($minutos);/*Devuelve el siguiente valor de tipo integer (como float), redondeando value si fuera necesario.*/
    return $minutos;
}


function calcularPrecio($fechaEntro,$fechaSalio,$patente,$gnc,$color)
{
    $minutos = tiempoEnMinutos($fechaEntro, $fechaSalio);

    $precioMinuto=3; //hora=180
    $precioHora=2; //hora=120
    $precioEstadia=1; // hora

    $precio = ($minutos * $precioMinuto);

    
    if ($minutos <= 60)
    {
        $precio = $minutos * $precioMinuto;
    }
    else
    {
        if($minutos <= 720)
        {
        $precio = $minutos * $precioHora;
        }
       else
        {
         $precio = $minutos * $precioEstadia;
        }
        
    }  
    if ($gnc == "GNC")
    {
        $precio = $precio+ 50;

    }
    if ($color == "BLANCO")
    {
          $precio = $precio*0.90;
    }         
    return $precio;
}
   

function pantallaInfo($entro, $salio, $precio, $minutos,$patente,$gnc,$color)
{
    
    $archivoTicket = fopen ("ultimoTicket.php","w");

   if($entro=="")
   {
    $textoTicket="<h4> LA PATENTE $patente <br>NO EXISTE</h4>";
   }
   else
   {
    if($gnc=="GNC")
   {
    $textoTicket = "<br><h5>ULTIMO TICKET</h5> <h3>PATENTE: $patente </h3> Combustible: $gnc <br>Color: $color <br> Fecha de Ingreso: $entro <br>Fecha de Egreso : $salio<br>Tiempo estacionado en minutos: $minutos <br><h3>Total a abonar : <b>\$ $precio</b><h3><h5>(incluye $50 impuesto GNC)</h5>";
   }
   else
   {
   $textoTicket = "<br><h5>ULTIMO TICKET</h5> <h3>PATENTE: $patente </h3> Combustible: $gnc <br>Color: $color <br> Fecha de Ingreso: $entro <br>Fecha de Egreso : $salio<br>Tiempo estacionado en minutos: $minutos <br><h3>Total a abonar: <b>\$ $precio</b><h3>";
   }
}
    fwrite($archivoTicket, $textoTicket);
    fclose($archivoTicket);

}

function generarEstacionado($nombreArchivo,$separador)
{
  $listadoDePatentes = leerEntrada ($nombreArchivo,$separador);
  $renglon ="";
  $renglon.= "PATENTE;FECHA ENTRADA;COLOR;COMBUSTIBLE\n";
  foreach ($listadoDePatentes as $dato) 
  {
    $renglon.= $dato[0].";".$dato[1].";".$dato[2].";".$dato[3];
  }
  crearArchivoCsv ("estacionados.csv",$renglon);
}

function crearArchivoCsv ($nombreArchivoCsv,$valores)
{
  header("Content-Description: File Transfer");
  header("Content-Type: application/force-download");
  header("Content-Disposition: attachment; filename=" .$nombreArchivoCsv);
  echo $valores;
}

/*function actualizaEstacionados($patente,$fechaAnterior,$color,$gnc)
{
    $renglon="\n".$patente."=>".$fechaAnterior."=>".$color."=>".$gnc;
    $listadoDePatentes = file_get_contents("estacionados.txt");
    $listadoDePatentes = str_replace($renglon, '', $listadoDePatentes);
    file_put_contents("estacionados.txt", $listadoDePatentes);
}*/

 date_default_timezone_set("America/Argentina/Buenos_Aires");
?>