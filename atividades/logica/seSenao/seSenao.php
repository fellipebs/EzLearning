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
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
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
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
  <script src="../../js/config.js"></script>
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