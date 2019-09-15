<?php
$termo = "if";
$termo2 = "==";
$termo3 = "window.alert(";
$_SESSION['valorAtividade'] = 10;
$_SESSION['atividadeId'] = 2;
//procura determinado termo no arquivo
if (strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo) !== false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo2) !== false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo3) !== false) {
    $_SESSION['resposta'] = "Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro";
    $_SESSION['demoImage'] = "../../../assets/images/medals/Medalha_Ouro.png";
    $_SESSION['notaAtividade'] = 10;
    $_SESSION['medalha'] = "ouro";
} else if (strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo) == false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo2) !== false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo3) !== false) {
    $_SESSION['resposta'] = "Faltou o uso do Se";
    $_SESSION['notaAtividade'] = 8;
    $_SESSION['demoImage'] = "../../../assets/images/atividades/logica/se/demos/se.png";
} else if (strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo) !== false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo2) !== false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo3) == false) {
    $_SESSION['resposta'] = "Faltou a imprimir o resultado na tela";
    $_SESSION['demoImage'] = "../../../assets/images/atividades/logica/se/demos/imprimir.png";
    $nota = 7;
} else if (strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo) !== false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo2) == false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo3) !== false) {
    $_SESSION['resposta'] = "Faltou comparar dois valores";
    $_SESSION['demoImage'] = "../../../assets/images/atividades/logica/se/demos/comparar.png";
    $_SESSION['notaAtividade'] = 8;
} else if (strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo) !== false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo2) == false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo3) == false) {
    $_SESSION['resposta'] = "Faltou comparar dois valores e imprimir na tela o resultado na tela";
    $_SESSION['demoImage'] = "../../../assets/images/atividades/logica/se/demos/se_comparar_imprimir.png";
    $_SESSION['notaAtividade'] = 6;
} else if (strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo) == false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo2) == false and strpos(file_get_contents($_SESSION['usuario']->usuario . "_js.txt"), $termo3) !== false) {
    $_SESSION['resposta'] = "Faltou o uso do Se e comparar dois valores";
    $_SESSION['demoImage'] = "../../../assets/images/atividades/logica/se/demos/se_comparar.png";
    $_SESSION['notaAtividade'] = 6;
} else {
    $_SESSION['resposta'] = "Refaça a atividade";
    $_SESSION['demoImage'] = "../../../assets/images/atividades/logica/se/demos/se_comparar_imprimir.png";
    $_SESSION['notaAtividade'] = 0;
}
require_once('../../../models/atividades/LancarNotas.php');
require_once('../../../models/atividades/LancarMedalhas.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corrigir</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../../../assets/style-atividade.css">
</head>

<body>


</body>

</html>