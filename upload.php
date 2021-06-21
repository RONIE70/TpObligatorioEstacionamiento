<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Procesando el archivo enviado</title>
<style type="text/css">

*{ font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif}

.main{ 
  margin:auto; 
  border:1px 
  solid #7C7A7A;
  width:30%; 
  text-align:left; 
  padding:30px; 
  background-color: rgb(41, 145, 243);
  box-shadow: black 5px 5px 4px 2px;
  border-radius: 10px;
  color:white;
 }

input[type=submit]{ 
  background:#6ca16e; 
  width:60%;
  padding:5px 15px; 
  background:#ccc; 
  cursor:pointer;
	font-size:16px;
  box-shadow: black 5px 5px 4px 2px;
  border-radius: 10px;
  color:white;
}

table td{ 
padding:5px;
}

</style>
</head>

<body bgcolor="#bed7c0">
<div class="main">


<?php
//SACADA DE BAUL.PHP

$directorio = 'archivos/';
$subir_archivo = $directorio.basename($_FILES['subir_archivo']['name']);
echo "<div>";
if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) 
{
    echo "<h1>•Fotos disponibles en carpeta archivos•</h1>";
    echo "El archivo es válido y se cargó correctamente.<br><br>";
	  echo"<a href='".$subir_archivo."' target='_blank'><img src='".$subir_archivo."' width='150'></a>";
} 
else 
{
    echo "<h1>•Intentelo Nuevamente... Gracias•</h1>";
    echo "La subida ha fallado, solo admite archivo.jpg/png hasta 2gb";
}
    echo "</div>";
?>
<br>
<div style="border:1px solid white; text-transform:uppercase">  
<h3 align="center"><div align="center"><a href="estacionar.php">Volver </a></div></h3></div>

 
</div>
	</body>
</html>