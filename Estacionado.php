<?php
class Estacionado
{
	public $id;
 	public $Id_usuario;  
  	public $Id_vehiculo;    
  	public $FechaIngreso;
  	public $FechaSalida;    
  	public $importe;


	public static function crearArchivoCsv ($nombreArchivoCsv,$valores)
		{
		  header("Content-Description: File Transfer");
		  header("Content-Type: application/force-download");
		  header("Content-Disposition: attachment; filename=" .$nombreArchivoCsv);
		  echo $valores;
		}

	public static function CalcularTotales()
		{
			 $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		     $consulta =$objetoAccesoDato->RetornarConsulta("SELECT SUM(importe)as Totales FROM estacionados");
		     $consulta->execute();           
		     $ArraysResultante= $consulta->fetchAll(); 
			 return $ArraysResultante[0]["Totales"];
		}

	public static function CalcularTickets()
		{
			 $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		     $consulta =$objetoAccesoDato->RetornarConsulta("SELECT COUNT(importe) as Tickets FROM estacionados");
		     $consulta->execute();           
		     $ArraysResultante= $consulta->fetchAll(); 
			 return $ArraysResultante[0]["Tickets"];
		}


	public static function generarEstacionado()
		{
		  $listadoDePatentes = Estacionado::RetornaArrayEstacionados();
		 
		  $renglon= "PATENTE;FECHA ENTRADA;COLOR;COMBUSTIBLE;USUARIO\n";
		  foreach ($listadoDePatentes as $dato) 
		  {
		    $renglon.= $dato["Patente"].";".$dato["fechaIngreso"].";".$dato["Color"].";".$dato["gnc"].";".$dato["email"]."\n";
		  }
		  Estacionado::crearArchivoCsv ("estacionados.csv",$renglon);
		}

