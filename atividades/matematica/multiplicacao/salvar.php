<?php
header("Content-type: text/html; charset=utf-8");
session_start();
if(isset($_POST['Enviar'])){
    require_once('../../../models/atividades/EnviarAtividade.php'); 
}else{
require_once('../../../models/atividades/SalvarAtividade.php');
header('location: multi.php');
}

?>