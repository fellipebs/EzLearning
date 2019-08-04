<?php 
if(!isset($_SESSION['usuario'])){
    header('location: ../index.html');
}else if($_SESSION['usuario']->tipo != 1){
    header('location: ../index.html');
}
?>