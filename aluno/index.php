<?php 
header("Content-type:text/html; charset=utf8");
require_once ('../models/conexao/conexao.php');
session_start();
$sql= $con->prepare("SELECT id,nota,codigo FROM atividades; ");
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
   <nav class="padding-nav">
   <div class="logo-black">Easy Learning</div>
    <ul class="main-nav nav-black">
      <li>
        <img  class="rounded-circle" height="50px" src="../assets/images/user/<?php  echo $_SESSION['foto'];?>" alt="">
        <a href="#" class="navbar-brand"><?php echo $_SESSION['usuario']->usuario;?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="alterar-perfil.php">Alterar Perfil</a>
      </li>
    </ul>
  </nav>
  <div class="clearfix"></div>
  <div class="row fluid-row">
    <?php foreach ($rows as $row): ?>
        <a href="">
            <div class="card">
                <img src="../assets/images/algorithm.png" alt="Avatar">
                <div class="card-content">
                    <h4>Atividade</h4> 
                    <p>Nome da Atividade</p> 
                </div>
            </div>
         </a>
        <a href="">
            <div class="card">
                <img src="../assets/images/algorithm.png" alt="Avatar">
                <div class="card-content">
                    <h4>Atividade</h4> 
                    <p>Nome da Atividade</p> 
                </div>
            </div>
         </a>
        
    <?php endforeach; ?>
    
</div>

</body>
    

</html>