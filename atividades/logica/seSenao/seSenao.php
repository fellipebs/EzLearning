<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividade_id'] = 8;
$_SESSION['titulo'] = "Atividade 2 de lógica";
$_SESSION['arquivo_php'] = "seSenao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Se Senão</title>
  <?php require_once('../../components/head2.php') ?>
</head>

<body>
  <?php
  require_once("../../../componets/menu-atividade.php"); ?>
  <xml id="toolbox" style="display: none">
    <block type="logic_compare">
      <field name="OP">EQ</field>
    </block>
    <block type="controls_if" />
    </block>
    <block type="text"></block>
    <block type="text_print"></block>
    <block type="math_number">
      <field name="NUM">1</field>
    </block>
    <block type="math_number">
      <field name="NUM">2</field>
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

    function readTextFile(file) {
      var rawFile = new XMLHttpRequest();
      rawFile.open("GET", file, false);
      rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4) {
          if (rawFile.status === 200 || rawFile.status == 0) {
            allText = rawFile.responseText;
          }
        }
      }
      rawFile.send(null);
    }
  </script>
</body>

</html>
<div class="modal" id="dicas">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Atividade de Lógica</h4>
        <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <center>
          <img src="../../../assets/images/atividades/dicas/gif/senao.gif" alt="">
        </center>
        <br>
        <b>Dica:</b> Clique na engrenagem para adicionar o senão
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Entendi</button>
      </div>

    </div>
  </div>
</div>
<?php if (isset($_SESSION['resposta'])) : ?>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Atividade de Lógica</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="fechar()">&times;</button>
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
          <button type="button" class="btn btn-success" data-dismiss="modal" onclick="fechar()">Fechar</button>
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



  $('.close').click(function(event) {
    $('#dicas').fadeOut();
    event.preventDefault();
  });

  $(document).ready(function() {
    var ls = localStorage.getItem("modal");
    if (!ls) {
      $('#dicas').modal('show');
    }
  })

  $('#dicas').on('shown.bs.modal', function() {
    localStorage.setItem("modal", false);
  });
</script>