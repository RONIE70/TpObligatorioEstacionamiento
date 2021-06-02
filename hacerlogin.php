
<?php 

    include_once ('titulo.php');

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

while ( !feof($archivo)) 
	{
	
	$renglon=fgets($archivo);
	$datosDeUnUsuario=explode("=>", $renglon);
	if(isset($datosDeUnUsuario[1]))//$datosDeUnUsuario[0]!=" ")
	{
		$listadoDeUsuarios[]=$datosDeUnUsuario;
	}
	
	}
	fclose($archivo);
	
	$ingreso="No Ingreso";
	foreach ($listadoDeUsuarios as $datos)
	{
		if($datos[0]==$mail)
		{
			if($datos[1]==$clave)
			{
				header('Location:index.php');
				$ingreso="Ingreso";
				break;
			}
		}
	}
	if($ingreso=="No Ingreso")	
	{
		header('Location:error.php');
	}

 ?>