<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | Aluno</title>
    <link rel="stylesheet" href="../assets/css/aluno/aluno.css">
    <?php
    session_start();
    require_once ('../models/conexao/conexao.php');
    require_once("../componets/head.php");
    $sql = $con->prepare("SELECT * FROM aluno WHERE usuario_id_aluno = ?");
    $sql->execute(array($_SESSION['usuario']->id) );
    $row = $sql->fetchObject();
    if($row){
        $_SESSION['aluno'] = $row; 
    }
    ?>
</head>
<body>
    <?php require_once("../componets/menus.php");?>
    <div class="container-fluid margem centro">
        <h1>Seja bem vindo <?php echo $_SESSION['aluno']->nome;?></h1>
    </div>
</body>
</html>