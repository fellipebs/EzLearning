<?php 
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST['mudar'])){

      $ext = strtolower(substr($_FILES['escolher']['name'],-4)); //Pegando extensão do arquivo
      $dir = '../assets/images/user/'; //Diretório para uploads 
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      move_uploaded_file($_FILES['escolher']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
      $_SESSION['foto'] = $new_name;
      require_once("../models/alterarfoto.php");
      require_once("../models/atualizarfoto.php");
      unset($_POST['mudar']);
      }
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

  <title>Easy Learning</title>

    <meta name="description" content="Aprenda tudo sobre a história da música e seus estilos"/>
	<meta name="keywords" content="Música, Eletrônica, Lo-Fi, Blog, Sertanejo, Historia, Rock, Estilos Musicas, Informação"/>
    <meta name="author" content="Davi Cecílio"> <!-- FRONT-END -->
    
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/csshome.css"> 

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="shortcut icon" href="Imagens/iconesite" />
  

    <style>

    html, body {
      background-image: url("imagens/backgroundloginblur.png");
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;  
      }

    
    .team{
      background-color: #2f2f2f;
      color: #ffffff;
    }

    .imgperfil{
        width: 200px;
        height: 200px;
        background: transparent;
        border: 2px solid #2f2f2f;
        }
      
        .borda1{
      border-top-width: thin;
      border-top-style: solid;
      border-top-color: #ffffff;
      }

        .borda2{
      border-bottom-width: thin ;
      border-bottom-style: solid;
      border-bottom-color: #ffffff;
      }
      
        

    </style>
</head>

<body>
<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
      <form method="post" enctype="multipart/form-data" action="../models/alterar.php">
        <div class="text-center">
          <img src="../assets/images/user/<?php echo $_SESSION['foto'];?>" class="avatar img-circle" alt="avatar" style="width: 100px; height: 100px;">
          <h6>Troque sua imagem de perfil</h6>
          
          <input type="file" class="form-control" name="escolher">
         </div>
    </div>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Alterar Perfil</h3>
          <div class="form-group">
            <label class="col-md-3 control-label">Usuário:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $_SESSION['usuario']->usuario;?>" name="usuario">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Senha antiga:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="" name="senhaAntiga">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Nova senha:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="" name="novaSenha">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirmar senha:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="" name="comfirmarSenha">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Salvar Alterções">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
        </div>
    </body>
</html>