<?php 

include_once ("funciones.php");
date_default_timezone_set("America/Argentina/Buenos_Aires");

$patente=$_POST['patente'];

$copiapatente=$_POST['copiapatente'];

if($patente==$copiapatente)
{
	guardarUnAuto($patente);
	echo "REGISTRO EXITOSO!! PUEDE ESTACIONAR";
}
else{
	
    header('Location: https://laverdadnoticias.com/__export/1594910599953/sites/laverdad/img/2020/07/16/verificacion_de_datos_correctos_en_infonavit.jpg_577680524.jpg');
    //header('Location:hacerentradsalida.php');
}

 ?>