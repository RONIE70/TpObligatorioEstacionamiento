<?php
class Usuario
{
	public $id;
 	public $nombre;
 	public $foto_user;   
  	public $email;    
  	public $password; 
  	public $rol_id; 
  	public $fechaInscrip;
  	public $estado;
  	public $idMensaje;
    
    
    public static function GenerarConsultasUsuario($miConsulta) 
    {
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta($miConsulta);
		$consulta->execute();			
		return $consulta->fetchall(); 
  	}
  		
  	public static function CrearArchivosUsuario($NombreArchivo, $valor)
  	{
		$archivo=fopen($NombreArchivo,"w");
		fwrite($archivo,$valor);
		fclose($archivo);
  	}
  	
  	public static function CrearArchivoCSVUsuario($NombreArchivo, $valor)
  	{
		header("Content-Description: File Transfer");
		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=$NombreArchivo");
		echo $valor;
  	}
  	
  public static function EncontrarUnUsuario($pEmail) 
  {
		$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT id from usuarios where email='$pEmail'");

		return $ArraysResultante[0]["id"];		
	}
  	
  	public static function InsertarUnoMensaje($pfecha, $pid_usuario, $pmensaje,$pestado)
  	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into mensajeria (fecha, id_usuario, mensaje, estado) values ('$pfecha', '$pid_usuario', '$pmensaje', '$pestado')");
		
		$consulta->execute();		
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

  		
	public static function CrearTablaMensajes() 
	{ 
		$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT m.id, m.fecha, m.id_usuario, u.nombre, m.mensaje, m.estado from mensajeria as m, usuarios as u where m.id_usuario=u.id order by m.id desc");

		$tablaHTML="<table align='center' width='550' HEIGHT='400'>";
		$tablaHTML.="<th>ORDEN</th>";
		$tablaHTML.="<th>FECHA</th>";
		$tablaHTML.="<th>OPERARIO</th>";		
		$tablaHTML.="<th>MENSAJE</th>";
		$tablaHTML.="<th>ESTADO</th>";

		foreach($ArraysResultante as $dato)
		{
			$tablaHTML.="<tr align='Center' >";
			$tablaHTML.="<td width='100'>".$dato['id']."</td>";
			$tablaHTML.="<td>".$dato['fecha']."</td>";			
			$tablaHTML.="<td>".$dato['nombre']."</td>";
			$tablaHTML.="<td>".$dato['mensaje']."</td>";
			$tablaHTML.="<td>".$dato['estado']."</td>";
            $tablaHTML.="</tr>";				
		}
		$tablaHTML.="</table>";
		Usuario::CrearArchivosUsuario("UsuarioMensajeriaListado.php", $tablaHTML);
	}

	public static function CrearTablaMensajesColab() 
	{ 
		$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT m.id, m.fecha, m.id_usuario, u.nombre, m.mensaje, m.estado from mensajeria as m, usuarios as u where m.id_usuario=u.id and u.nombre='Ana' order by m.id desc");

		$tablaHTML="<table align='center' width='800' HEIGHT='400'>";
		$tablaHTML.="<th>ORDEN</th>";
		$tablaHTML.="<th>FECHA</th>";
		$tablaHTML.="<th>OPERARIO</th>";		
		$tablaHTML.="<th>MENSAJE</th>";
		$tablaHTML.="<th>ESTADO</th>";

		foreach($ArraysResultante as $dato)
		{
			$tablaHTML.="<tr align='Center' >";
			$tablaHTML.="<td width='100'>".$dato['id']."</td>";
			$tablaHTML.="<td>".$dato['fecha']."</td>";			
			$tablaHTML.="<td>".$dato['nombre']."</td>";
			$tablaHTML.="<td>".$dato['mensaje']."</td>";
			$tablaHTML.="<td>".$dato['estado']."</td>";
            $tablaHTML.="</tr>";				
		}
		$tablaHTML.="</table>";
		Usuario::CrearArchivosUsuario("UsuarioMensajeriaListado.php", $tablaHTML);
	}

	//5	
	public static function fechaMensaje($pfini, $pffin)  { 
		$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT m.id, m.fecha, m.id_usuario, u.email, m.mensaje, m.estado from mensajeria as m, usuarios as u where m.id_usuario=u.id and date(m.fecha) BETWEEN '$pfini' and '$pffin' order by m.id desc");

		return $ArraysResultante;
	}

	//6
	public static function horaMensaje($pHora) { 
				$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT m.id, m.fecha, m.id_usuario, u.email, m.mensaje, m.estado from mensajeria as m, usuarios as u where m.id_usuario=u.id and HOUR(m.fecha) = '$pHora' order by m.id desc");
		return $ArraysResultante;
	}

	//7
	
	public static function usuarioMensajeFecha($pfini, $pffin, $pUsuario) { 
		$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT m.id, m.fecha, m.id_usuario, u.email, m.mensaje, m.estado from mensajeria as m, usuarios as u where m.id_usuario=u.id and date(m.fecha) BETWEEN '$pfini' and '$pffin' and u.email='$pUsuario' order by m.id desc");
		return $ArraysResultante;
	}

