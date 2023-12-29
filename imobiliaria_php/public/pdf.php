<?php
require '../vendor/autoload.php';
use \Dompdf\Dompdf;


$div = filter_input(INPUT_GET, 'teste');

$dompdf = new Dompdf();
$dompdf->loadHtml('<b>Olá Mundo!</b>');
$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
header('Content: application/pdf');
$dompdf->stream();



