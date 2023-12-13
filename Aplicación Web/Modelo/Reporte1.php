<?php
require('../Vista/Plantilla1.php');
include("../Config/conexion.php");
$sql="SELECT * from inventario";
$resultado=mysqli_query($conexion,$sql);
//CREAR OBJETO

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times','I',12);
$pdf->Cell(40,6,'NOMBRE',1,0,'C');
$pdf->Cell(70,6,'DESCRIPCIÓN',1,0,'C');
$pdf->Cell(40,6,'VALOR UNITARIO',1,0,'C');
$pdf->Cell(30,6,'STOCK',1,0,'C');
$pdf->Ln();
//MOSTRAR

while($Mostrar=mysqli_fetch_array($resultado))
{
    $pdf->Cell(40,20,$Mostrar['NOMBRE'],1,0,'C');
    $pdf->Cell(70,20,$Mostrar['DESCRIPCION'],1,0,'C');
    $pdf->Cell(40,20,$Mostrar['VALOR_UNITARIO'],1,0,'C');
    $pdf->Cell(30,20,$Mostrar['STOCK'],1,0,'C');
    $pdf->Ln();
}
//D ES PARA DESCARGAR
$pdf->Output('I','Reporte2.pdf');
?>