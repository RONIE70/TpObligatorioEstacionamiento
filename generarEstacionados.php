<?php
include_once ("AccesoDatos.php");
include_once ("Vehiculo.php");
include_once ("Usuario.php");
include_once("Estacionado.php");


Estacionado::CrearTablaEstacionados("estacionados",$_COOKIE["USUARIO"]);

Estacionado::generarEstacionado();


?>



