<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,400i" rel="stylesheet">
    
    
    <!-- Inclusão da biblioteca Blocky -->
    <script src="../blockly/blockly_compressed.js"></script>
    <script src="../blockly/blocks_compressed.js"></script>
    <script src="../blockly/msg/js/pt-br.js"></script><!-- liguagem do Blockly-->

</head>

<body>
    <div class="container-fluid">
    <div id="blocklyDiv" style="height: 480px; width: 600px;"></div>
    <xml id="toolbox" style="display: none">
        <category name="Controle" colour="10">
            <block type="controls_if"></block>
            <block type="controls_whileUntil"></block>
            <block type="controls_for">
        </category>
        <category name="Lógica" colour="210">
            <block type="logic_compare"></block>
            <block type="logic_operation"></block>
            <block type="logic_boolean"></block>
        </category>
        <category name=Matemática colour="100">
            <block type="math_number"></block>
            <block type="math_arithmetic"></block>
            <block type="math_single" disabled="true"></block>
        </category>
        <category name="Variaveis" colour="330" custom="VARIABLE"></category>
        <category name="Funções" colour="290" custom="PROCEDURE"></category>
    </xml>
    </div>
        <div class="row">
            <p class="copyrigth">
                Copyrigth &copy; 2019 by Easy Learning. Todos os direitos reservados.
            </p>
        </div>
    </footer>

</body>

</html>
<script>
  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: document.getElementById('toolbox'),zoom:
         {controls: true,
          wheel: true,
          startScale: 1.0,
          maxScale: 3,
          minScale: 0.3,
          scaleSpeed: 1.2},
     trashcan: true});
     
</script>