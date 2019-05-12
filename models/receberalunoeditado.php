<?php
$id = $_POST['id'];
$senha = $_POST['senha'];
$usuario = $_POST['usuario'];

require_once ('conexao/conexao.php'); 
if(isset($_POST["usuario"])){
    $sql = $con->prepare("UPDATE usuarios SET usuario  = ?, senha = ? WHERE id = ?");
    $sql->execute( array($usuario, md5($senha), $id) );  
}
header("location: index.php");
?>