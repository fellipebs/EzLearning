<?php
require_once('../models/restrito/VerificarSeLogadoAluno2.php');
require_once('../models/conexao/conexao.php');

$smtp = $pdo->prepare("SELECT * FROM ranking_geral limit 5");
$smtp->execute();
$rows = $smtp->fetchAll(PDO::FETCH_CLASS);
$PosicaoRanking = 1;
?>
<table class="table">
    <tr>
        <th class="scope">Posição</th>
        <th class="scope">Nome</th>
        <th class="scope">Ouro</th>
        <th class="scope">Prata</th>
        <th class="scope">Bronze</th>
        <th class="scope">Pontos</th>
    </tr>
    <tr>
        <?php foreach ($rows as $row) : ?>
            <td><?= $PosicaoRanking++; ?></td>
            <td><?= $row->nome ?></td>
            <td><?= $row->ouro ?></td>
            <td><?= $row->prata ?></td>
            <td><?= $row->bronze ?></td>
            <td><?= $row->pontos ?></td>
    </tr>
<?php
endforeach;
?>


</table>