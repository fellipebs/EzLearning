
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
                        
                            <?php if(isset($_SESSION['msg'])){
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                            ?>
                            <center><h2>Cadastro de Usuario</h2></center>
                            <br>
                            <form action='../models/processa_cad_usuario.php' method='post'>
                            
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Usuario:</label>
                            <input class="form-control" type="text" name="usuario" id="usuario"  aria-describedby="emailHelp" placeholder="Nome do Usuario"><br>
                        

                        <label for="exampleInputEmail1">E-mail:</label>
                            <input class="form-control" type="texte" name="email" id="email"  aria-describedby="emailHelp" placeholder="Insira seu E-mail"><br>
                    

                        <label for="exampleInputEmail1">Login:</label>
                            <input class="form-control" type="texte" name="login" id="login"  aria-describedby="emailHelp" placeholder="Insira seu Login"><br>
                      

                        <label for="exampleInputEmail1">Senha:</label>
                            <input class="form-control" type="password" name="senha" id="senha"  aria-describedby="emailHelp" placeholder="Insira sua Senha"><br>
                                    
          
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


 


