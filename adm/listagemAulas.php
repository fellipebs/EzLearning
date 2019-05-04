<!DOCTYPE html>
<html>

<head>
    <title>5ยบ_A</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" src="../assets/css/styles.css">

    <link rel="shortcut icon" href="img/Aluno.png" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Easy Learning (Trocar!)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav navbar-right">
            <li><span style='color: white;'>
                    <?php

session_start();
require_once ('../models/conexao/conexao.php');
 
echo $_SESSION['usuario']->Usuario;
$foto = $_SESSION['usuario']->foto;
?>
                </span></li>
            <li>
                <?php
     echo" <img src='img/$foto' class='rounded-circle' width='50px' height='50px'>";
      ?>
            </li>

        </ul>
    </nav>
    <div class="container">
        <h3>Lista de Aulas</h3>


        <?php


    require_once 'conexao/conexao.php';
    require_once 'conexao/cadastrar_usuario.php';

   
    $sql= $con->prepare(" SELECT titulo,DATE_FORMAT(data,'%d/%m/%Y')as data,professor_id_aula, nome
FROM aula
INNER JOIN professor
ON aula.professor_id_aula = professor.id;");
    $sql->execute();

    // fetchall - recuperar todos os registros da tabela

    // PDO::FETCH_CLASS - RESULTADO SEJA ARMAZENADO EM UM OBJETO

    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    echo "<table class='table table-dark'>";

    foreach ($rows as $row){

        echo "<td>Matéria<td>$row->titulo</td><td>Data<td>$row->data</td><td>Professor_ID<td>$row->professor_id_aula</td></tr>";
    }

    echo "</table>";


    ?>

    </div>
</body>

</html>