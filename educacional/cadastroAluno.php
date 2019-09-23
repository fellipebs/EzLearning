
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
                                            <li><span class="bread-blod">Notas</span>
                                            
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
                        
                        <?php if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                        ?>
                          
                            <div class="asset-inner">
                        
                            <center><h2>Cadastro de Aluno:</h2></center>
                            <br>
                            <form action='../models/processa_cad_aluno.php' method='post'>
                            <center><div style='width: 1200px;'>

                               
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Aluno:</label>
                            <input class="form-control" type="text" name="nome" id="nome"  aria-describedby="emailHelp" placeholder="Nome do Aluno"><br>
                        </div>

                                
                        <div class="form-group">
                            <label for="exampleInputEmail1">SobreNome do Aluno:</label>
                            <input class="form-control" type="text" name="sobrenome" id="sobrenome"  aria-describedby="emailHelp" placeholder="Sobre nome do Aluno"><br>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Data de Nascimento:</label>
                            <input class="form-control" type="date" name="dt_nascimento" id="dt_nascimento"  aria-describedby="emailHelp" placeholder="Data de Nascimento"><br>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Responsável:</label>
                            <input class="form-control" type="text" name="responsavel" id="responsavel"  aria-describedby="emailHelp" placeholder="Responsavel do Aluno"><br>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Escolha a Turma do Aluno:</label>
                            <select  class="form-control" name="turma_id" id="turma_id" aria-describedby="emailHelp" placeholder="Enter email">
                            <?php
                            $sql = $con->prepare("SELECT * from turma");
                            $sql->execute();
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            foreach ($rows as $row){
                                echo "<option value='".$row->id."'>".$row->nome_turma."</option>";
                            }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Selecione o Usuário do Aluno:</label>
                            <select  class="form-control" name="usuario_id_aluno" id="usuario_id_aluno" aria-describedby="emailHelp" placeholder="Enter email">
                            <?php
                            $sql = $con->prepare("SELECT * from usuarios WHERE tipo = 0");
                            $sql->execute();
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            foreach ($rows as $row){
                                echo "<option value='".$row->id."'>".$row->usuario."</option>";
                            }
                            ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                            </div>
                                </div>
                                </table>
                                <br><br>
                            <br>
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