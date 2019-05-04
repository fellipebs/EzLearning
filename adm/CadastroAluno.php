<html>

<head>
    <title>Cadastro de Aluno</title>
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
            <div class="container">
                <form class="login-form" action='../../models/receberalunocadastrado.php' method="post"
                    enctype="multipart/form-data">

                    <br><input type="text" name="nome" placeholder="Digite o nome do aluno" required />

                    <br><input type="text" name="sobre_nome" placeholder="Digite o sobre nome do aluno" required />

                    <br><input type="date" name="dt_nascimento" placeholder="Data de Nascimento" required />

                    <br><input type="text" name="responsavel" placeholder="Digite o nome do responsável" required />

                    <br><button>Cadastrar!</button>

                    <br>
                    <p class="message" style='float: left;'><a href="">Voltar</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>