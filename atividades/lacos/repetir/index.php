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
                <h1>Atividade de Laços de Repetição</h1>
                <p>Esta atividade tem como objetivo te ensinar escrever na tela 'Olá Mundo' 3 Vezes.</p>
                <br>
                <h4>Exemplo</h4>
                <div id="blocosDiv" class="area-demo"></div>
                <br>
                <p>O bloco repita a patir do valor dado 3, repete a ação de imprimir na tela 'Olá Mundo' 3 vezes</p>
                <a href="repetir.php" class="btn btn-success">Iniciar a atividade</a>
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

    readTextFile("../../demo/demo_repetir.txt");
    var xml = Blockly.Xml.textToDom(allText);
    Blockly.Xml.domToWorkspace(xml, workspace);
</script>