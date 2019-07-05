
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
                                            <li><span class="bread-blod">Enviar notificações</span>
                                            
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
                                      <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"> <h3>Média geral dos alunos</h3></button>
                                      <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                                    </div>

                                    <div id="London" class="tabcontent">
                                     
                                      <?php
                                        
                                        $sql = $con->prepare("SELECT * from nota");
                                        $sql->execute();
                                        $total = 0;
                                        echo "<h2> Notas de todos alunos somadas: </h2>";
                                        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                        foreach ($rows as $row){
                                            
                                            $total += $row->nota;
                                            
                                        }
                                        echo $total;
                                    ?>
                                    <div id="donut_single" style="width: 600px; height: 300px;"></div>
                                    </div>

                                    <div id="Paris" class="tabcontent">
                                      <h3>Paris</h3>
                                      <p>Paris is the capital of France.</p> 
                                    </div>

                                    <div id="Tokyo" class="tabcontent">
                                      <h3>Tokyo</h3>
                                      <p>Tokyo is the capital of Japan.</p>
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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Effort', 'Amount given'],
          ['Pontuação da sala',     <?php echo '90' ?>],
          ['Total', <?php ?>],
        ]);

        var options = {
          pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
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