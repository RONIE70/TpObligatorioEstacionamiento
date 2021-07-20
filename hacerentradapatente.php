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


$directorio = 'archivos/';
$subirArchivo = $directorio.$patente.".jpg";

if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subirArchivo)) 
{
    // echo"<a href='".$subirArchivo."' target='_blank'><img src='".$subirArchivo."' width='150'></a>";
} 
else 
{
    echo "<h1>•Intentelo Nuevamente... Gracias•</h1>";
    echo "La subida ha fallado, solo admite archivo.jpg/png hasta 2gb";
}
    

if($patente != "")
{
	$hora = date("Y-m-d H:i:s"); //."=>".$foto
	$renglon="\n".$patente."=>".$hora."=>".$color."=>".$gnc."=>".$_COOKIE["USUARIO"]."=>x";
	GuardarArchivo ("estacionados.txt",$renglon);

 	header ("Location: estacionar.php");
} 
 
else
{
    header ("location:error.php");
}


?>