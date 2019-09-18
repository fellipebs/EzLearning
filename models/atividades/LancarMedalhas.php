<?php
require_once('../../../models/conexao/conexao.php');
$sql = $con->prepare('SELECT * FROM medalha WHERE  aluno_id = ? and atividade_id = ? ');
$sql->execute(array($_SESSION['usuario']->id, $_SESSION['atividadeId']));
if ($sql->rowCount() == 0) {
  if ($_SESSION['medalha'] == "ouro") {
    $sql = $con->prepare('INSERT INTO medalha (id,nome_medalha,tipo,peso,aluno_id,atividade_id) VALUES(null,?,?,?,?,?)');
    $sql->execute(array('Ouro', 2, 3, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  }
  if ($_SESSION['medalha'] == "prata") {
    $sql = $con->prepare('INSERT INTO medalha (id,nome_medalha,tipo,peso,aluno_id,atividade_id) VALUES(null,?,?,?,?,?)');
    $sql->execute(array('Prata', 1, 2, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  }
  if ($_SESSION['medalha'] == "bronze") {
    $sql = $con->prepare('INSERT INTO medalha (id,nome_medalha,tipo,peso,aluno_id,atividade_id) VALUES(null,?,?,?,?,?)');
    $sql->execute(array('Bronze', 0, 1, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  }
} else {
  if ($_SESSION['medalha'] == "ouro") {
    $sql = $con->prepare('UPDATE medalha SET nome_medalha = "Ouro",tipo = 2,peso = 3 WHERE aluno_id = ?  and atividade_id = ?');
    $sql->execute(array($_SESSION['usuario']->id, $_SESSION['atividadeId']));
  }
  if ($_SESSION['medalha'] == "prata") {
    $sql = $con->prepare('SELECT * FROM medalha WHERE tipo = 2 and aluno_id = ? and atividade_id = ? ');
    $sql->execute(array($_SESSION['usuario']->id, $_SESSION['atividadeId']));
    if ($sql->rowCount() == 0) {
      $sql = $con->prepare('UPDATE medalha SET nome_medalha = "Prata",tipo = 1,peso = 2 WHERE aluno_id = ?  and atividade_id = ?');
      $sql->execute(array($_SESSION['usuario']->id, $_SESSION['atividadeId']));
    }
  }
}
