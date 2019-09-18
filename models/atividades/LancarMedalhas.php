<?php
require_once('../../../models/conexao/conexao.php');

if ($_SESSION['medalha'] == "ouro") {
  $sql = $con->prepare('SELECT * FROM medalha WHERE tipo = ? and aluno_id = ? and atividade_id = ? ');
  $sql->execute(array(2, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  if ($sql->rowCount() == 0) {
    $sql = $con->prepare('INSERT INTO medalha (id,nome_medalha,tipo,peso,aluno_id,atividade_id) VALUES(null,?,?,?,?,?)');
    $sql->execute(array('Ouro', 2, 3, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  }
}
if ($_SESSION['medalha'] == "prata") {
  $sql = $con->prepare('SELECT * FROM medalha WHERE tipo = ? and aluno_id = ? and atividade_id = ? ');
  $sql->execute(array(1, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  if ($sql->rowCount() == 0) {
    $sql = $con->prepare('INSERT INTO medalha (id,nome_medalha,tipo,peso,aluno_id,atividade_id) VALUES(null,?,?,?,?,?)');
    $sql->execute(array('Prata', 1, 2, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  }
}
if ($_SESSION['medalha'] == "bronze") {
  $sql = $con->prepare('SELECT * FROM medalha WHERE tipo = ? and aluno_id = ? and atividade_id = ? ');
  $sql->execute(array(0, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  if ($sql->rowCount() == 0) {
    $sql = $con->prepare('INSERT INTO medalha (id,nome_medalha,tipo,peso,aluno_id,atividade_id) VALUES(null,?,?,?,?,?)');
    $sql->execute(array('Bronze', 0, 1, $_SESSION['usuario']->id, $_SESSION['atividadeId']));
  }
}
