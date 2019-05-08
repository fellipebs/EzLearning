<?php
require_once ('conexao/conexao.php');
$Foto =  $_SESSION["foto"];
$Usuario_id = $_SESSION["usuario"]->id;
$sql = $pdo->prepare("UPDATE usuarios SET foto = :foto where id = :usuario_id");
$sql->execute(array(
                ':foto' => $Foto,
                ':usuario_id'=> $Usuario_id
)); 

?>