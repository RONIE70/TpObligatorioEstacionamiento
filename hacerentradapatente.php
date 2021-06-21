<?php
//var_dump($_POST); SACAR HEADER LOCT

include "funciones.php";

if (isset($_POST["gnc"])) 
{
	$gnc = "GNC";
	}
	else
	{
		$gnc = "SIN GNC";
	}

if (isset($_POST ["patente"])){
	$patente = $_POST ["patente"];
	$color = $_POST ["color"];
	
}
else{
	die();
}


if($patente != "")
{
	$hora = date("Y-m-d H:i:s");
	$renglon="\n".$patente."=>".$hora."=>".$color."=>".$gnc;
	GuardarArchivo ("estacionados.txt",$renglon);

 	header ("Location: estacionar.php");
} 
 
else
{
    header ("location:error.php");
}


?>