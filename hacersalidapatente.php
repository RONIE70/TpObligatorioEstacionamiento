<?php

    //include_once "estacionamiento.php";
    include_once ('funciones.php');

    $patente = $_POST['patente'];
    
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fechaActual = date("Y-d-m H:i:s");
    /*$listadoDePatentes = array();*/
   
    

    $archivoEntrada = "estacionados.txt";
    $listadoDePatentes = leerEntrada($archivoEntrada);//lee los registros de los vehículos estacionados
    
    $existe = "No";

    foreach($listadoDePatentes as $unDato)
    {
        if($unDato[0] == $patente)
        {
            echo "Patente: " . $unDato[0] ;
            $existe = "Si";
            $fechaAnterior=$unDato[1];
            $precio = calcularPrecio($fechaAnterior, $fechaActual,$unDato[0]);
            $minutos=$precio;
            guardarEgreso($patente,$fechaAnterior,$fechaActual,$precio);
            
            pantallaInfo($fechaAnterior, $fechaActual, $precio,$minutos,$unDato[0]);
            //estacionamiento::CrearTablaEstacionados();
            actualizaEstacionados($patente, $fechaAnterior);
            header ("Location: estacionar.php");
        }
    }

    if($existe == "No")
    {
        //echo "La patente NO ha ingresado!";
        pantallaInfo("","","","",$patente);
        header ("Location: estacionar.php");
    }
    //pantallaInfo($fechaEntro, $fechaSalio, $precio, $minutos,$patente);
     ?>
