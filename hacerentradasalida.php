<?php 

$patente=$_POST['patente'];

$copiapatente=$_POST['copiapatente'];

if($patente==$copiapatente)
{
	date_default_timezone_set("America/Argentina/Buenos_Aires");
	$ahora=date("Y-m-d H:i:s");
	$renglon="\n".$patente."=>".$ahora;	

	$archivo=fopen("patentes1.txt","a");
	fwrite($archivo, $renglon);
	fclose($archivo);
}
else{
	header('Status: 301 Moved Permanently', false, 301);
    header('Location: https://laverdadnoticias.com/__export/1594910599953/sites/laverdad/img/2020/07/16/verificacion_de_datos_correctos_en_infonavit.jpg_577680524.jpg');
}

 ?>