<?php
require('fpdf/fpdf.php');
include "funciones.php";

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('icon/portada.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(50,10,'ScorpionsApp',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}




/*$pdf->SetFont('Arial','B',9);
foreach ($listadoDePatente as $datos) {
   if(isset($datos[0])){
      $patente=$datos[0];
      $pdf->Cell(15,10,$patente,0,0,'L');
      $fechaEntrada=$datos[5];
      $pdf->Cell(33,10,$ingreso,0,0,'L');
      $fechaSalida=$datos[2];
      $pdf->Cell(32,10,$salida,0,0,'L');
      $gnc=$datos[3];
      $pdf->Cell(15,10,$valor,0,0,'R');
      //$gnc=$datos[6];
      //$gncl="No";
      if (isset($_POST["gnc"])) 
{
    $gnc = "GNC";
    }
      $pdf->Cell(13,10,$gncl,0,0,'C');
      $categ=$datos[7];
      $pdf->Cell(15,10,$categ,0,0,'C');
      $PerIngreso=$datos[8];
      $pdf->Cell(35,10,$PerIngreso,0,0,'L');
      $PerEgreso=$datos[4];
      $pdf->Cell(32,10,$PerEgreso,0,1,'L');
      //$renglones .= $patente." ".$salida." ".$valor." ".$PerEgreso." ".$ingreso." ".$gnc." ".$categ." ".$PerIngreso;
      
      
   }

}
$pdf->MultiCell(170,5,$renglones,0,'L',0);
$pdf->Output(); //Mostramos el PDF creado*/


function TablaColores($header)
{
//Colores, ancho de línea y fuente en negrita
$this->SetFillColor(255,0,0);
$this->SetTextColor(255);
$this->SetDrawColor(128,0,0);
$this->SetLineWidth(.3);
$this->SetFont('Arial','B',16);//seteamos el tipo de letra Arial Negrita 16
//Cabecera

for($i=0;$i<count($header);$i++)
$this->Cell(38,7,$header[$i],1,0,'C',1);
$this->Ln();
//Restauración de colores y fuentes
$this->SetFillColor(224,235,255);
$this->SetTextColor(0);
$this->SetFont('Arial','B',16);
//Datos
   $fill=false;
 //Cell(ancho, Alto, texto, borde, salto de linea, alineacion de texto)
$this->Cell(38,6,"hola",'LR',0,'L',$fill);
$this->Cell(38,6,"hola2",'LR',0,'L',$fill);
$this->Cell(38,6,"hola3",'LR',0,'R',$fill);
$this->Cell(38,6,"hola4",'LR',0,'R',$fill);
$this->Cell(38,6,"hola5",'LR',0,'R',$fill);
$this->Ln();  // Salto de línea salta 20 lineas
$fill=!$fill;
$this->Cell(38,6,"col",'LR',0,'L',$fill);
$this->Cell(38,6,"col2",'LR',0,'L',$fill);
$this->Cell(38,6,"col3",'LR',0,'R',$fill);
$this->Cell(38,6,"col4",'LR',0,'R',$fill);
$this->Cell(38,6,"col5",'LR',0,'R',$fill);
$fill=true;
   $this->Ln();
   $this->Cell(160,0,'','T');
}

   
   
}

$pdf=new PDF();
//Títulos de las columnas
$header= array("patente","fecha/hora","color","combustible");
//$data = $pdf->LoadData('estacionados.txt');
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,utf8_decode('¡Gestion de Estacionamientos!'));
//Primera página
//$pdf->AddPage();
//$pdf->SetY(65);
//$pdf->AddPage();
//$pdf->TablaSimple($header);
//Segunda página
$pdf->SetY(65);
$pdf->TablaColores($header);
$pdf->Output();
$pdf->Output("Documento Final.pdf", 'F');


?>

<!doctype html>
<html lang="en">
<li id='q15'>
<p><b>15.</b> <span class='question'>
<a href="https://github.com/PHPMailer/PHPMailer" target="_blank">PHPMailer</a>
<div class="doc-source">
<pre><code>$mail = new PHPMailer();

$doc = $pdf-&gt;Output('S');
$mail-&gt;AddStringAttachment($doc, 'doc.pdf', 'base64', 'application/pdf');
$mail-&gt;Send();</code></pre>
</div>
</li>
</span>
</p>
</li>
</html>