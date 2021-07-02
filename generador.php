<?php


/*$Patente="ebb666";
$fechaIngreso= date("Y-m-d  h:i:sa");
$fechaSalida=date("Y-m-d h:i:sa");
$importe="100";
$contador=0;
$renglones="";
$usuario="anonimo";
while ($contador<6)
{
   $renglones .= $Patente.";".$fechaIngreso.";".$usuario .";".$fechaSalida."\n";

		$contador++;

}
aqui le decimos al navegador que vamos a enviar a un archivo del tipo CSV
header("Content-Description: File Transfer");
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=archivo.csv");
echo $renglones;

<div class="text-center">
        <form enctype="multipart/form-data" action="hacerentradapatente.php" method="post" name="formulario">
          <div id="img">
          <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
      <p> Enviar mi archivo: <input name="subir_archivo" type="file" /></p>
      </div>

      #img{
  position: relative;
  top:30px;
  left:185px;
  font-size: 1rem;
  font-family:'Oxygen', sans-serif;
  background:#6ca16e;
  box-shadow: black 3px 3px 2px 1px;
  border-radius: 10px;
  width:60%;
  height: 40%;
  padding:0.8px;
}
#checkboxGnc{
      position: relative;
      top:-13px;
      font-size: 1rem;
      font-family:'Oxygen', sans-serif;
    }
    .display-5{
      font-size: 1rem;
      font-family:'Oxygen', sans-serif;
      position: relative;
      top:-10px;
      left:-185px;
    }*/


include "funciones.php";

function generarCobrados() {
		$arrayCobrados=leerEntrada ("cobrados.txt","=>")
		$renglon="";
		foreach ($arrayCobradosl as $datos){
			$renglon.=$datos[0].";".$datos[1].";".$datos[2];
		}
		creaArchivocsv("cobrados",$renglon);
}

function crearArchivocsv($archivoCobrados,$renglones){
	header("Content-Description: File Transfer");
	header("Content-Type: application/force-download");
	header("Content-Disposition: attachment; filename=" . $nombreArchivo. ".csv");
	echo $renglones;
}

generarEstacionados();

function generarUnCSV($nombreArchivo,$separador) {
		$arrayTemporal=LeerArchivo($nombreArchivo.".txt", $separador);
		$renglones="";
		foreach ($arrayTemporal as $datos){
			for ($columna=0;$columna<count($datos);$columna++ ){
				$renglones.=$datos[$columna];
				if ($columna<count($datos)-1){
					$renglones.=";";
				}	
			}
		}
		creaArchivocsv($nombreArchivo,$renglones);
	}


?>