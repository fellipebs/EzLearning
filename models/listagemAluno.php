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
    <h3>Lista de alunos</h3>


    <?php


    require_once 'conexao/conexao.php';
    require_once 'conexao/cadastrar_usuario.php';
	
    $sql= $con->prepare("SELECT id,nome,sobrenome,DATE_FORMAT(dt_nascimento,'%d/%m/%Y')as dt_nascimento,responsavel FROM aluno; ");
    $sql->execute();

    // fetchall - recuperar todos os registros da tabela

    // PDO::FETCH_CLASS - RESULTADO SEJA ARMAZENADO EM UM OBJETO

    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    echo "<table class='table table-dark'>";

    foreach ($rows as $row){

        echo "<td>Número<td>$row->id</td><td>Nome<td>$row->nome</td><td>Sobre Nome<td>$row->sobrenome</td><td>Data de Nascimento<td>$row->dt_nascimento</td><td>Responsável<td>$row->responsavel</td></tr>";
    }

    echo "</table>";


    ?>

</div>
</body>
</html>