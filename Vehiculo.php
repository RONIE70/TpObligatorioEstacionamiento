<?php
class Vehiculo
{
	public $id;
 	public $Patente;  
  	public $Color;    
  	public $Foto;
  	public $GNC;
    
public static function RetornaArrayVehiculos()
    {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM vehiculos");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "Vehiculo");     
    }

public static function traerDatosVehiculo($pid_vehiculo) 
	{
			
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from vehiculos where id='$pid_vehiculo'");
	
			$consulta->execute(); 

			//Obtengo un arrays con todos los registros q cumplen la condicion e la consulta
			$ArraysResultante= $consulta->fetchall(); 
			
			//0 si no lo encuentra / 1 si esta la patente

			//return $ArraysResultante[0]["fechaIngreso"];
			return $ArraysResultante;		
	}
  	
public static function DameIdDeEstaPatente($pPatente)
{
	$existeVehiculo=Vehiculo::ExistePatente($pPatente);  		
  		switch ($existeVehiculo) 
  		{
			case 0: //Sino Existe
				// Si no encontro ningun registro en la tabla Vehiculos que cumpla la condicion...
			    // tengo que ir a dar de Alta el Vehiculo
				echo "Creo el vehiculos.";
				//Alta Vehiculo

				$unVehiculo=Vehiculo::DameUnVehiculo($pPatente, "color-definir", "imagen-definir", "tipo-sindefinir", "modelo-sin definir", "no");
				$idVehiculo=$unVehiculo->InsertarUnoParametros();
				print("Ultimo ID: $idVehiculo");	

				break;
			case 1: //Si existe
				// Si encontro un registro en tabla Vehiculo...
				echo "Traigo el vehiculos.<br>";
				$idVehiculo = Vehiculo::DameElID($pPatente);
				echo "El Id de esta Patente es:". $idVehiculo;

				break;
		}
		return $idVehiculo;
  	}

public static function DameIdDeEstaPatenteSalida($pPatente)
{
	$existeVehiculo=Vehiculo::ExistePatente($pPatente);  		
  		switch ($existeVehiculo)
  		{
			case 0: 
				$idVehiculo=0;
				break;
			case 1: //Si existe
				// Si encontro un registro en tabla Vehiculo...
				echo "Traigo el vehiculos.<br>";
				$idVehiculo = Vehiculo::DameElID($pPatente);
				echo "El Id de esta Patente es:". $idVehiculo;

				break;
		}
		return $idVehiculo;
}
  	
public static function ExistePatente($pPatente) 
{
			//Creo un objeto de acceso a datos, si existe uso el que ya tengo
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

			//Genero la consulta sql
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT count(patente) as cantidad from vehiculos where Patente='$pPatente'");
			$consulta->execute(); //se ejecuta

			//Obtengo un arrays con todos los registros q cumplen la condicion e la consulta
			$ArraysResultante= $consulta->fetchall(); 
			//var_dump($ArraysResultante[0]);
			
			//Cuento la cantidad de registros
			//echo "cantidad de filas: ".$ArraysResultante[0]["cantidad"]."<br>";

			return $ArraysResultante[0]["cantidad"];		
}
  	
public static function DameUnVehiculo($pPatente, $pColor, $pFoto, $pGNC)
{
	  	$unVehiculo =new Vehiculo();
		$unVehiculo->Patente=$pPatente;
		$unVehiculo->Color=$pColor;
		$unVehiculo->Foto=$pFoto;
		$unVehiculo->GNC=$pGNC;

		return $unVehiculo;
}

public function InsertarUnoParametros()
{
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into Vehiculos (Patente, Color, Foto, gnc ) values (:patente,:color,:foto,:GNC)");//parametro
		
				$consulta->bindValue(':patente',$this->Patente, PDO::PARAM_STR);
				$consulta->bindValue(':color', $this->Color, PDO::PARAM_STR);
				$consulta->bindValue(':foto', $this->Foto, PDO::PARAM_STR);
				$consulta->bindValue(':GNC', $this->GNC, PDO::PARAM_STR); //this tipo dato, arriba

				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
}

 	
public static function DameElID($pPatente) 
{
			//Creo un objeto de acceso a datos, si existe uso el que ya tengo
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

			//Genero la consulta sql
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT id from vehiculos where Patente='$pPatente'");

			//Ejecuto la consulta
			$consulta->execute(); 

			//Obtengo un arrays con todos los registros q cumplen la condicion e la consulta
			$ArraysResultante= $consulta->fetchall(); 

			return $ArraysResultante[0]["id"];		
}
    
public static function EncontrarUnVehiculo($pPatente) 
{
			//Creo un objeto de acceso a datos, si existe uso el que ya tengo
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

			//Genero la consulta sql
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT id, Patente, Color, Foto, gnc from vehiculos where Patente='$pPatente'");

			//Ejecuto la consulta
			$consulta->execute(); 

			//Cuento la cantidad de registros
			//echo "cantidad de filas: ".$consulta->rowCount()."<br>";

			//Obtengo un arrays con todos los registros q cumplen la condicion e la consulta
			$ArraysResultante= $consulta->fetchall(); 

			//var_dump($ArraysResultante);

			//echo "cantidad de filas: ".$ArraysResultante."<br>";

			//Si la cantidad de filas es mayor a 0 
			/*if ($catidadFilas>0) 
			{
				foreach($ArraysResultante as $fila) {
					echo "<br>------- Id: ".$fila["id"];
					echo "<br>-- Patente: ".$fila["Patente"];
					echo "<br>---- Color: ".$fila['Color'];
					echo "<br>----- Foto: ".$fila['Foto'];									
				}
			}*/
				
			return $ArraysResultante;		
}
 
  	
public function BorrarVehiculo()
{

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete from vehiculos WHERE id=:id");	
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
			$consulta->execute();
			return $consulta->rowCount();

}

public static function modificarVehiculo($pPatente,$pColor,$pFoto,$pgnc)
{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				UPDATE vehiculos SET Color='$pColor', Foto='$pFoto', gnc='$pgnc' where Patente='$pPatente'" );	
						
			$consulta->execute();
			return $consulta->rowCount();
}
	 
}