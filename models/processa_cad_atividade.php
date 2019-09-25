<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y-m-d H:i');

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
         $stmt = $pdo->prepare('INSERT INTO atividade_turma VALUES (NULL, :atividade_id, :turma_id)');
         $stmt->execute(array(
           ':atividade_id' => $atividade_id,
           ':turma_id' => $turma_id,
        ));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('SELECT * FROM aluno WHERE turma_id = :turma_id');
$stmt->execute(array(
                  ':turma_id' => $turma_id
        
               ));
$rows = $stmt->fetchAll(PDO::FETCH_CLASS);

foreach($rows as $row){
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO atividade_aluno  VALUES (NULL, "pendente", :data,:aluno_id,:atividade_id)');
  $stmt->execute(array(
            ':data' => $date,
            ':aluno_id' => $row->id,
            ':atividade_id' => $atividade_id
        ));

  
}
$_SESSION['msg'] = '<div class="alert alert-success" role="alert">
Atividade atribuída com sucesso!
</div>';
}
  header("Location: ../professor/lancar_atividade.php");


?>