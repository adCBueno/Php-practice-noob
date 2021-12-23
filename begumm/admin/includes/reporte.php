<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
include 'vista.php';
$html=ob_get_clean();
$dompdf -> loadHtml($html);
$dompdf -> setPaper('A4', 'landscape');
$dompdf -> render();
$dompdf -> stream("ejemplo.pdf", array('Attachment'=> 0));

?>