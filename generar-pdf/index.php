<?php
require '../vendor/autoload.php';
// require __DIR__.'/vendor/autoload.php';

$html2pdf = new Html2Pdf();

// $html = "<h1 style='background:red;'>Hola Mundo desde una libreria de PHP para hacer PDFs</h1>";
// $html .= "<p>Master en PHP</p>";

// Recoger la vista a imprimir
ob_start();
require_once 'pdf_para_generar.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdfgenerado.pdf');

