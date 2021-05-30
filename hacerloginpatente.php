
<?php 

/*if(isset($_POST['patente']))
{
	$mail=$_POST['copiapatente'];
}
else
{
	die();
}*/

$patente=$_POST['patente'];

$listadoDePatentes=array();

$archivo=fopen("patentes1.txt", "r");

while ( !feof($archivo)) {
	$renglon=fgets($archivo);
	$datosDeUnaPatente=explode("=>", $renglon);
	
	if(isset($datosDeUnaPatente[1]))
	{
		$listadoDePatentes[]=$datosDeUnaPatente;
	}
	
}
	fclose($archivo);
	
	$noencontrada=0;
	foreach ($listadoDePatentes as $datos)
	{
		if($datos[0]==$patente)
		{
			//if($datos[1]==$copiapatente)
			//{
				echo "Bienvenido";
				//$ingreso="Ingreso";
				//break;
			//}
		}
	}
	//if($ingreso=="No Ingreso")	
	//{
		//echo "datos erroneos";
	//}

 ?>


 <!--$limpios = file('salida.txt'); // Utilizo el archivo generado de la salida para comparar con los registrados.
$reg = file('entrada.txt'); // File para comprar los registros (usuarios registrados);

$resultado = array_intersect($limpios, $reg);
foreach($resultado as $ress){
    echo $ress;
}
echo 'Coincidencias: ' .  count($resultado). '<br/>';-->