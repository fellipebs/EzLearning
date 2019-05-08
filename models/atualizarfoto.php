<?php
require_once ('conexao/conexao.php');
$sql = $pdo->prepare("Select foto from usuarios where id = ?");
$sql->execute(array($_SESSION["usuario"]->id));
if($sql->rowCount() > 0 ){
    return $result = $sql->fetchObject();
}
?>