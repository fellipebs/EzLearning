<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividade_id'] = 5;
$_SESSION['titulo'] = "Atividade de contar";
$_SESSION['arquivo_php'] = "contar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contar</title>
  <?php require_once('../../components/head2.php') ?>
</head>

<body>
  <?php
  require_once("../../../componets/menu-atividade.php"); ?>
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
  <xml id="toolbox" style="display: none">
    <variables>
      <variable id="!hHsK)lF1_j2tJM:eu[A">i</variable>
    </variables>
    <block type="controls_for" id="WZz+uqx7IehD~06z#O8V" x="263" y="163">
      <field name="VAR" id="!hHsK)lF1_j2tJM:eu[A">i</field>
      <value name="FROM">
        <shadow type="math_number" id="7yHTbgJ-:13[6+gt|`;.">
          <field name="NUM">1</field>
        </shadow>
      </value>
      <value name="TO">
        <shadow type="math_number" id="3a`SJ6_y%U@]6B%rx.L/">
          <field name="NUM">5</field>
        </shadow>
      </value>
      <value name="BY">
        <shadow type="math_number" id="BMi3G{}FV2ZZ`8(?=W?[">
          <field name="NUM">1</field>
        </shadow>
      </value>
    </block>
    <variables>
      <variable id="!hHsK)lF1_j2tJM:eu[A">i</variable>
    </variables>
    <block type="text_print" id=")hsGQUP=QYV83~Kcqlc9" x="262" y="188">
      <value name="TEXT">
      </value>
    </block>
    <block type="variables_get" id="Ng+:]lwnqF-iFZc3aDnV" x="237" y="288">
      <field name="VAR" id="!hHsK)lF1_j2tJM:eu[A">i</field>
    </block>
  </xml>
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
  <script src="../../js/config.js"></script>
</body>

</html>
<?php if (isset($_SESSION['resposta'])) : ?>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Atividade de Lógica</h4>
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