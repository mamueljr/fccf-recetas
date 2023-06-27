<?php
include_once "/dompdf/autoload.inc.php";
use Dompdf\Dompdf;

$dompdf = new Dompdf();
ob_start();
include '/imprimir_receta.php?id=1';
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");
echo $dompdf->output();
?>