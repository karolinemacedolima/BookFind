<?php

session_start();


if(isset($_SESSION["email"]) || isset($_SESSION["senha"])){
		header("Location: perfilinsti.php");
		exit;
		}else{
		
?>	
<html>
<head>

<title> Login </title>
 
 <meta charset="UTF-8">
</head>
<body>




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
	
<form method="POST"align="center" action="validainsti.php">

<br><br>
<label class="mr-sm-2">Email:</label><input type="email"  class="form-control mb-2 mr-sm-2"  name="email" required id="email"><br><br>
<label class="mr-sm-2">Senha:</label><input type="password" class="form-control mb-2 mr-sm-2" name="senha" required id="senha"><br><br>

<input type="submit" value="Logar" id="logar" class="btn btn-primary mb-2"  name="logar"> <br><br>
<a href="cadastrousu.php" class="btn btn-primary mb-2" >Cadastre-se</a>


</form>
</div>
</body>
</html>

		<?php }?>