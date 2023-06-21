<?php
	include_once ("AccesoDatos.php");	
	include_once ("Cliente.php");
	require 'codigo_qr/phpqrcode/qrlib.php';
	phpinfo();

	if (isset($_POST['email']) && isset($_POST['nombre']))
	{
		$nombre=$_POST['nombre'];
		$comentario=$_POST['comentario'];
		$fecha=$_POST['fecha'];
		$instagram=$_POST['instagram'];
		$telefono=$_POST['telefono'];
		$tema=$_POST['radio-631'];
		$email=$_POST['email'];

		//$idUsuario=Usuario::EncontrarUnUsuario($_POST['mail']);

		    $dir = 'temp/';
  			$lugar='Sugerencia a Scorpions';
  			$dirección='Medrano 2052 - CABA';
  			$filename = $dir.'test.png';
  			$tamanio = 6;
  			$level = 'M';
  			$frameSize = 1;
  			$contenido ="'".$lugar."','".$dirección."','".$fecha."','".$email."','".$tema."'";

		if($email!=0)
			{
				$UltimoId=Cliente::InsertarComentarioCliente($fecha,$email,$nombre,$comentario,$tema,$telefono,$instagram);	

				QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
  	
				header("Location: ClienteMensajeEnviado.php");
			} 
		else 
			{
				header("Location: ClienteBlog.php");
			}
	}
	else 
	{
		header("Location: UsuarioMensaje.php?error=DATOS ERRONEOS INTENTE NUEVAMENTE");
	}



?>