<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('../../components/head.php')?>
    <title>Atividade multiplicação</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1>Atividade multiplicação</h1>
                    <p>Esta atividade tem como objetivo te ensinar a multiplicar usando blocos, o objetivo desta atividade é multiplicar dois números</p>
                    <br>
                    <h4>Exemplo</h4>
                    <div id="blocosDiv" class="area-demo"></div>
                    <br>
                    <p>O bloco definir (multiplicação) cria a variável para guardar o valor da multiplicação realizada pelo proximo bloco, o bloco imprime mostra na tela o valor da variável multiplicação</p>
                    <a href="multi.php" class="btn btn-success">Iniciar a atividade</a>
                </div>
                <div class="col-md-3"></div>
        </div>        
    </div>
</body>
</html>
<script type="text/javascript" src="../../js/ler_xml_blockly"></script>
<script>
     var workspace = Blockly.inject('blocosDiv',
            {media: '../../../google-blockly/media/',
             toolbox: document.getElementById('toolbox'),
             trashcan: false});

            readTextFile("../../demo/demo_multi.txt");
            var xml = Blockly.Xml.textToDom(allText);
            Blockly.Xml.domToWorkspace(xml, workspace);
</script>