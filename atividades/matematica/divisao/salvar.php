<?php
header("Content-type: text/html; charset=utf-8");
session_start();
if(isset($_POST['Enviar'])){
    require_once('../../../models/atividades/divisao/Corrigir.php'); 
}else{
require_once('../../../models/atividades/SalvarAtividade.php');
header('location: divisao.php');
}

?>