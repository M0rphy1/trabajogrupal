<?php
require('../Vista/Plantilla5.php');
include("../Config/conexion.php");
$sql="SELECT * from factura";
$resultado=mysqli_query($conexion,$sql);
//CREAR OBJETO

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times','I',12);
$pdf->Cell(10,6,'N-',1,0,'C');
$pdf->Cell(30,6,'CEDULA',1,0,'C');
$pdf->Cell(30,6,'TELEFONO',1,0,'C');
$pdf->Cell(30,6,'IVA',1,0,'C');
$pdf->Cell(30,6,'PRECIO TOTAL',1,0,'C');
$pdf->Ln();
//MOSTRAR

while($Mostrar=mysqli_fetch_array($resultado))
{
    $pdf->Cell(10,20,$Mostrar['NUM'],1,0,'C');
    $pdf->Cell(30,20,$Mostrar['CEDULA'],1,0,'C');
    $pdf->Cell(30,20,$Mostrar['TELEFONO'],1,0,'C');
    $pdf->Cell(30,20,$Mostrar['IVA'],1,0,'C');
    $pdf->Cell(30,20,$Mostrar['PRECIO_TOTAL'],1,0,'C');
    $pdf->Ln();
}
//D ES PARA DESCARGAR
$pdf->Output('I','Reporte3.pdf');
?>