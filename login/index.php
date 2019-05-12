<?php require_once("../componets/head.php"); ?>
<body>
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>HORA DE FAZER LOGIN</h3>
				<p>A educação vai mudar o mundo</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="../models/autenticacao.php" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Login</label>
                                <input type="text" placeholder="examplo@gmail.com" title="Digite seu login" required="" value="" name="login" id="login" class="form-control">
                                <span class="help-block small">Seu login da Easy Learning</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="senha">Senha</label>
                                <input type="password" title="Digite sua senha" placeholder="******" required="" value="" name="senha" id="senha" class="form-control">
                                <span class="help-block small">Sua senha forte</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Lembrar minha conta </label>
                                <p class="help-block small">(apenas em computadores seguros)</p>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Entrar</button>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyrigth © 2019 by Easy Learning. Todos os direitos reservados.</p>
			</div>
		</div>   
    </div>
    <?php require_once("../componets/js.php"); ?>
</body>

</html>