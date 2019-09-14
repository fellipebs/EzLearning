
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    //require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
    require_once("../componets/head.php");
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
                                <table>
                                <h2>
                                   Gráfico da Média por aluno na atividade escolhida: 
                                </h2>  
                                <?php //$turma = $_POST['turmaMedia']; ?> 
                                <?php $atividade = $_POST['atividadeMedia']; ?> 

                        <?php 
                        $sql= $con->prepare("select * from turma;;");
                        $sql->execute();
                        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

                        foreach($rows as $row){
                        $sql= $con->prepare("select round(avg(n.nota), 2) as media from nota n inner join aluno a on n.aluno_id = a.id where a.turma_id = ? and atividade_id = ?;");
                        $sql->execute(array($row->id,$atividade));
                        $linhas = $sql->fetchAll(PDO::FETCH_CLASS);
                            foreach($linhas as $sql){
                                echo $sql->media;
                                echo "<br>";
                            }

                        }

                        
                      
                        ?>
                                
<!-- Terminar de montar o Gráfico, select já retornou os valores desejados. -->
                        
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <div id="chart_div" style='height: 1000px;'></div>
                                   
        <script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawMultSeries);

        function drawMultSeries() {
        var data = google.visualization.arrayToDataTable([    
        ['Média por aluno em relação a sala', 'Aluno', 'Sala'],
        <?php
        foreach($rows as $linhas){
        echo "['".$linhas->nome."',".$linhas->nota.",".$media."],";
        }
        ?>
        
      ]);

      var options = {
        title: 'Média por aluno em relação a sala',
        chartArea: {width: '70%'},
        hAxis: {
          title: '',
          minValue: 0
        },
        vAxis: {
          title: ''
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
                           
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