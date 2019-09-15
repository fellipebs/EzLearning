<?php
session_start();
//require_once('../models/restrito/VerificarSeLogadoAluno1.php');
    require_once ('../models/conexao/conexao.php'); 
    require_once("../componets/head.php");

    require_once ('../models/conexao/conexao.php'); 
    $sql= $con->prepare("SELECT nome,sobrenome FROM professor where usuario_id_professor = ?;");
    $sql->execute(array($_SESSION['usuario']->id));
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

?>

<body>
    <?php require_once("../componets/menus.php");?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Edit Student</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Edite Informações básicas</a></li>
                            <li><a href="#reviews"> Edite Informações da conta</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action=""
                                                    class="dropzone dropzone-custom needsclick add-professors"
                                                    id="demo1-upload">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <?php foreach($rows as $aux){ ?>
                                                           
                                                            <div class="form-group">
                                                            <label>Nome</label>
                                                                <input name="number" type="text" class="form-control"  placeholder="Nome" value="<?= $aux->nome ?>">
                                                            </div>
                                                            <label>Sobrenome</label>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Sobrenome" value="<?= $aux->sobrenome ?>">
                                                            </div>
                                                            <?php } ?>
                                                           
                                                        </div>
                                                    </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Atualizar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="devit-card-custom">
                                                    <form  method="post" action="../models/alterar.php"
                                                    class="dropzone dropzone-custom needsclick add-professors"
                                                    id="demo1-upload">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Email"
                                                                value="<?php echo $_SESSION['usuario']->email ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Login" value="<?php echo $_SESSION['usuario']->login ?>" name="usuario">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                placeholder="Senha Antiga" name="senhaAntiga">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                placeholder="Nova Senha" name="novaSenha">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                placeholder="Confirmar Senha" name="comfirmarSenha">
                                                        </div>
                                                      
                                                        <button type="submit"  class="btn btn-primary waves-effect waves-light">Atualizar</button>
                                                        </form>                                                   
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../componets/footer.php");?>
    <?php require_once("../componets/js.php");?>


</body>

</html>