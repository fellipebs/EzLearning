<?php
  session_start();
  require_once ('../models/conexao/conexao.php');  
  $sql = $con->prepare("SELECT * FROM turma where escola_id_turma = ".$_SESSION['usuario']->id."");
  $sql->execute();
  $rows = $sql->fetchAll(PDO::FETCH_CLASS);
  $visualizar = false;
  if(isset($_POST['turma'])){
    $turma = $_POST['turma'];
    $sql = $con->prepare("select round(avg(nota * 100)) as Nota_turma from atividades where turma_id_atividade = ".$turma."");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $visualizar = true;
  }
  require("../models/restrito.php");
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
  <form method="post" action="ProgressoTurma.php" enctype="multipart/form-data">
    <label>Selecione a turma que deseja ver o progresso:</label>
    <select name="turma">
      <?php foreach ($rows as $row): ?>
        <option value="<?php echo $row->id;?>"><?php echo$row->nome_turma;?></option>
      <?php endforeach ?>
    </select>
    <button type="submit" class="btn btn-full">Visualizar</button>
  </form>
</div>

<div class="row">
  <?php if($visualizar): ?>

    <h3>Aproveitamento da turma até o momento: <?php echo $result[0]['Nota_turma'] ?>%</h3>

  <?php endif ?>

  
</div>

</body>
</html>