<?php

require_once('fpdf/fpdf.php');
require_once('fpdi/fpdi.php');

$pdf = new FPDI();
$pageCount = $pdf->setSourceFile("arquivo.pdf");
$tplIdx = $pdf->importPage(1);

$pdf->AddPage();
$pdf->useTemplate($tplIdx);

$x = 10; // posição horizontal em mm
$y = 10; // posição vertical em mm
$w = 50; // largura em mm
$h = 10; // altura em mm

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY($x, $y);
$text = $pdf->Text($x, $y, $pdf->GetStringWidth($valor) > $w ? substr($valor, 0, 20).'...' : $valor); //valor da posição

$pdf->Output();
