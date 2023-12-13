
<?php
require('../Vista/Plantilla.php');
include("../Config/conexion.php");
$sql="SELECT * from cliente";
$resultado=mysqli_query($conexion,$sql);
//CREAR OBJETO

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times','I',12);
$pdf->Cell(30,6,'CÉDULA',1,0,'C');
$pdf->Cell(30,6,'NOMBRE',1,0,'C');
$pdf->Cell(30,6,'APELLIDO',1,0,'C');
$pdf->Cell(50,6,'DIRECCIÓN',1,0,'C');
$pdf->Cell(50,6,'TELÉFONO',1,0,'C');
$pdf->Ln();
//MOSTRAR

while($Mostrar=mysqli_fetch_array($resultado))
{
    
    $pdf->Cell(30,7,$Mostrar['CEDULA'],1,0,'C');
    $pdf->Cell(30,7,$Mostrar['NOMBRE'],1,0,'C');
    $pdf->Cell(30,7,$Mostrar['APELLIDO'],1,0,'C');
    $pdf->Cell(50,7,$Mostrar['DIRECCION'],1,0,'C');
    $pdf->Cell(50,7,$Mostrar['TELEFONO'],1,0,'C');
    $pdf->Ln();
}
//D ES PARA DESCARGAR
$pdf->Output('I','Reporte1.pdf');
?>