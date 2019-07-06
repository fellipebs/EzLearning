<?php
//Comando para conexão com o banco de dados.
$pdo = new PDO("mysql:host=ezlearning.mysql.dbaas.com.br; dbname=ezlearning","ezlearning","QVLm638qvTJBtL");
$con =  new PDO("mysql:host=ezlearning.mysql.dbaas.com.br; dbname=ezlearning","ezlearning","QVLm638qvTJBtL");

$smtp = $pdo->prepare("SELECT * FROM medalha_aluno ma INNER JOIN aluno a on ma.aluno_id = a.id");
$smtp->execute();
$rows = $smtp->fetchAll(PDO::FETCH_CLASS);
$RankingMedalhas = array();

foreach ($rows as $row):
    array_push($RankingMedalhas, array(
        'nome'=>$row->nome,
        'ouro'=>$row->quantidade_ouro,
        'prata'=>$row->quantidade_prata,
        'bronze'=>$row->quantidade_bronze,
        'total'=>$row->quantidade_ouro*3 + $row->quantidade_prata*2 + $row->quantidade_bronze*1
    ));
endforeach;

foreach($RankingMedalhas as $RankingMedalha){ 
    foreach($RankingMedalha as $key=>$value){ 
        if(!isset($sortArray[$key])){ 
            $sortArray[$key] = array(); 
        } 
        $sortArray[$key][] = $value; 
    } 
} 

$orderby = "total";

array_multisort($sortArray[$orderby],SORT_DESC,$RankingMedalhas); 
?>
<table class="table">
    <tr>
        <th class="scope">Posição</th>
        <th class="scope">Nome</th>
        <th class="scope">Ouro</th>
        <th class="scope">Prata</th>
        <th class="scope">Bronze</th>
        <th class="scope">Total</th>
    </tr>
    <?php $LinhaArray = 0;
          $PosicaoRanking = 1;
    foreach ($RankingMedalhas as $RankingMedalha): 
        
        ?>
    <tr>
        <td><?= $PosicaoRanking++; ?></td>
        <td><?= $RankingMedalhas[$LinhaArray]['nome']?></td>
        <td><?= $RankingMedalhas[$LinhaArray]['ouro']?></td>
        <td><?= $RankingMedalhas[$LinhaArray]['prata'] ?></td>
        <td><?= $RankingMedalhas[$LinhaArray]['bronze'] ?></td>
        <td><?= $RankingMedalhas[$LinhaArray]['total']?></td>
    </tr>
        <?php $LinhaArray++;
                            endforeach; ?>


                            </table>