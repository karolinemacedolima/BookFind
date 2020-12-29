<?php
session_start();
	include_once("conexao.php");
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: indexsem.php");
		exit;
		}
	else{
		$foto=$_SESSION['foto'];
							$nome=$_SESSION['nome'];
	$idusuario=$_SESSION['idusuario'];
		$foto=$_SESSION['foto'];
			$senha = $_SESSION['senha'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcuticon" type="image/png" href="" >
<link rel="icon" type="imagem/png" href="2lfg.png" />
<link rel="stylesheet" href="cadastrousu.css">
<title>Book Find</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

<header class="cabecalho">
<div id="logo">
<a href="index.php" target="_self"><img src="2lfg.png"></a>
</div>

<div class="barramenu">

<div id="menu">
<ul>

<li><a href="sobre.php" target="_self">Sobre</a></li>
<li><a href="index.php#titulocf" target="_self">Como funciona?</a></li>
<li><a href="instituicoes.php" target="_self">Instituições</a></li>
<li><a href="perfil.php" target="_self">Perfil</a></li>





</ul>

</div>
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">


<div class="legend">
<div id="titulo">
<legend>Alterar dados</legend>	
</div>
<script type="text/javascript">
		function validar(){
			var senha = cadastro.senha.value;
			var confirmasenha = cadastro.confirmasenha.value;
			
			if(senha != confirmasenha){
				alert('Senhas diferentes');
				cadastro.confirmasenha.focus();
				return false;
			}
						
		}
	</script>
</header>
<section>
<div class="form">
<form method="POST" action="enviaeditusu.php" name="cadastro" enctype="multipart/form-data">
<br><br><div class="algi">
							<input type="file" id="arquivo" name="arquivo" onChange="AlteraConteudo()">
						</div>
						<div class="opend">
							<div id="ok">
								<?php
								
									echo"
								<img src='img/$foto' >
									";
								?>
							</div>
						</div>
<label for="email">Nome:</label><input type="text" name="nome" required id="nome" value="<?php echo $_SESSION['nome']; ?>"><br><br>
<label  for="email">Descrição:</label><input type="text"  name="desc" required id="desc" ><br><br>			
<label>Email:</label><input type="email" name="email" required id="email" value="<?php echo $_SESSION['email']; ?>"><br><br>
<label>Celular:</label><input type="number" name="celular" required id="celular" value="<?php echo $_SESSION['celular']; ?>"><br><br>
<label >Senha antiga:</label><input type="password" name="confirmasenha" required id="confirmasenha"  ><br><br>
<label>Nova senha:</label><input type="password"  name="senha" required id="senha" ><br><br>
  <input type="submit" value="Alterar" id="env" name="cadastrar"><br><br>
</br>


</form>

</div>

</div>
</section>
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

<footer>

<div class="rod">
<div class="social">

<div id="contato">
<h1>Contato</h1>
</div>

<div class="img1">
<img src="fbb.png" >
<div id="txtsoc1">
<a href=".html" target="_self">/bookfind</a>
</div>
</div>

<div class="img2">
<img src="instab.png" >
<div id="txtsoc2">
<a href=".html" target="_self">@bookfind</a>
</div>
</div>

<div class="img3">

<img src="ttb.png">
<div id="txtsoc3">
<a href=".html" target="_self">@bookfind</a>
</div>
</div>

</div>
</div>

</footer>

</body>
</html>

	<?php 
	
	}?>