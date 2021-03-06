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
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
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
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
  <script src="../../js/config.js"></script>
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