	//8
	public static function usuarioMensaje($pUsuario) { 
		$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT m.id, m.fecha, m.id_usuario, u.email, m.mensaje, m.estado from mensajeria as m, usuarios as u where m.id_usuario=u.id and u.email='$pUsuario' order by m.id desc");
		return $ArraysResultante;
	}

	//9
	public static function estadoMensaje($pEstado) { 
		$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT m.id, m.fecha, m.id_usuario, u.email, m.mensaje, m.estado from mensajeria as m, usuarios as u where m.id_usuario=u.id and m.estado ='$pEstado'order by m.id desc");
		return $ArraysResultante;
	}

	public static function ModificarMensaje($idMensaje,$pestado)
	{
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE mensajeria SET estado='$pestado' WHERE id =$idMensaje");
		    $consulta->execute();
			return $consulta->rowCount();
	}	

	public static function ModificarUnoMensaje($pfecha, $pid_usuario, $pmensaje,$pestado)
  	{
		 $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE mensajeria SET fecha='$pfecha', id_usuario='$pid_usuario', mensaje='$pmensaje',estado='$pestado' WHERE id =$idMensaje");
		    $consulta->execute();
			return $consulta->rowCount();
	}			

	public static function TraerSoloId()
	{
        $ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT id from mensajeria order by id");
		return $ArraysResultante;

	}	

	public static function CrearListado($MIArraysResultante) { 
		$tablaHTML="<table align='Center' width='90%' HEIGHT='400'>";
		$tablaHTML.="<th>TICKET</th>";
		$tablaHTML.="<th>FECHA</th>";
		$tablaHTML.="<th>USUARIO</th>";		
		$tablaHTML.="<th>MENSAJE</th>";
		$tablaHTML.="<th>ESTADO</th>";
		foreach($MIArraysResultante as $dato){
			$tablaHTML.="<tr align='Center' >";
			$tablaHTML.="<td width='90'>".$dato['id']."</td>";
			$tablaHTML.="<td>".$dato['fecha']."</td>";			
			$tablaHTML.="<td>".$dato['email']."</td>";
			$tablaHTML.="<td>".$dato['mensaje']."</td>";
			$tablaHTML.="<td>".$dato['estado']."</td>";
	       $tablaHTML.="</tr>";				
		}
		$tablaHTML.="</table>";
		Usuario::CrearArchivosUsuario("Parcial2Listado.php", $tablaHTML);
	}		
  	
  	public static function CrearTablaMensajesParcial() 
	{ 
		$ArraysResultante=Usuario::GenerarConsultasUsuario("SELECT m.id, m.fecha, m.id_usuario, u.nombre, m.mensaje from mensajeria as m, usuarios as u where m.id_usuario=u.id and m.fecha BETWEEN '2021-09-14' AND '2021-09-22' order by m.id desc");

		$tablaHTML="<table align='Center' width='90%' HEIGHT='400'>";
		$tablaHTML.="<th>ORDEN</th>";
		$tablaHTML.="<th>FECHA</th>";
		$tablaHTML.="<th>OPERARIO</th>";		
		$tablaHTML.="<th>MENSAJE</th>";

		foreach($ArraysResultante as $dato)
		{
			$tablaHTML.="<tr align='Center' >";
			$tablaHTML.="<td width='90'>".$dato['id']."</td>";
			$tablaHTML.="<td>".$dato['fecha']."</td>";			
			$tablaHTML.="<td>".$dato['nombre']."</td>";
			$tablaHTML.="<td>".$dato['mensaje']."</td>";
            $tablaHTML.="</tr>";				
		}
		$tablaHTML.="</table>";
		Usuario::CrearArchivosUsuario("UsuarioMensajeriaListado.php", $tablaHTML);
	}		

 	public static function Existeusuario($pEmail) 
		{
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("SELECT count(nombre) as cantidad from usuarios where email='$pEmail'");
				$consulta->execute(); 
				$ArraysResultante= $consulta->fetchall(); 
				return $ArraysResultante[0]["cantidad"];		
		}
	
