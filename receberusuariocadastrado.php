﻿<?php
require_once 'conexao/conexao.php';
require_once 'conexao/cadastrar_usuario.php';
$login = $_POST['login'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];


if(isset($_FILES['foto']))
{
   $ext = strtolower(substr($_FILES['foto']['name'],-4)); //Pegando extensão do arquivo
   $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
   $dir = './img/'; //Diretório para uploads 
   move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
   echo("Imagem enviada com sucesso!");
} 

// Codigo para Resgatar a mensagem da página


   
$stmt = $pdo->prepare('INSERT INTO usuarios (Usuario, email, Login, Senha, foto) VALUES(:Usuario, :email, :Login, md5(:Senha), :foto )');
$stmt->execute(array(
  ':Usuario' => $usuario,
  ':email' => $email,
  ':Login' => $login,
  ':Senha' => $senha,
  ':foto' => $new_name
  
));


 
?>

<script>alert("Usuario cadastrado! Por favor agora logue!");</script>
<?php
header("Location: index.php");
?>