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
    <script src="../blockly/javascript_compressed.js"></script>
    <script src="../blockly/msg/js/pt-br.js"></script><!-- liguagem do Blockly-->
    <script src="../interpretador-js/acorn_interpreter.js"></script>
    <script src="../assets/js/block-main.js"></script>
    <script src="../assets/js/labirinto.js"></script>
</head>

<body>
    <input type='hidden' id='resposta' name='resposta'>
    <button onclick="runCode()">Testar seu Código!</button>
    <button onclick="showCode()">Mostrar seu Código!</button>
    <div class="container-fluid">
    <div id="blocklyDiv" style="height: 400px; width: 900px;"></div>
    <xml id="toolbox" style="display: none">
            
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
      {media: '../blockly/media/',toolbox: document.getElementById('toolbox'),zoom:
         {controls: true,
          wheel: true,
          startScale: 1.0,
          maxScale: 3,
          minScale: 0.3,
          scaleSpeed: 1.2},
     trashcan: true});
var code = Blockly.JavaScript.workspaceToCode(workspace);
var myInterpreter = new Interpreter(code);
myInterpreter.run();
function runCode() {
      // Generate JavaScript code and run it.
      window.LoopTrap = 1000;
      Blockly.JavaScript.INFINITE_LOOP_TRAP =
          'if (--window.LoopTrap == 0) throw "Infinite loop.";\n';
      var code = Blockly.JavaScript.workspaceToCode(workspace);
      Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
      
      try {
       eval(code);
      } catch (e) {
        alert(e);
        
      }
      // document.getElementById("resposta").value = Blockly.JavaScript.workspaceToCode(demoWorkspace);
    }
    function showCode() {
      // Generate JavaScript code and display it.
      Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
      var code = Blockly.JavaScript.workspaceToCode(workspace);
      alert(code);
    }
</script>