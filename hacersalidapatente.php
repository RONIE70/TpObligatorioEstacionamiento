<?php

include_once ("funciones.php");
$patente = $_POST['patente'];

date_default_timezone_set("America/Argentina/Buenos_Aires");

if (isset($_POST['patente'])) {
		$patente=$_POST['patente'];
	}else {
		die();
	}

$ahora1=date("Y-m-d H:i:s");
$ahora2=date("Y-m-d H:i:s");
$diferencia=calcularTiempo($ahora1,$ahora2,"%h");
echo $diferencia;
die();

$listadoPatentes=array();

	$archivo=fopen("patente1.txt","r");
	while (!feof($archivo)) 
	{
		$renglon=fgets($archivo);
		$datos=explode("->", $renglon);
		if(isset($datos[1]))
		{
			$listadoPatentes[]=$datos;
		}

	}
	fclose($archivo);

	$ingreso="NO";
	foreach ($listadoPatentes as $datos) 
	{
		if($datos[0]==$patente){
			$ingreso="SI";
			$fechaIni=$datos[1]; //Fecha y hora entrada
			$fechaFin=date("Y-m-d H:i"); //Fecha y hora Salida

			$hora = calcularTiempo($fechaIni, $fechaFin, "%h");
			$minutos = calcularTiempo($fechaIni, $fechaFin, "%i");
			echo "Nro de Patente : ". $datos[0] . "<br>";
			echo "Hora de Entrada: " . $fechaIni . "<br>";
			echo "Hora de Salida : " . $fechaFin . "<br>";
			echo "<br>";
			echo "El vehiculo estuvo estacionado : ";
			echo calcularTiempo($fechaIni, $fechaFin, "%h hora %i minutos") . "<br>" ;

			if($hora>0) {
				$minutos = $minutos + $hora * 60 ;
			}
			echo "El precio x minuto $2.- <br> TOTAL A PAGAR  : $" . $minutos*2;
			break;
		}
	}
	if($ingreso=="NO") {
			echo "La Patente : ". $patente . " NO FUE ENCONTRADA ... <br>";
	}
?>

