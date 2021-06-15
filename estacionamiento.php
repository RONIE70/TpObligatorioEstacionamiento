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

		$tablaHTML="<h4>ESTACIONADOS</h4><table border=2>";
		$tablaHTML.="<th>";
		$tablaHTML.="PATENTE";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="FECHA/HORA INGRESO";
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