
<?php
    session_start();

    require_once ('../models/conexao/conexao.php'); 
    $sql= $con->prepare("SELECT id,nome,sobrenome,DATE_FORMAT(dt_nascimento,'%d/%m/%Y')as dt_nascimento,responsavel, usuario_id_aluno FROM aluno; ");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    require_once('../models/restrito/VerificarSeLogadoProfessor1.php');

    require_once("../componets/head.php");
?>
<body>
    <?php require_once("../componets/menus.php");?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                            
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="../#">Home</a> <span class="bread-slash"></span>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("../componets/footer.php");?>
        <?php require_once("../componets/js.php");?>
</body>

</html>