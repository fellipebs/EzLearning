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
    <script src="../blockly/msg/js/br.js"></script><!-- liguagem do Blockly-->

    <script src="../assets/js/block-main.js"></script>
    <script src="../assets/js/sound-blocks.js"></script>
</head>

<body>
    <div class="container-fluid">
    <div id="blockly-div" style="height: 480px; width: 400px;">
    <xml id="toolbox" style="display: none">
        <category name="Loops" colour="120">
            <block type="controls_repeat_ext">
                <value name="TIMES">
                    <shadow type="math_number">
                        <field name="NUM">5</field>
                    </shadow>
                </value>
            </block>
        </category>
        <category name="Sounds" colour="170">
            <block type="play_sound"></block>
        </category>
    </xml>
    </div>
    </div>
        <div class="row">
            <p class="copyrigth">
                Copyrigth &copy; 2019 by Easy Learning. Todos os direitos reservados.
            </p>
        </div>
    </footer>

</body>

</html>