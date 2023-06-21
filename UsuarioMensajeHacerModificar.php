<?php
	include_once ("AccesoDatos.php");	
	include_once ("Usuario.php");


	if (isset($_POST['mail']) && isset($_POST['mensaje']))
	{
		$Mensaje=$_POST['mensaje'];
		$Fecha=$_POST['fecha'];
		$idUsuario=$_COOKIE["IDUSUARIOBLOG"];
		$estado=$_POST['estado'];
		//$idUsuario=Usuario::EncontrarUnUsuario($_POST['mail']);

		if($idUsuario!=0)
			{
				$UltimoId=Usuario::ModificarUnoMensaje($Fecha, $idUsuario, $Mensaje, $estado);	
					
				header("Location: UsuarioMensajeEnvia.php");
			} 
		else 
			{
				header("Location: colab.php");
			}
	}
	else 
	{
		header("Location: UsuarioMensaje.php?error=DATOS ERRONEOS INTENTE NUEVAMENTE");
	}



?>


