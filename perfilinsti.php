<?php
session_start();
	include_once("conexao.php");

	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: logininsti.php");
		exit;
		}
	else{
	
?>
<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
  <meta charset="utf-8">
  
</head>
<body>
  
  <nav class="navbar navbar-default">
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
  
 <div class="container-fluid bg-1 text-center">
  <h3 class="margin">Perfil</h3>
<?php 

						
						?>
  <h3><?php
    $foto=$_SESSION['foto'];
							$nome=$_SESSION['nome'];
							echo "Olá: $nome";
							echo"
					<img src='./img/$foto' class='editImg'>
						";
						?></h3>
						 
</div> 

<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Descrição</h3>
  <?php echo $_SESSION['descricao'];?>

  
</body>
</html>
        
           
				
				<div class="desloga" >
				  <p><a href="sair.php" class="btn btn-primary mb-2">Deslogar</a><a href="estante.php" class="btn btn-default btn-lg">Ver estante</a></p>
				</div>
				
			</div>
		</div>
	</body>
</html>
<?php
	}
?>