<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../LogoPublicaciones.png',20,0,40);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,'REPORTE DE COMPRA',1,0,'C');
    $this->Image('../LogoPublicaciones.png',150,0,40);
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-30);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    //$pdf->Write('Times','',12);
    // Número de página
    $this->Cell(20);
    $this->Cell(150,10,'SOMOS TU MEJOR OPCIÓN, EN CALIDAD DE AGUA',1,1,'C');
    $this->Ln(10);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    
}
}
?>