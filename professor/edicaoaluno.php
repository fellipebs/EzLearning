<?php

$teste = $_POST['id'];
session_start();

require_once ('../models/conexao/conexao.php');  
$sql = $con->prepare("SELECT * FROM usuarios where id = '$teste'");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

  <title>Easy Learning</title> 
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
    <h1>Editar Perfil do aluno</h1>
    <?php foreach ($rows as $row): ?>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
      <form method="post" enctype="multipart/form-data" action="receberalunoeditado.php">
        <div class="text-center">
          <img src="../assets/images/user/<?php echo $row->foto; ?>" class="avatar img-circle" alt="avatar" style="width: 100px; height: 100px;">
         
          
         </div>
    </div>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Alterar Perfil</h3>
          <div class="form-group">
          
          </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label">Usuário do aluno</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $row->usuario; ?>" name="usuario">
            </div>
          </div>
          <input type='hidden' name='id' id='id' value='<?php echo $row->id; ?>'>
          <div class="form-group">
            <label class="col-md-3 control-label">Senha:</label>
            <div class="col-md-8">
              <input class="form-control" type="password"  name="senha" placeholder="Digite a nova senha">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Salvar Alterações">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>
        </form>
        <?php endforeach; ?>
      </div>
  </div>
</div>


            </div>
        </div>
    </body>
</html>