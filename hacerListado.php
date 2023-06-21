<?php
	include_once ("AccesoDatos.php");
	include_once ("Vehiculo.php");
	include_once ("Usuario.php");
	include_once("Estacionado.php");


    $valor=$_POST["cboUsuario"];

  
   Estacionado::CrearTablaEstacionados("estacionados",$valor);
   
   header ("Location: estacionadosHacerTabla.php");
   
    ?>