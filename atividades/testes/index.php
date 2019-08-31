<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('../components/head2.php')?>
    <title>Área para testes</title>

</head>
<body>
    <div class="container-fluid">
        <br><br><br><br><br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <div id="blocosDiv" class="area-demo-testes"></div>
            </div>
            <div class="col-md-3"></div>
        </div>
                    
    </div>
</body>
</html>
<script type="text/javascript" src="../js/ler_xml_blockly"></script>
<script>
     var workspace = Blockly.inject('blocosDiv',
            {media: '../../google-blockly/media/',
             toolbox: document.getElementById('toolbox'),
             trashcan: false});

            readTextFile("../demo/demo_teste.txt");
            var xml = Blockly.Xml.textToDom(allText);
            Blockly.Xml.domToWorkspace(xml, workspace);
</script>