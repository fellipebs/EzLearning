<?php
session_start();
require_once('../models/conexao/conexao.php');
require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');
require_once("../componets/head.php");
?>



<body>
    <script src="js/notificacao.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/listagemNotas.css">
    <?php require_once("../componets/menus.php"); ?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">

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
                                <?php //$turma = $_POST['turmaMedia']; 
                                ?>
                                <?php $atividade = $_POST['atividadeMedia']; ?>

                                <?php
                                //Resgatando a média total;
                                $sql = $con->prepare("select avg(nota) as mediaTot from nota where atividade_id = ?;");
                                $sql->execute(array($atividade));
                                $mediaTotal = $sql->fetchAll(PDO::FETCH_CLASS);
                                foreach ($mediaTotal as $aux) {
                                    $media = $aux->mediaTot;
                                }
                                ?>


                                <!-- Terminar de montar o Gráfico, select já retornou os valores desejados. -->

                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <div id="chart_div" style='height: 1000px;'></div>

                                <script>
                                    google.charts.load('current', {
                                        packages: ['corechart', 'bar']
                                    });
                                    google.charts.setOnLoadCallback(drawMultSeries);

                                    function drawMultSeries() {
                                        var data = google.visualization.arrayToDataTable([
                                            ['Média da turma em relação as outras', 'Turma', 'Média total das turmas'],

                                            <?php
                                            //Resgatando todas as turmas;
                                            $sql = $con->prepare("select * from turma;;");
                                            $sql->execute();
                                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                            foreach ($rows as $row) {
                                                //resgatando a media de cada uma individualmente
                                                $sql = $con->prepare("select round(avg(n.nota), 2) as medias, t.nome_turma from nota n inner join aluno a inner join turma t on n.aluno_id = a.id and a.turma_id = t.id where a.turma_id = ? and atividade_id = ?;");
                                                $sql->execute(array($row->id, $atividade));
                                                $linhas = $sql->fetchAll(PDO::FETCH_CLASS);
                                                foreach ($linhas as $sql) {
                                                    echo "['" . $sql->nome_turma . "'," . $sql->medias . "," . $media . "],";
                                                }
                                            }
                                            ?>

                                        ]);

                                        var options = {
                                            title: 'Gráfico da Média por turma em relção a outras turmas:',

                                            chartArea: {
                                                width: '70%'
                                            },
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
    <?php require_once("../componets/footer.php"); ?>
    <?php require_once("../componets/js.php"); ?>
</body>

</html>