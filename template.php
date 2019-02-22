<?php
require_once('includes/fpdf/fpdf.php');
require_once('includes/fpdi/fpdi.php');

$pdf = new FPDI('L', 'pt');

$pdf->SetTopMargin(0);
$pdf->SetLeftMargin(0);
$pdf->SetRightMargin(0);
$pdf->SetAutoPageBreak(0);

// Copy the template from the source file
$pageCount = $pdf->setSourceFile('certificate.pdf');
$tplIdx = $pdf->importPage(1);

// Set the diemsion of the new PDF file
$pdf->addPage('L', [792, 612]);
$pdf->useTemplate($tplIdx);

// Set font
$pdf->AddFont('Roboto-Regular');
$pdf->SetFont('Roboto-Regular', '', 48);
// Set color
$pdf->SetTextColor(97, 101, 107);
// Move to 500 points from the top
$pdf->ln(500);
// Centered text
$pdf->Cell(0, 0, $name, 0, 1, 'C');

$pdf->Output('D', 'certificate.pdf');