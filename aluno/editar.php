<?php
session_start();
require_once('../models/restrito.php');
    require_once ('../models/conexao/conexao.php'); 

    require_once("../componets/head.php");

    $sql = $con->prepare("SELECT * FROM aluno WHERE usuario_id_aluno = ?");
    $sql->execute( array($_SESSION['usuario']->id) );
    $row = $sql->fetchObject();
    if($row){
        $_SESSION['aluno'] = $row; 
    }
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
                            <li class="active"><a href="#description">Edit Basic Information</a></li>
                            <li><a href="#reviews"> Edit Account Information</a></li>
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
                                                            <div class="form-group">
                                                                <input name="number" type="text" class="form-control"
                                                                    placeholder="Fly Zend" value="<?php echo $_SESSION['aluno']->nome ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="E104, catn-2, UK."
                                                                    value="<?php echo $_SESSION['aluno']->sobrenome ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="12/10/1993" value="<?php echo date("m-d-Y", strtotime($_SESSION['aluno']->dt_nascimento)); ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="1213" value="<?php echo $_SESSION['aluno']->responsavel ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    placeholder="01962067309" value="01962067309">
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Submit</button>
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
                                                                placeholder="Senha Atual" name="novaSenha">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                placeholder="Confirmar Senha" name="comfirmarSenha">
                                                        </div>
                                                        <div class="form-group alert-up-pd">
                                                                <div class="dz-message needsclick download-custom">
                                                                    <i class="fa fa-download edudropnone"
                                                                        aria-hidden="true"></i>
                                                                    <h2 class="edudropnone">Drop image here or click to
                                                                        upload.</h2>
                                                                    <p class="edudropnone"><span
                                                                            class="note needsclick">(This is just a demo
                                                                            dropzone. Selected image is
                                                                            <strong>not</strong> actually
                                                                            uploaded.)</span>
                                                                    </p>
                                                                    <input name="imageico" class="hd-pro-img"
                                                                        type="text" />
                                                                </div>
                                                        <button type="submit"  class="btn btn-primary waves-effect waves-light">Submit</button>
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