<?php
date_default_timezone_set('America/Sao_Paulo');
$dateNow = date('Y-m-d H:i');
require_once('../../../models/aluno_do_usuario_id.php');
$sql = $pdo->prepare("SELECT * FROM nota WHERE aluno_id = ? and atividade_id = ?");
$sql->execute(array($_SESSION['Aluno']->id, $_SESSION['atividadeId']));
$row = $sql->fetchObject();
if ($sql->rowCount() == 0) {
    $sql = $pdo->prepare("INSERT INTO nota VALUES(null,?,?,?,?)");
    $sql->execute(array($_SESSION['valorAtividade'], $_SESSION['notaAtividade'], $_SESSION['Aluno']->id, $_SESSION['atividadeId']));
} elseif (intval($_SESSION['notaAtividade']) > $row->nota) {
    $sql = $pdo->prepare("UPDATE  nota SET nota = ? WHERE aluno_id = ? and atividade_id = ?;");
    $sql->execute(array($_SESSION['notaAtividade'], $_SESSION['Aluno']->id, $_SESSION['atividadeId']));
}
$sql = $pdo->prepare("SELECT * FROM atividade_aluno WHERE aluno_id = ? and atividade_id = ?");
$sql->execute(array($_SESSION['Aluno']->id, $_SESSION['atividadeId']));
if ($sql->rowCount() == 0) {
    $sql = $pdo->prepare("INSERT INTO atividade_aluno VALUES(null,'Corrigida - Com nota',?,?,?)");
    $sql->execute(array($dateNow, $_SESSION['Aluno']->id, $_SESSION['atividadeId']));
} else {
    $sql = $pdo->prepare("UPDATE atividade_aluno SET status = 'Corrigida - Com nota' where aluno_id = ? and atividade_id = ?");
    $sql->execute(array($_SESSION['Aluno']->id, $_SESSION['atividadeId']));
}
// header('location: ' . $_SESSION['arquivo_php']);
