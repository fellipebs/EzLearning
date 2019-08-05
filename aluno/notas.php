<!doctype html>
<html class="no-js" lang="zxx">
<meta charset="UTF-8">
<head>
<?php 
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
  $sql= $con->prepare("SELECT * FROM aluno WHERE aluno.usuario_id_aluno = ?");
  $sql->execute(array($_SESSION['usuario']->id));
  $aluno = $sql->fetchObject();

  $sql= $con->prepare("SELECT * FROM nota n inner join aluno a on n.aluno_id = a.id INNER JOIN atividade atv on atv.id = n.atividade_id WHERE n.aluno_id = ?");
  $sql->execute(array($aluno->id));
  $rows = $sql->fetchAll(PDO::FETCH_CLASS);
  require_once('../models/restrito/VerificarSeLogadoAluno1.php');
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
            <thead>
            <tr>
                <th scope="col">Atividade</th>
                <th scope="col">Valor</th>
                <th scope="col">Nota</th>
                </tr>
            </thead>
            <?php foreach($rows as $row):?>
            
            <tbody>
                <tr>
                <th scope="row"><?php echo $row->nome;?></th>
                <td><?php echo $row->valor_atividade;?></td>
                <td><?php echo $row->nota;?></td>
                </tr>
            </tbody>
            
<?php endforeach;?>
</table>
            </div>
            </div>
        </div>
    </div>
    <?php require_once("../componets/footer.php");?>
    <?php require_once("../componets/js.php");?>
</body>

</html>