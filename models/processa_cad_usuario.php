<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
    require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');
  

$usuario = $_POST['usuario'];
echo "<br>";
$email =  $_POST['email'];
echo "<br>";
$login = $_POST['login'];
echo "<br>";
$senha = md5($_POST["senha"]);
echo "<br>";


$sql = $con->prepare("SELECT * FROM usuarios WHERE email = ? and login = ?;");
$sql->execute( array($email,$login));
if($sql->rowCount() > 0){
    header("Location: ../educacional/cadastroUsuario.php");

    $_SESSION['msg2'] = '<div class="alert alert-danger" role="alert">
    Erro, Usuário já cadastrado!
  </div>';
   
   
          

}else{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('INSERT INTO usuarios (id, usuario, email, login, senha, foto, tipo) VALUES (NULL, :usuario, :email, :login, :senha, "default.png", "0")');
    $stmt->execute(array(
                   ':usuario' => $usuario,
                   ':email' => $email,
                   ':login' =>$login,
                   ':senha' =>$senha
                   

                  
                ));   
                $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    
                Sucesso, Usuário já cadastrado!
  </div>';
   
               
            
          }  
          
          header("Location: ../educacional/cadastroUsuario.php");

         

?>