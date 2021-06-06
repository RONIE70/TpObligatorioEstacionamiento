<?php

//include_once "leerIngreso.php";
class estacionamiento 
{
	public static function saludar(){
		echo "hola";
	}

	public static function leer()
	{
		//$listaDeAutosLeida=array();
		$listaDeAutosLeida=leerEntrada("estacionar.txt","=>");
		return $listaDeAutosLeida;
	}
	
	public static function CrearTablaEstacionados() 
	{
		$listado=estacionamiento::leerEntrada();

		$tablaHTML="<table>";
		$tablaHTML.="<th>";
		$tablaHTML.="patente";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Ingreso";
		$tablaHTML.="</th>";
		foreach($listado as $auto)
		{
		$tablaHTML.="<tr><td>"$auto[0]"</td><td>"$auto[1]"</td></tr>";
	    }

		$tablaHTML.="</table>";
		$archivo=fopen("tablaEstacionados.php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);


	}

}


?>