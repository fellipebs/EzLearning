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
                <h1>Desafio Impar ou Par</h1>
                <p>Este desafio tem como objetivo descobrir de determinado número é par ou impar, se for Ímpar imprima na tela impar senão imprima na tela par</p>
                <br>
                <h4>Dicas</h4>
                <div id="blocosDiv" class="area-demo"></div>
                <br>
                <p>Use o bloco para verificar</p>
                <a href="parImpar.php" class="btn btn-success">Iniciar a atividade</a>
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

    readTextFile("../../demo/demo_parImpar.txt");
    var xml = Blockly.Xml.textToDom(allText);
    Blockly.Xml.domToWorkspace(xml, workspace);
</script>