<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');

$atividade_id = $_POST['atividade'];
echo "<br>";
$turma_id =  $_POST['turma'];
echo "<br>";
$sql = $con->prepare("SELECT * FROM atividade_turma WHERE turma_id = ? and atividade_id = ?;");
$sql->execute( array($turma_id,$atividade_id));
if($sql->rowCount() > 0){
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
  Erro Atividade já Atribuida a turma!!
</div>';
}else{
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $pdo->prepare('INSERT INTO atividade_turma (id, atividade_id, turma_id) VALUES (NULL, :atividade_id, :turma_id)');
         $stmt->execute(array(
           ':atividade_id' => $atividade_id,
           ':turma_id' => $turma_id,
        ));
  
}
  header("Location: ../professor/lancar_atividade.php");



?>