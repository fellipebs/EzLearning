<html>
<head>
<?php  require_once ('../models/conexao/conexao.php');  ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" src="../assets/css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Easy Learning (Trocar!)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <ul class="nav navbar-nav navbar-right">
      <li><span style='color: white;'>
<?php
session_start();
echo $_SESSION['usuario']->usuario;
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
<form method="post" action="VisualizarProgressoTurma.php" enctype="multipart/form-data">
<?php 
        echo"<div class='form-group'>";
        echo"<label>Selecione a turma que deseja ver o progresso:</label>";
        echo"<select class='form-control' name='turma'>";
        $sql = $con->prepare("SELECT * FROM turma where escola_id_turma = ".$_SESSION['usuario']->id."");
        $sql->execute();

        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        //fetchAll - recupera todos os registros da tabela
        //PDO::FETCH_CLASS - resultado é armazenado em um objeto

            foreach ($rows as $row){
                echo "<option value='$row->id'>$row->nome_turma</option>";
            }
       echo" </select>";
       echo "</div>";
    ?>
    <button type="submit" class="btn btn-primary">Visualizar</button>
    </form>
    </div>
</div>
</body>
</html>