	//ESTE METODO SIRVE PARA CUANDO HACEMOS LOGIN
	public static function ExisteusuarioLogin($pEmail, $pPassword, $pNombre) 
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT count(nombre) as nombre from usuarios where email='$pEmail' and password='$pPassword' and nombre='$pNombre'");
			$consulta->execute(); 
			$ArraysResultante= $consulta->fetchall(); 
			return $ArraysResultante[0]["nombre"];		
		}

	public static function ExisteusuarioLoginBlog($pNombre,$pPassword) 
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from usuarios where password='$pPassword' and nombre='$pNombre'");
			$consulta->execute(); 
			$row= $consulta->fetch(PDO::FETCH_NUM) ; 
			return $row;		
		}
	
	/*public static function EncontrarUnUsuario($pEmail) 
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT id from usuarios where email='$pEmail'");
			$consulta->execute(); 
			$ArraysResultante= $consulta->fetchall(); 
			
			return $ArraysResultante[0]["id"];		
		}
*/
	
	public static function DameIdDeEsteMail($pEmail)
		{
			$existeUsuario=Usuario::Existeusuario($pEmail);  		
	  		switch ($existeUsuario) {
				case 0: //Sino Existe
					// Si no encontro ningun registro en la tabla Usuarios que cumpla la condicion...
				    // tengo que ir a dar de Alta el Usuario
					echo "Creo el Usuarios.";
					//Alta Usuario

					$unUsuario=Usuario::DameUnUsuario("Cargar Nombre", $pEmail, "");
					$idUsuario=$unUsuario->InsertarUnoParametros();
					print("Ultimo ID: $idUsuario");	

					break;
				case 1: //Si existe
					// Si encontro un registro en tabla Usuario...
					echo "Traigo el Usuario.<br>";
					$idUsuario = Usuario::EncontrarUnUsuario($pEmail);
					echo "El Id de este Email es:". $idUsuario;

					break;
			}
			return $idUsuario;
  		}

  	
  	public static function DameUnUsuario($pNombre, $pCorreo, $pClave,$prol_id)
  		{
	  	$unUsuario =new Usuario();
		$unUsuario->nombre=$pNombre;
		$unUsuario->email=$pCorreo;
		$unUsuario->password=$pClave;
		$unUsuario->rol_id=$prol_id;
		return $unUsuario;
  		}

  	
  	public function InsertarUnoParametros()
		{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuarios (nombre, email, password, rol_id) values (:nombre,:email,:password,:rol_id)");
		
		$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':email', $this->email, PDO::PARAM_STR);
		$consulta->bindValue(':password', $this->password, PDO::PARAM_STR);
		$consulta->bindValue(':rol_id', $this->rol_id, PDO::PARAM_STR);
		$consulta->execute();		
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
		}

		
	public function mostrarDatos()
		{
	  		return "Metodo mostar:".$this->nombre."  ".$this->email."  ".$this->password."  ".$this->fechaInscrip;
		}
  	public function BorrarUsuario()
		{

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete from usuarios WHERE id=:id");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

		}
	

	public static function TraerTodoLosUsuarios()
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT id, rol_id, nombre, email, password,fechaInscrip from usuarios");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "Usuario");		
		}


	public static function CrearTablaUsuarios($nombreArchivo,$usuario)
		{

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	        $listado =Estacionado::TraerTodoLosUsuarios();;
	        $tablaHTML="";
			switch ($nombreArchivo) 
			{
				case 'usuarios':

					$tablaHTML="<h4>USUARIOS</h4><table  cellspacing=2 cellpadding=2>";
					$tablaHTML.="<th>ID</th>";
					$tablaHTML.="<th>NOMBRE</th>";
					$tablaHTML.="<th>EMAIL</th>";
					$tablaHTML.="<th>PASSWORD</th>";
					$tablaHTML.="<th>FECHA INSCRIPCION</th>";
					//$tablaHTML.="<th>FOTO</th>";
				
					foreach($listado as $dato)      //</td><td>$auto[1]
						{
							if($usuario == "TODOS")
							{
								$tablaHTML.="<tr>";
						       	$tablaHTML.="<td>".$dato["id"]."</td>";
						       	$tablaHTML.="<td>".$dato["nombre"]."</td>";
						       	$tablaHTML.="<td>".$dato["email"]."</td>";
						       	$tablaHTML.="<td>".$dato["fechaInscrip"]."</td>";
						       	$tablaHTML.="<td>".$dato["importe"]."</td>";
						       	$tablaHTML.="<td>".$dato["email"]."</td>";
					
					}
			}
			$tablaHTML.="</table>";
			$archivo=fopen("tabla".$nombreArchivo.".php","w");
			fwrite($archivo,$tablaHTML);
			fclose($archivo);
		}
}
	 
	 
public function ModificarUsuario()
	{

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update usuarios set 
				nombre='$this->nombre',
				email='$this->email',
				password='$this->password',
				fechaInscrip='$this->fechaInscrip'				
				WHERE id='$this->id'");
			return $consulta->execute();
	}



public function ModificarUsuarioParametros()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("update usuarios set 
				nombre=:nombre,
				email=:email,
				password=:password,
				fechaInscrip=:fechaInscrip				
				WHERE id=:id");

			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
			$consulta->bindValue(':email', $this->email, PDO::PARAM_STR);
			$consulta->bindValue(':password', $this->password, PDO::PARAM_STR);
			$consulta->bindValue(':fechaInscrip', $this->fechaInscrip, PDO::PARAM_STR);			
			return $consulta->execute();

	}

  	
public function InsertarUno()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuarios (nombre, email, password, fechaInscrip) values ('$this->nombre','$this->email','$this->password','$this->FechaInscrip')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();

	 }



}