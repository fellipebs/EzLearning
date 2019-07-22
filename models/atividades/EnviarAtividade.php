<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$date = date('d-m-Y H:i');
session_start();
if(isset($_POST['codigo_js'])){
    $arquivo = fopen($_SESSION['usuario']->usuario.'_js.txt','w');
    if ($arquivo == false) die('Não foi possível criar o arquivo.');
    $_SESSION['codigo_js'] = $_POST['codigo_js']; 
    fwrite($arquivo, $_SESSION['codigo_js']);
    fclose($arquivo);
}
if(isset($_POST['codigo_xml'])){
    $arquivo = fopen($_SESSION['usuario']->usuario.'_xml.txt','w');
    if ($arquivo == false) die('Não foi possível criar o arquivo.');
    $_SESSION['codigo_xml'] = $_POST['codigo_xml'];
    fwrite($arquivo, $_SESSION['codigo_xml']);
    fclose($arquivo);
    }
?>