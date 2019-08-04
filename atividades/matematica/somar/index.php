<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('../../components/head.php')?>
    <title>Atividade soma</title>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Atividade soma</h1>
            <p>Esta atividade tem como objetivo te ensinar a somar usando blocos, o objetivo desta atividade é somar dois números</p>
            <br>
            <h4>Exemplo</h4>
            <div id="blocosDiv" class="area-demo"></div>
            <br>
            <p>O bloco definir (soma) cria a variável para guardar o valor da soma realizada pelo proximo bloco, o bloco imprime mostra na tela o valor da variável soma.</p>
            <a href="soma.php" class="btn btn-success">Iniciar a atividade</a>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>
<script type="text/javascript" src="../../js/ler_xml_blockly"></script>
<script>
     var workspace = Blockly.inject('blocosDiv',
            {media: '../../../google-blockly/media/',
             toolbox: document.getElementById('toolbox'),
             trashcan: false});

            readTextFile("../../demo/demo_soma.txt");
            var xml = Blockly.Xml.textToDom(allText);
            Blockly.Xml.domToWorkspace(xml, workspace);
</script>