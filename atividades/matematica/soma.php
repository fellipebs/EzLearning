<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soma</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="../../google-blockly/blockly_compressed.js"></script>
    <script src="../../google-blockly/javascript_compressed.js"></script>
    <script src="../../google-blockly/blocks_compressed.js"></script>
    <script src="../../google-blockly/msg/js/pt-br.js"></script>
</head>
<body>
    <h1>Atividade 1 de matemática Soma</h1>
    <xml id="toolbox" style="display: none">
        <block type="math_number">
          <field name="NUM">123</field>
        </block>
        <block type="math_arithmetic"></block>
        <block type="text"></block>
        <block type="text_print"></block>
        <block type="variables_set"><field name="VAR">soma</field></block>
        <block type="variables_get"><field name="VAR">soma</field></block>
      </xml>
      
        <div class="container-fluid">
            <form action="salvar.php" method="POST">
            <button onclick="salvar()" class="btn btn-primary">Salvar</button>
            <span onclick="atividade_salva()" class="btn btn-primary">Atividade salva</span>
            <span onclick="executar()"id="runButton" class="btn btn-primary" >Executar</span>
            <span onclick="executar()"id="runButton" class="btn btn-primary">Enviar para correção</span>
            
            <div id="blocosDiv" style="height: 480px; width: 600px;"></div>
        </div>
        <input id="nome" style="display: none;"  value="<?php session_start(); echo $_SESSION['usuario']->usuario;?>">
        <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
        <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
    </form>
      <script>
        // Inject primary workspace.
        var workspace = Blockly.inject('blocosDiv',
            {media: '../../google-blockly/media/',
             toolbox: document.getElementById('toolbox'),
             trashcan: true});

        salvar = function(){
            var xml = Blockly.Xml.workspaceToDom(workspace);
            var code = Blockly.JavaScript.workspaceToCode(workspace);
            xml_text = Blockly.Xml.domToPrettyText(xml);
            document.getElementById('xml').innerHTML = xml_text;
            document.getElementById('js').innerHTML = code;
            //Tentativa de formatar o cookie
            document.cookie = "xml="+xml_text;
            // var cookie = document.cookie;
            // cookie_formatado = cookie.substring(90,-14);
            alert(cookie_formatado);
            
        }
        atividade_salva = function(){
            var nome = document.getElementById('nome').value;
            readTextFile(nome+"_xml.txt");
            var xml = Blockly.Xml.textToDom(allText);
            Blockly.Xml.domToWorkspace(xml, workspace);
        };

        executar = function() {
            Blockly.JavaScript.INFINITE_LOOP_TRAP = '  checkTimeout();\n';
            var timeouts = 0;
            var checkTimeout = function() {
            if (timeouts++ > 1000000) {
                throw MSG['timeout'];
            }
        };
            var code = Blockly.JavaScript.workspaceToCode(workspace);
            Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
            try {
            eval(code);
        } catch (e) {
            alert(MSG['badCode'].replace('%1', e));
            }
            };
        function readTextFile(file)
        {
            var rawFile = new XMLHttpRequest();
            rawFile.open("GET", file, false);
            rawFile.onreadystatechange = function ()
            {
                if(rawFile.readyState === 4)
                {
                    if(rawFile.status === 200 || rawFile.status == 0)
                    {
                        allText = rawFile.responseText;
                    }
                }
            }
            rawFile.send(null);
        }
        </script>
</body>
</html>