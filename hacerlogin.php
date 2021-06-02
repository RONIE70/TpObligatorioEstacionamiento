<?php

    // var_dump($_GET);
    // echo "<br>";
    // var_dump($_POST);


    if(isset($_POST['correo']))
    {
      $mail=$_POST['correo'];
    }
    else
    {
        die();
    }

    $clave = $_POST['pass'];
    $listadoDeUsuarios = array();

    $archivo = fopen("usuarios.txt", "r");

    while(!feof($archivo))
    {
        // echo "renglon: " . fgets($archivo) . "<br>";
        $renglon = fgets($archivo);
        $datosDeUnUsuario = explode("=>", $renglon);

        if(isset($datosDeUnUsuario[1]))
        {
            $listadoDeUsuarios[] = $datosDeUnUsuario;
        }

        // var_dump($datosDeUnUsuario);

        // echo "<br>";

        // if($datosDeUnUsuario[0] == $mail)
        // {
        //     if($datosDeUnUsuario[1] == $clave)
        //     {
        //         echo "<br>Bienvenido";
        //     }
        // }
    }

    fclose($archivo);

    $ingreso = "No ingreso";

    foreach($listadoDeUsuarios as $datos)
    {
        if($datos[0] == $mail)
        {
            if($datos[1] == $clave)
            {
                echo "Bienvenido";
                $ingreso = "Ingreso";
            }
        }
    }

    if($ingreso == "No ingreso")
    {
        header('Location:error.php');
    }

    // var_dump($listadoDeUsuarios);

?>