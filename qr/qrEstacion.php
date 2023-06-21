<?php
	
	require 'phpqrcode/qrlib.php';
	
	$dir = 'temp/';
	
	if(!file_exists($dir))
		mkdir($dir);
	
	$filename = $dir.'test.png';
	
	$tamanio = 15;
	$level = 'H';
	$frameSize = 1;
	$contenido = 'Chau Profe Gracias por tanto';

	QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
	
	echo '<img src="'.$filename.'" />';

?>