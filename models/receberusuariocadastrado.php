<?php
session_start();
require_once ('conexao/conexao.php');
$login = $_POST['login'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];


// if(isset($_FILES['foto']))
// {
//    $ext = strtolower(substr($_FILES['foto']['name'],-4)); //Pegando extensão do arquivo
//    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
//    $dir = './img/'; //Diretório para uploads 
//    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
//    echo("Imagem enviada com sucesso!");
// } 

// Codigo para Resgatar a mensagem da página

$smtp = $pdo->prepare('SELECT * FROM usuarios WHERE login = ?');
$smtp->execute(array($_POST['login']));
if($smtp->rowCount() == 0){
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$smtp = $pdo->prepare('INSERT INTO usuarios (id, usuario,email,login,senha,foto,tipo) VALUES(null,:Usuario, :email,:Login,md5(:Senha),"default.png",0)');
$smtp->execute(array(
  ':Usuario' => $usuario,
  ':email' => $email,
  ':Login' => $login,
  ':Senha' => $senha

  
));
header("Location: ../login");
}else{
  $_SESSION['msg'] = "Usuário já existente";
  header("Location: ../cadastro");
}

 
?>

<script>alert("Usuario cadastrado! Por favor agora logue!");</script>