<?php
// include class
require('fpdf/fpdf.php');

// create document
$pdf = new FPDF();
$pdf->AddPage();

// config document
$pdf->SetTitle('Generar archivos PDF con PHP');
$pdf->SetAuthor('Kodetop');
$pdf->SetCreator('FPDF Maker');

// add title
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(0, 10, 'Generar archivos PDF con PHP', 0, 1);
$pdf->Ln();

// add text
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 7, mb_convert_encoding('Los archivos PDF se utilizan ampliamente en documentos y reportes que necesitan mantener el diseño y contenido (imágenes, tipos de letra, colores, etc), por ello vamos a aprender a crear archivos PDF utilizando PHP.', 'UTF-8'), 0, 1);
$pdf->Ln();
$pdf->MultiCell(0, 7, mb_convert_encoding('FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.', 'UTF-8'), 0, 1);
$pdf->Ln();
$pdf->MultiCell(0, 7, mb_convert_encoding('Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.', 'UTF-8'), 0, 1);
$pdf->Ln();

// add image
$pdf->Image('assets/fpdf-code.png', null, null, 180);

// output file
$pdf->Output('', 'fpdf-complete.pdf');