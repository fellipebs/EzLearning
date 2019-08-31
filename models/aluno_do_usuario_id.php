<?php
require_once('../../../models/conexao/conexao.php');
try {
    $sql = $pdo->prepare("CALL usuario_do_aluno_id(?)");
    $sql->execute(array($_SESSION['usuario']->id));
    $_SESSION['Aluno'] = $sql->fetchObject();    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
?>