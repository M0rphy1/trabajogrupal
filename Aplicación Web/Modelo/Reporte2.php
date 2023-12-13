<?php
require('../Vista/Plantilla2.php');
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
$pdf->Cell(50,6,'NOMBRE',1,0,'C');
$pdf->Cell(50,6,'APELLIDO',1,0,'C');
$pdf->Cell(40,6,'FECHA',1,0,'C');
$pdf->Cell(40,6,'VALOR SIN IVA',1,0,'C');
$pdf->Ln();
//MOSTRAR

while($Mostrar=mysqli_fetch_array($resultado))
{
    $pdf->Cell(10,20,$Mostrar['NUM'],1,0,'C');
    $pdf->Cell(50,20,$Mostrar['NOMBRE'],1,0,'C');
    $pdf->Cell(50,20,$Mostrar['APELLIDO'],1,0,'C');
    $pdf->Cell(40,20,$Mostrar['FECHA'],1,0,'C');
    $pdf->Cell(40,20,$Mostrar['VALOR_SIN_IVA'],1,0,'C');
    $pdf->Ln();
}
//D ES PARA DESCARGAR
$pdf->Output('I','Reporte2.pdf');
?>