
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');
    require_once("../componets/head.php");

  
?>
<meta charset="UTF-8">
<body>
<script src="js/notificacao.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/listagemNotas.css">
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
                                            <li><span class="bread-blod">Atividades</span>
                                            
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
                          
                            <div class="asset-inner">
                         
                           
                            <?php 
                            $row = $sql->fetchObject();
                            if(isset($_SESSION['msg2'])){
                                echo $_SESSION['msg2'];
                                unset($_SESSION['msg2']);
                            }
                             elseif(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                   
                                }             
                            
                            ?>  
                           
                            
                            <center><h2>Cadastro de Turmas</h2></center>
                            <br>
                            <form action='../models/processa_cad_turma.php' method='post'>
                            
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome da Turma:</label>
                            <input class="form-control" type="text" name="nome_turma" id="nome_turma"  aria-describedby="emailHelp" placeholder="Nome da Turma" required><br>
                        </div>
                            
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Selecione o Professor:</label>
                            <select class="form-control" name="professor_id_turma" id="professor_id_turma" aria-describedby="emailHelp" placeholder="Selecione o Professor">
                            <?php
                            $sql = $con->prepare("SELECT * from professor");
                            $sql->execute();
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            foreach ($rows as $row){
                                echo "<option value='".$row->id."'>".$row->nome."</option>";
                            }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Selecione a Escola:</label>
                            <select class="form-control" name="escola_id_turma" id="escola_id_turma" aria-describedby="emailHelp" placeholder="Selecione a Escola:">
                            <?php
                                 
                            $sql = $con->prepare("SELECT * from escola");
                            $sql->execute();
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            foreach ($rows as $row){
                                echo "<option value='".$row->Id."'>".$row->nome."</option>";
                            }
                            ?>
                            </select>
                        </div>
          
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                       

                        </form>
                            </div>
                                </div>
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<!-- <li class="page-item"><a class="page-link" href="../#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="../#">1</a></li>
									<li class="page-item"><a class="page-link" href="../#">2</a></li>
									<li class="page-item"><a class="page-link" href="../#">3</a></li>
									<li class="page-item"><a class="page-link" href="../#">Next</a></li> -->
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


 


