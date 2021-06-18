<?php

include_once ('funciones.php');
//include ("estacionamiento.php");

class estacionamiento 
{
	public static function saludar(){
		echo "hola";
	}

	public static function leer($nombreArchivo)
	{
		//$listaDeAutosLeida=array();
		$listaDeAutosLeida=leerEntrada($nombreArchivo.".txt","=>");
		return $listaDeAutosLeida;
	}
	
	public static function CrearTablaEstacionados($nombreArchivo) 
	{
		$listado=estacionamiento::leer($nombreArchivo);

		switch ($nombreArchivo) {
			case 'estacionados':
				$tablaHTML="<h4>ESTACIONADOS</h4><table border=2>";
				$tablaHTML.="<th>";
				$tablaHTML.="PATENTE";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="FECHA/HORA INGRESO";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="COLOR";
				$tablaHTML.="</th>";
				foreach($listado as $dato)      //</td><td>$auto[1]
					{
						$tablaHTML.="<tr><td>$dato[0]</td><td>$dato[1]</td><td>$dato[2]</td></tr>";
					}
				break;
			case 'cobrados':
				$tablaHTML="<h3>COBRADOS</h3><table border=2>";
				$tablaHTML.="<th>";
				$tablaHTML.="Patente";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="Ingreso";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="Salida";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="Precio";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				foreach($listado as $dato)      //</td><td>$auto[1]
					{
					$tablaHTML.="<tr><td>$dato[0]</td><td>$dato[1]</td><td>$dato[2]</td><td>$dato[3]</td></tr>";
					}
					break;
		}
		$tablaHTML.="</table>";
		$archivo=fopen("tabla".$nombreArchivo.".php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);
	}
	

}
?>