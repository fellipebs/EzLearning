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
                <h1>Atividade de Lógica uso do se</h1>
                <p>Esta atividade tem como objetivo te ensinar a usar o se para testar se a condição é verdadeira</p>
                <br>
                <h4>Exemplo</h4>
                <div id="blocosDiv" class="area-demo"></div>
                <br>
                <p>O bloco se testa se 1 é = a 1 , apos essa condição ser verdadeira ele imprime na tela verdadeiro</p>
                <a href="seSenao.php" class="btn btn-success">Iniciar a atividade</a>
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

    readTextFile("../../demo/demo_seSenao.txt");
    var xml = Blockly.Xml.textToDom(allText);
    Blockly.Xml.domToWorkspace(xml, workspace);
</script>