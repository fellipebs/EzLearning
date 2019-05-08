<?php
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


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('INSERT INTO usuarios (id, usuario,email,login,senha,foto,tipo) VALUES(null,:Usuario, :email,:Login,md5(:Senha),"default.png",0)');
$stmt->execute(array(
  ':Usuario' => $usuario,
  ':email' => $email,
  ':Login' => $login,
  ':Senha' => $senha

  
));


 
?>

<script>alert("Usuario cadastrado! Por favor agora logue!");</script>
<?php
header("Location: ../login");
?>