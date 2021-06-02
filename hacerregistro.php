<?php

    // var_dump($_GET);


    // echo "<br>";

    // var_dump($_POST);

    $mail = $_POST['correo'];
    $clave = $_POST['pass'];
    $copiaclave = $_POST['copiapass'];

    // echo "<br> Su mail es " . $mail . " su clave es " . $clave . " y su copia clave es " . $copiaclave;

    if($clave == $copiaclave)
    {
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $ahora = date("Y-d-m H-i-s");
        $renglon = "\n".$mail. "=>" .$clave. "=>". $ahora;
        $archivo = fopen("usuarios.txt", "a");
        fwrite($archivo, $renglon);
        fclose($archivo);
    } else
    {
        echo "ERROR en clave";
    }


?>