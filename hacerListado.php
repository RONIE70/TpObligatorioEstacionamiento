<?php
    $valor=$_POST["cboUsuario"];

    include_once ("estacionamiento.php");
    estacionamiento::CrearTablaEstacionados("estacionados",$valor);
    header ("Location: estacionar.php?usuario=$valor");
   
    ?>