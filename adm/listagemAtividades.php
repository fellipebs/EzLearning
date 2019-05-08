<?php
session_start();
require_once ('../models/conexao/conexao.php');
$sql= $con->prepare("SELECT id,nota,codigo FROM atividades; ");
$sql->execute();

$rows = $sql->fetchAll(PDO::FETCH_CLASS);
require("../models/restrito.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Easy Learning - Alunos</title>
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
    <h3>Atividades</h3>
</div>
<div class="row">
    <table>
        <thead>
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">Nota</th>
            <th scope="col">Codigo</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <th scope="row">
                    <?php echo $row->id; ?>
                </th>
                <td>
                    <?php echo $row->nota; ?>
                </td>
                <td>
                    <?php echo $row->codigo; ?>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>

</html>