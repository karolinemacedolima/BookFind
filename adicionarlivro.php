<?php
session_start();
	include_once("conexao.php");
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: indexsem.php");
		exit;
		}
	else{
	
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



<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">


<div class="legend">
<div id="titulo">
<legend>Adicionar livro para avalição</legend>	
</div>
</header>
<section>
<div class="form">
<form method="POST" action="envialivro.php" name="cadastro" enctype="multipart/form-data">
<br><br><div class="algi">
							<label >Foto: </label><input type="file" id="arquivo" name="arquivo" onChange="AlteraConteudo()">
						</div>
						<div class="opend">
							<div id="ok">
						
							</div>
						</div>
<label >Titulo:</label><input type="text" name="titulolivro" required id="titulolivro"><br><br>
<label >Autor:</label><input type="text"  name="autor" required id="autor" ><br><br>			
<label>Descrição:</label><input type="text" name="descricao" required id="descricao"><br><br>

  <input type="submit" value="Cadastrar" id="env" name="cadastrar"><br><br>

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