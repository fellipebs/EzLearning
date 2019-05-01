<?php 
require_once 'conexao/conexao.php';
require_once 'conexao/cadastrar_usuario.php';
session_start();
$foto = $_SESSION['usuario']->foto;
$id = $_SESSION['usuario']->id;
// $turma_id = $_SESSION['usuario']->turma_id;
$codigo = $_POST['resposta'];

$sql = $con->prepare("SELECT * FROM UsuarioView WHERE id = ".$_SESSION['usuario']->id);
$sql->execute();
$row = $sql->fetchObject();
$turma = $row->turma_id;

echo $id;
echo $turma;
echo $codigo;   

 $stmt = $pdo->prepare('INSERT INTO atividades (aluno_id_atividade, turma_id_atividade, codigo) 
 VALUES(:aluno_id_atividade, :turma_id_atividade, :codigo)');
 $stmt->execute(array(
   ':aluno_id_atividade' => $id,
   ':turma_id_atividade' => $turma,
   ':codigo' => $codigo
  
  ));
  header("Location: index.php");
?>