
<?php
session_start();
require_once ('conexao/conexao.php');

$sql = $con->prepare("SELECT * FROM usuarios WHERE Login=? AND Senha=?");
$sql->execute( array($_POST['login'], md5($_POST['senha']) ) );

$row = $sql->fetchObject();  // devolve um �nico registro

// Se o usu�rio foi localizado
if ($row){
    $_SESSION['usuario'] = $row;
    $_SESSION['foto'] = $row->foto;
    header("Location: ../aluno");
}else{
    header("Location: ../login");
}
?>
