<?php

include_once ('funciones.php');
//include ("estacionamiento.php");

class estacionamiento 
{
	public static function saludar(){
		echo "hola";
	}

	public static function leer()
	{
		//$listaDeAutosLeida=array();
		$listaDeAutosLeida=leerEntrada("estacionados.txt","=>");
		return $listaDeAutosLeida;
	}
	
	public static function CrearTablaEstacionados() 
	{
		$listado=estacionamiento::leer();

		$tablaHTML="<h4>Estacionados</h4><table border=1>";
		$tablaHTML.="<th>";
		$tablaHTML.="patente";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Ingreso";
		$tablaHTML.="</th>";
		
		foreach($listado as $dato)      //</td><td>$auto[1]
		{
		$tablaHTML.="<tr><td>$dato[0]</td><td>$dato[1]</td></tr>";
		}

		$tablaHTML.="</table>";
		$archivo=fopen("tablaEstacionados.php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);


	}

}


?>