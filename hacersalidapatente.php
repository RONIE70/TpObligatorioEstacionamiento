<?php

include "funciones.php";

if (isset($_POST["patente"])){
	$patente = $_POST["patente"];
}
else
{
	die();
}


$listadoDePatente = leerEntrada ("estacionados.txt","=>");
$encontrado="N";

foreach ($listadoDePatente as $dato) {
	if($dato[0]==$patente){
		$encontrado="S";

		$fechaEntrada=$dato[1];
		$color=$dato[2];
		$gnc=$dato[3];
		//$_COOKIE["USUARIO"]=$_dato[4];
		$fechaSalida=date ("Y-m-d H:i:s");
		$minutos = tiempoEnMinutos($fechaEntrada, $fechaSalida);
		$precio=calcularPrecio($fechaEntrada, $fechaSalida,$patente,$gnc,$color);//."=>".$_COOKIE["USUARIO"]

		$renglon="\n".$patente."=>".$fechaEntrada."=>".$fechaSalida."=>".$precio."=>".$_COOKIE["USUARIO"];
		GuardarArchivo ("cobrados.txt",$renglon);
		pantallaInfo($fechaEntrada, $fechaSalida, $precio,$minutos,$dato[0],$gnc,$color);
		//actualizaEstacionados($patente, $dato[1],$dato[2],$dato[3]);
		break;
	}
}

if($encontrado=="N")
{
        //echo "La patente NO ha ingresado!";
        pantallaInfo("","","","","","",$patente);
        header ("Location: estacionar.php");
    
}
else
{
	$archivo=fopen("estacionados.txt", "w");
	foreach ($listadoDePatente as $dato) {
		if($dato[0]!=$patente){
			
			$fechaEntrada=$dato[1];                                         
			
			$renglon="\n".$dato[0]."=>".$fechaEntrada."=>".$dato[2]."=>".$dato[3]."=>".$dato[4]."=>x";
			fwrite($archivo,$renglon);
			
		}

	}
	fclose($archivo);
	header ("Location: estacionar.php");


}






?>