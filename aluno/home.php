<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | Aluno</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/aluno/aluno.css">
    <?php
    header('Content-Type: text/html; charset=iso-8859-1');
    header("Content-type: text/html; charset=utf-8");
    session_start();
    require_once('../models/restrito/VerificarSeLogadoAluno1.php');
    require_once ('../models/conexao/conexao.php');
    require_once("../componets/head.php");
    $sql = $con->prepare("SELECT * FROM aluno WHERE usuario_id_aluno = ?");
    $sql->execute(array($_SESSION['usuario']->id) );
    $row = $sql->fetchObject();
    if($row){
        $_SESSION['aluno'] = $row; 
    }
    $sql = $con->prepare("SELECT atividade_id FROM atividade_aluno WHERE aluno_id = ?");
    $sql->execute(array($_SESSION['aluno']->id) );
    $id_atividade = $sql->fetchObject();
    
    $sql = $con->prepare("SELECT * FROM atividade inner join atividade_aluno on atividade.id = atividade_aluno.atividade_id WHERE atividade_aluno.aluno_id = ?");
    $sql->execute(array($_SESSION['aluno']->id));
    $atividades = $sql->fetchAll(PDO::FETCH_CLASS);


    ?>
</head>
<body>
    <?php require_once("../componets/menus.php");?>
    <div class="container-fluid" style="margin-left: 80px; margin-top: 100px;">
        <h1 class="centro">Seja bem vindo <?php echo $_SESSION['aluno']->nome;?></h1>
        <br> <br><br>
        <h3>Atividades Corrigidas</h3>
        <div class="row">
                <?php foreach ($atividades as $atividade): 
                        if($atividade->status == 'Corrigida - Com nota'):
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="<?php echo $atividade->arquivo?>">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="<?php echo $atividade->imagem?>" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2><?php echo $atividade->nome?></h2>
                                <p class="dp"><?php echo $atividade->descricao?></p>
                            </div>
                        </div>
                    </a>
                    </div>
                        <?php endif; endforeach; ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h3>Atividades Aguardando Correção</h3>
        <div class="row">
                <?php foreach ($atividades as $atividade): 
                        if($atividade->status == 'Aguardando Correcao'):
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="<?php echo $atividade->arquivo?>">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="<?php echo $atividade->imagem?>" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2><?php echo $atividade->nome?></h2>
                                <p class="dp"><?php echo $atividade->descricao?></p>
                            </div>
                        </div>
                    </a>
                    </div>
                        <?php endif; endforeach; ?>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h3>Atividades Pendentes</h3>
        <div class="row">
                <?php foreach ($atividades as $atividade): 
                        if($atividade->status == 'pendente'):
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="<?php echo $atividade->arquivo?>">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="<?php echo $atividade->imagem?>" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2><?php echo $atividade->nome?></h2>
                                <p class="dp"><?php echo $atividade->descricao?></p>
                            </div>
                        </div>
                    </a>
                    </div>
                        <?php endif; endforeach; ?>
    </div>
</body>
</html>