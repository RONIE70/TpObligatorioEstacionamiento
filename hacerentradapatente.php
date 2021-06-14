<?php
    
    include_once ('titulo.php');
    include_once ('funciones.php');
    //include_once "estacionamiento.php";
    
    $patente = $_POST['patente']; /*trae la pte del form*/

    //date_default_timezone_set("America/Argentina/Buenos_Aires");
       // $fechactual = date("Y-d-m H-i-s");

    if($patente != "")
    {
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fechactual = date("Y-d-m H:i:s");
        $archivoEstacionados="estacionados.txt";
        ingresarPatente($patente,$fechactual);/*llama a f */
        //estacionamiento::CrearTablaEstacionados();
        header ("location:estacionar.php");
    } 
    else
    {
        header ("location:error.php");
    }

?>