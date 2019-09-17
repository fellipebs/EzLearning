<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once('../../components/head.php') ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Atividade de Laços de Repetição uso do Contar</h1>
                <p>Esta atividade tem como objetivo te ensinar a contar de 1 até 5.</p>
                <br>
                <h4>Exemplo</h4>
                <div id="blocosDiv" class="area-demo"></div>
                <br>
                <p>O bloco contar a partir da variável i de 1 até 5 conta de 1 em 1, o proximo bloco imprime o valor da variável i na tela 5 vezes</p>
                <a href="contar.php" class="btn btn-success">Iniciar a atividade</a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="../../js/ler_xml_blockly"></script>
<script>
    var workspace = Blockly.inject('blocosDiv', {
        media: '../../../google-blockly/media/',
        toolbox: document.getElementById('toolbox'),
        trashcan: false
    });

    readTextFile("../../demo/demo_contar.txt");
    var xml = Blockly.Xml.textToDom(allText);
    Blockly.Xml.domToWorkspace(xml, workspace);
</script>