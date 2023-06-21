<?php

include_once ("AccesoDatos.php");	
include_once ("Vehiculo.php");
include_once ("Usuario.php");
include_once ("Estacionado.php");


if (isset($_POST ["patente"]))
{
	$patente = $_POST ["patente"];
}
else{
	die();
}

if($patente != "")

{
		$mail=$_COOKIE ["USUARIO"];

		$idVehiculo=Vehiculo::DameIdDeEstaPatente($patente);
		$idUsuario=Usuario::DameIdDeEsteMail($mail);
		
		if(Estacionado::validarEntradaPatente($idVehiculo)==0)
		{
			date_default_timezone_set("America/Argentina/Buenos_Aires");

			$fechaIngreso= date("Y-m-d H:i");
			$unEstacionado=Estacionado::DameUnEstacionado($idUsuario,$idVehiculo, $fechaIngreso, "", 0);
			$UltimoId=$unEstacionado->InsertarUnoParametros();
			$ArrayVehiculos=Vehiculo::EncontrarUnVehiculo($patente);
			$color=$ArrayVehiculos[0]["Color"];
			if($color=="color-definir")
			{
			header("Location:frmVehiculoModificar.php?pPatente=$patente");	
			}
			else
			{
				header("Location:estacionar.php");
			}
		}
		else
		{
			header("Location: estacionar.php?error= $patente ya se encuentra estacionado ►VERIFIQUE PATENTE INGRESADA");

		}
		
			
}
 
else
{
    header ("location:error.php");
}


?>