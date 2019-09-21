<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividade_id'] = 4;
$_SESSION['titulo'] = "Atividade 3 de matemática Divisão";
$_SESSION['arquivo_php'] = "divisao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Divisão</title>
  <?php require_once('../../components/head2.php') ?>
</head>

<body>
  <?php
  require_once("../../../componets/menu-atividade.php"); ?>
  <xml id="toolbox" style="display: none">
    <block type="math_number">
      <field name="NUM">4</field>
    </block>
    <block type="math_number">
      <field name="NUM">2</field>
    </block>
    <block type="math_arithmetic">
      <field name="OP">DIVIDE</field>
    </block>
    <block type="text"></block>
    <block type="text_print"></block>
    <block type="variables_set">
      <field name="VAR">Divisão</field>
    </block>
    <block type="variables_get">
      <field name="VAR">Divisão</field>
    </block>
  </xml>
  <br><br><br><br><br>
  <div class="container-fluid">

    <div id="blocosDiv" class="area-bloco"></div>
  </div>
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
  <script type="text/javascript" src="../../js/ler_xml_blockly"></script>
  <script>
    var workspace = Blockly.inject('blocosDiv', {
      media: '../../../google-blockly/media/',
      toolbox: document.getElementById('toolbox'),
      trashcan: true
    });

    salvar = function() {
      var xml = Blockly.Xml.workspaceToDom(workspace);
      var code = Blockly.JavaScript.workspaceToCode(workspace);
      xml_text = Blockly.Xml.domToPrettyText(xml);
      document.getElementById('xml').innerHTML = xml_text;
      document.getElementById('js').innerHTML = code;
      document.cookie = "xml=" + xml_text;
      alert(cookie_formatado);

    }
    atividade_salva = function() {
      var nome = document.getElementById('nome').value;
      readTextFile(nome + "_xml.txt");
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
  </script>
</body>

</html>

</html>
<?php if (isset($_SESSION['resposta'])) : ?>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Atividade de Divisão</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <center>
            <img src="<?php if (isset($_SESSION['demoImage'])) {
                          echo $_SESSION['demoImage'];
                        } ?>" alt="">
          </center>
          <br>
          <?php echo $_SESSION['resposta']; ?>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
  </div>
  </div>
<?php unset($_SESSION['resposta']);
endif; ?>
<script>
  $(document).ready(function() {
    $("#myModal").modal();
  });
</script>