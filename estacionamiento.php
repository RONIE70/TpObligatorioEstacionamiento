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
	
	public static function CrearTablaEstacionados($nombreArchivo,$usuario) 
	{
		$listado=estacionamiento::leer($nombreArchivo);

		switch ($nombreArchivo) {
			case 'estacionados':
				$tablaHTML="<h4>ESTACIONADOS</h4><table border=3 cellspacing=2 cellpadding=2>";
				$tablaHTML.="<th>";
				$tablaHTML.="PATENTE";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="FECHA/HORA INGRESO";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="COLOR";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="COMBUSTIBLE";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="FOTO";
				$tablaHTML.="</th>";
				$tablaHTML.="<th>";
				$tablaHTML.="MAIL USUARIO";
				$tablaHTML.="</th>";
				foreach($listado as $dato)      //</td><td>$auto[1]
					{
						if($usuario == "TODOS"){
							$tablaHTML.="<tr><td>$dato[0]</td><td>$dato[1]</td><td>$dato[2]</td><td>$dato[3]</td>";
							if(file_exists("archivos/$dato[0].jpg"))
							{
								$tablaHTML.="<td><img src='archivos/$dato[0].jpg'  width='100'></td>";
							}else{
								$tablaHTML.="<td><img src='archivos/predeterminado.png' width='100'></td>";
							}
							$tablaHTML.="<td>$dato[4]</td></tr>";
						
						}
						
						if ($usuario ==$dato[4]){
							$tablaHTML.="<tr><td>$dato[0]</td><td>$dato[1]</td><td>$dato[2]</td><td>$dato[3]</td>";
							if(file_exists("archivos/$dato[0].jpg"))
							{
								$tablaHTML.="<td><img src='archivos/$dato[0].jpg'  width='100'></td>";
							}else{
								$tablaHTML.="<td><img src='archivos/predeterminado.png' width='100'></td>";
							}
							$tablaHTML.="<td>$dato[4]</td></tr>";
						}
					}
				break;
			case 'cobrados':
				$tablaHTML="<h3>COBRADOS</h3><table border=3>";
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
				$tablaHTML.="MAIL USUARIO";
				$tablaHTML.="</th>";
				foreach($listado as $dato)      //</td><td>$auto[1]
					{
					$tablaHTML.="<tr><td>$dato[0]</td><td>$dato[1]</td><td>$dato[2]</td><td>$dato[3]</td></td><td>$dato[4]</td></tr>";
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