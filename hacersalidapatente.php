<?php
include_once ("AccesoDatos.php");	
include_once ("Vehiculo.php");
include_once ("Usuario.php");
include_once("Estacionado.php");


if (isset($_POST["patente"]))
{
	$patente = $_POST["patente"];
	/*$color=$_POST['color'];

	if (isset($_POST["gnc"]))
	{
		$gnc = "SI";
	}
	else
	{
		$gnc = "NO";
	}*/
}
else
{
	die();
}


$idVehiculo=Vehiculo::DameIdDeEstaPatenteSalida($patente);
$idUsuario=Usuario::DameIdDeEsteMail($_COOKIE['USUARIO']);

if(Estacionado::validarEntradaPatente($idVehiculo)==1)
{
	$miArray = Vehiculo::traerDatosVehiculo($idVehiculo);
	$gnc= $miArray[0]["gnc"];
	$color = $miArray[0]["Color"];

	$fechaEntrada=Estacionado::traerFechaEntrada($idVehiculo);
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	$fechaSalida=date ("Y-m-d H:i");
	$minutos = Estacionado::tiempoEnMinutos($fechaEntrada, $fechaSalida);
	$precio=Estacionado::calcularPrecio($fechaEntrada, $fechaSalida,$patente,$gnc,$color);

	Estacionado::pantallaInfo($fechaEntrada, $fechaSalida, $precio,$minutos,$patente,$gnc,$color);
	
	//$directorio = 'archivos/';
    //unlink ($directorio.$patente.".jpg");

	$unEstacionado=Estacionado::hacerSalidaPatente($idVehiculo,$fechaSalida,$precio,$idUsuario);
	
	header ("location:vehiculoHacerSalida.php");
}
else
{
	header("Location: vehiculoHacerSalida.php?error=$patente NO SE encuentra estacionado en este momento");

}

?>