<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
    require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');



$nome = $_POST['nome'];
echo "<br>";
$sobrenome =  $_POST['sobrenome'];
echo "<br>";
$dt_nascimento = $_POST['dt_nascimento'];
echo "<br>";
$responsavel = $_POST['responsavel'];
echo "<br>";
$turma_id = $_POST['turma_id'];
echo "<br>";
$usuario_id_aluno = $_POST['usuario_id_aluno'];
echo "<br>";
$status = $_POST['status'];
echo "<br>";

$sql = $con->prepare("SELECT * FROM aluno WHERE turma_id = ? and usuario_id_aluno = ?;");
$sql->execute( array($turma_id, $usuario_id_aluno));
if($sql->rowCount() > 0){
  header("Location: ../educacional/cadastroAluno.php");
  $_SESSION['msg2'] = '<div class="alert alert-danger" role="alert">
  Erro, Aluno já cadastrado!
</div>';
   
}else{
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO aluno (id, nome, sobrenome, dt_nascimento, responsavel, turma_id, usuario_id_aluno, status) VALUES(NULL, :nome, :sobrenome, :dt_nascimento, :responsavel, :turma_id, usuario_id_aluno, :status);');
  $stmt->execute(array(
                 ':nome' =>$nome,
                 ':sobrenome' =>$sobrenome,
                 ':dt_nascimento' =>$dt_nascimento,
                 ':responsavel' =>$responsavel,
                 ':turma_id' =>$turma_id,
                 ':usuario_id_aluno' =>$usuario_id_aluno,
                 ':status' =>$status
                 


              ));      
       } 
        
        header("Location: ../educacional/cadastroAluno.php"); 
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
        Sucesso, Aluno cadastrado!
      </div>';
        
          
        

 

            
?>
