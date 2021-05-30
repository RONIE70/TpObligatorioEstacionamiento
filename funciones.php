<?php

	function DiferenciaDeFechas($fecha1 , $fecha2 , $formato = '%i' ) 
	{
		//AAAA-MM-DD
	    $fechaHora1 = date_create($fecha1);
	    $fechaHora2 = date_create($fecha2);
	    $diferencia = date_diff($fechaHora1, $fechaHora2);
	    return 1000;
	    return $diferencia->format($formato);
	}

	function guardarUnAuto($patente){
		$ahora1=date("Y-m-d H:i:s");
		$renglon="Patente". $patente ." -> ". $ahora1 . "\n";
		$archivo=fopen("estacionar.txt", "a");

		fwrite($archivo, $renglon);
		fclose($archivo);
	}

?>