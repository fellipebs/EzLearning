<html>
<head>
<title>Dog Mania</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/css/cadastro.css">
</head>
<body>
      <div class="login-page">
  <div class="form">
    <form class="login-form" action='../models/receberusuariocadastrado.php' method="post" enctype="multipart/form-data">
      <input type="text" name ="login" placeholder="Digite o login que será usado" required/>
      <input type="text" name="usuario" placeholder="Digite o nome de usuario do site" required/>
      <input type="email" name ="email" placeholder="Digite seu e-mail" required/>
      <input type="password" name ="senha" placeholder="Digite a senha" required/>
      <label style='float: left;'>Envie sua foto de perfil</label>
      <input type="file" name ="foto" placeholder="Envie sua foto de perfil" required/>
      <button>Cadastrar!</button>
      <p class="message" style='float: left;'><a href="index.php">Voltar</a></p>
    </form>
  </div>
</div>

</body>
</html>