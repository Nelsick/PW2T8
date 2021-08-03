<?php

require_once './Lesse.php';
$lessee = new lessee;
$userdata = $lessee->getSomeLessee();

$xml = '../../public/arrendatarios.xml';
$fp = fopen($xml,'w') or die("No se pudo abrir el archivo");

$rss_txt = '<?xml version="1.0" encoding="UTF-8"?>';
$rss_txt .= '<arrendatarios>';
foreach ($userdata as $arrendatario){
    # code...
    $rss_txt .= '<arrendatario>';
    $rss_txt .= '<Nombre>'.$arrendatario['nombre'].'</Nombre>';
    $rss_txt .= '<Apellido>'.$arrendatario['apellido'].'</Apellido>';
    $rss_txt .= '<Rut>'.$arrendatario['rut'].'</Rut>';
    $rss_txt .= '<Arriendo>'.$arrendatario['arriendo'].'</Arriendo>';
    $rss_txt .= '<Monto>'.$arrendatario['monto'].'</Monto>';
    $rss_txt .= '<Direccion>'.$arrendatario['direccion'].'</Direccion>';
    $rss_txt .= '</arrendatario>';
}
$rss_txt .= '</arrendatarios>';    

fwrite($fp,$rss_txt);
echo "<h1>Archivo generado exitosamente</h1>";
fclose($fp);

?>