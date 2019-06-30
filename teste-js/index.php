<html>
<head>
<script src='index.js'></script>
<meta charset="UTF-8">
</head>

<?php  require_once("../componets/head.php"); ?>
<body>
<?php //require_once("../componets/menus.php");?>
<h2>Vamos fazer esta bela planta crescer? </h2>
<br> <h2>Clique no regador!</h2>
<img src='1.jpg' style="height: 100px; width: 100px;" id='planta'> <img src='regador.png' style="height: 100px; width: 100px;" onclick="teste()" id='regador'>
<input type='hidden' value='0' id='contador'>
<input type='button' style='display: none;' value='Continuar' id='continuar' onclick="continuar()">
<input type='button' style='display: none;' value='Reiniciar' id='refresh' onclick="refresh()">

</html>