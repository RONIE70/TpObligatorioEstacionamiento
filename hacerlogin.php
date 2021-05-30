
<?php 
/*var_dump($_GET);

echo "<br>";

var_dump($_POST);*/
if(isset($_POST['correo']))
{
	$mail=$_POST['correo'];
}
else
{
	die();
}

$clave=$_POST['clave'];
$listadoDeUsuarios=array();

$archivo=fopen("usuarios1.txt", "r");

while ( !feof($archivo)) {
	//echo "reglon: ".fgets($archivo) ."<br>";
	$renglon=fgets($archivo);
	$datosDeUnUsuario=explode("=>", $renglon);
	if(isset($datosDeUnUsuario[1]))//$datosDeUnUsuario[0]!=" ")
	{
		$listadoDeUsuarios[]=$datosDeUnUsuario;
	}
	/*var_dump($datosDeUnUsuario);
	echo "<br>";*/
	/*if($datosDeUnUsuario[0] ==$mail)
	{
    	if($datosDeUnUsuario[1]==$clave)
    	{
    		echo "Bienvenido";
    	}
	}*/
}
	fclose($archivo);
	//var_dump($listadoDeUsuarios);
	$ingreso="No Ingreso";
	foreach ($listadoDeUsuarios as $datos)
	{
		if($datos[0]==$mail)
		{
			if($datos[1]==$clave)
			{
				echo "Bienvenido";
				$ingreso="Ingreso";
				break;
			}
		}
	}
	if($ingreso=="No Ingreso")	
	{
		echo "datos erroneos";
	}

 ?>