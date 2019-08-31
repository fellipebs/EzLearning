<?php
session_start();
header("Content-type: text/html; charset=UTF-8");
if(isset($_POST['Enviar'])){
    require_once('../../../models/atividades/somar/Corrigir.php'); 
}else{
require_once('../../../models/atividades/SalvarAtividade.php');
header('location: soma.php');
}

?>