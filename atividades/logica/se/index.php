<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade de Lógica</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <!-- Blockly -->
    <script src="../../../google-blockly/blockly_compressed.js"></script>
    <script src="../../../google-blockly/javascript_compressed.js"></script>
    <script src="../../../google-blockly/blocks_compressed.js"></script>
    <script src="../../../google-blockly/msg/js/pt-br.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="../../../assets/style-atividade.css">
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Atividade de Lógica uso do se</h1>
            <p>Esta atividade tem como objetivo te ensinar a usar o se para testar se a condição é verdadeira</p>
            <a href="se.php" class="btn btn-success">Iniciar a atividade</a>
            <xml xmlns="https://developers.google.com/blockly/xml">
              <block type="controls_if" id="4Dy|ddb?[v#B2tHW`ntD" x="-613" y="113">
                <value name="IF0">
                  <block type="logic_compare" id="PX(t*XFV]G)wNftH|R;;">
                    <field name="OP">EQ</field>
                    <value name="A">
                      <block type="math_number" id="jeJwqfr}qa*,M[@0a5be">
                        <field name="NUM">1</field>
                      </block>
                    </value>
                    <value name="B">
                      <block type="math_number" id="@?1|}]z^26ySx6my.aaO">
                        <field name="NUM">1</field>
                      </block>
                    </value>
                  </block>
                </value>
                <statement name="DO0">
                  <block type="text_print" id="!YxI0|xDkO4y_poDWMFN">
                    <value name="TEXT">
                      <shadow type="text" id="gSTL92e{-l=2%;RPo#*$">
                        <field name="TEXT">verdadeiro</field>
                      </shadow>
                    </value>
                  </block>
                </statement>
              </block>
            </xml>
            <div id="blocosDiv" class="area-bloco" class="demo"></div>
            
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>
<script>
    var workspace = Blockly.inject('blocosDiv',
            {media: '../../../google-blockly/media/',
             toolbox: document.getElementById('toolbox'),
             trashcan: true});
</script>