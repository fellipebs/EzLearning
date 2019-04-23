<!DOCTYPE html>
<html>
<head>
    <title>5ยบ_A</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="img/Aluno.png" />
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Easy Learning</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#"></a></li>

            <li><a href="#">Sair</a></li>
        </ul>


    </div>
</nav>
<div class="container">
    <h3>Turmas</h3>


    <?php


    require_once 'conexao/conexao.php';
    require_once 'conexao/cadastrar_usuario.php';

    $sql= $con->prepare("SELECT professor_id_turma,escola_id_turma FROM turma
INNER JOIN professor ON professor.id  = turma.professor_id_turma
INNER JOIN escola ON  escola.id  = turma.escola_id_turma;");
    $sql->execute();

    // fetchall - recuperar todos os registros da tabela

    // PDO::FETCH_CLASS - RESULTADO SEJA ARMAZENADO EM UM OBJETO

    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    echo "<table class='table table-dark'>";

    foreach ($rows as $row){

        echo "<td>Professor ID<td>$row->professor_id_turma</td><td>Escola_ID<td>$row->escola_id_turma</td></tr>";
    }

    echo "</table>";





    ?>
</div>
</body>
</html>