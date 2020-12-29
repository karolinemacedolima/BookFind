<?php

session_start();


if(isset($_SESSION["usuarioEmail"]) || isset($_SESSION["usuarioSenha"])){
		header("Location: perfil.php");
		exit;
		}else{
		
?>	
<html>
<head>
<title> Cadastro</title>
<link rel="stylesheet" href="cadastro.css">
 <meta charset="UTF-8">
</head>
<body>

<header class="cab">
<br class="fix">
<div class="social">
<img src="facebook.png" >
<img src="instagram.png" >
<img src="twitter.png">


<nav class="cadastro">
<ul>
<li><a href="login.php" target="_self">Login</a></li>
<li><a href="cadastro.php" target="_self">Cadastre-se</a></li>
</ul>
</nav>
</div>
<br class="fix">

<div id="barra">
<img src="cabecalho.png"/>
</div>
<br class="fix">
</div>
</header>

 <script type="text/javascript">
		function validar(){
			var senha = cadastro.senha.value;
			var confirmasenha = cadastro.confirmasenha.value;
			
			if(senha != confirmasenha){
				alert('Senhas diferentes');
				cadastro.confirmasenha.focus();
				return false;
			}
				var email = cadastro.email.value;
			var confirmaemail = cadastro.confirmaemail.value;
			
			if(email != confirmaemail){
				alert('Emails diferentes');
				cadastro.confirmaemail.focus();
				return false;
			}
			
						
		}
	</script>
<div class="legend">
<fieldset>
<div class="form">
<div id="titulo">
<legend>Cadastre-se</legend>	
</div>
<form method="POST" action="inserir.php" name="cadastro" enctype="multipart/form-data">
<br><br>
<label>Nome:</label><input type="text" name="nome" required id="nome"><br><br>
<label>Sobrenome:</label><input type="text" name="sobrenome" required id="sobrenome"><br><br>
<label>Email:</label><input type="text" name="email" required id="email"><br><br>
<label>Confirme seu email:</label>
<input type="text" name="confirmaemail" required id="confirmaemail"><br><br>
<label>Senha:</label><input type="password" name="senha" required id="senha"><br><br>
<label>Confirmar Senha:</label><input type="password" name="confirmasenha" required id="confirmasenha"><br><br>
  <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</br>
</form>
<input type="submit" value="Voltar"><br>
</form>
<form action="login.php">
<input type="submit" value="Login" id="login" name="login">
</form>
</div>
</fieldset>
</div>
</body>
</html>

		<?php }?>