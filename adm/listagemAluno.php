<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    $sql= $con->prepare("SELECT id,nome,sobrenome,DATE_FORMAT(dt_nascimento,'%d/%m/%Y')as dt_nascimento,responsavel FROM aluno; ");
    $sql->execute();

    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
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
        <h3>alunos</h3>
    </div>
    <form action="">
        <div class="row">
            <div class="col span-1-of-5">
                <input type="text" name="nome" placeholder="Nome">
            </div>
            <div class="col span-1-of-5">
                <input type="text" name="sobrenome" placeholder="Sobrenome">
            </div>
            <div class="col span-1-of-5">
                <input type="text" name="nascimento" placeholder="Data de Nascimento">
            </div>
            <div class="col span-1-of-5">
                <input type="text" name="responsavel" placeholder="Nome do Responsavel">
            </div>
            <div class="col span-1-of-5">
                <input type="submit" value="cadastrar" class="btn btn-full">
            </div>
        </div>
    </form>
    
    <div class="row">
        <table>
            <thead>
                <tr>
                <th scope="col">Numero</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Responsável</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                <tr>
                <th scope="row">
                    <?php echo $row->id; ?>
                </th>
                <td>
                    <?php echo $row->nome; ?>
                </td>
                <td>
                    <?php echo $row->sobrenome; ?>
                </td>
                <td>
                    <?php echo $row->dt_nascimento; ?>
                </td>
                <td>
                    <?php echo $row->responsavel; ?>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>