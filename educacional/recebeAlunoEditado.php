<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome =  $_POST['sobrenome'];
$dt_nascimento = $_POST['dt_nascimento'];
$responsavel = $_POST['responsavel'];
$nome_turma = $_POST['nome_turma'];
$status = $_POST['status'];


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $pdo->prepare('UPDATE aluno set nome = :nome, sobrenome =:sobrenome, dt_nascimento = :dt_nascimento, responsavel = :responsavel, turma_id = :nome_turma, status = :status WHERE id = :id');
         $stmt->execute(array(
           ':nome' => $nome,
           ':sobrenome' => $sobrenome,
           ':dt_nascimento' => $dt_nascimento,
           ':responsavel' => $responsavel,
           ':nome_turma' => $nome_turma,
           ':status' => $status,
           ':id' => $id
        ));


 $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
Aluno editado com sucesso!
</div>';

       
    
  
 header("Location: listagemAlunos.php");

?>