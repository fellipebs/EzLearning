<!DOCTYPE html>
<html>
<head>
	<title>Medalhas</title>
	<meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="../assets/css/medals/demo.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/medals/common.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/medals/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="../assets/js/medals/modernizr.custom.79639.js"></script> 
    <?php 
  session_start();
  require_once('../models/restrito.php');
  require_once ('../models/conexao/conexao.php');
  $sql= $con->prepare("SELECT id,nota,codigo FROM atividades; ");
  $sql->execute();
  $rows = $sql->fetchAll(PDO::FETCH_CLASS);

  require_once("../componets/head.php");
?>
</head>
<body>
<?php require_once("../componets/menus.php");?>
    <div class="container-fluid ">
        </div>
        <br><br><br>
            <h1><strong>Medalhas</strong> Como ganhar?</h1>
            <h4>Tenha grandes de quantidades de medalhas de ouro, prata ou bronze! - Quanto melhor for sua classificação nas atividades, maior a chance de entrar!</h4>            
        </header>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <figure class="legenda-imagem borda-imagem">
                    <p>Medalha de Ouro</p>
                    <img src= "../assets/images/medals/Medalha_Ouro.png" width="90" height="100" title="">
                    <p>Faça as atividades dentro do prazo. - Encontre a sulução simples. - Atividade entregue com antecedência!</p>
                    </figure>
                </div>
                <div class="col-md-4 mx-auto">
                    <p>Medalha de Prata</p>
                    <img src= "../assets/images/medals/Medalha_Prata.png" width="90" height="100" title="">
                    <p>Faça as atividades dentro do prazo. - Atividade enviada sem erros. - Atividade entregue com antecedência!</p>
                </div>
                <div class="col-md-4 mx-auto">
                <p>Medalha de Bronze</p>
              <img src= "../assets/images/medals/Medalha_Bronze.png" width="90" height="100" title="">
              <p>Faça as atividades dentro do prazo - Atividade enviada poucos erros. - Atividade entregue com antecedência!</p>
                </div>
            </div>
        </div>
        
    
<h3>Ranking Pessoal</h3>
<p>Mostra sua pontuação quantidade de medalhas de ouro prata e bronze e pontuação</p>
<?php require_once("inc/pontuacao-medalha.php");?>
<h3>Ranking Geral</h3>
<p>Mostra os melhores classificados quantidade de ouro prata bronze e sua pontuação</p>
<?php require_once("inc/ranking-geral.php");?>
</div>
</body>
<?php require_once("../componets/footer.php");?>
    <?php require_once("../componets/js.php");?>
</html>

