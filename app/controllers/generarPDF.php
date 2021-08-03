<?php 

require_once '../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try{
    ob_start();
    include './topdf.php';
    $content = ob_get_clean();

    $html2Pdf = new Html2Pdf('P','A4','es',true, 'UTF-8',3);
    $html2Pdf->pdf->SetDisplayMode('fullpage');
    $html2Pdf->writeHTML($content);
    $html2Pdf->output('data_arrendatarios.pdf');

} catch (Html2PdfException $e){
    $html2Pdf->clean();
    $formater = new ExceptionFormatter($e);
    echo $formater->getHtmlMessage();
}


?>