<?php
include "funciones.php";
    // var_dump($_GET);
    // echo "<br>";
    // var_dump($_POST);


    if(isset($_POST['correo']))
    {
      $mail=$_POST['correo'];
      $clave = $_POST['pass'];
      //setcookie("USUARIO",$mail);
      //echo "setcookie($mail)";

    }
    else
    {
        die();
    }

    
    $listadoDeUsuarios = leerEntrada ("usuarios.txt","=>");

    $ingreso = "No ingreso";

    foreach($listadoDeUsuarios as $datos)
    {
        if($datos[0] == $mail)
        {
            if($datos[1] == $clave)
            {
                $ingreso = "Ingreso";
                setcookie("USUARIO",$mail);
                header('Location:estacionar.php');
            }
        }
    }

    if($ingreso == "No ingreso")
    {
        header('Location:error.php');
    }

    // var_dump($listadoDeUsuarios);

?>