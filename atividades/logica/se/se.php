<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../../../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../../../assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../../../assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../../assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/style-atividade.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../../../assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <title>Se </title>

    <script src="../../../google-blockly/blockly_compressed.js"></script>
    <script src="../../../google-blockly/javascript_compressed.js"></script>
    <script src="../../../google-blockly/blocks_compressed.js"></script>
    <script src="../../../google-blockly/msg/js/pt-br.js"></script>
<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividade_id'] = 2;
$_SESSION['titulo'] = "Atividade 2 de lógica";
?>
</head>
<body>
    <?php
    require_once("../../../componets/menu-atividade.php");?>
    <xml id="toolbox" style="display: none">
        <block type="logic_compare">
        <field name="OP">EQ</field>
        </block>
        <block type="controls_if"/></block>
        <block type="text"></block>
        <block type="text_print"></block>
        <block type="math_number">
          <field name="NUM">1</field>
        </block>
      </xml>
      <br><br><br><br><br>
        <div class="container-fluid">
            
            <div id="blocosDiv" class="area-bloco"></div>
        </div>
        <input id="nome" style="display: none;"  value="<?php echo $_SESSION['usuario']->usuario;?>">
        <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
        <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
    </form>
      <script>
        var workspace = Blockly.inject('blocosDiv',
            {media: '../../../google-blockly/media/',
             toolbox: document.getElementById('toolbox'),
             trashcan: true});

        salvar = function(){
            var xml = Blockly.Xml.workspaceToDom(workspace);
            var code = Blockly.JavaScript.workspaceToCode(workspace);
            xml_text = Blockly.Xml.domToPrettyText(xml);
            document.getElementById('xml').innerHTML = xml_text;
            document.getElementById('js').innerHTML = code;
            document.cookie = "xml="+xml_text;
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