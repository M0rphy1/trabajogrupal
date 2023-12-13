<?php
require('../Vista/Plantilla3.php');
include("../Config/conexion.php");
$sql="SELECT * from factura_producto";
$resultado=mysqli_query($conexion,$sql);
//CREAR OBJETO

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times','I',12);
$pdf->Cell(30,6,'NUMERO',1,0,'C');
$pdf->Cell(60,6,'PRODUCTO',1,0,'C');
$pdf->Cell(60,6,'CANTIDAD DE PRODUCTOS',1,0,'C');
$pdf->Ln();
//MOSTRAR

while($Mostrar=mysqli_fetch_array($resultado))
{
    $pdf->Cell(30,20,$Mostrar['NUM'],1,0,'C');
    $pdf->Cell(60,20,$Mostrar['PRODUCTO'],1,0,'C');
    $pdf->Cell(60,20,$Mostrar['CANTIDAD_PRODUCTO'],1,0,'C');
    $pdf->Ln();
}
//D ES PARA DESCARGAR
$pdf->Output('I','Reporte3.pdf');
?>