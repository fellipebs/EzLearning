<html>
<head></head>
<body>
<?php
session_start();

$con =  new PDO("mysql:host=localhost; dbname=EasyLearning","root","");
$sql = $con->prepare("SELECT * FROM usuarios WHERE Login=? AND Senha=?");
$sql->execute( array($_POST['login'], md5($_POST['senha']) ) );

$row = $sql->fetchObject();  // devolve um �nico registro

// Se o usu�rio foi localizado
if ($row){
    $_SESSION['usuario'] = $row;
    header("Location: inicialpage.php");
}else{
    header("Location: index.php");
}
?>
</body>
</html>