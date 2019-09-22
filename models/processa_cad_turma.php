<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
  require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');

$professor_id_turma = $_POST['professor_id_turma'];
echo "<br>";
$escola_id_turma =  $_POST['escola_id_turma'];
echo "<br>";
$nome_turma = $_POST['nome_turma'];
echo "<br>";


$sql = $con->prepare("SELECT * FROM turma WHERE nome_turma = ? and escola_id_turma = ?;");
$sql->execute( array($nome_turma,$escola_id_turma));
if($sql->rowCount() > 0){
    header("Location: ../educacional/cadastroTurma.php");
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Erro, Turma  ja Cadastrada!
  </div>';
          

}else{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('INSERT INTO turma (id, professor_id_turma, escola_id_turma, nome_turma) VALUES (NULL, :professor_id_turma, :escola_id_turma, :nome_turma)');
    $stmt->execute(array(
                   ':professor_id_turma' => $professor_id_turma,
                   ':escola_id_turma' => $escola_id_turma,
                   ':nome_turma' =>$nome_turma
                  
                ));        
            
          }  
          
          header("Location: ../educacional/cadastroTurma.php");
        
          

?>