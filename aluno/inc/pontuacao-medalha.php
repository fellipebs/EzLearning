<?php
$pdo = new PDO("mysql:host=ezlearning.mysql.dbaas.com.br; dbname=ezlearning","ezlearning","QVLm638qvTJBtL");
$con =  new PDO("mysql:host=ezlearning.mysql.dbaas.com.br; dbname=ezlearning","ezlearning","QVLm638qvTJBtL");

$usuario = $_SESSION['usuario']->id;
$sql = $con->prepare('SELECT * FROM medalha_aluno where aluno_id ='.$usuario);
$sql->execute();

// fetchall - recuperar todos os registros da tabela

// PDO::FETCH_CLASS - RESULTADO SEJA ARMAZENADO EM UM OBJETO

$rows = $sql->fetchAll(PDO::FETCH_CLASS);

echo "<table class='table table-dark'>";

foreach ($rows as $row){

    echo "<td>Ouro<td>$row->quantidade_ouro</td><td>Prata<td>$row->quantidade_prata</td><td>Bronze<td>$row->quantidade_bronze</td></tr>";
}

echo "</table>";


?>