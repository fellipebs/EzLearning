<?php
require_once ('../models/conexao/conexao.php'); 
if(isset($_POST['aluno'])){
	$msg = $_POST['msg'];
    $aluno = $_POST['aluno'];
    if(empty($aluno)){
        header("Location: notificacao.php");
    }else{
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $pdo->prepare('INSERT INTO notificacao (descricao, aluno_id) VALUES(:descricao, :aluno_id)');
         $stmt->execute(array(
           ':descricao' => $msg,
           ':aluno_id' => $aluno
        ));
    }
    header("Location: notificacao.php");
}

if(isset($_POST['check'])){
    $teste = $_POST['check'];
    $msg = $_POST['msg'];
    
    $sql = $con->prepare("SELECT * from aluno");
    $sql->execute();

    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    foreach ($rows as $row){
        $aluno = $row->usuario_id_aluno;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('INSERT INTO notificacao (descricao, aluno_id) VALUES(:descricao, :aluno_id)');
        $stmt->execute(array(
          ':descricao' => $msg,
          ':aluno_id' => $aluno
       ));
    }
    header("Location: notificacao.php");
}

?>