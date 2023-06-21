<?php
//var_dump($_POST); SACAR HEADER LOCT

include_once ("AccesoDatos.php");   
include_once ("Vehiculo.php");
include_once ("Estacionado.php");



if (isset($_POST["gnc"])) 
{
    $gnc = "SI";
    }
    else
    {
        $gnc = "NO";
    }


if (isset($_POST ["patente"])){
    $patente = $_POST ["patente"];
    $color = $_POST ["color"];
    
}
else{
    die();
}


$directorio = 'archivos/';
$subirArchivo = $directorio.$patente.".jpg";

if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subirArchivo)) 
{

} 
else 
{
    echo "<h1>•Intentelo Nuevamente... Gracias•</h1>";
    echo "La subida ha fallado, solo admite archivo.jpg/png hasta 2gb";
}
    

if($patente != "")
{
   
        //llena los par. dentro de la clase
        $unVehiculo=Vehiculo::modificarVehiculo($patente,$color,$subirArchivo,$gnc);
       

    header ("Location: vehiculosHacerTabla.php");
} 
 
else
{
    header ("location:error.php");
}



?>