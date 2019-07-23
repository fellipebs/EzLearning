<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');
require_once('../../../models/conexao/conexao.php');
$sql = $con->prepare("SELECT id FROM aluno WHERE usuario_id_aluno=?;");
$sql->execute( array($_SESSION['usuario']->id));
$row = $sql->fetchObject();

$sql = $con->prepare("SELECT * FROM atividade_aluno WHERE aluno_id = ? and atividade_id = ?;");
$sql->execute( array($row->id,$_SESSION['atividade_id']));
if($sql->rowCount() > 0){
    $sql = $con->prepare("UPDATE atividade_aluno SET status = 'Aguardando Correção' WHERE aluno_id = ? and atividade_id = ?;");
    $sql->execute( array($row->id,$_SESSION['atividade_id']));
    header('location: ../../../aluno/home.php');
}else{
    $sql = $con->prepare("INSERT INTO atividade_aluno VALUES(null,'Aguardando Correção',?,?,?)");
    $sql->execute( array($date,$row->id,$_SESSION['atividade_id']));
    header('location: ../../../aluno/home.php');
}
?>