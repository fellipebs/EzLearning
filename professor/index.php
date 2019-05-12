
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Pesquisar..." class="search-int form-control">
                                                <a href="../#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="../#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Listagem de Alunos</span>
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
                                            <td><img src="../assets/img/product/book-1.jpg" alt="" /></td>
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