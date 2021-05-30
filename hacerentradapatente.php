<?php 
include_once ('titulo.php');
include_once ("funciones.php");
date_default_timezone_set("America/Argentina/Buenos_Aires");

$patente=$_POST['patente'];

if($patente!=" ")
{
	guardarAuto($patente);
	echo "REGISTRO EXITOSO!! PUEDE ESTACIONAR";
	//header('Location:index.php');
}

else{
	
    header('Location:error.php');
    
}

 ?>