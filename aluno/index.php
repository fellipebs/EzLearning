<?php 
echo "Aluno"; 
header("Content-type:text/html; charset=utf8");
session_start();
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
  
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
    <ul class="nav navbar-nav" >
        <li><img  class="rounded-circle" height="50px" src="../assets/images/user/<?php  echo $_SESSION['foto'];?>" alt=""></li>
        <li style="margin-left: 30px; margin-top: 5px;" class="active" style="margin-left: 30px;"><a href="#" class="navbar-brand"><?php  echo " ".$_SESSION['usuario']->usuario;?></a></li>
      </ul>
      <a class="navbar-brand" href="bloghome.php">HOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link" href="alterar-perfil.php">
              Alterar Perfil
          </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
    

</html>