	public static function generarAutocompletar() //Funcion para crear el archivo  js/funcionAutoCompletar.js 
		{
			$arrayPatentes = Estacionado::RetornaArrayEstacionados();
			$ListadoPatentes="";
			foreach($arrayPatentes as $datos){
				$ListadoPatentes.="\"$datos[0]\","; 
			}

			$textoDelArchivoJS="$(function(){
			             
						  var patentes = [ 
						    	
						    $ListadoPatentes	

						  ];

						  // setup autocomplete function pulling from patentes[] array
						  $('#autocomplete').autocomplete({
						    lookup: patentes,
						    onSelect: function (suggestion) {
						      var thehtml = '<strong>patente: </strong> ' + suggestion.value + ' <br> <strong>ingreso: </strong> ' + suggestion.data;
						      $('#outputcontent').html(thehtml);
						         $('#botonIngreso').css('display','none');
			      						console.log('aca llego');
						    }
						  });

						});";
						
			$archivo=fopen("js/funcionAutoCompletar.js","w");
			fwrite($archivo, $textoDelArchivoJS);
			fclose($archivo);		
		}


	public static function traerDatos()
		{        
	        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	        $consulta =$objetoAccesoDato->RetornarConsulta("SELECT e.*, v.Patente,v.Foto,u.email FROM estacionados as e, vehiculos as v, usuarios as u WHERE e.id_vehiculo=v.id and e.id_usuario=u.id");
	        $consulta->execute(); 
	        $ArraysResultante= $consulta->fetchAll(); 
			return $ArraysResultante;
	    }


	public static function RetornaTodosEstacionados()
	    {
	            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	            $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM estacionados");
	            $consulta->execute();           
	            return $consulta->fetchAll(PDO::FETCH_CLASS, "Estacionado");    

	    }

	public static function RetornaTodosCobrados()
	    {
	            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	            $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM estacionados WHERE Importe IS NOT NULL");
	            $consulta->execute();           
	            return $consulta->fetchAll(PDO::FETCH_CLASS, "Estacionado");    

	    }        

	public static function RetornaArrayEstacionados()
	    {
	            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	            $consulta =$objetoAccesoDato->RetornarConsulta("SELECT e.*,v.*,u.* FROM estacionados as e, vehiculos as v , usuarios as u where e.id_vehiculo= v.id and  e.id_usuario=u.id");
	            $consulta->execute();           
	            return $consulta->fetchAll();     
	    }

	public static function CrearTablaEstacionados($nombreArchivo,$usuario) 
		{
			
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	        $listado =Estacionado::traerDatos();;
	        $tablaHTML="";
			switch ($nombreArchivo) 
			{
				case 'estacionados':

					$tablaHTML="<table cellspacing=2 cellpadding=2>";
					$tablaHTML.="<th>ID</th>";
					$tablaHTML.="<th>PATENTE</th>";
					$tablaHTML.="<th>FECHA/HORA INGRESO</th>";
					$tablaHTML.="<th>FECHA/HORA SALIDA</th>";
					$tablaHTML.="<th>IMPORTE</th>";
					$tablaHTML.="<th>MAIL USUARIO</th>";
					$tablaHTML.="<th>FOTO</th>";
					
					foreach($listado as $dato) 
						{
							if($usuario == "TODOS")
							{
								$tablaHTML.="<tr>";
						       	$tablaHTML.="<td>".$dato["id"]."</td>";
						       	$tablaHTML.="<td>".$dato["Patente"]."</td>";
						       	$tablaHTML.="<td>".$dato["fechaIngreso"]."</td>";
						       	$tablaHTML.="<td>".$dato["fechaSalida"]."</td>";
						       	$tablaHTML.="<td>".$dato["importe"]."</td>";
						       	$tablaHTML.="<td>".$dato["email"]."</td>";

							
								
								if(file_exists($dato["Foto"]))
								{
									$tablaHTML.="<td><img src='".$dato["Foto"]."'  width='80'></td>";
								}
								else
								{
									$tablaHTML.="<td><img src='archivos/predeterminado.png' width='100'></td>";
								}
								
								$tablaHTML.="</tr>";
							
							}
							else
							{
								if ($usuario ==$dato["email"])
								{
									$tablaHTML.="<tr>";
							       	$tablaHTML.="<td>".$dato["id"]."</td>";
							       	$tablaHTML.="<td>".$dato["Patente"]."</td>";
							       	$tablaHTML.="<td>".$dato["fechaIngreso"]."</td>";
							       	$tablaHTML.="<td>".$dato["fechaSalida"]."</td>";
							       	$tablaHTML.="<td>".$dato["importe"]."</td>";
							       	$tablaHTML.="<td>".$dato["email"]."</td>";
									
									
									if(file_exists($dato["Foto"]))
									{
										$tablaHTML.="<td><img src='".$dato["Foto"]."'  width='80'></td>";
									}
									else
									{
										$tablaHTML.="<td><img src='archivos/predeterminado.png' width='100'></td>";
									}
									$tablaHTML.="</tr>";
								}
							}
							
							
						}
					break;
				case 'cobrados':
					$tablaHTML="<table >";
					$tablaHTML.="<th>Patente</th>";
					$tablaHTML.="<th>Ingreso</th>";
					$tablaHTML.="<th>Salida</th>";
					$tablaHTML.="<th>Precio</th>";
					$tablaHTML.="<th>USUARIO SALIDA</th>";
					foreach($listado as $dato)
						{
						$tablaHTML.="<tr><td>$dato[0]</td><td>$dato[3]</td><td>$dato[4]</td><td>$dato[5]</td></td><td>$dato[6]</td></tr>";
						}
						break;
			}
			$tablaHTML.="</table>";
			$archivo=fopen("tabla".$nombreArchivo.".php","w");
			fwrite($archivo,$tablaHTML);
			fclose($archivo);
		}

	public static function pantallaInfo($entro, $salio, $precio, $minutos,$patente,$gnc,$color)
		{
			    //$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
			     
			    $archivoTicket = fopen ("ultimoTicket.php","w");

			   if($entro=="")
			   {
			    $textoTicket="<h4> LA PATENTE $patente <br>NO EXISTE</h4>";
			   }
			   else
			   {
			    if($gnc=="SI" || $gnc=="si")
			   {
			    $textoTicket = "<br><h5>ULTIMO TICKET</h5> <h3>PATENTE: $patente </h3> GNC: $gnc -ADICIONAL $50 Dec.A12- <br>Color: $color <br> Fecha de Ingreso: $entro <br>Fecha de Egreso : $salio<br>Tiempo estacionado en minutos: $minutos <br><h3>Total a abonar : <b>\$ $precio</b><h3>";
			   }
			   else
			   {
			   $textoTicket = "<br><h5>ULTIMO TICKET</h5> <h3>PATENTE: $patente </h3> GNC: $gnc <br>Color: $color <br> Fecha de Ingreso: $entro <br>Fecha de Egreso : $salio<br>Tiempo estacionado en minutos: $minutos <br><h3>Total a abonar: <b>\$ $precio</b><h3>";
			   }
			}
			    fwrite($archivoTicket, $textoTicket);
			    fclose($archivoTicket);

		}

	public static function tiempoEnMinutos($fechainicio, $fechafinal)
		{
		    $minutos = (strtotime($fechainicio) - strtotime($fechafinal)) / 60;/*Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix*/
		    $minutos = abs($minutos); /*Devuelve el valor absoluto de minutos*/
		    $minutos = floor($minutos);/*Devuelve el siguiente valor de tipo integer (como float), redondeando value si fuera necesario.*/
		    return $minutos;
		}


	public static function calcularPrecio($fechaEntro,$fechaSalio,$patente,$gnc,$color)
	{
	    $minutos = Estacionado::tiempoEnMinutos($fechaEntro, $fechaSalio);

	    $precioMinuto=3; //hora=180
	    $precioHora=2; //hora=120
	    $precioEstadia=1; // hora

	    $precio = ($minutos * $precioMinuto);

	    
	    if ($minutos <= 60)
	    {
	        $precio = $minutos * $precioMinuto;
	    }
	    else
	    {
	        if($minutos <= 720)
	        {
	        $precio = $minutos * $precioHora;
	        }
	       else
	        {
	         $precio = $minutos * $precioEstadia;
	        }
	        
	    }  
	    if ($gnc == "SI" || $gnc == "si" || $gnc == "ti" )
	    {
	        $precio = $precio+ 50;

	    }
	    if ($color == "BLANCO" || $color == "blanco")
	    {
	          $precio = $precio*0.90;
	    }         
	    return $precio;
	}


	public static function traerFechaEntrada($pid_vehiculo) 
		{
				
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("SELECT fechaIngreso from estacionados where id_vehiculo='$pid_vehiculo' and fechaSalida is NULL and importe is NULL");
			
				$consulta->execute(); 

				//Obtengo un arrays con todos los registros q cumplen la condicion e la consulta
				$ArraysResultante= $consulta->fetchall(); 
				
				//0 si no lo encuentra / 1 si esta la patente
				return $ArraysResultante[0]["fechaIngreso"];		
		}


	public static function validarEntradaPatente($pPatente) 
		{
				//Creo un objeto de acceso a datos, si existe uso el que ya tengo
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

				//Genero la consulta sql
				$consulta =$objetoAccesoDato->RetornarConsulta("SELECT count(*) as cantidad from estacionados where id_vehiculo='$pPatente' and fechaSalida is NULL and importe is NULL");
				$consulta->execute(); 

				//Obtengo un arrays con todos los registros q cumplen la condicion e la consulta
				$ArraysResultante= $consulta->fetchall(); 
				
				//0 si no lo encuentra / 1 si esta la patente
				return $ArraysResultante[0]["cantidad"];		
		}


	public static function hacerSalidaPatente($pId_vehiculo,$pFechaSalida,$pimporte,$pid_usuarioSalida) 
		{
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		
				$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE  estacionados SET fechaSalida = '$pFechaSalida', importe = $pimporte, id_usuarioSalida = $pid_usuarioSalida where id_vehiculo='$pId_vehiculo' and fechaSalida is NULL and importe is NULL");
			
				$consulta->execute(); 
		}

	  	
	public static function DameUnEstacionado($pId_usuario, $pId_vehiculo, $pFechaIngreso, $pFechaSalida, $pimporte)
	  	{
		  	$unEstacionado =new Estacionado();
			$unEstacionado->Id_usuario=$pId_usuario;
			$unEstacionado->Id_vehiculo=$pId_vehiculo;
			$unEstacionado->FechaIngreso=$pFechaIngreso;
			$unEstacionado->FechaSalida=$pFechaSalida;
			$unEstacionado->importe=$pimporte;

			return $unEstacionado;
	  	}


	public function InsertarUnoParametros()
		{
					$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
					$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into estacionados (Id_usuario, Id_vehiculo,FechaIngreso) values (:Id_usuario,:Id_vehiculo,:FechaIngreso)");

					$consulta->bindValue(':Id_usuario',$this->Id_usuario, PDO::PARAM_INT);
					$consulta->bindValue(':Id_vehiculo', $this->Id_vehiculo, PDO::PARAM_STR);
					$consulta->bindValue(':FechaIngreso', $this->FechaIngreso, PDO::PARAM_STR);
					//$consulta->bindValue(':FechaSalida', $this->FechaSalida, PDO::PARAM_STR);
					//$consulta->bindValue(':importe', $this->importe, PDO::PARAM_STR);

					$consulta->execute();		
					return $objetoAccesoDato->RetornarUltimoIdInsertado();
		}


	public function BorrarEstacionado()
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
					delete from estacionados WHERE id=:id");	
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
			$consulta->execute();
			return $consulta->rowCount();
		}


	public function mostrarDatos()
		{
	        return "Metodo mostar: Id: ".$this->id."*Id Usuario: ".$this->id_usuario."  *Id Vehiculo: ".$this->id_vehiculo." *Fecha Ingreso: ".$this->FechaIngreso." *Fecha Salida: ".$this->FechaSalida."*Importe Cobrado: ".$this->importe."*Usuario Salida: ".$this->id_usuarioSalida;
		}
		 
	public function Modificarvehiculo()
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
		 
	public function ModificarCdParametros()
		{
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("update usuarios set 
					nombre=:nombre,
					email=:email,
					password=:password,
					fechaInscrip=:fechaInscrip				
					WHERE id=:id");

				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
				$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_INT);
				$consulta->bindValue(':email', $this->email, PDO::PARAM_STR);
				$consulta->bindValue(':password', $this->password, PDO::PARAM_STR);
				$consulta->bindValue(':fechaInscrip', $this->fechaInscrip, PDO::PARAM_STR);			
				return $consulta->execute();
		}
		 
	public static function TraerTodoLosEstacionados()
		{
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("SELECT Id, nombre, email, password,fechaInscrip from usuarios");
				$consulta->execute();			
				return $consulta->fetchAll(PDO::FETCH_CLASS, "cd");		
		}

	public static function TraerUnEstacionado($id) 
		{
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("SELECT Id, patente, color, foto from vehicuo where id = $id");
				$consulta->execute();
				$cdBuscado= $consulta->fetchObject('Vehiculo');
				return $cdBuscado;					
		}

}