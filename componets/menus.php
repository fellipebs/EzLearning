<?php
    switch($_SESSION['usuario']->tipo){
        case 0:
            require_once("menu-aluno.php");
            break;
        case 1:
            require_once("menu-professor.php");
            break;
        case 2:
            require_once("menu-educacional.php");
            break;
    }
?>