<?php

class Cliente
{
	public $id_cliente;
 	public $nombre;
 	public $email;    
  	public $instagram; 
  	public $telefono; 
  	public $comentario;
  	public $id_comentario;
  	public $tema;
  	public $fecha;

  	public static function InsertarComentarioCliente($pfecha,$pemail,$pnombre,$pcomentario,$ptema,$ptelefono,$pinstagram)
  	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into cliente (fecha, comentario, telefono, instagram, nombre, email, tema) values ('$pfecha', '$pcomentario', '$ptelefono', '$pinstagram','$pnombre' ,'$pemail' ,'$ptema')");
		
		$consulta->execute();		
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public static function ClienteTraerSoloId()
	{
        $consulta=Cliente::GenerarConsultasCliente ("SELECT id_comentario from cliente");
		return $consulta;

	}	

	public static function QrComentarioCliente()
  	{   
  		Cliente::ClienteTraerSoloId();
  		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT fecha, comentario, telefono, email, tema from cliente ");
		$consulta->execute();
	}

	public static function CrearTablaComentarioCliente() 
	{ 
		$ArraysResultante=Cliente::GenerarConsultasCliente("SELECT id_comentario, fecha, comentario, telefono, instagram, nombre, email, tema from cliente order by fecha desc");

		$tablaHTML="<table align='Center' width='850' HEIGHT='400'>";
		$tablaHTML.="<th>ORDEN</th>";
		$tablaHTML.="<th>FECHA</th>";
		$tablaHTML.="<th>NOMBRE</th>";		
		$tablaHTML.="<th>EMAIL</th>";
		$tablaHTML.="<th>INSTAGRAM</th>";
		$tablaHTML.="<th>TELEFONO</th>";
		$tablaHTML.="<th>TEMA</th>";
		$tablaHTML.="<th>COMENTARIO</th>";

		foreach($ArraysResultante as $dato)
		{
			$tablaHTML.="<tr align='Center' >";
			$tablaHTML.="<td width='100'>".$dato['id_comentario']."</td>";
			$tablaHTML.="<td>".$dato['fecha']."</td>";
			$tablaHTML.="<td>".$dato['nombre']."</td>";
			$tablaHTML.="<td>".$dato['email']."</td>";			
			$tablaHTML.="<td>".$dato['instagram']."</td>";
			$tablaHTML.="<td>".$dato['telefono']."</td>";
			$tablaHTML.="<td>".$dato['tema']."</td>";
			$tablaHTML.="<td>".$dato['comentario']."</td>";
            $tablaHTML.="</tr>";				
		}
		$tablaHTML.="</table>";
		Cliente::CrearArchivosCliente("ClienteComentariosListado.php", $tablaHTML);
	}

	public static function GenerarConsultasCliente($miConsulta) 
    {
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta($miConsulta);
		$consulta->execute();			
		return $consulta->fetchall(); 
  	}

  	public static function CrearArchivosCliente($NombreArchivo, $valor)
  	{
		$archivo=fopen($NombreArchivo,"w");
		fwrite($archivo,$valor);
		fclose($archivo);
  	}
  	

}

?>