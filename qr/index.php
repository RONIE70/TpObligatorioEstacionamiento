<?php

require ("phpqrcode/qrlib.php");

$path = 'images/';
$file = $path.uniqid().".png";

//texto salida
$text = "estacionar@paula.com";
Qrcode::png($text,$file,'L',10,2);

echo "<center> <img src='".$file."'</center>";
?>