<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
  require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
$alunoId = $_POST['atividade'];
echo "<br>";
$atividadeId =  $_POST['atividadeID'];
echo "<br>";
$valor = $_POST['valor'];
echo "<br>";
$nota = $_POST['nota'];

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $pdo->prepare('INSERT INTO nota (valor_atividade, nota, aluno_id, atividade_id) VALUES(:valor_atividade, :nota, :aluno_id, :atividade_id)');
         $stmt->execute(array(
           ':valor_atividade' => $valor,
           ':nota' => $nota,
           ':aluno_id' => $alunoId,
           ':atividade_id' => $atividadeId
        ));


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('UPDATE atividade_aluno SET status = "Corrigida - Com nota" where aluno_id = :aluno_id and atividade_id = :atividade_id');
        $stmt->execute(array(
           ':aluno_id' => $alunoId,
           ':atividade_id' => $atividadeId
        ));

header("Location: lancarnotas.php");

?>