<?php 
if(!isset($_SESSION['usuario'])){
    header('location:  ../index.html');
}else if($_SESSION['usuario']->tipo != 2){
    header('location:  ../index.html');
}
?>