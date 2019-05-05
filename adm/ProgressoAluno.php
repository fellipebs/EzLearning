<?php
session_start();
require_once ('../models/conexao/conexao.php');
$sql = $con->prepare("select round(avg(nota * 100))as Nota_aluno from atividades where aluno_id_atividade = ".$_SESSION['usuario']->id."");
$sql->execute();
$nota = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $con->prepare("select count(*) as atividades_realizadas from atividades where aluno_id_atividade = ".$_SESSION['usuario']->id."");
$sql->execute();
$atividades = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<html>

<head>
    
    <title>Easy Learning - Progresso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/grid.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,400i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/main.css">
</head>

<body>
    <div class="row">
        <h3>Seu aproveitamento até o momento: <?php echo $nota[0]['Nota_aluno'] ?> "%</h3>
        <h3>Número de atividades concluidas: <?php echo $atividades[0]['atividades_realizadas'] ?> " de 3</h3>
    </div>
</body>

</html>