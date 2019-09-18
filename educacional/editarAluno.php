
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    //require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
    require_once("../componets/head.php");
    $sql= $con->prepare("SELECT * FROM turma;");
    $sql->execute();
    $turmas = $sql->fetchAll(PDO::FETCH_CLASS);
?>



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
                                            <li><a href="lancarnotas.php">Lançar Notas</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="lancarnotas.php">Editar Notas</a> <span class="bread-slash">/</span>
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
                          
                            <div class="asset-inner" >
                            <?php $alunoId = $_POST['idAluno']; 
                            $sql= $con->prepare("select a.nome, a.sobrenome, a.dt_nascimento, a.responsavel, t.nome_turma, a.turma_id from aluno a inner join turma t on a.turma_id = t.id where a.id = ?;");
                            $sql->execute(array($alunoId));
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            
                            echo "<form action='recebeAlunoEditado.php' method='post'>";
                            echo "<input type='hidden' name='id' value='$alunoId'>";
                            foreach($rows as $row){
                                echo "<label> Nome: </label>";
                                echo "<input type='text' name='nome' value='$row->nome' class='form-control' required>";
                                echo "<br>";
                                echo "<label> Sobrenome: </label>";
                                echo "<input type='text' name='sobrenome' value='$row->sobrenome' class='form-control' required>";
                                echo "<br>";
                                echo "<label> Data de nascimento: </label>";
                                echo "<input type='date' name='dt_nascimento' value='$row->dt_nascimento' class='form-control' required>";
                                echo "<br>";
                                echo "<label> Responsável: </label>";
                                echo "<input type='text' name='responsavel' value='$row->responsavel' class='form-control' required>";
                                echo "<br>";
                                echo "<label> Turma: </label>";
                                echo "<select name='nome_turma' class='form-control'>";
                                echo "<option value='$row->turma_id'>$row->nome_turma</option>";
                                foreach($turmas as $turma){
                                    echo "<option value='$turma->id'>$turma->nome_turma</option>";
                               }
                               echo "</select>"; 
                               echo "<br>";   
                            }
                            echo "<button class='btn btn-primary'>Finalizar a edição</button>";
                            echo "</form>";
                            ?>
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