<?php 
if ( !isset($_SESSION['usuario']) ){
    header("Location:../login/index.php");
}
?>