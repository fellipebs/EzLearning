
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    require("../models/restrito.php");
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
                                <table>
                            
                                <h2>
                                   Listagem de notas dos alunos
                                </h2>   

                                    <div class="tab">
                                      <button class="tablinks" onclick="openCity(event, 'Turma')" id="defaultOpen"> <h3>Média geral dos alunos</h3></button>
                                      <button class="tablinks" onclick="openCity(event, 'Aluno')"><h3>Média por aluno</h3></button>
                                     
                                    </div>

                                    <div id="Turma" class="tabcontent">
                                     
                                      <?php
                                        
                                        $sql = $con->prepare("SELECT * from nota");
                                        $sql->execute();
                                        $total = 0;
                                        $notas = 0;
                                        echo "<h2> Notas de todos alunos somadas: </h2>";
                                        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                        foreach ($rows as $row){
                                            
                                            $total += $row->valor_atividade;
                                            $notas += $row->nota;
                                            
                                        }           
                                      
                                    ?>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                     <div id="chart_div"></div>
                                     <br><h4>Percentual de aproveitamento: <?php echo ($notas/$total*100)."%" ?></h4>
      
                                    </div>

                                    <div id="Aluno" class="tabcontent">
                                      <h2>Percentual de aproveitamento por aluno:</h2>
                                      <?php
                                        
                                        $sql = $con->prepare("select a.nome, sum(n.nota) as notas from aluno a
                                        inner join nota n on n.aluno_id = a.id;");
                                        $sql->execute();
                                        echo "<h2> Notas de todos alunos somadas: </h2>";
                                        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                        foreach ($rows as $notatotal){
                                            echo "Nome do aluno: ".$notatotal->nome;
                                            echo "<br>";
                                            echo "Nota total: ".$notatotal->notas;
                                            echo "<br>";
                                            echo "Média do aluno: ".($notatotal->notas/$total*100)."%";
                                            echo "<br>";
                                        }                                  
                                    ?>



                                    </div>
                                    <script>
                                    function openCity(evt, cityName) {
                                      var i, tabcontent, tablinks;
                                      tabcontent = document.getElementsByClassName("tabcontent");
                                      for (i = 0; i < tabcontent.length; i++) {
                                        tabcontent[i].style.display = "none";
                                      }
                                      tablinks = document.getElementsByClassName("tablinks");
                                      for (i = 0; i < tablinks.length; i++) {
                                       tablinks[i].className = tablinks[i].className.replace(" active", "");
                                      }
                                      document.getElementById(cityName).style.display = "block";
                                      evt.currentTarget.className += " active";
                                    }

                // Get the element with id="defaultOpen" and click on it
                        document.getElementById("defaultOpen").click();
                              </script>
                            
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAxisTickColors);

function drawAxisTickColors() {
      var data = google.visualization.arrayToDataTable([
        ['Notas', 'Total de pontos distribuidos', 'Total conseguido pela sala'],
        ['Pontos', <?php echo $total ?>,<?php echo $notas ?>],
      ]);

      var options = {
        title: 'Notas',
        chartArea: {width: '50%'},
        hAxis: {
          title: '',
          minValue: 0,
          textStyle: {
            bold: true,
            fontSize: 12,
            color: '#4d4d4d'
          },
          titleTextStyle: {
            bold: true,
            fontSize: 18,
            color: '#4d4d4d'
          }
        },
        vAxis: {
          title: '',
          textStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          },
          titleTextStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          }
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