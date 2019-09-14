<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | Educacional</title>
    <link rel="stylesheet" href="../assets/css/aluno/aluno.css">
    <?php
    session_start();
    require_once ('../models/conexao/conexao.php');
    require_once("../componets/head.php");
    $sql = $con->prepare("SELECT * FROM escola WHERE usuario_id_escola = ?");
    $sql->execute(array($_SESSION['usuario']->id) );
    $row = $sql->fetchObject();
    if($row){
        $_SESSION['escola'] = $row; 
    }
    ?>
</head>
<body>
    <?php require_once("../componets/menus.php");?>
    <div class="container-fluid margem centro">

        <div id="MediaTurma" class="tabcontent" style='overflow: auto;'>
                                       
                                        <form action="graficoMedia.php" method="post">
                                        <h3>Selecione a atividade para ver a média das turmas</h3>

                                    <label>Atividade:</label>

                                    <select class='form-control' name='atividadeMedia'>
                                    <?php 
                                      $sql = $con->prepare("select * from atividade;");
                                      $sql->execute();
                                      $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                      foreach ($rows as $atv){
                                        echo "<option value=".$atv->id.">".$atv->nome."</option>";  
                                      }
                                    ?>
                                    </select>
                                    <br>
                                    <button class='btn btn-primary'>Continuar</button>
                                    </form>

    </div>
</body>
</html>