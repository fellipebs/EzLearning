<?php
session_start();
$tipo = $_SESSION['usuario']->tipo;

if ($tipo == 1){
    header("Location: ../professor");
}else if($tipo == 0){
    header("Location: ../aluno");
}else{
    header("Location: ../adm");
}
?>