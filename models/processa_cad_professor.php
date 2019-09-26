<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
    require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');
 

$nome = $_POST['nome'];
echo "<br>";
$sobrenome =  $_POST['sobrenome'];
echo "<br>";
$escola_id_Professor = $_POST['escola_id_Professor'];
echo "<br>";
$usuario_id_professor = $_POST['usuario_id_professor'];
echo "<br>";


$sql = $con->prepare("SELECT * FROM professor WHERE escola_id_Professor = ? and usuario_id_professor = ?;");
$sql->execute( array($escola_id_Professor, $usuario_id_professor));
if($sql->rowCount() > 0){
  header("Location: ../educacional/cadastroProfessor.php");
  $_SESSION['msg2'] = '<div class="alert alert-danger" role="alert">
  Erro, Professor já cadastrado!
</div>';
   
}else{
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO professor (id, nome, sobrenome, escola_id_Professor, usuario_id_professor) VALUES(NULL, :nome, :sobrenome, :escola_id_Professor, :usuario_id_professor)');
  $stmt->execute(array(
                 ':nome' =>$nome,
                 ':sobrenome' => $sobrenome,
                 ':escola_id_Professor' =>$escola_id_Professor,
                 ':usuario_id_professor' =>$usuario_id_professor
              ));      
       } 

       $sql = $pdo->prepare("UPDATE usuarios inner join professor on usuarios.id = :usuario_id_professor set usuarios.tipo = 1 WHERE usuarios.tipo = 0;");
       $sql->execute(array(
                            ':usuario_id_professor' => $usuario_id_professor
              )); 
              
       $sql = $pdo->prepare("UPDATE usuarios inner join professor on usuarios.id = :usuario_id_professor  set usuarios.status = 1   WHERE usuarios.status = 0;");
       $sql->execute(array(
                      ':usuario_id_professor' => $usuario_id_professor
        )); 
 

                

       
        
          
        
        header("Location: ../educacional/cadastroProfessor.php"); 
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
        Sucesso, Professor cadastrado com sucesso!
      </div>';
        
          
        

 

            
?>
