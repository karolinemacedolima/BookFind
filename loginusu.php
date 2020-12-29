<?php

session_start();


if(isset($_SESSION["email"]) || isset($_SESSION["senha"])){
		header("Location: perfil.php");
		exit;
		}else{
		
?>	
<html>
<head>

<title> Login </title>
 
 <meta charset="UTF-8">
</head>
<body>

<nav class="navbar navbar-default">
<div class="social" margin-top="">
<a href="https://www.facebook.com/For-Woman-577305389369300/?ref=br_rs"><img src="face.png"  align="right" width="25" height="25"></a>
<a href="https://www.instagram.com/forwomanofc/"><img src="insta.png" align="right" width="25" height="25"></a>
<a href="https://twitter.com/forwoman7"><img src="twitter.png" align="right" width="25" height="25"></a>


</div>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Sistema de Cadastro</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="perfil.php">Perfil</a></li>
      <li><a href="#"></a></li>
      <li><a href="index.php">Home</a></li>
    </ul>
  </div>
</nav>
<br class="fix">

<br class="fix">
</div>
</header>

<br class="fix">
<br class="fix">
<br class="fix">

<div class="legend">

<div class="form-inline border" ">
<div id="titulo">
<legend align= "center">Login</legend>	
</div>
	
<form method="POST"ction="validausu.php">

<br><br>
<label>Email:</label><input type="email"  name="email" required id="email"><br><br>
<label>Senha:</label><input type="password" name="senha" required id="senha"><br><br>

<input type="submit" value="Logar" id="logar" name="logar"> <br><br>
<a href="cadastrousu.php" class="btn btn-primary mb-2" >Cadastre-se</a>


</form>
</div>
</body>
</html>

		<?php }?>