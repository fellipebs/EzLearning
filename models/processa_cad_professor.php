<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
  require_once('../models/restrito/VerificarSeLogadoProfessor1.php');

$nome = $_POST['nome'];
echo "<br>";
$sobrenome =  $_POST['sobrenome'];
echo "<br>";
$escola_id_Professor = $_POST['escola_id_Professor'];
echo "<br>";
$usuario_id_professor = $_POST['usuario_id_professor'];
echo "<br>";

$sql = $con->prepare("SELECT * FROM professor WHERE usuario_id_professor = ? and escola_id_Professor = ?;");
$sql->execute( array($escola_id_Professor,$usuario_id_professor));
if($sql->rowCount() > 0){
    
  header("Location: ../professor/cadastroProfessor.php");
    
  $_SESSION ['msg'] = '<div class="alert alert-danger" role="alert">
  Erro, Professor já atrinuido a Escola!
</div>';
}else{
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO professpr (id, nome, sobrenome, escola_id_Professor, usuario_id_professor) VALUES(NULL, :nome, :sobrenome, :sobrenome, :escola_id_Professor, :usuario_id_professor)');
  $stmt->execute(array(
                 ':nome' => $nome,
                 ':sobrenome' => $sobrenome,
                 ':escola_id_Professor' =>$escola_id_Professor,
                 ':responusuario_id_professorvel' =>$usuario_id_professor
              ));
         
      
              header("Location: ../professor/cadastroProfessor.php");
        }         
        

 

            
?>