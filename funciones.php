<?php

function GuardarArchivo ($nombreArchivo,$renglon){
	$archivo=fopen($nombreArchivo, "a");
	fwrite($archivo,$renglon);
	fclose($archivo);
}

function leerEntrada ($nombreArchivo,$separador){
	$archivo = fopen ($nombreArchivo, "r");
	$arrayDeRetorno = array();
	while (!feof($archivo)) {
		$renglon = fgets($archivo);

		$registro = explode($separador,$renglon);
		
		if (isset($registro[1])){
			$arrayDeRetorno[] = $registro;
		}

	}
	fclose($archivo);
	
	return $arrayDeRetorno;
}

function CrearArchivo($nombreArchivo)
{
    $archivo=fopen($nombreArchivo,"w");
    fwrite($archivo, "");
    fclose($archivo);
  }


/*function actualizaEstacionados($patente,$fechaAnterior,$color,$gnc)
{
    $renglon="\n".$patente."=>".$fechaAnterior."=>".$color."=>".$gnc;
    $listadoDePatentes = file_get_contents("estacionados.txt");
    $listadoDePatentes = str_replace($renglon, '', $listadoDePatentes);
    file_put_contents("estacionados.txt", $listadoDePatentes);
}
//$directorio = 'archivos/';
        //@unlink('archivos/',$directorio.$patente.".jpg");*/

 date_default_timezone_set("America/Argentina/Buenos_Aires");
?>