<html>

<head>
    <title>Easy Learning - Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/grid.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,400i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/main.css">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action='../models/receberusuariocadastrado.php' method="post"
                enctype="multipart/form-data">
                <h2>Cadastro</h2>
                <input type="text" name="login" placeholder="Digite o login que será usado" required />
                <input type="text" name="usuario" placeholder="Digite o nome de usuario" required />
                <input type="email" name="email" placeholder="Digite seu e-mail" required />
                <input type="password" name="senha" placeholder="Digite a senha" required />
                <input type="submit" value="Cadastrar" class="btn btn-full">
            </form>
        </div>
    </div>

</body>

</html>