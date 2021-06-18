<?php
if (isset($_POST["patente"])){
	$patente = $_POST["patente"];
}
else
{
	die();
}



include "funciones.php";

$listadoDePatente = leerEntrada ("estacionados.txt","=>");
$encontrado="N";

foreach ($listadoDePatente as $dato) {
	if($dato[0]==$patente){
		$encontrado="S";

		$fechaEntrada=$dato[1];
		$fechaSalida=date ("Y-m-d H:i:s");
		$minutos = tiempoEnMinutos($fechaEntrada, $fechaSalida);
		$precio=calcularPrecio($fechaEntrada, $fechaSalida,$patente);

		$renglon="\n".$patente."=>".$fechaEntrada."=>".$fechaSalida."=>".$precio;
		GuardarArchivo ("cobrados.txt",$renglon);
		pantallaInfo($fechaEntrada, $fechaSalida, $precio,$minutos,$dato[0]);
		break;
	}
}

if($encontrado=="N")
{
        //echo "La patente NO ha ingresado!";
        pantallaInfo("","","","",$patente);
        header ("Location: estacionar.php");
    
}
else
{
	$archivo=fopen("estacionados.txt", "w");
	foreach ($listadoDePatente as $dato) {
		if($dato[0]!=$patente){
			
			$fechaEntrada=$dato[1];
			
			$renglon="\n".$dato[0]."=>".$fechaEntrada."=>".$dato[2]."=>"."x";
			fwrite($archivo,$renglon);
			
		}

	}
	fclose($archivo);
	header ("Location: estacionar.php");


}






?>