<?php

if (isset($_POST ["patente"])){
	$patente = $_POST ["patente"];
	$color = $_POST ["cboColor"];
	$combustible = $_POST ["combustible"];
}
else{
	die();
}

include "funciones.php";

if($patente != "")
{
	$hora = date("Y-m-d H:i:s");
	$renglon="\n".$patente."=>".$hora."=>".$color."=>".$combustible."=>"." ";
	GuardarArchivo ("estacionados.txt",$renglon);

 	header ("Location: estacionar.php");
} 
 
else
{
    header ("location:error.php");
}


?>