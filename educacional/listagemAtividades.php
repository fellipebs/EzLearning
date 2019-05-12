<?php
    session_start();
    require_once ('../models/conexao/conexao.php');
    $sql= $con->prepare("SELECT id,nota,codigo FROM atividades; ");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    require("../models/restrito.php");

    require_once("../componets/head.php");
?>
<body>
    <?php require_once("../componets/menus.php");?>
    
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Listagem De Ativodades</h4>


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
                                <tr>
                                    <td>1</td>
                                    <td><img src="../img/product/book-1.jpg" alt="" /></td>
                                    <td>Web Development Book</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>Html, Css</td>
                                    <td>CSE</td>

                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>

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