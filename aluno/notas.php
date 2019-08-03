<!doctype html>
<html class="no-js" lang="zxx">
<meta charset="UTF-8">
<head>
<?php 
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once('../models/restrito.php');
  require_once ('../models/conexao/conexao.php');
  $sql= $con->prepare("SELECT * FROM nota; ");
  $sql->execute();
  $rows = $sql->fetchAll(PDO::FETCH_CLASS);
  require_once("../models/VerificarSeLogado.php");
  require_once("../componets/head.php");
?>
</head>
<body>
    <?php require_once("../componets/menus.php");?>
    <div class="contacts-area mg-b-15">
        <br><br><br><br>
        <div class="container-fluid">
            <div class="row">
            <table class="table">
            <?php ?>
            <thead>
            <tr>
                <th scope="col">Atividade</th>
                <th scope="col">Valor</th>
                <th scope="col">Nota</th>
                <th scope="col">Média</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Soma</th>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                </tr>
                <tr>
                <th scope="row">Lógica</th>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                </tr>
                <tr>
                <th scope="row">Multiplicação</th>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                </tr>
            </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
    <?php require_once("../componets/footer.php");?>
    <?php require_once("../componets/js.php");?>
</body>

</html>