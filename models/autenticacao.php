<html>
<head></head>
<body>
<?php
session_start();

$con =  new PDO("mysql:host=ezlearning.mysql.dbaas.com.br; dbname=ezlearning","ezlearning","QVLm638qvTJBtL");
$sql = $con->prepare("SELECT * FROM usuarios WHERE Login=? AND Senha=?");
$sql->execute( array($_POST['login'], md5($_POST['senha']) ) );

$row = $sql->fetchObject();  // devolve um �nico registro

// Se o usu�rio foi localizado
if ($row){
    $_SESSION['usuario'] = $row;
    header("Location: http:/easylearning.com.br/");
}else{
    header("Location: http:/easylearning.com.br/login");
}
?>
</body>
</html>