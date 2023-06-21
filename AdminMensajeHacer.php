<?php
	include_once ("AccesoDatos.php");	
	include_once ("Usuario.php");
	include_once ("titulo.php");

	if (isset($_POST['mail']) && isset($_POST['mensaje']))
	{
		$idMensaje=$_POST['mensaje'];
		$Fecha=$_POST['fecha'];
		$idUsuario=$_COOKIE["IDUSUARIOBLOG"];
		$estado=$_POST['estado'];
		//$idUsuario=Usuario::EncontrarUnUsuario($_POST['mail']);

		
		$registrosActualizados=Usuario::ModificarMensaje($idMensaje,$estado);
		if($registrosActualizados>0)
		{
			header("Location: admin1.php?error=ESTADO ACTUALIZADO");
		}
		else
		{
			header("Location: adminReport.php?error=NO EXISTE EL NUMERO DE MENSAJE ".$idMensaje);
		}	

	}
	else 
	{
		header("Location: UsuarioMensaje.php?error=DATOS ERRONEOS INTENTE NUEVAMENTE");
	}



?>


