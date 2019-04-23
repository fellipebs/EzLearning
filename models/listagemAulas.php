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
    <h3>Lista de Aulas</h3>


    <?php


    require_once 'conexao/conexao.php';
    require_once 'conexao/cadastrar_usuario.php';

    //$sql= $con->prepare("SELECT id,titulo,DATE_FORMAT(data,'%d/%m/%Y')as data,professr_id_aula FROM aula; ");
    $sql= $con->prepare(" SELECT titulo,DATE_FORMAT(data,'%d/%m/%Y')as data,professor_nome, professor_id_aula
FROM aula
INNER JOIN professor
ON aula.professor_nome = professor.nome;");
    $sql->execute();

    // fetchall - recuperar todos os registros da tabela

    // PDO::FETCH_CLASS - RESULTADO SEJA ARMAZENADO EM UM OBJETO

    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    echo "<table class='table table-dark'>";

    foreach ($rows as $row){

        echo "<td>Matéria<td>$row->titulo</td><td>Data<td>$row->data</td><td>Nome<td>$row->professor_nome</td><td>Professor_Id<td>$row->professor_id_aula</td></tr>";
    }

    echo "</table>";


    ?>

</div>
</body>
</html>