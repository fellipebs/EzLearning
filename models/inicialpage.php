<?php
session_start();
$tipo = $_SESSION['usuario']->tipo;

if ($tipo == 1){
    echo "HTML AQUI - > PARA PROFESSOR";
}else if($tipo == 0){
    echo "HTML AQUI - > PARA ALUNOS:";
}else{
    echo "HTML AQUI - > PARA ESCOLA:";
}
?>