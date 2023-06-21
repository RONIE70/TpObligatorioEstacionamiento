<?php
require('fpdf/fpdf.php');
include_once ("AccesoDatos.php");
include_once ("Vehiculo.php");
include_once ("Usuario.php");
include_once("Estacionado.php");


$ArraysResultante =Estacionado::RetornaArrayEstacionados();


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
        $this->Ln(40);
        $this->SetFont('Arial','B',14);
        $this-> Write (10,"Listado de Autos Cobrados");
        $this-> Ln(15);
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
}

$pdf=new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetY(30);
$pdf->SetX(-155);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,utf8_decode('¡Gestion de Estacionamientos!'));
$pdf->SetX(-40);
$pdf->SetFont('Arial','B',12);
$pdf-> Write (10,"@ARGENTINA");
//$header= array("patente","fecha/hora","color","combustible");
//$pdf->TablaColores($header);


$pdf-> Ln(10);
//$pdf->SetFont('Arial','B',14);
//$pdf-> Write (10,"Listado de Autos Cobrados");
$pdf-> Ln(15);
$pdf->SetFont('Arial','B',9);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(255,255,255);
$pdf->Cell(10,10,utf8_decode('ID'),1,0,'C',true);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->Cell(22,10,utf8_decode('ID USUARIO'),1,0,'C',true);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->Cell(22,10,utf8_decode('ID VEHICULO'),1,0,'C',true);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->Cell(38,10,utf8_decode('FECHA ENTRADA'),1,0,'C',true);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->Cell(38,10,utf8_decode('FECHA SALIDA'),1,0,'C',true);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->Cell(20,10,utf8_decode('PRECIO'),1,0,'C',true);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->Cell(40,10,utf8_decode('USUARIO SALIDA'),1,0,'C',true);

//Títulos de las columnas
//$header= array("patente","fecha/hora Entrada","fecha/hora Salida","Importe Cobrado","Usuario ha Cobrado");


foreach ($ArraysResultante as $dato) 
{
      $pdf->SetTextColor(255);
      $pdf->SetDrawColor(255,255,255);
      $pdf->SetLineWidth(.3);
      
      $pdf-> Ln(10);
      $pdf->SetFillColor(241,239,142);
      $pdf->SetTextColor(2);
      
      $pdf->SetTextColor(255);
      $pdf->SetDrawColor(128,0,0);
      $pdf->SetLineWidth(.3);
      $id=$dato["id"];
      $pdf-> Ln(3);
      $pdf->SetFillColor(241,239,142);
      $pdf->SetTextColor(2);
      $pdf->Cell(10,10,$id,1,0,'C',true);
      $id_usuario=$dato["id_usuario"];
      $pdf->Cell(22,10,$id_usuario,1,0,'C',true);
      $id_vehicu=$dato["id_usuario"];
      $pdf->Cell(22,10,$id_usuario,1,0,'C',true);
      $fechaIngreso=$dato["fechaIngreso"];
      $pdf->Cell(38,10,$fechaIngreso,1,0,'C',true);
      $fechaSalida=$dato["fechaSalida"];
      $pdf->Cell(38,10,$fechaSalida,1,0,'C',true);
      $importe=$dato["importe"];
      $pdf->Cell(20,10,$importe,1,0,'C',true);
      $id_usuarioSalida=$dato["id_usuarioSalida"];
      $pdf->Cell(39,10,$id_usuarioSalida,1,0,'C',true);
      
}
      
   $pdf->Output();
   //header('Content_type:application/pdf');
   //$file_content= $pdf->Output("Documento Final.pdf", 'F', true); 


?>

<!--<!doctype html>
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
</html>-->