<html>
<head>
 <!-- BOOTSTRAP 3 -->
 <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <!-- BOOTSTRAP 4 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" src="assets/css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Easy Learning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <ul class="nav navbar-nav navbar-right">
      <li><span style='color: white;'>
<?php
session_start();
echo $_SESSION['usuario']->Usuario;
$foto = $_SESSION['usuario']->foto;
?>
      </span></li>
      <li>
      <?php
     echo" <img src='img/$foto' class='rounded-circle' width='50px' height='50px'>";
      ?>
      </li>
     
    </ul>
</nav>
<center>
<h2 class='center'>Ok!</h2></center>
<br>
<!-- visualizacao -->

<?php

$con = new PDO("mysql:host=localhost; dbname=EasyLearning;", "root","");
$sql = $con->prepare("SELECT p.id, p.assunto, p.mensagem, p.usuario, p.foto_post, u.Usuario, u.Codigo
 FROM post as p INNER JOIN usuarios as u on p.usuario = u.Codigo order by p.id desc");
$sql->execute();

$rows = $sql->fetchAll(PDO::FETCH_CLASS);
//fetchAll - recupera todos os registros da tabela
//PDO::FETCH_CLASS - resultado é armazenado em um objeto

$contador = 1;
foreach ($rows as $row){
  if($contador > 3){
    $contador = 1;
  }
  if($contador == 1){
    echo "<div class='w3-row-padding w3-margin-top'>";
  }
 echo" <div class='w3-third'>
    <div class='w3-card'>";
    echo"<form action='post.php' method='post'>";
    echo "<input type='image' src='img/$row->foto_post' style='width:100%'>";
     echo "<div class='w3-container'>";
    
     echo"<input type='hidden' name='id' value='$row->id'>";
     echo"<input type='hidden' name='assunto' value='$row->assunto'>";
     echo"<input type='hidden' name='mensagem' value='$row->mensagem'>";
     echo"<input type='hidden' name='autor' value='$row->usuario'>";
     echo"<input type='hidden' name='foto_post' value='$row->foto_post'>";
    
    echo "Feito por: ".$row->Usuario;
    $sql = $con->prepare("select count(*) as total from likes where post_id = $row->id;");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    foreach ($rows as $row){
    echo "<br>Número de likes: ".$row->total;  
    }
    echo"  </div>
    </div>";
  echo "</div>";
  if($contador == 3){
  echo "</div>";

}

  echo "</form>";
  $contador++;
}

?>

</body>
</html>