<?php
require('../Vista/Plantilla4.php');
include("../Config/conexion.php");
$sql="SELECT * from pedidos";
$resultado=mysqli_query($conexion,$sql);
//CREAR OBJETO

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times','I',12);
$pdf->Cell(30,6,'NUMERO',1,0,'C');
$pdf->Cell(40,6,'FECHA DE PEDIDO',1,0,'C');
$pdf->Cell(60,6,'FECHA DE ENTREGA',1,0,'C');
$pdf->Cell(60,6,'ESTADO',1,0,'C');
$pdf->Ln();
//MOSTRAR

while($Mostrar=mysqli_fetch_array($resultado))
{
    $pdf->Cell(30,20,$Mostrar['NUM'],1,0,'C');
    $pdf->Cell(40,20,$Mostrar['FECHA_PEDIDO'],1,0,'C');
    $pdf->Cell(60,20,$Mostrar['FECHA_ENTREGA'],1,0,'C');
    $pdf->Cell(60,20,$Mostrar['ESTADO'],1,0,'C');
    $pdf->Ln();
}
//D ES PARA DESCARGAR
$pdf->Output('I','Reporte4.pdf');
?>