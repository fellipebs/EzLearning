<?php
require_once('../models/restrito/VerificarSeLogadoAluno2.php');
require_once('../models/conexao/conexao.php');

$usuario = $_SESSION['usuario']->id;
$sql = $con->prepare('SELECT * FROM ranking_geral');
$sql->execute();

$rows = $sql->fetchAll(PDO::FETCH_CLASS);

echo "<table class='table table-dark'>";

foreach ($rows as $row) {
    if ($row->aluno_id == $usuario) {
        echo "<td>Ouro<td>$row->ouro</td><td>Prata<td>$row->prata</td><td>Bronze<td>$row->bronze</td><td>Pontos<td>$row->pontos</td></tr>";
    }
}

echo "</table>";
