<?php
    session_start();
    require_once ('../models/conexao/conexao.php');
    $sql= $con->prepare(" SELECT titulo,DATE_FORMAT(data,'%d/%m/%Y')as data,professor_id_aula, nome
                                FROM aula
                                INNER JOIN professor
                                ON aula.professor_id_aula = professor.id;");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Easy Learning - Aulas</title>
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
    <div class="row">
        <table>
            <thead>
                <tr>
                <th scope="col">Materia</th>
                <th scope="col">Data</th>
                <th scope="col">Professor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                <tr>
                <td>
                    <?php echo $row->titulo; ?>
                </td>
                <td>
                    <?php echo $row->data; ?>
                </td>
                <td>
                    <?php echo $row->professor_id_aula; ?>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>