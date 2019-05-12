<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    $sql= $con->prepare("SELECT id,nome,sobrenome,DATE_FORMAT(dt_nascimento,'%d/%m/%Y')as dt_nascimento,responsavel, usuario_id_aluno FROM aluno; ");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    require("../models/restrito.php");

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
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="basic-login-inner inline-basic-form">
                                    <form action="../models/receberalunoeditado.php">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <input type="text"
                                                        class="form-control basic-ele-mg-b-10 responsive-mg-b-10"
                                                        placeholder="Nome" />
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <input type="text"
                                                        class="form-control basic-ele-mg-b-10 responsive-mg-b-10"
                                                        placeholder="data de nascimento" />
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <input type="text"
                                                        class="form-control basic-ele-mg-b-10 responsive-mg-b-10"
                                                        placeholder="Responsavel" />
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <button class="btn btn-sm btn-primary login-submit-cs"
                                                        type="submit">Cadastrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                        <h4>Listagem De Alunos</h4>


                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Cdigo</th>
                                    <th>Foto</th>
                                    <th>Nome</th>
                                    <th>Status</th>
                                    <th>Nascimento</th>
                                    <th>Responsavel</th>
                                    <th>Operações</th>
                                </tr>
                                <?php foreach ($rows as $row): ?>
                                    <tr>
                                        <td><?= $row->id ?></td>
                                        <td><img src="../img/product/book-1.jpg" alt="" /></td>
                                        <td><?= $row->nome ?></td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td><?= $row->dt_nascimento ?></td>
                                        <td><?= $row->responsavel ?></td>
                                        
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </table>
                        </div>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="../#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="../#">1</a></li>
                                <li class="page-item"><a class="page-link" href="../#">2</a></li>
                                <li class="page-item"><a class="page-link" href="../#">3</a></li>
                                <li class="page-item"><a class="page-link" href="../#">Next</a></li>
                            </ul>
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