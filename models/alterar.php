<?php
session_start();
require_once ('conexao/conexao.php');
if(isset($_FILES["escolher"])){
    header("location: atsdvsvfseljfjb");
    $ext = strtolower(substr($_FILES['escolher']['name'],-4)); //Pegando extensão do arquivo
    $dir = '../assets/images/user/'; //Diretório para uploads 
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    move_uploaded_file($_FILES['escolher']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    $_SESSION['foto'] = $new_name;
}
if(isset($_POST["senhaAntiga"]) && isset($_POST["novaSenha"]) && isset($_POST["comfirmarSenha"]) && $_POST["novaSenha"] == $_POST["comfirmarSenha"]){
        $sql = $con->prepare("UPDATE usuarios SET senha=? WHERE id = ?");
        $sql->execute( array( md5($_POST['novaSenha']), $_SESSION['usuario']->id ));
        $sql = $con->prepare("SELECT * FROM usuarios where id = ?");
        $sql->execute( array($_SESSION['usuario']->id ));
        $row = $sql->fetchObject();
        if($row){
            $_SESSION['usuario'] = $row;
        }

}
if(isset($_POST["usuario"])){
    $sql = $con->prepare("UPDATE usuarios SET usuario  = ? WHERE id = ?");
    $sql->execute( array($_POST['usuario'],$_SESSION['usuario']->id) );  
}
header("location: ../aluno");
?>