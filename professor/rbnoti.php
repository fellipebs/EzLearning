<?php
session_start();
require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
require_once ('../models/conexao/conexao.php'); 
if(isset($_POST['aluno'])){
	$msg = $_POST['msg'];
    $aluno = $_POST['aluno'];
    $usu = $_POST['usu'];
    if(empty($aluno)){
        header("Location: notificacao.php");
    }else{
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $pdo->prepare('INSERT INTO notificacao (descricao, aluno_id, data, id_enviou) VALUES(:descricao, :aluno_id, NOW(), :id_enviou)');
         $stmt->execute(array(
           ':descricao' => $msg,
           ':aluno_id' => $aluno,
           ':id_enviou' => $usu
        ));
    }
    header("Location: notificacao.php");
}

if(isset($_POST['check'])){
    $teste = $_POST['check'];
    $msg = $_POST['msg'];
    $usu = $_POST['usu'];
    
    $sql = $con->prepare("SELECT * from aluno");
    $sql->execute();

    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    foreach ($rows as $row){
        $aluno = $row->id;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('INSERT INTO notificacao (descricao, aluno_id, data, id_enviou) VALUES(:descricao, :aluno_id, NOW(), :id_enviou)');
        $stmt->execute(array(
          ':descricao' => $msg,
          ':aluno_id' => $aluno,
          ':id_enviou' => $usu
       ));
    }
    header("Location: notificacao.php");
}

?>