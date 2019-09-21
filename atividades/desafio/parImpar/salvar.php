<?php
session_start();
header("Content-type: text/html; charset=UTF-8");
if(isset($_POST['Enviar'])){
    require_once('../../../models/atividades/parImpar/Corrigir.php'); 
}else{
require_once('../../../models/atividades/SalvarAtividade.php');
header('location: parImpar.php');
}
