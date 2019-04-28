<html>
<head>
<title>Easy Learning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
      <div class="login-page">
  <div class="form">
    <form class="login-form" method='post' action='../models/autenticacao.php'>
      <input type="text" placeholder="Login" name='login'/>
      <input type="password" placeholder="Senha" name='senha'/>
      <button>login</button>
      <p class="message">Não possui conta? <a href="../cadastro">Crie sua conta!</a></p>
    </form>
  </div>
</div>

</body>
</html>