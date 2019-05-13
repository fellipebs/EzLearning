<?php 
  session_start();
  require_once('../models/restrito.php');
  require_once ('../models/conexao/conexao.php');
  $sql= $con->prepare("SELECT id,nota,codigo FROM atividades; ");
  $sql->execute();
  $rows = $sql->fetchAll(PDO::FETCH_CLASS);

  require_once("../componets/head.php");
?>

<body>
    <?php require_once("../componets/menus.php");?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="PEsquisar..." class="search-int form-control">
                                        <a href="../#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="../#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Aluno</span>
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
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($rows as $row): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="../assets/img/student/1.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Atividade</h2>
                                <p class="dp">Descricao da atividade</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php require_once("../componets/footer.php");?>
    <?php require_once("../componets/js.php");?>
</body>

</html>